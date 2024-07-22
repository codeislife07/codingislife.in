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

/* extension/module/rest_api.twig */
class __TwigTemplate_befba155dd98dfbaf1e2959cb18e9179 extends Template
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
    <button type=\"submit\" form=\"form-rest_api\" data-toggle=\"tooltip\" title=\"";
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
            echo "    <li><a href=\"";
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
        echo "   </ul>
  </div>
 </div>
 <div class=\"container-fluid\">
  ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
   <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 22
        echo "  <div class=\"panel panel-default\">
   <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
   </div>
   <div class=\"panel-body\">
    <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-rest_api\" class=\"form-horizontal\">
     <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
       <select name=\"rest_api_status\" id=\"input-status\" class=\"form-control\">
        ";
        // line 32
        if (($context["rest_api_status"] ?? null)) {
            // line 33
            echo "        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
";
        } else {
            // line 35
            echo " 
        <option value=\"1\">";
            // line 36
            echo ($context["text_enabled"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
        ";
        }
        // line 39
        echo "       </select>
      </div>
\t </div>
     <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-entry-client_id\">";
        // line 43
        echo ($context["entry_client_id"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
       <input type=\"text\" name=\"rest_api_client_id\" value=\"";
        // line 45
        echo ($context["rest_api_client_id"] ?? null);
        echo "\" />
      </div>
     </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"input-entry-client_secret\">";
        // line 49
        echo ($context["entry_client_secret"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" name=\"rest_api_client_secret\" value=\"";
        // line 51
        echo ($context["rest_api_client_secret"] ?? null);
        echo "\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"input-entry-token_ttl\">";
        // line 55
        echo ($context["entry_token_ttl"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" name=\"rest_api_token_ttl\" value=\"";
        // line 57
        echo ($context["rest_api_token_ttl"] ?? null);
        echo "\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"input-entry-order-id\">";
        // line 61
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" name=\"rest_api_order_id\" value=\"";
        // line 63
        echo ($context["rest_api_order_id"] ?? null);
        echo "\" />
        </div>
      </div>
    </form>
   </div>
  </div>
 </div>
</div>
";
        // line 71
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/rest_api.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  184 => 63,  179 => 61,  172 => 57,  167 => 55,  160 => 51,  155 => 49,  148 => 45,  143 => 43,  137 => 39,  132 => 37,  128 => 36,  125 => 35,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/rest_api.twig", "");
    }
}
