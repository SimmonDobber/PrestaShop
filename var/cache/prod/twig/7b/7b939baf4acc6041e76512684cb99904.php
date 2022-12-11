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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig */
class __TwigTemplate_d0aa2aec21d35968cc5551d8c1423517 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'generateMailsFormBlock' => [$this, 'block_generateMailsFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig", 25)->unwrap();
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('generateMailsFormBlock', $context, $blocks);
    }

    public function block_generateMailsFormBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generateMailsForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_generate")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">email</i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate emails", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select your email theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "mailTheme", [], "any", false, false, false, 44), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "mailTheme", [], "any", false, false, false, 45), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select your language", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "language", [], "any", false, false, false, 54), 'errors');
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "language", [], "any", false, false, false, 55), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 60
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select the theme you want to overwrite", [], "Admin.Design.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop's email templates are stored in the \"mails\" folder, but they can be overridden by your current theme's own \"mails\" folder. Using this option enables to overwrite emails from your current theme.", [], "Admin.Design.Help")], 60, $context, $this->getSourceContext());
        // line 63
        echo "
          <div class=\"col-sm\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "theme", [], "any", false, false, false, 65), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "theme", [], "any", false, false, false, 66), 'widget');
        echo "
            ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "theme", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "disabled", [], "any", false, false, false, 67)) {
            // line 68
            echo "              <small class=\"form-text\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No emails were detected in any theme folder so this field is disabled.", [], "Admin.Design.Help"), "html", null, true);
            echo "</small>
            ";
        }
        // line 70
        echo "          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 74
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overwrite templates", [], "Admin.Design.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By default, existing email template files are not modified to avoid deleting any modification you may have done. Enable this option to force the overwrite.", [], "Admin.Design.Help")], 74, $context, $this->getSourceContext());
        // line 77
        echo "
          <div class=\"col-sm\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "overwrite", [], "any", false, false, false, 79), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["generateMailsForm"] ?? null), "overwrite", [], "any", false, false, false, 80), 'widget');
        echo "
          </div>
        </div>

      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">email</i>
          <span>";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate emails", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>
  ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generateMailsForm"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 96,  160 => 91,  146 => 80,  142 => 79,  138 => 77,  136 => 74,  130 => 70,  124 => 68,  122 => 67,  118 => 66,  114 => 65,  110 => 63,  108 => 60,  100 => 55,  96 => 54,  90 => 51,  81 => 45,  77 => 44,  71 => 41,  60 => 33,  53 => 29,  50 => 28,  43 => 27,  40 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig");
    }
}
