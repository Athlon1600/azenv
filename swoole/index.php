<?php

// $http = new Swoole\Http\Server('127.0.0.1', 9501);
$http = new Swoole\Http\Server("0.0.0.0", 9501);

$http->set(['hook_flags' => SWOOLE_HOOK_ALL]);

$http->on('request', function (\Swoole\Http\Request $request, \Swoole\Http\Response $response) {

    // no: Server swoole-http-server
    $response->header("Server", "");

    $client_ip = $request->server['remote_addr'];
    $uri = $request->server['request_uri'];
    $wantsJson = !empty($request->get['json']);

    if ($uri === "/favicon.ico") {

        $response->status(204);
        $response->header("Content-Type", "");
        $response->end();
        return;
    }

    if ($uri === "/ip") {

        $response->header("Content-Type", "text/plain");
        $response->end($client_ip);
        return;
    }

    $response->header("Content-Type", "application/json");

    $data = [
        'headers' => $request->header,
        'ip' => $client_ip,
        'cookies' => $request->cookie,
        'query' => $request->get
    ];

    $contents = json_encode($data, JSON_PRETTY_PRINT);

    $response->end($contents);
});

$http->start();
