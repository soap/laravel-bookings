<?php

namespace App\Repositories;

class ConfigRepository
{
    public function get($key)
    {
        return config($key);
    }
}
