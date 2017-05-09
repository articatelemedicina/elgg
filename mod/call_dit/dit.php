<?php

function sendLogToDit($service, $eventId, $function, $pageId, $userId, $guiType) 
{

// Setup cURL
$ch = curl_init('https://lipcsiksb.servicebus.windows.net/lipcsikEH/publishers/ICT4Life/messages');

$header = array('Authorization: '.generateSasToken(), 'Content-Type: application/json');        	
$postData = getJSON($service, $eventId, $function, $pageId, $userId, $guiType);

$options = array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_POSTFIELDS => json_encode($postData),
    CURLOPT_VERBOSE => TRUE);
elgg_dump($ch);
elgg_dump(json_encode($postData));
curl_setopt_array($ch, $options);

// Send the request
curl_exec($ch);

$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

return $httpcode;

}

function generateSasToken() 
{ 
$uri = 'https://lipcsiksb.servicebus.windows.net/lipcsikEH/publishers/ICT4Life/messages';
$sasKeyName = 'ljoToOQDDIjI3eQUCk3LwV6Gmm2tWoMYl6AopK/XTic=';
$sasKeyValue = 'lipcsikSAP';

$targetUri = strtolower(rawurlencode(strtolower($uri))); 
$expires = time();     
$expiresInMins = 60; 
$week = 60*60*24*7;
$expires = $expires + $week; 
$toSign = $targetUri . "\n" . $expires; 
$signature = rawurlencode(base64_encode(hash_hmac('sha256',             
 $toSign, $sasKeyName, TRUE))); 

$token = 'SharedAccessSignature sr=' . $targetUri . '&sig=' . $signature . '&se=' . $expires . '&skn=' . $sasKeyValue;

return $token; 
}

function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
}

function getJSON($service, $eventId, $function, $pageId, $userId, $guiType) {

date_default_timezone_set('UTC');

	$postData = array(
   	 'eventId' => $eventId,
   	 'actionSlug' => 'slug',
   	 'eventTime' => date ('Y-m-d H:i:sZ'),
   	 'function' => $function,
   	 'guiType' => $guiType,
   	 'guid' => getGUID(),
   	 'index' => 0,
   	 'isNormal' =>  true,
   	 'pageId' => $pageId,
   	 'service' => $service,
   	 'userId' => $userId,
   	 'isGamified' => false
	);
	
	return $postData;
}
?>
