<?php
/**
 * Created by PhpStorm.
 * User: phillipjolley
 * Date: 5/21/18
 * Time: 10:21 AM
 */
?>
<form name="loginform" id="loginform" action="/wp-login.php" method="post" class="login_form">
    <p class="login-username">
    <label for="user_login"></label>
    <input type="text" name="log" id="user_login" class="input-field" value="" size="20" placeholder="Username">
</p>
<p class="login-password">
    <label for="user_pass"></label>
    <input type="password" name="pwd" id="user_pass" class="input-field" value="" size="20" placeholder="Password">
</p>

<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember
        Me</label></p>
<p class="login-submit">
    <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In">
    <input type="hidden" name="redirect_to" value="/login/">
</p>
</form>