#ip-location for Laravel

## 版本兼容性

 Laravel      | Package
:-------------|:--------
 7.0     | 0.1.0
 8.0     | last version
 
 
 ## Install
Composer 安装
 
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
 
 
 ## 如何使用？
 
 ```php
   use TimeShow\IpLocation\IpLocation;

   $ipLocation = new IpLocation();
   $ipLocation->getLocation('X.X.X.X'); 
   $ipLocation->getArea('X.X.X.X');  
   $ipLocation->getCountry('X.X.X.X');
   $ipLocation->getProvince('X.X.X.X');
   $ipLocation->getCity('X.X.X.X');
   $ipLocation->getCounty('X.X.X.X');
   $ipLocation->getISP('X.X.X.X');          

```

### PS Q&A
1、返回结果出现中文乱码？
```php
$ipLocation = new IpLocation();
$location = $ipLocation->getLocation('X.X.X.X');
mb_convert_encoding($location, "UTF-8", "gbk");
```