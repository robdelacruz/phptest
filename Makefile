
dep:
	apt install nginx -y
#	apt install php8.1-fpm -y
#	apt install php8.1-sqlite3 -y
	apt install php-fpm -y
	apt install php-sqlite3 -y

status-nginx:
	systemctl status nginx

status-php:
	systemctl status php8.3-fpm

addconf:
	cp phptest.conf /etc/nginx/sites-available/
	ln -sf /etc/nginx/sites-available/phptest.conf /etc/nginx/sites-enabled/
	systemctl restart nginx

delconf:
	unlink /etc/nginx/sites-enabled/phptest.conf
	rm -f /etc/nginx/sites-available/phptest.conf
