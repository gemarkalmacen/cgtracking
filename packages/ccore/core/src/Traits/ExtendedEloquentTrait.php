<?php

namespace Ccore\Core\Traits;

use Ccore\Core\Helpers\Localee;

Trait ExtendedEloquentTrait {

    /**
     * Conditional where clause
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param string $key
     * @param any $value
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilterBy($query, $key, $value)
    {
        return $query->when($value, function ($query, $value) use ($key) {
            return $query->whereIn($key, explode(',', $value));
        });
    }

    /**
     * Order records using datatable format
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param array $list
     * @param array $fields
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeExternalOrder($query, $list, $fields)
    {
        foreach($list as $order) {
            $column = $fields[intval($order['column'])];
            $query = $this->handleMultipleOrder($query, $column, $order['dir']);
        }
        return $query;
    }

    /**
     * Order records using API format e.g asc(name)
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param string|array $list
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeDirectOrder($query, $list)
    {
        if (isset($list)) {
            if (is_array($list)) {
                foreach ($list as $order) {
                    $query = $this->handleMultipleOrder($query, $order['column'], $order['dir']);
                }
            } else {
                $list = explode(',', $list);
                foreach ($list as $order) {
                    preg_match("/\(([^\]]*)\)/", $order, $matches);
                    $dir = str_replace($matches[0], '', $order);
                    $query = $this->handleMultipleOrder($query, $matches[1], $dir);
                }
            }
        }
        return $query;
    }

    /**
     * Handle multiple column order
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param string|array $column
     * @param string $dir
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function handleMultipleOrder($query, $column, $dir)
    {
        if (is_array($column)) {
            foreach ($column as $item) {
                if (!empty($item)) {
                    $query = $query->singleOrder($item, $dir);
                }
            }
        } else {
            if (!empty($column)) {
                $query = $query->singleOrder($column, $dir);
            }
        }
        return $query;
    }
    
    /**
     * Handle single column order
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param string $column
     * @param string $dir
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeSingleOrder($query, $column, $dir)
    {
        return $query->orderByRaw(
            Localee::magicTrans($column)." {$dir}"
        );
    }

    /**
     * Search functionality
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param string $search
     * @param array $columns
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search, $columns)
    {
        return $query->when($search, function($query, $search) use ($columns) {
            $query->where(function($query) use ($search, $columns) {
                foreach($columns as $column) {
                    $query->orWhereRaw(
                        Localee::magicTrans($column)." LIKE '%{$search}%'"
                    );

                }
            });
        });
    }
}