<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

//Broadcast::channel('order.{orderId}', function ($user, $orderId) {
//    return $user->id === Order::findOrNew($orderId)->user_id;
//});

Broadcast::channel('transaction.{userId)}', function ($user, $userId) {
    return $user->id === $userId;
});
