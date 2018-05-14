Adm.Tools API
========================

Пакет для работы с API контрольной панели <a href="https://adm.tools" target="_blank">adm.tools</a>.

Использование
--------------
Для пользования API контрольной панели, небоходимо зайти на страницу <a href="https://adm.tools/user/api/">API</a> и получить токен для подключения и настроить ограничения доступа. Рекомендуем ознакомиться с <a href="https://api.adm.tools/" target="_blank">сайтом документации</a> по API.

Пример использования
--------------
Предполагается установка пакета в директорию vendor/

Создание обработчика запросов

```php
require_once __DIR__.'/vendor/autoload.php'; // или настроить автозагрузку по пространствам имен

use AdmTools\UApi\Processor;
use AdmTools\UApi\Request;
use AdmTools\UApi\Response;
use AdmTools\UApi\Entity;

/**
  * user-email - ваш логин/адрес электронной почты на сайте adm.tools
  * token - токен для подключения полученный на странице https://adm.tools/user/api/#/tab-token
  * Третьим параметром идет необязательный host, по умолчанию имеющий значение https://adm.tools/api.php
  */
$processor = new Processor('<user-email>', '<token>'); 
```

Пример создания запроса на заказ хостинг-аккаунта 

```php
// Список всех доступных тарифных планов можно получить по запросу AdmTools\UApi\Request\Hosting\Account\Plans()
$planId = 93;

$hosting = new Entity\Billing\Cart\Hosting();
$hosting
  ->setPlan($planId)
  ->setPeriod(Entity\Billing\Cart\Hosting::PERIOD_3)
  ->setLogin('testAcc')
  ->setCountry(Request\Hosting\Account\Migrate::COUNTRY_USA)
;

$request = new Request\Billing\Cart\Order();
$request->setHosting($hosting);
/** @var Response $result */
$response = $processor->send($request);
print_r($response);
```