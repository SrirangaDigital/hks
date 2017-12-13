
<!-- Navigation-->
<?php
include ('includes/header_inner.php');
?>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h2>ರಾಜ್ಯಮಟ್ಟದ ಹೊಯ್ಸಳ ಮಹಿಳಾ ಸ್ನೇಹಕೂಟ ಸಮಾರಂಭ</h2>
			</div>
		</div>
		<div class="col-sm-12 center">
		<p>ದಿನಾಂಕ 3<i>-</i>12<i>-</i>2017 ರಂದು, ಮಹಿಳಾ ಸಾಧಕರಿಗೆ ಸನ್ಮಾನ ಸಾಂಸ್ಕೃತಿಕ ಕಾರ್ಯಕ್ರಮ. ಬೆಂಗಳೂರು, ಹಾಸನ, ಶಿವಮೊಗ್ಗ, ಮಂಡ್ಯ, ತುಮಕೂರು, ತಿಪಟೂರು, ಚಾಮರಾಜನಗರ ಹಾಗೂ ಮೈಸೂರು.</p>
		<div id="sketchimages">
            <img data-original="image/main/001.jpg" src="image/thumb/sketch_001.jpg" alt="">
            <img data-original="image/main/002.jpg" src="image/thumb/sketch_002.jpg" alt="">
            <img data-original="image/main/003.jpg" src="image/thumb/sketch_003.jpg" alt="">
            <img data-original="image/main/004.jpg" src="image/thumb/sketch_004.jpg" alt="">
            <img data-original="image/main/005.jpg" src="image/thumb/sketch_005.jpg" alt="">
            <img data-original="image/main/006.jpg" src="image/thumb/sketch_006.jpg" alt="">
            <img data-original="image/main/007.jpg" src="image/thumb/sketch_007.jpg" alt="">
            <img data-original="image/main/008.jpg" src="image/thumb/sketch_008.jpg" alt="">
            <img data-original="image/main/010.jpg" src="image/thumb/sketch_010.jpg" alt="">
            <img data-original="image/main/011.jpg" src="image/thumb/sketch_011.jpg" alt="">
            <img data-original="image/main/012.jpg" src="image/thumb/sketch_012.jpg" alt="">
            <img data-original="image/main/013.jpg" src="image/thumb/sketch_013.jpg" alt="">
            <img data-original="image/main/014.jpg" src="image/thumb/sketch_014.jpg" alt="">
            <img data-original="image/main/015.jpg" src="image/thumb/sketch_015.jpg" alt="">
            <img data-original="image/main/016.jpg" src="image/thumb/sketch_016.jpg" alt="">
   </div>
		</div>
		

	</div>	




</div>



  <script>
jQuery(window).load(function () {
  var vieweroptions = {
        // inline: true,
        url: 'data-original',
        ready:  function (e) {
          console.log(e.type);
        },
        show:  function (e) {
          console.log(e.type);
        },
        shown:  function (e) {
          console.log(e.type);
        },
        hide:  function (e) {
          console.log(e.type);
        },
        hidden:  function (e) {
          console.log(e.type);
        },
        view:  function (e) {
          console.log(e.type, e.detail.index);
        },
        viewed:  function (e) {
          console.log(e.type, e.detail.index);
          // this.viewer.zoomTo(1).rotateTo(180);
        }
      };

    var viewer = new Viewer(document.getElementById('sketchimages'),vieweroptions);
});
</script>

<?php
include ('includes/footer.php');
?>
</body>






