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

/* design/layout_plaza_form.twig */
class __TwigTemplate_224db25f467b566c99550e37d29475acccf9079112e65850b3e6c856a5a09eff extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 34
        if (($context["error_name"] ?? null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                <tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 52
            echo ($context["text_default"] ?? null);
            echo "</option>
                      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 54) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 54))) {
                    // line 55
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 55);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 55);
                    echo "</option>
                      ";
                } else {
                    // line 57
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 57);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 57);
                    echo "</option>
                      ";
                }
                // line 59
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 61);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 64
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        echo ($context["text_module"] ?? null);
        echo "</legend>
            ";
        // line 77
        $context["module_row"] = 0;
        // line 78
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 83
        echo ($context["text_column_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 88
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 88) == "column_left")) {
                // line 89
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 91
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 93
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 93);
                    echo "\">
                            ";
                    // line 94
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 95) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 95))) {
                            // line 96
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 96);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 96);
                            echo "</option>
                            ";
                        } else {
                            // line 98
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 98);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 98);
                            echo "</option>
                            ";
                        }
                        // line 100
                        echo "                            ";
                    } else {
                        // line 101
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 101));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 102
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 102) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 102))) {
                                // line 103
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 103);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 103);
                                echo "</option>
                            ";
                            } else {
                                // line 105
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 105);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 105);
                                echo "</option>
                            ";
                            }
                            // line 107
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "                            ";
                    }
                    // line 109
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 112
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 112);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 113
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 113);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 114);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 115
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 119
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 120
                echo "                    ";
            }
            // line 121
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 129
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 129);
            echo "\">
                            ";
            // line 130
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 130)) {
                // line 131
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 131);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 131);
                echo "</option>
                            ";
            } else {
                // line 133
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 133));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 134
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 134);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 134);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                            ";
            }
            // line 137
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 141
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
        \t\t\t\t<table id=\"module-block1\" class=\"table table-striped table-bordered table-hover\">
                \t<thead>
                \t\t<tr>
                \t\t\t<td class=\"text-center\">";
        // line 152
        echo ($context["text_block1"] ?? null);
        echo "</td>
                \t\t</tr>
                \t</thead>
                \t<tbody>
                \t\t";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 157
            echo "                \t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 157) == "block1")) {
                // line 158
                echo "                \t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                \t\t\t\t<td class=\"text-left\">
                \t\t\t\t\t<div class=\"input-group\">
                \t\t\t\t\t\t<select name=\"layout_module[";
                // line 161
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                \t\t\t\t\t\t\t\t\t";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 163
                    echo "                \t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 163);
                    echo "\">
                \t\t\t\t\t\t\t\t\t";
                    // line 164
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 164)) {
                        // line 165
                        echo "                \t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 165) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 165))) {
                            // line 166
                            echo "                \t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 166);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 166);
                            echo "</option>
                \t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 168
                            echo "                \t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 168);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 168);
                            echo "</option>
                \t\t\t\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "                \t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 171
                        echo "                \t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 171));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 172
                            echo "                \t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 172) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 172))) {
                                // line 173
                                echo "                \t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 173);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 173);
                                echo "</option>
                \t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 175
                                echo "                \t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 175);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 175);
                                echo "</option>
                \t\t\t\t\t\t\t\t\t";
                            }
                            // line 177
                            echo "                \t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 178
                        echo "                \t\t\t\t\t\t\t\t\t";
                    }
                    // line 179
                    echo "                \t\t\t\t\t\t</optgroup>
                \t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "                \t\t\t\t\t\t</select>
                \t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 182
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 182);
                echo "\" />
                \t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 183
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 183);
                echo "\" />
                \t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 184);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                \t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 185
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                \t\t\t\t\t\t</div>
                \t\t\t\t\t</div>
                \t\t\t\t</td>
                \t\t\t</tr>
                \t\t";
                // line 190
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 191
                echo "                \t\t";
            }
            // line 192
            echo "                \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                \t</tbody>
                \t<tfoot>
                \t\t<tr>
                \t\t\t<td class=\"text-left\">
                \t\t\t\t<div class=\"input-group\">
                \t\t\t\t\t<select class=\"form-control input-sm\">
                \t\t\t\t\t<option value=\"\"></option>
                \t\t\t\t\t\t\t\t";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 201
            echo "                \t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 201);
            echo "\">
                \t\t\t\t\t\t\t\t";
            // line 202
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 202)) {
                // line 203
                echo "                \t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 203);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 203);
                echo "</option>
                \t\t\t\t\t\t\t\t";
            } else {
                // line 205
                echo "                \t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 205));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 206
                    echo "                \t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 206);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 206);
                    echo "</option>
                \t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "                \t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "                \t\t\t\t\t</optgroup>
                \t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                \t\t\t\t\t</select>
                \t\t\t\t\t<div class=\"input-group-btn\">
                \t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block1');\" data-toggle=\"tooltip\" title=\"";
        // line 213
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</td>
                \t\t</tr>
                \t</tfoot>
                </table>
                <table id=\"module-block2\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 223
        echo ($context["text_block2"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 228
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 228) == "block2")) {
                // line 229
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 232
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 233
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 234
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 234);
                    echo "\">
                                  ";
                    // line 235
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 235)) {
                        // line 236
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 236) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 236))) {
                            // line 237
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 237);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 237);
                            echo "</option>
                                  ";
                        } else {
                            // line 239
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 239);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 239);
                            echo "</option>
                                  ";
                        }
                        // line 241
                        echo "                                  ";
                    } else {
                        // line 242
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 242));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 243
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 243) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 243))) {
                                // line 244
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 244);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 244);
                                echo "</option>
                                  ";
                            } else {
                                // line 246
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 246);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 246);
                                echo "</option>
                                  ";
                            }
                            // line 248
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 249
                        echo "                                  ";
                    }
                    // line 250
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 252
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 253
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 253);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 254
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 254);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 255);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 256
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 261
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 262
                echo "                    ";
            }
            // line 263
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 272
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 272);
            echo "\">
                                ";
            // line 273
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 273)) {
                // line 274
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 274);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 274);
                echo "</option>
                                ";
            } else {
                // line 276
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 276));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 277
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 277);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 277);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 279
                echo "                                ";
            }
            // line 280
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block2');\" data-toggle=\"tooltip\" title=\"";
        // line 284
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-block3\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 294
        echo ($context["text_block3"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 299
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 299) == "block3")) {
                // line 300
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 303
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 304
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 305
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 305);
                    echo "\">
                                  ";
                    // line 306
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 306)) {
                        // line 307
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 307) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 307))) {
                            // line 308
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 308);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 308);
                            echo "</option>
                                  ";
                        } else {
                            // line 310
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 310);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 310);
                            echo "</option>
                                  ";
                        }
                        // line 312
                        echo "                                  ";
                    } else {
                        // line 313
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 313));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 314
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 314) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 314))) {
                                // line 315
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 315);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 315);
                                echo "</option>
                                  ";
                            } else {
                                // line 317
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 317);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 317);
                                echo "</option>
                                  ";
                            }
                            // line 319
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 320
                        echo "                                  ";
                    }
                    // line 321
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 324
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 324);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 325
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 325);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 326
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 326);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 327
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 332
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 333
                echo "                    ";
            }
            // line 334
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 343
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 343);
            echo "\">
                                ";
            // line 344
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 344)) {
                // line 345
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 345);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 345);
                echo "</option>
                                ";
            } else {
                // line 347
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 347));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 348
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 348);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 348);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 350
                echo "                                ";
            }
            // line 351
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block3');\" data-toggle=\"tooltip\" title=\"";
        // line 355
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-block4\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 365
        echo ($context["text_block4"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 369
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 370
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 370) == "block4")) {
                // line 371
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 374
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 375
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 376
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 376);
                    echo "\">
                                  ";
                    // line 377
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 377)) {
                        // line 378
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 378) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 378))) {
                            // line 379
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 379);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 379);
                            echo "</option>
                                  ";
                        } else {
                            // line 381
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 381);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 381);
                            echo "</option>
                                  ";
                        }
                        // line 383
                        echo "                                  ";
                    } else {
                        // line 384
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 384));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 385
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 385) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 385))) {
                                // line 386
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 386);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 386);
                                echo "</option>
                                  ";
                            } else {
                                // line 388
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 388);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 388);
                                echo "</option>
                                  ";
                            }
                            // line 390
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 391
                        echo "                                  ";
                    }
                    // line 392
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 394
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 395
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 395);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 396
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 396);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 397
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 397);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 398
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 403
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 404
                echo "                    ";
            }
            // line 405
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 414
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 414);
            echo "\">
                                ";
            // line 415
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 415)) {
                // line 416
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 416);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 416);
                echo "</option>
                                ";
            } else {
                // line 418
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 418));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 419
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 419);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 419);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 421
                echo "                                ";
            }
            // line 422
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block4');\" data-toggle=\"tooltip\" title=\"";
        // line 426
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-block5\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 436
        echo ($context["text_block5"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 440
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 441
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 441) == "block5")) {
                // line 442
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 445
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 446
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 447
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 447);
                    echo "\">
                                  ";
                    // line 448
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 448)) {
                        // line 449
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 449) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 449))) {
                            // line 450
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 450);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 450);
                            echo "</option>
                                  ";
                        } else {
                            // line 452
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 452);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 452);
                            echo "</option>
                                  ";
                        }
                        // line 454
                        echo "                                  ";
                    } else {
                        // line 455
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 455));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 456
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 456) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 456))) {
                                // line 457
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 457);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 457);
                                echo "</option>
                                  ";
                            } else {
                                // line 459
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 459);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 459);
                                echo "</option>
                                  ";
                            }
                            // line 461
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 462
                        echo "                                  ";
                    }
                    // line 463
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 465
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 466
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 466);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 467
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 467);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 468
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 468);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 469
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 474
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 475
                echo "                    ";
            }
            // line 476
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 485
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 485);
            echo "\">
                                ";
            // line 486
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 486)) {
                // line 487
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 487);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 487);
                echo "</option>
                                ";
            } else {
                // line 489
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 489));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 490
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 490);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 490);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 492
                echo "                                ";
            }
            // line 493
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 495
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block5');\" data-toggle=\"tooltip\" title=\"";
        // line 497
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 507
        echo ($context["text_content_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 511
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 512
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 512) == "content_top")) {
                // line 513
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 515
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 516
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 517
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 517);
                    echo "\">
                            ";
                    // line 518
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 518)) {
                        // line 519
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 519) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 519))) {
                            // line 520
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 520);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 520);
                            echo "</option>
                            ";
                        } else {
                            // line 522
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 522);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 522);
                            echo "</option>
                            ";
                        }
                        // line 524
                        echo "                            ";
                    } else {
                        // line 525
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 525));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 526
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 526) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 526))) {
                                // line 527
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 527);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 527);
                                echo "</option>
                            ";
                            } else {
                                // line 529
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 529);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 529);
                                echo "</option>
                            ";
                            }
                            // line 531
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 532
                        echo "                            ";
                    }
                    // line 533
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 535
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 536
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 536);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 537
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 537);
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 538
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 538);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 539
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 543
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 544
                echo "                    ";
            }
            // line 545
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 546
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 552
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 553
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 553);
            echo "\">
                            ";
            // line 554
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 554)) {
                // line 555
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 555);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 555);
                echo "</option>
                            ";
            } else {
                // line 557
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 557));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 558
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 558);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 558);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 560
                echo "                            ";
            }
            // line 561
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 563
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 565
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 574
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 579
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 579) == "content_bottom")) {
                // line 580
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 582
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 583
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 584
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 584);
                    echo "\">
                            ";
                    // line 585
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 585)) {
                        // line 586
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 586) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 586))) {
                            // line 587
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 587);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 587);
                            echo "</option>
                            ";
                        } else {
                            // line 589
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 589);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 589);
                            echo "</option>
                            ";
                        }
                        // line 591
                        echo "                            ";
                    } else {
                        // line 592
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 592));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 593
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 593) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 593))) {
                                // line 594
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 594);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 594);
                                echo "</option>
                            ";
                            } else {
                                // line 596
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 596);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 596);
                                echo "</option>
                            ";
                            }
                            // line 598
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 599
                        echo "                            ";
                    }
                    // line 600
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 602
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 603
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 603);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 604
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 604);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 605
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 605);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 606
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 610
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 611
                echo "                    ";
            }
            // line 612
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 613
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 620
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 620);
            echo "\">
                            ";
            // line 621
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 621)) {
                // line 622
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 622);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 622);
                echo "</option>
                            ";
            } else {
                // line 624
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 624));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 625
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 625);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 625);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 627
                echo "                            ";
            }
            // line 628
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 630
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 632
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-block6\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 641
        echo ($context["text_block6"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 646
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 646) == "block6")) {
                // line 647
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 650
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 651
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 652
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 652);
                    echo "\">
                                  ";
                    // line 653
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 653)) {
                        // line 654
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 654) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 654))) {
                            // line 655
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 655);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 655);
                            echo "</option>
                                  ";
                        } else {
                            // line 657
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 657);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 657);
                            echo "</option>
                                  ";
                        }
                        // line 659
                        echo "                                  ";
                    } else {
                        // line 660
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 660));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 661
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 661) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 661))) {
                                // line 662
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 662);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 662);
                                echo "</option>
                                  ";
                            } else {
                                // line 664
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 664);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 664);
                                echo "</option>
                                  ";
                            }
                            // line 666
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 667
                        echo "                                  ";
                    }
                    // line 668
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 670
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 671
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 671);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 672
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 672);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 673
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 673);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 674
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 679
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 680
                echo "                    ";
            }
            // line 681
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 682
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 689
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 690
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 690);
            echo "\">
                                ";
            // line 691
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 691)) {
                // line 692
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 692);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 692);
                echo "</option>
                                ";
            } else {
                // line 694
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 694));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 695
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 695);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 695);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 697
                echo "                                ";
            }
            // line 698
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 700
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block6');\" data-toggle=\"tooltip\" title=\"";
        // line 702
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-block7\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 712
        echo ($context["text_block7"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 716
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 717
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 717) == "block7")) {
                // line 718
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 721
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 722
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 723
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 723);
                    echo "\">
                                  ";
                    // line 724
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 724)) {
                        // line 725
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 725) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 725))) {
                            // line 726
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 726);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 726);
                            echo "</option>
                                  ";
                        } else {
                            // line 728
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 728);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 728);
                            echo "</option>
                                  ";
                        }
                        // line 730
                        echo "                                  ";
                    } else {
                        // line 731
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 731));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 732
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 732) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 732))) {
                                // line 733
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 733);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 733);
                                echo "</option>
                                  ";
                            } else {
                                // line 735
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 735);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 735);
                                echo "</option>
                                  ";
                            }
                            // line 737
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 738
                        echo "                                  ";
                    }
                    // line 739
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 741
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 742
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 742);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 743
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 743);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 744
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 744);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 745
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 750
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 751
                echo "                    ";
            }
            // line 752
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 760
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 761
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 761);
            echo "\">
                                ";
            // line 762
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 762)) {
                // line 763
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 763);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 763);
                echo "</option>
                                ";
            } else {
                // line 765
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 765));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 766
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 766);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 766);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 768
                echo "                                ";
            }
            // line 769
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 771
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block7');\" data-toggle=\"tooltip\" title=\"";
        // line 773
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-block8\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 783
        echo ($context["text_block8"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 788
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 788) == "block8")) {
                // line 789
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 792
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 793
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 794
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 794);
                    echo "\">
                                  ";
                    // line 795
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 795)) {
                        // line 796
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 796) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 796))) {
                            // line 797
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 797);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 797);
                            echo "</option>
                                  ";
                        } else {
                            // line 799
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 799);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 799);
                            echo "</option>
                                  ";
                        }
                        // line 801
                        echo "                                  ";
                    } else {
                        // line 802
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 802));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 803
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 803) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 803))) {
                                // line 804
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 804);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 804);
                                echo "</option>
                                  ";
                            } else {
                                // line 806
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 806);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 806);
                                echo "</option>
                                  ";
                            }
                            // line 808
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 809
                        echo "                                  ";
                    }
                    // line 810
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 812
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 813
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 813);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 814
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 814);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 815
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 815);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 816
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 821
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 822
                echo "                    ";
            }
            // line 823
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 824
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 831
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 832
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 832);
            echo "\">
                                ";
            // line 833
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 833)) {
                // line 834
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 834);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 834);
                echo "</option>
                                ";
            } else {
                // line 836
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 836));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 837
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 837);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 837);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 839
                echo "                                ";
            }
            // line 840
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 842
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block8');\" data-toggle=\"tooltip\" title=\"";
        // line 844
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-block9\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 854
        echo ($context["text_block9"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 858
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 859
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 859) == "block9")) {
                // line 860
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 863
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 864
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 865
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 865);
                    echo "\">
                                  ";
                    // line 866
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 866)) {
                        // line 867
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 867) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 867))) {
                            // line 868
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 868);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 868);
                            echo "</option>
                                  ";
                        } else {
                            // line 870
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 870);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 870);
                            echo "</option>
                                  ";
                        }
                        // line 872
                        echo "                                  ";
                    } else {
                        // line 873
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 873));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 874
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 874) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 874))) {
                                // line 875
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 875);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 875);
                                echo "</option>
                                  ";
                            } else {
                                // line 877
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 877);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 877);
                                echo "</option>
                                  ";
                            }
                            // line 879
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 880
                        echo "                                  ";
                    }
                    // line 881
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 883
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 884
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 884);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 885
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 885);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 886
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 886);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 887
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 892
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 893
                echo "                    ";
            }
            // line 894
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 895
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 902
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 903
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 903);
            echo "\">
                                ";
            // line 904
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 904)) {
                // line 905
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 905);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 905);
                echo "</option>
                                ";
            } else {
                // line 907
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 907));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 908
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 908);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 908);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 910
                echo "                                ";
            }
            // line 911
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 913
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block9');\" data-toggle=\"tooltip\" title=\"";
        // line 915
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-block10\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 925
        echo ($context["text_block10"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 929
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 930
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 930) == "block10")) {
                // line 931
                echo "                      <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                        <td class=\"text-left\">
                          <div class=\"input-group\">
                            <select name=\"layout_module[";
                // line 934
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                                  ";
                // line 935
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 936
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 936);
                    echo "\">
                                  ";
                    // line 937
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 937)) {
                        // line 938
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 938) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 938))) {
                            // line 939
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 939);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 939);
                            echo "</option>
                                  ";
                        } else {
                            // line 941
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 941);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 941);
                            echo "</option>
                                  ";
                        }
                        // line 943
                        echo "                                  ";
                    } else {
                        // line 944
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 944));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 945
                            echo "                                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 945) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 945))) {
                                // line 946
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 946);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 946);
                                echo "</option>
                                  ";
                            } else {
                                // line 948
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 948);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 948);
                                echo "</option>
                                  ";
                            }
                            // line 950
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 951
                        echo "                                  ";
                    }
                    // line 952
                    echo "                            </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 954
                echo "                            </select>
                            <input type=\"hidden\" name=\"layout_module[";
                // line 955
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 955);
                echo "\" />
                            <input type=\"hidden\" name=\"layout_module[";
                // line 956
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 956);
                echo "\" />
                            <div class=\"input-group-btn\"><a href=\"";
                // line 957
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 957);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row";
                // line 958
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
                // line 963
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 964
                echo "                    ";
            }
            // line 965
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 966
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                          <option value=\"\"></option>
                                ";
        // line 973
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 974
            echo "                          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 974);
            echo "\">
                                ";
            // line 975
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 975)) {
                // line 976
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 976);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 976);
                echo "</option>
                                ";
            } else {
                // line 978
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 978));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 979
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 979);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 979);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 981
                echo "                                ";
            }
            // line 982
            echo "                          </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 984
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('block10');\" data-toggle=\"tooltip\" title=\"";
        // line 986
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 998
        echo ($context["text_column_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1002
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 1003
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 1003) == "column_right")) {
                // line 1004
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 1006
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 1007
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 1008
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1008);
                    echo "\">
                            ";
                    // line 1009
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1009)) {
                        // line 1010
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1010) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 1010))) {
                            // line 1011
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1011);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1011);
                            echo "</option>
                            ";
                        } else {
                            // line 1013
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1013);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1013);
                            echo "</option>
                            ";
                        }
                        // line 1015
                        echo "                            ";
                    } else {
                        // line 1016
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1016));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 1017
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1017) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 1017))) {
                                // line 1018
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1018);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 1018);
                                echo "</option>
                            ";
                            } else {
                                // line 1020
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1020);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 1020);
                                echo "</option>
                            ";
                            }
                            // line 1022
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1023
                        echo "                            ";
                    }
                    // line 1024
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1026
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 1027
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 1027);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 1028
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 1028);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 1029
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 1029);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 1030
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 1034
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 1035
                echo "                    ";
            }
            // line 1036
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1037
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 1043
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 1044
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1044);
            echo "\">
                            ";
            // line 1045
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1045)) {
                // line 1046
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1046);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1046);
                echo "</option>
                            ";
            } else {
                // line 1048
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1048));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 1049
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1049);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 1049);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1051
                echo "                            ";
            }
            // line 1052
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1054
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 1056
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var route_row = ";
        // line 1070
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 1075
        echo ($context["text_default"] ?? null);
        echo "</option>';
\t";
        // line 1076
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1077
            echo "\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1077);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1077), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1079
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 1080
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1081
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 1089
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 1094
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 1095
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1095), "js");
            echo "\">';
\t";
            // line 1096
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1096)) {
                // line 1097
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1097);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1097), "js");
                echo "</option>';
\t";
            } else {
                // line 1099
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1099));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 1100
                    echo "\thtml += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1100);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 1100), "js");
                    echo "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1102
                echo "\t";
            }
            // line 1103
            echo "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1105
        echo "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 1108
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom, #module-block1, #module-block2, #module-block3, #module-block4, #module-block5, #module-block6, #module-block7, #module-block8, #module-block9, #module-block10').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 1128
        echo ($context["user_token"] ?? null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 1130
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom, #module-block1, #module-block2, #module-block3, #module-block4, #module-block5, #module-block6, #module-block7, #module-block8, #module-block9, #module-block10').trigger('change');
//--></script> 
</div>
";
        // line 1137
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/layout_plaza_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3343 => 1137,  3333 => 1130,  3328 => 1128,  3303 => 1108,  3298 => 1105,  3291 => 1103,  3288 => 1102,  3277 => 1100,  3272 => 1099,  3264 => 1097,  3262 => 1096,  3257 => 1095,  3253 => 1094,  3245 => 1089,  3234 => 1081,  3230 => 1080,  3227 => 1079,  3216 => 1077,  3212 => 1076,  3208 => 1075,  3200 => 1070,  3183 => 1056,  3179 => 1054,  3172 => 1052,  3169 => 1051,  3158 => 1049,  3153 => 1048,  3145 => 1046,  3143 => 1045,  3138 => 1044,  3134 => 1043,  3126 => 1037,  3120 => 1036,  3117 => 1035,  3115 => 1034,  3106 => 1030,  3100 => 1029,  3094 => 1028,  3088 => 1027,  3085 => 1026,  3078 => 1024,  3075 => 1023,  3069 => 1022,  3061 => 1020,  3053 => 1018,  3050 => 1017,  3045 => 1016,  3042 => 1015,  3034 => 1013,  3026 => 1011,  3023 => 1010,  3021 => 1009,  3016 => 1008,  3012 => 1007,  3008 => 1006,  3002 => 1004,  2999 => 1003,  2995 => 1002,  2988 => 998,  2973 => 986,  2969 => 984,  2962 => 982,  2959 => 981,  2948 => 979,  2943 => 978,  2935 => 976,  2933 => 975,  2928 => 974,  2924 => 973,  2915 => 966,  2909 => 965,  2906 => 964,  2904 => 963,  2894 => 958,  2888 => 957,  2882 => 956,  2876 => 955,  2873 => 954,  2866 => 952,  2863 => 951,  2857 => 950,  2849 => 948,  2841 => 946,  2838 => 945,  2833 => 944,  2830 => 943,  2822 => 941,  2814 => 939,  2811 => 938,  2809 => 937,  2804 => 936,  2800 => 935,  2796 => 934,  2789 => 931,  2786 => 930,  2782 => 929,  2775 => 925,  2762 => 915,  2758 => 913,  2751 => 911,  2748 => 910,  2737 => 908,  2732 => 907,  2724 => 905,  2722 => 904,  2717 => 903,  2713 => 902,  2704 => 895,  2698 => 894,  2695 => 893,  2693 => 892,  2683 => 887,  2677 => 886,  2671 => 885,  2665 => 884,  2662 => 883,  2655 => 881,  2652 => 880,  2646 => 879,  2638 => 877,  2630 => 875,  2627 => 874,  2622 => 873,  2619 => 872,  2611 => 870,  2603 => 868,  2600 => 867,  2598 => 866,  2593 => 865,  2589 => 864,  2585 => 863,  2578 => 860,  2575 => 859,  2571 => 858,  2564 => 854,  2551 => 844,  2547 => 842,  2540 => 840,  2537 => 839,  2526 => 837,  2521 => 836,  2513 => 834,  2511 => 833,  2506 => 832,  2502 => 831,  2493 => 824,  2487 => 823,  2484 => 822,  2482 => 821,  2472 => 816,  2466 => 815,  2460 => 814,  2454 => 813,  2451 => 812,  2444 => 810,  2441 => 809,  2435 => 808,  2427 => 806,  2419 => 804,  2416 => 803,  2411 => 802,  2408 => 801,  2400 => 799,  2392 => 797,  2389 => 796,  2387 => 795,  2382 => 794,  2378 => 793,  2374 => 792,  2367 => 789,  2364 => 788,  2360 => 787,  2353 => 783,  2340 => 773,  2336 => 771,  2329 => 769,  2326 => 768,  2315 => 766,  2310 => 765,  2302 => 763,  2300 => 762,  2295 => 761,  2291 => 760,  2282 => 753,  2276 => 752,  2273 => 751,  2271 => 750,  2261 => 745,  2255 => 744,  2249 => 743,  2243 => 742,  2240 => 741,  2233 => 739,  2230 => 738,  2224 => 737,  2216 => 735,  2208 => 733,  2205 => 732,  2200 => 731,  2197 => 730,  2189 => 728,  2181 => 726,  2178 => 725,  2176 => 724,  2171 => 723,  2167 => 722,  2163 => 721,  2156 => 718,  2153 => 717,  2149 => 716,  2142 => 712,  2129 => 702,  2125 => 700,  2118 => 698,  2115 => 697,  2104 => 695,  2099 => 694,  2091 => 692,  2089 => 691,  2084 => 690,  2080 => 689,  2071 => 682,  2065 => 681,  2062 => 680,  2060 => 679,  2050 => 674,  2044 => 673,  2038 => 672,  2032 => 671,  2029 => 670,  2022 => 668,  2019 => 667,  2013 => 666,  2005 => 664,  1997 => 662,  1994 => 661,  1989 => 660,  1986 => 659,  1978 => 657,  1970 => 655,  1967 => 654,  1965 => 653,  1960 => 652,  1956 => 651,  1952 => 650,  1945 => 647,  1942 => 646,  1938 => 645,  1931 => 641,  1919 => 632,  1915 => 630,  1908 => 628,  1905 => 627,  1894 => 625,  1889 => 624,  1881 => 622,  1879 => 621,  1874 => 620,  1870 => 619,  1862 => 613,  1856 => 612,  1853 => 611,  1851 => 610,  1842 => 606,  1836 => 605,  1830 => 604,  1824 => 603,  1821 => 602,  1814 => 600,  1811 => 599,  1805 => 598,  1797 => 596,  1789 => 594,  1786 => 593,  1781 => 592,  1778 => 591,  1770 => 589,  1762 => 587,  1759 => 586,  1757 => 585,  1752 => 584,  1748 => 583,  1744 => 582,  1738 => 580,  1735 => 579,  1731 => 578,  1724 => 574,  1712 => 565,  1708 => 563,  1701 => 561,  1698 => 560,  1687 => 558,  1682 => 557,  1674 => 555,  1672 => 554,  1667 => 553,  1663 => 552,  1655 => 546,  1649 => 545,  1646 => 544,  1644 => 543,  1635 => 539,  1629 => 538,  1623 => 537,  1617 => 536,  1614 => 535,  1607 => 533,  1604 => 532,  1598 => 531,  1590 => 529,  1582 => 527,  1579 => 526,  1574 => 525,  1571 => 524,  1563 => 522,  1555 => 520,  1552 => 519,  1550 => 518,  1545 => 517,  1541 => 516,  1537 => 515,  1531 => 513,  1528 => 512,  1524 => 511,  1517 => 507,  1504 => 497,  1500 => 495,  1493 => 493,  1490 => 492,  1479 => 490,  1474 => 489,  1466 => 487,  1464 => 486,  1459 => 485,  1455 => 484,  1446 => 477,  1440 => 476,  1437 => 475,  1435 => 474,  1425 => 469,  1419 => 468,  1413 => 467,  1407 => 466,  1404 => 465,  1397 => 463,  1394 => 462,  1388 => 461,  1380 => 459,  1372 => 457,  1369 => 456,  1364 => 455,  1361 => 454,  1353 => 452,  1345 => 450,  1342 => 449,  1340 => 448,  1335 => 447,  1331 => 446,  1327 => 445,  1320 => 442,  1317 => 441,  1313 => 440,  1306 => 436,  1293 => 426,  1289 => 424,  1282 => 422,  1279 => 421,  1268 => 419,  1263 => 418,  1255 => 416,  1253 => 415,  1248 => 414,  1244 => 413,  1235 => 406,  1229 => 405,  1226 => 404,  1224 => 403,  1214 => 398,  1208 => 397,  1202 => 396,  1196 => 395,  1193 => 394,  1186 => 392,  1183 => 391,  1177 => 390,  1169 => 388,  1161 => 386,  1158 => 385,  1153 => 384,  1150 => 383,  1142 => 381,  1134 => 379,  1131 => 378,  1129 => 377,  1124 => 376,  1120 => 375,  1116 => 374,  1109 => 371,  1106 => 370,  1102 => 369,  1095 => 365,  1082 => 355,  1078 => 353,  1071 => 351,  1068 => 350,  1057 => 348,  1052 => 347,  1044 => 345,  1042 => 344,  1037 => 343,  1033 => 342,  1024 => 335,  1018 => 334,  1015 => 333,  1013 => 332,  1003 => 327,  997 => 326,  991 => 325,  985 => 324,  982 => 323,  975 => 321,  972 => 320,  966 => 319,  958 => 317,  950 => 315,  947 => 314,  942 => 313,  939 => 312,  931 => 310,  923 => 308,  920 => 307,  918 => 306,  913 => 305,  909 => 304,  905 => 303,  898 => 300,  895 => 299,  891 => 298,  884 => 294,  871 => 284,  867 => 282,  860 => 280,  857 => 279,  846 => 277,  841 => 276,  833 => 274,  831 => 273,  826 => 272,  822 => 271,  813 => 264,  807 => 263,  804 => 262,  802 => 261,  792 => 256,  786 => 255,  780 => 254,  774 => 253,  771 => 252,  764 => 250,  761 => 249,  755 => 248,  747 => 246,  739 => 244,  736 => 243,  731 => 242,  728 => 241,  720 => 239,  712 => 237,  709 => 236,  707 => 235,  702 => 234,  698 => 233,  694 => 232,  687 => 229,  684 => 228,  680 => 227,  673 => 223,  660 => 213,  656 => 211,  649 => 209,  646 => 208,  635 => 206,  630 => 205,  622 => 203,  620 => 202,  615 => 201,  611 => 200,  602 => 193,  596 => 192,  593 => 191,  591 => 190,  581 => 185,  575 => 184,  569 => 183,  563 => 182,  560 => 181,  553 => 179,  550 => 178,  544 => 177,  536 => 175,  528 => 173,  525 => 172,  520 => 171,  517 => 170,  509 => 168,  501 => 166,  498 => 165,  496 => 164,  491 => 163,  487 => 162,  483 => 161,  476 => 158,  473 => 157,  469 => 156,  462 => 152,  448 => 141,  444 => 139,  437 => 137,  434 => 136,  423 => 134,  418 => 133,  410 => 131,  408 => 130,  403 => 129,  399 => 128,  391 => 122,  385 => 121,  382 => 120,  380 => 119,  371 => 115,  365 => 114,  359 => 113,  353 => 112,  350 => 111,  343 => 109,  340 => 108,  334 => 107,  326 => 105,  318 => 103,  315 => 102,  310 => 101,  307 => 100,  299 => 98,  291 => 96,  288 => 95,  286 => 94,  281 => 93,  277 => 92,  273 => 91,  267 => 89,  264 => 88,  260 => 87,  253 => 83,  246 => 78,  244 => 77,  240 => 76,  231 => 70,  225 => 66,  219 => 65,  217 => 64,  210 => 62,  202 => 61,  199 => 60,  193 => 59,  185 => 57,  177 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  157 => 50,  152 => 49,  150 => 48,  142 => 43,  138 => 42,  131 => 37,  125 => 35,  123 => 34,  117 => 33,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/layout_plaza_form.twig", "");
    }
}
