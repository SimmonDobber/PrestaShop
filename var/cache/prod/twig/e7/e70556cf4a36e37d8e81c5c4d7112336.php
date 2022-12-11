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

/* @PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig */
class __TwigTemplate_51661795a1afdcbc3dcd4383fe477b98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig", ["mailThemeConfigurationForm" =>         // line 31
($context["mailThemeConfigurationForm"] ?? null)]);
        // line 33
        echo "

  ";
        // line 35
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig", ["generateMailsForm" =>         // line 37
($context["generateMailsForm"] ?? null)]);
        // line 39
        echo "

  ";
        // line 41
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/translate_mails_body_form.html.twig", ["generateMailsForm" =>         // line 43
($context["generateMailsForm"] ?? null)]);
        // line 45
        echo "

  ";
        // line 47
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_themes.html.twig", ["mailThemes" =>         // line 49
($context["mailThemes"] ?? null)]);
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 51,  73 => 49,  72 => 47,  68 => 45,  66 => 43,  65 => 41,  61 => 39,  59 => 37,  58 => 35,  54 => 33,  52 => 31,  50 => 29,  46 => 28,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/index.html.twig");
    }
}
