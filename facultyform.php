<html>
<style>
body{
	text-align: center;
	background-color: #E5E4E2;
}
input[type="submit"]{
	background: red;
	width: 160px;
	color: white;
	border-radius: 9999px;
	padding: 13px;
}
</style>
<head>
<title>
Application form
</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class ="container">
<div class="jumbotron my-auto">
    <h2 class ="text-center text-info"> Faculty  Registration Form</h2>
	<div class ="row">
		<div class ="col-lg-6">
<h6> Faculty Name</h6>
<form method="post" action="facultyregister.php" >

	<div class="form-group">
	<label> First name </label>
	<input type="text"  class="form-control" name="First_name">
	</div>
 
	<div class="form-group">
	<label> Middle name  </label>
		<input type="text"  class="form-control" name="middle_name">
		
	</div>
	
	<div class="form-group">
	
	<label> Last name </label>
		<input type="text"  class="form-control" name="Last_name"><br>
 
    </div>
<!--<label style="display:inline";"margin:0px;" for="First_name"> First Name </label>
 <label style="display:inline"; "margin:0px;" for="Middle_name"> Middle Name </label>       
 <label style="display:inline"; "margin:0px;" for="Last_name">Last time</label>-->

 
 
 <div class="form-group">
<label>BRANCH</label>
<select  class="form-control" name="branch">
	<option value="COMPUTER SCIENCE AND TECHNOLOGY">COMPUTER SCIENCE AND TECHNOLOGY</option>
	<option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
	<option value="ELECTRONICS AND COMMUNICATION TECHNOLOGY">ELECTRONICS AND COMMUNICATION TECHNOLOGY</option>
	<option value="ELECTRONICS ENGINEERING">ELECTRONICS ENGINEERING</option>
</select>
</div>



<div class="form-group">
<label>SUBJECTS</label>
<select  class="form-control"name="division">
	<option value="ml">Machine learning</option>
	<option value="ai">Artificial Intelligence</option>
	<option value="oomd">Object oriented methodology and design</option>
	<option value="mp&mc">MPMC</option>
	<option value="cs">Communication skills</option>
	<option value="dtsp">Discrete time signal processing</option>
	<option value="ip">Image processing</option>
	<option value="dip">Distributed information systems</option>
	<option value="se">Software engineering</option>
	<option value="evs">Environmental studies</option>
	<option value="wt">web technology</option>
	<option value="dcn">distributed computer networks</option>
</select>
</div>
<div class="form-group">
<label>E-mail:</label> <input  type="text" class="form-control" name="mail_id" value ="mail_id">
</div>

</div>


<div class ="col-lg-6">
<h6>Birth Date</h6>
<div class="form-group">
<label> Month </label>
<select class="form-control" name="month">
	<option value="January">January</option>
	<option value="February">February</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">Semptember</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

</div>
<div class="form-group">
<label>  Date </label>
<select class="form-control"  name="date">
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>
</div>

<div class="form-group">
<label> Year </label>
<select  class ="form-control" name="year">
	<option value ="2019">2019</option>
	<option value ="2018">2018</option>
	<option value ="2017">2017</option>
	<option value ="2016">2016</option>
	<option value ="2015">2015</option>
	<option value ="2014">2014</option>
	<option value ="2013">2013</option>
	<option value ="2012">2012</option>
	<option value ="2011">2011</option>
	<option value ="2010">2010</option>
	<option value ="2009">2009</option>
	<option value ="2008">2008</option>
	<option value ="2007">2007</option>
	<option value ="2006">2006</option>
	<option value ="2005">2005</option>
	<option value ="2004">2004</option>
	<option value ="2003">2003</option>
	<option value ="2002">2002</option>
	<option value ="2001">2001</option>
	<option value ="2000">2000</option>
	<option value ="1999">1999</option>
	<option value ="1998">1998</option>
	<option value ="1997">1997</option>
	<option value ="1996">1996</option>
	<option value ="1995">1995</option>
</select>

</div>
<fieldset class="form-group">
<label>GENDER</label>
		<div class="form-check">
		<label class="form-check-label">
           <input type="radio"  class="form-check-input"  name="gender" value="male">Male</label>
        </div>
		
		<div class="form-check">
		<label class="form-check-label">
            <input type="radio"  class ="form-check-input" name="gender" value="Female">Female</label>
			
		</div>
		
		<div class="form-check">
		<label class="form-check-label">
           <input type="radio"  class="form-check-input" name="gender" value="Others"> Others</label>
		 </div>
</fieldset>
 
 
 
 
<div class="form-group">
<label >Mobile Number</label>
<input  type="text" class="form-control" name="phone" pattern="[7-9]{1}[0-9]{9}"></div>


<button  type="submit" class="btn btn-primary" value="submit"> SUBMIT </button>
</div>

 </form>
 </div>
 </div>
 </div>
</body>
</html>