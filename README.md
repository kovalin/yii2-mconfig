<h1 align="center">Yii2 MConfig Module</h1>

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
use - Yii::$app->MConfig->get('adminEmail');
```