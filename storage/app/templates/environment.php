#!/usr/bin/php
<?php
#This script must be preprocessed before use and any identifiers prefixed and
#postfixed with __ must be replaced.
$LARAVEL_STORAGE="__LARAVEL_STORAGE__";
$STUDENT_ID="__STUDENT_ID__";
$ASSIGNMENT_ID=__ASSIGNMENT_ID__;
$SUBMISSION_DIR="__SUBMISSION_DIR__";
$SIMILARITY_THRESHOLD=__SIMILARITY_THRESHOLD__;
//Clean this up
$ASSIGNMENT_DIR=$SUBMISSION_DIR . "../";

#This will allow us to keep the scripts in one location.
set_include_path(get_include_path() . PATH_SEPARATOR . $LARAVEL_STORAGE."/app/scripts");
set_include_path(get_include_path() . PATH_SEPARATOR . $LARAVEL_STORAGE."/app/scripts");

?>

