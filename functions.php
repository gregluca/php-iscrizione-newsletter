<?php 

session_start();

// controlla se email è ben formata 
function controlEmail($email) {
    if(str_contains($email, '@') && str_contains($email,'.')) {
        // salviamo email nella session 
        // $result = true;
        $_SESSION['email'] = $email;
        // spostiamo l'utente nella pagina thank 
        header('Location: ./thankyou.php');
    } else {
        $result = false;
    }
    return $result;
}

?>