---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_7c1e0ac0639bb1be6ffd9043492c477a -->
## _ignition/health-check
> Example request:

```bash
curl -X GET -G "http://localhost/_ignition/health-check" 
```

```javascript
const url = new URL("http://localhost/_ignition/health-check");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/health-check`


<!-- END_7c1e0ac0639bb1be6ffd9043492c477a -->

<!-- START_e5f8cf3530eb18016c5b38d338c824a4 -->
## _ignition/execute-solution
> Example request:

```bash
curl -X POST "http://localhost/_ignition/execute-solution" 
```

```javascript
const url = new URL("http://localhost/_ignition/execute-solution");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST _ignition/execute-solution`


<!-- END_e5f8cf3530eb18016c5b38d338c824a4 -->

<!-- START_c7878c22064327a038e101c534d2690d -->
## _ignition/share-report
> Example request:

```bash
curl -X POST "http://localhost/_ignition/share-report" 
```

```javascript
const url = new URL("http://localhost/_ignition/share-report");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST _ignition/share-report`


<!-- END_c7878c22064327a038e101c534d2690d -->

<!-- START_022a636baa67209b79bda81cb8c2b0c5 -->
## _ignition/scripts/{script}
> Example request:

```bash
curl -X GET -G "http://localhost/_ignition/scripts/1" 
```

```javascript
const url = new URL("http://localhost/_ignition/scripts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/scripts/{script}`


<!-- END_022a636baa67209b79bda81cb8c2b0c5 -->

<!-- START_f58213cd71dff813cecd421259a65e22 -->
## _ignition/styles/{style}
> Example request:

```bash
curl -X GET -G "http://localhost/_ignition/styles/1" 
```

```javascript
const url = new URL("http://localhost/_ignition/styles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/styles/{style}`


<!-- END_f58213cd71dff813cecd421259a65e22 -->

<!-- START_0413e2e68e6b9925e158d12637d2f830 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/item" 
```

```javascript
const url = new URL("http://localhost/api/item");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "pr_id": 1,
        "bundle_id": null,
        "description": "SAMPLE DESCRIPTION",
        "title": "SAMPLE TITLE",
        "quantity": "1",
        "unit": "kg",
        "unitCost": "100",
        "amount": "100",
        "created_at": "2019-09-28 09:57:33",
        "updated_at": "2019-09-28 09:57:33"
    }
]
```

### HTTP Request
`GET api/item`


<!-- END_0413e2e68e6b9925e158d12637d2f830 -->

<!-- START_7fefd730898a4d951cad6733d4d477ca -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/item" \
    -H "Content-Type: application/json" \
    -d '{"title":"perspiciatis","description":"et","quantity":13,"unit":"porro","unitCost":525394.88159,"amount":310383043.8176274,"po_id":"ut","bundle_id":"dignissimos"}'

```

```javascript
const url = new URL("http://localhost/api/item");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "perspiciatis",
    "description": "et",
    "quantity": 13,
    "unit": "porro",
    "unitCost": 525394.88159,
    "amount": 310383043.8176274,
    "po_id": "ut",
    "bundle_id": "dignissimos"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/item`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    description | string |  required  | 
    quantity | integer |  required  | 
    unit | string |  optional  | required. Example kg
    unitCost | float |  optional  | required. Example 100.00
    amount | float |  required  | value is equal to quantity x unitCost
    po_id | Procurement |  optional  | Officer for field prepared by
    bundle_id | optional |  optional  | 

<!-- END_7fefd730898a4d951cad6733d4d477ca -->

<!-- START_dca1351b320ea5fdaf130bb44136a25d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/item/1" 
```

```javascript
const url = new URL("http://localhost/api/item/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "pr_id": 1,
    "bundle_id": null,
    "description": "SAMPLE DESCRIPTION",
    "title": "SAMPLE TITLE",
    "quantity": "1",
    "unit": "kg",
    "unitCost": "100",
    "amount": "100",
    "created_at": "2019-09-28 09:57:33",
    "updated_at": "2019-09-28 09:57:33"
}
```

### HTTP Request
`GET api/item/{item}`


<!-- END_dca1351b320ea5fdaf130bb44136a25d -->

<!-- START_8c2afc21f17f914088b278fd47067c0e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/item/1" 
```

```javascript
const url = new URL("http://localhost/api/item/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/item/{item}`

`PATCH api/item/{item}`


<!-- END_8c2afc21f17f914088b278fd47067c0e -->

<!-- START_660a04aa88b794efd55c11d388a19fcf -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/item/1" 
```

```javascript
const url = new URL("http://localhost/api/item/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/item/{item}`


<!-- END_660a04aa88b794efd55c11d388a19fcf -->

<!-- START_2e1e700449e8660e787b810846801751 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/purchaseRequest" 
```

```javascript
const url = new URL("http://localhost/api/purchaseRequest");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "po_id": 1,
        "no": "ABC124",
        "bundle_id": null,
        "date_ordered": "2019-09-30",
        "top": 30,
        "warranty": "2019-10-30",
        "date_needed": "2019-10-10",
        "remarks": null,
        "delivery_address": "Unit 123,Building",
        "created_at": "2019-09-28 09:57:32",
        "updated_at": "2019-09-28 09:57:32"
    }
]
```

### HTTP Request
`GET api/purchaseRequest`


<!-- END_2e1e700449e8660e787b810846801751 -->

<!-- START_d3ec7ab1bb948dba5330577502c01786 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/purchaseRequest" 
```

```javascript
const url = new URL("http://localhost/api/purchaseRequest");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/purchaseRequest`


<!-- END_d3ec7ab1bb948dba5330577502c01786 -->

<!-- START_7d772e57ec6f5d3f00fbf6821020bd98 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/purchaseRequest/1" 
```

```javascript
const url = new URL("http://localhost/api/purchaseRequest/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "po_id": 1,
    "no": "ABC124",
    "bundle_id": null,
    "date_ordered": "2019-09-30",
    "top": 30,
    "warranty": "2019-10-30",
    "date_needed": "2019-10-10",
    "remarks": null,
    "delivery_address": "Unit 123,Building",
    "created_at": "2019-09-28 09:57:32",
    "updated_at": "2019-09-28 09:57:32",
    "items": [
        {
            "id": 1,
            "pr_id": 1,
            "bundle_id": null,
            "description": "SAMPLE DESCRIPTION",
            "title": "SAMPLE TITLE",
            "quantity": "1",
            "unit": "kg",
            "unitCost": "100",
            "amount": "100",
            "created_at": "2019-09-28 09:57:33",
            "updated_at": "2019-09-28 09:57:33"
        }
    ],
    "prepared_by": {
        "id": 1,
        "name": "Mr. Procurement Officer",
        "created_at": "2019-09-28 09:57:31",
        "updated_at": "2019-09-28 09:57:31"
    }
}
```

### HTTP Request
`GET api/purchaseRequest/{purchaseRequest}`


<!-- END_7d772e57ec6f5d3f00fbf6821020bd98 -->

<!-- START_812193b05a03278378410579633419af -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/purchaseRequest/1" 
```

```javascript
const url = new URL("http://localhost/api/purchaseRequest/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/purchaseRequest/{purchaseRequest}`

`PATCH api/purchaseRequest/{purchaseRequest}`


<!-- END_812193b05a03278378410579633419af -->

<!-- START_3f87fdc2a4ca36a51e7c1b33b688d760 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/purchaseRequest/1" 
```

```javascript
const url = new URL("http://localhost/api/purchaseRequest/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/purchaseRequest/{purchaseRequest}`


<!-- END_3f87fdc2a4ca36a51e7c1b33b688d760 -->

<!-- START_0f3258c5e882fde680b2358c0cfdcd41 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/procurementOfficer" 
```

```javascript
const url = new URL("http://localhost/api/procurementOfficer");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Mr. Procurement Officer",
        "created_at": "2019-09-28 09:57:31",
        "updated_at": "2019-09-28 09:57:31"
    }
]
```

### HTTP Request
`GET api/procurementOfficer`


<!-- END_0f3258c5e882fde680b2358c0cfdcd41 -->

<!-- START_14c364aec29b18ce6cbd75a7567b9a8a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/procurementOfficer" 
```

```javascript
const url = new URL("http://localhost/api/procurementOfficer");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/procurementOfficer`


<!-- END_14c364aec29b18ce6cbd75a7567b9a8a -->

<!-- START_8efd49b67ad357b29f3d6b8a1ad36384 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/procurementOfficer/1" 
```

```javascript
const url = new URL("http://localhost/api/procurementOfficer/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Mr. Procurement Officer",
    "created_at": "2019-09-28 09:57:31",
    "updated_at": "2019-09-28 09:57:31"
}
```

### HTTP Request
`GET api/procurementOfficer/{procurementOfficer}`


<!-- END_8efd49b67ad357b29f3d6b8a1ad36384 -->

<!-- START_fbc5886ac45d06ee883504fbde8264bd -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/procurementOfficer/1" 
```

```javascript
const url = new URL("http://localhost/api/procurementOfficer/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/procurementOfficer/{procurementOfficer}`

`PATCH api/procurementOfficer/{procurementOfficer}`


<!-- END_fbc5886ac45d06ee883504fbde8264bd -->

<!-- START_48abcddfb2ecc47df8ed0049b43a1c41 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/procurementOfficer/1" 
```

```javascript
const url = new URL("http://localhost/api/procurementOfficer/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/procurementOfficer/{procurementOfficer}`


<!-- END_48abcddfb2ecc47df8ed0049b43a1c41 -->

<!-- START_3ef8b7ef66b9b6dbdeee318a0edd8ec7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/supplier" 
```

```javascript
const url = new URL("http://localhost/api/supplier");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/supplier`


<!-- END_3ef8b7ef66b9b6dbdeee318a0edd8ec7 -->

<!-- START_77f932b80ed5d9aad8ffc0b785061318 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/supplier" 
```

```javascript
const url = new URL("http://localhost/api/supplier");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/supplier`


<!-- END_77f932b80ed5d9aad8ffc0b785061318 -->

<!-- START_73b78fcd5846de2edaa5e14c89760de4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/supplier/1" 
```

```javascript
const url = new URL("http://localhost/api/supplier/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Supplier] 1"
}
```

### HTTP Request
`GET api/supplier/{supplier}`


<!-- END_73b78fcd5846de2edaa5e14c89760de4 -->

<!-- START_e869b3ba3123775bddeccb9470123eb3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/supplier/1" 
```

```javascript
const url = new URL("http://localhost/api/supplier/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/supplier/{supplier}`

`PATCH api/supplier/{supplier}`


<!-- END_e869b3ba3123775bddeccb9470123eb3 -->

<!-- START_87018cb02d8272074c0da980d45f8700 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/supplier/1" 
```

```javascript
const url = new URL("http://localhost/api/supplier/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/supplier/{supplier}`


<!-- END_87018cb02d8272074c0da980d45f8700 -->


