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

/* @PrestaShop/Admin/Improve/International/Localization/index.html.twig */
class __TwigTemplate_a8c5e3eda127d597d6af5ade703cd666 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 26);
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
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 30)->display($context);
        // line 31
        echo "
  ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["configurationForm"]) || array_key_exists("configurationForm", $context) ? $context["configurationForm"] : (function () { throw new RuntimeError('Variable "configurationForm" does not exist.', 32, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_localization_configuration_save")]);
        echo "
  ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 33)->display($context);
        // line 34
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["configurationForm"]) || array_key_exists("configurationForm", $context) ? $context["configurationForm"] : (function () { throw new RuntimeError('Variable "configurationForm" does not exist.', 34, $this->source); })()), 'form_end');
        echo "

  ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["localUnitsForm"]) || array_key_exists("localUnitsForm", $context) ? $context["localUnitsForm"] : (function () { throw new RuntimeError('Variable "localUnitsForm" does not exist.', 36, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_localization_local_units_save")]);
        echo "
  ";
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 37)->display($context);
        // line 38
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["localUnitsForm"]) || array_key_exists("localUnitsForm", $context) ? $context["localUnitsForm"] : (function () { throw new RuntimeError('Variable "localUnitsForm" does not exist.', 38, $this->source); })()), 'form_end');
        echo "

  ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["advancedForm"]) || array_key_exists("advancedForm", $context) ? $context["advancedForm"] : (function () { throw new RuntimeError('Variable "advancedForm" does not exist.', 40, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_localization_advanced_save")]);
        echo "
  ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 41)->display($context);
        // line 42
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["advancedForm"]) || array_key_exists("advancedForm", $context) ? $context["advancedForm"] : (function () { throw new RuntimeError('Variable "advancedForm" does not exist.', 42, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/localization.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  129 => 47,  119 => 46,  105 => 42,  103 => 41,  99 => 40,  93 => 38,  91 => 37,  87 => 36,  81 => 34,  79 => 33,  75 => 32,  72 => 31,  69 => 30,  59 => 29,  36 => 26,);
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
{% trans_default_domain 'Admin.International.Feature' %}

{% block content %}
  {% include '@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig' %}

  {{ form_start(configurationForm, {'action': path('admin_localization_configuration_save')}) }}
  {% include '@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig' %}
  {{ form_end(configurationForm) }}

  {{ form_start(localUnitsForm, {'action': path('admin_localization_local_units_save')}) }}
  {% include '@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig' %}
  {{ form_end(localUnitsForm) }}

  {{ form_start(advancedForm, {'action': path('admin_localization_advanced_save')}) }}
  {% include '@PrestaShop/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig' %}
  {{ form_end(advancedForm) }}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/localization.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Localization/index.html.twig");
    }
}
