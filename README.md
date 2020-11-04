# Basic App Tests

## Commands

```
php spark migrate -all
php spark db:seed BasicApp\Test\Database\Seeds\TruncateTestSeeder
php spark db:seed BasicApp\Test\Database\Seeds\TestSeeder
```

## Testing

### Linux

```
./vendor/bin/phpunit vendor/basic-app/test/tests
```

### Windows

```
vendor\bin\phpunit vendor/basic-app/test/tests
```