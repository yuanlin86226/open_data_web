# laravel安裝
```
composer global require "laravel/installer"
```

#建立新專案
```
laravel new 專案名稱
```

#安裝XmlParser套件
```
請觀看別家大大的教學進行安裝
https://github.com/orchestral/parser#installation
```

#使用XmlParser套件 (不負責任程式碼)
```
$xml = XmlParser::load('Open data url');
$infos = $xml->getContent();

$infos_data = array();
$i = 0;

foreach($infos as $info) {
    $infos_data[$i]['name'] = (string)$info['name'];
    $i++;
}
```

＃其他
```
版型自己生，剩下自己看

啟動 127.0.0.1:8000
php artisan serve
```
