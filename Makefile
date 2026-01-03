
reload:
	docker exec -it nginx sh -c "nginx -s reload"
	docker restart php_fpm
