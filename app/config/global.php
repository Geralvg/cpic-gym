<?php
$enviroment = "local";
define("MAIN_APP_ROUTE", __DIR__."/../app/");
define("INACTIVE_TIME", 1);
if ($enviroment == "local"){
    define("DRIVER", "mysql");
    define("HOST", "localhost");
    define("DATABASE", "cpicgym");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("CHARSET", "uft8mb4");
    define("COLLATION", "utf8mb4_unicode_ci");
}else{
define("DRIVER", "mysql");
define("HOST", "sql213.infinityfree.com");
define("DATABASE", "if0_38446947_cpicgym");
define("USERNAME", "if0_38446947");
define("PASSWORD", "VMpeS8uk2cMOkj");
define("CHARSET", "uft8mb4");
define("COLLATION", "utf8mb4_unicode_ci");
}







// "driver" => "mysql",
//     "host" => "localhost",
//     "database" => "cpicgym",
//     "username" => "root",
//     "password" => "",
//     "charset" => "uft8mb4",
//     "collation" => "utf8mb4_unicode_ci"