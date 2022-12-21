<?php

$data = array(
    'product' => array(
                       'id' => $id,                                       
                        'title' => 'Premium Floral Box Of Chocolates-12 Pcs',
                        'body_html' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",                             
                        'tags' => tea,
                         'variants' => array(array(
                                'id' => 765906435567879,
                                'product_id' => 7777246300,                                                      
                                'price' => 100.00))
                            )   
           );

    $url = "https://92485f0506a19c882fb1997d1d3a6542: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@jinal-development-store.myshopify.com/admin/api/2022-10/products.json";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec ($curl);       
    curl_close($curl);

    $result = json_decode($result);
    print_r($result);

?>

