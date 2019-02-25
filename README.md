# phpMVC
Code Structure of the MVC architecture used for web development coded in PHP language. 

Technical Details

LAMP stack is used for development.
```ruby
Prefered OS - Ubuntu

PHP version - PHP 7.2.15

Apache version - 2.4.29
```

htaccess is used for url restricting and url redirecting.

Ubuntu users need to change the configuration in apache2.config file inorder to use .htaccess to override the default configuration in apache server

Change the ```<Directory /var/www> ``` as follows by changing ```AllowOverride None ``` to ```AllowOverride All ```

```ruby

<Directory /var/www>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

```





