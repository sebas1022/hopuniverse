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

/* isotop/template/common/cart.twig */
class __TwigTemplate_6522461a8f4bd3c35767e71f5424c6c537962344a2c261eb06d489d9c92b3dd4 extends Template
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
        echo "<div id=\"cart\"><a href=\"";
        echo ($context["cart"] ?? null);
        echo "\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo " ( <span id=\"cart-total\">";
        echo ($context["text_items"] ?? null);
        echo "</span> )</a></div>
";
    }

    public function getTemplateName()
    {
        return "isotop/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "isotop/template/common/cart.twig", "");
    }
}
