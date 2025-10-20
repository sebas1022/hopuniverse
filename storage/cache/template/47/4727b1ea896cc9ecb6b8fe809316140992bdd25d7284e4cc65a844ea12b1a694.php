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

/* tt_aboss/template/extension/module/newsletterpopup.twig */
class __TwigTemplate_71ad417616cf87256d4a103580bfced923489a52c71b748b1dfd802cceb1e0da extends \Twig\Template
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
        echo "<div class=\"newsletter-popup\">
\t<div class=\"newsletter-popup-inner\">
\t\t<div id=\"dialog\" class=\"window\">
\t\t\t<span class=\"b-close\">";
        // line 4
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"newsletter-title\">
\t\t\t\t\t<h2>";
        // line 7
        echo ($context["entry_title"] ?? null);
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-content newsletter-content\">
\t\t\t\t\t<label>";
        // line 10
        echo ($context["entry_description"] ?? null);
        echo "</label>
\t\t\t\t\t<div id=\"frm_subscribe\">
\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe_popup\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- <span class=\"required\">*</span><span>";
        // line 14
        echo ($context["entry_email"] ?? null);
        echo "</span>-->
\t\t\t\t\t\t\t\t<input type=\"text\" value=\"\" name=\"subscribe_pemail\" id=\"subscribe_pemail\" placeholder=\"";
        // line 15
        echo ($context["entry_email"] ?? null);
        echo "\"> 
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_pname\" id=\"subscribe_pname\" />
\t\t\t\t\t\t\t\t<div id=\"notification\"></div>
\t\t\t\t\t\t\t\t<a class=\"button\" onclick=\"email_subscribepopup()\"><span>";
        // line 18
        echo ($context["entry_button"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t";
        // line 19
        if (($context["option_unsubscribe"] ?? null)) {
            // line 20
            echo "\t\t\t\t\t\t\t\t<a class=\"button\" onclick=\"email_unsubscribepopup()\"><span>";
            echo ($context["entry_unbutton"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t\t";
        }
        // line 21
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"subscribe-bottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"newsletter_popup_dont_show_again\">
\t\t\t\t\t\t\t<label for=\"newsletter_popup_dont_show_again\">";
        // line 26
        echo ($context["entry_show_again"] ?? null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /#frm_subscribe -->
\t\t\t\t</div><!-- /.box-content -->
\t\t\t</div>
\t\t</div>\t
\t\t<script type=\"text/javascript\">
\t\t\tfunction email_subscribepopup(){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribepopup',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tdata:\$(\"#subscribe_popup\").serialize(),
\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t// \$.cookie('shownewsletter', '1');
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t} 
\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}); 
\t\t\t}
\t\t\tfunction email_unsubscribepopup(){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tdata:\$(\"#subscribe_popup\").serialize(),
\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t} 
\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}); 
\t\t\t\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
\t\t\t}
\t\t</script>
\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() {

\t\t\t\tif(\$.cookie('shownewsletter')==1) \$('.newsletter-popup').hide();
\t\t\t\t\$('#subscribe_pemail').keypress(function(e) {
\t\t\t\t\tif(e.which == 13) {
\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\temail_subscribepopup();
\t\t\t\t\t}
\t\t\t\t\tvar name= \$(this).val();
\t\t\t\t\t\$('#subscribe_pname').val(name);
\t\t\t\t});
\t\t\t\t\$('#subscribe_pemail').change(function() {
\t\t\t\t\tvar name= \$(this).val();
\t\t\t\t\t\$('#subscribe_pname').val(name);
\t\t\t\t});
\t\t\t\t//transition effect
\t\t\t\tif(\$.cookie(\"shownewsletter\") != 1){
\t\t\t\t\t\$('.newsletter-popup').bPopup();
\t\t\t\t}
\t\t\t\t\$('#newsletter_popup_dont_show_again').on('change', function(){
\t\t\t\t\tif(\$.cookie(\"shownewsletter\") != 1){   
\t\t\t\t\t\t\$.cookie(\"shownewsletter\",'1')
\t\t\t\t\t}else{
\t\t\t\t\t\t\$.cookie(\"shownewsletter\",'0')
\t\t\t\t\t}
\t\t\t\t}); 
\t\t\t});
\t\t</script>
\t</div><!-- /.newsletter-container -->
</div>";
    }

    public function getTemplateName()
    {
        return "tt_aboss/template/extension/module/newsletterpopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  83 => 21,  77 => 20,  75 => 19,  71 => 18,  65 => 15,  61 => 14,  54 => 10,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss/template/extension/module/newsletterpopup.twig", "");
    }
}
