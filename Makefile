## ——————————  Makefile for docker services management  ——————————
help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

reset: ## remove local changes and shut down docker services
	git reset --hard HEAD && docker-compose down -v

start: ## start services
	docker-compose up -d

rr: ## restart services
	docker-compose down -v && docker-compose up -d

node-bash: ## ssh to node app
	docker-compose exec node_app /bin/bash

php-bash: ## ssh to php app
	docker-compose exec php_app /bin/bash

.PHONY: help reset start rr node-bash php-bash
