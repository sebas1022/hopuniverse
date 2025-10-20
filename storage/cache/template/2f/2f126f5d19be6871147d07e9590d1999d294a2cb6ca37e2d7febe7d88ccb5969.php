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

/* tt_aboss/template/common/footer.twig */
class __TwigTemplate_b7193501d47628e1cfad91dc540d1af97bb5311d973c53c35eaf82935fad1b7f extends \Twig\Template
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
            <div class=\"row\">
                ";
        // line 9
        if (($context["block7"] ?? null)) {
            // line 10
            echo "                <div class=\"footer-column col-sm-12 col-md-4\">
                    ";
            // line 11
            echo ($context["block7"] ?? null);
            echo "
                </div>
                ";
        }
        // line 14
        echo "
                ";
        // line 15
        if (($context["block8"] ?? null)) {
            // line 16
            echo "                <div class=\"footer-column col-sm-12 col-md-2\">
                    ";
            // line 17
            echo ($context["block8"] ?? null);
            echo "
                </div>
                ";
        }
        // line 20
        echo "
                ";
        // line 21
        if (($context["block9"] ?? null)) {
            // line 22
            echo "                <div class=\"footer-column col-sm-12 col-md-2\">
                    ";
            // line 23
            echo ($context["block9"] ?? null);
            echo "
                </div>
                ";
        }
        // line 26
        echo "
                ";
        // line 27
        if (($context["block10"] ?? null)) {
            // line 28
            echo "                <div class=\"footer-column col-sm-12 col-md-4\">
                    ";
            // line 29
            echo ($context["block10"] ?? null);
            echo "
                </div>
                ";
        }
        // line 32
        echo "            </div>
        </div>
    </footer>
    <div id=\"back-top\">";
        // line 35
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
        return "tt_aboss/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  107 => 32,  101 => 29,  98 => 28,  96 => 27,  93 => 26,  87 => 23,  84 => 22,  82 => 21,  79 => 20,  73 => 17,  70 => 16,  68 => 15,  65 => 14,  59 => 11,  56 => 10,  54 => 9,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss/template/common/footer.twig", "");
    }
}
