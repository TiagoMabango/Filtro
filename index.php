
<!-- 
    Arquivo pra filtros  
->
<?php

require __DIR__.'/Source/autoload.php';
$filtro = new \Source\Filtro\Filtro();

$data = [
    "nome"=>"TiagoMabango<script>alert('77777')</script>",
    "morada"=>"São Pedro da Barra",
    "email"=>"tsss@ksda.com",
    "url"=>"https://free.facebook.com/home.php?ref_component=mfreebasic_home_header&ref_page=%2Fwap%2Fprofile_timeline.php&refid=17&ref=page_creation_announcement",
    "ip"=>"102.182.1.1"
];

    $filtro->filterSPECIALCHARS($data);

    
    //Pegando os valores e sofrendo tramento dos filtros
     echo $filtro->filterSPECIALCHARS($data)['nome'];
     echo $filtro->filterSPECIALCHARS($data)['morada'];
     echo "<br>";
     var_dump(  $filtro->filterEmail($data['email']) );
     echo "<br>";
     echo $filtro->filterStripTags($data['nome']);
     echo "<br>";
     var_dump( $filtro->filterUrl($data['url'])); 
     echo "<br>";
     var_dump( $filtro->filterIp($data['ip'])); 

     //echo $data['nome']; Se executares esse código verás que não foi viltrado
