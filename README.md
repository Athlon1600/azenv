## azenv.net

Entire application used to check proxy server statuses.

## Installation

Docker:

```shell
curl -sSL https://get.docker.com/ | sh
docker compose up --build -d
```

## Benchmark

> systemctl status php7.4-fpm.service
>
> ab -n 15000 -c 500 http://azenv.net/test

## Scaling

ulimit -n

now shows 65536 instead of 1024 = and no problems now

- https://djangoadventures.com/how-to-increase-the-open-files-limit-on-ubuntu/
