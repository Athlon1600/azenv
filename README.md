## PHP Proxy Judge

Simple PHP script that returns information about your request. Useful when testing proxy servers.

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

Number of open files on your system is too low. Increase it: `ulimit -n 65535`
