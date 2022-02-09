password = "password"

test:
	@./vendor/bin/phpunit
coverage-report:
	@./vendor/bin/phpunit --coverage-html build/coverage-report
hard-restore-db:
	@mysql -uroot -p${password} -e "drop database if exists agsoftwe_valuacion_iqinmobiliaria; create database agsoftwe_valuacion_iqinmobiliaria";\
	php artisan migrate;
	php artisan db:seed --class=DatabaseSeeder
restart-testing-db:
	@mysql -uroot -p${password} -e "drop database if exists agsoftwe_valuacion_iqinmobiliaria_testing; create database agsoftwe_valuacion_iqinmobiliaria_testing";\
	php artisan migrate --env=testing;
	php artisan db:seed --class=DatabaseSeeder --env=testing
pecl install xdebug