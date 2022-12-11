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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/translate_mails_body_form.html.twig */
class __TwigTemplate_1fb3ad4783630037963e0a48650bcf76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'translateMailsBodyFormBlock' => [$this, 'block_translateMailsBodyFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('translateMailsBodyFormBlock', $context, $blocks);
    }

    public function block_translateMailsBodyFormBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "
  ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["translateMailsBodyForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_translate_body")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">email</i>
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translate emails", [], "Admin.Actions"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select your language", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["translateMailsBodyForm"] ?? null), "language", [], "any", false, false, false, 42), 'errors');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["translateMailsBodyForm"] ?? null), "language", [], "any", false, false, false, 43), 'widget');
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
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translate emails", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>
  ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["translateMailsBodyForm"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/translate_mails_body_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 58,  91 => 53,  78 => 43,  74 => 42,  68 => 39,  58 => 32,  51 => 28,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/translate_mails_body_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/translate_mails_body_form.html.twig");
    }
}
