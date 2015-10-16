<?php
require 'vendor/autoload.php';
use lesson2\ClassDate;
$mydate=new \ClassDate();
?>

<!doctype html>
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
        <input type="text" value="<?php echo $_POST['day'] ?>" name="day">
        <label for="month">Entet month</label>
        <input type="text" value="<?php echo $_POST['month'] ?>" name="month">
        <label for="year">Entet year</label>
        <input type="text" value="<?php echo $_POST['year'] ?>" name="year">
        <input type="submit" value="GO">
        </form>
    <br/>
<?php
if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
    echo $mydate->dateInfo($_POST['day'], $_POST['month'], $_POST['year']) . "<br/>";
} else {
    echo '<strong>Enter date!!!</strong>';
}
?>
</body>
</html>