<?php

namespace App\Traits;

use Illuminate\Support\Str;

Trait WithBlacklist {

    public function check($name)
    {
        $allow = true;
        foreach ($this->blacklist as $item) {
            if (Str::is($item, $name)) {
                $allow = false;
                break;
            }
        }
        return $allow;
    }
}