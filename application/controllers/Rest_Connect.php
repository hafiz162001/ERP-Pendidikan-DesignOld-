<?php

class Rest_Connect  {
    function http_request_post($url, $header, $body){
        $ch = curl_init($url); 
        //curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);  
        $output = json_decode(curl_exec($ch), true);
        curl_close($ch);      
        return $output;
    }
    function http_request_put($url, $header, $body){
        $ch = curl_init($url); 
        //curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);  
        $output = json_decode(curl_exec($ch), true);
        curl_close($ch);      
        return $output;
    }
    function http_request_get($url, $header, $body){
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);  
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $output = json_decode(curl_exec($ch), true);
        curl_close($ch);      
        return $output;
    }

      function http_request_delete($url, $header, $body){
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body));  
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $output = json_decode(curl_exec($ch), true);
        curl_close($ch);      
        return $output;
    }
}

?>