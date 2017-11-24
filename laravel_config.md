# Configuration de Laravel
https://laravel.com/docs/5.5

## Prérequis server
- PHP 7.0
- Ext mbstring
- Ext openssl
- Ext Tokenizer
- Ext xml
- Ext PDO
- UnZip

## Etapes
- Taper `php -m` pour connaitre les modules disponnibles dans votre php.
- Installer les différentes extensions avec : `Sudo apt-get install php7.0-xml php7.0-mbstring php7.0-mysql unzip`.
- Installer composer : `sudo php composer-setup.php --filename=composer --install-dir=/usr/local/bin`.
- Installation en tant que composant local https://getcomposer.org/download/
`php composer-setup.php`
./

### Modification du vHost dans le fichier .conf
```bash
<VirtualHost *:80>
	ServerName laravel.dev

	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/html/blog/public
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined

	<Directory /var/www/html/blog/public>
		AllowOverride All
	</Directory>
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet
```
`sudo service apache2 restart`

Activation du module de réécriture d'url du Server :
```bash
sudo a2enmod rewrite
sudo service apache2 restart```
