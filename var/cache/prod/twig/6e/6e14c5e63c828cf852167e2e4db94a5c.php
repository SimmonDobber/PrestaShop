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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig */
class __TwigTemplate_eb870ea3a6343efc94a42d62f8014a08 extends Template
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
<div class=\"card d-none js-files-history-block\">
    <div class=\"card-header\">
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("History of uploaded files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        <span class=\"badge badge-primary js-files-history-number\">";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["importFileNames"] ?? null)), "html", null, true);
        echo "</span>
        <a href=\"#\" class=\"close js-close-files-history-block-btn\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </a>
    </div>
    <div class=\"card-content\">
        <table id=\"fileHistoryTable\"
               class=\"table mb-0\"
               data-delete-file-url=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_file_delete");
        echo "\"
               data-download-file-url=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_file_download");
        echo "\"
        >
            <tbody>
                <tr class=\"d-none\">
                    <td></td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use", [], "Admin.Actions"), "html", null, true);
        echo "
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"#\" class=\"dropdown-item js-download-file-btn\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"#\" class=\"dropdown-item js-delete-file-btn\">
                                    <i class=\"material-icons\">delete</i>
                                    ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["importFileNames"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fileName"]) {
            // line 73
            echo "                <tr>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"";
            // line 76
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use", [], "Admin.Actions"), "html", null, true);
            echo "
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_file_download", ["filename" => $context["fileName"]]), "html", null, true);
            echo "\" class=\"dropdown-item\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_file_delete", ["filename" => $context["fileName"]]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                    <i class=\"material-icons\">delete</i>
                                    ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fileName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 103,  161 => 96,  156 => 94,  150 => 91,  145 => 89,  139 => 86,  128 => 78,  123 => 76,  118 => 74,  115 => 73,  111 => 72,  102 => 66,  94 => 61,  86 => 56,  75 => 48,  64 => 40,  60 => 39,  49 => 31,  45 => 30,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig");
    }
}
