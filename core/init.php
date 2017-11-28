<?php
session_start();

@mysql_connect('localhost', 'root', '') or die('We\'re experiencing some connection problem.');
@mysql_select_db('knit');

?>