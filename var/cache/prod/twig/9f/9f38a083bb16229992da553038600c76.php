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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig */
class __TwigTemplate_e57aa61ecc21d8992a6e06e560980bc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'email_configuration_form_rest' => [$this, 'block_email_configuration_form_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        if (($context["isEmailLogsEnabled"] ?? null)) {
            // line 30
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 30)->display($context);
            // line 31
            echo "  ";
        }
        // line 32
        echo "
  ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["emailConfigurationForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_emails_save_options")]);
        echo "
  ";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 34)->display($context);
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('email_configuration_form_rest', $context, $blocks);
        // line 39
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["emailConfigurationForm"] ?? null), 'form_end');
        echo "

  ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 41)->display($context);
    }

    // line 36
    public function block_email_configuration_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["emailConfigurationForm"] ?? null), 'rest');
        echo "
  ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/email.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  106 => 47,  100 => 45,  96 => 44,  89 => 37,  85 => 36,  81 => 41,  75 => 39,  73 => 36,  70 => 35,  68 => 34,  64 => 33,  61 => 32,  58 => 31,  55 => 30,  52 => 29,  48 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Email/index.html.twig");
    }
}
