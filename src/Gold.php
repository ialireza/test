<?php

namespace ForNext\Gold;

use Illuminate\Support\Facades\Date;

class Gold
{
    public function __construct()
    {
        return Date::now('Asia/Tehran');
    }
}
