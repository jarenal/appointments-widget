<!DOCTYPE html>
<html>
<head>
	<title>Appointments widget</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="package-container">
		<div class="package-head">
			<div class="package-radio"><input type="radio" name="package" value="1"/> Bronze Package</div>
			<div class="package-price">&pound;49.50</div>
		</div>
		<div class="package-body">
			<ul>
				<li><span class="fa fa-check" aria-hidden="true"></span> Lorem ipsum dolor sit</li>
				<li><span class="fa fa-check" aria-hidden="true"></span> Vivamus ut ipsum</li>
				<li><span class="fa fa-times" aria-hidden="true"></span> Sed porttitor erat</li>
				<li><span class="fa fa-times" aria-hidden="true"></span> Maecenas id dui</li>
				<li><span class="fa fa-times" aria-hidden="true"></span> Praesent eu lectus</li>
			</ul>
		</div>
		<div class="package-foot">
			<div class="selected-tag"><span class="fa fa-check" aria-hidden="true"></span> Selected</div>
		</div>
	</div>
	<div class="package-container">
		<div class="package-head">
			<div class="package-radio"><input type="radio" name="package" value="2"/> Silver Package</div>
			<div class="package-price">&pound;69.99</div>
		</div>
		<div class="package-body">
			<ul>
				<li><span class="fa fa-check" aria-hidden="true"></span> Lorem ipsum dolor sit</li>
				<li><span class="fa fa-check" aria-hidden="true"></span> Vivamus ut ipsum</li>
				<li><span class="fa fa-check" aria-hidden="true"></span> Sed porttitor erat</li>
				<li><span class="fa fa-times" aria-hidden="true"></span> Maecenas id dui</li>
				<li><span class="fa fa-times" aria-hidden="true"></span> Praesent eu lectus</li>
			</ul>
		</div>
		<div class="package-foot">
			<div class="selected-tag"><span class="fa fa-check" aria-hidden="true"></span> Selected</div>
		</div>
	</div>
	<div class="package-container">
		<div class="package-head">
			<div class="package-radio"><input type="radio" name="package" value="3"/> Gold Package</div>
			<div class="package-price">From &pound;<span id="default-price"></span></div>
		</div>
		<div class="package-body">
			<ul>
				<li><span class="fa fa-check" aria-hidden="true"></span> Lorem ipsum dolor sit</li>
				<li><span class="fa fa-check" aria-hidden="true"></span> Vivamus ut ipsum</li>
				<li><span class="fa fa-check" aria-hidden="true"></span> Sed porttitor erat</li>
				<li><span class="fa fa-check" aria-hidden="true"></span> Maecenas id dui</li>
				<li><span class="fa fa-check" aria-hidden="true"></span> Praesent eu lectus</li>
			</ul>
			<p><label for="appointment-date">Appointment Date:</label></p>
			<p>
				<select id="select-dates">
					<option value="0">Please select</option>
				</select>
			</p>
			<p><label for="appointment-slot">Appointment Slot:</label></p>
			<p>
				<select id="select-slots">
					<option value="0">---</option>
				</select>
			</p>
		</div>
		<div class="package-foot">
			<div class="selected-tag"><span class="fa fa-check" aria-hidden="true"></span> Selected</div>
		</div>
	</div>
	<script src="https://use.fontawesome.com/6c29b7ea12.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/locale/en-gb.js"></script>
	<script type="text/javascript">
		var appointments = {{{data}}};
	</script>
	<script src="js/app.js"></script>
</body>
</html>