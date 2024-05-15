<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel начальный уровень  (1 день)
Создать приложение на Laravel
* Есть пользователь с admin@admin.com  pass: secret должен быть предустановлен через сидер
* После авторизации есть форма в которой есть кнопка загрузить.
* При нажатии на кнопку Загрузить в грид загружается список товаров maybelline из этого [api](http://makeup-api.herokuapp.com/api/v1/products.json?brand=maybelline). На странице показывать название + изображение.


## Подключение


* скачать репозиторий
* composer update
* ./vendor/bin/sail up -d
* ./vendor/bin/sail artisan migrate --seed
* ./vendor/bin/sail npm run dev
* Вместо многократного набора команд vendor/bin/sailдля выполнения команд Sail вы можете настроить псевдоним оболочки, который позволит вам легче выполнять команды Sail:
`alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`

подробнее [в документации Laravel](https://laravel.com/docs/11.x/sail#executing-artisan-commands)
