<?php

namespace Ccore\Core\Helpers;

use Illuminate\Support\Str;

Class Localee {

    /**
     * Translate column
     * 
     * @param string $column
     * @return string
     */
    public static function transColumn($column)
    {
        $locale = app()->getLocale();
        $fallback = config('app.fallback_locale');
        $query = "(IF (JSON_VALID(".columnize($column)."), 
                (IF(".static::JSON($column, "'$.{$locale}'")." IS NOT NULL, ".static::JSON($column, "'$.{$locale}'").",
                    (IF(".static::JSON($column, "'$.{$fallback}'")." IS NOT NULL, ".static::JSON($column, "'$.{$fallback}'").", NULL))
                )),
            NULL))";
        return preg_replace('/\s+/', ' ', $query);
    }

    /**
     * Translate column if has magic prefix $$
     * 
     * @param string $column
     * @return string
     */
    public static function magicTrans($column)
    {
        $field = null;
        if (Str::startsWith($column, '$$'))
            $field = static::transColumn(str_replace('$$', '', $column));
        else
            $field = columnize($column);
        return $field;
    }

    /**
     * Get JSON column value by key/path
     * 
     * @param string $column
     * @param string $path
     * @return string
     */
    public static function JSON($column, $path) {
        return "JSON_UNQUOTE(JSON_EXTRACT(".columnize($column).", {$path}))";
    }

    /**
     * Check if column is a valid JSON
     * 
     * @param string $column
     * @param string $path
     * @return string
     */
    public static function isJsonNotNull($column, $path) {
        return "JSON_VALID({$column}) AND
            ".static::JSON($column, $path)." IS NOT NULL AND
            ".static::JSON($column, $path)." != ''";
    }
}