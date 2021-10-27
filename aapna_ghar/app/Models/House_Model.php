<?php

namespace App\Models;

use CodeIgniter\Model;

class House_Model extends Model
{
    //protected $table = 'house';
    public function get_all_houses(){
        $db = db_connect();
        $sql = "SELECT * FROM house";
        $query = $db->query($sql);
        return $query;
    }

    public function get_house_details($id){
        $db = db_connect();
        $id = $db->escape($id);
        $sql = "SELECT * FROM house WHERE id = $id";
        $query = $db->query($sql);
        return $query;
    }
    public function get_owner_house_details($email){
        $db = db_connect();
        $email = $db->escape($email);
        $sql = "SELECT * FROM house WHERE users_id IN (SELECT id FROM users WHERE email_id=$email)";
        $query = $db->query($sql);
        return $query;
    }
}