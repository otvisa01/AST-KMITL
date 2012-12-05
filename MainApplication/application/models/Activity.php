
<?php
class Activity extends DataMapper {

    var $table = "activities";
    var $has_many=array('user_has_activity','permission_enroll');
      
}
