
     <?php
       require('sidebar.php'); 
?>

<?php
$conn = new mysqli("localhost", "groupcom_360_engineering", "360password#", "groupcom_360_engineering");
$transaction_id = $_GET['transaction_id'];

mysqli_query($conn, "UPDATE bank_transfers SET status='Verified' WHERE transaction_id='$transaction_id'");

// Fetch client phone number
// Fetch client phone number
$result = mysqli_query($conn, "SELECT phone FROM bank_transfers WHERE transaction_id='$transaction_id'");
$row = mysqli_fetch_assoc($result);
$number = $row['phone'];

// Ensure number starts with 880
if (substr($number, 0, 3) !== "880") {
    // If user entered like 01318098071, convert to 8801318098071
    if (substr($number, 0, 2) === "01") {
        $number = "88" . $number;
    } else {
        // fallback: just prepend 880
        $number = "880" . $number;
    }
}


$url = "https://api.mimsms.com/api/SmsSending/SMS";

$data = [
    "UserName"        => "360socialbd@gmail.com", // your MimSMS login email
    "Apikey"          => "RORWZL4NO45KRAK7AYIFD0WI8", // your API key
    "MobileNumber"    => $number, // recipient number
    "SenderName"      => "360 Eng&Con", // approved sender ID
    "TransactionType" => "T", // transactional SMS
    "Message"         => "Your payment with Transaction ID $transaction_id has been verified."
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    var_dump($response); // should show JSON like {"status":"SUCCESS","trxnId":"12345"}
}

curl_close($ch);

header("Location: customer_payment");
?>

<?php
   require('footer.php');    
?>