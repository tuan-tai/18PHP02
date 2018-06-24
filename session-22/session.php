<?php 
//set cookie lifetime for 100 days (60sec * 60mins * 24hours * 100days)
ini_set('session.cookie_lifetime', 60*60);
ini_set('session.gc_maxlifetime', 60*60);
session_start();
 ?>