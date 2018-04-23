<?php

use Ratchet\Server\IoServer;
use ChatMaster\ChatWebSocket;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

require dirname ( __DIR__ ) . '../vendor/autoload.php';

$server = IoServer::factory ( new HttpServer( new WsServer( new ChatWebSocket () ) ), 8080 );

// telnet等での確認用。Httpに乗せないで直接ストリームで動作確認。
// $server = IoServer::factory ( new ChatWebSocket () , 8080 );
$server->run ();
