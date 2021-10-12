#ip-location for Laravel

## Version Compatibility

 Laravel      | Package
:-------------|:--------
 7.0     | 0.1.0
 8.0     | last version
 
 
 ## Install
Composer
 
 ``` bash
 $ composer require timeshow/ip-location
 ```
 
add the `IpLocationServiceProvider` to your `config/app.php`:
 
 ``` php
'providers' => [
    // ...
    TimeShow\IpLocation\IpLocationServiceProvider::class,
 ]
 ```
 