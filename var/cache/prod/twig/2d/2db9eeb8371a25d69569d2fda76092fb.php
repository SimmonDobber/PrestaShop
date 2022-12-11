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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Security/index.html.twig */
class __TwigTemplate_d695f0f0ed3c161b90b2fd0018d5fe2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'administration_form_general' => [$this, 'block_administration_form_general'],
            'administration_form_password_policy' => [$this, 'block_administration_form_password_policy'],
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
        // line 28
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/index.html.twig", 28)->unwrap();
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/index.html.twig", 31)->display($context);
        // line 32
        echo "
  ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_security_general_save")]);
        echo "
    ";
        // line 34
        $this->displayBlock('administration_form_general', $context, $blocks);
        // line 52
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_end');
        echo "

  ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["passwordPolicyForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_security_password_policy_save")]);
        echo "
    ";
        // line 55
        $this->displayBlock('administration_form_password_policy', $context, $blocks);
        // line 89
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["passwordPolicyForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 34
    public function block_administration_form_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General", [], "Admin.Global"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'widget');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'rest');
        echo "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    ";
    }

    // line 55
    public function block_administration_form_password_policy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "      <div class=\"card\" id=\"configuration_fieldset_password_policy\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i> ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password policy", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div class=\"form-group row\">
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["passwordPolicyForm"] ?? null), "minimum_score", [], "any", false, false, false, 63), 'label');
        echo "
              <div class=\"col-sm\">
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["passwordPolicyForm"] ?? null), "minimum_score", [], "any", false, false, false, 65), 'widget');
        echo "
                <small class=\"form-text\">
                  ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scores are integers from 0 to 4.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
                  <ol id=\"help-password-score\">
                    <li>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("0 means the password is extremely easy to guess (within 10^3 guesses). Dictionary words like \"password\" or \"mother\" score 0.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</li>
                    <li>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1 is still very easy to guess (guesses lesser than 10^6). An extra character on a dictionary word can score 1.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</li>
                    <li>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2 is pretty easy to guess (guesses lesser than 10^8). It provides some protection from unthrottled online attacks.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</li>
                    <li>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("3 is safely unguessable (guesses lesser than 10^10). It offers moderate protection from offline slow-hash scenario.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</li>
                    <li>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("4 is very unguessable (guesses greater than or equal to 10^10) and provides strong protection from offline slow-hash scenario.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</li>
                  </ol>
                </small>
              </div>
            </div>
          ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["passwordPolicyForm"] ?? null), 'widget');
        echo "
          ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["passwordPolicyForm"] ?? null), 'rest');
        echo "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Security/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 84,  181 => 79,  177 => 78,  169 => 73,  165 => 72,  161 => 71,  157 => 70,  153 => 69,  148 => 67,  143 => 65,  138 => 63,  130 => 58,  126 => 56,  122 => 55,  113 => 47,  105 => 42,  101 => 41,  94 => 37,  90 => 35,  86 => 34,  79 => 89,  77 => 55,  73 => 54,  67 => 52,  65 => 34,  61 => 33,  58 => 32,  55 => 31,  51 => 30,  46 => 26,  44 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Security/index.html.twig");
    }
}
