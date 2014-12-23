Laravel Modal (Message Box)
==================

Arrangeable Messagebox For Laravel 4

![modal example preview](https://camo.githubusercontent.com/efe9a8d52a01f0b5fd3ffa4c70ee16b6830eb4ee/687474703a2f2f746979732e6e65742f6d6f64616c2e706e67)

In composer.json;

```shell
"rasim/modal": "dev-master"
```

In app.php

```php
'Rasim\Modal\ModalServiceProvider',
```

and for aliases

```php
'Modal'   => 'Rasim\Modal\Facades\Modal',
```


publish for config file.

```shell
php artisan config:publish rasim/modal
```

publish for view files.
```shell
php artisan view:publish rasim/modal
```

Usage:

```php
{{ 	Modal::confirm("TYPE","MESSAGE TITLE","MESSAGE TEXT","URL") }}
{{ 	Modal::alert("TYPE","MESSAGE TITLE","MESSAGE TEXT") }}
```

```
TYPE => fail , success, warning
```

Example:

```php
{{ 	Modal::confirm("fail","Delete Approve","Are you sure?","delete/1") }}

{{ 	Modal::alert("warning","Please Warning","Be careful please!") }}
```


