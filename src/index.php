<?php
require_once __DIR__ . "/../vendor/autoload.php";

use App\Api\ApiHandler;
use App\Config\Config;
use GuzzleHttp\Client;
use App\Endpoints\Account\AccountEndpoint;
use App\Endpoints\LOL\Summoner\SummonerEndpoint;
$http = new Client();

$na = new Config(region: "na1");
$americas = new Config(region: "americas");

$naApi = new ApiHandler($na, $http);
$americasApi = new ApiHandler($americas, $http);

$accountEndpoint = new AccountEndpoint($americasApi);
$summonerEndpoint = new SummonerEndpoint($naApi);
$puuid = $accountEndpoint->getPuuid(name: "Doublelift", tag: "NA1");
$data = $summonerEndpoint->getData($puuid);
print_r($data);