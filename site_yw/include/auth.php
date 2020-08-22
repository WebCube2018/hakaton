?<? if (!defined("b_prolog_included") || b_prolog_included !== true) {
	die();
} ?>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.tipsy.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $(".signin").click(function (e) {
            e.preventdefault();
            $("fieldset#signin_menu").toggle();
            $(".signin").toggleclass("menu-open");
        });

        $("fieldset#signin_menu").mouseup(function () {
            return false
        });
        $(document).mouseup(function (e) {
            if ($(e.target).parent("a.signin").length == 0) {
                $(".signin").removeclass("menu-open");
                $("fieldset#signin_menu").hide();
            }
        });
    });

    $(function () {
        $('#forgot_username_link').tipsy({gravity: 'w'});
    });

</script>
<div id="container">
	<div id="topnav" class="topnav"><a href="" class="signin">авторизация</a> <span>|</span><a href="">регистрация</a></div>
	<fieldset id="signin_menu">
		<form method="post" id="signin" action="">
			<input id="username" name="username" value="" placeholder="Логин" title="username" tabindex="4" type="text">
			</p>
			<p>
				<input id="password" name="password" value="" placeholder="Пароль" title="password" tabindex="5" type="password">
			</p>
			<p class="remember">
				<input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
				<label for="remember">Запомнить</label>
				<input id="signin_submit" value="Войти" tabindex="6" type="submit">

			</p>
			<p class="forgot"><a href="#" id="resend_password_link">Востановление пароля</a></p>
			<p class="forgot-username"><a id="forgot_username_link" title="Регистрируйтесь на сайте" href="#">Регистрация на сайте</a></p>
		</form>
		<div id="soc-serv">Войти как:</div>
	</fieldset>
</div>