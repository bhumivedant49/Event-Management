
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Campus Event</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>
    <body>
    <?php require 'utils/header.php'; ?>
    <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
    <form method="POST">

   
        <label>Student USN:</label><br>
        <input type="text" name="usn" class="form-control" required><br><br>

        <label>Student Name:</label><br>
        <input type="text" name="name" class="form-control" required><br><br>

        <label>Branch:</label><br>
        <input type="text" name="branch" class="form-control" required><br><br>

        <label>Semester:</label><br>
        <input type="text" name="sem" class="form-control" required><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"  class="form-control" required ><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone"  class="form-control" required><br><br>

        <label>College:</label><br>
        <input type="text" name="college"  class="form-control" required><br><br>

        <label>Select Event:</label><br>
        <?php
require 'classes/db1.php';
$result1 = mysqli_query($conn,"SELECT event_title,event_id FROM events;");
?>
        <?php 
        if (mysqli_num_rows($result1) > 0) {

            $i=0;
        while($row = mysqli_fetch_array($result1)){ ?>
        
        <div>
        <input type="radio" id="event" name="event" value="<?php  echo $row['event_title'];?>" />
             <label for="<?php  echo $row['event_title'];?>"><?php  echo $row['event_title'];?>
             </label><br><br>
             <?php $i++;}?>
        </div>
        <?php }?>

        <button type="submit" name="update" required>Submit</button><br><br>
        <a href="usn.php" ><u>Already registered ?</u></a>

    </div>
    </div>
    </div>
    </form>
    

  
    </body>
</html>

<?php
    if (isset($_POST["update"]))
    {
        $usn=$_POST["usn"];
        $name=$_POST["name"];
        $branch=$_POST["branch"];
        $sem=$_POST["sem"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $college=$_POST["college"];
        $eve_title=$_POST["event"];


        if( !empty($usn) || !empty($name) || !empty($branch) || !empty($sem) || !empty($email) || !empty($phone) || !empty($college) || !empty($event_price))
        {
        
            include 'classes/db1.php';   
                $res=mysqli_query($conn,"SELECT event_id FROM events WHERE event_title='$eve_title';");
                if (mysqli_num_rows($res) > 0) {
                    $i=0;
                    while($row = mysqli_fetch_array($res)) {
                    $event_id=$row['event_id'] ;
                   
                $INSERT="INSERT INTO participent (usn,name,branch,sem,email,phone,college) VALUES('$usn','$name','$branch',$sem,'$email','$phone','$college');";
                $INSERT1="INSERT INTO registered (usn,event_id) VALUES('$usn',$event_id);";

                
                    if($conn->query($INSERT)===True){
                        echo "<script>
                        alert('Registered Successfully!');
                        window.location.href='usn.php';
                        </script>";
                    if( $conn->query($INSERT1)===True){
                    echo "<script>
                    alert('Registered Successfully!');
                    window.location.href='usn.php';
                    </script>";}
                }
                else
                {
                    echo"<script>
                    alert(' Already registered this usn');
                    window.location.href='usn.php';
                    </script>";
                }}}
               
                $conn->close();
            
        }
        else
        {
            echo"<script>
            alert('All fields are required');
            window.location.href='register.php';
                    </script>";
        }
    }
    
?>