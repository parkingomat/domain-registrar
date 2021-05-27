# domain-registrar
Show domain name registrar

https://github.com/HelgeSverre/Domain-Availability

## install php
https://github.com/apicra/win-php

## download php
https://windows.php.net/download#php-7.4


## install composer
https://getcomposer.org/download/

    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"

### manual

    curl https://getcomposer.org/download/latest-stable/composer.phar -o composer.phar


## install package

    php composer.phar install

    php composer.phar require --dev helgesverre/domain-availability

# php local server

    php serve
    php -S 127.0.0.1:8000