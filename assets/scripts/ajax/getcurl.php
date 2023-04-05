<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://harber.mimoapps.xyz/api/getaccess.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);
$response_array = json_decode($response,true);

$onscreen = '<table class="table" width="100%">
                <thead>
                  
                  <th>MESSAGE</th>
                  <th>STATUS</th>
                  <th>COMMENT</th>
                  <th>TAG</th>
                  <th>SUPPORT</th>
                </thead>
              ';
foreach ($response_array as $resp) {
  $onscreen.='<tr>
                <td>'.$resp['message'].'</td>
                <td>'.$resp['status'].'</td>
                <td>'.$resp['comment'].'</td>
                <td>'.$resp['tag'].'</td>
                <td>'.$resp['support'].'</td>
              </tr>';
}
$onscreen.='</table>';
echo $onscreen;











































// $onscreen = '<table class="table" width="100%">
//                 <thead>
//                   <th>NO</th>
//                   <th>ITEM CODE</th>
//                   <th>BARCODE</th>
//                   <th>GROUP</th>
//                   <th>ITEM NAME</th>
//                   <th>COGS</th>
//                   <th>PRICE</th>
//                     <th>STOCK</th>
//                 </thead>
//               ';
// $no=0;
// foreach ($response_array as $resp) {
//   $onscreen.='<tr>
//                 <td>'.++$no.'</td>
//                 <td>'.$resp['i_code'].'</td>
//                 <td>'.$resp['i_barcode'].'</td>
//                 <td>'.$resp['g_code'].'</td>
//                 <td>'.$resp['i_name'].'</td>
//                 <td>'.$resp['i_cogs'].'</td>
//                 <td>'.$resp['i_sell'].'</td>
//                 <td>'.$resp['i_qty'].'</td>
//               </tr>';
  
//https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM