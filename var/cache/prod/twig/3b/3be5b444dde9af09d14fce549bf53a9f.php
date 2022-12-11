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

/* @PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig */
class __TwigTemplate_eea6e6331a317e0248ac50f01b650f58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'shipping_preferences_carrier_options' => [$this, 'block_shipping_preferences_carrier_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["carrierOptionsForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('shipping_preferences_carrier_options', $context, $blocks);
    }

    public function block_shipping_preferences_carrier_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  <div id=\"carrier-options\" class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">local_shipping</i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier options", [], "Admin.Shipping.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["carrierOptionsForm"] ?? null), 'widget');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"save-carrier-options-button\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 42,  65 => 37,  58 => 33,  53 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig");
    }
}
