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

/* @PrestaShop/Admin/Multistore/header.html.twig */
class __TwigTemplate_14f468a29cfff925a815f2a3ed99116d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'multistore_header' => [$this, 'block_multistore_header'],
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Multistore/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Multistore/header.html.twig"));

        // line 25
        $this->displayBlock('multistore_header', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_multistore_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_header"));

        // line 26
        echo "  ";
        if (((isset($context["isMultistoreUsed"]) || array_key_exists("isMultistoreUsed", $context) ? $context["isMultistoreUsed"] : (function () { throw new RuntimeError('Variable "isMultistoreUsed" does not exist.', 26, $this->source); })()) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26)))) {
            // line 27
            echo "    <div
        id=\"header-multishop\"
        class=\"header-multishop";
            // line 29
            if ((isset($context["isAllShopContext"]) || array_key_exists("isAllShopContext", $context) ? $context["isAllShopContext"] : (function () { throw new RuntimeError('Variable "isAllShopContext" does not exist.', 29, $this->source); })())) {
                echo " header-multishop-allshops";
            } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 29, $this->source); })()), "color", [], "any", false, false, false, 29))) {
                echo " header-multishop-default";
            }
            if (((isset($context["isTitleDark"]) || array_key_exists("isTitleDark", $context) ? $context["isTitleDark"] : (function () { throw new RuntimeError('Variable "isTitleDark" does not exist.', 29, $this->source); })()) === true)) {
                echo " header-multishop-dark";
            } else {
                echo " header-multishop-bright";
            }
            echo "\"
        ";
            // line 30
            if ((isset($context["isShopContext"]) || array_key_exists("isShopContext", $context) ? $context["isShopContext"] : (function () { throw new RuntimeError('Variable "isShopContext" does not exist.', 30, $this->source); })())) {
                echo "data-shop-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\"";
            } elseif ((isset($context["isGroupContext"]) || array_key_exists("isGroupContext", $context) ? $context["isGroupContext"] : (function () { throw new RuntimeError('Variable "isGroupContext" does not exist.', 30, $this->source); })())) {
                echo "data-group-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\"";
            } else {
                echo "data-all-shops=\"1\"";
            }
            // line 31
            echo "        ";
            if ((isset($context["colorConfigLink"]) || array_key_exists("colorConfigLink", $context) ? $context["colorConfigLink"] : (function () { throw new RuntimeError('Variable "colorConfigLink" does not exist.', 31, $this->source); })())) {
                echo "data-header-color-notification=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize your multistore header, [1]pick a color[/1] for this store context.", ["[1]" => (("<a href=\"" . (isset($context["colorConfigLink"]) || array_key_exists("colorConfigLink", $context) ? $context["colorConfigLink"] : (function () { throw new RuntimeError('Variable "colorConfigLink" does not exist.', 31, $this->source); })())) . "\">"), "[/1]" => "</a>"], "Admin.Navigation.Header"), "html", null, true);
                echo "\"";
            }
            // line 32
            echo "        data-checkbox-notification=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.", [], "Admin.Navigation.Header") . " "), "html", null, true);
            echo "\"
    >
      <div class=\"header-multishop-top-bar\"";
            // line 34
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 34, $this->source); })()), "color", [], "any", false, false, false, 34))) {
                echo " style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 34, $this->source); })()), "color", [], "any", false, false, false, 34), "html", null, true);
                echo ";\"";
            }
            echo ">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          ";
            // line 36
            if ((isset($context["isShopContext"]) || array_key_exists("isShopContext", $context) ? $context["isShopContext"] : (function () { throw new RuntimeError('Variable "isShopContext" does not exist.', 36, $this->source); })())) {
                // line 37
                echo "            ";
                $this->loadTemplate("@PrestaShop/Admin/Multistore/shop_icon.html.twig", "@PrestaShop/Admin/Multistore/header.html.twig", 37)->display($context);
                // line 38
                echo "          ";
            } else {
                // line 39
                echo "            ";
                $this->loadTemplate("@PrestaShop/Admin/Multistore/multi_shops_icon.html.twig", "@PrestaShop/Admin/Multistore/header.html.twig", 39)->display($context);
                // line 40
                echo "          ";
            }
            // line 41
            echo "
          <h2 class=\"header-multishop-title\">
            ";
            // line 43
            if ((isset($context["isGroupContext"]) || array_key_exists("isGroupContext", $context) ? $context["isGroupContext"] : (function () { throw new RuntimeError('Variable "isGroupContext" does not exist.', 43, $this->source); })())) {
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " "), "html", null, true);
                echo " ";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      ";
            // line 52
            if ((isset($context["isShopContext"]) || array_key_exists("isShopContext", $context) ? $context["isShopContext"] : (function () { throw new RuntimeError('Variable "isShopContext" does not exist.', 52, $this->source); })())) {
                // line 53
                echo "        <div class=\"header-multishop-right\">
          ";
                // line 54
                $this->displayBlock('multishop_header_right', $context, $blocks);
                // line 57
                echo "        </div>
      ";
            }
            // line 59
            echo "
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            ";
            // line 63
            $this->displayBlock('search_shops', $context, $blocks);
            // line 71
            echo "
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
                ";
            // line 73
            $this->displayBlock('all_shops_item', $context, $blocks);
            // line 85
            echo "
              ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["groupList"]) || array_key_exists("groupList", $context) ? $context["groupList"] : (function () { throw new RuntimeError('Variable "groupList" does not exist.', 86, $this->source); })()), function ($__group__) use ($context, $macros) { $context["group"] = $__group__; return  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 86)); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 87
                echo "                <li class=\"multishop-modal-group-item multishop-modal-item";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 87)) {
                    echo " first-group-item";
                }
                echo "\">
                  ";
                // line 88
                $this->displayBlock('shop_group_item', $context, $blocks);
                // line 95
                echo "                </li>

                ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 97));
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
                foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                    // line 98
                    echo "                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    ";
                    // line 99
                    $this->displayBlock('shop_item', $context, $blocks);
                    // line 113
                    echo "                  </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "              ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/multistore_header.bundle.js"), "html", null, true);
            echo "\"></script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_multishop_header_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multishop_header_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multishop_header_right"));

        // line 55
        echo "          <a class=\"header-multishop-view-action\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 55, $this->source); })()), "getBaseLink", [0 => twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)], "method", false, false, false, 55), "html", null, true);
        echo "\" target=\"_blank\" rel=\"nofollow\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my shop", [], "Admin.Navigation.Header"), "html", null, true);
        echo " <i class=\"material-icons\">visibility</i></a>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_search_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_shops"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_shops"));

        // line 64
        echo "            ";
        if (((isset($context["lockedToAllShopContext"]) || array_key_exists("lockedToAllShopContext", $context) ? $context["lockedToAllShopContext"] : (function () { throw new RuntimeError('Variable "lockedToAllShopContext" does not exist.', 64, $this->source); })()) == false)) {
            // line 65
            echo "            <div class=\"multishop-modal-search-container\">
              <i class=\"material-icons\">search</i>
              <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search shop name", [], "Admin.Navigation.Header"), "html", null, true);
            echo "\" data-no-results=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found for", [], "Admin.Global"), "html", null, true);
            echo "\" data-searching=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for", [], "Admin.Global"), "html", null, true);
            echo "\">
            </div>
            ";
        }
        // line 70
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_all_shops_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_shops_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_shops_item"));

        // line 74
        echo "                <li class=\"multishop-modal-all multishop-modal-item\">
                  ";
        // line 75
        if ((isset($context["isAllShopContext"]) || array_key_exists("isAllShopContext", $context) ? $context["isAllShopContext"] : (function () { throw new RuntimeError('Variable "isAllShopContext" does not exist.', 75, $this->source); })())) {
            // line 76
            echo "                    <i class=\"material-icons\">check</i>
                  ";
        } else {
            // line 78
            echo "                    <span class=\"multishop-modal-color\" style=\"background-color:#25b9d7;\"></span>
                  ";
        }
        // line 80
        echo "                  <a class=\"multishop-modal-all-name\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateUrl(), "html", null, true);
        echo "\">
                    <span>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All shops", [], "Admin.Global"), "html", null, true);
        echo "</span>
                  </a>
                </li>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_shop_group_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_group_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_group_item"));

        // line 89
        echo "                  <span class=\"multishop-modal-color-container";
        if (((isset($context["isGroupContext"]) || array_key_exists("isGroupContext", $context) ? $context["isGroupContext"] : (function () { throw new RuntimeError('Variable "isGroupContext" does not exist.', 89, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89) == twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)))) {
            echo " multishop-modal-color-check";
        }
        echo "\">
                    <i class=\"material-icons\">check</i>
                    <a class=\"multishop-modal-color\"";
        // line 91
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 91, $this->source); })()), "color", [], "any", false, false, false, 91))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 91, $this->source); })()), "color", [], "any", false, false, false, 91), "html", null, true);
            echo ";\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopGroup", true, ["id_shop_group" => twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91), "updateshop_group" => true]), "html", null, true);
        echo "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        echo "\" data-original-title=\"\" title=\"\"></a>
                  </span>
                  <a class=\"multishop-modal-group-name\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateGroupUrl((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 93, $this->source); })())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93)), "html", null, true);
        echo "</a>
                  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_shop_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_item"));

        // line 100
        echo "                    <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container";
        // line 101
        if (((isset($context["isShopContext"]) || array_key_exists("isShopContext", $context) ? $context["isShopContext"] : (function () { throw new RuntimeError('Variable "isShopContext" does not exist.', 101, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new RuntimeError('Variable "currentContext" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101) == twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)))) {
            echo " multishop-modal-color-check";
        }
        echo "\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"";
        // line 103
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 103, $this->source); })()), "color", [], "any", false, false, false, 103))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 103, $this->source); })()), "color", [], "any", false, false, false, 103), "html", null, true);
            echo ";\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShop", true, ["shop_id" => twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103), "updateshop" => true]), "html", null, true);
        echo "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        echo "\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name";
        // line 105
        if ((twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 105, $this->source); })()), "hasMainUrl", [], "method", false, false, false, 105) == false)) {
            echo " multishop-modal-no-url\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "</a>";
        } else {
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl((isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 105, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "</a>";
        }
        // line 106
        echo "                    </div>
                    ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 107, $this->source); })()), "hasMainUrl", [], "method", false, false, false, 107)) {
            // line 108
            echo "                      <a class=\"multishop-modal-shop-view\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 108, $this->source); })()), "getBaseLink", [0 => twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)], "method", false, false, false, 108), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noreferrer\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my shop", [], "Admin.Navigation.Header"), "html", null, true);
            echo " <i class=\"material-icons\">visibility</i></a>
                    ";
        } else {
            // line 110
            echo "                      <a class=\"multishop-modal-shop-view\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => twig_get_attribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110), "addshop_url" => 1]), "html", null, true);
            echo "\" rel=\"noreferrer\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            echo " <i class=\"material-icons\">visibility</i></a>
                    ";
        }
        // line 112
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Multistore/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  501 => 112,  493 => 110,  485 => 108,  483 => 107,  480 => 106,  468 => 105,  455 => 103,  448 => 101,  445 => 100,  435 => 99,  421 => 93,  408 => 91,  400 => 89,  390 => 88,  376 => 81,  371 => 80,  367 => 78,  363 => 76,  361 => 75,  358 => 74,  348 => 73,  338 => 70,  328 => 67,  324 => 65,  321 => 64,  311 => 63,  296 => 55,  286 => 54,  273 => 122,  265 => 116,  251 => 115,  236 => 113,  234 => 99,  231 => 98,  214 => 97,  210 => 95,  208 => 88,  201 => 87,  184 => 86,  181 => 85,  179 => 73,  175 => 71,  173 => 63,  167 => 59,  163 => 57,  161 => 54,  158 => 53,  156 => 52,  140 => 43,  136 => 41,  133 => 40,  130 => 39,  127 => 38,  124 => 37,  122 => 36,  113 => 34,  107 => 32,  100 => 31,  88 => 30,  75 => 29,  71 => 27,  68 => 26,  49 => 25,);
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
{% block multistore_header %}
  {% if isMultistoreUsed and app.request is not null %}
    <div
        id=\"header-multishop\"
        class=\"header-multishop{% if isAllShopContext %} header-multishop-allshops{% elseif currentContext.color is empty %} header-multishop-default{% endif %}{% if isTitleDark is same as (true) %} header-multishop-dark{% else %} header-multishop-bright{% endif %}\"
        {% if isShopContext %}data-shop-id=\"{{ currentContext.id }}\"{% elseif isGroupContext %}data-group-id=\"{{ currentContext.id }}\"{% else %}data-all-shops=\"1\"{% endif %}
        {% if colorConfigLink %}data-header-color-notification=\"{{ \"Customize your multistore header, [1]pick a color[/1] for this store context.\"|trans({'[1]': '<a href=\"' ~ colorConfigLink ~ '\">', '[/1]': '</a>'}, 'Admin.Navigation.Header') }}\"{% endif %}
        data-checkbox-notification=\"{{ \"To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.\"|trans({}, 'Admin.Navigation.Header') ~ ' '}}\"
    >
      <div class=\"header-multishop-top-bar\"{% if currentContext.color is not empty %} style=\"background-color: {{currentContext.color}};\"{% endif %}>
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          {% if isShopContext %}
            {% include '@PrestaShop/Admin/Multistore/shop_icon.html.twig' %}
          {% else %}
            {% include '@PrestaShop/Admin/Multistore/multi_shops_icon.html.twig' %}
          {% endif %}

          <h2 class=\"header-multishop-title\">
            {% if isGroupContext %}{{ \"Group\"|trans({}, 'Admin.Global') ~ ' '}} {% endif %}{{ currentContext.name }}
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      {% if isShopContext %}
        <div class=\"header-multishop-right\">
          {% block multishop_header_right %}
          <a class=\"header-multishop-view-action\" href=\"{{ link.getBaseLink(currentContext.id) }}\" target=\"_blank\" rel=\"nofollow\">{{ \"View my shop\"|trans({}, 'Admin.Navigation.Header') }} <i class=\"material-icons\">visibility</i></a>
          {% endblock %}
        </div>
      {% endif %}

      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            {% block search_shops %}
            {% if lockedToAllShopContext == false %}
            <div class=\"multishop-modal-search-container\">
              <i class=\"material-icons\">search</i>
              <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"{{ 'Search shop name'|trans({}, 'Admin.Navigation.Header') }}\" data-no-results=\"{{ \"No results found for\"|trans({}, 'Admin.Global') }}\" data-searching=\"{{ \"Searching for\"|trans({}, 'Admin.Global') }}\">
            </div>
            {% endif %}
            {% endblock %}

            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
                {% block all_shops_item %}
                <li class=\"multishop-modal-all multishop-modal-item\">
                  {% if isAllShopContext %}
                    <i class=\"material-icons\">check</i>
                  {% else %}
                    <span class=\"multishop-modal-color\" style=\"background-color:#25b9d7;\"></span>
                  {% endif %}
                  <a class=\"multishop-modal-all-name\" href=\"{{ multistore_url() }}\">
                    <span>{{ \"All shops\"|trans({}, 'Admin.Global') }}</span>
                  </a>
                </li>
                {% endblock %}

              {% for group in groupList|filter(group => group.shops is not empty) %}
                <li class=\"multishop-modal-group-item multishop-modal-item{% if loop.first %} first-group-item{% endif %}\">
                  {% block shop_group_item %}
                  <span class=\"multishop-modal-color-container{% if isGroupContext and currentContext.id == group.id %} multishop-modal-color-check{% endif %}\">
                    <i class=\"material-icons\">check</i>
                    <a class=\"multishop-modal-color\"{% if group.color is not empty %} style=\"background-color: {{group.color}};\"{% endif %} href=\"{{ getAdminLink('AdminShopGroup', true, {'id_shop_group' : group.id, 'updateshop_group' : true}) }}\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ \"Edit color\"|trans({}, 'Admin.Global') }}\" data-original-title=\"\" title=\"\"></a>
                  </span>
                  <a class=\"multishop-modal-group-name\" href=\"{{ multistore_group_url(group) }}\">{{ \"Group\"|trans({}, 'Admin.Global') ~ ' ' ~ group.name }}</a>
                  {% endblock %}
                </li>

                {% for shop in group.shops %}
                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    {% block shop_item %}
                    <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container{% if isShopContext and currentContext.id == shop.id %} multishop-modal-color-check{% endif %}\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"{% if shop.color is not empty %} style=\"background-color: {{shop.color}};\"{% endif %} href=\"{{ getAdminLink('AdminShop', true, {'shop_id' : shop.id, 'updateshop' : true}) }}\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ \"Edit color\"|trans({}, 'Admin.Global') }}\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name{% if shop.hasMainUrl() == false %} multishop-modal-no-url\">{{ shop.name }}</a>{% else %}\" href=\"{{ multistore_shop_url(shop) }}\">{{ shop.name }}</a>{% endif %}
                    </div>
                    {% if shop.hasMainUrl() %}
                      <a class=\"multishop-modal-shop-view\" href=\"{{ link.getBaseLink(shop.id) }}\" target=\"_blank\" rel=\"noreferrer\">{{ \"View my shop\"|trans({}, 'Admin.Navigation.Header') }} <i class=\"material-icons\">visibility</i></a>
                    {% else %}
                      <a class=\"multishop-modal-shop-view\" href=\"{{ getAdminLink('AdminShopUrl', true, {'shop_id' : shop.id, 'addshop_url' : 1}) }}\" rel=\"noreferrer\">{{ \"Configure URL\"|trans({}, 'Admin.Actions') }} <i class=\"material-icons\">visibility</i></a>
                    {% endif %}
                    {% endblock %}
                  </li>
                {% endfor %}
              {% endfor %}
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"{{ asset('themes/new-theme/public/multistore_header.bundle.js') }}\"></script>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Multistore/header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Multistore/header.html.twig");
    }
}
