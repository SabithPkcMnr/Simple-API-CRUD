# Simple-API-CRUD
This is a simple API to fetch all students from a school database along with CRUD functions to manage the students
# How To Make It Work?
Download the MyDatabase.php and upload it inside any folder using the file manager. Make sure you change the database information in the PHP file.

## Implementation
Add the audience network sdk dependency to build.gradle(Module: app)
```
implementation 'com.facebook.android:audience-network-sdk:6.2.0'
```


Initialize the AudienceNetworkAds class.
```php
AudienceNetworkAds.initialize(this);
```
