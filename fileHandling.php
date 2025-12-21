<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
        <title>🗃️ files</title>
    </head>
    <body>
        <header>
            <h1>🗃️ Files️ Handling</h1>
            <nav><a href="..">index ⏎</a></nav>
        </header>
        <main>
            
            <article>
                <h3>Check if file exists</h3>
                <?php
                //check if file exists before operations.
                if (file_exists("home.php")) {
                    echo'file exists ✔️';
                } else {
                    echo 'file not found☠';
                }
                //Create a file or raise exception
                $connection = fopen("testfile.txt", 'w')
                        or die("Could not create a file☠");
$text = <<<_END
This is a test file
second line is longer than first.
Third is a bit longer than second one.
_END;
                // write text to a file or raise exception
                fwrite($connection, "$text") or die("Could not write to a file☠");
                fclose($connection);
                echo "File written successfuly✔️";
                
                ?>

            </article>
        </main>
    </body>
</html>

