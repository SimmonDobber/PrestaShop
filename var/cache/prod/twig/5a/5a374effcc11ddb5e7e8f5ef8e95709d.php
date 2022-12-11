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

/* @PrestaShop/Admin/Sell/Order/Order/index.html.twig */
class __TwigTemplate_6c2357609cb3a8bd71d0333c7368f566 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'orders_kpi' => [$this, 'block_orders_kpi'],
            'order_grid_row' => [$this, 'block_order_grid_row'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/orders" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", 34)->display($context);
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('orders_kpi', $context, $blocks);
        // line 42
        echo "
  ";
        // line 43
        $this->displayBlock('order_grid_row', $context, $blocks);
    }

    // line 36
    public function block_orders_kpi($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 39
($context["orderKpi"] ?? null)]));
        // line 40
        echo "
  ";
    }

    // line 43
    public function block_order_grid_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", 44)->display(twig_array_merge($context, ["grid" => ($context["orderGrid"] ?? null)]));
        // line 45
        echo "  ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/order.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 52,  118 => 51,  112 => 49,  108 => 48,  104 => 45,  101 => 44,  97 => 43,  92 => 40,  90 => 39,  88 => 37,  84 => 36,  80 => 43,  77 => 42,  75 => 36,  72 => 35,  69 => 34,  65 => 33,  59 => 30,  54 => 29,  50 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/index.html.twig");
    }
}
