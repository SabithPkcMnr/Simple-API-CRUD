# Simple-API-CRUD
This is a simple API to fetch all students from a school database along with CRUD functions to manage the students
# How To Make It Work?
Download the MyDatabase.php and upload it inside any folder using the file manager. Make sure you change the database information in the PHP file.

## How To Make It Work?
Download the MyDatabase.php and upload it inside any folder using the file manager. Make sure you change the database information in the PHP file.

## Make API Request
### Get All Students (GET Request)
```url
https://example.com/MyDatabase.php?action=getAllStudents
```

### Add New Student (GET Request)
```php
https://example.com/MyDatabase.php?action=addUser&name=John&age=25
```

### Edit Student Info (GET Request)
```java
https://example.com/MyDatabase.php?action=editUser&id=1&name=Jane&age=30
```

### Delete A Student (GET Request)
```http
https://example.com/MyDatabase.php?action=deleteUser&id=1
```
