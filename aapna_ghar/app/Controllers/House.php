<?php

namespace App\Controllers;
use App\Models\House_Model;

class House extends BaseController
{
	
	public function index()
	{			
		$House = new House_Model();
		$data['house'] = $House->get_all_houses();
		return view('public/property-grid.php',$data);
	}

	public function user_house_details(){
		$email = $_GET['email'];
		$House = new House_Model();
		$data['house'] = $House->get__owner_house_details($email);
		return view('profile',$data);
	}

	function house_details(){
		$id = $_GET['id'];
		$House = new House_Model();
		$data['house'] = $House->get_house_details($id);
		//print_r($data);
		return view('public/property-single.php');
	}
}
