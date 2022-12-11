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

/* @PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig */
class __TwigTemplate_e5d56c82cc682874e825507729009454 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stable_feature_flag_form' => [$this, 'block_stable_feature_flag_form'],
            'beta_feature_flag_form' => [$this, 'block_beta_feature_flag_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", 28)->display($context);
        // line 29
        echo "
  ";
        // line 31
        echo "  ";
        if (($context["stableFeatureFlagsForm"] ?? null)) {
            // line 32
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stableFeatureFlagsForm"] ?? null), 'form_start', ["attr" => ["class" => "form"]]);
            echo "
    ";
            // line 33
            $this->displayBlock('stable_feature_flag_form', $context, $blocks);
            // line 55
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stableFeatureFlagsForm"] ?? null), 'form_end');
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 59
        echo "  ";
        if (($context["betaFeatureFlagsForm"] ?? null)) {
            // line 60
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["betaFeatureFlagsForm"] ?? null), 'form_start', ["attr" => ["class" => "form"]]);
            echo "
    ";
            // line 61
            $this->displayBlock('beta_feature_flag_form', $context, $blocks);
            // line 93
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["betaFeatureFlagsForm"] ?? null), 'form_end');
            echo "
  ";
        }
    }

    // line 33
    public function block_stable_feature_flag_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>
          ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div class=\"alert alert-info alert-experimental\" role=\"alert\">
              ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New features are available. Feel free to try them out!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
            </div>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["stableFeatureFlagsForm"] ?? null), "feature_flags", [], "any", false, false, false, 45), 'widget');
        echo "
          </div>
        </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["stableFeatureFlagsForm"] ?? null), "submit", [], "any", false, false, false, 50), 'widget');
        echo "
            </div>
          </div>
      </div>
    ";
    }

    // line 61
    public function block_beta_feature_flag_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>
          ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Experimental features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div class=\"alert medium-alert alert-warning\" role=\"alert\">
              ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Testing a feature before its official release can be exciting. However, you must be aware of the potential risks of such experiments:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
              <ul>
                <li>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Experimental features are still under development. Enabling them could therefore have unintended consequences and cause data loss.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
                <li>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In any case, you should never experiment in production.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
              </ul>
            </div>
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["betaFeatureFlagsForm"] ?? null), "feature_flags", [], "any", false, false, false, 77), 'widget');
        echo "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            ";
        // line 82
        $context["widgetVars"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["betaFeatureFlagsForm"] ?? null), "submit", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), ["attr" => ["data-modal-title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to enable this experimental feature?", [], "Admin.Advparameters.Notification"), "data-modal-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to enable a feature that is not stable yet. This should only be done in a test environment or in full knowledge of the potential risks.", [], "Admin.Advparameters.Notification"), "data-modal-apply" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable", [], "Admin.Actions"), "data-modal-cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions")]]);
        // line 88
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["betaFeatureFlagsForm"] ?? null), "submit", [], "any", false, false, false, 88), 'widget', ($context["widgetVars"] ?? null));
        echo "
          </div>
        </div>
      </div>
    ";
    }

    // line 97
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/feature_flag.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 100,  193 => 98,  189 => 97,  179 => 88,  177 => 82,  169 => 77,  163 => 74,  159 => 73,  154 => 71,  145 => 65,  140 => 62,  136 => 61,  127 => 50,  119 => 45,  114 => 43,  105 => 37,  100 => 34,  96 => 33,  88 => 93,  86 => 61,  81 => 60,  78 => 59,  75 => 57,  69 => 55,  67 => 33,  62 => 32,  59 => 31,  56 => 29,  53 => 28,  49 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig");
    }
}
