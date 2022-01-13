test:
	@./vendor/bin/phpunit
coverage-report:
	@./vendor/bin/phpunit --coverage-html build/coverage-report
testing-restart:
	@mysql -uroot -e "drop database if exists agsoftwe_valuacion_iqinmobiliaria_testing; create database agsoftwe_valuacion_iqinmobiliaria_testing";\
	echo "Database testing restored"; \
	php artisan migrate --database=agsoftwe_valuacion_iqinmobiliaria_testing

restart-testing:
	@mysql -uroot -p${'password'} -e "drop database if exists agsoftwe_valuacion_iqinmobiliaria_testing; create database agsoftwe_valuacion_iqinmobiliaria_testing";\
	php artisan migrate --env=testing;
	php artisan db:seed --class=UsersSeeder --env=testing