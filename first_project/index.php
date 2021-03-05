<?php
session_start();
if (isset($_POST["button1"]) && ((isset($_POST["login"]) || isset($_COOKIE["login"])))) {
    require_once $_SERVER['DOCUMENT_ROOT']."/logins.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/passwords.php";
    if (isset($_COOKIE["login"])) {
        $index = array_search($_COOKIE["login"], $logins); 
        $login = $_COOKIE["login"];
    } else {
        $index = array_search($_POST["login"], $logins);
        $login = $_POST["login"];        
    }
    if ($index !== false && ($_POST["password"] == $passwords[$index])) {
        setcookie("login", $login, time()+60*60*24*30, "/");   
        $flag = true;
        if (!isset($_SESSION["auth"])) {
            $_SESSION["auth"] = true;
        }
    } else {
        $flag = false;
    }
}

require_once $_SERVER['DOCUMENT_ROOT']."/header.php";

?>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
				
			
			</td>
            <td class="right-collum-index">
                <?php
                if (isset($_GET["login"]) && ($_GET["login"] == "yes")):
                if (isset($flag) && ($flag)) {
                    require_once $_SERVER['DOCUMENT_ROOT']."/success.php";
                } else { ?>
				<div class="project-folders-menu">
					<ul class="project-folders-v">
    					<li class="project-folders-v-active"><a href="#">Авторизация</a></li>
    					<li><a href="#">Регистрация</a></li>
    					<li><a href="#">Забыли пароль?</a></li>
					</ul>
				    <div class="clearfix"></div>
				</div>

				<div class="index-auth">
                    <?php if (isset($flag) && $flag == false) {
                              require_once $_SERVER['DOCUMENT_ROOT']."/error.php"; } ?>
                    <form action="/?login=yes" method="POST">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="iat">
                                    <label style="<?= isset($_COOKIE["login"]) ? "display : none" : "" ?>" for="login_id">Ваш e-mail:</label>
                                    <input id="login_id" type="<?= isset($_COOKIE["login"]) ? "hidden" : "" ?>" size="30" name="login" value="<?= $_POST["login"] ?? "" ?>">
                                </td>
							</tr>
							<tr>
								<td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password" value="<?= $_POST["password"] ?? "" ?>">
                                </td>
							</tr>
							<tr>
								<td><input type="submit" name="button1" value="Войти"></td>
							</tr>
						</table>
                    </form>
				</div>
			
			</td>
            <?php } ?>
            <? endif ?>
        </tr>
    </table>

<?php require_once $_SERVER["DOCUMENT_ROOT"]."/footer.php"; ?>