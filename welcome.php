<html>
<center><h1>Welcome!</h1></center>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>

        <th>Name</th>
        <th>Age</th>
        <th>Reigon</th>
    </tr>
<?php
include "connection.php";

$q1="SELECT * FROM `sample_tbl` WHERE age>=45";
$q2="SELECT * FROM `sample_tbl` WHERE `name` like 'S%'";

if(isset($_POST['query1'])){
    $data=mysqli_query($con,$q1);
    if(isset($_POST['query2']))
    {
        while ($row=mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $row['name'];  ?></td>
                <td><?php echo $row['age'];  ?></td>
                <td><?php echo $row['region'];  ?></td>
             </tr>
            <?php
        }
        
        $data=mysqli_query($con,$q2);
    }
}
elseif(isset($_POST['query1'])){
    $data=mysqli_query($con,$q1);
}
elseif(isset($_POST['query2'])){
    $data=mysqli_query($con,$q2);
}
else{
    echo 'No query is selected';
}

$result=$data->num_rows;
if ($result) {
    while ($row=mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $row['name'];  ?></td>
            <td><?php echo $row['age'];  ?></td>
            <td><?php echo $row['region'];  ?></td>
        </tr>
        <?php
    }
}
else
{
    ?>
    <tr>
        <td>NO Record Found</td>
    <tr>
    <?php
}
?>
</table>
<html>