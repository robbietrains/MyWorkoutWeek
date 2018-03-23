<?php
  require_once 'classes/database.php';
  require_once 'classes/templates.php';

  session_start();

  $database = new Database();
  $templates = new Templates();