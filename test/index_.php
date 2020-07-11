<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://html5-templates.com/" />
    <title>TDSC @ IIT Bombay</title>
	<meta name="description" content="A minimalist Bootstrap theme by StartBootstrap. Contains everything you need to get started building your website. All you have to do is change the text and images.">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<!-- puru added for news ticker START  -->
    <link href="news-bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="news-bootstrap/css/site.css" rel="stylesheet" type="text/css" />
    <script src="news-bootstrap/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="news-bootstrap/scripts/jquery.bootstrap.newsbox.js" type="text/javascript"></script>
<!-- puru added for news ticker END -->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Technology and Development Solutions Cell</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel
    <header id="myCarousel" class="carousel slide"  style="margin-left:25px" width=100%>  -->
    <header id="myCarousel" class="carousel slide"  width=100%>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>


        <!-- Wrapper for slides START -->
        <div class="carousel-inner">
	<?php
        $dirname = "images/";
	$images = glob($dirname."*.png");
	$class_active = 1;  // before foreach
        foreach($images as $curimg){ ?>
	    <div class="item<?php if($class_active == 1){ echo ' active'; $class_active = 0;}?>">
            <div class="fill" style="background-image:url('<?php echo $curimg;?>')">
	    </div>
            <div class="carousel-caption">
	    <?php 
	        $info = pathinfo($curimg);
		$fname = $info['dirname'] . "/" . $info['filename'] . '.' . "txt";
		$fn = fopen($fname,"r");
                $caption= fgets($fn);
		fclose($fn);

//		$caption = readfile($fname);
	    ?>
            <p><?php echo $caption; ?></p>
            </div>
	    </div>
<?php
 }         // end foreach       ?> 
 
        </div>
        <!-- Wrapper for slides END -->





        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
</header>

<!-- news ticker -->
<div class="col-md-5">
    <div class="panel panel-default">
        <div class="panel-heading">
	     <span class="glyphicon glyphicon-list-alt"></span><b>News</b>
	</div>
	<div class="panel-body">
	    <div class="row">
		<div class="col-xs-12">
		   <ul class="demo2">

	    <?php 
	    	$fname = "news.txt";       // read news items from this file
		$fn = fopen($fname,"r");
                $line1 = fgets($fn);       // first line is number of items 
		$nitems = intval($line1);
		for ($x = 0; $x < $nitems; $x++) {
		// each entry has two lines, a date and the one line news item.
                    $line1 = fgets($fn);       // first line is date
                    $line2 = fgets($fn);       // second line is news
		    $line1 = "<b>" . $line1 . "</b>";
		    $line = nl2br($line1 . "" . $line2);  
	     ?>

		   <li class="news-item"><?php echo $line ?></li>

	    <?php   // finish for loop for all news items
	        }

		fclose($fn);

	    ?>

<!-- 		   <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
		   <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
		   <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
		   <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
		   <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
		   <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
-->
	           </ul>
		</div>
	    </div>
	</div>
	<div class="panel-footer">

	</div>
    </div>
</div>


<!-- news ticker end -->








    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Modern Business by StartBootstrap
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.3.7</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


		<div class="row products">

            <div class="col-lg-12">
                <h2 class="page-header">Our Products</h2>
            </div>
		
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="https://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">$24.99</h4>
						<h4><a href="#">First Product</a></h4>
						<p>This product is cheap, and has a very good quality. You must buy it right now!</p>
					</div>
					<div class="ratings">
						<p class="pull-right">15 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="https://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">$64.99</h4>
						<h4><a href="#">Second Product</a></h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">12 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="https://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">$74.99</h4>
						<h4><a href="#">Third Product</a></h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">31 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="https://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">$84.99</h4>
						<h4><a href="#">Fourth Product</a></h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">6 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="https://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">$94.99</h4>
						<h4><a href="#">Fifth Product</a></h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">18 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<h4><a href="#">Like our products?</a></h4>
				<p>Pick your products today to get free shipping!</p>
				<a class="btn btn-primary" target="_blank" href="#">Let's go!</a>
			</div>

		</div>	
		
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="https://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-primary btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website, year | <a href="https://html5-templates.com/" target="_blank" rel="nofollow">HTML5 Templates</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!-- script for news ticker -->
    <script src="news-bootstrap/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="news-bootstrap/scripts/jquery.bootstrap.newsbox.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });

		$(".demo2").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2000,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,

            onToDo: function () {
                //console.log(this);
            }
        });
    });

</script>

</body>

</html>
