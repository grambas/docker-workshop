# Docker workshop

## Pre-Request
* Docker and docker-compose installed

## Part 1

* First Dockerfile
* Dockerfile's management with docker-compose
* hello word node application

## Part 2

* update node application on changes

```
  docker-compose exec node_app /bin/bash
  npm install nodemon --also=dev
```
or
```
  docker-compose exec node_app npm install nodemon --also=dev
```
```
  docker-compose restart node_app
```

## Part 3

* run basic php container
* run php container from Dockerfile with composer
* docker monitoring with cadvisor
* burn test

https://github.com/google/cadvisor
```
docker run -d --name=cadvisor -p 8000:8080 --volume=/var/run:/var/run:rw --volume=/sys:/sys:ro --volume=/var/lib/docker/:/var/lib/docker:ro google/cadvisor:latest
```

## Part 4

* add axios package
* make request to php container
* make node app container start depended on php container

```
docker-compose exec node_app npm install axios
```

## Part 5

* PHP container with memcached lib and composer


## Part 6

* start independent memcached service
* create external network
* link php container and memcached container in created network
* use memcached service in php container
