# Book API

A API with the basics CRUD operation for Books entities.

## API Paths

### List Books `GET /books`
Return a array of Books.

#### Response 

**Success**
```json
{
    "code": 200,
    "data" : [
        {
            "id": 2,
            "title": "Ut explicabo non.",
            "description": "Tempore illo facere magni quis.",
            "price": "124",
            "author_id": "1",
            "created_at": "2022-06-19T15:03:20.000000Z",
            "updated_at": "2022-06-19T15:03:20.000000Z"
        }
    ],  
}
```

### Create Book `POST /books`
Create a new Book.

### Request body

Name | Type | Description | Required 
-----|------|-------------|----------
title | string | The title of the book | &#x2713;
description | string | The descrption of the book | &#x2713;
price | number | The price of the book. | &#x2713;
author_id | number | The id of the author. | &#x2713;

### Response

**Success**
```json
{
    "code": 201,
	"data": {
        "id": 2,
        "title": "Ut explicabo non.",
        "description": "Tempore illo facere magni quis.",
        "price": "124",
        "author_id": "1",
        "created_at": "2022-06-19T15:03:20.000000Z",
        "updated_at": "2022-06-19T15:03:20.000000Z"
	},
}
```

**Invalid Request**
```json
{
    "error": {
        "title": [
            "The title field is required."
        ],
        "description": [
            "The description field is required."
        ],
        "price": [
            "The price field is required.",
            "The price id must be at least 1."
        ],
        "author_id": [
            "The author field is required.",
            "The author id must be at least 1."
        ]
    },
    "code": 422
}
```

### Show Book `GET /books/{id}`
Return a Book with the given id.

#### Request Params

Name | Type | Description 
-----|------|-------------
id   | integer | The id of the Book.

#### Response

**Success**
```json
{
    "code": 200,
    "data" : {
        "id": 5,
        "title": "Occaecati blanditiis ipsa est ut.",
        "description": "Voluptatem molestiae neque consequatur ratione ea possimus.",
        "price": "53",
        "author_id": "41",
        "created_at": "2022-06-19T15:03:20.000000Z",
        "updated_at": "2022-06-19T15:03:20.000000Z"
    }  
}
```

**Not Found**
```json
{
    "code": 404,
    "error": "No instance of book was found",
}
```

### Update Book `PUT /books/{id}` `PATCH /books/{id}`

Update a Book with the given id.

#### Request Params

Name | Type | Description 
-----|------|-------------
id   | integer | The id of the Book.

### Request body

Name | Type | Description | Required 
-----|------|-------------|----------
title | string | The title of the book | &#x2713;
description | string | The descrption of the book | &#x2713;
price | number | The price of the book. | &#x2713;
author_id | number | The id of the author. | &#x2713;

#### Response

**Success**
```json
{
    "code": 200,
    "data" : {
        "id": 5,
        "title": "Occaecati blanditiis ipsa est ut.",
        "description": "Voluptatem molestiae neque consequatur ratione ea possimus.",
        "price": "53",
        "author_id": "41",
        "created_at": "2022-06-19T15:03:20.000000Z",
        "updated_at": "2022-06-19T15:03:20.000000Z"
    }  
}
```

**Not Found**
```json
{
    "code": 404,
    "error": "No instance of book was found",
}
```

**Nothing to change**
```json
{
    "code": 422,
    "error": "At least one value must be different from the current one",
}
```

### Delete Book `DELETE /books/{id}`

Delete a Book with the given id.

#### Request Params

Name | Type | Description 
-----|------|-------------
id   | integer | The id of the Book.

#### Response

**Success**
```json
{
    "code": 200,
    "data" : {
       "id": 5,
        "title": "Occaecati blanditiis ipsa est ut.",
        "description": "Voluptatem molestiae neque consequatur ratione ea possimus.",
        "price": "53",
        "author_id": "41",
        "created_at": "2022-06-19T15:03:20.000000Z",
        "updated_at": "2022-06-19T15:03:20.000000Z"
    }  
}
```

**Not Found**
```json
{
    "code": 404,
    "error": "No instance of book was found",
}
```
