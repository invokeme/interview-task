<?php

return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'no-reply@example.com',             // автоматическая отправка почты с данного емайл
    'secretKeyExpire' => 60 * 60,                       // время хранения секретного ключа
    'emailActivation' => false,                         // активация по емайл
    'loginWithEmail' => true,                           // авторизация по емайл
];
