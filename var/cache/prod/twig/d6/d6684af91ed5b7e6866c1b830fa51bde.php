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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig */
class __TwigTemplate_f6fd8aee127d47b0034db0ba3d1a0475 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'sql_manager_info_block' => [$this, 'block_sql_manager_info_block'],
            'sql_manager_warning_block' => [$this, 'block_sql_manager_warning_block'],
            'sql_manager_list_panel' => [$this, 'block_sql_manager_list_panel'],
            'sql_manager_settings_panel' => [$this, 'block_sql_manager_settings_panel'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $this->displayBlock('sql_manager_info_block', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('sql_manager_warning_block', $context, $blocks);
        // line 47
        echo "
  ";
        // line 48
        $this->displayBlock('sql_manager_list_panel', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        $this->displayBlock('sql_manager_settings_panel', $context, $blocks);
    }

    // line 30
    public function block_sql_manager_info_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How do I create a new SQL query?", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</p>
      <ul>
        <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click \"%add_new_label%\".", ["%add_new_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new SQL query", [], "Admin.Advparameters.Feature")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
        <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fill in the fields and click \"%save_label%\".", ["%save_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
        <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can then view the query results by clicking on the \"%view_label%\" action in the dropdown menu", ["%view_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Global")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
        <li>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can also export the query results as a CSV file by clicking on the \"%export_label%\" button", ["%export_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export", [], "Admin.Actions")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      </ul>
    </div>
  ";
    }

    // line 42
    public function block_sql_manager_warning_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("When saving the query, only the \"SELECT\" SQL statement is allowed.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</p>
    </div>
  ";
    }

    // line 48
    public function block_sql_manager_list_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "
    ";
        // line 50
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 50)->display(twig_array_merge($context, ["grid" => ($context["requestSqlGrid"] ?? null)]));
        // line 51
        echo "
  ";
    }

    // line 54
    public function block_sql_manager_settings_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "
    ";
        // line 56
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 56)->display($context);
        // line 57
        echo "
  ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/sql_manager.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 65,  159 => 64,  153 => 62,  149 => 61,  144 => 57,  142 => 56,  139 => 55,  135 => 54,  130 => 51,  128 => 50,  125 => 49,  121 => 48,  114 => 44,  111 => 43,  107 => 42,  99 => 37,  95 => 36,  91 => 35,  87 => 34,  82 => 32,  79 => 31,  75 => 30,  71 => 54,  68 => 53,  66 => 48,  63 => 47,  61 => 42,  58 => 41,  55 => 30,  51 => 29,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig");
    }
}
