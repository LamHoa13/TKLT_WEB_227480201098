<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Bài 8: Listbox năm</h2>";
        $currentYear = date("Y");
        $years = range(1900, $currentYear);

        echo "<form>";
        echo "<select name='year'>";
        foreach ($years as $year) {
        echo "<option value='$year'>$year</option>";
        }
        echo "</select>";
        echo "</form>";
    ?>
</body>
</html>