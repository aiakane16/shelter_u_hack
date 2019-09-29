#!/usr/bin/env python
# coding: utf-8

# In[24]:


import pandas as pd
import numpy as np
import requests
import random
from math import floor
from flask import Flask, request, redirect, url_for, flash, jsonify
from mlxtend.frequent_patterns import fpgrowth
api_link = 'http://80b42f96.ngrok.io'


# In[25]:


def getPurchaseHistory():
    response = requests.get(api_link+'/api/invoice')
    items = pd.read_json(response.content)
    final_item = []
    for i in range(len(items)):
        row = items.iloc[i,:]
        item = pd.DataFrame([x for x in row['items']])
        item['supplier_id'] = [row['supplier_id'] for i in range(len(item))]
        final_item.append(item)

    return pd.concat(final_item)


# In[26]:


def encode(x):
    if x <= 0:
        return 0
    else:
        return 1


# In[27]:


def generateSparse(df):
    basket = (df.groupby(['invoice_id','id'])['quantity'].sum().unstack().fillna(0))
    basket = basket.applymap(encode)
    return basket.to_sparse(0)


# In[28]:


# def computeSupport(a, b, sparse):
#     count = 0
#     for i in range(len(sparse)):
#         if sparse.iloc[i,:][a] == sparse.iloc[i,:][b]:
#             if sparse.iloc[i,:][a] == 1:
#                 count+=1
#     return count/sparse.shape[0]


# In[29]:


def createItemBundles(df_all, items):
    sp_basket = generateSparse(df_all)
    similar = fpgrowth(sp_basket, min_support = 0.1)
    itembundles = []
    similar['length'] = similar['itemsets'].apply(lambda x: len(x))
    for bundle in similar[similar['length'] > 1]['itemsets']:
        for i in items_in_bundle:
            count = 0
            for item in items:
                if item == i:
                    count+=1
            if count == len(items_in_bundle): #if all items in the frequent items are in purchase items
                itembundles.append(x)
                for i in bundle:
                    items.remove('i')
    #any unmatched/unbundled items are treated as individual bundles
    for item in items:
        itembundles.append(item)
        
    return itembundles


# In[30]:


def sampleSuppliers():
    #get names of suppliers
    res = requests.get(api_link+'/api/supplier')
    response = pd.read_json(res.content)
    print(response)
    
    # if suppliers > 100, divide the population into four strata
    # then, sample 25 suppliers per strata
    if len(response) > 100:
        i = floor(len(response)/4)
        quart1 = response.iloc[0:i*1]
        quart2 = response.iloc[i*1:i*2]
        quart3 = response.iloc[i*2:i*3]
        quart4 = response.iloc[i*3: len(response)]
        
        random1 = quart1.iloc[0:25]
        random2 = quart2.iloc[0:25]
        random3 = quart3.iloc[0:25]
        random4 = quart4.iloc[0:25]
        
        #lottery winners!
        return pd.concat([random1, random2, random3, random4])
    
    else:
        return response


# In[35]:


def checkInventory(sample, itembundles):
    scores = []
    supplier_id = sample.id
    for id_ in supplier_id:
        score = 0
        response = requests.get(api_link+'/api/supplier/'+str(id_)+'/item')
        supplier_items = pd.read_json(response.content).id
        for sitem in supplier_items:
            for itembundle in itembundles:
                for item in itembundle:
                    if sitem == item:
                        score +=1
        
        scores.append({id:score})
    return qualified_suppliers


# In[36]:


def rankSupplier(itembundle, suppliers):
    
    
    return supplier_ranks


# In[37]:


def assignBundles(supplier):
    
    return itembundles_final


# In[37]:


'''
MAIN
'''
app = Flask(__name__)

@app.route('/api/purchaseRequest', methods = ['POST'])
def generatePurchaseOrders():
    #request
    #items = 

    #get Purchase History
    history = getPurchaseHistory()
    df_all = history.append(items)
    df_all.id = [str(i) if type(i) != str else i for i in df_all.id]

    #generate Bundles
    itembundles = createItemBundles(df_all,list(items['id']))

    #sample suppliers
    sample = sampleSuppliers()

    #check inventory
    qualified_supplier = checkInventory(sample, itembundles)

    #rank suppliers
    supplier_ranks = rankSuppliers(qualified_suppliers)

    #assign/finalize bundles
    itembundle_final = assignBundles()

    #response
    return itembundle_final

if __name__ == '__main__':
    app.run(debug=True)


# In[44]:


# response = requests.get('http://57dfe75c.ngrok.io/api/supplier/1/invoices')
# response = requests.get('http://57dfe75c.ngrok.io/api/supplier/')
# response = requests.get('https://57dfe75c.ngrok.io/api/invoice')


# In[39]:


#request
items = pd.read_csv('items.csv').drop(columns = 'Unnamed: 0')
items.rename(columns = {'Invoice':'invoice_id', 'StockCode': 'id', 'Quantity':'quantity'}, inplace = True)

#get Purchase History
history = getPurchaseHistory()
df_all = history[['invoice_id', 'id', 'quantity']].append(items)
df_all.id = [str(i) if type(i) != str else i for i in df_all.id]

#generate Bundles
itembundles = createItemBundles(df_all,list(items['id']))

#sample suppliers
sample = sampleSuppliers()

#check inventory
qualified_supplier = checkInventory(sample, itembundles)

#rank suppliers
#supplier_ranks = rankSuppliers(qualified_suppliers)

#assign/finalize bundles
#itembundle_final = assignBundles()


# In[38]:


sampleSuppliers()


# In[12]:


requests.get('http://a49bced5.ngrok.io/api/supplier')


# In[21]:


request.get('http://a49bced5.ngrok.io/api/supplier/1/item')


# In[23]:


a = ['abdfa','adfadfa','adfadf'] + ['adfadf']


# In[21]:


random.sample(a, k=1)


# In[24]:


a


# In[23]:


getPurchaseHistory()


# In[ ]:




