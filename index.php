<?php
require_once 'ClassDate.php';
?>

<!doctype>
<html>
<head>
    <title>
        TEST
    </title>
</head>
<body>
    <h2>ClassDate</h2>
    <form action="index.php" method="post">
        <label for="day">Entet day</label>
        <input type="text" value="01" name="day">
        <label for="month">Entet day</label>
        <input type="text" value="10" name="month">
        <label for="year">Entet day</label>
        <input type="text" value="2015" name="year">
        <input type="submit" value="GO">
        </form>
    <br/>
<?php
if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
    echo \lesson2\MyDate::a2($_POST['day'], $_POST['month'], $_POST['year']) . "<br/>";
} else {
    echo '<strong>Enter date!!!</strong>';
}
?>
</body>
</html>