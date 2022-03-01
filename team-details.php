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
    <link rel="stylesheet" href="assets/css/searchbar.css">

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

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          IPL Ckt Team
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="index.php">Home</a></li>
                          

				<!button-->                  
			  <div class="main-button-red">
                  		<div><a href="add-details.php">Add Team</a></div>
              		  </div> 
				<!button end-->
<!--searchbar-->
    <div class="container1">
	<div class="search_wrap search_wrap_3">
		<div class="search_box">
			<form action="search.php" method="post">
			<input name="search" type="text" class="input" placeholder="Search...">
			<button type="submit" id="form-submit" class="btn btn_common" name="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>		
    </div>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
		<?php
		include("connectdb.php");
		$tm=$_GET['name'];
		$q="select * from addteam where teamname='$tm'";
                        $query= mysqli_query($conn, $q);
                        while($row= mysqli_fetch_assoc($query)){
                            $playerno=$row['playerno'];
			    $won=$row['won'];
				$batsman=$row['batsman'];
				$bowler=$row['bowler'];
				$image=$row['image'];
			}
		?>
		
          <h2><?php echo $tm; ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
<div class="col-lg-12" style="text-align:center; margin-top:-50px;">
              <h2><?php echo $tm; ?> Team </h2>
            </div>
	<div class="row">
	<div class=col-lg-12">
	<div class="row">
	<div class="col-lg-4">

            </div>
	<div class="col-lg-4">
	<div class="meeting-item" style="">
                <div class="thumb">
                  <a href="#"><img src="<?php echo $image; ?>" alt="New Lecturer Meeting" style="width:320px; height:320px; margin-left:22px"></a>
                </div>
              </div>
            </div>
	<div class="col-lg-4">
	<div class="meeting-item">
                 
              </div>
            </div></div>
	</div></div>
      <div class="row">	
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-6">
                  <div class="count-area-content">
                    <div class="count-digit"><?php echo $playerno; ?></div>
                    <div class="count-title">Player Count</div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="count-area-content">
                    <div class="count-digit"><?php echo $won; ?></div>
                    <div class="count-title">Championship Won Count</div>
                  </div>
                </div>
	</div>
              </div>
            </div>
            
          </div>
        </div> 
	<div class="col-lg-12">
          <div class="row">
        <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <!--<a href="#"><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>-->
                </div>
                <div class="down-content">		
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="#"><h4><?php echo $batsman; ?></h4></a>
                  <p>Top Batsman</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <!--<a href="#"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>-->
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="#"><h4><?php echo $bowler; ?></h4></a>
                  <p>Top Bowler</p>
                </div>
              </div>
            </div>
	</div>
	</div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Players</h2>
          </div>
        </div>
	
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
	<?php
include("connectdb.php");
$q1="select * from addplayer where fromm='$tm'";
                        $query1= mysqli_query($conn, $q1);
                        while($row1= mysqli_fetch_assoc($query1)){
                            $pname=$row1['playername'];
			    $from=$row1['fromm'];
				$price=$row1['price'];
				$status=$row1['isplaying'];
				$description=$row1['description'];
				$image=$row1['image'];
			?>
            <div class="item"><a href="player-details.php?name=<?php echo $row1['playername']; ?>">
              <img src="<?php echo $image; ?>" alt="Course One">
              <div class="down-content">
                <h4><?php echo $pname; ?></h4>
                <div class="info">
                  <div class="row">
                    <div class="col-12" style="text-align:center;">
                      <ul>
                        <li><?php echo $from; ?></li>
                        <li>Playing Status-<?php echo $status; ?></li>
                      </ul>
			<li>Role- <?php echo $description; ?></li>
		      <ul>
		      </ul>
                    </div>
                    <div class="col-12">
                       <span style="text-align:center;">Price- <?php echo $price; ?></span>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
		<?php
		}
		?>
            
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>IPL © 2022. 
          <br>Indian Premier League Cricket Team</p>
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
    <script src="assets/js/isotope.js"></script>
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
