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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig */
class __TwigTemplate_3ddb960dfec22a102ed50b02cb0d3aa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'employee_showcase_card' => [$this, 'block_employee_showcase_card'],
            'employee_listing' => [$this, 'block_employee_listing'],
            'employee_options' => [$this, 'block_employee_options'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 35
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new employee", [], "Admin.Advparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 35
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", 35);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  ";
        $this->displayBlock('employee_showcase_card', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('employee_listing', $context, $blocks);
        // line 45
        echo "
  ";
        // line 46
        $this->displayBlock('employee_options', $context, $blocks);
    }

    // line 38
    public function block_employee_showcase_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", 39)->display($context);
        // line 40
        echo "  ";
    }

    // line 42
    public function block_employee_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", 43)->display(twig_array_merge($context, ["grid" => ($context["employeeGrid"] ?? null)]));
        // line 44
        echo "  ";
    }

    // line 46
    public function block_employee_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", 47)->display($context);
        // line 48
        echo "  ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/employee.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 55,  117 => 54,  111 => 52,  107 => 51,  103 => 48,  100 => 47,  96 => 46,  92 => 44,  89 => 43,  85 => 42,  81 => 40,  78 => 39,  74 => 38,  70 => 46,  67 => 45,  65 => 42,  62 => 41,  59 => 38,  55 => 37,  50 => 35,  48 => 27,  46 => 26,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/index.html.twig");
    }
}
