<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('mongo_db');
    }


	public function getUser()
	{
        // $res = $this->mongo_db->where(array('name'=>"fdsf"))->get('users');
        $res = $this->mongo_db->aggregate('users',[
            ['$match'=>['name'=>"fdsf"]],
            ['$project'=>['name'=>1]]
            
        ]);
        // print_r($res);
        foreach($res as $data){
            echo "<pre>";print_r($data);
        }
        die;
	}
}
