# PHP Home task
This project is for the Mintos home assignment, built with the Symfony framework.
This project does not have a containers.  

Functional requirements met:
- Return list of accounts by client id
- Return list of transaction by account id (broken) 

Non-functional requirements met:
- DB schema versioning


## Setup
### Requirements
- PHP 8.2 or higher with these extensions (ctype, iconv, pcre, session, SimpleXML, and Tokenizer)
- Composer

### Clone the project
```shell
git clone ...
cd task/
composer install
```

### Configure the database
In the .env file [configure the database](https://symfony.com/doc/current/doctrine.html#configuring-the-database). 
For this task I used MariaDB.
Then run the command below to create the database.

```shell
php bin/console doctrine:database:create

# or with symfony CLI
symfony console doctrine:database:create

```

### Run migrations

```shell
php bin/console doctrine:migrations:migrate

# or with symfony CLI
symfony console doctrine:migrations:migrate
```


### Load fixtures (test data)
```shell
php bin/console doctrine:fixtures:

# or with symfony CLI
symfony console doctrine:fixtures:load

```

### Start the server
```shell
symfony server:start
```