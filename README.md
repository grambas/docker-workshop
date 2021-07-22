# Docker workshop

## Part 1

* First Dockerfile
* Dockerfile management with docker-compose
* hello word node application

## Part 2

* update node application on change
```
  docker-compose exec node_app npm install nodemon --also=dev
  docker-compose restart node_app
```

