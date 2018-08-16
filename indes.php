<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Adio Consultancy Group</title>
  
   
  <link rel='stylesheet prefetch' href="bootstrap.min.css">

      <link rel="stylesheet" href="style.css">

<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
    var f=document.forms["reg"]["username"].value;
    var g=document.forms["reg"]["password"].value;
	var g=document.forms["reg"]["email"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("First name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Last name must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Gender name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("address must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("contact must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("username must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("password must be filled out");
      return false;
	}
     if (h==null || h=="")
    {
      alert("email must be filled out");
      return false;
	}
  }
</script>
</head>
<body >
 
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
<fieldset style="width:30%">
  <div id="login" class="span3 well well-large offset4">
  
    <form class="form">
	<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  
        <br />
		<input name="fname" type="text" placeholder="First Name:" />
		<input name="lname" type="text" placeholder="Surnameame:" />
		<input name="contact" type="text" placeholder="Phone number:" />
		<input name="email" type="email" placeholder="Email address:" />
        <input name="address" type="text" placeholder="Address:" />
      	  <br />
      <input name="" class="btn btn-success"  type="submit" value="Apply" />
                 
  </form>
  </div>
  <script src="bootstrap.min.js"></script>
  </fieldset>
</body>
</html>