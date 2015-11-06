dumbledar
=========

A Symfony project created on October 9, 2015, 3:28 pm.

##### Clone Github repository

```sh
git clone https://github.com/Padow/dumbledar.git
```

##### Install Symfony missing components

Go in your project directory and download Composer :

```sh
curl -sS https://getcomposer.org/installer | php
```

then simply run this command :

```sh
php composer.phar install
```

It will install all the components needed for this Symfony project.

##### Run the server

Make sure your MySql server is runing and run those commands :

```sh
php app/console doctrine:database:create
```

```sh
php app/console doctrine:schema:update --force
```

Finally launch the server :

```sh
php app/console server:run