<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Task
REST API Utwórz REST API przy użyciu frameworka Laravel / Symfony. Celem aplikacji jest umożliwienie przesłania przez użytkownika informacji odnośnie firmy(nazwa, NIP, adres, miasto, kod pocztowy) oraz jej pracowników(imię, nazwisko, email, numer telefonu(opcjonalne)) - wszystkie pola są obowiązkowe poza tym które jest oznaczone jako opcjonalne. Uzupełnij endpointy do pełnego CRUDa dla powyższych dwóch. Zapisz dane w bazie danych. PS. Stosuj znane Ci dobre praktyki wytwarzania oprogramowania oraz korzystaj z repozytorium kodu.

## About This API

This API contains the CRUD methods that allow to interact with the resources stored in the DataBase.

When SEEDing the DataBase there is no information about the phone number, because it is optional.

## Commands
### To run the API you need to use this commands in the src folder:
```bash
cd src
```
```bash
docker compose build
```
```bash
composer install
```
```bash
docker compose up -d
```
```bash
docker compose exec app php artisan migrate
```
```bash
docker compose exec app php artisan db:seed
```

## POSTMAN
For the POST method there mus be a specific header set.
```
KEY = Accept
VALUE = application/json
```

### Enpoints in POSTMAN

![img.png](img.png)

### Response for the Get Firms Api
![img_1.png](img_1.png)

### Get a single firm via ID
![img_2.png](img_2.png)

### Post a firm
![img_3.png](img_3.png)

### Update a Firm
![img_4.png](img_4.png)

### Deleta a Firm
![img_5.png](img_5.png)
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
