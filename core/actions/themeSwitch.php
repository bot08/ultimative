<?php 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache"); 

if($_COOKIE["dark"]=="true"){
    setcookie("dark", "false", time()+9999999, "/"); 
}
else{
    setcookie("dark", "true", time()+9999999, "/");  
}


header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>