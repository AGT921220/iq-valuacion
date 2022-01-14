password = "password"

test:
	@./vendor/bin/phpunit
coverage-report:
	@./vendor/bin/phpunit --coverage-html build/coverage-report
restart-db:
	@mysql -uroot -p${password} -e "drop database if exists agsoftwe_valuacion_iqinmobiliaria; create database agsoftwe_valuacion_iqinmobiliaria";\
	php artisan migrate;
	php artisan db:seed --class=UsersSeeder
restart-testing-db:
	@mysql -uroot -p${password} -e "drop database if exists agsoftwe_valuacion_iqinmobiliaria_testing; create database agsoftwe_valuacion_iqinmobiliaria_testing";\
	php artisan migrate --env=testing;
	php artisan db:seed --class=UsersSeeder --env=testing
