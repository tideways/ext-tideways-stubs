# ext-tideways-stubs

Install with

```
composer require-dev tideways/ext-tideways-stubs
```

# PHPStan

Add our stub in your `phpstan.neon`

```
parameters:
    stubFiles:
        - vendor/tideways/ext-tideways-stubs/stubs/Tideways.php
```

See: https://phpstan.org/user-guide/stub-files
