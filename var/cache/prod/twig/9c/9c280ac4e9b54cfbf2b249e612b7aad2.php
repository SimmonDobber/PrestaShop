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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig */
class __TwigTemplate_5a4c18b2ffb7d624d9de54f715667ac8 extends Template
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
        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">list</i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available fields", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"js-available-field-template d-none\"></div>
    ";
        // line 34
        $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig", 34)->display(twig_array_merge($context, ["classes" => "js-available-field-popover-template d-none"]));
        // line 35
        echo "    <div
      class=\"alert alert-info js-available-fields\"
      role=\"alert\"
      data-url=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_get_available_fields");
        echo "\"
    >
    </div>

    <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("* Required field", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 42,  59 => 38,  54 => 35,  52 => 34,  45 => 30,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig");
    }
}
