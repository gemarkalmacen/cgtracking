<?php

namespace App\Exceptions;

use App\Traits\ApiResponser;
use Exception;

class NotFoundException extends Exception
{
    use ApiResponser;

    public function render()
    {
        return $this->error($this->message, $this->code);
    }
}
