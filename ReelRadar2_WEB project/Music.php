<!DOCTYPE HTML>

<html>
	<head>
		<title>ReelRadar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css">
        
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <style>
            .swiper-container {
              width: auto;
              padding-top: 20px;
              padding-bottom: 20px;
              
            }
            .swiper-slide {
              background: #fff;
              display: flex;
              align-items: center;
              justify-content: center;
              border: 1px solid #ddd;
              border-radius: 4px;
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
              font-size: 18px;
              font-weight: bold;
              color: #333;
            }
            .swiper-pagination-bullet {
              background: #007bff;
            }
            .swiper-button-next,
            .swiper-button-prev {
              color: #007bff;
            }
          </style>
	</head>
	<body class="is-preload left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
                        <div id="logo">
                            <h1><a href="index.html">RR ReelRadar</a></h1>
                        </div>

						<!-- Nav -->
            <nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Welcome</a></li>
									<li>
										<a href="#">Home</a>
										<ul style="background-color:white ; border-radius:10px; list-style-type:none; padding: 10px">
											<li><a href="Tv-Movies.php" style="text-decoration:none; color: black">Movies & Tv Shows</a></li>
											<li><a href="Games.php" style="text-decoration:none; color: black">Games</a></li>
											<li><a href="Music.php" style="text-decoration:none; color: black">Music</a></li>
										</ul>
									</li>
									<li><a href="">Add</a></li>
									<li><a href="main.php">Login</a></li>
									<li><a href="mainSignUp.php">Signup</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</nav>

					</header>
				</div>
                            
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<div class="swiper-container">
                                        <div class="swiper-wrapper">

                                          <div class="swiper-slide">
                                            <div class ="img_box">
                                            <a href="#" class="image featured"><img src="images/Music/1 (1).jpeg"   /></a>
                                        </div>
                                          </div>
                                        
                                          <div class="swiper-slide">
                                        <a href="#" class="image featured"><img src="images/Music/1 (2).jpeg"   /></a>

                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/1 (3).jpeg"   /></a>

                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/1 (4).jpeg"  /></a>

                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/1 (5).jpeg"   /></a>
                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/1 (6).jpeg"   /></a>
                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/2 (1).jpeg"   /></a>
                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/2 (2).jpeg"   /></a>
                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/2 (3).jpeg"   /></a>
                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/2 (4).jpeg"   /></a>
                                          </div>
                                          <div class="swiper-slide">
                                            <a href="#" class="image featured"><img src="images/Music/2 (5).jpeg"   /></a>
                                          </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                      </div>
                                      
                                      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                      
                                      
                                      <script>
                                        var swiper = new Swiper('.swiper-container', {
                                          slidesPerView: 3,
                                          spaceBetween: 30,
                                          loop: true,
                                          pagination: {
                                            el: '.swiper-pagination',
                                            clickable: true,
                                          },
                                          navigation: {
                                            nextEl: '.swiper-button-next',
                                            prevEl: '.swiper-button-prev',
                                          },
                                        });
                                      </script>


								</div>
							</div>
						</div>
					</div>
				</div>

              

			<!-- Footer -->
            <div id="footer-wrapper">
                <footer id="footer" class="container">
                    <div class="row">
                        <div class="col-3 col-6-medium col-12-small">

                            <!-- Ammar -->
                            <section class="widget contact last">
                                <h3>Ammar Yasser</h3>
                                <ul>
                                    <a href="https://www.facebook.com/profile.php?id=100004478898522"><li>Facebook</li></a>
                                    <br>										
                                    <a href="https://www.instagram.com/3mar.xz/"><li>Instagram</li></a>
                                </ul>
                                </section>

                        </div>
                        <div class="col-3 col-6-medium col-12-small">

                            <!-- Omar -->
                            <section class="widget contact last">
                                <h3>Omar Mohammed</h3>
                                <ul>
                                    <a href=""><li>Twitter</li></a>
                                    <br>
                                    <a href=""><li>Facebook</li></a>
                                    <br>
                                    <a href=""><li>Instagram</li></a>
                                    <br>
                                </ul>
                                </section>

                        </div>
                        <div class="col-3 col-6-medium col-12-small">

                            <!-- Hassan -->
                            <section class="widget contact last">
                                <h3>Hassan Hatem</h3>
                                <ul>
                                    <a href=""><li>Twitter</li></a>
                                    <br>
                                    <a href=""><li>Facebook</li></a>
                                    <br>
                                    <a href=""><li>Instagram</li></a>
                                    <br>
                                </ul>
                                </section>

                        </div>
                        <div class="col-3 col-6-medium col-12-small">

                            <!-- Ahmed -->
                                <section class="widget contact last">
                                    <h3>Ahmed Amir</h3>
                                    <ul>
                                        <a href=""><li>Twitter</li></a>
                                        <br>
                                        <a href=""><li>Facebook</li></a>
                                        <br>
                                        <a href=""><li>Instagram</li></a>
                                        <br>
                                    </ul>
                                </section>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div id="copyright">
                                <ul class="menu">
                                    <li>&copy; ReelRadar. All rights reserved</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	</body>
</html>