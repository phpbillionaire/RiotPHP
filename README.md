# RiotGamesPHP

PHP 8.3.3 Wrapper for https://developer.riotgames.com/apis

## First Steps

### 1. Initialize project

```angular2html
composer install
```

### 2. Usage

Applications entry point is **index.php**.

Add **autoload.php** and needed classes.
```php
require_once __DIR__ . "/vendor/autoload.php";

use App\Api\ApiHandler;
use App\config\Config;
use GuzzleHttp\Client;
```
Initiliaze Guzzle Http Client
```php
$http = new Client();
```
Create region
```php
$americasRegion = new Config(region: "americas"); 
// It will add region to your uri "https://{$this->config->getRegion()}.api.riotgames.com/",
```
Create Api Handler for your region
```php
$americasApi = new ApiHandler(config: $americasRegion, httpClient: $http);
```
Now you can pass your Api Handler to Endpoint

```php
$americasAccount = new AccountEndpoint(apiHandler: $americasApi);
```
Example of usage
```php
$puuid = $americasAccount->getPuuid(name: "Kenvi", tag: "NA1");
```

## Attention
This library is not finished yet.

