# Deploy Laravel Project on your shared Hosting wihout Use SSH
Laravel 5.4 project configured for deployment on shared Hosting without use SSH by Marouane Souah.

# Feautures
- Fixed Storage Link problem
- Secure your .env file , and deny anyone from access to it.
- .htaccess protection
- Upload your project with FTP

# Instruction
- Firstly you need to clone this project , open your cmd and type <br>
 `git clone https://github.com/MarouaneSH/Laravel5_On_Shared_Hosting_without_SSH`
- After downloading has finished you need to rename the folder `Laravel5_On_Shared_Hosting_without_SSH` for anything you want (just for have a short name) for example `myLaravelApp`
- Open your cmd again in the current folder (`myLaravelApp`) and type `cd myLaravelApp\project`
- Now you must run composer , type on your cmd `composer install`
```diff
- Note : if you had any issues during installing composer please run `composer install --prefer-source` that`s will fixe the issue
```
- After composer instlation finished , you must run `php artisan key:generate`.

# How to use 
So know after project instalation are completed you can put your project folder on your localhost folder , I'm using XAMPP so i will put it on `C:\xampp\htdocs` , you can use what ever Windows web development environment you want . <br>
#So know you can acces to your laravel project like any other PHP project , `http://localhost/myLaravelApp/` <br>
```diff
- Note : php artisan serve , will not work in this project
```
# How to Store files 
- i have already created a driver in `filesystems.php` that allow you to store files in a public assets folder <br>
you can use `Storage::disk("assets")->put("file.txt","Some Content");` .
- to get the link of a stored files you can use two function :
```diff
+ Asset_url("filename") 
+ OR Asset_path("filename")
```
For example :  
-Asset_url("file.txt") will give you `http://youAppUrl.com/assets/file.txt` <br>
-Asset_path("file.txt") will give you `assets/file.txt` <br>
```diff
- Note : You must change APP_URL in your .env FILE
```
# Some problems that you may have
For some reason , if you create some route on your project and you want to access to it , maybe it will not work .<br>
There is some solution for that : <br>
-if you type `http://localhost/myLaravelApp/myRoute` it will not work , but if you changet to `http://localhost/myLaravelApp/index.php/myRoute` it will be work fine .
```diff
- Note : This problem only show on your windows local development , if youre using Linux or your uplouaded the project to a Shared Hosting , it will be work fine.
```
-The other solution is to enable AllowOverride in your php.ini , there is a link show you how you can do that 
http://www.anmsaiful.net/blog/php/enable-apache-rewrite-module.html
