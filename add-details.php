<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Indian Premier League(IPL)</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/temp.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Indian Premier League Cricket Team</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area Start ***** -->

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="register -player.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Add New Players</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="playername" type="text" id="playername" placeholder="NAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="fromm" type="text" list="from" placeholder="TEAM...*" required="">
			<datalist id="from">
			
				<?php
                        include("connectdb.php");
                        $q="select * from addteam";
                        $query= mysqli_query($conn, $q);
                        while($row= mysqli_fetch_assoc($query)){
                            $teamname=$row['teamname'];
                              ?>
				<option value="<?php  echo $teamname; ?>"><?php  echo $teamname; ?></option>
				<?php
				}
                      		?>
			</datalist>
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="price" type="text" id="price" placeholder="PRICE...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="isplaying" type="text" placeholder="PLAYING STATUS...*" required="" list="play">
			<datalist id="play">
			<option value="true">Playing</option>
			<option value="false">On-bench</option>
			</datalist>
                    </fieldset>
                  </div>
		  <div class="col-lg-6">
                    <fieldset>
			<input name="description" type="text" placeholder="DESCRIPTION...*" required="" list="play2">
			<datalist id="play2">
			<option value="Batsman">Batsman</option>
			<option value="Bowler">Bowler</option>
			<option value="All Rounder">All Rounder</option>
			</datalist>
		  </fieldset>
                  </div>
		  <div class="col-lg-12">
                    <fieldset>
			<input name="file" type="file" id="file" placeholder="IMAGE...*" required="">
		  </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button" name="submit">SUBMIT</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="right-in" style="border-radius: 20px;padding: 40px;">
		<form id="contact" action="register.php" method="post" enctype="multipart/form-data">
		  <div class="col-lg-12">
                    <h2>Add New Team</h2>
                  </div>
		  <div class="col-lg-12">
                    <fieldset>
                      <input name="teamname" type="text" id="playername" placeholder="TEAM NAME...*" required="">
                    </fieldset>
                  </div>
		  <div class="col-lg-12">
                    <fieldset>
                      <input name="playerno" type="text" id="playerno" placeholder="PLAYER NO...*" required="">
                    </fieldset>
                  </div>
		  <div class="col-lg-12">
                    <fieldset>
                      <input name="won" type="text" id="playerno" placeholder="CHAMPIONSHIP WON...*" required="">
                    </fieldset>
                  </div>
		  <div class="col-lg-12">
                    <fieldset>
                      <input name="batsman" type="text" id="playerno" placeholder="TOP BATSMAN...*" required="">
                    </fieldset>
                  </div>
		  <div class="col-lg-12">
                    <fieldset>
                      <input name="bowler" type="text" id="playerno" placeholder="TOP BOWLER...*" required="">
                    </fieldset>
                  </div>
		  <div class="col-lg-12">
                    <fieldset>
			<input name="file" type="file" id="file" placeholder="LOGO...*" required="">
		  </fieldset>
                  </div>
		  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button" name="submit">ADD</button>
                    </fieldset>
                  </div>
		</form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>