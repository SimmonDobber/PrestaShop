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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig */
class __TwigTemplate_93670e230bd84ede12aa8671ff4d5817 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'webservice_list_notifications' => [$this, 'block_webservice_list_notifications'],
            'webservice_api_status' => [$this, 'block_webservice_api_status'],
            'webservice_configuration_form_rest' => [$this, 'block_webservice_configuration_form_rest'],
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
        // line 29
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Webservice", [], "Admin.Navigation.Menu");
        // line 30
        $context["enableSidebar"] = true;
        // line 31
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_webservice_keys_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new webservice key", [], "Admin.Advparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "
  ";
        // line 41
        $this->displayBlock('webservice_list_notifications', $context, $blocks);
        // line 50
        echo "
  ";
        // line 51
        $this->displayBlock('webservice_api_status', $context, $blocks);
        // line 80
        echo "
  ";
        // line 81
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "

  ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["webserviceConfigurationForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_webservice_save_settings"), "attr" => ["class" => "form", "id" => "configuration_form"]]);
        echo "

  ";
        // line 85
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig");
        echo "

  ";
        // line 87
        $this->displayBlock('webservice_configuration_form_rest', $context, $blocks);
        // line 90
        echo "
  ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["webserviceConfigurationForm"] ?? null), 'form_end');
        echo "

";
    }

    // line 41
    public function block_webservice_list_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    ";
        if ( !twig_test_empty(($context["configurationWarnings"] ?? null))) {
            // line 43
            echo "      <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["configurationWarnings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 45
                echo "          <p class=\"alert-text\">";
                echo twig_escape_filter($this->env, $context["warning"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "      </div>
    ";
        }
        // line 49
        echo "  ";
    }

    // line 51
    public function block_webservice_api_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    ";
        $context["devdocUrl"] = "https://devdocs.prestashop.com/8/webservice/";
        // line 53
        echo "
    ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["webserviceStatus"] ?? null), "isEnabled", [], "any", false, false, false, 54) == true)) {
            // line 55
            echo "      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">info_outline</i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Webservice status", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
        </h3>
        <div class=\"card-body\">
          <p>
            ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Webservice is enabled. Main entry point is", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["webserviceStatus"] ?? null), "endpoint", [], "any", false, false, false, 62), "html", null, true);
            echo "\" target=\"_blank\">
              ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["webserviceStatus"] ?? null), "endpoint", [], "any", false, false, false, 63), "html", null, true);
            echo "
            </a>
          </p>
          ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, ($context["webserviceStatus"] ?? null), "isFunctional", [], "any", false, false, false, 66) == false)) {
                // line 67
                echo "            <p>
              ";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It seems that the webservice endpoint is not functional. If you are using httpd/apache2, you need to enable URL rewriting on your server.", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
            </p>
          ";
            }
            // line 71
            echo "          <p>
            ";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read the [1]developer documentation[/1].", ["[1]" => (("<a href=\"" .             // line 73
($context["devdocUrl"] ?? null)) . "\" target=\"_blank\">"), "[/1]" => "</a>"], "Admin.Advparameters.Feature");
            // line 74
            echo "
          </p>
        </div>
      </div>
    ";
        }
        // line 79
        echo "  ";
    }

    // line 87
    public function block_webservice_configuration_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["webserviceConfigurationForm"] ?? null), 'rest');
        echo "
  ";
    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/webservice.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 99,  218 => 98,  212 => 96,  208 => 95,  201 => 88,  197 => 87,  193 => 79,  186 => 74,  184 => 73,  183 => 72,  180 => 71,  174 => 68,  171 => 67,  169 => 66,  163 => 63,  159 => 62,  155 => 61,  148 => 57,  144 => 55,  142 => 54,  139 => 53,  136 => 52,  132 => 51,  128 => 49,  124 => 47,  115 => 45,  111 => 44,  108 => 43,  105 => 42,  101 => 41,  94 => 91,  91 => 90,  89 => 87,  84 => 85,  79 => 83,  74 => 81,  71 => 80,  69 => 51,  66 => 50,  64 => 41,  61 => 40,  57 => 39,  52 => 26,  50 => 31,  48 => 30,  46 => 29,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Webservice/index.html.twig");
    }
}
