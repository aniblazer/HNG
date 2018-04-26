<?php
   $t = time();
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}
h2{
color: black;
font-family: monospace;
font-style: bold;
font-size: 70px;

}
.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url(https://cdn.pixabay.com/photo/2018/04/16/11/42/business-3324394__340.jpg);
  height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 30%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
</style>
</head>
<body>
<div class="bgimg-1">
	<h1 style="color:#02a5f7; font-size: 50px">Hostels.ng 4.0</h1>
	<h2>
		<?php
echo  date("h:i:s");

?>
	</h2>
  <div class="caption">
    <span class="border">DO SOMETHING<br> TODAY THAT YOUR<br> FUTURE SELF WILL<br> THANK YOU FOR</span><br>
  </div>
</div>
<footer class="copyright" style="text-align: center;">
      &copy; 2017 Aniekan Edet. All rights reserved.
</footer>
</body>
</html>
