
<?php
class User extends DataMapper {
    var $has_many = array('user_has_activity','user_has_permission_enroll');

    

    /**
     * get full name
     */
    public function full_name()
    {
        return $this->first_name .' '. $this->last_name;
    }   

}

/* End of file User.php */
/* Location: ./application/model/User.php */