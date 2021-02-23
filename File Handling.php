<!DOCTYPE HTML>
<html>
<head>
<style>
.error{color: #FF0000;}
</style>
</head>
<body?
<?php
//define variables and set to empty vales
$nameErr = $emailErr = $genderErr = $websiteErr = $passErr ="";
$name = $email = $gender = $comment = $website = $password = "";

if ($_SERVER["REQUEST_METHOD"]) == "POST") {
if (empty($_POST["name"])) {
$fnameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
}

if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email= test_input($_POST["email"]);
}

if(empty($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"])
}
if(empty($_POST["password"])) {
$passrErr = "Password is required";
} else {
$password = test_input($_POST["password"])
}
}

function test_input($data) {
$data =  trim($data);
$data =  stripslashes($data);
$data =  htmlspecialchars($data);
return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class= "error">* required field</span></p>
<form method= "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
First Name: <input type="text" name="First name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
Last Name: <input type="text" name="Last name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
Gender:
<input type="ratio" name="gender" value="female">Female
<input type="ratio" name="gender" value="male">Male
<input type="ratio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
Email:
<input type="text" name="email" >
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
<input type="submit" name="submit" value ="Submit">
</form>
User Name:
<input type="text" name="User Name" >
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
Password:
<input type="password" name="User Password" >
<span class="error">* <?php echo $passErr;?></span>
<br><br>
Recovery Email:
<input type="text" name="Recovery email" >
<span class="error">* <?php echo $emailErr;?></span>
<br><br>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>

</body>
</html>






