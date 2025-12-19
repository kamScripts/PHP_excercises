<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>📜printf</title>
    </head>
    <body>
        <?php
        $s = "Kamil";
        echo "<pre>";
// printf - displays string with formatting
// binary
        printf("My age is 36 and in binary it is %b<br>", 36);
//upper-case hexadecimal, x - lower-case hexadecimal
        printf("<span style='color:#%X%X%X;'>Hello</span><br>", 65, 127, 245);
// Precision Setting, pad 16 spaces
        printf("100 dividided by 14 is %16.2f\n", 100 / 14);

// Conversion specifier components
// start conversion pad char number of pad precision conversion specifier
//|       %        |'#/0/' '|      15    |    .2   |b, c, d, e, f, o,s, u, x, X
//left pad - negative values.
//  printf("Sum: %15.2f", $sum); -> Sum: 14.50
        echo "<hr>";
        printf("[%s]\n", $s);
        printf("[%10s]\n", $s); // right pad
        printf("[%-10s]\n", $s); // left pad
        printf("[%'*10s]\n", $s); // right pad and fill white space with *
// sprintf - (string print) saves the output to a variable
// hexadecimal str value for the RGB colour group
        $hexStr = sprintf("%X%X%X", 220, 180, 100);
        echo("<h3 style='color: #$hexStr;'> Coloured text</h3>");
        $output = sprintf("%5.2f * %.2f = %.3f sq. m\n", 2, 3.14, 2*3.14);
        echo $output;



        echo "</pre>";
        ?>
    </body>
</html>

