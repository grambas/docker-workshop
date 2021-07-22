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

