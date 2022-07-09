<html>
    <body>
        <form action="welcome.php" method="post">
            <input type="checkbox" id="query1" name="query1" value="query1">
            <label for="query1"> Query 1: Select data having age more than 45</label><br>
            <input type="checkbox" id="query2" name="query2" value="query2">
            <label for="query2"> Query2: Select data having name statts with 'S' </label><br>
            <input type="submit" value="OK" name="ok" onclick='window.resizeTo(screen.width, screen.height)'>
        </form>
    </body>
</html>

<?php
if(isset($_POST['ok']))
{
    if(isset($_POST['query1']))
    {
        $query1=$_POST['query1'];
    }
    if(isset($_POST['query2']))
    {
        $query2=$_POST['query2'];
    }
}
?>