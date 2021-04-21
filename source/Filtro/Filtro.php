<?php
namespace Source\Filtro;

class Filtro{

    /*
        FILTRAGEM DE EMAIL
    */
    public function filterEmail($filter_email): ?string{

        $filter_email =filter_var($filter_email,FILTER_VALIDATE_EMAIL); 

        return $filter_email;
    }    

    /*
        FILTRAGEM DE CARACTERES ESPECIAL
    */
    public function filterSPECIALCHARS(array $data): ?array
    {
        $filter = [];
        foreach($data as $key=>$value){
            $filter[$key]=(is_null($value) ? null : filter_var($value,FILTER_SANITIZE_SPECIAL_CHARS)); 
        }
        return $filter;
    }

    /*
        FILTRAGEM DE TAGS 
    */

    public function filterStripTags( $filter_strip_tags ): ?string{

        $filter_strip_tags =filter_var($filter_strip_tags,FILTER_SANITIZE_STRIPPED);
        return $filter_strip_tags;

    }

    /*
        FILTRAGEM DE URL
    */
    public function filterUrl($filter_url): ?string{
        $filter_url = filter_var($filter_url,FILTER_VALIDATE_URL);
        return $filter_url;
    }

    /*
        FILTRAGEM DE IP
    */
    public function filterIp($filter_ip): ?string{
        $filter_ip = filter_var($filter_ip,FILTER_VALIDATE_IP);
        return $filter_ip;
    }
 
}