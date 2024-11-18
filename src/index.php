<?php
require_once __DIR__ . "/../vendor/autoload.php";
use App\Api\ApiHandler;
use App\config\Config;
use GuzzleHttp\Client;
use App\Endpoints\{AccountEndpoint, SummonerEndpoint, MatchEndpoint};
