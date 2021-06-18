# app

## Dev with Docker

- Build docker image:

```bash
  docker-compose build
```

- Launch docker-compose for local development:

```bash
  docker-compose up
```

- Alternative you can detach the process (don't forget to stop it later):

```bash
  docker-compose up -d
```

-Install api platform dependancies

```bash
  docker-compose exec api composer install
```

-Install vuejs dependancies

```bash
  docker-compose exec app npm install
```

- Stop local-development:

```bash
  docker-compose down
```

- To access the logs:

```bash
  docker container ls
```

Give you the id of the container `front`

```bash
  docker container logs <containerID>
```
