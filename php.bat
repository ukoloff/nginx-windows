@Echo off
cd %0/..
bin\RunHiddenConsole.exe C:\Program Files\php-5.5.29\php-cgi.exe -b 127.0.0.1:9123
