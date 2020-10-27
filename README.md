# About Blogold

Blogold is Articles CRUD REST API that demonstrate using JWT with Laravel as task of employment at(Matrix):

-   [API Docs](https://documenter.getpostman.com/view/12757027/TVYGbcoz).

## How to setup project.

1. Install composer dependances
2. Generate JWT secret `php artisan jwt:secret`
3. Setup your database and run migrations `php artisan migrate`
4. Run tinker command and create new user to login with :

```
$ php artisan tinker

>>> App\Models\User::factory(1)->create()

=> Illuminate\Database\Eloquent\Collection {#4249
     all: [
       App\Models\User {#4254
         name: "Frederick Beatty Sr.",
         email: "enitzsche@example.com",
         phone: "+12256917031",
         email_verified_at: "2020-10-27 00:53:54",
         updated_at: "2020-10-27 00:53:54",
         created_at: "2020-10-27 00:53:54",
         id: 2,
       },
     ],
   }
>>>
```

5. Seed your database with dummy data to play with `php artisan db:seed`
6. [Setup a virtual host](https://gist.github.com/corecave/15ecaf02e1d90cc871554eb6b9d91e0e) or serve your application using `php artisan serve`

7. Open [API Docs](https://documenter.getpostman.com/view/12757027/TVYGbcoz) to try your application.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
