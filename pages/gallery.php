<!DOCTYPE html>
<html lang="en">

<!-- START HEAD SECTION ============================================================================================================================ -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NOODP">
    <meta name="keywords" content="baby products, baby, baby's, baby wear, baby clothing, parent portal, parents, infant, newly baby, newborn baby, liver, disease, liver disease, biliary atresia, giggles, shit, giggles n shit, blog, parent, father, fommy, stay at home, funny, humour, dad, newborn, baby, nursery, web development, tech">
    <meta name="author" content="Evan Marshall">
    <title>Blog Gallery</title>

<!-- GOOGLE ANALYTICS ============================================================================================================================== -->
    <?php include_once("../php/analyticstracking.php") ?>
    
<!-- GOOGLE PAGE LEVEL ADS ========================================================================================================================= -->
	<?php
    	$googleadsense0 =
			'<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<script>
			  (adsbygoogle = window.adsbygoogle || []).push({
				google_ad_client: "ca-pub-8526023922334594",
				enable_page_level_ads: true
			  });
			</script>'; 
    	echo $googleadsense0;
	?>  

<!-- FAVICONS ====================================================================================================================================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicon.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon.ico/favicon-16x16.png">
    <link rel="manifest" href="../favicon.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

<!-- FACEBOOK GRAPH DATA =========================================================================================================================== -->
    <meta property="og:url" content="http://www.gigglesnshit.com/pages/gallery.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Blog Gallery" />
    <meta property="og:description" content="Check out the latest photography from Giggles N Shit Blog!" />
    <meta property="og:image" content="http://www.gigglesnshit.com/img/gallery/pointpleasanttree-scaled.jpg" />
    <meta property="fb:app_id" content="970981369664540"/>
    <meta property="og:site_name" content="Giggles N Shit Blog"/>

<!-- TWITTER SHARE CARD - also uses open graph data ================================================================================================ -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@gigglesshitblog" />
    <meta name="twitter:creator" content="@evanmarshall" />

<!-- MINIFIED BOOTSTRAP CSS ======================================================================================================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

<!-- FONT-AWESOME ================================================================================================================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">

<!-- PLUGIN CSS ==================================================================================================================================== -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">

<!-- CUSTOM CSS ==================================================================================================================================== -->
    <link rel="stylesheet" href="../css/creative.min.css" type="text/css">
    <link href="../css/media.maximum.768.min.css" rel="stylesheet" media="screen and (max-width:768px)">
    <link href="../css/media.minimum.768.min.css" rel="stylesheet" media="screen and (min-width:768px)">
    <link href="../css/media.minimum.992.min.css" rel="stylesheet" media="screen and (min-width:992px)">
    <link href="../css/media.maximum.768.landscape.css" rel="stylesheet" media="screen and (orientation:landscape)">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- END HEAD SECTION ============================================================================================================================== -->

<!-- START BODY SECTION ============================================================================================================================ -->
<body id="page-top" itemscope itemtype="http://schema.org/Blog">

<!-- START FB COMMENTS JAVASCRIPT ================================================================================================================== -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=970981369664540";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
<!-- END FB COMMENTS JAVASCRIPT ==================================================================================================================== -->

<!-- START TOP NAV ================================================================================================================================= -->
   
<!-- EDIT LINKS ==================================================================================================================================== -->
    <nav id="mainNav" role="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../index.php">Giggles N Shit Blog</a>
            </div><!-- ./navbar-header -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">Homepage</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sites">Recommended Sites</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav><!--./Top Nav -->
<!-- END TOP NAV SECTION =========================================================================================================================== -->    

<!-- START SOCIAL NAV SECTION ====================================================================================================================== -->						
	<nav id="mainNav" role="navigation" class="social navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2 style="color:#F05F40;">Do you like the shots? Please share...</h2>
            </div><!-- ./navbar-header -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="social text-center collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="social-list nav navbar-nav navbar-right">
                    <li>
                    	<!-- FACEBOOK -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.gigglesnshit.com/pages/gallery.php" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-lg fa-facebook"></i></a>
                    </li>
                    <li>
                    	<!-- REDDIT -->
                        <a href="https://www.reddit.com/submit?url=http://www.gigglesnshit.com/pages/gallery.php&title=Check%20out%20the%20latest%20photography%20from%20Giggles%20N%20Shit%20Blog%21" title="Share on Reddit" target="_blank" class="btn btn-reddit"><i class="fa fa-lg fa-reddit"></i></a>
                    </li>
                    <li>
                    	<!-- TWITTER -->
                        <a href="http://twitter.com/home?status=Check%20out%20the%20latest%20photography%20from%20Giggles%20N%20Shit%20Blog%21%20Found%20on%20http://www.gigglesnshit.com/pages/gallery.php" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-lg fa-twitter"></i></a>
                    </li>
                    <li>
                    	<!-- GOOGLE + -->
                        <a href="https://plus.google.com/share?url=http://www.gigglesnshit.com/pages/gallery.php" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-lg fa-google-plus"></i></a>
                    </li>
                    <li>
                    	<!-- PINTEREST -->
                    	<a href="https://www.pinterest.com/pin/create/button/?url=http://www.gigglesnshit.com/pages/gallery.php&media=http://www.gigglesnshit.com/img/gallery/pointpleasanttree-scaled.jpg&description=Check%20out%20the%20latest%20photography%20from%20Giggles%20N%20Shit%20Blog%21" title="Share on Pinterest" target="_blank" class="btn btn-pinterest"><i class="fa fa-lg fa-pinterest"></i></a>
                    </li>
                    <li>
                    	<!-- LINKEDIN -->
                    	<a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.gigglesnshit.com/pages/gallery.php&media=http://www.gigglesnshit.com/img/gallery/pointpleasanttree-scaled.jpg&title=Giggles%20N%20Shit%20Blog%20Gallery&summary=Check%20out%20the%20latest%20photography%20from%20Giggles%20N%20Shit%20Blog%21" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-lg fa-linkedin"></i></a>
                    </li>
                    <li style="color:black;">
                    	<!-- PAGE TOP -->
                    	<a href="#page-top" class="back-to-top"><i class="fa fa-lg fa-arrow-circle-up"></i></a> back2top
                   	</li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav><!-- ./Social Nav -->
<!-- END SOCIAL NAV SECTION ======================================================================================================================== -->    

<!-- START HERO SECTION ============================================================================================================================ -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Giggles N Shit</h1>
                <hr>
                <p>Welcome to my collection of photos! I recently started delving into the world of photography because it tied in nicely with blogging and web development. I wanted to provide you with high quality images to go with your high quality stories</p>
                <a href="https://www.instagram.com/gigglesnshitblog/" class="btn btn-primary btn-xl page-scroll">#gigglesnshitblog</a>
            </div><!-- ./header-content-inner -->
        </div><!-- ./header-content -->
    </header><!-- ./Hero -->
<!-- END HERO SECTION ============================================================================================================================== -->

<!-- START GOOGLE ADSENSE #1 SECTION  ============================================================================================================== -->
	<section class="bg-dark">
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 text-center">				
					<?php
                        $googleadsense =
                        '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Google Ad -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-8526023922334594"
                            data-ad-slot="7357456062"
                            data-ad-format="auto"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>';
                        echo $googleadsense;
                    ?>
             	</div><!-- ./col-lg-12 -->
         	</div><!-- ./row -->
      	</div><!-- ./container -->
	</section><!-- ./bg-dark --> 
<!-- END GOOGLE ADSENSE #1 SECTION  ================================================================================================================ -->

<!-- START GALLERY & ADSENSE SECTION =============================================================================================================== -->
    <section class="bg-primary" id="gallery">
		<div class="container text-center">
			<div class="row">
				<h2 itemprop="name">Giggles N Shit Gallery</h2>
				<h3 class="section-heading">*Click on images to view full size*</h3>
				<hr class="light">
<!-- IMAGE #1  ===================================================================================================================================== -->
				<!-- Img trigger modal -->
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="thumbnail">
								<img class="img-responsive" alt="image 1" src="../img/gallery/pointpleasanttree-scaled.jpg" data-toggle="modal" data-target="#myModal-1">
								<div class="caption">
									<h3>Under the Tree</h3>
									<h4>This photo was taken at Point Pleasant Park in Halifax, NS. Mommy is...</h4>
								</div><!-- ./caption -->
							</div><!-- ./thumbail -->
							<!-- Modal -->
							<div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="color:black;">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h3 class="modal-title" id="myModalLabel">Under the Tree</h3>
											<h4>This photo was taken at Point Pleasant Park in Halifax, NS. Mommy is holding her favourite little princess under a park tree.</h4>
										</div><!-- ./modal-header -->
										<div class="modal-body">
										<img src="../img/gallery/pointpleasanttree.jpg" alt="image 1" class="img-responsive">
										</div><!-- ./modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div><!-- ./modal-footer -->
									</div><!-- .modal-content -->
								</div><!-- ./modal-dialog -->
							</div><!-- ./modal -->
						</div><!-- ./col-lg-4 -->
<!-- IMAGE #2  ===================================================================================================================================== -->
						<!-- Img trigger modal -->
						<div class="col-lg-4">
							<div class="thumbnail">
								<img class="img-responsive" alt="image 2" src="../img/gallery/pointpleasantlounge-scaled.jpg" data-toggle="modal" data-target="#myModal-2">
								<div class="caption">
									<h3>Lounging</h3>
									<h4>This photo was taken at Point Pleasant Park in Halifax, NS. Isla and I...</h4>
								</div><!-- ./caption -->
							</div><!-- ./thumbail -->
							<!-- Modal -->
							<div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="color:black;">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h3 class="modal-title" id="myModalLabel">Lounging</h3>
											<h4>This photo was taken at Point Pleasant Park in Halifax, NS. Isla and I are lounging on a blanket waiting for some picnic grub.</h4>
										</div><!-- ./modal-header -->
										<div class="modal-body">
										<img src="../img/gallery/pointpleasantlounge.jpg" alt="image 2" class="img-responsive">
										</div><!-- ./modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div><!-- ./modal-footer -->
									</div><!-- .modal-content -->
								</div><!-- ./modal-dialog -->
							</div><!-- ./modal -->
						</div><!-- ./col-lg-4 -->
<!-- IMAGE #3  ===================================================================================================================================== -->
						<!-- Img trigger modal -->
						<div class="col-lg-4">
							<div class="thumbnail">
								<img class="img-responsive" alt="image 3" src="../img/gallery/islainair-scaled.jpg" data-toggle="modal" data-target="#myModal-3">
								<div class="caption">
									<h3>In the Air</h3>
									<h4>This photo was taken at Point Pleasant Park in Halifax, NS. Isla loves...</h4>
								</div><!-- ./caption -->
							</div><!-- ./thumbail -->
							<!-- Modal -->
							<div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="color:black;">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h3 class="modal-title" id="myModalLabel">In the Air</h3>
											<h4>This photo was taken at Point Pleasant Park in Halifax, NS. Isla loves messing around.</h4>
										</div><!-- ./modal-header -->
										<div class="modal-body">
										<img src="../img/gallery/islainair.jpg" alt="image 3" class="img-responsive">
										</div><!-- ./modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div><!-- ./modal-footer -->
									</div><!-- .modal-content -->
								</div><!-- ./modal-dialog -->
							</div><!-- ./modal -->
						</div><!-- ./col-lg-4 -->
<!-- IMAGE #4  ===================================================================================================================================== -->
						<!-- Img trigger modal -->
						<div class="col-lg-4">
							<div class="thumbnail">
								<img class="img-responsive" alt="image 4" src="../img/gallery/scars-scaled.jpg" data-toggle="modal" data-target="#myModal-4">
								<div class="caption">
									<h3>Battle Scars</h3>
									<h4>This photo was taken in Kentville, NS. Two of my heroes showing off...</h4>
								</div><!-- ./caption -->
							</div><!-- ./thumbail -->
							<!-- Modal -->
							<div class="modal fade" id="myModal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="color:black;">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h3 class="modal-title" id="myModalLabel">Battle Scars</h3>
											<h4>This photo was taken in Kentville, NS. Two of my heroes showing off their battle scars from Isla's transplant. Mom donated 24% of her liver to save our little girl.</h4>
										</div><!-- ./modal-header -->
										<div class="modal-body">
										<img src="../img/gallery/scars.jpg" alt="image 4" class="img-responsive">
										</div><!-- ./modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div><!-- ./modal-footer -->
									</div><!-- .modal-content -->
								</div><!-- ./modal-dialog -->
							</div><!-- ./modal -->
						</div><!-- ./col-lg-4 -->
<!-- IMAGE #5  ===================================================================================================================================== -->
						<!-- Img trigger modal -->
						<div class="col-lg-4">
							<div class="thumbnail">
								<img class="img-responsive" alt="image 5" src="../img/gallery/snuggles-scaled.jpg" data-toggle="modal" data-target="#myModal-5">
								<div class="caption">
									<h3>Daddy's Little Gal</h3>
									<h4>This photo was taken at Ronald McDonald House, Toronto. I always...</h4>
								</div><!-- ./caption -->
							</div><!-- ./thumbail -->
							<!-- Modal -->
							<div class="modal fade" id="myModal-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="color:black;">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h3 class="modal-title" id="myModalLabel">Daddy's Little Gal</h3>
											<h4>This photo was taken at Ronald McDonald House, Toronto. I always have to grab snuggles whenever Isla is waking up for a feed.</h4>
										</div><!-- ./modal-header -->
										<div class="modal-body">
										<img src="../img/gallery/snuggles.jpg" alt="image 5" class="img-responsive">
										</div><!-- ./modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div><!-- ./modal-footer -->
									</div><!-- .modal-content -->
								</div><!-- ./modal-dialog -->
							</div><!-- ./modal -->
						</div><!-- ./col-lg-4 -->
<!-- IMAGE #6  ===================================================================================================================================== -->
						<!-- Img trigger modal -->
						<div class="col-lg-4">
							<div class="thumbnail">
								<img class="img-responsive" alt="image 6" src="../img/gallery/scarsstanding-scaled.jpg" data-toggle="modal" data-target="#myModal-6">
								<div class="caption">
									<h3>Still Standing</h3>
									<h4>This photo was taken in Kentville, NS. Isla and mommy have survived...</h4>
								</div><!-- ./caption -->
							</div><!-- ./thumbail -->
							<!-- Modal -->
							<div class="modal fade" id="myModal-6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="color:black;">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h3 class="modal-title" id="myModalLabel">Still Standing</h3>
											<h4>This photo was taken in Kentville, NS. Isla and mommy have survived major abdominal surgeries and are still standing strong</h4>
										</div><!-- ./modal-header -->
										<div class="modal-body">
										<img src="../img/gallery/scarsstanding.jpg" alt="image 6" class="img-responsive">
										</div><!-- ./modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div><!-- ./modal-footer -->
									</div><!-- .modal-content -->
								</div><!-- ./modal-dialog -->
							</div><!-- ./modal -->
						</div><!-- ./col-lg-4 -->																		
					</div><!-- ./row -->
				</div><!-- ./container -->
				<hr class="light">
<!-- FOOTNOTE SHARE  =============================================================================================================================== -->
				<blockquote style="color:black;"><em>Please Follow Giggles N Shit on <a style="color:white;" href="https://twitter.com/gigglesshitblog">Twitter</a>, <a style="color:white;" href="https://www.facebook.com/gigglesnshitblog/">Facebook</a> or <a style="color:white;" href="https://www.instagram.com/gigglesnshitblog/">Instagram</a> to keep up to date with the latest blog posts and the latest updates of our family story. Don't forget to share with your friends!</em></blockquote>
			</div>
		</div>
	</section><!-- ./gallery -->		

<!-- GOOGLE ADSENSE #2 ============================================================================================================================= -->
	<section>
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 text-center">		
					<?php
						$googleadsense2 =
						'<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- Google Ad Aside -->

						<ins class="adsbygoogle"
						style="display:block"
						data-ad-client="ca-pub-8526023922334594"
						data-ad-slot="6719400463"
						data-ad-format="auto"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
						</script>';
						echo $googleadsense2;
					?>
				</div><!-- ./col-lg-12 -->
			</div><!-- ./row -->
		</div><!-- ./container -->
	</section><!-- ./bg-dark -->
<!-- END GALLERY & ADSENSE ========================================================================================================================= -->

<!-- START FB COMMENTS SECTION ===================================================================================================================== -->
<section class="bg-dark">
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 text-center">
                	<div class="fb-comments" data-href="http://www.gigglesnshit.com/pages/gallery.php" data-mobile="Auto-detected" data-colorscheme="dark" data-width="100%" data-order-by="social" data-numposts="10"></div>
               	</div><!-- ./col-lg-12 -->
         	</div><!-- ./row -->
     	</div><!-- ./container -->
</section><!-- ./bg-dark -->

<!-- END FB COMMENTS SECTION ======================================================================================================================= -->
    
<!-- START RECOMMENDED RESOURCES SECTION =========================================================================================================== -->
    <section id="sites">
    	<div class="container-fluid">
        	<h2 class="text-center">Highly Recommended Resources for my Readers</h2>
            <hr>
        	<div class="row">
                <div class="col-lg-6 text-center">
                    <div class="thumbnail">
                        <a href="http://www.sickboypodcast.com/"><img class="img-responsive" alt="sickboy podcast banner" src="../img/portfolio/sickboy.jpg"></a>
                        <div class="caption">
                            <h3>Sickboy Podcast</h3>
                            <hr>
                            <p>To say the three dudes on this podcast are entertaining is a gross understatement. I started listening to their podcast before Isla was diagnosed with her disease. I was intrigued by the story of one of the hosts actually living with Cystic Fibrosis and having seen him on television in the past; I knew the podcast would be hilarious. The three hosts of Sickboy provide a disambiguation of sickness ranging from adult circumcision to depression to end stage cancer. They take a no holds barred approach and discuss everything under the sun with their guests whom are inflicted with an illnesses. Click the <a href="http://www.sickboypodcast.com/"><strong>logo</strong></a> above to be directed to their site where you can listen to clips, sign up on iTunes, follow on Twitter, Facebook, and Instagram!</p>
                        </div><!-- ./caption -->
                  	</div><!-- ./thumbnail -->
             	</div><!-- ./col-lg-6 -->
              	<div class="col-lg-6 text-center">
                    <div class="thumbnail">
                        <a href="https://healthunlocked.com/"><img class="img-responsive" alt="health unlocked banner" src="../img/portfolio/health-unlocked.png"></a>
                        <div class="caption">
                            <h3>Health Unlocked</h3>
                            <hr>
                            <p>The forum scene on the internet, especially Facebook, for diseases is very dire to say the least. There is a bunch of negativity, misinformation and people just looking for a handout. I stumbled upon Health Unlocked and finally found legitimate information on Biliary Atresia. The site covers tons of other disorders as well, so if you're looking for information or support on most diseases, you'll find it here. This site has a great forum where Katie and I discovered many other parents going through the exact same thing as us. Please click the <a href="https://healthunlocked.com/"><strong>logo</strong></a> above to be directed to their site!</p>
                        </div><!-- ./caption -->
                  	</div><!-- ./thumbnail -->
              	</div><!-- ./col-lg-6 -->
            </div><!-- ./row -->
      	</div><!-- ./container-fluid -->
  	</section><!-- ./sites -->
<!-- END RECOMMENDED RESOURCES SECTION ============================================================================================================= -->

<!-- START ADSENSE SECTION ========================================================================================================================= -->
    <section class="bg-primary">
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 text-center">

<!-- GOOGLE ADSENSE #3 ============================================================================================================================= -->
					<?php
                    $googleadsense3 =
                    '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Google Ad Footer -->
        
                    <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-8526023922334594"
                    data-ad-slot="2149600061"
                    data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>';
                    echo $googleadsense3;
                            ?>
               	</div><!-- ./col-lg-12 -->     
			</div><!-- ./row -->
        </div><!-- ./container -->
    </section><!-- ./bg-dark -->
<!-- END ADSENSE SECTION =========================================================================================================================== -->

<!-- START CONTACT SECTION ========================================================================================================================= -->
    <div class="container-fluid bg-dark text-center" style="padding-top:20px;" id="contact">
      	<h2 class="section-heading">Drop me a Line</h2>
      	<hr class="primary">
      	<p>Feel free to contact me anytime, anyday via my personal email or social media accounts.</p>
      	<i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
      	<p><a href="mailto:evanmarshall1986@gmail.com">EMAIL ME!</a></p>
 	</div>
<!-- END CONTACT SECTION =========================================================================================================================== -->
    
<!-- START SOCIAL ACCOUNTS SECTION ================================================================================================================= -->
    <section id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Let's Get Social!</h2>
                    <h3>Follow, add, or like Giggles N Shit's social media accounts</h3>
                    <hr class="primary">
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://www.facebook.com/gigglesnshitblog/"><i class="fa fa-facebook fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                        <h3>Facebook</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://www.instagram.com/gigglesnshitblog/"><i class="fa fa-instagram fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                        <h3>Instagram</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://www.etsy.com/ca/shop/BabyIslay?ref=shopinfo_shophome_leftnav"><i class="fa fa-shopping-cart fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                        <h3>Etsy</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://twitter.com/gigglesshitblog"><i class="fa fa-twitter fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                        <h3>Twitter</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- END SOCIAL ACCOUNTS SECTION =================================================================================================================== -->
	
<!-- MINIFIED BOOTSTRAP JQUERY ===================================================================================================================== -->	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!--  MINIFIED BOOTSTRAP JAVASCRIPT ================================================================================================================ --> 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<!--  PLUGIN JAVASCRIPT ============================================================================================================================ -->
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/build/jquery.fittext.min.js"></script>
    <script src="../js/wow.min.js"></script>

<!--  CUSTOM THEME JAVASCRIPT ====================================================================================================================== -->
    <script src="../js/build/creative.min.js"></script>

</body>
<!-- END BODY SECTION ============================================================================================================================== -->

</html>