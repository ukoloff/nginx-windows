# nginx-windows

Run nginx+php(+adminer) on Windows

## Versions

Works with:

  * [nginx](http://nginx.org/) 1.9.4
  * [php](http://www.php.net/) 5.5.29
  * [Adminer](https://www.adminer.org) 4.2.2

## Minimal php.ini

```
extension_dir=C:\Program Files\php-5.5.29\ext
extension=php_pgsql.dll
extension=php_sqlite3.dll
```

## See also

  * [php-fcgi on Windows](http://wiki.nginx.org/PHPFastCGIOnWindows)
