include .env
export
.PHONY: help test serve install dependencies generate-keys database refresh-database ownership cache-clear log-clear
.DEFAULT_GOAL= help

APACHE_USER?=www-data

help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-10s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

serve:
	@php artisan serve --host=lvh.me

install:
	make dependencies
	make generate-keys
	make ownership
	make database
	make cache-clear

dependencies: composer.json package.json ## Installe les dépendances PHP & JS
	@composer install

generate-keys: ## Génération des clefs secrètes
	@php artisan key:generate

database: ## Migration et population de la base de donnée
	@php artisan migrate
	@php artisan passport:install --force
	@php artisan db:seed

refresh-database:
	@php artisan migrate:refresh --seed
	@php artisan passport:install --force

ownership: bootstrap/cache storage ## Application des permissions et des appartenances
	chown -R $(APACHE_USER):$(APACHE_USER) .*
	chmod -R a+rw storage bootstrap/cache

cache-clear:  ## Vide le cache
	@php artisan config:cache
	@php artisan cache:clear

log-clear: ## Vide les logs
	@echo '' > storage/logs/laravel.log

tests: vendor ## Execute les tests unitaires
	@php ./vendor/bin/phpunit
