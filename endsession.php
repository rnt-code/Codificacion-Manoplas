<?php
//Borra todas la variables de la sesión
$_SESSION = array();

//Borra la cookie que almacena la sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
//Finalmente, destruye la sesión
session_destroy();
header("Location: index.html")
?>