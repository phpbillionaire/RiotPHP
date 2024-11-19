<?php
require_once __DIR__ . "/../vendor/autoload.php";
use App\Api\ApiHandler;
use App\Config\Config;
use GuzzleHttp\Client;
use App\Endpoints\{AccountEndpoint, SummonerEndpoint, MatchEndpoint, ChampionMasteryEndpoint};

$http = new Client();

$na = new Config(region: "na1");
$americas = new Config(region: "americas");

$naApi = new ApiHandler($na, $http);
$americasApi = new ApiHandler($americas, $http);

$championMasteryEndpoint = new ChampionMasteryEndpoint($naApi);

$accountEndpoint = new AccountEndpoint($americasApi);

$puuid = $accountEndpoint->getPuuid(name: "Doublelift", tag: "NA1");

//print_r($puuid);
$masteries = $championMasteryEndpoint->getMasteriesByPuuid($puuid);
print_r($masteries);