<?php

 $API_KEY = '92485f0506a19c882fb1997d1d3a6542';
 $PASSWORD = 'f5cb0ac89889c33696d53ab28b62ced1';
 $STORE_URL = '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';
 $str_url = 'jinal-development-store.myshopify.com';

 
 $url = "https://".$API_KEY.":".$STORE_URL."@".$str_url."admin/api/2022-01/customers.json";
 $custm_data = "https://92485f0506a19c882fb1997d1d3a6542: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@jinal-development-store.myshopify.com/admin/api/2022-01/customers.json";

 //$customer_data = "https://442c8d72dd15ea360f8abc5c27991b78:shpat_136YGs6ibRtYJx2tLokBCd863NDfaUHNab@janovis.myshopify.com/admin/api/2022-01/customers/";
 $data = json_decode(file_get_contents($custm_data), true);
 print_r($data);
 echo "hello!!!";
 
?>

