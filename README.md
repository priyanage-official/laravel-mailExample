<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Gmail Configurations

- Login to your Gmail account.
- On the right-top corner click your profile picture. Go to "Manage Your Google Account".
- Click "Security" on the left menu.
- Under "How you sign in to Google" go to "2-Step Verification".
- Enter your password(If asked) then scroll down to "App passwords".
- Click "App passwords" then under "To create a new app-specific password.." create an app password with any name you want ex. "LaravelApp".
- On successful creation, a popup will show you with your password. Copy and save it.

## Your Project Configurations

In your project .env file change the following.

- MAIL_MAILER=smtp
- MAIL_HOST=smtp.gmail.com
- MAIL_PORT=587 (if tls, 465 for ssl)
- MAIL_USERNAME=YOUR-EMAIL-ID
- MAIL_PASSWORD='YOUR-APP-PASSWORD'
- MAIL_ENCRYPTION=tls
- MAIL_FROM_ADDRESS=YOUR-EMAIL-ID
- MAIL_FROM_NAME="${APP_NAME}"

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
