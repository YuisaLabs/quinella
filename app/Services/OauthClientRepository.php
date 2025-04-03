<?php

namespace App\Services;

use App\Models\OauthClient;
use Illuminate\Support\Str;
use Laravel\Passport\ClientRepository;
use Laravel\Passport\Passport;

class OauthClientRepository extends ClientRepository
{
    public function create($userId, $name, $redirect, $provider = null, $personalAccess = false, $password = false, $confidential = true)
    {
        $client = Passport::client()->forceFill([
            'id' => (string) Str::uuid(),
            'user_id' => $userId,
            'name' => $name,
            'secret' => ($confidential || $personalAccess) ? Str::random(40) : null,
            'provider' => $provider,
            'redirect' => $redirect,
            'personal_access_client' => $personalAccess,
            'password_client' => $password,
            'revoked' => false,
        ]);

        $client->save();

        return $client;
    }

    public function delete($oauthClient)
    {
        $client = OauthClient::findOrFail($oauthClient->id);

        $client->tokens()->update(['revoked' => true]);

        $client->forceFill(['revoked' => true])->save();
    }
}
