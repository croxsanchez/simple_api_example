# simple_api_example
Simple API REST example

# Instructions

In order to use this API you have to execute the following call
// https://localhost/index.php/{MODULE_NAME}/{METHOD_NAME}?limit={LIMIT_VALUE}

Example: https://localhost/index.php/user/list?limit=20

Example output:

```
[
   {
      "user_id":1,
      "username":"John",
      "user_email":"john@gmail.com",
      "user_status":0
   },
   {
      "user_id":2,
      "username":"Charles",
      "user_email":"charles@gmail.com",
      "user_status":1
   },
   {
      "user_id":3,
      "username":"Louis",
      "user_email":"louis@gmail.com",
      "user_status":1
   },
   {
      "user_id":4,
      "username":"Gerard",
      "user_email":"gerard@gmail.com",
      "user_status":0
   }
]
```
