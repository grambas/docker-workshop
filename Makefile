NODE_APP_CMD=docker-compose exec node_app

## ——————————  Dockerized miofair Makefile  ——————————
help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

reset: ## clear herdi symfony cache
	git reset --hard HEAD && docker-compose down -v

.PHONY: help reset
