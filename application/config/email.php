<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['useragent']='Miele';
$config['mailtype']='html';

/*
 * SENDGRID
*/
/*
$config['protocol']='smtp';
$config['smtp_host']='smtp.sendgrid.net';
$config['smtp_user']='blackcore_miele';
$config['smtp_pass']='5Gd7eNS"s5=Qgp9M';
$config['smtp_port']=587;
$config['crlf']="\r\n";
$config['newline']="\r\n";
 * */
$config['protocol']='smtp';
$config['smtp_host']='localhost';
$config['smtp_user']='';
$config['smtp_pass']='';
$config['smtp_port']=25;
$config['crlf']='\r\n';
$config['newline']='\r\n';