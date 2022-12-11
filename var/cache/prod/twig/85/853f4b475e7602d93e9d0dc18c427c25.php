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

/* @PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig */
class __TwigTemplate_d6f765980936b9a42f0e59305300b8aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'shipping_preferences_handling' => [$this, 'block_shipping_preferences_handling'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["handlingForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('shipping_preferences_handling', $context, $blocks);
    }

    public function block_shipping_preferences_handling($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  <div id=\"handling\" class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">filter_none</i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Handling", [], "Admin.Shipping.Feature"), "html", null, true);
        echo "

      <span class=\"help-box\" 
            data-container=\"body\" 
            data-toggle=\"popover\" 
            data-trigger=\"hover\" 
            data-placement=\"right\" 
            data-content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you set these parameters to 0, they will be disabled.", [], "Admin.Shipping.Help"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Coupons are not taken into account when calculating free shipping.", [], "Admin.Shipping.Help"), "html", null, true);
        echo "\" 
            title=\"\">
      </span>
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["handlingForm"] ?? null), 'widget');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 51,  79 => 46,  68 => 40,  58 => 33,  53 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig");
    }
}
