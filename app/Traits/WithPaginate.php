<?php

namespace App\Traits;

Trait WithPaginate {
    function scopeWithPaginate($query, $param) {
        return $query->when(isset($param['page']), function($query) use ($param) {
            return $query->paginate($param['limit'] ?? 15 );
        }, function($query) {
            return $query->get();
        });
    }
}
