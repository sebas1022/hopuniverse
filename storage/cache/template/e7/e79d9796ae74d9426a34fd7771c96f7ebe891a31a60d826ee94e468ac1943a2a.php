<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* part/template/common/header.twig */
class __TwigTemplate_75c9b975414f3029307d4b8c55137de7dc927324592a517b9262b14e2b237d4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\">
<![endif]-->
<!--[if IE 9 ]>
<html dir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 10
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 16
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 17
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 18
        if (($context["description"] ?? null)) {
            echo " 
<meta name=\"description\" content=\"";
            // line 19
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo " 
";
        // line 21
        if (($context["keywords"] ?? null)) {
            echo " 
<meta name=\"keywords\" content=\"";
            // line 22
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 23
        echo " 
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/part/slick/slick.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/part/slick/slick-theme.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/part/main.css\" rel=\"stylesheet\">
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 32
            echo (($__internal_compile_0 = $context["style"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\" type=\"text/css\" rel=\"";
            echo (($__internal_compile_1 = $context["style"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["rel"] ?? null) : null);
            echo "\" media=\"";
            echo (($__internal_compile_2 = $context["style"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["media"] ?? null) : null);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " 
<script src=\"catalog/view/theme/part/main.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/part/slick/slick.min.js\" type=\"text/javascript\"></script>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo " 
<link href=\"";
            // line 37
            echo (($__internal_compile_3 = $context["link"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["href"] ?? null) : null);
            echo "\" rel=\"";
            echo (($__internal_compile_4 = $context["link"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["rel"] ?? null) : null);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " 
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " 
<script src=\"";
            // line 40
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " 
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo " 
";
            // line 43
            echo $context["analytic"];
            echo " 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "   
";
        // line 45
        if ((0 === twig_compare(($context["part_font"] ?? null), 0))) {
            echo "\t\t
";
            // line 46
            $context["regfonts"] = [0 => "", 1 => "Arial", 2 => "Verdana", 3 => "Helvetica", 4 => "Lucida Grande", 5 => "Trebuchet MS", 6 => "Times New Roman", 7 => "Tahoma", 8 => "Georgia"];
            // line 47
            if (!twig_in_filter(($context["part_font"] ?? null), ($context["regfonts"] ?? null))) {
                // line 48
                echo "<link href='//fonts.googleapis.com/css?family=";
                echo ($context["part_font"] ?? null);
                echo "' rel='stylesheet' type='text/css'>
";
            }
        }
        // line 51
        echo "<style type=\"text/css\">
";
        // line 52
        if (($context["part_font"] ?? null)) {
            // line 53
            $context["font"] = twig_replace_filter(($context["part_font"] ?? null), ["+" => " "]);
            // line 54
            echo "body {font-family:";
            echo ($context["font"] ?? null);
            echo ";}
";
        }
        // line 55
        echo "\t
:root {
--main:";
        // line 57
        echo ($context["part_color_main"] ?? null);
        echo ";
--main2:";
        // line 58
        echo ($context["part_color_main2"] ?? null);
        echo ";
--main3:";
        // line 59
        echo ($context["part_color_main3"] ?? null);
        echo ";
--text:";
        // line 60
        echo ($context["part_text_color"] ?? null);
        echo ";
--text2:";
        // line 61
        echo ($context["part_text_color2"] ?? null);
        echo ";
}
";
        // line 63
        if (($context["part_custom_css"] ?? null)) {
            // line 64
            echo ($context["part_custom_css"] ?? null);
            echo "
";
        }
        // line 66
        echo "</style>
";
        // line 67
        if (($context["part_custom_js"] ?? null)) {
            // line 68
            echo "<script>
";
            // line 69
            echo ($context["part_custom_js"] ?? null);
            echo "
</script>
";
        }
        // line 72
        echo "</head>
<body>
<nav id=\"top\">
<div class=\"container\">
";
        // line 76
        echo ($context["currency"] ?? null);
        echo "
";
        // line 77
        echo ($context["language"] ?? null);
        echo "
<div id=\"top-links\" class=\"nav pull-right\">
<ul class=\"list-inline\">
<li><a href=\"";
        // line 80
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
<li class=\"dropdown\"><a href=\"";
        // line 81
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
<ul class=\"dropdown-menu dropdown-menu-right\">
";
        // line 83
        if (($context["logged"] ?? null)) {
            // line 84
            echo "<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
<li><a href=\"";
            // line 85
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
<li><a href=\"";
            // line 86
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
<li><a href=\"";
            // line 87
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
<li><a href=\"";
            // line 88
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
";
        } else {
            // line 90
            echo "<li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
<li><a href=\"";
            // line 91
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
";
        }
        // line 93
        echo "</ul>
</li>
<li><a href=\"";
        // line 95
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\" ><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
<li><a href=\"";
        // line 96
        echo ($context["compare"] ?? null);
        echo "\" id=\"compare-total\"><i class=\"fa fa-exchange\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_compare"] ?? null);
        echo "</span></a></li>
</ul>
</div>
</div>
</nav>
<header>
<div class=\"container\">
<div class=\"logo\">
";
        // line 104
        if (($context["logo"] ?? null)) {
            // line 105
            if ((0 === twig_compare(($context["home"] ?? null), ($context["og_url"] ?? null)))) {
                // line 106
                echo "<img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" />
";
            } else {
                // line 108
                echo "<a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
";
            }
        } else {
            // line 111
            echo "<h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
";
        }
        // line 113
        echo "</div>
<div class=\"header-menu\">
<button type=\"button\" class=\"hidden-lg hidden-md\" id=\"mob-menu-close\">
<span aria-hidden=\"true\">&times;</span>
</button>
<ul>
";
        // line 119
        echo ($context["menu"] ?? null);
        echo "
";
        // line 120
        if (($context["part_url"] ?? null)) {
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["part_url"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 122
                echo "<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "href", [], "any", false, false, false, 122);
                echo "\" class=\"menu-link\">";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 122);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 125
        echo "</ul>
</div>
<ul class=\"menu-right\">
<li><button type=\"button\" class=\"hidden-lg hidden-md\" id=\"mob-menu\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
<line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
<line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
<line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
</svg></button></li>
<li><button type=\"button\" data-toggle=\"modal\" data-target=\"#searchmodal\" >
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" >
<circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
<line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
</svg></button></li>
<li>";
        // line 139
        echo ($context["cart"] ?? null);
        echo "</li>
</ul>
</div>
</header>
";
        // line 143
        echo ($context["search"] ?? null);
    }

    public function getTemplateName()
    {
        return "part/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 143,  443 => 139,  427 => 125,  415 => 122,  411 => 121,  409 => 120,  405 => 119,  397 => 113,  389 => 111,  376 => 108,  366 => 106,  364 => 105,  362 => 104,  349 => 96,  341 => 95,  337 => 93,  330 => 91,  323 => 90,  316 => 88,  310 => 87,  304 => 86,  298 => 85,  291 => 84,  289 => 83,  280 => 81,  274 => 80,  268 => 77,  264 => 76,  258 => 72,  252 => 69,  249 => 68,  247 => 67,  244 => 66,  239 => 64,  237 => 63,  232 => 61,  228 => 60,  224 => 59,  220 => 58,  216 => 57,  212 => 55,  206 => 54,  204 => 53,  202 => 52,  199 => 51,  192 => 48,  190 => 47,  188 => 46,  184 => 45,  181 => 44,  173 => 43,  167 => 42,  164 => 41,  156 => 40,  150 => 39,  147 => 38,  137 => 37,  131 => 36,  126 => 33,  114 => 32,  108 => 31,  98 => 23,  93 => 22,  89 => 21,  86 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  58 => 10,  50 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "part/template/common/header.twig", "");
    }
}
