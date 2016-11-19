<!DOCTYPE html>
<html lang="kn">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>ಹೊಯ್ಸಳ ಕರ್ನಾಟಕ ಸಂಘ</title>
<link rel="shortcut icon" href="hksicon.ico">
<!-- Bootstrap css link  -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custome css link -->
<link href="css/sytle.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<!-- Bootsrap Java Script link -->
<script src="js/bootstrap.min.js"></script>


</head>

<body>

<!-- Navigation-->
<?php
include ('includes/header_inner.php');
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h2>ನಮ್ಮನ್ನು ಸಂಪರ್ಕಿಸಿ	</h2>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-sm-6">
			<h3>ಹೊಯ್ಸಳ ಕರ್ನಾಟಕ ಸಂಘ (ರಿ.) </h3>
			<p>888, ನಾರಾಯಣ ಶಾಸ್ತ್ರಿ ರೋಡ್, <br/>
			ಲಕ್ಷ್ಮೀ ಪುರಂ, ಮೈಸೂರು <i>-</i> 570 004</p> <br/>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.2950166343976!2d76.64542884921595!3d12.295908591258998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf7003fa7e6b03%3A0xb880fc7a4f71114e!2sHoysala+Karnataka+Sangha!5e0!3m2!1sen!2sin!4v1469082523773" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-sm-6">
    <form  action="sendform.php" method="POST">
	<div class="form-group">
  <label for="usr">ನಿಮ್ಮ ಹೆಸರು :</label>
  <input type="text" class="form-control" id="usr" name="name" required>
</div>
<div class="form-group">
  <label for="pwd">ನಿಮ್ಮ ಇ<i>-</i>ಮೇಲ್ :</label>
  <input type="text" class="form-control" id="email" name="email" required>
</div>
<div class="form-group">
  <label for="comment"> ನಿಮ್ಮ ಸಂದೇಶ :</label>
  <textarea class="form-control" rows="5" id="comment" name="comment"  required></textarea>
</div>
 <br/>
 <button type="submit" class="btn btn-success" value="Submit Button">Submit</button>
    </form>
		</div>
		</div>
		
		
	




</div>
	
<?php
include ('includes/footer.php');
?>





</body>
</html>
