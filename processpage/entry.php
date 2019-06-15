<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" style = "margin-top:15px; margin-bottom:30px">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="../">Home</a>
                </li>
            </ul>
            <div style="margin-left:100px">
                <ul class="navbar-nav ">        
                    <li class="nav-item">
                    <a class="nav-link" href="../page/List.php">List of installation</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../page/form.php" >Enter new installation</a>
                    </li>
                    <!--<li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li>-->
                </ul>
            </div>    
        </nav>

        <div class="row">
            <div class="col-2">    </div>
            <div class="col-8">
            <?php
            if(isset($_POST["name"])||isset($_POST["date"])||isset($_POST["enviroment"])||isset($_POST["description"])){
                $errors = array();
            $mysql = new PDO('mysql:host=localhost;dbname=system_installation', 'root', '');
            $sql = "

            INSERT INTO 

            installation (
                enviroment, 
                date, 
                description,
                 name,
                 flow
            ) 
            VALUES (

    :enviroment,
    :date,
    :description,
    :name,
    :flow

)
";

$insert_array = array(

	'name' => $_POST['name'],
    'description' => $_POST['description'],
    'enviroment' => $_POST['enviroment'],
    'date' => $_POST['date'],
	'flow' => $_POST['flow']
);

if(!$stmt = $mysql->prepare($sql)){
    
    
	$errors = $mysql->errorInfo() ;
}

if(!$stmt->execute($insert_array)){
	$errors = $stmt->errorInfo(); 	
}
if (!isset($errors)) {
            ?>
           <h4> Unable to save the informations for the new installation </h4> 
<?php } else { ?>
<h4> All information have been save properly</h4> <?php } }?>
            </div>
            <div class="col-2">    </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>