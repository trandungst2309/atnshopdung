<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js"/></script>
<script src="js/jquery.dataTables.min.js"/></script>
<script src="js/dataTables.bootstrap.min.js"/></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js"/></script>
<script src="js/jquery.dataTables.min.js"/></script>
<script src="js/dataTables.bootstrap.min.js"/></script>
<script>
	function check()
	{

		txtUs = document.form1.txtUsername;
		txtpa = document.form1.txtPass;
		if(txtUs.value == "")
		{
			alert("Username can not be empty");
			txtUs.focus();
			return false;
		}

		if(txtUs.value.length > 30)
		{
			alert("Username maximun is 30 chars");
			txtUs.focus();
			return false;
		}

		if(txtpa.value == "")
		{
			alert("password can not be empaty");
			txtpa.focus();
			return false;
		}

		if(txtUs.value.length < 6 )
		{
			alert("Username minimun is 6 chars");
			txtUs.focus();
			return false;
		}

		return true;

	
	}

</script>




<h1>Login</h1>
<form id="form1" name="form1" method="POST" action="Loginprocess.php" onsubmit="return check();">
<div class="row">
    <div class="form-group">				    
        <label for="txtUsername" class="col-sm-2 control-label">Username(*):  </label>
		<div class="col-sm-10">
		      <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" value=""/>
		</div>
      </div>  
      
    <div class="form-group">
		<label for="txtPass" class="col-sm-2 control-label">Password(*):  </label>			
		<div class="col-sm-10">
		      	<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
		</div>
	</div> 
	<div class="form-group"> 
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        	<input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Login"/>
            <input type="submit" name="btnCancel"  class="btn btn-primary" id="btnLogin" value="Cancel"/>
		</div>  
	</div>
 </div>
    
</form>
   