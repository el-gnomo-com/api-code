/*PHP */

<?php
$app_id = 'YOUR_APP_ID'; // your application app id
$app_secret = 'YOUR_APP_SECRET'; your application app secret
$code = $_GET['code']; // the GET parameter you got in the callback: http://yourdomain/?code=XXX

$get = file_get_contents("http://el-gnomo.com/authorize?app_id={$app_id}&app_secret={$app_secret}&code={$code}");

$json = json_decode($get, true);
if (!empty($json['access_token'])) {
    $access_token = $json['access_token']; // your access token
}
?>
if (!empty($json['access_token'])) {
   $access_token = $json['access_token']; // your access token
   $type = "get_user_data"; // or posts_data
   $get = file_get_contents("http://el-gnomo.com/app_api?access_token={$access_token}&type={$type}");
}
Jsonoutput
{
    "api_status": "success",
    "api_version": "1.3",
    "user_data": {
        "id": "",
        "username": "",
        "first_name": "",
        "last_name": "",
        "gender": "",
        "birthday": "",
        "about": "",
        "website": "",
        "facebook": "",
        "twitter": "",
        "vk": "",
        "google+": "",
        "profile_picture": "",
        "cover_picture": "",
        "verified": "",
        "url": ""
    }
}
