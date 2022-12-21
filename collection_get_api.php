<?php
$url = "https://92485f0506a19c882fb1997d1d3a6542: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@jinal-development-store.myshopify.com/admin/api/2022-10/products.json";
$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, $url);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$curl_data = curl_exec($curl_handle);
curl_close($curl_handle);
$response_data = json_decode($curl_data);
?>

<div class="new-catalogs section-set">
  <div class="home-link1">
    <h1 class="section-title">Corporate Gifts Online</h1>
    <ul class="new-proudts ">
      {%- for block in section.blocks -%}
        {%- assign bkType = block.type | where :'corporate_gift'-%}
        {%- assign corporate_coll = block.settings.corporate_collection -%}
        <li>
           {%- if bkType -%}
              <a href="{{corporate_coll.url}}" >
                <div class="pro-img"><img src="{{ corporate_coll.image | img_url:"master"}}"></div>
                <div class="pro-title">{{ corporate_coll.title }}</div>
              </a>
              <p>&nbsp;</p>
            {%- endif -%}
        </li>
      {%- endfor -%}
    </ul> 
  </div>
</div>