<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Capstone Project - Chess Board</title>
</head>
<table width = "400px">



    <?php
        for ($row = 0; $row <= 8; $row++){

            echo '<tr>';
            for ($column = 1; $column <= 8; $column++){
                $total = $row + $column;

                if($total % 2 === 0){
                    echo "<td height = 35px width= 30px bgcolor= #ffffff> </td>";
                }

                else{
                    echo "<td height= 35px width= 30px bgcolor= #000000> </td>";
                }
            }
        }

    echo "</tr>";
        

    ?>
</table>
</html>
