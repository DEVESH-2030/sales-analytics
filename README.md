# Sales Analytics Management 

### screenshots
![Screenshot from 2023-11-07 08-17-08](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/1fca945d-a5fe-4f50-a8b6-a9416d24bd6c)

![Screenshot from 2023-11-07 08-18-36](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/684eaddd-1f19-4637-8a8b-f3047568d930)

![Screenshot from 2023-11-07 08-18-41](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/d716d482-9fea-4519-87eb-d96b1bf985e7)


![Screenshot from 2023-11-07 08-17-18](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/f4e47fbb-2456-4361-8906-5d8f21f55ce0)

![Screenshot from 2023-11-07 08-17-22](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/2347be53-c1a7-4525-bdc3-dbc01a5efbaa)

![Screenshot from 2023-11-07 08-17-22](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/6420ed14-f794-419d-b6d7-ebc6cd1be7f2)

![Screenshot from 2023-11-07 08-17-50](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/bc7874c9-7f5f-4771-a341-c5cc7b5e9447)

![Screenshot from 2023-11-07 08-17-57](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/9877f5f5-12b0-41f7-9ef7-f654b819f9aa)

![Screenshot from 2023-11-07 08-18-03](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/ca0de906-5765-4f53-95ba-88f0ab2e2ad3)

![Screenshot from 2023-11-07 08-18-12](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/837744f9-5a85-4f44-b457-4e03063c602d)

![Screenshot from 2023-11-07 08-18-19](https://github.com/DEVESH-2030/sales-analytics/assets/73014162/dac4e051-d737-4f66-b925-54f4d40b824f)


### create laravel project
- composer create-project laravel/laravel sales-analytics
- Installed laravel ui
- install laravel vite


### Created Controller
- Dashboard controll
- User Controller, SalesController, OrderController, ProductController

### Added Route
- Added all route in web.php file for the all web pages

### Created Virtual Host
- I have userd virtual host because I am using Docker 
- Ans added virtual host url in `.env` file for localhost also 

### Run project
- If using by vitrual host the run `http://sales-analytics.test/`
- If using on localhost then you need to change from env file url and database `DB_HOST=mysql` to `DB_HOST=127.0.0.1`
- And then comand
```
    php artisan serve

    npm run dev

```


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
