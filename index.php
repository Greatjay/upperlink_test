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
    var a=document.forms["submit"]["fname"].value;
    var b=document.forms["submit"]["lname"].value;
    var c=document.forms["submit"]["contact"].value;
    var d=document.forms["submit"]["email"].value;
       if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("contact must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("email must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("message must be filled out");
      return false;
    }
      }
</script></head>
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
            echo 'Register Here to apply as a Software Engineer';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  
        <br />
		<input name="fname" type="text" placeholder="First Name:" />
		<input name="lname" type="text" placeholder="Surname:" />
		<input name="contact" type="text" placeholder="Phone number:" />
		<input name="email" type="email" placeholder="Email address:" />
         <br />
		 <div class="col-sm-10">
        <div class="form-group">
        <textarea type="type" rows="12" name="letter" id="" class="form-control" placeholder="Cover Letter">
		</textarea>
        </div></div>
		<br />
		<input type="file" name="file upload" id="fileupload"/>
		<br />
		<label="file upload">select Passport to upload</label>
		<br />
		<input type="file" name="file upload" id="fileupload"/>
		<br />
		<label="file upload">Select Resume to upload</label>
		<br />
                            
      <input name="" class="btn btn-success"  type="submit" value="Apply" />
                 
  </form>
  </div>
  <script src="bootstrap.min.js"></script>
  </fieldset>
</body>
</html>