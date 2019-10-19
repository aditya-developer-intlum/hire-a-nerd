<?php

use App\ChatRelation;
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

Broadcast::channel('avail', function ($user) {
    return $user;
});
Broadcast::channel('chat{id}', function ($user,$id) {
    return true;
});
Broadcast::channel('user.{toUserId}', function ($user, $toUserId) {
    // return ChatRelation::where('sender_id',$user->id)
    // ->where('receiver_id',$toUserId)
    // ->exists()
    return true;
});