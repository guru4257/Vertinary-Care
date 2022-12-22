<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Booking</title>
</head>
<style>
 body{  
  font-family: Calibri, Helvetica, sans-serif;    
}  
</style>
<style>
body {
  background-image: url('animal3.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<div class="container">
<div class="container-time">
<h2 class="heading">Time Open</h2>
<h3 class="heading-days">Monday-Friday</h3>
<p>7am - 11am (breakfast)</p>
<p>11am - 10pm (lunch/dinner)</p>

<h3 class="heading-days">Saturday and sunday</h3>
<p>9am - 1am (breakfast)</p>
<p>1am - 10pm (lunch/dinner)</p>

<hr>

<h4 class="heading-phone">Call Us: (123) 45-45-456</h4>
</div>

<div class="container-form">
<form action="Appointment.php" method="POST">
<h1 style="font-family:verdana; color:white;">Appiontment Booking Online</h1> 
<h2 class="heading heading-yellow">Book an appointment here!!</h2>

<div class="form-field">
<h1 style="font-family:verdana; color:white;">Pet name:</h1> 
<input type="text" name="petname" placeholder="Pet Name ">
</div>
<div class="form-field">
<h1 style="font-family:Garamond; color:white;">Owner name:</h1> 
<input type="text" name="ownername" placeholder="Owner Name">
</div>
<div class="form-field">
<h1 style="font-family:Garamond; color:white;">Email:</h1> 
<input type="email" name="email" placeholder="Your email">
</div>
<div class="form-field">
<h1 style="font-family:Garamond; color:white;">Password:</h1> 
<input type="text" name="password" placeholder="Your Password">
</div>
<div class="form-field">
<h1 style="font-family:Garamond; color:white;">Owner Number:</h1> 
<input type="text" name="ownernumber"placeholder="Your Number">
</div>
<div class="form-field">
<h1 style="font-family:Garamond; color:white;">Prefered vertinary clinic:</h1> 
<input type="text" name="vertinaryclinic" placeholder="Clinic name">
</div>
<div class="form-field">
<h1 style="font-family:Garamond; color:white;">Day:</h1> 
<select type="Day" name="day" >
<option value="upcoming monday" name="day">upcoming monday</option>
<option value="upcoming tuesday" name="day">upcoming tuesday</option>
<option value="upcoming wednesday" name="day">upcoming wednesday</option>
<option value="upcoming thursday" name="day">upcoming thursday</option>
<option value="upcoming friday" name="day">upcoming friday</option>
<option value="upcoming saturday" name="day">upcoming saturday</option>
<option value="upcoming sunday" name="day">upcoming sunday</option>
</select>
</div>
<div class="form-field">
<h1 style="font-family:Garamond; color:white;">Time:</h1> 
<select type="Time" name="preferedtime">
<option value="Morning 9am to 12pm">Morning 9am to 12pm</option>
<option value="Afternoon 1pm to 4pm">Afternoon 1pm to 4pm</option>
<option value="Evening 5pm to 9pm">Evening 5pm to 9pm</option>
</div>
</select>
<div class="form-field">
<h1 style="font-family:Garamond; color:white;">Caution:</h1> 
<select type="Caution" name="caution">
<option value="cough">cough</option>
<option value="fewer">fewer</option>
<option value="infections">infections</option>
<option value="others">others</option>
<option value="unknown">unknown</option>
</div>
</select>

<button class="btn">Submit</button>
</form>
</div>
</div>


</body>
</html>