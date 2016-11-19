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
<script src="js/photo-gallery.js"></script>
 <style>
      ul {         
          padding:0 0 0 0;
          margin:0 0 0 0;
      }
      ul li {     
          list-style:none;
          margin-bottom:5px;           
      }
      ul li img {
          cursor: pointer;
      }
      .modal-body {
          padding:5px !important;
      }
      .modal-content {
          border-radius:0;
      }
      .modal-dialog img {
          text-align:center;
          margin:0 auto;
      }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
        float:right;
        text-align:right;
    }
      /*override modal for demo only*/
      .modal-dialog {
          max-width:500px;
          padding-top: 90px;
      }
      @media screen and (min-width: 768px){
          .modal-dialog {
              width:500px;
              padding-top: 90px;
          }          
      }
      @media screen and (max-width:1500px){
          #ads {
              display:none;
          }
      }
  </style>
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
				<h2>ಗ್ಯಾಲರಿ</h2>
			</div>
		</div>
	</div>
		<div class="row">
		<ul class="row">

            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/001.jpg" alt="">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/002.jpg" alt="">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/003.jpg" alt="">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/004.jpg" alt="">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/005.jpg" alt="">
            </li>	
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/006.jpg" alt="">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/007.jpg" alt="">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/008.jpg" alt="">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="image/gallery/009.jpg" alt="">
            </li>
          </ul> 
	
</div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


	</div>
<?php
include ('includes/footer.php');
?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



</body>

