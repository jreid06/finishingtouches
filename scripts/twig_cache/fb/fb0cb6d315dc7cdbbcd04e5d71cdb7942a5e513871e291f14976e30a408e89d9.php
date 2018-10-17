<?php

/* home.html.twig */
class __TwigTemplate_d6c7a16b0c408f144b5372674a521df8986ed332205e31aa083b47dd059fde16 extends Twig_Template
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
\t\t\t<h2>summer Collection 2017 - ";
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
\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat1\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["HTTP"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["ADMIN_DOMAIN"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "main_image", array()), "url", array()), "html", null, true);
            echo "\" width=\"100\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1 text-light\">
\t\t\t\t\t\t\t\t\t<h3 class=\"text-capitalize\"><a href=\"preduct-details.html\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 31
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<!-- <a href=\"#\"><i class=\"pe-7s-cart\"></i></a>-->
\t\t\t\t\t\t\t\t\t<a class=\"snipcart-add-item\" data-item-id=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product_sku", array()), "html", null, true);
            echo "\" data-item-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", array()), "html", null, true);
            echo "\" data-item-price=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", array()), 2), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t data-item-url=\"preduct-details.html\" data-item-description=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t";
        // line 228
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"view-more text-center mt-30\">
\t\t\t<a href=\"shop.html\">view more</a>
\t\t</div>
\t</div>
</div>
<!-- shop area end -->
<!-- banner area start -->
";
        // line 245
        echo "<!-- banner area end -->
<!-- blog area start -->
";
        // line 306
        echo "<!-- blog area end -->

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
        return array (  130 => 306,  126 => 245,  114 => 228,  112 => 43,  98 => 35,  90 => 34,  85 => 31,  81 => 29,  77 => 28,  67 => 25,  61 => 21,  57 => 20,  41 => 7,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base/base.html.twig\" %}
{% block content %}
<!-- slider start -->
<div class=\"slider-area style-1\">
\t<div class=\"container-fluid text-center\">
\t\t<div class=\"slider-text\">
\t\t\t<h2>summer Collection 2017 - {{status}}</h2>
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
\t\t\t\t\t{% for product in products %}
\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat1\">
\t\t\t\t\t\t<div class=\"shop hover-style mb-30\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<a href=\"preduct-details.html\">
\t\t\t\t\t\t\t\t\t<img src=\"{{HTTP}}/{{ADMIN_DOMAIN}}/{{product.main_image.url}}\" width=\"100\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"shop-title title-style-1 text-light\">
\t\t\t\t\t\t\t\t\t<h3 class=\"text-capitalize\"><a href=\"preduct-details.html\">{{product.title}}</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£{{product.price}}</span>
\t\t\t\t\t\t\t\t\t{# <span class=\"old-price\">\$70</span> #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-cart\">
\t\t\t\t\t\t\t\t\t<!-- <a href=\"#\"><i class=\"pe-7s-cart\"></i></a>-->
\t\t\t\t\t\t\t\t\t<a class=\"snipcart-add-item\" data-item-id=\"{{product.product_sku}}\" data-item-name=\"{{product.title}}\" data-item-price=\"{{product.price | number_format(2)}}\"
\t\t\t\t\t\t\t\t\t data-item-url=\"preduct-details.html\" data-item-description=\"{{product.title}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{# <div class=\"col-md-3 col-sm-6 col-xs-12 grid-item cat1\">
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
\t\t\t\t\t</div> #}
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
{# <div class=\"banner-area pb-100\">
\t<div class=\"container-fluid\">
\t\t<div class=\"banner-img\">
\t\t\t<img src=\"assets/img/banner/1.jpg\" alt=\"\">
\t\t</div>
\t</div>
</div> #}
<!-- banner area end -->
<!-- blog area start -->
{# <div class=\"blog-area pb-70\">
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
</div> #}
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

{% endblock %}", "home.html.twig", "/Users/jasonreid/Sites/finishingtouches/twig_templates/home.html.twig");
    }
}
