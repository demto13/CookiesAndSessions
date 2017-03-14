<!DOCTYPE HTML>
<html lang="eng">
<head>
    <meta charset="utf-8">
</head>
<body>
    <header>
        <h1>This is h1</h1>
    </header>
    <main>
        <form action="CheckLogin.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <label for="id">ID</label><br />
                <input id="id" type="text" name="id" /><br />
                <label for="pw">Password</label><br />
                <input id="pw" type="password" name="password" /><br />
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        <?php
            echo"<h2>This is h2 in php</h2>";
        ?>
    </main>
    <footer>
        <p>This is footer</p>
    </footer>
</body>
</html>