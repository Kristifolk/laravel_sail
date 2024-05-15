<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel начальный уровень  (1 день)
Создать приложение на Laravel
* Есть пользователь с admin@admin.com  pass: secret должен быть предустановлен через сидер
* После авторизации есть форма в которой есть кнопка загрузить.
* При нажатии на кнопку Загрузить в грид загружается список товаров maybelline из этого [api](http://makeup-api.herokuapp.com/api/v1/products.json?brand=maybelline). На странице показывать название + изображение.


## Подключение

* скачать репозиторий

* docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php82-composer:latest \
composer install --ignore-platform-reqs

* npm install
* sail npm run dev
