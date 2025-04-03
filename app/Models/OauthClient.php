<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Laravel\Passport\Client;

class OauthClient extends Client
{
    use HasUuids;

    public $incrementing = false;

    protected $keyType = 'string';
}
