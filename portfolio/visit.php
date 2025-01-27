<?php 

require_once 'src/php/db.php';
require_once 'src/php/functions.php';


$details = [];

$details['path'] = $_SERVER['REQUEST_URI'];

// Get the IP address
$details['IP'] = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

// Get the browser and version
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
if (preg_match('/(Chrome|Firefox|Safari|Opera|Edge|MSIE|Trident)\/([\d\.]+)/i', $userAgent, $matches)) {
    $details['browser'] = $matches[1];
} elseif (strpos($userAgent, 'Trident') !== false) {
    $details['browser'] = 'Internet Explorer';
    preg_match('/rv:([\d\.]+)/', $userAgent, $matches);
} else {
    $details['browser'] = 'Unknown';
}

$details['country'] = 'Unknown';


// Get the operating system and version
if (preg_match('/(Windows NT|Mac OS X|Linux|Android|iPhone|iPad|iPod|Ubuntu|CrOS) ([\d_\.]+)/i', $userAgent, $osMatches)) {
    $details['os'] = $osMatches[1];
} else {
    $details['os'] = 'Unknown';
}

// Get device details
if (preg_match('/(iPhone|iPad|iPod|Android|Windows Phone|Macintosh|Windows|Linux)/i', $userAgent, $deviceMatches)) {
    $details['deviceModel'] = $deviceMatches[1];
} else {
    $details['deviceModel'] = 'Unknown';
}

if (preg_match('/(Samsung|Sony|LG|HTC|Nokia|Motorola|Apple|Google|Microsoft|Windows|Linux)/i', $userAgent, $brandMatches)) {
  $details['deviceBrand'] = $brandMatches[1];
} else {
$details['deviceBrand'] = 'Unknown';
}

// $details['deviceBrand'] = 'Unknown';


insertVisit($details['path'], $details['IP'], $details['country'], $details['browser'], $details['deviceBrand'], $details['deviceModel'], $details['os']);


$val = getVisits();
?>