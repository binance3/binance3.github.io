<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];

if ($countrycode=='AE')
    header( 'Location: https://www.binance.me/ar/futures/ref/bonustrade10' ) ;
else if ($countrycode=='AR')
    header( 'Location: https://www.binance.me/es/futures/ref/bonustrade10' ) ;
else if ($contrycode=='AT')
    header( 'Location: https://www.binance.me/de/futures/ref/bonustrade10' ) ;
else if ($countrycode=='BE')
    header( 'Location: https://www.binance.me/fr/futures/ref/bonustrade10' ) ;
else if ($countrycode=='BR')
    header( 'Location: https://www.binance.me/pt-BR/futures/ref/bonustrade10' ) ;
else if ($countrycode=='CH')
    header( 'Location: https://www.binance.me/de/futures/ref/bonustrade10' ) ;
else if ($countrycode=='CL')
    header( 'Location: https://www.binance.me/es/futures/ref/bonustrade10' ) ;
else if ($countrycode=='CN')
    header( 'Location: https://www.binance.me/zh-CN/futures/ref/bonustrade10' ) ;
else if ($countrycode=='CO')
    header( 'Location: https://www.binance.me/es/futures/ref/bonustrade10' ) ;
else if ($countrycode=='CZ')
    header( 'Location: https://www.binance.me/es/futures/ref/bonustrade10' ) ;
else if ($contrycode=='DE')
    header( 'Location: https://www.binance.me/de/futures/ref/bonustrade10' ) ;
else if ($countrycode=='ES')
    header( 'Location: https://www.binance.me/es/futures/ref/bonustrade10' ) ;
else if ($countrycode=='FR')
    header( 'Location: https://www.binance.me/fr/futures/ref/bonustrade10' ) ;
else if ($countrycode=='ID')
    header( 'Location: https://www.binance.me/id/futures/ref/bonustrade10' ) ;
else if ($countrycode=='IT')
    header( 'Location: https://www.binance.me/it/futures/ref/bonustrade10' ) ;
else if ($countrycode=='JP')
    header( 'Location: https://www.binance.me/ja/futures/ref/bonustrade10' ) ;
else if ($countrycode=='KR')
    header( 'Location: https://www.binance.me/ko/futures/ref/bonustrade10' ) ;
else if ($countrycode=='NL')
    header( 'Location: https://www.binance.me/nl/futures/ref/bonustrade10' ) ;
else if ($countrycode=='MX')
    header( 'Location: https://www.binance.me/es/futures/ref/bonustrade10' ) ;
else if ($contrycode=='PE')
    header( 'Location: https://www.binance.me/es/futures/ref/bonustrade10' ) ;
else if ($countrycode=='PH')
    header( 'Location: https://www.binance.me/ph/futures/ref/bonustrade10' ) ;
else if ($countrycode=='PL')
    header( 'Location: https://www.binance.me/pl/futures/ref/bonustrade10' ) ;
else if ($countrycode=='PT')
    header( 'Location: https://www.binance.me/pt-PT/futures/ref/bonustrade10' ) ;
else if ($countrycode=='RO')
    header( 'Location: https://www.binance.me/ro/futures/ref/bonustrade10' ) ;
else if ($countrycode=='RU')
    header( 'Location: https://www.binance.me/ru/futures/ref/bonustrade10' ) ;
else if ($countrycode=='SA')
    header( 'Location: https://www.binance.me/ar/futures/ref/bonustrade10' ) ;
else if ($countrycode=='TR')
    header( 'Location: https://www.binance.me/tr/futures/ref/bonustrade10' ) ;
else if ($countrycode=='UA')
    header( 'Location: https://www.binance.me/ru/futures/ref/bonustrade10' ) ;
else if ($countrycode=='VN')
    header( 'Location: https://www.binance.me/vi/futures/ref/bonustrade10' ) ;
else
    header( 'Location: https://www.binance.me/en/futures/ref/bonustrade10' ) ;
?>