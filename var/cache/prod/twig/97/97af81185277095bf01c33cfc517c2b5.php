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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig */
class __TwigTemplate_b5d4923c4bb851e9d17e6ec22c6d7c6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'mailThemeConfigurationFormBlock' => [$this, 'block_mailThemeConfigurationFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig", 25)->unwrap();
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('mailThemeConfigurationFormBlock', $context, $blocks);
    }

    public function block_mailThemeConfigurationFormBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mailThemeConfigurationForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_save_configuration")]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">settings</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"form-group row\">
        ";
        // line 38
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select your default email theme", [], "Admin.Design.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This won't regenerate email templates, it only sets the default email theme for future generation (when a language is installed for example).", [], "Admin.Design.Help")], 38, $context, $this->getSourceContext());
        // line 41
        echo "
        <div class=\"col-sm\">
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["mailThemeConfigurationForm"] ?? null), "defaultTheme", [], "any", false, false, false, 43), 'errors');
        echo "
          ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["mailThemeConfigurationForm"] ?? null), "defaultTheme", [], "any", false, false, false, 44), 'widget');
        echo "
        </div>
      </div>
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" id=\"save-configuration-form\">
        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</span>
      </button>
    </div>
  </div>
</div>
";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mailThemeConfigurationForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 58,  88 => 53,  76 => 44,  72 => 43,  68 => 41,  66 => 38,  57 => 32,  50 => 28,  43 => 27,  40 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig");
    }
}
