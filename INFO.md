## Best practices for creating images

* Include only **necessary context** -- use a [**.dockerignore**](https://docs.docker.com/engine/reference/builder/#dockerignore-file) file (like .gitignore in git)
* Avoid installing **unnecessary packages** -- it will consume extra disk space.
* **Use cache**. Add context which changes a lot (for example, the source code of your project) at the end of Dockerfile -- it will utilize Docker cache effectively.
* **Be careful with volumes**. You should remember what data is in volumes. Because volumes are persistent and don't die with the containers, the next container will use data from the volume created by the previous container.
* Use [**environment variables**](https://docs.docker.com/engine/reference/builder/#environment-replacement) (in RUN, EXPOSE, VOLUME). It will make your Dockerfile more flexible.
* 1 application = 1 container.
* Run process in the foreground (don't use systemd, upstart or any other similar tools).
* Keep data out of container -- use volumes.
* Do not use SSH (if you need to step into container you can use docker exec command).
* Avoid manual configurations (or actions) inside container.


## Useful commands

```
docker build . -t {TAG_NAME} (build image from dockerfile)
docker volume ls
docker network ls
docker ps (show running containers)
docker ps -a (show all existing containers)
docker logs {CONTAINER_NAME} 
docker logs -f {CONTAINER_NAME} (tail)
docker-compose up
docker-compose up -d (start in daemon)
docker-compose down
docker-compose down -v (recreate named volumes)
docker-compose exec {SERVICE_NAME} /bin/bash (ssh to container)
docker stats (docker statistic info)
```

## Docker volume cache strategy explained:

* Use cached: when the host performs changes, the container is in read only mode.
  * The host’s view of the mount is authoritative. There may be delays before updates made on the host are visible within a container. When you use it? For example when your host continuously changes data that the container service reads and uses it ( like configuration / source code / rendered data from server etc ...)
* Use delegated: when docker container performs changes, host is in read only mode.
  * The container runtime’s view of the mount is authoritative. There may be delays before updates made in a container are visible on the host. When you use it? For example You use it when the container changes the data continuously and you want to backup this data on the host, this is read only operation on host perspective and therefore the right choice would be delegated.
* Use default: When both container and host actively and continuously perform changes on data.
