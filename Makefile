fulltest:
	./vendor/bin/phpunit --repeat 2

cs:
	./vendor/bin/phpcs -p --standard=phpcs.xml ./app/

lint:
	./vendor/bin/parallel-lint ./app/

.PHONY: fulltest cs lint