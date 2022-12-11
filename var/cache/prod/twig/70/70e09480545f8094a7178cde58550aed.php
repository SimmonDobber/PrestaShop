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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig */
class __TwigTemplate_04f432c388fd1330ad0f79f4235e05bb extends Template
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
        if ( !($context["isShowcaseCardClosed"] ?? null)) {
            // line 27
            echo "  <div id=\"employeesShowcaseCard\" class=\"showcase-card card\">
    <div class=\"helper-card__left helper-card__team shape-one img-rtl\">
      <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/helper-card/team@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
    <div class=\"helper-card__right\">
      <h2>";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your team", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create profiles for your employees with specific rights. SuperAdmin can access the entire store while other people can only be dedicated to the catalog or orders pages.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["helperCardDocumentationLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">
        ";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["showcaseCardName"] ?? null), "html", null, true);
            echo "\"
       data-close-url=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_close_showcase_card");
            echo "\"
    >
      close
    </i>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 40,  71 => 39,  64 => 35,  60 => 34,  56 => 33,  52 => 32,  46 => 29,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig");
    }
}
