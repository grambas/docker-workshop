# Docker workshop

## Part 1

* First Dockerfile
* Dockerfile management with docker-compose
* hello word node application

```
docker ps (show running containers)
docker ps -a (show all existing containers)
docker logs {CONTAINER_NAME} 
docker logs -f {CONTAINER_NAME} (tail)
docker-compose up
docker-compose up -d (start in daemon)
docker-compose down
docker-compose down -v (recreate named volumes)
docker-compose exec {CONTAINER_NAME} bash (ssh to container)
```

## Part 2

* update node application on change
```
  docker-compose exec node_app npm install nodemon --also=dev
  docker-compose restart node_app
```

## Part 3

* php container
* docker monitoring
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
