# Symfony Docker installer
####result:
![image](https://github.com/vadimlvov71/ithillel_symfony_docker/assets/57807117/387e0035-b872-4118-9a28-8664a7ee78f0)
##and
#
![image](https://github.com/vadimlvov71/ithillel_symfony_docker/assets/57807117/7909b147-c8cf-4d2b-85f9-ee9474aedce2)

## About 
Symfony 6.3.*@dev
php-fpm 8.1
Mysql latest
nginx latest

## Installation
### Step 1
Copy `.env.install.dist` file to `.env.install`

Change `PROJECT_NAME` in `.env.install`

### Step 2
```console
docker-compose --env-file .env.install up --build
```
OR
```console
/bin/bash project.sh -i
```

This may take a few minutes. Wait for completion.

### Step 3
Profit

## Use

For use 
```console
docker-compose --env-file .env.local up
```
OR
```console
/bin/bash project.sh
```
