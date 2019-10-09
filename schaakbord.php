<!DOCTYPE html>

<html>

<head>
</head>

<body>

    <table width="270px" cellspacing="0px" cellpadding="0px" border="2px">
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $i + $col;
                if ($total % 2 == 0) {
                    echo "<td height=30px width=30px bgcolor=black></td>";
                } else {
                    echo "<td height=30px width=30px bgcolor=white></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>