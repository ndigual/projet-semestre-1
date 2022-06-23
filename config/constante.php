<?php
define('WEB_ROUTE', "http://localhost:8000");
define("ROUTE_DIR" , str_replace('public', '', $_SERVER['DOCUMENT_ROOT']));
define("UPLOAD_DIR", ROUTE_DIR. 'public/img/uploads/');
define("FILE_USERS" , ROUTE_DIR.'data/user.data.json' );
define("FILE_QUESTIONS" , ROUTE_DIR.'data/question.data.json' );
define("NOMBRE_PAR_PAGE" , 5 );
define("NOMBRE_PAR_PAGE_DE_JEU" , 1 );
?>
