# Laravel Nova Password Reset Tool

This is a package for [Laravel Nova](https://nova.laravel.com/) which allows you to easily reset your nova password.

Forked from: https://github.com/mastani/nova-password-reset

## Requirements


### Installation

Install the package via composer:
```bash
$ composer require isseur-direct/nova-password-reset
```

Publish the view (Will overwrite 'user.blade.php' which is provided by nova):
```
php artisan vendor:publish --force --provider="IssuerDirect\NovaPasswordReset\ToolServiceProvider" --tag="nova-views"
```

Register the tool in the `tools` method of the `NovaServiceProvider`:
```
// app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \IssuerDirect\NovaPasswordReset\NovaPasswordReset,
    ];
}
```

## Customizations (Optional)

If you want to specify the min length of password you can publish the config file:
```
php artisan vendor:publish --provider="IssuerDirect\NovaPasswordReset\ToolServiceProvider" --tag="config"
```

Now head over to "config/nova-password-reset.php" and you can change the value:
```
'min_password_size' => 5
```
___
You can also use English or Portuguese language or add your own translation:
```
php artisan vendor:publish --provider="IssuerDirect\NovaPasswordReset\ToolServiceProvider" --tag="translations"
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
