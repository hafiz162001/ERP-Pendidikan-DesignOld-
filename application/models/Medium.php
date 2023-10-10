<?php
class Medium extends CI_Model
{   
	function __construct()
	{
        $url = "https://v1.nocodeapi.com/bisaai/medium/cgKmHcYqDBPVFoVl?";
    }

    function get()
	{
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET", 
            CURLOPT_HTTPHEADER => array(
              "Content-Type: application/json"
            ),
          ));

          
        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
    
}