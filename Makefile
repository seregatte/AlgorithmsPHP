SHELL:=/bin/sh

all: run_test

run_test:
	@vendor/bin/phpunit