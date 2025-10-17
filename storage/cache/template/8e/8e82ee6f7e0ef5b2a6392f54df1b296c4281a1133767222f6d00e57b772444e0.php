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

/* tt_aboss2/template/common/footer.twig */
class __TwigTemplate_766c5fd9fcf12f3c7014b30bbce2be27a6ebbe061d898bcaaae73e66fa6bea62 extends \Twig\Template
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
        echo "    <div class=\"bottom-content\">
        ";
        // line 2
        if (($context["block6"] ?? null)) {
            // line 3
            echo "        ";
            echo ($context["block6"] ?? null);
            echo "
        ";
        }
        // line 5
        echo "    </div>
    <footer>
        <div class=\"container\">
            ";
        // line 8
        if (($context["block7"] ?? null)) {
            // line 9
            echo "            ";
            echo ($context["block7"] ?? null);
            echo "
            ";
        }
        // line 11
        echo "        </div>
    </footer>
    <div id=\"back-top\">";
        // line 13
        echo ($context["text_backtop"] ?? null);
        echo "</div>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
    // hide #back-top first
    \$(\"#back-top\").hide();
    // fade in #back-top
    \$(function () {
        \$(window).scroll(function () {
            if (\$(this).scrollTop() > (\$('header').height()+\$('header').offset().top)) {
                \$('#back-top').fadeIn();
            } else {
                \$('#back-top').fadeOut();
            }
        });
    // scroll body to 0px on click
    \$('#back-top').click(function () {
        \$('body,html').animate({scrollTop: 0}, 800);
        return false;
    });
    });
    });
    </script>
    <!--
    OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
    Please donate via PayPal to donate@opencart.com
    //-->
    </div><!-- wrapper -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  61 => 11,  55 => 9,  53 => 8,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/common/footer.twig", "");
    }
}
