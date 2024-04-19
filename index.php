<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Dziennik</title>
</head>
<body>
    <table width="1000" align="center" border="1" bordercolor="#d5d5d5" cellpadding="0" cellspacing="0">
        <tr>
            <?php
                //ini_set("display_errors", 0);
                require "dbconnect.php";

                $polaczenie = mysqli_connect($host, $user, $password);
                mysqli_query($polaczenie, "SET CHARSET utf8");
                mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
                mysqli_select_db($polaczenie, $database);

                $zapytanietxt = file_get_contents("zapytanie.txt");
                $rezultat = mysqli_query($polaczenie, $zapytanietxt);

                $ile = mysqli_num_rows($rezultat);
                echo "znaleziono: ".$ile;

                echo<<<END
                mysqli_num_fields
                <td width="100" align="center" >Imie</td>
                </tr><tr>
                END;

                /*
                for ($i = 1; $i <= $ile; $i++)
                {
                    $row = mysqli_fetch_assoc($rezultat);
                    $a1 = $row['Imie'];
                    $a6 = $row['Ocena'];
                    $a7 = $row[''];
                    
                    echo<<<END
                    <td align="center">$a1</td>
                    <td align="center">$a7</td>
                    </tr><tr>
                    END;
                } */
            ?>
        </tr>
</table>
</body>
</html> 