<?php
$user = 'root';
$pass = 'dev';

if (isset($_POST['username']) && isset($_POST['password')) {

    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {

        if (isset($_POST['rememberme'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365);
            setcookie('password', md5($_POST['password']), time()+60*60*24*365);
			setcookie('flag', "flag{d@m1n_h0w_y0u_f33l_s33inG_y0ur_C00ki3s_st0l3n}", time()+60*60*24*365);

        }
        header('Location: 76szayh1972ssmm770997.php');

    } else {
        echo 'Username/Password Invalid';
    }

} else {
    echo 'You must supply a username and password.';
}
?>
