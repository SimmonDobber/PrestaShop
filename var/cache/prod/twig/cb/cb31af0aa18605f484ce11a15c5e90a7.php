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

/* @PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig */
class __TwigTemplate_17ad2757e490ac25604983ea5a3bef3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["handlingForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "configuration_handling_form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_shipping_preferences_handling_save")]);
        echo "
    ";
        // line 31
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig", "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig", 31)->display($context);
        // line 32
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["handlingForm"] ?? null), 'form_end');
        echo "

  ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["carrierOptionsForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "configuration_carrier_options_form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_shipping_preferences_carrier_options_save")]);
        echo "
    ";
        // line 36
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig", "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig", 36)->display($context);
        // line 37
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["carrierOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/shipping_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 41,  83 => 40,  79 => 39,  72 => 37,  69 => 36,  65 => 34,  59 => 32,  56 => 31,  51 => 29,  47 => 28,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Preferences/preferences.html.twig");
    }
}
