<?php

$user = User::getInstance();

if ($user->check($post->login, $post->password)) { ?>

    <div class="row personal">
        <div class="title"><h1>Вітаємо, <?= $user->get_info()["name"] ?></h1></div>
        <form action="" method="post">
            <div class="buttons">
                <input class="button" type="submit" value="Вийти" name="Log out"/>
            </div>
        </form>
    </div>

<?php

} else { ?>

    <div class="row personal">
        <div class="title"><h1>Увійдіть до персональної сторінки</h1></div>
        <form class="box" action="" method="post">
            <label for="login">Введіть логін:</label>
            <input type="text" id="login" placeholder="login@gmail.com" name="login"><br>
            <label for="password">Введіть пароль:</label>
            <input type="text" id="password" placeholder="password" name="password"><br>
            <div class="buttons">
                <input class="button" type="submit" value="Увійти" name="Log in"/>
            </div>
        </form>
    </div>

<?php }

?>
