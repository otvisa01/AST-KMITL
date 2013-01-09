
<?php
class User_model extends DataMapper {

    var $table = 'user';
    var $has_many = array('user_has_activity_model','user_has_permission_enroll_model');
    
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
        return $this->user_has_activity_model->get();
    }

}

/* End of file user_model.php */
/* Location: ./application/model/user_model.php */