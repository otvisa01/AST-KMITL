
<?php
class User extends DataMapper {
var $has_many = array('user_has_activity','user_has_permission_enroll');
     var $validation = array(
        'username' => array(
            'label' => 'Username',
            'rules' => array('required','min_length' => 3, 'max_length' => 20),
        ),
        'password' => array(
            'label' => 'Password',
            'rules' => array('required', 'min_length' => 6),
        )
    );

    

}

/* End of file User.php */
/* Location: ./application/model/User.php */