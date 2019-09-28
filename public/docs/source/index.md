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
[]
```

### HTTP Request
`GET api/item`


<!-- END_0413e2e68e6b9925e158d12637d2f830 -->

<!-- START_7fefd730898a4d951cad6733d4d477ca -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/item?location_id=atque&user_id=me&page=4" \
    -H "Content-Type: application/json" \
    -d '{"user_id":9,"room_id":"consequatur","forever":false}'

```

```javascript
const url = new URL("http://localhost/api/item");

    let params = {
            "location_id": "atque",
            "user_id": "me",
            "page": "4",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 9,
    "room_id": "consequatur",
    "forever": false
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
    user_id | integer |  required  | The id of the user.
    room_id | string |  optional  | The id of the room.
    forever | boolean |  optional  | Whether to ban the user forever.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    location_id |  required  | The id of the location.
    user_id |  required  | The id of the user.
    page |  required  | The page number.

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


> Example response (404):

```json
{
    "message": "No query results for model [App\\Item] 1"
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

<!-- START_41cecd4d4c047855daff59caaab2701a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/purchaseOrder" 
```

```javascript
const url = new URL("http://localhost/api/purchaseOrder");

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
        "bundle_id": null,
        "date_ordered": "2019-09-30",
        "top": 30,
        "warranty": "2019-10-30",
        "date_needed": "2019-10-10",
        "remarks": null,
        "delivery_address": "Unit 123,Building",
        "created_at": "2019-09-28 06:40:11",
        "updated_at": "2019-09-28 06:40:11"
    },
    {
        "id": 2,
        "po_id": 1,
        "bundle_id": null,
        "date_ordered": "2019-09-30",
        "top": 30,
        "warranty": "2019-10-30",
        "date_needed": "2019-10-10",
        "remarks": null,
        "delivery_address": "Unit 123,Building",
        "created_at": "2019-09-28 06:41:06",
        "updated_at": "2019-09-28 06:41:06"
    }
]
```

### HTTP Request
`GET api/purchaseOrder`


<!-- END_41cecd4d4c047855daff59caaab2701a -->

<!-- START_98e58aecd58ce699f4e2ea17c70c1fba -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/purchaseOrder" 
```

```javascript
const url = new URL("http://localhost/api/purchaseOrder");

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
`POST api/purchaseOrder`


<!-- END_98e58aecd58ce699f4e2ea17c70c1fba -->

<!-- START_8de3798435a0f719ce772a3e81504fde -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/purchaseOrder/1" 
```

```javascript
const url = new URL("http://localhost/api/purchaseOrder/1");

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
    "bundle_id": null,
    "date_ordered": "2019-09-30",
    "top": 30,
    "warranty": "2019-10-30",
    "date_needed": "2019-10-10",
    "remarks": null,
    "delivery_address": "Unit 123,Building",
    "created_at": "2019-09-28 06:40:11",
    "updated_at": "2019-09-28 06:40:11"
}
```

### HTTP Request
`GET api/purchaseOrder/{purchaseOrder}`


<!-- END_8de3798435a0f719ce772a3e81504fde -->

<!-- START_f1c1472b928549e8a4747d6aac43d6cc -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/purchaseOrder/1" 
```

```javascript
const url = new URL("http://localhost/api/purchaseOrder/1");

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
`PUT api/purchaseOrder/{purchaseOrder}`

`PATCH api/purchaseOrder/{purchaseOrder}`


<!-- END_f1c1472b928549e8a4747d6aac43d6cc -->

<!-- START_2852ac0317d3288daa80d150b20d63ad -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/purchaseOrder/1" 
```

```javascript
const url = new URL("http://localhost/api/purchaseOrder/1");

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
`DELETE api/purchaseOrder/{purchaseOrder}`


<!-- END_2852ac0317d3288daa80d150b20d63ad -->


