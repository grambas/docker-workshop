# Docker workshop

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
