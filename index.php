<!DOCTYPE html>
<html lang="en">

<!-- START HEAD SECTION ===================================================================================================================================== -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NOODP">
    <meta name="description" content="It's going to get a little crazy on this blog! I am a new father, loving husband, and stay at home 'fommy.' Join me on my journey as I discuss hot-button topics and re-tell the mostly humourous side of being a family-man.">
    <meta name="keywords" content="baby products, baby, baby's, baby wear, baby clothing, parent portal, parents, infant, newly baby, newborn baby, liver, disease, liver disease, biliary atresia, giggles, shit, giggles n shit, blog, parent, father, fommy, stay at home, funny, humour, dad, newborn, baby, nursery, web development, tech">
    <meta name="author" content="Evan Marshall">
    <title>Giggles N Shit Blog</title>

 <!-- GOOGLE ANALYTICS ====================================================================================================================================== -->
    <?php include_once("php/analyticstracking.php") ?>
    
<!-- GOOGLE PAGE LEVEL ADS ============================================================================================================================== -->
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

<!-- FAVICONS =============================================================================================================================================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico/favicon-16x16.png">
    <link rel="manifest" href="favicon.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

<!-- FACEBOOK GRAPH DATA ==================================================================================================================================== -->
    <meta property="og:url" content="http://www.gigglesnshit.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Main Blog Page" />
    <meta property="og:description" content="Check out the best daddy blog around; Giggles N Shit Blog!" />
    <meta property="og:image" content="http://www.gigglesnshit.com/img/fam-jam.jpg" />
    <meta property="fb:app_id" content="970981369664540"/>
    <meta property="og:site_name" content="Giggles N Shit Blog"/>
    
<!-- TWITTER SHARE CARD - also uses open graph data ========================================================================================================= -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@gigglesshitblog" />
    <meta name="twitter:creator" content="@evanmarshall" />    

<!-- MINIFIED BOOTSTRAP CSS ================================================================================================================================= -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

<!-- FONT-AWESOME =========================================================================================================================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">

<!-- PLUGIN CSS ============================================================================================================================================= -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

<!-- CUSTOM CSS ============================================================================================================================================= -->
    <link rel="stylesheet" href="css/creative.min.css" type="text/css">
    <link href="css/media.maximum.768.min.css" rel="stylesheet" media="screen and (max-width:768px)">
    <link href="css/media.minimum.768.min.css" rel="stylesheet" media="screen and (min-width:768px)">
    <link href="css/media.minimum.992.min.css" rel="stylesheet" media="screen and (min-width:992px)">
    <link href="css/media.maximum.768.landscape.css" rel="stylesheet" media="screen and (orientation:landscape)">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- END HEAD SECTION ======================================================================================================================================= -->

<!-- START BODY SECTION ===================================================================================================================================== -->
<body id="page-top" itemscope itemtype="http://schema.org/Blog">

<!-- START FB COMMENTS JAVASCRIPT =========================================================================================================================== -->
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
<!-- END FB COMMENTS JAVASCRIPT ============================================================================================================================= -->

<!-- START TOP NAV ========================================================================================================================================== -->
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
                <a class="navbar-brand page-scroll" href="#page-top">Giggles N Shit Blog</a>

            </div><!-- ./navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Introduction</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Recent Posts</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!-- END TOP NAV SECTION ====================================================================================================================================

<!-- START SOCIAL NAV SECTION =============================================================================================================================== -->						
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
                <h2 style="color:#F05F40;">If you love this blog, please share with your friends...</h2>

            </div><!-- ./navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="social text-center collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="social-list nav navbar-nav navbar-right">
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.gigglesnshit.com/" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-lg fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.reddit.com/submit?url=http://www.gigglesnshit.com/&title=Check%20out%20the%20best%20daddy%20blog%20around%3B%20Giggles%20N%20Shit%20Blog%21" title="Share on Reddit" target="_blank" class="btn btn-reddit"><i class="fa fa-lg fa-reddit"></i></a>
                    </li>
                    <li>
                        <a href="http://twitter.com/home?status=Check%20out%20the%20best%20daddy%20blog%20around%20%40%20http://www.gigglesnshit.com/" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-lg fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/share?url=http://www.gigglesnshit.com/" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-lg fa-google-plus"></i></a>
                    </li>
                    <li>
                    	<a href="https://www.pinterest.com/pin/create/button/?url=http://www.gigglesnshit.com&media=http://www.gigglesnshit.com/img/fam-jam.jpg&description=Check%20out%20the%20best%20daddy%20blog%20around%3B%20Giggles%20N%20Shit%20Blog%21" title="Share on Pinterest" target="_blank" class="btn btn-pinterest"><i class="fa fa-lg fa-pinterest"></i></a>
                    </li>
                    <li>
                    	<a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.gigglesnshit.com&media=http://www.gigglesnshit.com/img/fam-jam.jpg&title=Giggles%20N%20Shit%20Blog&summary=Check%20out%20the%20best%20daddy%20blog%20around%3B%20Giggles%20N%20Shit%20Blog%21" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-lg fa-linkedin"></i></a>
                    </li>
                    <li style="color:black;">
                    	<a href="#page-top" class="back-to-top"><i class="fa fa-lg fa-arrow-circle-up"></i></a> back2top
                   	</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!-- END SOCIAL NAV SECTION ================================================================================================================================= -->    
<!-- START HERO SECTION ===================================================================================================================================== -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Giggles N Shit</h1>
                <hr>
                <p>It's going to get a little crazy on this blog! I am a new father, loving husband, and stay at home 'fommy.' Join me on my journey as I discuss hot-button topics and re-tell the mostly humourous side of being a family-man.</p>
                <a href="https://www.instagram.com/gigglesnshitblog/" class="btn btn-primary btn-xl page-scroll">#gigglesnshitblog</a>
            </div>
        </div>
    </header>
<!-- END HERO SECTION ======================================================================================================================================= -->

<!-- START GOOGLE ADSENSE #1 SECTION  ======================================================================================================================= -->
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
<!-- END GOOGLE ADSENSE #1 SECTION  ========================================================================================================================= -->

<!-- START WHY WRITE BLOG SECTION =========================================================================================================================== -->
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Why the hell do I want to write a blog??</h2>
                    <hr class="light">
                    <p class="text-faded">I have been entertaining the thought of writing a blog now for some time. I thought to myself: "Evan, blogs are a good form of therapy and they will also provide you with a good excuse to practice your web development." "Evan, you're so smart!"</p>

                    <p class="text-faded">I stand here today with a Huggies wet wipe in one hand and broken dreams in the other hand. I am wiping the cream coloured, sour milk scented crap off of my 4 month old daughter's butt ("how the F did it end up on her armpit and belly button?") and I have an idea. Firstly, I've always felt uneasy when I slap some zinc cream on my finger and wipe it on her anus as she looks up to me with a loving smile on her face. Secondly, as I converse with a fellow co-worker about a bullying issue her son is dealing with at school, I realize I have a great theme for a blog!! Side note: I will most likely talk about the bully conversation in a near-future blog post. The details will introduce to you how I will handle these situatons with my own daughter.</p>

                    <p class="text-faded">What about: my life's re-telling of the day to day situations I find myself in with a little touch of humour and ridiculousness? These situations will be in regards to being a father, husband and friend. I know what you're thinking. "Evan, There's a million of those types of blogs out there." Maybe you're not thinking that and you are thinking I'm a genius (this is the more likely scenario). The difference between all of those other blogs and mine is that I have been told that I have an incredible ability to find humour in some of the most disgusting, upsetting, depressing, frustrating, exciting, scary, happy, (too many emotional adjectives?), real life situations. Also, I can't stand the norm. I hate how children are sheltered from dealing with the many nuances of growing up. I hate how children parent the parents now. I hate the anti-bullying campaigns out there (see future posts). It's not that I don't think something has to be done about it, it's just that I think we are going about it all wrong, as I feel with many hot topics. Oh, and there will be profanity. I loooove profanity. Not as much as my wife though... she swears like a sailor and not some pansy, white cap wearing sailor. She is one of those life-long, wrinkled-up, salty tasting, anchor and ship tattooed sailors from Newfoundland.</p>

                    <p class="text-faded">I'm blunt, extremely sarcastic, ridiculous, and I have very strong opinions on how you should raise a child, even though I've only been a parent for 4 months (I have strong opinions on a lot of things... I'm an ass...). I encourage open debates, as long as you can handle my rebuttals. I am also not afraid to test my theories over the next 18 years as my sweet, beautiful, heart-pinching baby girl grows up in some of the most challenging times. I'm sure I'll even be wrong sometimes, however unlikely that might be.</p>

                    <p class="text-faded">I hope you will enjoy my journey of parenthood and husband-hood &copy;. I know I'm looking forward to it!!</p>
                    <!--
                        <a href="#" class="btn btn-default btn-xl">About the Author</a>
                    -->
                </div>
            </div>
        </div>
    </section>
<!-- END WHY WRITE BLOG SECTION ============================================================================================================================= -->

<!-- START RECENT POSTS SECTION ============================================================================================================================= -->
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">

          		<h2 class="text-center bg-dark" style="margin:0; padding:15px 0;">Click the images below to access the posts</h2>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-2.php?id=2" class="portfolio-box">
                        <img src="img/portfolio/watermelon.jpg" class="img-responsive" alt="blog post 2">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "The Watermelon Incident..."
                                </div>
                                <div class="project-name">
                                    March 28<sup>th</sup>, 2016
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-3.php?id=3" class="portfolio-box">
                        <img src="img/portfolio/peanut.jpg" class="img-responsive" alt="blog post 3">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "Dr. Sloth..."
                                </div>
                                <div class="project-name">
                                    April 5<sup>th</sup>, 2016
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-4.php?id=4" class="portfolio-box">
                        <img src="img/portfolio/the-bomb-1.jpg" class="img-responsive" alt="blog post 4">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "The Bomb Drop: Part I"
                                </div>
                                <div class="project-name">
                                    April 11<sup>th</sup>, 2016
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-5.php?id=5" class="portfolio-box">
                        <img src="img/portfolio/hospital.jpg" class="img-responsive" alt="blog post 5">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "The Bomb Drop: Part II"
                                </div>
                                <div class="project-name">
                                    April 19<sup>th</sup>, 2016
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-6.php?id=6" class="portfolio-box">
                        <img src="img/portfolio/xmas.jpg" class="img-responsive" alt="blog post 6">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "Tough Cookie..."
                                </div>
                                <div class="project-name">
                                    April 26<sup>th</sup>, 2016
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-7.php?id=7" class="portfolio-box">
                        <img src="img/portfolio/santa.jpg" class="img-responsive" alt="blog post 7">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "The Fallout..."
                                </div>
                                <div class="project-name">
                                    May 3<sup>rd</sup>, 2016
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-8.php?id=8" class="portfolio-box">
                        <img src="img/portfolio/car_seat.jpg" class="img-responsive" alt="blog post 8">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "Bumps in the Road..."
                                </div>
                                <div class="project-name">
                                    June 7<sup>th</sup>, 2016
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-9.php?id=9" class="portfolio-box">
                        <img src="img/portfolio/pooface.jpg" class="img-responsive" alt="blog post 9">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "Gunsling N Giggles..."
                                </div>
                                <div class="project-name">
                                    June 22<sup>nd</sup>, 2016
                               	</div>
                         	</div>
                      	</div>
                 	</a>
             	</div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-10.php?id=10" class="portfolio-box">
                        <img src="img/portfolio/yellow.jpg" class="img-responsive" alt="blog post 10">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "Yellow Baby..."
                                </div>
                                <div class="project-name">
                                    August 17<sup>th</sup>, 2016
                               	</div>
                         	</div>
                      	</div>
                 	</a>
             	</div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-11.php?id=11" class="portfolio-box">
                        <img src="img/portfolio/tx.jpg" class="img-responsive" alt="blog post 11">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "Let's Talk About T<sub>x</sub>"
                                </div>
                                <div class="project-name">
                                    September 6<sup>th</sup>, 2016
                               	</div>
                         	</div>
                      	</div>
                 	</a>
             	</div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-12.php?id=12" class="portfolio-box">
                        <img src="img/portfolio/plane.jpg" class="img-responsive" alt="blog post 12">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "Summer in the Six: Part I"
                                </div>
                                <div class="project-name">
                                    September 19<sup>th</sup>, 2016
                               	</div>
                         	</div>
                      	</div>
                 	</a>
             	</div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="pages/blog-13.php?id=13" class="portfolio-box">
                        <img src="img/portfolio/beeds.jpg" class="img-responsive" alt="blog post 13">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    "Summer in the Six: Part II"
                                </div>
                                <div class="project-name">
                                    October 2<sup>nd</sup>, 2016
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
<!-- END RECENT POSTS SECTION =============================================================================================================================== -->
    
<!-- START GOOGLE ADSENSE #2 SECTION  ======================================================================================================================= -->
	<section class="bg-dark">
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 text-center">				
					<?php
                        $googleadsense2 =
                        '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Google Ad -->
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
<!-- END GOOGLE ADSENSE #2 SECTION  ========================================================================================================================= -->

<!-- START FB COMMENTS SECTION ============================================================================================================================== -->
<section class="bg-primary">
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 text-center">
                	<div class="fb-comments" data-href="http://www.gigglesnshit.com/" data-mobile="Auto-detected" data-colorscheme="dark" data-width="100%" data-order-by="social" data-numposts="10"></div>
               	</div><!-- ./col-lg-12 -->
         	</div><!-- ./row -->
     	</div><!-- ./container -->
</section><!-- ./bg-primary -->
<!-- END FB COMMENTS SECTION ================================================================================================================================ -->

<!-- START RECOMMENDED RESOURCES SECTION ==================================================================================================================== -->
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
                            <p>To say the three dudes on this podcast are entertaining is a gross understatement. I started listening to their podcast before Isla was diagnosed with her disease. I was intrigued by the story of one of the hosts actually living with Cystic Fibrosis and having seen him on television in the past; I knew the podcast would be hilarious. The three hosts of Sickboy provide a disambiguation of sickness ranging from adult circumcision to depression to end stage cancer. They take a no holds barred approach and discuss everything under the sun with their guests whom are inflicted with an illnesses. Click the <a href="http://www.sickboypodcast.com/"><strong>logo</strong></a> above to be directed to their site where you can listen to clips, signup on iTunes, follow on Twitter, Facebook, and Instagram!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <div class="thumbnail">
                        <a href="https://healthunlocked.com/"><img class="img-responsive" alt="health unlocked banner" src="../img/portfolio/health-unlocked.png"></a>
                        <div class="caption">
                            <h3>Health Unlocked</h3>
                            <hr>
                            <p>The forum scene on the internet, especially Facebook, for diseases is very dire to say the least. There is a bunch of negativity, misinformation and people just looking for a handout. I stumbled upon Health Unlocked and finally found legitimate information on Biliary Atresia. The site covers tons of other disorders as well, so if you're looking for information or support on most diseases, you'll find it here. This site has a great forum where Katie and I discovered many other parents going through the exact same thing as us. Please click the <a href="https://healthunlocked.com/"><strong>logo</strong></a> above to be directed to their site!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> 
<!-- END RECOMMENDED RESOURCES SECTION ====================================================================================================================== -->

<!-- START ADSENSE SECTION ======================================================================================================================= -->
    <section class="bg-primary">
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 text-center">

<!-- GOOGLE ADSENSE #3 ====================================================================================================================================== -->
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
    </section><!-- ./bg-primary -->
<!-- END ADSENSE SECTION ==================================================================================================================================== -->

<!-- START CONTACT SECTION ================================================================================================================================== -->
    <div class="container-fluid bg-dark text-center" style="padding-top:20px;" id="contact">
      	<h2 class="section-heading">Drop me a Line</h2>
      	<hr class="primary">
      	<p>Feel free to contact me anytime, anyday via my personal email or social media accounts.</p>
      	<i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
      	<p><a href="mailto:evanmarshall1986@gmail.com">EMAIL ME!</a></p>
 	</div>
<!-- END CONTACT SECTION ==================================================================================================================================== -->
    
<!-- START SOCIAL ACCOUNTS SECTION ========================================================================================================================== -->
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
<!-- END SOCIAL ACCOUNTS SECTION ============================================================================================================================ -->

<!-- MINIFIED BOOTSTRAP JQUERY ===============================================================================================================================--><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!--  MINIFIED BOOTSTRAP JAVASCRIPT ========================================================================================================================= --> 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<!--  PLUGIN JAVASCRIPT ===================================================================================================================================== -->
    <script src="js/build/jquery.easing.min.min.js"></script>
    <script src="js/build/jquery.fittext.min.js"></script>
    <script src="js/wow.min.js"></script>

<!--  CUSTOM THEME JAVASCRIPT =============================================================================================================================== -->
    <script src="js/build/creative.min.js"></script>

</body>
<!-- END BODY SECTION ======================================================================================================================================= -->

</html>