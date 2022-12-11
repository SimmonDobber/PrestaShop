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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig */
class __TwigTemplate_55672a6d0d05324a64c994dfdc89cc8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig", 26, "2001148106")->display(twig_array_merge($context, ["grid" => ($context["emailLogsGrid"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig");
    }
}


/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig */
class __TwigTemplate_55672a6d0d05324a64c994dfdc89cc8a___2001148106 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_footer' => [$this, 'block_grid_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_grid_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <div class=\"card-footer\">
      <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminDashboard"), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
        <i class=\"material-icons rtl-flip\">arrow_back</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to the dashboard", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </a>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  102 => 31,  99 => 30,  95 => 29,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig");
    }
}
