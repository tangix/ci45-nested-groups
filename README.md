# Routing issues with filters

Referencing https://codeigniter.com/user_guide/incoming/routing.html#nesting-groups and the code exmaple:

```php
<?php

$routes->group('admin', ['filter' => 'myfilter:config'], static function ($routes) {
    $routes->get('/', 'Admin\Admin::index');

    $routes->group('users', ['filter' => 'myfilter:region'], static function ($routes) {
        $routes->get('list', 'Admin\Users::list');
    });
});
```

Run this using spark

```bash
php spark serve --port 28080
```

I cannot get this to work as expected when the name of the filter options are the same, [see](http://127.0.0.1:28080/notworking/users/list) on the `config` filter is executed.

If replaced with a second filter `myfilter2` it [works](http://127.0.0.1:28080/working/users/list)