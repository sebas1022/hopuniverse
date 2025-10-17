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

/* tt_aboss2/template/common/search.twig */
class __TwigTemplate_a6a05cd5f68b8a050a9f7409592ab56b9770532d063aa5da37a9f79fe16be133 extends \Twig\Template
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
        echo "<div class=\"search-container\">
\t<div class=\"search-icon dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
\t<div class=\"search-content dropdown-menu\">
\t\t<div id=\"search\">
\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 5
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
\t\t\t<button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/common/search.twig", "");
    }
}
