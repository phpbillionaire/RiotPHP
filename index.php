<?php

require_once __DIR__ . "/vendor/autoload.php";

use src\Api\ApiHandler;
use src\config\Config;
use GuzzleHttp\Client;
use src\Endpoints\AccountEndpoint;
use src\Endpoints\SummonerEndpoint;
use src\Endpoints\MatchEndpoint;
// Init Guzzle Http Client
$http = new Client();

// Global Regions
$americasRegion = new Config(region: "americas");
$asiaRegion = new Config(region: "asia");
$europeRegion = new Config(region: "europe");
$seaRegion = new Config(region: "sea");

// Global Apis
$americasApi = new ApiHandler(config: $americasRegion, httpClient: $http);
$europeApi = new ApiHandler(config: $europeRegion, httpClient: $http);
$asiaApi = new ApiHandler(config: $asiaRegion, httpClient: $http);
$seaApi = new ApiHandler(config: $seaRegion, httpClient: $http);

// Endpoints for /account/
$americasAccount = new AccountEndpoint(apiHandler: $americasApi);

// Servers
$euw = new Config(region: "euw1");
$na = new Config(region: "na1");
$ru = new Config(region: "ru1");
$eune = new Config(region: "eune1");

// Local Apis
$euwApi = new ApiHandler(config: $euw,httpClient: $http);
$naApi = new ApiHandler(config: $na, httpClient: $http);
$ruApi = new ApiHandler(config: $ru, httpClient: $http);
$euneApi = new ApiHandler(config: $eune, httpClient: $http);

// Endpoint for /summoner/ for EUW player
$euwSummoner = new SummonerEndpoint(apiHandler: $euwApi);

$naMatch = new MatchEndpoint(apiHandler: $americasApi);
$euwMatch = new MatchEndpoint(apiHandler: $europeApi);

// Get Puuid via Global Api
$puuid = $americasAccount->getPuuid(name: "Kenvi", tag: "NA1");

// Get summoners data
$summonerData = $euwSummoner->getData(puuid: $puuid);

$match = $naMatch->getMatchById(matchId: "NA1_5156525951");
$matchPuuid = $naMatch->getMatchesByPuuid(puuid: $puuid);

print_r($matchPuuid);
print_r($summonerData);
print_r($match);