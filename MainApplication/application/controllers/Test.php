<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {


    public function index(){
        $cc = new User_has_activity();
        $cc->where('user_id','1')->get();
        $cc->activity->get_iterated();
        foreach ($cc->activity as $u)
    {
     echo $u->name . '<br />';
    }
}

    


/*
    public function index(){

        $cc = new Activity();
        $cc->where('activity_id','1')->get();
        echo $cc->name;
    }
    */
}




/* End of file Login.php */
/* Location: ./application/controller/Login.php */