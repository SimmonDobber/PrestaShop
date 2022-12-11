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

/* @PrestaShop/Admin/TwigTemplateForm/multishop.html.twig */
class __TwigTemplate_931e902c787d389f548dadf94b0594c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 25
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", 25);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'shop_selector_widget' => [$this, 'block_shop_selector_widget'],
                'shop_option_checkbox_widget' => [$this, 'block_shop_option_checkbox_widget'],
                'shop_option_radio_widget' => [$this, 'block_shop_option_radio_widget'],
                'shop_selector_item_name' => [$this, 'block_shop_selector_item_name'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('shop_selector_widget', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('shop_option_checkbox_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('shop_option_radio_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('shop_selector_item_name', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_shop_selector_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_selector_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_selector_widget"));

        // line 28
        echo "  <div class=\"shop-selector-content shop-selector\" data-multiple=\"";
        echo twig_escape_filter($this->env, (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\">
    <ul class=\"shop-selector-group-list\">
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "choices", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["groupName"] => $context["groupShops"]) {
            // line 31
            echo "        <li class=\"shop-selector-group-item shop-selector-item\">
          ";
            // line 32
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . $context["groupName"]), "html", null, true);
            echo "
        </li>

        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupShops"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["shopChoice"]) {
                // line 36
                echo "          ";
                $context["shop"] = twig_get_attribute($this->env, $this->source, $context["shopChoice"], "data", [], "any", false, false, false, 36);
                // line 37
                echo "
          <li class=\"shop-selector-shop-item shop-selector-item";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38) == (isset($context["contextShopId"]) || array_key_exists("contextShopId", $context) ? $context["contextShopId"] : (function () { throw new RuntimeError('Variable "contextShopId" does not exist.', 38, $this->source); })()))) {
                    echo " selected-shop current-shop disabled";
                }
                echo "\" data-shop-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
            ";
                // line 39
                if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 39, $this->source); })())) {
                    // line 40
                    echo "              ";
                    $this->displayBlock("shop_option_checkbox_widget", $context, $blocks);
                    echo "
            ";
                } else {
                    // line 42
                    echo "              ";
                    $this->displayBlock("shop_option_radio_widget", $context, $blocks);
                    echo "
            ";
                }
                // line 44
                echo "          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopChoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['groupShops'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </ul>

    ";
        // line 49
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 49, $this->source); })()), ["class" => "d-none shop-selector-input"]);
        // line 50
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_shop_option_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_option_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_option_checkbox_widget"));

        // line 55
        echo "  <div class=\"md-checkbox md-checkbox-inline\">
    <label class=\"shop-selector-item-label\">
      <input
        type=\"checkbox\" data-value-type=\"boolean\" class=\"form-check-input\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        echo "\"
        ";
        // line 59
        if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice((isset($context["shopChoice"]) || array_key_exists("shopChoice", $context) ? $context["shopChoice"] : (function () { throw new RuntimeError('Variable "shopChoice" does not exist.', 59, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 59, $this->source); })()))) {
            echo "checked";
        }
        // line 60
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60) == (isset($context["contextShopId"]) || array_key_exists("contextShopId", $context) ? $context["contextShopId"] : (function () { throw new RuntimeError('Variable "contextShopId" does not exist.', 60, $this->source); })()))) {
            echo "disabled=\"disabled\"";
        }
        // line 61
        echo "      />
      <i class=\"md-checkbox-control\"></i>
      ";
        // line 63
        $this->displayBlock("shop_selector_item_name", $context, $blocks);
        echo "
    </label>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_shop_option_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_option_radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_option_radio_widget"));

        // line 69
        echo "  ";
        $this->displayBlock("shop_selector_item_name", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_shop_selector_item_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_selector_item_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_selector_item_name"));

        // line 73
        echo "  <div class=\"shop-selector-item-name\">
    <span class=\"shop-selector-color-container\">
      <span class=\"shop-selector-color\"";
        // line 75
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 75, $this->source); })()), "color", [], "any", false, false, false, 75))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 75, $this->source); })()), "color", [], "any", false, false, false, 75), "html", null, true);
            echo ";\"";
        }
        echo "></span>
    </span>
    ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "
    ";
        // line 78
        if ( !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "      <i class=\"material-icons\">arrow_forward</i>
    ";
        } else {
            // line 81
            echo "      <span class=\"shop-selector-status\" data-added-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Added", [], "Admin.Global"), "html", null, true);
            echo "\" data-removed-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Removed", [], "Admin.Global"), "html", null, true);
            echo "\">
        ";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82) == (isset($context["contextShopId"]) || array_key_exists("contextShopId", $context) ? $context["contextShopId"] : (function () { throw new RuntimeError('Variable "contextShopId" does not exist.', 82, $this->source); })()))) {
                // line 83
                echo "          ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current shop", [], "Admin.Global"), "html", null, true);
                echo "
        ";
            }
            // line 85
            echo "      </span>
    ";
        }
        // line 87
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 87,  319 => 85,  313 => 83,  311 => 82,  304 => 81,  300 => 79,  298 => 78,  294 => 77,  285 => 75,  281 => 73,  271 => 72,  258 => 69,  248 => 68,  234 => 63,  230 => 61,  225 => 60,  221 => 59,  217 => 58,  212 => 55,  202 => 54,  188 => 50,  186 => 49,  182 => 47,  176 => 46,  161 => 44,  155 => 42,  149 => 40,  147 => 39,  139 => 38,  136 => 37,  133 => 36,  116 => 35,  110 => 32,  107 => 31,  103 => 30,  97 => 28,  87 => 27,  77 => 72,  74 => 71,  72 => 68,  69 => 67,  67 => 54,  64 => 53,  62 => 27,  59 => 26,  30 => 25,);
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
{% use 'bootstrap_4_layout.html.twig' %}

{% block shop_selector_widget %}
  <div class=\"shop-selector-content shop-selector\" data-multiple=\"{{ multiple }}\">
    <ul class=\"shop-selector-group-list\">
      {% for groupName, groupShops in form.vars.choices %}
        <li class=\"shop-selector-group-item shop-selector-item\">
          {{ \"Group\"|trans({}, 'Admin.Global') ~ ' ' ~ groupName }}
        </li>

        {% for shopChoice in groupShops %}
          {% set shop = shopChoice.data %}

          <li class=\"shop-selector-shop-item shop-selector-item{% if shop.id == contextShopId %} selected-shop current-shop disabled{% endif %}\" data-shop-id=\"{{ shop.id }}\">
            {% if multiple %}
              {{ block('shop_option_checkbox_widget') }}
            {% else %}
              {{ block('shop_option_radio_widget') }}
            {% endif %}
          </li>
        {% endfor %}
      {% endfor %}
    </ul>

    {% set attr = attr|merge({'class': 'd-none shop-selector-input'}) %}
    {{ block('choice_widget') }}
  </div>
{% endblock %}

{% block shop_option_checkbox_widget %}
  <div class=\"md-checkbox md-checkbox-inline\">
    <label class=\"shop-selector-item-label\">
      <input
        type=\"checkbox\" data-value-type=\"boolean\" class=\"form-check-input\" value=\"{{ shop.id }}\"
        {% if shopChoice is selectedchoice(value) %}checked{% endif %}
        {% if shop.id == contextShopId %}disabled=\"disabled\"{% endif %}
      />
      <i class=\"md-checkbox-control\"></i>
      {{ block('shop_selector_item_name') }}
    </label>
  </div>
{% endblock %}

{% block shop_option_radio_widget %}
  {{ block('shop_selector_item_name') }}
{% endblock %}

{% block shop_selector_item_name %}
  <div class=\"shop-selector-item-name\">
    <span class=\"shop-selector-color-container\">
      <span class=\"shop-selector-color\"{% if shop.color is not empty %} style=\"background-color: {{shop.color}};\"{% endif %}></span>
    </span>
    {{ shop.name }}
    {% if not multiple %}
      <i class=\"material-icons\">arrow_forward</i>
    {% else %}
      <span class=\"shop-selector-status\" data-added-label=\"{{ 'Added'|trans({}, 'Admin.Global') }}\" data-removed-label=\"{{ 'Removed'|trans({}, 'Admin.Global') }}\">
        {% if shop.id == contextShopId %}
          {{ 'Current shop'|trans({}, 'Admin.Global') }}
        {% endif %}
      </span>
    {% endif %}
  </div>
{% endblock %}
", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/multishop.html.twig");
    }
}
