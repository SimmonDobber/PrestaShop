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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig */
class __TwigTemplate_393911b020f7c0b6c5e5a37487666deb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'import_form' => [$this, 'block_import_form'],
            'import_file_history_block' => [$this, 'block_import_file_history_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["importForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('import_form', $context, $blocks);
    }

    public function block_import_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? null), 'form_start', ["attr" => ["data-file-upload-url" => ($context["importFileUploadUrl"] ?? null), "data-delete-confirm-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this entity:", [], "Admin.Advparameters.Notification"), "class" => "js-import-form"]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can read information on import at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          </a>
        </p>
        <p class=\"alert-text\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more about the CSV format at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          </a>
        </p>
      </div>

      <hr>

      <div class=\"form-group\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "entity", [], "any", false, false, false, 55), 'row');
        echo "
      </div>

      <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
        <ul>
          <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note that the Category import does not support having two categories with the same name.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
          <li>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note that you can have several products with the same reference.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
        </ul>
      </div>

      <hr>

      <div class=\"form-group hidden-xs-up\">
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "csv", [], "any", false, false, false, 68), 'errors');
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "csv", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "js-import-file-input"]]);
        echo "
      </div>

      <div class=\"form-group js-file-upload-form-group\">
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "file", [], "any", false, false, false, 73), 'label');
        echo "
        <div class=\"row\">
          <div class=\"col\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "file", [], "any", false, false, false, 76), 'errors');
        echo "
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "file", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "js-import-file", "data-max-file-upload-size" => ($context["maxFileUploadSize"] ?? null)]]);
        echo "
          </div>
          <div class=\"col\">
            <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
            <button type=\"button\"
                    class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                    ";
        // line 83
        if (twig_test_empty(($context["importFileNames"] ?? null))) {
            echo "disabled";
        }
        // line 84
        echo "            >
              <span class=\"badge badge-primary js-files-history-number\">";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["importFileNames"] ?? null)), "html", null, true);
        echo "</span>
              ";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose from history / FTP", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
        <small class=\"form-text\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
        <small class=\"form-text\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Only UTF-8 and ISO 8859-1 encodings are allowed", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
        <small class=\"form-text\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can also upload your file via FTP to the following directory: %s .", ["%s" => ($context["importDirectory"] ?? null)], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      </div>

      <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
        <p class=\"alert-text\">
          <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
        </p>
      </div>

      <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
        <button type=\"button\"
                class=\"close btn btn-outline-secondary js-change-import-file-btn\"
                aria-label=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change", [], "Admin.Actions"), "html", null, true);
        echo "\"
        >
          <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
        </button>
        <p class=\"alert-text js-import-file\"></p>
      </div>

      ";
        // line 111
        $this->displayBlock('import_file_history_block', $context, $blocks);
        // line 114
        echo "
      <hr>
      ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "iso_lang", [], "any", false, false, false, 116), 'row');
        echo "
      ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "separator", [], "any", false, false, false, 117), 'row');
        echo "
      ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "multiple_value_separator", [], "any", false, false, false, 118), 'row');
        echo "
      <hr>
      ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "submitImportFile", [], "any", false, false, false, 120), 'label');
        echo "

      ";
        // line 123
        echo "      ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "submitImportFile", [], "any", false, false, false, 123), "setRendered", [], "any", false, false, false, 123);
        // line 124
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importForm"] ?? null), 'widget');
        echo "
    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "submitImportFile", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
        ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["importForm"] ?? null), "submitImportFile", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "label", [], "any", false, false, false, 130), "html", null, true);
        echo "
        <i class=\"material-icons rtl-flip\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 111
    public function block_import_file_history_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 112)->display($context);
        // line 113
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 113,  268 => 112,  264 => 111,  258 => 136,  249 => 130,  245 => 129,  236 => 124,  233 => 123,  228 => 120,  223 => 118,  219 => 117,  215 => 116,  211 => 114,  209 => 111,  199 => 104,  184 => 92,  180 => 91,  176 => 90,  169 => 86,  165 => 85,  162 => 84,  158 => 83,  152 => 80,  146 => 77,  142 => 76,  136 => 73,  129 => 69,  125 => 68,  115 => 61,  111 => 60,  103 => 55,  92 => 47,  88 => 46,  84 => 45,  77 => 41,  73 => 40,  69 => 39,  60 => 33,  54 => 30,  47 => 29,  44 => 28,  42 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig");
    }
}
