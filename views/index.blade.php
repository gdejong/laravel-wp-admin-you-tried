<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>My Blog ‹ Log In</title>
    <link rel="dns-prefetch" href="https://s.w.org/">
    <link rel="stylesheet" href="/vendor/gdejong/css/login.css" type="text/css" media="all">
    <meta name="robots" content="noindex,follow">
    <meta name="viewport" content="width=device-width">
</head>
<body class="login login-action-login wp-core-ui  locale-en-us">
<div id="login">
    <h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">My Blog</a></h1>

    <form name="loginform" id="loginform" method="post">
        <p>
            <label for="user_login">Username or Email Address<br>
                <input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
        </p>
        <p>
            <label for="user_pass">Password<br>
                <input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
        </p>
        <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme"
                                                              value="forever"> Remember Me</label></p>
        <p class="submit">
            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large"
                   value="Log In">
        </p>
    </form>

    <p id="nav">
        <a href="#">Lost your password?</a>
    </p>

    <script type="text/javascript">
        function wp_attempt_focus() {
            setTimeout(function () {
                try {
                    d = document.getElementById('user_login');
                    d.focus();
                    d.select();
                } catch (e) {
                }
            }, 200);
        }

        /**
         * Filters whether to print the call to `wp_attempt_focus()` on the login screen.
         *
         * @since 4.8.0
         *
         * @param bool $print Whether to print the function call. Default true.
         */
        wp_attempt_focus();
        if (typeof wpOnload == 'function')wpOnload();
    </script>

    <p id="backtoblog"><a href="#">← Back to My Blog</a></p>

</div>

<div class="clear"></div>

</body>
</html>