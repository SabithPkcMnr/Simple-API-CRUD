# Simple-API-CRUD
This is a simple API written in PHP to access student database using the CRUD operations to view and manage each node.
```js
CRUD is the acronym for CREATE, READ, UPDATE and DELETE
```


## How To Make It Work?
Download the [MyDatabase.php](/MyDatabase.php) file and upload it inside any folder using the file manager. Make sure you change the database information in the PHP file. You will have to enter your database name, username and password that you set while creating the database. Now from the phpMyAdmin create new table by the name `students` with columns such as `id`, `name`, `age`, `grade` and save it. Now run the API request directly on your browser address bar or using any API testing tools like [Postman](https://postman.com) or instantly access via [ReqBin](https://reqbin.com)

## Make API Request
#### Get All Students (GET Request)
```url
https://example.com/MyDatabase.php?action=getAllStudents
```

#### Add New Student (GET Request)
```url
https://example.com/MyDatabase.php?action=addUser&name=John&age=25
```

#### Edit Student Info (GET Request)
```url
https://example.com/MyDatabase.php?action=editUser&id=1&name=Jane&age=30
```

#### Delete A Student (GET Request)
```url
https://example.com/MyDatabase.php?action=deleteUser&id=1
```

## Preview (Get All Students)
| id        | name          |  age           | grade |
| --------- |:-------------:| :-------------:|:-----:|
| 1         | Sabith Pkc    |  24            | 1st   |
| 2         | Vishnu        |  25            | 7th   |
| 3         | George Mathew |  30            | 5th   |
<img src="/Students_Response.png">
