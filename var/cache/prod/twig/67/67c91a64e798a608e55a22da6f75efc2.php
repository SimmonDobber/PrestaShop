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

/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_452e2fcd25e0372260b08d1f0c160e99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'product_catalog_filters' => [$this, 'block_product_catalog_filters'],
            'product_catalog_tools' => [$this, 'block_product_catalog_tools'],
            'product_catalog_form' => [$this, 'block_product_catalog_form'],
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
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["categories"] ?? null), [0 => "@PrestaShop/Admin/Product/Themes/categories_theme.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product_catalog" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/catalog.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "  <div class=\"products-catalog card\">

    ";
        // line 45
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("legacy_block_kpi", ["kpi_controller" => "AdminProductsController"]);
        echo "

    <div class=\"content card-body\">

      ";
        // line 49
        if (twig_length_filter($this->env, ($context["permission_error"] ?? null))) {
            // line 50
            echo "          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              ";
            // line 55
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? null), "html", null, true);
            echo "
            </p>
          </div>
      ";
        }
        // line 59
        echo "
      <div class=\"d-flex\">
        ";
        // line 61
        $this->displayBlock('product_catalog_filters', $context, $blocks);
        // line 70
        echo "        ";
        $this->displayBlock('product_catalog_tools', $context, $blocks);
        // line 73
        echo "      </div>

      ";
        // line 75
        $this->displayBlock('product_catalog_form', $context, $blocks);
        // line 99
        echo "
    </div>
  </div>

  ";
        // line 104
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 104, "2012617762")->display(twig_array_merge($context, ["id" => "catalog_duplicate_all_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_duplicate_all_progression", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 123
        echo "

  ";
        // line 126
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 126, "1020268311")->display(twig_array_merge($context, ["id" => "catalog_activate_all_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_activate_all_progression", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 145
        echo "

  ";
        // line 148
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 148, "1198095897")->display(twig_array_merge($context, ["id" => "catalog_deactivate_all_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_deactivate_all_progression", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 167
        echo "

  ";
        // line 170
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 170, "703846055")->display(twig_array_merge($context, ["id" => "catalog_delete_all_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_delete_all_progression", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 189
        echo "

  ";
        // line 192
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 192, "461239057")->display(twig_array_merge($context, ["id" => "catalog_deletion_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete products?", [], "Admin.Catalog.Feature"), "closable" => true, "closeLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "value" => "confirm", "class" => "btn btn-danger btn-lg"]]]));
        // line 210
        echo "
  ";
        // line 211
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 211, "1914908282")->display(twig_array_merge($context, ["id" => "catalog_sql_query_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg"]]]));
        // line 231
        echo "
";
    }

    // line 61
    public function block_product_catalog_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/filters.html.twig", ["limit" =>         // line 63
($context["limit"] ?? null), "offset" =>         // line 64
($context["offset"] ?? null), "orderBy" =>         // line 65
($context["orderBy"] ?? null), "sortOrder" =>         // line 66
($context["sortOrder"] ?? null)]);
        // line 68
        echo "
        ";
    }

    // line 70
    public function block_product_catalog_tools($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/tools.html.twig", ["import_link" => ($context["import_link"] ?? null)]);
        echo "
        ";
    }

    // line 75
    public function block_product_catalog_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Forms/form_products.html.twig", ["limit" =>         // line 77
($context["limit"] ?? null), "orderBy" =>         // line 78
($context["orderBy"] ?? null), "offset" =>         // line 79
($context["offset"] ?? null), "sortOrder" =>         // line 80
($context["sortOrder"] ?? null), "filter_category" =>         // line 81
($context["filter_category"] ?? null), "filter_column_id_product" =>         // line 82
($context["filter_column_id_product"] ?? null), "filter_column_name" =>         // line 83
($context["filter_column_name"] ?? null), "filter_column_reference" =>         // line 84
($context["filter_column_reference"] ?? null), "filter_column_name_category" =>         // line 85
($context["filter_column_name_category"] ?? null), "filter_column_price" =>         // line 86
($context["filter_column_price"] ?? null), "filter_column_sav_quantity" =>         // line 87
($context["filter_column_sav_quantity"] ?? null), "filter_column_active" =>         // line 88
($context["filter_column_active"] ?? null), "has_category_filter" =>         // line 89
($context["has_category_filter"] ?? null), "activate_drag_and_drop" =>         // line 90
($context["activate_drag_and_drop"] ?? null), "products" =>         // line 91
($context["products"] ?? null), "last_sql" =>         // line 92
($context["last_sql"] ?? null), "product_count_filtered" =>         // line 93
($context["product_count_filtered"] ?? null), "pagination_parameters" =>         // line 94
($context["pagination_parameters"] ?? null), "pagination_limit_choices" =>         // line 95
($context["pagination_limit_choices"] ?? null)]);
        // line 97
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 97,  244 => 95,  243 => 94,  242 => 93,  241 => 92,  240 => 91,  239 => 90,  238 => 89,  237 => 88,  236 => 87,  235 => 86,  234 => 85,  233 => 84,  232 => 83,  231 => 82,  230 => 81,  229 => 80,  228 => 79,  227 => 78,  226 => 77,  224 => 76,  220 => 75,  213 => 71,  209 => 70,  204 => 68,  202 => 66,  201 => 65,  200 => 64,  199 => 63,  197 => 62,  193 => 61,  188 => 231,  186 => 211,  183 => 210,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  137 => 70,  135 => 61,  131 => 59,  124 => 55,  117 => 50,  115 => 49,  108 => 45,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  73 => 34,  69 => 33,  63 => 30,  58 => 29,  54 => 28,  49 => 25,  47 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_452e2fcd25e0372260b08d1f0c160e99___2012617762 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 104
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 104);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "      <div class=\"modal-body\">
        ";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplication in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplication failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 118,  310 => 116,  307 => 115,  303 => 114,  292 => 104,  246 => 97,  244 => 95,  243 => 94,  242 => 93,  241 => 92,  240 => 91,  239 => 90,  238 => 89,  237 => 88,  236 => 87,  235 => 86,  234 => 85,  233 => 84,  232 => 83,  231 => 82,  230 => 81,  229 => 80,  228 => 79,  227 => 78,  226 => 77,  224 => 76,  220 => 75,  213 => 71,  209 => 70,  204 => 68,  202 => 66,  201 => 65,  200 => 64,  199 => 63,  197 => 62,  193 => 61,  188 => 231,  186 => 211,  183 => 210,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  137 => 70,  135 => 61,  131 => 59,  124 => 55,  117 => 50,  115 => 49,  108 => 45,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  73 => 34,  69 => 33,  63 => 30,  58 => 29,  54 => 28,  49 => 25,  47 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_452e2fcd25e0372260b08d1f0c160e99___1020268311 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 126
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 126);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 136
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "      <div class=\"modal-body\">
        ";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 140,  382 => 138,  379 => 137,  375 => 136,  364 => 126,  315 => 118,  310 => 116,  307 => 115,  303 => 114,  292 => 104,  246 => 97,  244 => 95,  243 => 94,  242 => 93,  241 => 92,  240 => 91,  239 => 90,  238 => 89,  237 => 88,  236 => 87,  235 => 86,  234 => 85,  233 => 84,  232 => 83,  231 => 82,  230 => 81,  229 => 80,  228 => 79,  227 => 78,  226 => 77,  224 => 76,  220 => 75,  213 => 71,  209 => 70,  204 => 68,  202 => 66,  201 => 65,  200 => 64,  199 => 63,  197 => 62,  193 => 61,  188 => 231,  186 => 211,  183 => 210,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  137 => 70,  135 => 61,  131 => 59,  124 => 55,  117 => 50,  115 => 49,  108 => 45,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  73 => 34,  69 => 33,  63 => 30,  58 => 29,  54 => 28,  49 => 25,  47 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_452e2fcd25e0372260b08d1f0c160e99___1198095897 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 148
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 148);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 158
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "      <div class=\"modal-body\">
        ";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 162,  454 => 160,  451 => 159,  447 => 158,  436 => 148,  387 => 140,  382 => 138,  379 => 137,  375 => 136,  364 => 126,  315 => 118,  310 => 116,  307 => 115,  303 => 114,  292 => 104,  246 => 97,  244 => 95,  243 => 94,  242 => 93,  241 => 92,  240 => 91,  239 => 90,  238 => 89,  237 => 88,  236 => 87,  235 => 86,  234 => 85,  233 => 84,  232 => 83,  231 => 82,  230 => 81,  229 => 80,  228 => 79,  227 => 78,  226 => 77,  224 => 76,  220 => 75,  213 => 71,  209 => 70,  204 => 68,  202 => 66,  201 => 65,  200 => 64,  199 => 63,  197 => 62,  193 => 61,  188 => 231,  186 => 211,  183 => 210,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  137 => 70,  135 => 61,  131 => 59,  124 => 55,  117 => 50,  115 => 49,  108 => 45,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  73 => 34,  69 => 33,  63 => 30,  58 => 29,  54 => 28,  49 => 25,  47 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_452e2fcd25e0372260b08d1f0c160e99___703846055 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 170
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 170);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 180
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "      <div class=\"modal-body\">
        ";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deletion in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deletion failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 184,  526 => 182,  523 => 181,  519 => 180,  508 => 170,  459 => 162,  454 => 160,  451 => 159,  447 => 158,  436 => 148,  387 => 140,  382 => 138,  379 => 137,  375 => 136,  364 => 126,  315 => 118,  310 => 116,  307 => 115,  303 => 114,  292 => 104,  246 => 97,  244 => 95,  243 => 94,  242 => 93,  241 => 92,  240 => 91,  239 => 90,  238 => 89,  237 => 88,  236 => 87,  235 => 86,  234 => 85,  233 => 84,  232 => 83,  231 => 82,  230 => 81,  229 => 80,  228 => 79,  227 => 78,  226 => 77,  224 => 76,  220 => 75,  213 => 71,  209 => 70,  204 => 68,  202 => 66,  201 => 65,  200 => 64,  199 => 63,  197 => 62,  193 => 61,  188 => 231,  186 => 211,  183 => 210,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  137 => 70,  135 => 61,  131 => 59,  124 => 55,  117 => 50,  115 => 49,  108 => 45,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  73 => 34,  69 => 33,  63 => 30,  58 => 29,  54 => 28,  49 => 25,  47 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_452e2fcd25e0372260b08d1f0c160e99___461239057 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 192
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 192);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 204
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        echo "      <div class=\"modal-body\">
        ";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("These products will be deleted for good. Please confirm.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 206,  595 => 205,  591 => 204,  580 => 192,  531 => 184,  526 => 182,  523 => 181,  519 => 180,  508 => 170,  459 => 162,  454 => 160,  451 => 159,  447 => 158,  436 => 148,  387 => 140,  382 => 138,  379 => 137,  375 => 136,  364 => 126,  315 => 118,  310 => 116,  307 => 115,  303 => 114,  292 => 104,  246 => 97,  244 => 95,  243 => 94,  242 => 93,  241 => 92,  240 => 91,  239 => 90,  238 => 89,  237 => 88,  236 => 87,  235 => 86,  234 => 85,  233 => 84,  232 => 83,  231 => 82,  230 => 81,  229 => 80,  228 => 79,  227 => 78,  226 => 77,  224 => 76,  220 => 75,  213 => 71,  209 => 70,  204 => 68,  202 => 66,  201 => 65,  200 => 64,  199 => 63,  197 => 62,  193 => 61,  188 => 231,  186 => 211,  183 => 210,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  137 => 70,  135 => 61,  131 => 59,  124 => 55,  117 => 50,  115 => 49,  108 => 45,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  73 => 34,  69 => 33,  63 => 30,  58 => 29,  54 => 28,  49 => 25,  47 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_452e2fcd25e0372260b08d1f0c160e99___1914908282 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 211
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 211);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 222
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? null), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 223,  657 => 222,  646 => 211,  598 => 206,  595 => 205,  591 => 204,  580 => 192,  531 => 184,  526 => 182,  523 => 181,  519 => 180,  508 => 170,  459 => 162,  454 => 160,  451 => 159,  447 => 158,  436 => 148,  387 => 140,  382 => 138,  379 => 137,  375 => 136,  364 => 126,  315 => 118,  310 => 116,  307 => 115,  303 => 114,  292 => 104,  246 => 97,  244 => 95,  243 => 94,  242 => 93,  241 => 92,  240 => 91,  239 => 90,  238 => 89,  237 => 88,  236 => 87,  235 => 86,  234 => 85,  233 => 84,  232 => 83,  231 => 82,  230 => 81,  229 => 80,  228 => 79,  227 => 78,  226 => 77,  224 => 76,  220 => 75,  213 => 71,  209 => 70,  204 => 68,  202 => 66,  201 => 65,  200 => 64,  199 => 63,  197 => 62,  193 => 61,  188 => 231,  186 => 211,  183 => 210,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  137 => 70,  135 => 61,  131 => 59,  124 => 55,  117 => 50,  115 => 49,  108 => 45,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  73 => 34,  69 => 33,  63 => 30,  58 => 29,  54 => 28,  49 => 25,  47 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}
