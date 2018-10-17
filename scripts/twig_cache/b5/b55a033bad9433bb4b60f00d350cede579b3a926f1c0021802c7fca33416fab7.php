<?php

/* base/base.html.twig */
class __TwigTemplate_c5f44986c2a836dc77771cba7e07e1718e5aba6061cb5dc1d56bb2f07550bba1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'custom_scripts' => array($this, 'block_custom_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<title>Mira - Minimal eCommerce HTML Template</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
\t<!-- Place favicon.ico in the root directory -->

\t<!-- all css here -->
\t<link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/owl.carousel.min.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/pe-icon-7-stroke.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/meanmenu.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/shortcodes/shortcode.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/style.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/responsive.css\">
\t<script src=\"assets/js/vendor/modernizr-2.8.3.min.js\"></script>
\t<link href=\"https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css\" type=\"text/css\" rel=\"stylesheet\" />
</head>

<body>
\t<!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
\t<div class=\"waraper\">
\t\t<header>
\t\t\t<div class=\"header-area\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-lg-3  col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/img/logo/logo.png\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 col-sm-2 col-xs-2 text-center\">
\t\t\t\t\t\t\t<div class=\"main-menu display-inline\">
\t\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"/\">HOME <i class=\"pe-7s-angle-down\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-us.html\">ABOUT US</a></li>
\t\t\t\t\t\t\t\t\t\t";
        // line 60
        echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">shop</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">BLOG <i class=\"pe-7s-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">blog 2 column</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-details.html\">blog details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact-us.html\">CONTACT</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-lg-3 col-xs-6 col-sm-6 text-right text-sm text-res\">
\t\t\t\t\t\t\t<div class=\"cart-user-language\">
\t\t\t\t\t\t\t\t<div class=\"shopping-cart ml-30\">
\t\t\t\t\t\t\t\t<a class=\"top-cart\" href=\"cart.html\"><i class=\"pe-7s-cart snipcart-checkout\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mobile-menu\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- header end -->
\t\t";
        // line 86
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "\t\t";
        // line 88
        echo "\t\t<!-- footer area end -->
\t\t<footer class=\"footer-area\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 col-sm-5\">
\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/logo/logo.png\" alt=\"\"></a>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet tempor, consectetur adipisicing.</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/devitems/?ref=bookmarks\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/devitemsllc\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.google.com/\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/devitems/\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"footer-title res-mrg\">
\t\t\t\t\t\t\t\t\t<h3>categories</h3>
\t\t\t\t\t\t\t\t\t<div class=\"footer-menu\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\"> Clothing</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\"> Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Jewelry</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"footer-title res-mrg\">
\t\t\t\t\t\t\t\t\t<h3>Support</h3>
\t\t\t\t\t\t\t\t\t<div class=\"footer-menu\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Careers</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sale products</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms & Condition</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Delivery Inforamtion</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 hidden-sm\">
\t\t\t\t\t\t\t\t<div class=\"footer-title res-mrg\">
\t\t\t\t\t\t\t\t\t<h3>Quick Links</h3>
\t\t\t\t\t\t\t\t\t<div class=\"footer-menu\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"wishlist.html\">Wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">My Cart</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-12\">
\t\t\t\t\t\t<div class=\"footer-title res-mrg-2\">
\t\t\t\t\t\t\t<h3>newsletter</h3>
\t\t\t\t\t\t\t<div class=\"footer-newsletter\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
\t\t\t\t\t\t\t\t\tincididunt ut labore et.</p>
\t\t\t\t\t\t\t\t<div id=\"mc_embed_signup\" class=\"subscribe-form\">
\t\t\t\t\t\t\t\t\t<form action=\"http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef\"
\t\t\t\t\t\t\t\t\t method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t novalidate>
\t\t\t\t\t\t\t\t\t\t<div id=\"mc_embed_signup_scroll\" class=\"mc-form\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" placeholder=\"Your email address\" required>
\t\t\t\t\t\t\t\t\t\t\t<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mc-news\" aria-hidden=\"true\"><input type=\"text\" name=\"b_6bbb9b6f5827bd842d9640c82_05d85f18ef\"
\t\t\t\t\t\t\t\t\t\t\t\t tabindex=\"-1\" value=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"><input type=\"submit\" value=\"Subscribe\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"footer-bottom text-center ptb-20\">
\t\t\t\t\t<p>
\t\t\t\t\t\t© 2017
\t\t\t\t\t\t<a href=\"https://freethemescloud.com/\" target=\"_blank\">Free themes Cloud</a>
\t\t\t\t\t\t. All Rights Reserved.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>

\t";
        // line 184
        $this->displayBlock('custom_scripts', $context, $blocks);
        // line 199
        echo "
</body>

</html>";
    }

    // line 86
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 184
    public function block_custom_scripts($context, array $blocks = array())
    {
        // line 185
        echo "\t<!-- all js here -->
\t<script src=\"/assets/js/vendor/jquery-1.12.0.min.js\"></script>
\t<script src=\"/assets/js/bootstrap.min.js\"></script>
\t<script src=\"/assets/js/jquery.meanmenu.js\"></script>
\t<script src=\"/assets/js/isotope.pkgd.min.js\"></script>
\t<script src=\"/assets/js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"/assets/js/owl.carousel.min.js\"></script>
\t<script src=\"/assets/js/jquery.counterup.min.js\"></script>
\t<script src=\"/assets/js/waypoints.min.js\"></script>
\t<script src=\"/assets/js/ajax-mail.js\"></script>
\t<script src=\"/assets/js/plugins.js\"></script>
\t<script src=\"/assets/js/main.js\"></script>
\t<script src=\"https://cdn.snipcart.com/scripts/2.0/snipcart.js\" id=\"snipcart\" data-api-key=\"YzY2OWQ0MWUtM2M5NC00ODg0LWJmZmEtYzE2M2MxOTk4M2VjNjM2NzUyMjg5MzIzOTM0Mzkw\"></script>
";
    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 185,  218 => 184,  212 => 86,  205 => 199,  203 => 184,  105 => 88,  103 => 87,  100 => 86,  73 => 60,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/base.html.twig", "/Users/jasonreid/Sites/finishingtouches/twig_templates/base/base.html.twig");
    }
}
