<?php
  $curl_handle = curl_init();
  $url = "https://92485f0506a19c882fb1997d1d3a6542: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@jinal-development-store.myshopify.com/admin/api/2022-10/products.json";

  curl_setopt($curl_handle, CURLOPT_URL, $url);
  curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
  $curl_data = curl_exec($curl_handle);
  curl_close($curl_handle);
  $response_data = json_decode($curl_data);

?>

<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body_html</th>
        <th>vendor</th>
        <th>handle</th>
        <th>status</th>
        <th>Image</th>
    </tr>
    <?php foreach ($response_data->products as $key => $value) { ?>
    <tr>
        <td><?php echo $value->id; ?></td>
        <td><?php echo $value->title; ?></td>
        <td><?php echo $value->body_html; ?></td>
        <td><?php echo $value->vendor; ?></td>
        <td><?php echo $value->handle; ?></td>
        <td><?php echo $value->status; ?></td>
        <td class="img-cover"><img src="<?php echo $value->image->src; ?>" /></td>
    </tr>
    <?php } ?>
</table>

<style>
td.img-cover {
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
}

td.img-cover img {
    width: auto;
    height: 100px;
    object-fit: cover;
}
</style>