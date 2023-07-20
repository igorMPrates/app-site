.PHONY: start-dev
start-dev:
	docker-compose -f docker/development/docker-compose.yml up -d

.PHONY: stop-dev
stop-dev:
	docker-compose -f docker/development/docker-compose.yml down

.PHONY: build-staging
build-staging:
	docker build --build-arg NODE_ENV=production -t escolamobile/cms-exclusiva:staging -f docker/staging/Dockerfile .