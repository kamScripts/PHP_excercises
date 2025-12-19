<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>🗓️ & ⏳ funcs</title>
    </head>
    <body>
        <h1>🗓️ and ⏳ Functions</h1>
        <hr>
        <?php
 //calculate timestamp-> time() + 7 * 24 * 60 * 60
 //or use mktime(hours(0-23),minute(0-59),seconds(0-59),month(1-12),day(1-31),
 //year(1901-2038))
        $tmstp=mktime(0,0,0,1,1,2026); 
        echo "<p>Seconds now from the <em>Unix Epoch</em>: ".time()."</p>";
        echo 'Today: ';
        // date(format, timestamp)
        echo date("l F jS, Y - g:ia, P T", time());
        echo "<br>W3C date format: ";
        echo date(DATE_W3C);
        echo "<br>";
        printf("2026 New Year timestamp: %4s",$tmstp);
        echo "<br>";
//Checking date validity
        $month = 2;
        $day = 29;
        $year = 2026;
        echo ("$year-$month-$day ->");
        if (checkdate($month, $day, $year)) {
            echo "Date is valid";
        }
        else {
            echo 'Date is invalid';
            
        }
        ?>
    </body>
</html>

