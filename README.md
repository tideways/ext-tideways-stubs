# ext-tideways-stubs

Install with

```sh
composer require --dev tideways/ext-tideways-stubs
```

# PHPStan

The stubs can be used to improve the PHPStan analysis when using classes from the Tideways extension. In order to do so, add the stub to your `phpstan.neon`:

```neon
parameters:
    stubFiles:
        - vendor/tideways/ext-tideways-stubs/stubs/Tideways.php
```

See: https://phpstan.org/user-guide/stub-files

However, if you want to be able to run PHPStan even without the tideways extension installed, add the stub file to `scanFiles` instead.

```neon
parameters:
    scanFiles:
        - vendor/tideways/ext-tideways-stubs/stubs/Tideways.php
```
