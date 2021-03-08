<?php

class block_showusersandcourses extends block_base {

    function init() {
        $this->title = get_string('showusersandcourses', 'block_showusersandcourses');
    }

    function has_config() {
        return true;
    }
    function get_content() {
        global $DB;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $content = '';

        $showcourses = get_config('block_showusersandcourses', 'showcourses');

        if ($showcourses){

            $courses = $DB->get_records('course');

            foreach ($courses as $course){

                $content .= $course->fullname . '<br>';
            }
        }else{

            $users = $DB->get_records('user');
            
            foreach ($users as $user) {
                $content .= $user->firstname . ' ' . $user->lastname . '<br>';
            }
        }

        $this->content = new stdClass;
        $this->content->text = $content;
        return $this->content;
    }
}
