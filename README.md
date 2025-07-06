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
 
 
