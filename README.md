<!-- APi install -->
>> php artisan install:api

<!-- Jwt install -->
>> composer require php-open-source-saver/jwt-auth

<!-- vendore publish -->
>> php artisan vendor:publish

<!-- generate secret  -->
>> php artisan jwt:secret


<!-- config/auth -->
>> in default change guard from web to api
>> in guards make new api array anc change drivers to jwt

<!-- user model -->
>> use jwtsubject and implements jwtsubject
>> add methods getJWTCustomClaims and getJWTIdentifier


<!-- Mails -->
>> php artisan make:job SendMailJob  to handel the job of mails logic
>> php artisan make:mail VerifyEmail to handel the email template and logic of perticular mail
 
 <!-- Global function / helper -->
>> create the helper in app/Helpers/GlobalHelper.php
>> add the helper in composer.json after that run composer dump-autoload
>> example =>  "files": [
                    "app/Helpers/GlobalHelper.php"
                ]
>> now you can use the global function

 
