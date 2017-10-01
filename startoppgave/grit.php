<!doctype html>
<html>
<head>
    <title>mf nettside</title>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='css/main.css' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class='main'>
        <header>
            <h1> Prosjekter i Grunnleggende IT </h1>
        </header>
        <nav>
            <?php
                include("include/nav.php")
            ?>
        </nav>
        <article>
            <h2> Obligatoriske oppgaver </h2>
            <p>
                <a href="index.php">Hjemmeside</a>
                <a href="grit/akademiskSkriving.php">Akademisk Skriving</a>
                <a href="grit/pcOppbygning.php">Datamaskinens oppbygning</a>
            </p>
        </article>
    </div>
    <footer>
        <?php
            include("include/footer.php")
        ?>
    </footer>
</body>
</html>
