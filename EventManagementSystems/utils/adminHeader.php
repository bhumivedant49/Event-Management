<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Campus Event</title>
    <style>
.bgImage 
{
    background-color: darkblue;
    background-size: cover;
    background-position: center center;
    height: 100px;
    margin-bottom: 29px;
}
</style>
</head>

        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->


<header class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
             
                <a class = "navbar-brand">
                    Campus Event FCRIT
                </a> 
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
            <li><a href = "adminPage.php"><strong>Home</strong></a></li>
            <li><a href = "Stu_details.php"><strong>Student Details</strong></a></li>
                    <li><a href = "Stu_cordinator.php"><strong>Student Co-ordinator</strong></a></li>
                    <li><a href = "Staff_cordinator.php"><strong>Staff-Co-ordinator</strong></a></li>
                    <li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "index.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>            
        
            </ul>
        </div><!--container div-->
    </nav>
    
</header>