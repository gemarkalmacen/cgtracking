<?php

namespace Ccore\Core;

class Datatable {

    public static function of($query, $request, $config)
    {
        $query = $query->search($request->search['value'] ?? null, $config['searchable']);
        $total =  $query->getQuery()->getCountForPagination();
        $limit = $request->length;
        $offset = $request->start;
        return [
            'total' => $total,
            'query' => $query->externalOrder($request->order, $config['orderable'])
                ->when($limit > 0, function($query) use ($limit, $offset) {
                    return $query->offset($offset)->limit($limit);
                })
        ];
    }
}