# EasyMDE Symfony Bundle

## Installation

Edit `composer.json`, adding a `repository` :

```json
"repositories": [{
    "type": "vcs",
    "url": "https://git.reclic.dev/bricebou/easymde-bundle.git",
}]
```

and then `require` the package:

```json
"reclic/easymde-bundle": "dev-main",
```

Running `composer update` should install the plugin, enable the plugin and install the assets.

If not : to enable the plugin, edit the `config/bundles.php` and add:

```php
<?php

return [
    ///
    Reclic\EasyMDEBundle\ReclicEasyMDEBundle::class => ['all' => true],
    ///
];

```

and to install the assets, run `./bin/console assets:install`.