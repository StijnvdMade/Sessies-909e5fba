<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
        <?php
        session_start();
        ?>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->

        <form action="#" method="post" id="POST-name" >
        Keuze: <br>
        <input type="text" name="Keuze"><input type="submit" value="Submit">
        </form>

        <?php
        $koek = "h";
        $_SESSION["Keuze"] = $_POST["Keuze"];
        if (!isset($_POST["Keuze"])) {
            echo "Geen keuze";
        } else {
            if ($_POST["Keuze"] == 1) {
                echo "keuze Skateboard";
            }
            if ($_POST["Keuze"] == 2) {
                echo "keuze Basketbal";
            }
            if ($_POST["Keuze"] == 3) {
                echo "keuze skeelers";
            }
        }
        ?>

    </body>
</html>