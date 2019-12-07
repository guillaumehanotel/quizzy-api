 include .env
export
.PHONY: help test serve refresh-database
.DEFAULT_GOAL= help

help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-10s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

serve:
	@php artisan serve --host=lvh.me

refresh-database:
	@php artisan migrate:refresh --seed
	@php artisan passport:install --force
