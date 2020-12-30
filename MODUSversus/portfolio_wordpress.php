<?php include_once "inc/header.php"; ?>
<?php include_once "inc/navbar.php"; ?>
<link rel="stylesheet" href="assets/css/portfolio_style.css">
<body>
    <section class="custom-header-section">
        <div class="custom-header">
            <div class="custom-header-name">
                <h5>PORTFOLIO</h5>
            </div>
            <div class="custom-header-dir">
                <p><a href="index.php">Home</a> / <a href="portfolio.php">Portfolio</a> / WORDPRESS </p>
            </div>
        </div>
         <span class="custom-tip custom-tip-down"></span>
	</section>
	
	<main>	
		<section class="portfolio-head-carousel-section">
			<div class="portfolio-head">
				<div class="portfolio-head-name">
					<h3>Donec faucibus ultricies congue</h3>
				</div>
				<div class="custom-carousel-controls">
					<div class="custom-carousel-control-box"> 
						<a href="#demo"  data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
					</div>
					<div class="custom-carousel-control-box"> 
						<a href="#demo"  data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="portfolio-carousel">
				<div id="demo" class="carousel slide" data-ride="carousel">
			<!-- The slideshow -->
					<div class="carousel-inner text-center">
						<div class="carousel-item active">
							<img src="images/1.jpg" alt="Los Angeles" width="100%" height="500px">
							
						</div>
						<div class="carousel-item">
							<img src="images/2.jpg" alt="Chicago" width="100%" height="500px">
						
						</div>
						<div class="carousel-item">
							<img src="images/3.jpg" alt="New York" width="100%" height="500px">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="carousel-control-prev carousel-left-icon justify-left" href="#demo" data-slide="prev">
						<div class="w-25 carousel-icon-box">
							<span class="fa fa-angle-double-left" aria-hidden="true"></span>
						</div>
					</a>
					<a class="carousel-control-next carousel-right-icon justify-flex-end" href="#demo" data-slide="next">
						<div class="w-25 carousel-icon-box">
							<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						</div>
					</a>
				</div>
			<!-- Indicators -->

				<ul class="carousel-indicators position-static ">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1" ></li>
					<li data-target="#demo" data-slide-to="2" ></li>
				</ul>
				
			</div>
		</section>

		<section class="project-detail-section">
			<div class="project-description">
				<h5>PROJECT DESCRIPTION</h5>
				<div class="project-description-para">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vel,
						fuga minima eligendi deserunt temporibus!
					</p>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis fuga 
						itaque voluptatibus facilis cumque accusantium libero veritatis 
						similique enim ullam. Fuga expedita vitae magni odit ab enim inventore 
						aliquid mollitia. Lorem ipsum dolor sit, amet consectetur adipisicing 
						elit. Adipisci, obcaecati! Lorem, ipsum dolor sit amet consectetur 
						adipisicing elit. Totam facilis provident aliquam blanditiis cum 
						accusantium velit accusamus. Aliquam, nisi et!
					</p>
				</div>
			</div>
			<div class="project-detail">
				<h5>PROJECT DETAIL</h5>
				<div class="detail-col">
					<div class="project-detail-row">
						<div class="project-logo-text">
							<div class="project-icon">
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</div>
							<div class="date-row">
								<p>Release date</p>
							</div>
						</div>
						<div class="project-detail-col-3">
							<p>26 May 2013</p>
						</div>
					</div>
					<hr>
					<div class="project-detail-row">
						<div class="project-logo-text">
							<div class="project-icon">
								<i class="fa fa-cogs" aria-hidden="true"></i>
							</div>
							<div class="date-row">
								<p>Technologies</p>
							</div>
						</div>
						<div class="project-detail-col-3">
							<p>HTML/CSS WORDPRESS</p>
						</div>
					</div>
					<hr>
					<div class="project-detail-row">
						<div class="project-logo-text">
							<div class="project-icon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							
							<div class="date-row">
								<p>Clients</p>
							</div>
						</div>
						<div class="project-detail-col-3">
							<p>MightyDeals.</p>
						</div>
					</div>
					<hr>
					<div class="project-detail-row">
						
						<div class="project-logo-text">
							<div class="project-icon">
								<i class="fa fa-link" aria-hidden="true"></i>
							</div>
							<div class="date-row">
								<p>Project url</p>
							</div>
						</div>
						<div class="project-detail-col-3">
							<a href="#">VIEW PROJECT</a>
						</div>
					</div>
				</div>
			</div> 
		</section>

		<section class="related-project-section">
			<div class="related-project-header-section">
				<div class="related-project-text">
					<h5>RELATED PROJECTS</h5>
				</div>
				<div class="custom-carousel-controls">
					<div class="custom-carousel-control-box"> 
						<a href="#projectCarousel"  data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
					</div>
					<div class="custom-carousel-control-box"> 
						<a href="#projectCarousel"  data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="project-carousel">
				<div id="projectCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner padding-2">
						
						<div class="carousel-item active height-16">  <!-- carousel-item-1 -->

							<div class="related-project-col-section">  <!-- project-slide-section-1 -->

								<div class="related-project-col">  <!-- project-1 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col ">  <!--project-2-->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col">  <!-- project-3 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col">  <!-- project-4 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="carousel-item ">  <!-- carousel-item-1 -->

							<div class="related-project-col-section ">  <!-- project-slide-section-1 -->

								<div class="related-project-col">  <!-- project-1 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col">  <!--project-2-->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col">  <!-- project-3 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col">  <!-- project-4 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="carousel-item ">  <!-- carousel-item-1 -->

							<div class="related-project-col-section ">  <!-- project-slide-section-1 -->

								<div class="related-project-col">  <!-- project-1 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col">  <!--project-2-->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col">  <!-- project-3 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>

								<div class="related-project-col">  <!-- project-4 -->
									<div class="related-col-overlay-image">
										<div class="related-project-img">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="related-project-overlay">
										<div class="related-project-detail-url">
											<div class="related-project-box">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
											</div>
											<div class="related-project-box">
												<a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="related-project-text">
											<p>Lorem, ipsum.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

    <?php include_once "inc/footer.php"; ?>
</body>