<?php

//
if (!function_exists('toPathOS'))
{
    /**
     * Convert path's format depending on operating system
     *
     * @param string $str
     * @return string
     */
    function toPathOS($str)
    {
        return str_replace(array('/','\\'), DIRECTORY_SEPARATOR, $str);
    }
}

if (!function_exists('option'))
{
    /**
     * Convert collection to select option format
     *
     * @param array $options
     * @param array $keys
     * @return Illuminate\Database\Eloquent\Collection
     */
    function option($options, $keys = array('id', 'text'))
    {
        return $options->map(function($option) use ($keys) {
            return [
                'id' => $option[$keys[0]],
                'text' => $option[$keys[1]]
            ];
        });
    }
}


if (!function_exists('columnize'))
{
    /**
     * Wrap column fields with `
     *
     * @param string $column
     * @return void
     */
    function columnize($column)
    {
        return '`'.str_replace('.', '`.`', $column).'`';
    }
}

if( !function_exists('sanitizeField') )
{
    /**
     * Remove space between
     *
     * @param string $value
     * @param string $return value if empty
     * @return void
     */
    function sanitizeField($string, $return = null)
    {
        if( is_array ($string) ) {
            return array_map($string, function( $str ){
                return trim($str);
            });
        }
        return trim($string) ?? $return ;
    }

}

if( !function_exists('validateDate') )
{
    /**
     * Remove space between
     *
     * @param $date $value
     * @param $format
     * @return void
     */
    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }
}
