include .env

example:
	@echo ${DB_DATABASE}_testing;
test:
	@./vendor/bin/phpunit
coverage-report:
	@./vendor/bin/phpunit --coverage-html build/coverage-report
hard-restore-db:
	@mysql -uroot -p${DB_PASSWORD} -e "drop database if exists ${DB_DATABASE}; create database ${DB_DATABASE}";\
	php artisan migrate;
	php artisan db:seed --class=DatabaseSeeder
restart-testing-db:
	@mysql -uroot -p${DB_PASSWORD} -e "drop database if exists ${DB_DATABASE}_testing; create database ${DB_DATABASE}_testing";\
	php artisan migrate --env=testing;
	php artisan db:seed --class=DatabaseSeeder --env=testing
