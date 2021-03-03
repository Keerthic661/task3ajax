<html>
<head>
	<title>view</title>
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
                <li class="nav-item"><a href="<?php echo base_url()?>main1/viewregap" class="nav-link  text-dark">Home</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>main1/register" class="nav-link  text-dark">Reset Password</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>main1/logout" class="nav-link  text-dark">Logout</a></li>
                
            
        </div>
    </div>
</nav>

</head>
<body class="">
	<form method="post" action="">
		<table border="2" class="mt-3">
			<thead>
				<tr>
					<th>
						first Name
					</th>
					<th>
						Last Name
					</th>
					<th>
						email
					</th>
					<th>
						Mobile
					</th>
					<th>
						DOB
					</th>
					<th>
						Address
					</th>
					<th>
						District
					</th>
					<th>
						Pin
					</th>
					<th>
						email
					
					
					<th colspan="3">
						Action
					</th>
				</tr>
				<?php
				if($n->num_rows()>0)
				{
					foreach ($n->result() as $row)
					 {
				?>
			</thead>
			<tbody>
				<tr>
					<td>
						<?php echo $row->fname;?>
					</td>
					<td>
						<?php echo $row->lname;?>
					</td>
					<td>
						<?php echo $row->email;?>
					</td>
					<td>
						<?php echo $row->phno;?>
					</td>
					<td>
						<?php echo $row->phno;?>
					</td>
					<td>
						<?php echo $row->dob;?>
					</td>
					<td>
						<?php echo $row->address;?>
					</td>
					<td>
						<?php echo $row->district;?>
					</td>
					<td>
						<?php echo $row->pin;?>
					</td>
					
					
					<?php
					if($row->status==1)
					{?>
						<td>Approved</td>
						<td><a href="<?php echo base_url()?>main1/reject/<?php echo $row->id;?>">Reject</a></td>
						<td><a href="<?php echo base_url()?>main1/delete/<?php echo $row->id;?>">Delete</a></td>
					<?php
					}
					elseif($row->status==2)
					{
						?>
						<td><a href="<?php echo base_url()?>main1/approve/<?php echo $row->id;?>">Approve</a></td>
						<td>Rejected</td>
						<td><a href="<?php echo base_url()?>main1/delete/<?php echo $row->id;?>">Delete</a></td>
						<?php
						}
						else
						{

						?>
					<td><a href="<?php echo base_url()?>main1/approve/<?php echo $row->id;?>">Approve</a></td>
					<td><a href="<?php echo base_url()?>main1/reject/<?php echo $row->id;?>">Reject</a></td>
					<td><a href="<?php echo base_url()?>main1/delete/<?php echo $row->id;?>">Delete</a></td>
				</tr>
				
					<?php
					}
				}
				}
					?>

			</tbody>

		</table>
	</form>
</body>
</html>