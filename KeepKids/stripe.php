<?php

class stripe {

    private $api_key;

    public function __construct(string  $api_key){
        $this->api_key = $api_key;
    }

    public function api(string $endpoint, array $data): stdClass{
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => "https//api.stripe.com/v1/$endpoint",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERPWD => $this->api_key,
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_POSTFIELDS => http_build_query($data)
        ]);
        $response = json_decode(curl_exec($ch));
        echo('api');
        var_dump($response);
        
        curl_close($ch);
        return $response;
    }

}