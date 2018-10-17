<?php

/* home.html.twig */
class __TwigTemplate_6cc9e33417bdbd08a2801c88cf95ce18e6e3dc4a611dcb50547a028fa9567aef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<!-- slider start -->
<div class=\"slider-area style-1\">
\t<div class=\"container-fluid text-center\">
\t\t<div class=\"slider-text\">
\t\t\t<h2>summer Collection 2017  - ";
        // line 7
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t<h3>A good looking, comfortable traditional collection</h3>
\t\t\t<a href=\"shop.html\">Shop The Collection</a>
\t\t</div>
\t</div>
</div>
<!-- slider end -->
<!-- shop area start -->
<div class=\"shop-area ptb-90\">
\t<div class=\"container-fluid\">
\t\t<div class=\"shop-style-all\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat1\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"new-price\">\$50</span>
\t\t\t\t\t\t\t\t\t<span class=\"old-price\">\$70</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<!-- <a href=\"#\"><i class=\"pe-7s-cart\"></i></a>-->
\t\t\t\t\t\t\t\t\t<a class=\"snipcart-add-item\" data-item-id=\"2\" data-item-name=\"bag\" data-item-price=\"30.00\" data-item-weight=\"100\"
\t\t\t\t\t\t\t\t\t data-item-url=\"preduct-details.html\" data-item-description=\"handbag\">
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat2 cat3\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Beige Tote</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$80</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12 grid-item cat1\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$90</span>
\t\t\t\t\t\t\t\t\t<span class=\"old-price\">\$100</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12 grid-item cat2\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Beige Tote</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$40</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat1\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/5.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"new-price\">\$50</span>
\t\t\t\t\t\t\t\t\t<span class=\"old-price\">\$70</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat3\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/6.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$60</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat2 cat3\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/7.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$80</span>
\t\t\t\t\t\t\t\t\t<span class=\"old-price\">\$90</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12 grid-item cat3\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/8.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$90</span>
\t\t\t\t\t\t\t\t\t<span class=\"old-price\">\$120</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat1\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/9.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$70</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat1\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/10.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$20</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 hidden-sm col-xs-12 grid-item cat1\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/shop/11.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"preduct-details.html\">Classic Gloves</a></h3>
\t\t\t\t\t\t\t\t\t<span>\$30</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"pe-7s-cart\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"view-more text-center mt-30\">
\t\t\t<a href=\"shop.html\">view more</a>
\t\t</div>
\t</div>
</div>
<!-- shop area end -->
<!-- banner area start -->
<div class=\"banner-area pb-100\">
\t<div class=\"container-fluid\">
\t\t<div class=\"banner-img\">
\t\t\t<img src=\"assets/img/banner/1.jpg\" alt=\"\">
\t\t</div>
\t</div>
</div>
<!-- banner area end -->
<!-- blog area start -->
<div class=\"blog-area pb-70\">
\t<div class=\"container-fluid\">
\t\t<div class=\"section-title text-center mb-50\">
\t\t\t<h3>Latest News</h3>
\t\t\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
\t\t\t\tpariatur. Excepteur sint occaecat cupidatat non proident.</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"single-blog mb-30\">
\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t<img src=\"assets/img/blog/1.jpg\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"blog-title\">
\t\t\t\t\t\t<span>December 8, 2017</span>
\t\t\t\t\t\t<h3><a href=\"blog-details.html\">Lorem Ipsum is simply dummy</a></h3>
\t\t\t\t\t\t<a href=\"blog-details.html\">read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"single-blog mb-30\">
\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t<img src=\"assets/img/blog/2.jpg\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"blog-title\">
\t\t\t\t\t\t<span>December 8, 2017</span>
\t\t\t\t\t\t<h3><a href=\"blog-details.html\">Lorem Ipsum is simply dummy</a></h3>
\t\t\t\t\t\t<a href=\"blog-details.html\">read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"single-blog mb-30\">
\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t<img src=\"assets/img/blog/5.jpg\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"blog-title\">
\t\t\t\t\t\t<span>December 8, 2017</span>
\t\t\t\t\t\t<h3><a href=\"blog-details.html\">Lorem Ipsum is simply dummy</a></h3>
\t\t\t\t\t\t<a href=\"blog-details.html\">read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t<div class=\"single-blog mb-30\">
\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t<img src=\"assets/img/blog/3.jpg\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"blog-title\">
\t\t\t\t\t\t<span>December 8, 2017</span>
\t\t\t\t\t\t<h3><a href=\"blog-details.html\">Lorem Ipsum is simply dummy</a></h3>
\t\t\t\t\t\t<a href=\"blog-details.html\">read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- blog area end -->

<!-- loginModal -->
<div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"login\">
\t\t\t\t\t<div class=\"login-form-container\">
\t\t\t\t\t\t<div class=\"login-text\">
\t\t\t\t\t\t\t<h2>login</h2>
\t\t\t\t\t\t\t<span>Please login using account detail bellow.</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"user-name\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"user-password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t<div class=\"button-box\">
\t\t\t\t\t\t\t\t\t<div class=\"login-toggle-btn\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember\">
\t\t\t\t\t\t\t\t\t\t<label for=\"remember\">Remember me</label>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"default-btn floatright\">Login</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- loginModal end -->

";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/Users/jasonreid/Sites/finishingtouches/twig_templates/home.html.twig");
    }
}
