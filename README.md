## PHP Proxy Judge

Simple PHP script that returns information about your request. Useful when testing proxy servers.
This also serves as a setup for a simple web-server capable of serving thousands of requests per second on a simple VPS.

## :rocket: Deployment

You need to install Docker on your system first:

```shell
curl -sSL https://get.docker.com/ | sh
```

next, clone this repo and start the containers:

```shell
git clone https://github.com/Athlon1600/azenv.git
cd azenv
docker compose up --build -d
```

:heavy_check_mark: Your server will now start accepting connections on port 80.

## Benchmark

```shell
ab -n 30000 -c 5000 -r http://azenv.net/test
```

## :toolbox: Troubleshooting

> socket() failed (24: Too many open files) while connecting to upstream

Number of open files on your system is too low. Increase it:  
`ulimit -n 65535`

## :zap: Swoole

A slightly different PHP script that returns user's IP address along with their request headers as JSON response.
Powered by Swoole server which can easily handle 10K concurrent requests on a 1 GB box.

Uncomment `swoole` service inside `docker-compose.yml`, and then run:

```shell
docker compose up --build -d swoole
```

alternatively, you can run these:

```shell
## for Linux
docker run --rm -v $(pwd)/swoole:/srv -p 9501:9501 phpswoole/swoole:latest php /srv/index.php

## for windows
docker run --rm -v ${PWD}/swoole:/srv -p 9501:9501 phpswoole/swoole:latest php /srv/index.php
```
