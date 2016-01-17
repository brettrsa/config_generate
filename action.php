<?php

$hostname = $_POST['hostname'];
$ip_subnet = $_POST['ip_subnet'];
$l2tp_username = $_POST['l2tp_username'];
$l2tp_password = $_POST['l2tp_password'];
$adsl_username = $_POST['adsl_username'];
$adsl_password = $_POST['adsl_password'];
$template = "data/template";
$file_input = fopen($template, "r");


while (!feof($file_input)) {

  $line = fgets($file_input);

  if (strpos($line, '$hostname') !== FALSE)
      print str_replace('$hostname', $hostname, $line)."<br />";

  elseif (strpos($line, '$ip_subnet') !== FALSE)
          print str_replace('$ip_subnet', $ip_subnet, $line)."<br />";

  elseif (strpos($line, '$l2tp_username') !== FALSE)
          print str_replace('$l2tp_username', $l2tp_username, $line)."<br />";

  elseif (strpos($line, '$l2tp_password') !== FALSE)
  		    print str_replace('$l2tp_password', $l2tp_password, $line)."<br />";

  elseif (strpos($line, '$adsl_username') !== FALSE)
  		    print str_replace('$adsl_username', $adsl_username, str_replace('$adsl_password', $adsl_password, $line))."<br />";

  else
  	print $line ."<br />";

}
