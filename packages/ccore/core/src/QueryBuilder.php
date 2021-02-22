<?php

namespace Ccore\Core;

use Spatie\QueryBuilder\QueryBuilder as Builder;

class QueryBuilder extends Builder
{
    /**
     * Standard paginatioon
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @param array $params
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getPaginate($columns = ['*'])
    {
        $request = request();
        return $this->when(
            $request->hasAny(['perPage', 'page']),
            // positive
            function($query) use ($request, $columns) {
                $perPage = $request->query('perPage') ?? 10;
                $page = $request->query('page') ?? 1;
                // operations
                $perPage = intval($perPage);
                $offset = (intval($page) * $perPage) - $perPage;
                return [
                    'total' => $query->getQuery()->getCountForPagination(),
                    'data' => $query->offset($offset)->limit($perPage)
                        ->get($columns)
                ];
            },
            // negative
            function($query) use ($columns) {
                return $query->get($columns);
            }
        );
    }
}