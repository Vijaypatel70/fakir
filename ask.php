<body style='background-color:White'>

   <html><head><title>FREE</title> <meta name="viewport" content="width=device-width"><style>
input[type=text],[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;}input[type=submit]:hover {
    background-color: #45a049;}div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}.error {background:#ffebe8; border:1px solid #dd3c10; padding:2px; text-align:center; font-weight:normal; color:maroon;}.success {background:#fff8cc; border:1px solid #ffe222; padding:10px; text-align:center; font-weight:normal; color:#000;}</head>

</style></head><title></title><body><center><b><font color='black' size='3'><hr>free<center><hr>

       
    
 
     
     
     
<?php

if(!isset($_POST['submit'])){
    echo"<form action='' method='POST'>
    <input type='text' class='input' name='mo' placeholder='Enter Mobile Number' required>
    <input type='submit' class='submit' name='submit' value='login'>";
}

if(isset($_POST['submit'])){
    
    error_reporting(0);
    
    function random($length){
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++){
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    function randomnumber($length){
        $str = "";
        for($i = 0; $i < $length; $i++){
            $str .= mt_rand(0,9);
        }
        return $str;
    }
    
    $inm=randomnumber(30);
    $mo = $_POST['mo'];
    $otp = $_POST['otp'];
 
$data='{"email":"","mobile":"'.$mo.'","geoLocState":"","state":"","nae":{"gaid":"0b32d04f-d4a7-45e0-9fe4-4bf9b21f7b5e","appVersion":"5601.12","clientTime":1740074578536,"dpi":0,"deviceId":"44c7df13a7bf991f","isDeviceRooted":0,"limitAdwrdsTrckngStatus":"0","os":"Android","osVersion":"10","screenSize":5.7,"device_arch_info":"64Bit","device_os_32_bit_supported":"true","device_os_64_bit_supported":"true","is32BitBuild":"0","utmParams":{"reqQueryParams":{"install_time":"2025-02-20 18:02:31.496","af_message":"organic install","af_status":"Organic","is_first_launch":true}},"dataSent":true,"install_flag":1,"device_manufacturer":"Xiaomi","distribution_medium":"PLAYSTORE","device_model":"Redmi 8","connection_type":"NETWORK_TYPE_LTE","channelId":"6003","appsflyerId":"1740074540510-5699449572024443990","firebase_app_instance_id":"b8caab714e1f8e08dd6e762a4136c0ce","action":"getNaeAttribution"},"whatsappAlerts":false}';

$reshead[]='Host: www.wowzy.com';
$reshead[]='application/json, text/plain, */*';
$reshead[]='user-agent: {"AppVersion":"5601.12","OSVersion":"10","appFlavorName":"ludo_lite","reverieFlavorName":"ludo_lite","pokerFlavourName":"","ludoFlavourName":"ludo_lite","isRCOnly":false}Mozilla/5.0 (Linux; Android ; ; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/54.0.2840.85 Mobile Safari/537.36 [WOWZYLiteAndroid/5601.12]';
$reshead[]='content-type: application/json ';
$reshead[]='cookie: sameSiteNoneSupported=true';

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'https://www.wowzy.com/api/fl/auth/v3/getOtp');
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$reshead);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
$output=curl_exec($ch);
$json=json_decode($output,true);
$success = $json['success'];
$data = $json['data'];
$ageAbove18 = $json['data']['ageAbove18'];
$otpTransactionId = $json['data']['otpTransactionId'];
$regProductType = $json['data']['regProductType'];
$isExistingUser = $json['data']['isExistingUser'];
$playcircle = $json['data']['playcircle'];
$authStatus = $json['data']['authStatus'];
$mobile = $json['data']['mobile'];
$userInput = $json['data']['userInput'];
$uniqueIdentifier = $json['data']['uniqueIdentifier'];
 if($success = "success"){
echo"<br><font color='green'>Otp sended success</font><br><br>";
echo"<form action='reg.php' method='POST'>
<input type='hidden' name='mo' value='$mo' required>
 <input type='hidden' name='otp' value='$otp' required>
 <input type='text' class='input' name='otp' placeholder='Enter OTP' required>
 <input type='submit' class='submit' name='submit' value='Submit'>";
        
    }else{
echo"<br><font color='red'>$output<br></font>";

 }}

?>
