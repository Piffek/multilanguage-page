Translate your WebSite! 

If you have domain from abroad you may translate text on this page! 

Usage: 
You must create file data.php with data to your database and contain to "src/".

```php
const DB_NAME = 'your_db_name';
const DB_HOST = 'your_host_name';
const USER = 'your_user_name';
const PASS = 'your_user_password';
```

Next you must create method to get data of database using PDO in file connect.php

```php
public function nav(){
    $stmt = $this->dbh->prepare('SELECT `nav` FROM pl');
    $stmt->execute();
    return $stmt->fetchAll();
}
```

Next you must create folder in src/HTML directory with part of HTML translate text.

Example: create file nav.php with text contain in navigation part of page.

```php
foreach($connect->nav() as $c){
    echo $c['nav'];
}
``` 

Next create variable in main page (index.php) contain part of HTML with nav.php file.

```php

$nav = requireFile('src/Html/nav.php', $connect);

```

You may use this variable in HTML

Example:

```php
echo '
	This is '.$nav.' this page
';
```