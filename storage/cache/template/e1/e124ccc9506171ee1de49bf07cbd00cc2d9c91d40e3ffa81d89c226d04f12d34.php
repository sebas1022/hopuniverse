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

/* isotop/template/common/header.twig */
class __TwigTemplate_8985e9151adbec5c73fa1656dc1466d4da7b6280a52c659f0775f1949ae43d1e extends Template
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
<link href=\"catalog/view/theme/isotop/main.css\" rel=\"stylesheet\">
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 30
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
        // line 31
        echo " 
<script src=\"catalog/view/theme/isotop/main.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/isotop/lazyload/jquery.lazyload.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/isotop/isotope.js\" type=\"text/javascript\"></script>
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo " 
<link href=\"";
            // line 36
            echo (($__internal_compile_3 = $context["link"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["href"] ?? null) : null);
            echo "\" rel=\"";
            echo (($__internal_compile_4 = $context["link"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["rel"] ?? null) : null);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo " 
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " 
<script src=\"";
            // line 39
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo " 
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo " 
";
            // line 42
            echo $context["analytic"];
            echo " 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "   
</head>
<body>
<header>
<div class=\"container\">
<div class=\"header\">
<div class=\"logo\">
";
        // line 50
        if (($context["logo"] ?? null)) {
            // line 51
            if ((0 === twig_compare(($context["home"] ?? null), ($context["og_url"] ?? null)))) {
                // line 52
                echo "<img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" />
";
            } else {
                // line 54
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
            // line 57
            echo "<h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
";
        }
        // line 58
        echo "\t
</div>
<div class=\"right\">
";
        // line 61
        echo ($context["cart"] ?? null);
        echo "
";
        // line 62
        echo ($context["menu"] ?? null);
        echo "
</div>
</div>
</div>
</header>
<div id=\"left-block\">
";
        // line 68
        if ((0 !== twig_compare(($context["home"] ?? null), ($context["og_url"] ?? null)))) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i></a>";
        }
        // line 69
        echo "<button id=\"toTop\" title=\"Top\"><i class=\"fa fa-long-arrow-up\" aria-hidden=\"true\"></i></button>
<a href=\"/index.php?route=product/search\" ><i class=\"fa fa-search\"></i></a>
";
        // line 71
        echo ($context["currency"] ?? null);
        echo "
";
        // line 72
        echo ($context["language"] ?? null);
        echo "
</div>
<div id=\"right-block\">
<ul>
";
        // line 76
        if (($context["isotop_url"] ?? null)) {
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["isotop_url"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 78
                echo "<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "href", [], "any", false, false, false, 78);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 78);
                echo "</a></li> 
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 81
        echo "</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "isotop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 81,  269 => 78,  265 => 77,  263 => 76,  256 => 72,  252 => 71,  248 => 69,  242 => 68,  233 => 62,  229 => 61,  224 => 58,  216 => 57,  203 => 54,  193 => 52,  191 => 51,  189 => 50,  180 => 43,  172 => 42,  166 => 41,  163 => 40,  155 => 39,  149 => 38,  146 => 37,  136 => 36,  130 => 35,  124 => 31,  112 => 30,  106 => 29,  98 => 23,  93 => 22,  89 => 21,  86 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  58 => 10,  50 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "isotop/template/common/header.twig", "");
    }
}
