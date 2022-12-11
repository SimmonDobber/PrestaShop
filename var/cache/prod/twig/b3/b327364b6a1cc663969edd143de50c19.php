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

/* @PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig */
class __TwigTemplate_8222a39c1ab27dc5beae1e1d14b1e3bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'import_panel' => [$this, 'block_import_panel'],
            'import_available_fields' => [$this, 'block_import_available_fields'],
            'import_sample_files' => [$this, 'block_import_sample_files'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        if (array_key_exists("importForm", $context)) {
            // line 31
            echo "    <div class=\"row\">
      <div class=\"col-md-8\">
        ";
            // line 33
            $this->displayBlock('import_panel', $context, $blocks);
            // line 36
            echo "      </div>

      <div class=\"col-md-4\">
        ";
            // line 39
            $this->displayBlock('import_available_fields', $context, $blocks);
            // line 42
            echo "
        ";
            // line 43
            $this->displayBlock('import_sample_files', $context, $blocks);
            // line 46
            echo "      </div>
    </div>
  ";
        }
    }

    // line 33
    public function block_import_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", 34)->display($context);
        // line 35
        echo "        ";
    }

    // line 39
    public function block_import_available_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", 40)->display($context);
        // line 41
        echo "        ";
    }

    // line 43
    public function block_import_sample_files($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", 44)->display($context);
        // line 45
        echo "        ";
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/imports.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 54,  119 => 52,  115 => 51,  111 => 45,  108 => 44,  104 => 43,  100 => 41,  97 => 40,  93 => 39,  89 => 35,  86 => 34,  82 => 33,  75 => 46,  73 => 43,  70 => 42,  68 => 39,  63 => 36,  61 => 33,  57 => 31,  54 => 30,  50 => 29,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportPage/import.html.twig");
    }
}
