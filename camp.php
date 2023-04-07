<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php");?>

</head>
<body>
   
   
<?php
include("top_nav.php");
?>
    <div class="container"  style='margin-top:70px;'>
        <div class="row">
            <div class="col-lg-12">
				 <h3 class=" text-primary">
					<i class='fa fa-heart'></i>  Registration of Blood Donation Camp
                </h3><hr>
            </div>
        </div>
		<?php  include("blood_bread.php"); ?>



		

       
		<div class="row centered-form">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-envelope "> </span> Need Blood To Save Lifes</h3>
                    </div>
                    <div class="panel-body">
					<p id="errorBox"></p>
					
					<?php
						if(isset($_POST["submit"]))
						{
								
								
								 $sql="INSERT INTO camp(CAMP_NAME, DATE, ADDRESS, PINCODE, CNAME, CONT_NO, EMAIL)
								 VALUES('{$_POST["NAME"]}',
                                        '{$_POST["DATE"]}',
                                        '{$_POST["ADDRESS"]}',
                                        '{$_POST["PIN"]}',
                                        '{$_POST["CNAME"]}',
                                        '{$_POST["CON1"]}',
                                        '{$_POST["EMAIL"]}')";


									if($con->query($sql))
									{
										echo "<div class='alert alert-success fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Information : </strong>Your Blood request is sent. Admin will contact you soon</div>";
									}
									else
									{
										echo "<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error : </strong>Server busy.Try again later.</div>";
									}
						}
						
					?>
					<form autocomplete="off" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">

						<div class="form-group">
							<label class="control-label text-primary">Camp Name</label>
							<input type="text" placeholder="Camp Name" name="NAME"  required id="NAME" class="form-control input-sm">
						</div>
						
                        <div class="form-group">
							<label class="control-label text-primary">Date</label>
							<input type="text" placeholder="MM/DD/YYYY" class="form-control input-sm DATES" name="DATE" id="DATE">
						</div>
								
						
						
						
						 
						<div class="form-group">
								<label class="control-label text-primary">Address</label>
                                <textarea required name="ADDRESS" id="ADDRESS" rows="5" style="resize:none;"class="form-control" placehold=" ADDRESS"></textarea>
                          </div>
						 
						   <div class="form-group">
								<label class="control-label text-primary">Pincode</label>
                                <input type="text" required name="PIN" id="PIN" class="form-control" placeholder="Insert Pincode">
                          </div>
						  
						
						
						<div class="form-group">
							<label class="control-label text-primary">Contact Name</label>
							<input type="text" placeholder="Contact Name" class="form-control input-sm" name="CNAME" id="CNAME">
						</div>

                        <div class="form-group">
								<label class="control-label text-primary" for="CONTACT_1" >Contact No.</label>
                                <input type="text" required name="CON1" id="CONTACT_1" class="form-control" placeholder="Contact No-1">
                          </div>
						
						<div class="form-group">
							<label class="control-label text-primary">Email ID</label>
							<input type="text" placeholder="Contact Email" class="form-control input-sm" name="EMAIL" id="EMAIL">
						</div>
						
						
						  
						  
						   <div class="form-group">
							<button class="btn btn-primary" id="BTN" name="submit"><i class="fa fa-send"></i> Registar Now</button>
						  </div>
						 </form>
                    </div>
                </div>
            </div>
            </div>
        
        </div>


 <?php include("footer.php"); ?>
<script>
	$(document).ready(
		function(){
		
		$("#BTN").click(function(){
			var NAME=$("#NAME").val();
            var RDATE=$("#DATE").val();
			var ADDRESS=$("#ADDRESS").val();
			var PIN=$("#PIN").val();
			var CNAME=$("#CNAME").val();
            var CON1=$("#CON1").val();
			var EMAIL=$("#EMAIL").val();
			
			
		
			
			if($("#NAME").val() == "" )
				{
					$("#NAME").focus();
					$("#errorBox").html("<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter Camp Name.</div>");
					return false;
				}
		
		
				if($("#RDATE").val() == "")
				{
					$("#RDATE").focus();
					$("#errorBox").html("<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Select the Camp Date .</div>");
					return false;
				}
		
				
				
				
				if($("#ADDRESS").val() == "")
				{
					$("#ADDRESS").focus();
					$("#errorBox").html("<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter full address.</div>");
					return false;
				}
				
				
				
				if($("#PIN").val() == "")
				{
					$("#PIN").focus();
					$("#errorBox").html("<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter your city pincode.</div>");
					return false;
				}
					if(isNaN($("#PIN").val()))
				{
					$("#PIN").focus();
					$("#errorBox").html("<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Pincode should be numeric.</div>");
					return false;
				}
				
				
				
				
				if($("#CNAME").val() == "")
				{
					$("#CNAME").focus();
					$("#errorBox").html("<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter Contact Person Name.</div>");
					return false;
				}
				
				
				if($("#CON1").val() == "")
				{
					$("#CON1").focus();
					$("#errorBox").html("<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter your Mobile Number.</div>");
					return false;
				}
				
				// if(isNaN($("#CON1").val()))
				// {
				// 	$("#CON1").focus();
				// 	$("#errorBox").html("<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Mobile Number should be Numeric.</div>");
				// 	return false;
				// }
				
				
				
            
				
		
		});	
	});
	
	
	

</script>
	
</body>
</html>