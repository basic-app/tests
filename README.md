# Basic App Tests

## Testing

php spark migrate -all
php spark db:seed BasicApp\Test\Database\Seeds\TruncateTestSeeder
php spark db:seed BasicApp\Test\Database\Seeds\TestSeeder
./vendor/bin/phpunit vendor/basic-app/test/tests