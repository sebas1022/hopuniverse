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

/* tt_aboss/template/extension/module/newslettersubscribe.twig */
class __TwigTemplate_82831134f98419f3384ed799089aa749bd452d11985f2be2e5e8b925da456048 extends \Twig\Template
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
        echo "<div class=\"newsletter-form\">
\t<form name=\"subscribe\" id=\"subscribe\" class=\"clearfix\">
\t\t<input type=\"text\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\" placeholder=\"";
        // line 3
        echo ($context["entry_email"] ?? null);
        echo "\">
\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t<a class=\"btn\" onclick=\"email_subscribe()\"><span>";
        // line 5
        echo ($context["entry_button"] ?? null);
        echo "</span></a>
\t\t";
        // line 6
        if (($context["option_unsubscribe"] ?? null)) {
            // line 7
            echo "\t\t<a class=\"btn\" onclick=\"email_unsubscribe()\"><span>";
            echo ($context["entry_unbutton"] ?? null);
            echo "</span></a>
\t\t";
        }
        // line 8
        echo "  
\t</form>
\t<div id=\"notification-normal\"></div>
\t<script type=\"text/javascript\">
\t\tfunction email_subscribe(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'post',
\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\t\t\tdataType: 'html',
\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\tsuccess: function (html) {
\t\t\t\t\ttry {
\t\t\t\t\t\teval(html);
\t\t\t\t\t} 
\t\t\t\t\tcatch (e) {
\t\t\t\t\t}\t\t\t\t
\t\t\t\t}});
\t\t};
\t\tfunction email_unsubscribe(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'post',
\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\tdataType: 'html',
\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\tsuccess: function (html) {
\t\t\t\t\ttry {

\t\t\t\t\t\teval(html);

\t\t\t\t\t} catch (e) {
\t\t\t\t\t}
\t\t\t\t}}); 
\t\t\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
\t\t};
\t</script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#subscribe_email').keypress(function(e) {
\t\t\t\tif(e.which == 13) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\temail_subscribe();
\t\t\t\t}
\t\t\t\tvar name= \$(this).val();
\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t});
\t\t\t\$('#subscribe_email').change(function() {
\t\t\t\tvar name= \$(this).val();
\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t});

\t\t});
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_aboss/template/extension/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  52 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss/template/extension/module/newslettersubscribe.twig", "");
    }
}
