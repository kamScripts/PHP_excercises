<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
        <title>upload</title>
    </head>
    <body>
        <h1>🔧Output of PHP functions🔧</h1>
        <?php

        function createFile($path, $txt) {
            $file = fopen($path, 'w') or die("Could not create a file.");
            fwrite($file, $txt);
            echo "<b>$path successfully created✅</b><br>";
            fclose($file);
        }

        function textHistogram($path) {
            // file_get_contents returns a string, not a resource handle
            $f = file_get_contents($path) or die("Could not read the file.");

            // Replace newlines with spaces so explode catches them correctly
            $clean_string = str_replace(["\r", "\n"], ' ', $f);

            // Filter out empty elements caused by multiple spaces
            $arr = array_filter(explode(' ', $clean_string));

            return array_count_values($arr);
        }
        $path = 'sometext.txt';
        $t = "This a test string to insert into a path.
Second line of a path is a last line as well.\n";

        createFile($path, $t);
        $histogram = textHistogram($path);
        ?>
        <h2> Histogram of <?php echo $path;?></h2>
        <table border="1">
           
            <tr>
                <th>Word</th>
                <th>Count</th>
            </tr>
            <?php
            foreach ($histogram as $word => $count) {
                // Use htmlspecialchars to prevent issues with special characters
                echo "<tr><td>" . htmlspecialchars($word) . "</td><td>$count</td></tr>";
            }
            ?>
        </table>    
    </body>
</html>