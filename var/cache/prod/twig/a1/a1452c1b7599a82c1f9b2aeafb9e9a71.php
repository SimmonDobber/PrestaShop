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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig */
class __TwigTemplate_7ce4f903d8d46b94812bfff67405373a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'test_email_sending' => [$this, 'block_test_email_sending'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["testEmailSendingForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('test_email_sending', $context, $blocks);
    }

    public function block_test_email_sending($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["testEmailSendingForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_emails_send_test")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Test your email configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["testEmailSendingForm"] ?? null), 'widget');
        echo "
        <div class=\"alert alert-danger d-none js-test-email-errors\" role=\"alert\"></div>
        <div class=\"alert alert-success d-none js-test-email-success\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A test email has been sent to the email address you provided.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <div class=\"spinner d-none js-test-email-loader\"></div>
        <button type=\"button\" class=\"btn btn-primary js-send-test-email-btn\">
          <i class=\"material-icons\">email</i>
          ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send a test email", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
  ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["testEmailSendingForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 54,  83 => 49,  71 => 40,  65 => 37,  58 => 33,  50 => 29,  43 => 28,  40 => 27,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig");
    }
}
