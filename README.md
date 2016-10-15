# Lemming Random

A plugin command, to [Lemming the Discord Bot](https://github.com/1337m/lemming).

## Installation

This plugin, can be simply installed with the `composer` package.

```
composer require 1337m/lemming-random
```

Once, plugin is one of our dependencies, 
you can register it by referencing our library, 
in the `config/commands.php` in your package.

Like so:

```php
<?php

return [

    // Register Giphy plugin.
    'random' => [
        'action' => Lemming\Random\Command::class
    ],

];
```

### How it works

```
[user] /random Pizza Kebab ChowMain CookAtHome
[bot] Personally, I would go with Kebab.
```

## Licence

Lemming and it's official plugins are open-sourced software licensed under the 
[MIT license](http://opensource.org/licenses/MIT).
