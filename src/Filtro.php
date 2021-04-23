<?php

namespace Filtro;

class Filtro
{
    /**
     * Email filter.
     * 
     * @param string $email
     * @return null|string
     */
    public static function filterEmail(string $email): ?string
    {

        $filtered_data = filter_var($email, FILTER_VALIDATE_EMAIL); 

        return $filtered_data;
    }    

    /**
     * Special Characters filter.
     * 
     * @param array $data
     * @return null|array
     */
    public static function filterSpecialChars(array $data): ?array
    {
        $filtered_data = [];
        foreach($data as $key=>$value){
            $filtered_data[$key]= is_null($value) ? null : filter_var($value,FILTER_SANITIZE_SPECIAL_CHARS); 
        }

        return $filtered_data;
    }

    /**
     * Strip Tags.
     * 
     * @param string $data
     * @return null|string
     */
    public static function filterStripTags(string $data): ?string
    {
        $filtered_data = filter_var($data, FILTER_SANITIZE_STRIPPED);

        return $filtered_data;
    }

    /**
     * URL filter.
     * 
     * @param string $url
     * @return null|string
     */
    public static function filterUrl(string $url): ?string
    {
        $filtered_data = filter_var($url, FILTER_VALIDATE_URL);

        return $filtered_data;
    }

    /**
     * IP filter.
     * 
     * @param string $ip
     * @return null|string
     */
    public static function filterIp(string $ip): ?string
    {
        $filtered_data = filter_var($ip, FILTER_VALIDATE_IP);

        return $filtered_data;
    }
}