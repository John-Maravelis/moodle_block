<?php
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox('block_showusersandcourses/showcourses',
                   get_string('showcourses', 'block_showusersandcourses'),
                   get_string('showcoursesinfo', 'block_showusersandcourses'),
                   0
               ));
}
