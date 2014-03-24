<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <meta name="description" content="The main site of Danxingdao.">
    <title>单行道⋅横穿美国的公益骑行</title>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/ico/favicon.png">
                                   
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="assets/style/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="assets/style/idangerous.swiper.css" type="text/css"/>
    <link rel="stylesheet" href="assets/style/custom.css" type="text/css"/>
    
    <!-- GOOGLE WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- NAVIGATION -->
    <nav class="fixed-top" id="navigation" style="opacity: 1 !important; top: 0px !important">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- LOGO 
                    <a class="brand pull-left" href="./">
                        <img src="assets/images/logo.png" alt="Treble">
                    </a>
                    END LOGO -->

                    <!-- MOBILE MENU BUTTON -->
                    <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- END MOBILE MENU BUTTON -->
                    
                    <!-- MAIN MENU -->
                    <ul id="main-menu" class="nav-collapse collapse">
                        <li><a href="#page-welcome">首页</a></li>
                        <li><a href="#page-what-we-do">我们要做什么</a></li>
                        <li><a href="#page-why">行动由来</a></li>
                        <li><a href="#page-concept">微公益模式</a></li>
                        <li><a href="#page-charity">中国公益⋅免费午餐</a></li>
                        <li><a href="#page-about">背后的人</a></li>
                        <li><a href="#page-support">加入单行道</a></li>
                        <li><a href="#page-blog">最新消息</a></li>
                        <li><a href="#page-faq">FAQ</a></li>
                        <li><a href="#page-contact">联系我们</a></li>
                    </ul>
                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <a href="http://www.facebook.com" class="sicon-facebook"><i>Facebook</i></a>
                        <a href="http://www.renren.com" class="sicon-pinterest"><i>RenRen</i></a>
                        <a href="http://www.weibo.com" class="sicon-linkedin"><i>Weibo</i></a>
                        <a href="http://www.youku.com" class="sicon-youtube"><i>Youku</i></a>
                        <a href="http://www.youtube.com" class="sicon-clock"><i>YouTube</i></a>
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
    
    <!-- PAGE | CONCEPT -->
    <div class="pages page-work" id="page-concept">
        <div class="container voffset4">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Thank you</h4>
                <h1>Feedback Sent</h1>
                <!-- Short desciption about Work in general -->
            </header>
            <!-- End Header -->

            <!-- Article -->
            <article>
                <!-- Features blocks -->
                <div class="row">
                    <div class="span12 center">
                        <img src="assets/images/pages/welcome/logo.png" alt="Logo">
                    </div>
                </div>

                <div class="row voffset4">
                    <div class="span10 center offset1">
                        <p class="size4_blk"> Thank you for you suggestion. We will get back to you soon.</p>
                    </div>
                </div>

                <div class="row center voffset2">
                    <a href="../en/#page-contact">
                        <button type="button" class="btn btn-default btn-lg">Back</button>
                    </a>
                </div>

                <?php 
                    if(isset($_POST['submit'])){
                        $to = "contact@danxingdao.org"; // this is your Email address
                        $from = $_POST['email']; // this is the sender's Email address
                        $name = $_POST['first_name'];
                        $subject = "User Feedback " . $name;
                        $subject2 = "Copy of your form submission";
                        //$message = $from . " " . $name . " wrote the following:" . "\n\n" . $_POST['message'];
                        $message = $name . "(" . $from . ") wrote the following:" . "\n\n" . $_POST['message'];
                        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
                        //$message = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

                        $headers = "From:" . $from;
                        $headers2 = "From:" . $to;
                        mail($to,$subject,$message,$headers);
                        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                        // You can also use header('Location: thank_you.php'); to redirect to another page.
                        // You cannot use header and echo together. It's one or the other.
                    }
                ?>
            </article>

            <!-- Footer -->
            <footer>                
                <div class="row voffset11">
                </div>
            </footer>
            <!-- End footer -->
        </div>
    </div>
    <!-- END PAGE | CONCEPT -->

    
    <!-- JQUERY -->
    <script src="assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    
    
    <!-- TWITTER BOOTSTRAP -->
    <script src="assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
        <script src="assets/js/bootstrap/html5shiv.js"></script>
    <![endif]-->
    
    
    <!-- PLUGINS -->
    <script src="assets/js/plugins/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.centralized.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.fixedonlater.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.hashloader.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.mixitup.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.nav.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.parallax-1.1.3.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.responsivevideos.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.tweet.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.tweetCarousel.min.js" type="text/javascript"></script>
    <script defer src="assets/js/plugins/idangerous.swiper.js"></script>
        
    
    <!-- INITIALIZE -->
    <script src="assets/js/application/application.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        window.onload = function() {
          var mySwiper = new Swiper('.swiper-container',{
            //Your options here:
            speed: 750, 
            slidesPerView: 3,
            autoplay: 2000,
            mode:'horizontal',
            centeredSlides: true,
            loop: true
            //etc..
          });  
        }
    </script>
    
    <!-- GOOGLE ANALYTICS -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44061294-1', 'gridelicious.net');
        ga('send', 'pageview');
    </script>

</body>
</html>







