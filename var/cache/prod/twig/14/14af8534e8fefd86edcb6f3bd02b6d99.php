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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig */
class __TwigTemplate_e171bef48c5cd94f3dd0d01d7db11648 extends Template
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
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", 27)->unwrap();
        // line 28
        echo "
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download sample csv files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
        <div class=\"list-group\">
            ";
        // line 36
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Categories file", "categories_import"], 36, $context, $this->getSourceContext());
        echo "
            ";
        // line 37
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Products file", "products_import"], 37, $context, $this->getSourceContext());
        echo "
            ";
        // line 38
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Combinations file", "combinations_import"], 38, $context, $this->getSourceContext());
        echo "
            ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Customers file", "customers_import"], 39, $context, $this->getSourceContext());
        echo "
            ";
        // line 40
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Addresses file", "addresses_import"], 40, $context, $this->getSourceContext());
        echo "
            ";
        // line 41
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Brands file", "brands_import"], 41, $context, $this->getSourceContext());
        echo "
            ";
        // line 42
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Suppliers file", "suppliers_import"], 42, $context, $this->getSourceContext());
        echo "
            ";
        // line 43
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Aliases file", "alias_import"], 43, $context, $this->getSourceContext());
        echo "
            ";
        // line 44
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Store Contacts file", "store_contacts"], 44, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 44,  83 => 43,  79 => 42,  75 => 41,  71 => 40,  67 => 39,  63 => 38,  59 => 37,  55 => 36,  47 => 31,  42 => 28,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig");
    }
}
