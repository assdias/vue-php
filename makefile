#!/usr/bin/make

.PHONY: help
.DEFAULT_GOAL := help

help:  ## Display this help
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } ' $(MAKEFILE_LIST)

##@ Docker actions

dev: ## Start containers desatached
	docker-compose up -d

down: ## Start containers desatached
	docker-compose down

logs: ## Show the output logs
	docker-compose logs

log: ## Open the logs and follow the news
	docker-compose logs --follow

restart: ## Restart the app container
	docker-compose restart

##@ Deploy

stage: ## Publish the app to stage environment
	/usr/bin/bash ./dist/stage/deploy.sh

production: ## Publish the app to production environment
	/usr/bin/bash ./dist/production/deploy.sh