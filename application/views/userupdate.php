<html>
<head>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
    </head>
    <style>

.back
{
   background-color: rgba(0,0,0,0.1); 
}
.front
{
   background-color: rgba(0,0,0,0.3);
   margin: 1px; 
}
body
{
    background-image: 
}
        
input[type=email], input[type=password] {
  width: 100%;
  padding: 5px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color:rgba(0,0,0,0.1);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  width: 100%;
}


button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


.container {
  padding: 16px;
}
/*.pass
{
  margin-left: 700px;
}*/



.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}


.modal-content {
  
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}


.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s;
}
img.avatar {
  width: 100px;
  border-radius: 100px;
}
.log
{
  position: absolute;
  top:200px;
  left: 1000px;
  color: red;
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/*registration style*/


.cls{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


button {
  background-color: rgba(0,0,0,0,0.1);
  color: black;
  padding: 14px 20px;
  margin: 4px 0;
  border: none;
  width: 15%;
  opacity: 0.9;
}


button:hover {
  opacity:1;
}
.sign:hover {
  opacity:1;
}

.sign {
  
  color: white;
  
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  width: auto;
  padding: 10px 18px;
  background-color: #f44336
  }

.cancelbtn, .sign {
  float: left;
  width: 100px;
}


.container {
  padding: 10px;
}


.modal1 {
  display: none; 
  position: fixed; 
  z-index: 1;
  left: 200px;
  top: 50px;
  width: 80%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.1);
  padding-top: 10px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 10% auto; 
  border: 1px solid #888;
  width: 80%; 
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}





</style>
<body>

	<nav class="navbar navbar-expand-lg top1 front">
        <div class="container">
            
                <ul class="navbar-nav">
                
                <li class="nav-item"><a href="<?php echo base_url()?>main1/logout" class="nav-link  text-dark">Logout</a></li>
                
            
        </div>
    </div>
</nav>
<body>
<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main1/reguserupdate">
		<?php
			
	if(isset($user_data))
	{
		foreach($user_data->result() as $row1)
		{
			?>
		<fieldset style="width:500px;height:400px; background-color:rgba(0,0,0,0.6); margin-top: 50px;">
			<legend style="color: red"><strong></strong></legend>

			
		<table>
			<tr><td>First Name</td><td><input type="text" name="fname" required="required" maxlength="25" pattern="[a-zA-Z]+" value="<?php echo $row1->fname;?>"></td></tr>

		<tr><td>Last Name</td><td><input type="text" name="lname"  required="required" maxlength="25" pattern="[a-zA-Z]+" value="<?php echo $row1->lname;?>"></td></tr>


		<tr><td>EmailId</td><td><input type="email" name="email" id="email" value="<?php echo $row1->email;?>"></td><td><span id="email_result"></span> </td></tr>

		<tr><td>Mobile Number</td><td><input type="text" name="phno" required="required" value="<?php echo $row1->phno;?>" pattern="[7-9]{1}[0-9]{9}" id="phno"></td><td><span id="phno_result"></td></span></tr>
		<tr><td>DOB</td><td><input type="date" name="dob" value="<?php echo $row1->dob;?>"></td><td> </td></tr>
		<tr><td>Address</td><td><textarea name="address" required="required" maxlength="80" pattern="[a-zA-Z0-9 ]+"><?php echo $row1->address;?></textarea></td></tr>
		<tr><td>
      District</td><td> 
             <select name="district" required="required">
             	<option><?php echo $row1->district;?></option><option> TRIVANDRUM</option>
              <option>KOLLAM</option>
              <option>ALAPUZHA</option>
              <option>KOTTAYAM</option>
              <option>ERANAKULAM</option></select></td></tr>
              <tr><td>pin</td><td><input type="text" name="pin" required="required" value="<?php echo $row1->pin;?>" ></td></tr>
              <tr><td></td><td><input type="submit" name="submit"></td></tr>
	
			
		
		


	</table>
	<?php
		}
	}
	?>
	
</fieldset>


	</form>
	<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</script>

</body>
</html>