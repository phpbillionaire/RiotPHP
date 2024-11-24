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

$champMastery = new \App\Endpoints\LOL\ChampionMastery\ChampionMasteryEndpoint($naApi);

$account = $accountEndpoint->getData("Sushee", "NA1");
$championMasteries = $champMastery->getTopMasteries($account->getPuuid());
print_r($championMasteries);