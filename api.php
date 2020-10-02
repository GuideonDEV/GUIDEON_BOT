<?php

////////////////=============[Team Zeltrax]===============////////////////

$botToken = "Enter ur bot token here"; ////////////=========[Bot Token]==========////////
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$e = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$info = json_encode($update,JSON_PRETTY_PRINT);
$cmds11 = "<b>Hey, welcome to this Bot! Below I show you all available commands:</b>%0A%0A<u>Bin lookup:</u> <code>/bin xxxxxx</code>%0A%0A<u>SK-Key Check:</u> <code>/sk sk_live_xxxxxxxxxxxx</code>%0A%0A<u>Card-Check:</u> <code>/chk xxxxxxxxxxxxxxxx|xx|xx|xxx</code><b>%0ABOT BY:</b> @ZeltraxRockz Zeltrax";
switch($message) {
case "/start":
sendMessage($chatId, "Hey! I am a CC-Checker bot with a few extras. Send /cmds for a list of all commands!<b>%0ABOT BY:</b> @ZeltraxRockz Zeltrax");
break;
case "/cmds":
sendMessage($chatId, $cmds11);
break;
case "/info":
sendMessage($chatId,$info);
break;}
if (strpos($message, "/bin") === 0) {
$bin = substr($message, 5);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$resul = curl_exec($ch);
$result = strtoupper($resul);
$fim = json_decode($result,true);
$bank = $fim['BANK']['NAME'];
$country = $fim['COUNTRY']['NAME'];
$brand = $fim['SCHEME'];
$type =$fim['TYPE'];
$level =$fim['BRAND'];
$flag = $fim['COUNTRY']['EMOJI'];
$currency = $fim['country']['currency'];
$type3 = strtoupper($fim['type']);
$response ='BinData:'.$type1.'-'.$type3.'-'.$country.'-'.$type.' -'.$bank.' BANK '.$flag.'';
$response = '✔️ Valid BIN <b>%0ABRAND: </b>'.$brand.'<b>%0ATYPE: </b>'.$type.'<b>%0ALEVEL: </b>'.$level.'<b>%0ABANK: </b>'.$bank.' <b>%0ACOUNTRY: </b>'.$country.' '.$flag.'%0A<b>CHECKED BY:</b> '.$username.'<b>%0ABOT BY:</b> @ZeltraxRockz Zeltrax';
sendMessage($chatId, $response);}



/////////////////////////////////////////////////////////////////////////////////////
if (strpos($message, "/chk") === 0) {
$d ="Love Zeltrax.$bin";
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano   = $i[2];
$ano1  = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
extract($_POST);
}elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
extract($_GET);}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
function value($str,$find_start,$find_end){
$start = @strpos($str,$find_start);
if ($start === false){
return "";}
$length = strlen($find_start);
$end    = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));}
function mod($dividendo,$divisor){
return round($dividendo - (floor($dividendo/$divisor)*$divisor));}



#=====================================================================================================#
////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ' ');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept:  ',
'accept-encoding:   ',
'content-type:  ',
'origin:  ',
'referer:  ',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '  ');

 $result = curl_exec($ch);
 $token = trim(strip_tags(getStr($result1,'"id": "','"')));


//////2req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ' ');
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
///'Host: ',
  'Origin: ',
  'Accept-Encoding: ',
  'Referer: ',
  'content-type: ',
  'Cookie: ',
  'accept: ',
  'sec-fetch-dest: empty',
  'sec-fetch-mode: cors',
  'sec-fetch-site: same-origin',
   ));
curl_setopt($ch, CURLOPT_POSTFIELDS,' ');
  $result2 = curl_exec($ch);
 $message = trim(strip_tags(getstr($result2,'"message":"','"')));

///////////////////////// Bin Lookup Api //////////////////////////

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
///ENVIAR RESULTADO AL CHAT
$response = '<u>CARD:</u> <code>'.$lista.'</code><u>%0A%0ASTATUS:</u> <b>'.$skresult.'</b>%0A%0A<u>RESPONSE:</u> <b>'.$skresponse.'</b>%0A%0A----- BinData -----<b>%0ABANK: </b>'.$bank.'<b>%0ATYPE: </b>'.$type.'<b>%0ACOUNTRY: </b>'.$country.' '.$emoji.' %0A--------------------<u>%0A%0ACHECKED BY:</u> @'.$username.'<u>%0A%0ATIME TAKEN:</u> <b>'.$time.'s</b><u>%0A%0ABOT BY:</u> @ZeltraxRockz Zeltrax';
        sendMessage($chatId,$response);}

////////////////=============[Team Zeltrax]===============////////////////
?>
