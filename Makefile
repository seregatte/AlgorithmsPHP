SHELL:=/bin/bash

all: run_test

run_test:
	@vendor/bin/phpunit