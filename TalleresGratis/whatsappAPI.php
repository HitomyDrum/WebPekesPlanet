<?php
    //TOKEN QUE NOS DA FACEBOOK
    $token = 'EAADl4koLfToBO3x0SOZBl9dZBqfJPFHNtf1MOoOgiGNseN6EusShpcS89PqI2T4CtnPEMFFbDXQlE9Np6DPXWocRyfDMpocirjy7j4ZB41FHcx5DV1I16ZCOHqZBu0myb3unt8XZA8kNXEkqzzuGENtlcyQEzwZCZALdZCWRQ4EHkTL2QmJktJN6vMH63naMkuHjUT3LJZBHqOLRBWwDilzDqn';
    //NUESTRO TELEFONO
    $telefono = "51$cell";
    //URL A DONDE SE MANDARA EL MENSAJE
    $url = 'https://graph.facebook.com/v17.0/185585021302812/messages';

    //CONFIGURACION DEL MENSAJE
    $mensaje = ''
            . '{'
            . '"messaging_product": "whatsapp", '
            . '"to": "'.$telefono.'", '
            . '"type": "template", '
            . '"template": '
            . '{'
            . '     "name": "taller_gratis_bienvenida",'
            . '     "language":{ "code": "es_MX" } '
            . '} '
            . '}';
    //DECLARAMOS LAS CABECERAS
    $header = array("Authorization: Bearer " . $token, "Content-Type: application/json",);
    //INICIAMOS EL CURL
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //OBTENEMOS LA RESPUESTA DEL ENVIO DE INFORMACION
    $response = json_decode(curl_exec($curl), true);
    //IMPRIMIMOS LA RESPUESTA 
    print_r("Que mrd");
    print_r($response);
    //OBTENEMOS EL CODIGO DE LA RESPUESTA
    $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    //CERRAMOS EL CURL
    curl_close($curl);
?>