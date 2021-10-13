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
 
  ``` php
 'aliases' => [
     // ...
     'IpLocation' => TimeShow\IpLocation\Facades\IpLocation::class,
  ]
  ```
 
 
 ## How To Use
 
 ```php
   use TimeShow\IpLocation\IpLocation;

   $ipLocation = new IpLocation();
   $ipLocation->getLocation('X.X.X.X');   
   $ipLocation->getContry('X.X.X.X');
   $ipLocation->getProvince('X.X.X.X');
   $ipLocation->getCity('X.X.X.X');
   $ipLocation->getArea('X.X.X.X');

```