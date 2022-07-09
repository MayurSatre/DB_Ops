<!-- <!DOCTYPE html>
<html>
<head>
<title></title>
<script>
    function popup()
    {
        window.open("http://localhost/sample%20demo/queriesSelect.php")
    }
</script>
</head>
<body>
</div>
<from action="index.php" method="POST">
    <lebel>Name:</label> <input type="text" name="firstname" placeholder="Firstname"><br></br>
    <lebel>Age:</label> <input type="text" name="lastname" placeholder="Last Name"><br></br>
    <lebel>Region:</label> <input type="text" name="age" placeholder="age"><br></br> -->
    <!-- <select name="city" type="text" value="s">
        <option value="chunabhatti">Chunabhatti</option>
        <option value="sion">sion</option>
        <option value="kurla">kurla</option>
        <option value="cst">cst</option>
    </select><br></br> -->

    <!-- <lebel>DO YOU WANT TO CONTINUE ?</label><br>
    <input type="submit" name="yes_btn" value="YES"/>
    <input type="submit" name="no_btn" value="NO"/>
</from>
</div>
</body>
</html> -->

<!-- 
// include 'connection.php';
// if (isset($_POST['yes_btn'])){
//     $fname=$_POST['firstname'];
//     $lname=$_POST['lastname'];
//     $age=$_POST['age'];


//     $query="INSERT INTO `student`(`firstname`,`lastname`,`age`) VALUES('$firstname','$lname','$age')";

//     $data=mysqli_query($con,$query);

//     if ($data) {
//         ?>
//         <script type="text/javascript">
//             alert("Data Saved Successfully");
//             </script>
//         
//     }
//     else
//     {
//         ?>
//         <script type="text/javascript">
//             alert("Please try again");
//             </script>
//         
//     }
// }
?> -->


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 <div>
    <form action="index.php" method="POST">
        <label>Name: </label><input type="text" name="name" placeholder="name"><br><br>
        <label>Age: </label><input type="number" name="age" placeholder="age"><br><br>
        <label>City: </label>
        <select name="city">
            <option>-----------</option>
            <option value="chunabhatti">Chunabhatti</option>
            <option value="sion">sion</option>
            <option value="kurla">kurla</option>
            <option value="cst">cst</option>
        </select><br></br>
        
        <input type="submit" name="yes_btn" value="YES" onclick='window.open("http://localhost/sample%20demo/queriesSelect.php","","width=200,height=200,resizable,")'/>
        <button><a href="index.php">NO</a></button>
</form>
</div>
<?php
include 'connection.php';
if (isset($_POST['yes_btn']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    if($_POST['city']!=='')
    {
        $city=$_POST['city'];
    }



    $query="INSERT INTO `sample_tbl`(`name`,`age`,`region`) VALUES('$name','$age','$city')";

    $data=mysqli_query($con,$query);

    // if ($data) {
    //    
    //     <script type="text/javascript">
    //         alert("Data Saved Successfully");
    //         </script>
    //     <?php
    // }
    // else
    // {
    //    
    //     <script type="text/javascript">
    //         alert("Please try again");
    //         </script>
    //     <?php
    // }
}
?>
</body>        
</html>