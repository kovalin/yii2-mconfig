<h1 align="center">Yii2 MConfig Module</h1>


## Easy Installation

### Install with composer

To install with [Composer](https://getcomposer.org/), simply require the
latest version of this package.

```bash
composer require kovalin/yii2-mconfig "dev-master"
```


### Download and install

Download an archive of MConfig and extract module files it into the /modules/mconfig/ directory your Yii application.

 * You can download zip archive
   https://codeload.github.com/kovalin/yii2-mconfig/zip/master


### Install with git

From the command line, switch to the /modules directory your Yii application and run
the following commands:

```sh
git clone https://github.com/kovalin/yii2-mconfig.git
mv yii2-mconfig mconfig
```

Configuration
-----------------------

**Database Migrations**

Before using Comments Widget, we'll also need to prepare the database.
```php
php yii migrate --migrationPath=modules/mconfig/migrations
```

Usage
-----

Once the extension is installed, simply modify your application configuration as follows:

```php
return [
     'components' => [
        'MConfig' => [
            'class' => 'app\modules\mconfig\components\MConfig'
        ],
    'modules' => [
        'mconfig' => [
            'class' => 'app\modules\mconfig\Module',
        ]
    ],
];
```

You can get param:

```php
Yii::$app->MConfig->get('adminEmail');
```