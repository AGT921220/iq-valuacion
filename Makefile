include .env

example:
	@echo ${DB_DATABASE}_testing;
test:
	@./vendor/bin/phpunit
full-qa-report:
	@./vendor/bin/phpunit --coverage-html build/coverage-report
	sudo phpdismod -s cli xdebug;\
	vendor/bin/phpmd app html phpmd.xml --reportfile build/phpmd/phpmd.html;\
	vendor/bin/phpcs --report=summary --report-file=./build/phpcs/phpcs_summary.txt;\
	vendor/bin/phpcs --report=source --report-file=./build/phpcs/phpcs_source.txt;\
	vendor/bin/phpcs --report=full --report-file=./build/phpcs/phpcs_full.txt;
hard-restore-db:
	@mysql -uroot -p${DB_PASSWORD} -e "drop database if exists ${DB_DATABASE}; create database ${DB_DATABASE}";\
	php artisan migrate;
	php artisan db:seed --class=DatabaseSeeder
restart-testing-db:
	@mysql -uroot -p${DB_PASSWORD} -e "drop database if exists ${DB_DATABASE}_testing; create database ${DB_DATABASE}_testing";\
	php artisan migrate --env=testing;
	php artisan db:seed --class=DatabaseSeeder --env=testing
