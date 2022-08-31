# EasyMDE Symfony Bundle

This simple bundle provides Symfony with a new Type that embeds the [EasyMDE - Markdown Editor](https://github.com/Ionaru/easy-markdown-editor).

## Installation

### Download the bundle

Open a command console, enter your project directory, and execute the following command to download the latest stable version of this bundle and add it as a dependency to your project:

```
composer require reclic/easymde-bundle
```

### Enable the bundle

Then, if it hasnn't been performed automatically, enable the bundle by adding a new line to your `config/bundles.php`:

```php
<?php

return [
    ///
    Reclic\EasyMDEBundle\ReclicEasyMDEBundle::class => ['all' => true],
    ///
];

```

### Install and load the assets

If there is no `recliceasymde` folder inside the `public/bundles/` directory, you'll have to install the assets by running this command:```

```
./bin/console assets:install
```

You'll have to load the `public/bundles/recliceasymde/main.js` and `public/bundles/recliceasymde/main.css` assets to your template.
Using the SonataAdmin bundle, it can be performed by editing the `config/packages/sonata_admin.yaml` this way:

```yaml
sonata_admin:

    ###

    assets:
        extra_javascripts:
            - bundles/recliceasymde/main.js
        extra_stylesheets:
            - bundles/recliceasymde/main.css
```

## Usage

Simply call the `Reclic\EasyMDEBundle\Type\ReclicEasyMDEType` inside your form.

You can configure the EasyMDE toolbar (using [this table](https://github.com/Ionaru/easy-markdown-editor#toolbar-icons)) by passing an array :

```php
'attr' => [
    'data-toolbar' => 'heading, bold, italic, |, unordered-list, ordered-list, |, link, image, |, preview, side-by-side'
]
```