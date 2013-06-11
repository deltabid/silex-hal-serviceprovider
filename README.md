silex-hal-serviceprovider
=========================

A service provider for Silex to improve dependency injection when using the [HAL library][1].

## Registering the provider
```php
<?php

use \Silex\Application;
use \Popshack\Silex\Provider\Hal\HalServiceProvider;

$app = new Application();

$app->register(new HalServiceProvider());
```
You can now use this in your controllers to obtain a Hal instance:
```php
$app->get('/hello', function () use ($app) {
    $hal = $app['hal']('/orders');
    return $hal->asJson();
});
```
## Installation

Installation is using [Composer][2]. The preferred method of installation is via [packagist][3] as this provides the PSR-0 autoloader functionality. The
following composer.json will download and install the latest version of of the provider and dependencies into your project.

```json
{
    "require": {
        "popshack/silex-hal-serviceprovider": "dev-master"
    },
    "minimum-stability": "dev"
}
```
Alternatively, clone the project and install into your project manually.

## License

Popshack\Silex\Provider\Hal is licensed under the MIT license.


[1]: https://github.com/blongden/hal
[2]: http://getcomposer.org
[3]: https://packagist.org/packages/popshack/silex-hal-serviceprovider
