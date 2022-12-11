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

/* @PrestaShop/Admin/Common/multistore-infotip.html.twig */
class __TwigTemplate_2a8e89130561f8e6dd613657022f02b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'multistore_infotip' => [$this, 'block_multistore_infotip'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Common/multistore-infotip.html.twig", 26)->unwrap();
        // line 27
        $this->displayBlock('multistore_infotip', $context, $blocks);
    }

    public function block_multistore_infotip($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        if (($context["multistoreIsUsed"] ?? null)) {
            echo twig_call_macro($macros["ps"], "macro_infotip", [($context["multistoreInfoTip"] ?? null), true], 28, $context, $this->getSourceContext());
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/multistore-infotip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/multistore-infotip.html.twig", "/var/www/html/templates/bundles/PrestaShopBundle/Admin/Common/multistore-infotip.html.twig");
    }
}
