Riverway Cms Core Bundle
========================

Installation
------------
#### Step 1: Download the Bundle
Exclude app dir:
```
"autoload": {

    //...

    "exclude-from-classmap": [
        "vendor/riverwaysoft/riverway-cms-bundle/app"
    ]
},
 ```

Install:
```composer require --prefer-dist riverwaysoft/riverway-cms-bundle```

#### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php


class AppKernel extends \Riverway\Cms\CoreBundle\Application\Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new AppBundle\AppBundle(),
            // ...
        ];
        return array_merge($bundles, parent::registerBundles());
    }

    public function getRootDir()
    {
        return __DIR__;
    }
}
```

#### Step 3: Prepare Database
Create database
```php
bin/console doctrine:database:create
```

Apply CMS-specific migrations:
```php
bin/console riverway:migration:migrate
```
#### Step 4: Install assets
```
yarn install
yarn dev-server
```
