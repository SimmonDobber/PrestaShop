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

/* @PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig */
class __TwigTemplate_d30d465ad70d2780a9b87561cf22d36e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'preferences_form_general' => [$this, 'block_preferences_form_general'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig"));

        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 27, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["class" => "form", "id" => "configuration_form"]]);
        echo "
  ";
        // line 31
        $this->displayBlock('preferences_form_general', $context, $blocks);
        // line 68
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_preferences_form_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preferences_form_general"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preferences_form_general"));

        // line 32
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General", [], "Admin.Global"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "isSecure", [], "method", false, false, false, 39)) {
            // line 40
            echo "            <div class=\"form-group row\">
              <label class=\"form-control-label \">
                ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable SSL", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                <div class=\"input-group\">
                  <div class=\"form-control-plaintext\">
                    <a class=\"d-block\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["sslUri"]) || array_key_exists("sslUri", $context) ? $context["sslUri"] : (function () { throw new RuntimeError('Variable "sslUri" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\">
                      ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please click here to check if your shop supports HTTPS.", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
                    </a>
                  </div>
                </div>
                <small class=\"form-text\">
                  ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.", [], "Admin.Shopparameters.Help"), "html", null, true);
            echo "
                </small>
              </div>
            </div>
          ";
        }
        // line 58
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 58, $this->source); })()), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-preferences-save-button\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  148 => 58,  140 => 53,  132 => 48,  128 => 47,  120 => 42,  116 => 40,  114 => 39,  107 => 35,  102 => 32,  92 => 31,  79 => 68,  77 => 31,  72 => 30,  62 => 29,  51 => 25,  49 => 27,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Shopparameters.Feature\" %}
{% form_theme generalForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block content %}
  {{ form_start(generalForm, {'attr' : {'class': 'form', 'id': 'configuration_form'} }) }}
  {% block preferences_form_general %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        {{ 'General'|trans({}, 'Admin.Global') }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% if not app.request.isSecure() %}
            <div class=\"form-group row\">
              <label class=\"form-control-label \">
                {{ 'Enable SSL'|trans({}, 'Admin.Shopparameters.Feature') }}
              </label>
              <div class=\"col-sm\">
                <div class=\"input-group\">
                  <div class=\"form-control-plaintext\">
                    <a class=\"d-block\" href=\"{{ sslUri }}\">
                      {{ 'Please click here to check if your shop supports HTTPS.'|trans({}, 'Admin.Shopparameters.Feature') }}
                    </a>
                  </div>
                </div>
                <small class=\"form-text\">
                  {{ 'If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.'|trans({}, 'Admin.Shopparameters.Help') }}
                </small>
              </div>
            </div>
          {% endif %}
          {{ form_widget(generalForm) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-preferences-save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(generalForm) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/preferences.html.twig");
    }
}
