# Skateland

## Index
1. [Description and link](#Description and link)
2. [Prerequisites](#Prerequisites)
3. [Installation](#Installation)
4. [Built-With](#Built-With)
5. [Authors](#Authors)
6. [Deployment](#Deployment)


## Description

* Skateland is an app where u can post skate pictures or other picture but always in the sake mantality, have a good ride !
* [Figma](https://www.figma.com/file/8biK9MnT2Tn52924yzYeZw/Untitled?node-id=2%3A219)
* [Backlog](https://docs.google.com/spreadsheets/d/1ZIZwpe5Cwif6PEz9tPRw_F4hD1XtgN7sdidFxW9tBkE/edit?usp=sharing)
* [BDD Model](https://dbdiagram.io/d/60d9c5dcdd6a59714822d672)

## Prerequisites

* [PHP 7.4.*](https://www.php.net/releases/7_4_0.php) (check by running php -v in your console)
* [Composer 2.*](https://getcomposer.org/) (check by running composer --version in your console)
* [node 14.*](https://nodejs.org/en/) (check by running node -v in your console)
* [Yarn 1.*](https://yarnpkg.com/) (check by running yarn -v in your console)
* [MySQL 8.0.*](https://www.mysql.com/fr/) (check by running mysql --version in your console)
* [Git 2.*](https://git-scm.com/) (check by running git --version in your console)
* * You will also need a test SMTP connection, which you can configure using tools like Mailtrap
*  # Don't forget to install the JavaScript dependencies as well and compile

## Installation
If you meet the prerequisites, you can proceed to the installation of the project 

1. Clone the project from [Github](https://github.com/Mcbess-san/skateland.git) in a folder
2. Go in the project folder
3. Open the project folder with your code editor
4. Open the terminal and run the following commands:
5. Run `composer install` to install PHP dependencies
6. Run `yarn install` to install JS dependencies
7. Copy the `.env` file, rename it to `.env.local` and fill it with all the needed informations (Database, Symfony/Mailer)
8. Run `symfony console doctrine:database:create` to create database
9. Run `symfony console doctrine:migration:migrate` to create structure of database
10. Run `symfony console doctrine:fixtures:load` to load the fixtures in database
11. Run `yarn encore dev` to build assets
12. Run `symfony server:start` to launch symfony server
13. Go to localhost:8000 on your browser

## Built-With

* [Symfony](https://github.com/symfony/symfony)
* [GrumPHP](https://github.com/phpro/grumphp)
* [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
* [PHPStan](https://github.com/phpstan/phpstan)
* [PHPMD](http://phpmd.org)
* [ESLint](https://eslint.org/)
* [Sass-Lint](https://github.com/sasstools/sass-lint)

## Authors

* [Romain Samuel](https://github.com/Mcbess-san)

## Deployment

![Img caprover](https://captain.phprover.wilders.dev/icon-512x512.png)

To deploy on Cap Rover, follow [instructions in the manual](https://caprover.com/docs/get-started.html) and add, at least, two  *"Environmental Variables"* in *"App Configs"*  tab:

* `APP_ENV` with `prod`/`dev` value
* `DATABASE_URL` with the connection informations given by caprover when you create the related DB app.

Caprover configuration files are : 

* [captain-definition](https://github.com/WildCodeSchool/sf4-pjt3-starter-kit/blob/master/captain-definition) Caprover entry point
* [Dockerfile](https://github.com/WildCodeSchool/sf4-pjt3-starter-kit/blob/master/Dockerfile) Web app configuration for Docker container
* [docker-compose.yml](https://github.com/WildCodeSchool/sf4-pjt3-starter-kit/blob/master/docker-compose.yml) ...not use it's used 😅
* [docker-entry.sh](https://github.com/WildCodeSchool/sf4-pjt3-starter-kit/blob/master/docker-entry.sh) shell instruction to execute when docker image is built
* [nginx.conf](https://github.com/WildCodeSchool/sf4-pjt3-starter-kit/blob/master/nginx.conf) Nginx server configuration
* [php.ini](https://github.com/WildCodeSchool/sf4-pjt3-starter-kit/blob/master/php.ini) Php configuration
