<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Installation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style1.css">
    <script>
        function validateForm() {
            var bool = true;
            var x = document.forms["Form"]["date"].value;
            var y = document.forms["Form"]["description"].value;
            
            var x = new Date(x);
            var date = new Date(); 
            if (x > date ) {
                document.getElementById("errordate").hidden=false;
                bool = false;
                
            }
            if (y.length > 250 ) {
                document.getElementById("errordes").hidden=false;
                bool = false;
                
            }
            
            if (!bool) {
                return false;
            }
            
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
<h3>Software</h3>

  <form name="Form" action="../processpage/entry.php" onsubmit="return validateForm()" method="post">


    <div class="form-group">
        <label for="name"> Name <b style="color:red">*</b> </label>
        <input class="form-control"  type="text" name="name" id="name" required>
    </div>
    <div class="alert alert-danger" role="alert" id="errordes" hidden>
        <span>No more than 250 characters in the field description</span>
    </div>
    <div class="form-group">
        <label for="description"> Description </label>
        <textarea class="form-control" name="description" id="description" cols="10" rows="5" onkeydown="fr()" ></textarea>
        <span id='desc'></span>
    </div>
    <br>
    <h3>Installation</h3>
    <div class="alert alert-danger" role="alert" id="errordate" hidden>
        <span>The date can not be a futue date</span>
    </div>
    <div class="form-group">
    <label for="date"> Date <b style="color:red">*</b>  </label>
    <input class="form-control" type="date" name="date" id="date" required>
    
    </div>
    <div class="form-group">
    <label for="enviroment"> Enviroment <b style="color:red">*</b>  </label>
    <select class="form-control" name="enviroment" id="enviroment" required>
        <option value=""> Choose an enviroment  </option>
        <option value="Windows"> Windows </option>
        <option value="Unix"> Unix </option>
        <option value="Linux"> Linux </option>
        <option value="Windows Server">Windows Server</option>
        <option value="Linux Server"> Linux Server</option>
    </select>

    </div>
    <hr>
    <h3>Installation flow</h3>
    <div class="custom-control custom-radio form-group">
  <input type="radio" id="customRadio1" name="flow" class="custom-control-input" value="Start" checked>
  <label class="custom-control-label" for="customRadio1">Start</label>
</div>
<div class="custom-control custom-radio form-group">
  <input type="radio" id="customRadio2" name="flow"  value="In Progress" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">In Progress</label>
</div>
<div class="custom-control custom-radio form-group">
  <input type="radio" id="customRadio2" name="flow" value="Finish"  class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">Finish</label>
</div>
    
<div class="form-group"><input type="submit" class="btn btn-primary" value="Submit"></div>

    </form>

    </div>
    </div>
                <div class="col-4">    </div>
            </div><!--
 <footer class="footer">
      <div class="container">
        <span class="text-muted"> This is a website for a final project, it is the property of <a href="http://www.matrixcollege.ca" target="_blank" style="color: black">Matrix College</a></span>
      </div>
    </footer>-->
        </div>
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script>
    function fr() {    
        var description = document.getElementById("description").value;
        calcul = description.length;
        if (description.length<=250) {            
            document.getElementById("desc").innerHTML= "You have use "+ calcul + "/250 characters ";
        }else{
            document.getElementById("desc").innerHTML="You have use "+( calcul - 250) + "  characters more";
        }
    }
    </script>

</body>
</html>