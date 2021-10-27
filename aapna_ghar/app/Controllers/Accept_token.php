<?php

namespace App\Controllers;

class Accept_token extends BaseController
{
	public function index()
	{
		$token=$_GET['token'];
		if($token!=NULL){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_URL, 'https://oauth2.googleapis.com/tokeninfo?id_token='.$token);
			$content = curl_exec($ch);
//			echo $content;
			$content=json_decode($content);
			// $content['token']=$token;
			print_r($content);
			return json_encode($content);
		}
	}
}
