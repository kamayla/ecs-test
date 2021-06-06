start:
	docker-compose up -d
ssh:
	docker exec -it laravel-study bash
stop:
	docker-compose down
build:
	docker-compose build --no-cache

prod-build:
	docker-compose -f docker-compose.prod.yaml build --no-cache
