Translate your WebSite! 

If you have domain from abroad you may translate text on this page! 

Usage: 
You must create file data.php with data to your database and contain to "src/".

```php
const DB_NAME = 'your_db_name';
const DB_HOST = 'your_host_name';
const USER = 'your_user_name';
const PASS = 'your_user_password';
const DOMAIN = 'your_domain';
```


Next you must create folder in src/HTML directory with part of HTML translate text.

Example: create file nav.php with text contain in navigation part of page.

```php
foreach($connect->get('nav') as $c){
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
	This is '.addText($nav).' page
';
```

If you would like add new redirect you must create file.php.
file.php
```php
	use Src\Bootstrap as Bootstrap;
	new Bootstrap('findYourMethod');
``` 

Next you must create new Class to contain logic
```php
	class YourClass{
		public function method(){
			//logic
		}
	}
```
and you may use Strategy Pattern in Bootstrap class to choose your class and method

example:

```php
namespace Src;
use Src\User as User;
use Src\Text as Text;
use Src\Connect as Connect;
use PathToYourClass;

class Bootstrap{
	public function __construct($event, array $array = NULL){
		switch($event){
			case 'session':
				return (new User(new Connect))->addToSession($array[0], $array[1]);
				break;
			case 'logOff':
				return (new User())->logOff();
				break;
			case 'updateText':
				return (new Text(new Connect))->update($array[0], $array[1]);
				break;
			case 'findYourMethod':
				return (new YourClass())->method(array ['param']);
				break
			default;
		}		
	}
}
```