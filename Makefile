all: docker-compose.yml Dockerfile .env
	docker-compose up -d
	docker run --user="$$UID" --rm -v $$(pwd)/code/app:/app composer install
	docker exec nginx chgrp -R www-data /var/www/html/app/storage
	docker exec nginx chmod -R ug+rwx /var/www/html/app/storage
	docker exec php php app/artisan migrate
	docker exec --user=$$UID php php app/artisan db:seed