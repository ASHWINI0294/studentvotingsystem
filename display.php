<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname="svsdb";

// Create connection
$dbcon =mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($dbcon->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>

<div class="table-scrol">
    <h1 align="center">View Votes</h1>
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>name</th>
            <th>vote</th>
    
        </tr>
        </thead>

        <?php
        $view_users_query="select name,max(vote) from sports";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $name=$row[0];
            $vote=$row[1];


        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $name;  ?></td>
            <td><?php echo $vote;  ?></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


<div class="table-scrol">


<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>name</th>
            <th>vote</th>
    
        </tr>
        </thead>

        <?php
        $view_users_query="select name,max(vote) from general";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $name=$row[0];
            $vote=$row[1];


        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $name;  ?></td>
            <td><?php echo $vote;  ?></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>





<div class="table-scrol">


<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>name</th>
            <th>vote</th>
    
        </tr>
        </thead>

        <?php
        $view_users_query="select name,max(vote) from cutural";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $name=$row[0];
            $vote=$row[1];


        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $name;  ?></td>
            <td><?php echo $vote;  ?></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>





</body>

</html>
