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

/* tt_aboss2/template/common/header.twig */
class __TwigTemplate_d339bd55da03f8a0a9a30d67321947c2ca73cc70739ceac7244b4150d1d25240 extends \Twig\Template
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
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
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
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
    <base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 17
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 20
        echo "    <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>

    <script src=\"catalog/view/javascript/jquery/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <script src=\"catalog/view/javascript/opentheme/ocquickview/ocquickview.js\" type=\"text/javascript\"></script>
    <link href=\"catalog/view/theme/tt_aboss2/stylesheet/opentheme/ocquickview/css/ocquickview.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js\" type=\"text/javascript\"></script>
    <link href=\"catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css\" rel=\"stylesheet\" />
    <link href=\"catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css\" rel=\"stylesheet\" />
    <script src=\"catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js\" type=\"text/javascript\"></script>
    <script src=\"catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js\" type=\"text/javascript\"></script>
    <script src=\"catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js\" type=\"text/javascript\"></script>
    <script src=\"catalog/view/javascript/opentheme/hozmegamenu/custommenu.js\" type=\"text/javascript\"></script>
    <script src=\"catalog/view/javascript/opentheme/hozmegamenu/mobile_menu.js\" type=\"text/javascript\"></script>
    <link href=\"catalog/view/theme/tt_aboss2/stylesheet/opentheme/countdown/jquery.countdown.css\" rel=\"stylesheet\" />
    <link href=\"catalog/view/theme/tt_aboss2/stylesheet/opentheme/hozmegamenu/css/custommenu.css\" rel=\"stylesheet\" />
    <link href=\"catalog/view/theme/tt_aboss2/stylesheet/opentheme/css/animate.css\" rel=\"stylesheet\" />
    <link href=\"catalog/view/theme/tt_aboss2/stylesheet/opentheme/layoutproducts/layoutproducts.css\" rel=\"stylesheet\" />

    <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
    <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"catalog/view/javascript/Stroke-Gap-Icons-Webfont/style.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"catalog/view/javascript/ionicons/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:200,500,600,700\" rel=\"stylesheet\">
    <link href=\"catalog/view/theme/tt_aboss2/stylesheet/stylesheet.css\" rel=\"stylesheet\">
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 48
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 48);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 48);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 48);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 51
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 55
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 55);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 55);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 58
            echo "    ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    ";
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["theme_option_status"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["store_id"] ?? null)] ?? null) : null)) {
            // line 61
            echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js\"></script>
    <script>
        WebFont.load({
            google: {
                ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["header_tag"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 65) == twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["header_tag"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 65))) {
                // line 66
                echo "                families: ['";
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["header_tag"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 66)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["header_tag"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 66)) : (""));
                echo "']
                ";
            } else {
                // line 68
                echo "                families: ['";
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["header_tag"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 68)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["header_tag"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 68)) : (""));
                echo "', '";
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["body_css"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 68)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["body_css"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 68)) : (""));
                echo "']
                ";
            }
            // line 70
            echo "            }
        });
    </script>
    <style>
    ";
            // line 74
            if (($context["a_tag"] ?? null)) {
                // line 75
                echo "    ";
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["a_tag"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["store_id"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 75)) ? ((("a { color: #" . twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["a_tag"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["store_id"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 75)) . "; }")) : (""));
                echo "
    ";
                // line 76
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["a_tag"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["store_id"] ?? null)] ?? null) : null), "hover_color", [], "any", false, false, false, 76)) ? ((("a:hover { color: #" . twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["a_tag"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["store_id"] ?? null)] ?? null) : null), "hover_color", [], "any", false, false, false, 76)) . "; }")) : (""));
                echo "
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (($context["header_tag"] ?? null)) {
                // line 80
                echo "    h1, h2, h3, h4, h5, h6 {
        ";
                // line 81
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["header_tag"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["store_id"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 81)) ? ((("color: #" . twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["header_tag"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["store_id"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 81)) . ";")) : (""));
                echo "
        ";
                // line 82
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["header_tag"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 82)) ? ((("font-family: " . twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["header_tag"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 82)) . ";")) : (""));
                echo "
        ";
                // line 83
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["header_tag"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["store_id"] ?? null)] ?? null) : null), "font_weight", [], "any", false, false, false, 83)) ? ((("font-weight: " . twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["header_tag"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["store_id"] ?? null)] ?? null) : null), "font_weight", [], "any", false, false, false, 83)) . ";")) : (""));
                echo "
    }
    ";
                // line 85
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["header_tag"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["store_id"] ?? null)] ?? null) : null), "h1", [], "any", false, false, false, 85), "font_size", [], "any", false, false, false, 85)) ? ((("h1 { font-size: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["header_tag"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["store_id"] ?? null)] ?? null) : null), "h1", [], "any", false, false, false, 85), "font_size", [], "any", false, false, false, 85)) . "; }")) : (""));
                echo "
    ";
                // line 86
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["header_tag"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["store_id"] ?? null)] ?? null) : null), "h2", [], "any", false, false, false, 86), "font_size", [], "any", false, false, false, 86)) ? ((("h2 { font-size: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["header_tag"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["store_id"] ?? null)] ?? null) : null), "h2", [], "any", false, false, false, 86), "font_size", [], "any", false, false, false, 86)) . "; }")) : (""));
                echo "
    ";
                // line 87
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["header_tag"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["store_id"] ?? null)] ?? null) : null), "h3", [], "any", false, false, false, 87), "font_size", [], "any", false, false, false, 87)) ? ((("h3 { font-size: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["header_tag"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["store_id"] ?? null)] ?? null) : null), "h3", [], "any", false, false, false, 87), "font_size", [], "any", false, false, false, 87)) . "; }")) : (""));
                echo "
    ";
                // line 88
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["header_tag"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["store_id"] ?? null)] ?? null) : null), "h4", [], "any", false, false, false, 88), "font_size", [], "any", false, false, false, 88)) ? ((("h4 { font-size: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["header_tag"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["store_id"] ?? null)] ?? null) : null), "h4", [], "any", false, false, false, 88), "font_size", [], "any", false, false, false, 88)) . "; }")) : (""));
                echo "
    ";
                // line 89
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["header_tag"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["store_id"] ?? null)] ?? null) : null), "h5", [], "any", false, false, false, 89), "font_size", [], "any", false, false, false, 89)) ? ((("h5 { font-size: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["header_tag"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[($context["store_id"] ?? null)] ?? null) : null), "h5", [], "any", false, false, false, 89), "font_size", [], "any", false, false, false, 89)) . "; }")) : (""));
                echo "
    ";
                // line 90
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["header_tag"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["store_id"] ?? null)] ?? null) : null), "h6", [], "any", false, false, false, 90), "font_size", [], "any", false, false, false, 90)) ? ((("h6 { font-size: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["header_tag"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["store_id"] ?? null)] ?? null) : null), "h6", [], "any", false, false, false, 90), "font_size", [], "any", false, false, false, 90)) . "; }")) : (""));
                echo "
    ";
            }
            // line 92
            echo "
    ";
            // line 93
            if (($context["body_css"] ?? null)) {
                // line 94
                echo "    body {
        ";
                // line 95
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["body_css"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[($context["store_id"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 95)) ? ((("color: #" . twig_get_attribute($this->env, $this->source, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["body_css"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[($context["store_id"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 95)) . ";")) : (""));
                echo "
        ";
                // line 96
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["body_css"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 96)) ? ((("font-family: " . twig_get_attribute($this->env, $this->source, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["body_css"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[($context["store_id"] ?? null)] ?? null) : null), "font_family", [], "any", false, false, false, 96)) . ";")) : (""));
                echo "
        ";
                // line 97
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["body_css"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[($context["store_id"] ?? null)] ?? null) : null), "font_size", [], "any", false, false, false, 97)) ? ((("font-size: " . twig_get_attribute($this->env, $this->source, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["body_css"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[($context["store_id"] ?? null)] ?? null) : null), "font_size", [], "any", false, false, false, 97)) . ";")) : (""));
                echo "
        ";
                // line 98
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["body_css"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[($context["store_id"] ?? null)] ?? null) : null), "font_weight", [], "any", false, false, false, 98)) ? ((("font-weight: " . twig_get_attribute($this->env, $this->source, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["body_css"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[($context["store_id"] ?? null)] ?? null) : null), "font_weight", [], "any", false, false, false, 98)) . ";")) : (""));
                echo "
        ";
                // line 99
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["body_css"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[($context["store_id"] ?? null)] ?? null) : null), "line_height", [], "any", false, false, false, 99)) ? ((("line-height: " . twig_get_attribute($this->env, $this->source, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["body_css"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[($context["store_id"] ?? null)] ?? null) : null), "line_height", [], "any", false, false, false, 99)) . ";")) : (""));
                echo "
    }
    ";
            }
            // line 102
            echo "</style>
";
        }
        // line 104
        echo "</head>
<body class=\"";
        // line 105
        echo ($context["class"] ?? null);
        echo " home1 group1\">
    <div class=\"wrapper\">
        <header>
            <div class=\"container-fix\">
                <div class=\"header-main\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-5 megamenu-container\">
                                ";
        // line 113
        if (($context["block1"] ?? null)) {
            // line 114
            echo "                                ";
            echo ($context["block1"] ?? null);
            echo "
                                ";
        }
        // line 116
        echo "                            </div>
                            <div class=\"col-sm-12 col-md-2\">
                                <div id=\"logo\">
                                    ";
        // line 119
        if (($context["logo"] ?? null)) {
            // line 120
            echo "                                    <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
                                    ";
        } else {
            // line 122
            echo "                                    <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
                                    ";
        }
        // line 124
        echo "                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md-5\">
                                <div class=\"header-main-right\">
                                    <div class=\"header-icon\">
                                        <div class=\"header-search\">
                                            ";
        // line 130
        echo ($context["search"] ?? null);
        echo "
                                        </div>
                                        <!-- end search  -->
                                        <div class=\"header-setting\">
                                            <div class=\"header-setting-icon dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
                                            <div class=\"setting-dropdown dropdown-menu\">
                                                <ul class=\"language-currency\">
                                                    ";
        // line 137
        echo ($context["language"] ?? null);
        echo "
                                                    ";
        // line 138
        echo ($context["currency"] ?? null);
        echo "
                                                </ul>
                                                <div class=\"setting-dropdown-links\">
                                                    <h3 class=\"setting-dropdown-title\">My Account</h3>
                                                    <ul>
                                                        ";
        // line 143
        if (($context["logged"] ?? null)) {
            // line 144
            echo "                                                        <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 145
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 146
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 147
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 148
            echo ($context["wishlist"] ?? null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo ($context["text_wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
                                                        <li>
                                                            ";
            // line 150
            if (($context["use_ajax_login"] ?? null)) {
                // line 151
                echo "                                                            <a id=\"a-logout-link\" href=\"";
                echo ($context["logout"] ?? null);
                echo "\">";
                echo ($context["text_logout"] ?? null);
                echo "</a>
                                                            ";
            } else {
                // line 153
                echo "                                                            <a href=\"";
                echo ($context["logout"] ?? null);
                echo "\">";
                echo ($context["text_logout"] ?? null);
                echo "</a>
                                                            ";
            }
            // line 155
            echo "                                                        </li>     
                                                        ";
        } else {
            // line 157
            echo "                                                        <li>
                                                            ";
            // line 158
            if (($context["use_ajax_login"] ?? null)) {
                // line 159
                echo "                                                            <a id=\"a-register-link\" href=\"";
                echo ($context["register"] ?? null);
                echo "\">";
                echo ($context["text_register"] ?? null);
                echo "</a>
                                                            ";
            } else {
                // line 161
                echo "                                                            <a href=\"";
                echo ($context["register"] ?? null);
                echo "\">";
                echo ($context["text_register"] ?? null);
                echo "</a> 
                                                            ";
            }
            // line 163
            echo "                                                        </li>
                                                        <li>
                                                            ";
            // line 165
            if (($context["use_ajax_login"] ?? null)) {
                // line 166
                echo "                                                            <a id=\"a-login-link\" href=\"";
                echo ($context["login"] ?? null);
                echo "\">";
                echo ($context["text_login"] ?? null);
                echo "</a>
                                                            ";
            } else {
                // line 168
                echo "                                                            <a href=\"";
                echo ($context["login"] ?? null);
                echo "\">";
                echo ($context["text_login"] ?? null);
                echo "</a> 
                                                            ";
            }
            // line 170
            echo "                                                        </li>
                                                        ";
        }
        // line 172
        echo "                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end header-setting -->
                                        <div class=\"header-cart\">
                                            ";
        // line 178
        echo ($context["cart"] ?? null);
        echo "
                                        </div>
                                        <!-- end header cart -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header-main -->
            </div>
        </header>";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 178,  489 => 172,  485 => 170,  477 => 168,  469 => 166,  467 => 165,  463 => 163,  455 => 161,  447 => 159,  445 => 158,  442 => 157,  438 => 155,  430 => 153,  422 => 151,  420 => 150,  411 => 148,  405 => 147,  399 => 146,  393 => 145,  386 => 144,  384 => 143,  376 => 138,  372 => 137,  362 => 130,  354 => 124,  346 => 122,  334 => 120,  332 => 119,  327 => 116,  321 => 114,  319 => 113,  308 => 105,  305 => 104,  301 => 102,  295 => 99,  291 => 98,  287 => 97,  283 => 96,  279 => 95,  276 => 94,  274 => 93,  271 => 92,  266 => 90,  262 => 89,  258 => 88,  254 => 87,  250 => 86,  246 => 85,  241 => 83,  237 => 82,  233 => 81,  230 => 80,  228 => 79,  225 => 78,  220 => 76,  215 => 75,  213 => 74,  207 => 70,  199 => 68,  193 => 66,  191 => 65,  185 => 61,  182 => 60,  173 => 58,  168 => 57,  157 => 55,  153 => 54,  150 => 53,  141 => 51,  136 => 50,  123 => 48,  119 => 47,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/common/header.twig", "");
    }
}
