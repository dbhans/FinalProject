<?php
//Load template
// require_once('../processpage/find.php');
// $system0 = findone($_GET['id']);
//Database search function
$mysql = new PDO('mysql:host=localhost;dbname=system_installation', 'root', '');
	$sql = "Select * from installation WHERE (id = :id)";

	$insert_array = array('id'=> $_GET['id']);
	
	$stmt = $mysql->prepare($sql);
	
	$stmt->execute($insert_array);
	
	$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style1.css">.
    <script>
        function subm() {
            var name = document.getElementById('name').innerHTML
        }
    </script>
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
                    <a class="nav-link" href="List.php">List of installation</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="form.php" >Enter new installation</a>
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
            
            <form action="../processpage/modify.php" method="post">
            <h3>Software</h3>
              <div>
                <label for="name"> Name <span style="color:red">*</span></label>
                <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($result[0]['name'], ENT_QUOTES);?>">
                </div>
                <div>
                <label for="description"> Description </label>
                <textarea name="description" id="description" cols="30" rows="10"><?php echo htmlspecialchars($result[0]['description'], ENT_QUOTES);	?></textarea>
                </div>
                <br>
                <h3>Instalation</h3>
                <div>
                <label for="date"> date </label>
                <input type="date" name="date" id="date"value="<?php echo htmlspecialchars($result[0]['date'], ENT_QUOTES);	?>">
                </div>
                <div>
                <label for="enviroment"> Enviroment </label>
                <select name="enviroment" id="enviroment">
                  <option value="Windows"> Windows </option>
                  <option value="Unix"> Unix </option>
                  <option value="Linux"> Linux </option>
                  <option value="Windows Server">Windows Server</option>
                  <option value="Linux Server"> Linux Server</option>
                </select>
              </div>
              
<div hidden> <input type="hidden" name="id" id='id' value='<?php echo htmlspecialchars($result[0]['id'], ENT_QUOTES);	?>'></div>


<hr>
<h3>Installation flow</h3>
<div>
<label for="enviroment"> Start </label>
<input type="radio" name="flow" id="flow" value="Start" <?php if (htmlspecialchars($result[0]['flow'], ENT_QUOTES)=="Start") echo "checked";?>>
<label for="enviroment"> In Progress </label>
<input type="radio" name="flow" id="flow" value="In Progress"<?php if (htmlspecialchars($result[0]['flow'], ENT_QUOTES)=="In Progress") echo "checked";?>>
<label for="enviroment"> Finish </label>
<input type="radio" name="flow" id="flow" value="Finish"<?php if (htmlspecialchars($result[0]['flow'], ENT_QUOTES)=="Finish") echo "checked";?>>
</div>

<div><input type="submit" value="Update"></div>
            </form>
            </div>
            <div class="col-2">    </div>
        </div>

    </div>
    <script> document.getElementById('enviroment').value ="<?php echo htmlspecialchars($result[0]['enviroment'], ENT_QUOTES);	?>" </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>