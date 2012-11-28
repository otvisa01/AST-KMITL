
<?php
class Permission_enroll extends DataMapper {
	/*
    $has_many = array(
        'user' => array(            // in the code, we will refer to this relation by using the object name 'book'
            'class' => 'user',          // This relationship is with the model class 'book'
            'other_field' => 'permission_enroll',      // in the Book model, this defines the array key used to identify this relationship
            'join_self_as' => 'permission_enroll',     // foreign key in the (relationship)table identifying this models table. The column name would be 'author_id'
            'join_other_as' => 'user',      // foreign key in the (relationship)table identifying the other models table as defined by 'class'. The column name would be 'book_id'
            'join_table' => 'user_has_permission_enroll')    // name of the join table that will link both Author and Book together
    );
}
*/

var $has_one =array('activity');
var $has_many = array('user_has_permission_enroll');

?>

/* End of file Permission_enroll.php */
/* Location: ./application/controller/Permission_enroll.php */