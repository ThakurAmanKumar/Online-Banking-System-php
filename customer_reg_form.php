<?php ob_start() ?>

<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/customer_reg_form.css"/>
    
	<?php include'header.php';  ?>
    </head>
    <body>
    <div class="container_regfrm_container_parent">
	<h3>Online Account Opening Form</h3>
	<div class="container_regfrm_container_parent_child">
		<form method="post">
				 <input type="text" name="name" placeholder="Name" required />
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no" required />
				 <input type="text" name="email" placeholder="Email id" />
				 <input type="text" name="landline" placeholder="Landline no" />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				 <input type="text" name="pan_no" placeholder="PAN Number" required />
				 <input type="text" name="Aadhaar Number" placeholder="Aadhaar number Number" required />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required  />
				 <input class="address" type="text" name="officeaddrs" placeholder="Office Address" />
				 <input type="text" name="country" placeholder="India" value="India" readonly="readonly" />



				 <select name ="state" required >
				 <option class="default" value="" disabled selected>State</option>

						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Odisha">Odisha</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Telangana">Telangana</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="Uttarakhand">Uttarakhand</option>
						<option value="West Bengal">West Bengal</option>
						<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
						<option value="Delhi">Delhi</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
						<option value="Ladakh">Ladakh</option>
						<option value="Lakshadweep">Lakshadweep</option>
						<option value="Puducherry">Puducherry</option>

				</select>



				 <select name ="city" required >
				 <option class="default" value="" disabled selected>City</option>

						<option value="Mumbai">Mumbai</option>
						<option value="Delhi">Delhi</option>
						<option value="Bangalore">Bangalore</option>
						<option value="Vijayawada">Vijayawada</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Chennai">Chennai</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Pune">Pune</option>
						<option value="Jaipur">Jaipur</option>
						<option value="Lucknow">Lucknow</option>
						<option value="Indore">Indore</option>
						<option value="Bhopal">Bhopal</option>
						<option value="Patna">Patna</option>
						<option value="Nagpur">Nagpur</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Bhubaneswar">Bhubaneswar</option>
						<option value="Raipur">Raipur</option>
						<option value="Ranchi">Ranchi</option>
						<option value="Dehradun">Dehradun</option>
						<option value="Guwahati">Guwahati</option>
						<option value="Thiruvananthapuram">Thiruvananthapuram</option>
						<option value="Coimbatore">Coimbatore</option>
						<option value="Vishakhapatnam">Vishakhapatnam</option>
						<option value="Amritsar">Amritsar</option>
						<option value="Varanasi">Varanasi</option>
						<option value="Surat">Surat</option>
						<option value="Meerut">Meerut</option>
						<option value="Mysuru">Mysuru</option>
						<option value="Jodhpur">Jodhpur</option>
						<option value="Udaipur">Udaipur</option>

					  
				</select>



				 
				 <input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="Area/Locality" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
				</select>
				<input type="submit" name="submit" value="Submit">
				</form>
         </div>
		 </div>
		 
<?php include'footer.php';?>
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_citizenship']=$_POST['citizenship'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}

?>