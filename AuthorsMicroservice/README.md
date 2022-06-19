# Author API

A API with the basics CRUD operation for Authors entities.

## API Paths

### List Authors `GET /authors`
Return a array of Authors.

#### Response 

**Success**
```json
{
    "code": 200,
    "data" : [
        {
            "id": 10,
            "name": "Ryan Schmitt",
            "gender": "male",
            "country": "Mauritania",
            "created_at": "2022-06-19T12:48:25.000000Z",
            "updated_at": "2022-06-19T12:48:25.000000Z"
        }
    ],  
}
```

### Create Author `POST /authors`
Create a new Author.

### Request body

Name | Type | Description | Required 
-----|------|-------------|----------
name | string | The name of the author | &#x2713;
contry | string | The country of the author | &#x2713;
gender | string | The gender of the author `male or female` | &#x2713;

### Response

**Success**
```json
{
    "code": 201,
	"data": {
		"id": 51,
		"name": "Johnny Parker",
		"gender": "male",
		"country": "Cayman Islands",
		"updated_at": "2022-06-19T14:27:43.000000Z",
		"created_at": "2022-06-19T14:27:43.000000Z"
	},
}
```

**Invalid Request**
```json
{
"code": 422,
    "error": {
        "name": [
            "The name field is required."
        ],
        "country": [
            "The country field is required."
        ],
        "gender": [
            "The gender field is required.",
            "The selected gender is invalid."
        ]
    },
}
```

### Show Author `GET /authors/{id}`
Return a Author with the given id.

#### Request Params

Name | Type | Description 
-----|------|-------------
id   | integer | The id of the Author.

#### Response

**Success**
```json
{
    "code": 200,
    "data" : {
        "id": 10,
        "name": "Ryan Schmitt",
        "gender": "male",
        "country": "Mauritania",
        "created_at": "2022-06-19T12:48:25.000000Z",
        "updated_at": "2022-06-19T12:48:25.000000Z"
    }  
}
```

**Not Found**
```json
{
    "code": 404,
    "error": "No instance of author was found",
}
```

### Update Author `PUT /authors/{id}` `PATCH /authors/{id}`

Update a Author with the given id.

#### Request Params

Name | Type | Description 
-----|------|-------------
id   | integer | The id of the Author.

### Request body

Name | Type | Description | Required 
-----|------|-------------|----------
name | string | The name of the author | &#x2717;
contry | string | The country of the author | &#x2717;
gender | string | The gender of the author `male | female` | &#x2717;

#### Response

**Success**
```json
{
    "code": 200,
    "data" : {
        "id": 10,
        "name": "Ryan Schmitt",
        "gender": "male",
        "country": "Mauritania",
        "created_at": "2022-06-19T12:48:25.000000Z",
        "updated_at": "2022-06-19T12:48:25.000000Z"
    }  
}
```

**Not Found**
```json
{
    "code": 404,
    "error": "No instance of author was found",
}
```

**Nothing to change**
```json
{
    "code": 422,
    "error": "At least one value must be different from the current one",
}
```

### Delete Author `DELETE /authors/{id}`

Delete a Author with the given id.

#### Request Params

Name | Type | Description 
-----|------|-------------
id   | integer | The id of the Author.

#### Response

**Success**
```json
{
    "code": 200,
    "data" : {
        "id": 10,
        "name": "Ryan Schmitt",
        "gender": "male",
        "country": "Mauritania",
        "created_at": "2022-06-19T12:48:25.000000Z",
        "updated_at": "2022-06-19T12:48:25.000000Z"
    }  
}
```

**Not Found**
```json
{
    "code": 404,
    "error": "No instance of author was found",
}
```
