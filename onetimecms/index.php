<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="style/clock.css">
</head>
<body>
//


	<div class="header">
		<h1>OneTimeSystem </h1>
		<div class="clock">
  <div>
    <div class="date"></div>
    <div class="day"></div>
  </div>
  <div class="dot"></div>
  <div>
    <div class="hour-hand"></div>
    <div class="minute-hand"></div>
    <div class="second-hand"></div>
  </div>
  <div>
    <span class="h3">3</span>
    <span class="h6">6</span>
    <span class="h9">9</span>
    <span class="h12">12</span>
  </div>
  <div class="diallines"></div>
</div>

<script>
var dialLines = document.getElementsByClassName('diallines');
var clockEl = document.getElementsByClassName('clock')[0];

for (var i = 1; i < 60; i++) {
  clockEl.innerHTML += "<div class='diallines'></div>";
  dialLines[i].style.transform = "rotate(" + 6 * i + "deg)";
}

function clock() {
  var weekday = new Array(7),
      d = new Date(),
      h = d.getHours(),
      m = d.getMinutes(),
      s = d.getSeconds(),
      date = d.getDate(),
      month = d.getMonth() + 1,
      year = d.getFullYear(),

      hDeg = h * 30 + m * (360/720),
      mDeg = m * 6 + s * (360/3600),
      sDeg = s * 6,

      hEl = document.querySelector('.hour-hand'),
      mEl = document.querySelector('.minute-hand'),
      sEl = document.querySelector('.second-hand'),
      dateEl = document.querySelector('.date'),
      dayEl = document.querySelector('.day');

      weekday[0] = "Sunday";
      weekday[1] = "Monday";
      weekday[2] = "Tuesday";
      weekday[3] = "Wednesday";
      weekday[4] = "Thursday";
      weekday[5] = "Friday";
      weekday[6] = "Saturday";

      var day = weekday[d.getDay()];

  hEl.style.transform = "rotate("+hDeg+"deg)";
  mEl.style.transform = "rotate("+mDeg+"deg)";
  sEl.style.transform = "rotate("+sDeg+"deg)";
  dateEl.innerHTML = date+"/"+month+"/"+year;
  dayEl.innerHTML = day;
}

setInterval("clock()", 100);

</script>
 <h2>Login</h2>
	</div>

	<form method="post" action="index.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>
