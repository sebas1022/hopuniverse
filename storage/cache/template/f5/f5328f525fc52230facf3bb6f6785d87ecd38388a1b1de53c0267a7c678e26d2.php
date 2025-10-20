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

/* tt_aboss2/template/extension/module/html.twig */
class __TwigTemplate_91e5e456c2163c21ae26f43a3119f2c778f5bd87494d06c9e5ce679ff92407cc extends \Twig\Template
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
        if (($context["heading_title"] ?? null)) {
            // line 2
            echo "  \t<h3 class=\"module-title module-html-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h2>
";
        }
        // line 4
        echo ($context["html"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/extension/module/html.twig", "");
    }
}
