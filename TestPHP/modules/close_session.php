<?

// Start session
session_start();

// unset all session variables
unset($_SESSION);


    // Destroy session cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );


    // Destroy the session
    session_destroy();
    header("Location:../index.php?logout=true");
}


