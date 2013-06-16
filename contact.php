<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <title>SUMMIT TRUST - Contact Page</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="robots" content="index,follow" />
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" />
    <![endif]-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="js/all-in-one.js"></script>
        <script type="text/javascript" src="js/setup.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>

        <script type="text/javascript">
            $(window).load(function() {
                $('#demo-side-bar').removeAttr('style');
            });
        </script>
        <style type="text/css">
            .demobar{display:none;}
            #demo-side-bar{top:53px!important;left:90%!important;display:block!important;}
        </style>
        <!--Google analytics tracker -->
        <script type="text/javascript" src="js/analyticstracking.js"></script>
        <meta name="google-translate-customization" content="91df6474cb52ef00-7f1adc6215151854-gcf648c5b5042e7cc-10"></meta>
        <!-- Header -->
    <header class="header_bg clearfix">
        <div class="container clearfix">
            <!-- Social -->
            <ul class="social-links">
                <li ><a href="javascript:"><img src="images/facebook.png" alt="Facebook"></a></li>
                <li ><a href="javascript:"><img src="images/twitter.png" width="24" height="24" alt="Twitter"></a></li>
            </ul>
            <!-- /Social -->
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
            </div>
            <!-- /Logo -->

            <!-- Master Nav -->
            <?php include_once './naviation.php'; ?>
            <!-- /Master Nav -->
        </div>
    </header>
    <!-- /Header -->
    <!-- START CONTENT -->
    <section class="container clearfix">
        <!-- START PAGE INFO -->
        <header class="container page_info clearfix">

            <h1 class="regular brown bottom_line">Contact Us Today</h1>

            <div class="clear"></div>
        </header>

        <!-- END PAGE INFO -->

        <div class="padding15"></div>

        <!-- START COL 1/3 -->	
        <div class="col_1_3">

            <ul class="contact-address">
                <li class="address"><span>No.1305 , 13th Floor , <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Concorde Hotel Office Tower ,<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Al Maktoum Road , Diera ,<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Dubai , UAE </span></li>
                <li class="phone"><span>+971.4.2951030</span></li>
                <li class="phone"><span>+971.4.2951031</span></li>
                <li class="phone"><span>+971.55.3362036 ( Mobile )</span></li>
                <li class="phone"><span>+98.912.8673673 ( Iran )</span></li>
                <li class="phone"><span>+98.21.84011999-725 ( Toll Free )</span></li>
                <li class="email"><span><a href="mailto:info@SummitTrust.net">info@SummitTrust.net</a></span></li>
            </ul>

            <div class="clear"></div>

        </div>
        <!-- END COL 1/3 -->	

        <!-- START COL 2/3 LAST -->	
        <div class="col_2_3 last">

            <p>
                <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=25.259998,55.321146&amp;spn=0.001698,0.00228&amp;z=18&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=25.259998,55.321146&amp;spn=0.001698,0.00228&amp;z=18&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            </p>

            <div class="padding20"></div>

            <p class="required_info"><span>*</span> Required</p>




            <!-- SUCCESS MESSAGE -->
            <div class="success_box none">
                Email successfully sent. Thank you!
            </div>
            <!-- END SUCCESS MESSAGE -->

            <!-- ERROR MESSAGE -->
            <div class="error_box none">
                Please complete all required fields.
            </div>
            <!-- END ERROR MESSAGE -->



            <!-- START CONTACT FORM -->	
            <form action="#" class="contact_form">
                <p>
                    <label for="name">Name <span>*</span></label>
                    <input class="inputText" type="text" id="name" name="name" />
                </p>
                <div class="clear"></div>
                <p>
                    <label for="email">E-mail <span>*</span></label>
                    <input class="inputText" type="text" id="email" name="email" />
                </p>
                <div class="clear"></div>
                <p>
                    <label for="website">Website</label>
                    <input class="inputText" type="text" id="website" name="website" />
                </p>
                <div class="clear"></div>
                <p>
                    <label for="message">Message <span>*</span></label>
                    <textarea class="inputTextarea" cols="88" rows="6" id="message" name="message"></textarea>
                </p>
                <div class="clear"></div>
                <p class="submit">
                    <a href="javascript:void(0);" class="button white" onclick="$('.contact_form').submit();">Send</a>
                </p>
            </form>
            <!-- END CONTACT FORM -->	

        </div>
        <!-- END COL 2/3 LAST -->	



        <div class="clear padding20"></div>


    </section>
    <!-- END CONTENT -->
    <!-- footer -->
    <footer class="footer_bg_bottom clearfix">
        <div class="footer_bottom container">
            <div class="col_2_3">

                <div class="menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="portfolio_4_cols.html">Portfolio</a></li>
                        <li><a href="pricing_5_cols.html">Pricing</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>


                <div class="clear padding20"></div>


                <p>
                    Copyright &copy; 2013 SUMMIT TRUST . All Right Reserved.  <br/> Powered By <a href="http://www.MavajSunCo.com">MAVAJ SUN CO .</a>  
                </p>

            </div>

            <div class="clear padding20"></div>
        </div>
    </footer>
    <!-- /footer -->
    <div id="demo-side-bar">
    </div>
    <!--wrapper end-->
    <!--Dynamically creates analytics markup-->
</body>
</html>
