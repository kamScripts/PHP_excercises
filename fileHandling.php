
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
            <!-- Accessing files on a hard drive require extra care to protect
            system to got hacked.
            It is important to provide access only to required files-->            
            <article>
                <h3>Creating a file</h3>
                <p>
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
                </p>
            </article>
            <article>
                <h3>Copying & Moving</h3>
                <p>
                    <?php
                    copy('testfile.txt', 'copy.txt') or die("Could not copy file");
                    echo "File successfully copied to copy.txt✔️<br>";
             
                    if (!rename('testfile.txt', 'testfile2.new')) {
                        echo "Could not move testfile.txt❌";
                    } else {
                        echo "File successfully renamed to 'testfile2.new✔️";
                    }
                   ?>

            </article>
            <article>
                <h3>Deleting a file</h3>
                <p>
                    <?php
                    if (file_exists('testfile2.new')){
                        if (!unlink('testfile2.new')){
                           echo "Could not delete file❌"; 
                        } 
                        else {
                           echo 'File testfile.new successfully deleted✔️';
                        }                    
                    } else {
                        echo 'File not Found❌️';
                    }
                    ?>
                </p>
            </article>
            <article>
                <h3>Locking Files for Multiple Access</h3>
                <p>
                    <?php
                    $fh = fopen('copy.txt', 'r+') or die("Failed to open file❌");
                    $txt = fgets($fh);
                    
                    if (flock($fh, LOCK_EX)) {
                        fseek($fh, 0, SEEK_END);
                        fwrite($fh, $txt) or die("Could not write to a file❌");
                        flock($fh, LOCK_UN);
                    }
                    fclose($fh);
                    echo 'File copy.txt successfully updated✔️';
                    ?>
                </p>
            </article>
            <article>
                <h3>Reading and Entire File</h3>
                <p>
                    <?php
                    echo file_get_contents('copy.txt');
                    ?>
                </p>
            </article>
        </main>
    </body>
</html>

