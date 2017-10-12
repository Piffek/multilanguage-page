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

Next create variable in main page (index.php) contain part of HTML of nav.php file.

```php

$nav = requireFile('src/Html/nav.php', $connect);

```

You may use this variable in HTML and edit example text in navbar, menu etc.

Example:

```php
echo '
	This is '.addText($nav).' page
';
```


Of if you show alone text
$nav = explode('%', requireToVar('src/Html/nav.php', $connect));
```php
echo '
	This is '.$nav[0].' page
';
```

If you would like add new redirect you must create file.php.
file.php
```php
use Src\Bootstrap as Bootstrap;
return (new Bootstrap('findYourMethod'))->check()->yourMethod();
``` 

Next you must create new Class to contain logic
```php
class YourClass{
	public function yourMethod(){
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
use Namespace\YourClass;

class Bootstrap{
    public $obj;
	public function __construct(string $event, array $array = NULL){
		switch($event){
			case 'session':
			case 'logOff':
				$this->obj = new User(new Connect);
				break;
			case 'updateTextNav':
			case 'updateTextMenu':
			case 'updateTextNavBody':
			    $this->obj = new Text(new Connect);
				break;
			case 'findYourMethod':
				$this->obj = new YourClass();
			default;
		}		
	}
	
	public function check(){
	    return $this->obj;
	}
}
```