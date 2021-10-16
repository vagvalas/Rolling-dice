<!DOCTYPE html>
<html>
<head>
<style>
h1 {
  display: block;
  font-size: 3em;
  margin-top: 1.67em;
  margin-bottom: 0.67em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
  color: orange;
}
#inner {
  border: 1px solid red;
  width: 300px;
  height: 400px;
  position: relative;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
  	
	margin: auto;
	margin-top: 25px;
}

#inner1 {
  border: 0px solid red;
  width: 150px;
  height: 200px;
  position: relative;
  top:0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;  
  margin: auto;
  margin-top: 15px;
}
#outer {
  border: 4px solid grey;
  width: 550px;
  height: 450px;
  position: relative;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
  	
	margin: auto;
}
form {
  text-align: center;
}
</style>
</head>
<body style="background-color:powderblue;">

 <h1 style="text-align:center">Rolling-dice</h1>
<div id="outer">
  <div id="inner">
    
  	 <form action="index.php" method="post">
      <label for="amount">Input your desired amount to bet:</label>
      <input type="text" name="amount" id="amount">
      <br />
      <br />
  <label for="number">Input ">" or "<" to bet:</label>
  <input type="text" name="number" id="number">
  <br />
  <input type="submit" value="BET" >
</form> 
<br />
<br />
<div id="inner1">
 <?php 

    if (isset($_POST['number'])){
    $inputnumber = $_POST['number'];
$x = rand(1,10);
if ($inputnumber == ">"){
  if ($x>5) {
    echo  nl2br ("WON \n The number was:". $x);
  }else{
    echo  nl2br ("LOST \n The number was:" . $x);
  }
} elseif ($inputnumber == "<") {
  if ($x<5) {
    echo  nl2br ("WON \n The number was:" . $x);
  }else{
    echo  nl2br ("LOST \n The number was:" . $x);
  }
} else {
  echo "Type '>' or '<'";



}
}

     ?>
   </div>

  </div>
</div>
</body>
</html> 