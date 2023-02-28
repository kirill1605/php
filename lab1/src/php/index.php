<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <img src="../img/logo.png" alt="logo" class="header_logo">
        </div>
    </header>

    <main>
        <section class="main">
            <div class="wrapper">
                <?php
                    echo ("<h1>Hello, World!");
                ?>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="wrapper">
            <ul class="footer__container">
                <li class="footer__container-text">
                    Кораблин Кирилл Артемович
                </li>
                <li class="footer__container-text">
                    Группа 221-323
                </li>
                <li class="footer__container-text">
                    <a href="https://github.com/kirill1605/php.git">Github</a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>