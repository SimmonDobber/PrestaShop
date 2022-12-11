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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_themes.html.twig */
class __TwigTemplate_266bdfc1907fb7bd8ab07fb29667ca76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'generateMailsFormBlock' => [$this, 'block_generateMailsFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('generateMailsFormBlock', $context, $blocks);
    }

    public function block_generateMailsFormBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">email</i>
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email themes", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">

      <table class=\"grid-table table\">
        <thead class=\"thead-default\">
          <tr class=\"column-headers\">
            <th scope=\"col\">
              ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "
            </th>
            <th scope=\"col\">
              <div class=\"grid-actions-header-text\">
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mailThemes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 50
            echo "            <tr>
              <td class=\"data-type column-name\">
                ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "
              </td>
              <td class=\"action-type\">
                <div class=\"btn-group-action text-right\">
                  <a class=\"btn tooltip-link preview-link\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_preview", ["theme" => twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
                    <i class=\"material-icons\">search</i>
                  </a>
                </div>
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
      </table>

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_themes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 63,  96 => 56,  89 => 52,  85 => 50,  81 => 49,  72 => 43,  65 => 39,  53 => 30,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_themes.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/list_mail_themes.html.twig");
    }
}
