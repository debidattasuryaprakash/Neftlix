<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AfjvGlNKGjodRKeoqRlzmvGEORxD_5iRvdO6c_BwxgSi7DHL8tbhZbYNKs0VZJvvw9fX8X_JFOgV_lnk',     // ClientID
        'EAyhXK2eoUyh3utX3CxLqSHorW-ZcZHFjVUMfvKq-yglzkBbIgLRA9LM2IGf0ZR9_FZa1KDJ0-wUsAmU'      // ClientSecret
    )
);
?>