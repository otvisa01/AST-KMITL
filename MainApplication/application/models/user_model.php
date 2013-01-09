
<?php
class User_model extends DataMapper {

    var $table = 'users';
    var $has_many = array('user_has_activity','user_has_permission_enroll');
    
    /**
     * get full name
     */
    public function full_name()
    {
        return $this->first_name .' '. $this->last_name;
    }

    /**
     * get activities
     */
    public function get_activities()
    {
        return $this->user_has_activity->get();
    }

}

/* End of file User.php */
/* Location: ./application/model/User.php */