<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Installation</title>
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
<h3>Software</h3>
  <form action="../processpage/entry.php" method="post">


<div>
<label for="name"> Name </label>
<input type="text" name="name" id="name">
</div>
<div>
<label for="description"> Description </label>
<textarea name="description" id="" cols="30" rows="10"></textarea>
</div>
<br>
<h3>Installation</h3>
<div>
<label for="date"> date </label>
<input type="date" name="date" id="date">
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
<hr>
<h3>Installation flow</h3>
<div>
<label for="enviroment"> Start </label>
<input type="radio" name="flow" id="flow" value="Start" checked>
<label for="enviroment"> In Progress </label>
<input type="radio" name="flow" id="flow" value="In Progress">
<label for="enviroment"> Finish </label>
<input type="radio" name="flow" id="flow" value="Finish">
</div>
<div>

<input type="submit" value="Submit"></div>

</form>

</div>
</div>
            <div class="col-2">    </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>