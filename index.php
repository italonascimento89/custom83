<?php

require_once ('vendor/autoload.php');

session_cache_limiter("private");
session_cache_expire(1);

Session::start();
Session::getId();
Session::token();

Router::load('routes.php')
  ->direct(Request::uri(), Request::method());
