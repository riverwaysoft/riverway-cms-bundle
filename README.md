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

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Riverway\Cms\CoreBundle\RiverwayCmsCoreBundle(),
        );

        // ...
    }

    // ...
}
```