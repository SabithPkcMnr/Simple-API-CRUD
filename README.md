# Simple-API-CRUD
This is a simple API to fetch all students from a school database along with CRUD functions to manage the students

## How To Make It Work?
Download the [MyDatabase.php](/MyDatabase.php) file and upload it <a href="https://github.com/SabithPkcMnr">inside</a> any folder using the file manager. Make sure [you](https://www.postman.com) change the database information in the PHP file. You will have to enter your database name, username and password that you set while creating the database. Now from the phpMyAdmin create new table by the name `students` with columns such as `id`, `name`, `age`, `grade` and save it. Now run the API request directly on your browser address bar or using any API testing tools like [Postman](https://postman.com) or instantly access via [ReqBin](https://reqbin.com)

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
<img src="/Students_Response.png">
