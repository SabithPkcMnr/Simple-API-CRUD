# Simple-API-CRUD
This is a simple API to fetch all students from a school database along with CRUD functions to manage the students

## How To Make It Work?
Download the <a href="/MyDatabase.php">MyDatabase.php</a></h4> and upload it inside any folder using the file manager. Make sure you change the database information in the PHP file.

## Make API Request
### Get All Students (GET Request)
```url
https://example.com/MyDatabase.php?action=getAllStudents
```

### Add New Student (GET Request)
```url
https://example.com/MyDatabase.php?action=addUser&name=John&age=25
```

### Edit Student Info (GET Request)
```url
https://example.com/MyDatabase.php?action=editUser&id=1&name=Jane&age=30
```

### Delete A Student (GET Request)
```url
https://example.com/MyDatabase.php?action=deleteUser&id=1
```

## Preview (Get All Students)
<img src="/Students_Response.png">
