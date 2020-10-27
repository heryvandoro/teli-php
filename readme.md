# Teli Node
[![Monthly Downloads](https://poser.pugx.org/teli/teli-php/d/monthly)](//packagist.org/packages/teli/teli-php)
[![Version](https://poser.pugx.org/teli/teli-php/version)](//packagist.org/packages/teli/teli-php)


## Documentation
The documentation for the Tele API can be found [here](https://apidocs.teleapi.net/api/).

## Basic Example
```php
use Teli\Teli;

$callApiSIDToken = "TELI_CALL_API_SID_TOKEN"; // Your Call API SID Token from https://control.teli.net
$apiToken = "TELI_API_TOKEN";   // Your API Token from https://control.teli.net
$teli = new Teli($callApiSIDToken, $apiToken);

$response = $teli->sms->send([
    'source' => 2674935581,
    'destination' => 7205551212,
    'message' => 'Hery'
]);
var_dump($response);
```
## Getting help
If you need help installing or using the library, please [file a support ticket](https://teli.net/contact/) here.

If you've instead found a bug in the library or would like new features added, go ahead and open issues or pull requests against this repo!