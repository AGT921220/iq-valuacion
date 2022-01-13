password = "password"

test:
	@./vendor/bin/phpunit
coverage-report:
	@./vendor/bin/phpunit --coverage-html build/coverage-report
restart-testing:
	@mysql -uroot -p${password} -e "drop database if exists agsoftwe_valuacion_iqinmobiliaria_testing; create database agsoftwe_valuacion_iqinmobiliaria_testing";\
	php artisan migrate --env=testing;
	php artisan db:seed --class=UsersSeeder --env=testing
