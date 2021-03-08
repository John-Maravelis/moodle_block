
<?php

defined('MOODLE_INTERNAL') || die(); //This is to prevent someone from accessing this page directly

$plugin->component = 'block_showusersandcourses';  // Recommended since 2.0.2 (MDL-26035). Required since 3.0 (MDL-48494)
$plugin->version = 2020022500;  // YYYYMMDDHH (year, month, day, 24-hr time)
$plugin->requires = 2010112400; // YYYYMMDDHH (This is the release version for Moodle 2.0)