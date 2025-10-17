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

/* part/template/extension/module/carousel.twig */
class __TwigTemplate_650e849d0a7d8c00d0a465dc3fde37ae5041cc42ea7d12c1ebf7383d2da5aa62 extends Template
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
        echo "</div>
</div>
</div>
<div class=\"carusel-main carusel";
        // line 4
        echo ($context["module"] ?? null);
        echo "\">
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "<div class=\"carusel-main-item\" style=\"background-image:url(";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6);
            echo ")\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>
<div class=\"container\">
<div class=\"row\">
<div id=\"content\" class=\"col-sm-12\">

<script type=\"text/javascript\">
<!--
   \$('.carusel";
        // line 15
        echo ($context["module"] ?? null);
        echo "').slick({
     dots: false,
\t arrows: false,
     infinite: true,
\t slidesToShow: 6,
\t      slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 5000,
    responsive: [
\t{
      breakpoint: 991,
      settings: {
        slidesToShow: 5
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3
      }
    }

  ]

   });
   -->
</script>
<style>
.carusel-main {
width: 100%;
padding: 0;
margin: 0 0 50px 0;
}
.slide {
width: 100%;
margin: auto;
}
.carusel-main-item {
min-height: 100px;
background-position: center;
background-repeat: no-repeat;
background-size: contain;
padding: 0;
margin: 0;
}
#content  {
\tmin-height: 1px;
}
@media (max-width: 768px) {
.carusel-main-item {
min-height: 80px;
}
}
</style>
";
    }

    public function getTemplateName()
    {
        return "part/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  59 => 8,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "part/template/extension/module/carousel.twig", "");
    }
}
