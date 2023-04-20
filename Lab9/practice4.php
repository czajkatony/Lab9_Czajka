     <html>
    <head>
        <title>Multiplication Table</title>
    </head>
    <body>
        
        <?php
        $number = $_POST["number"];
        echo"<h2>Multiplication Table for $number</h2>";
        echo "<table border = 4";
        for ($r = 0; $r <= $number; $r++) {   
            echo "<tr> \n"; 
            for ($c = 0; $c <= $number; $c++) {    
                if (($r == 0) and ($c == 0)){  
                    $p = "";
                }
                else if ($r == 0) { 
                    $p = $c;
                }
                else if ($c == 0) {
                    $p = $r;
                }
                else {
                    $p = $c * $r; 
                }
                echo "<td>$p</td> \n"; 
            }
            echo "</tr>"; 
        }
        echo "</table>" 
        ?>
    </body>
</html>
