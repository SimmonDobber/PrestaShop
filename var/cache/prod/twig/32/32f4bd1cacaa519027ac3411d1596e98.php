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

/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_5c47df14d1aaedf5c5904e43db1f8fe3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_tabs_container' => [$this, 'block_product_tabs_container'],
            'product_panel_essentials' => [$this, 'block_product_panel_essentials'],
            'product_panel_combinations' => [$this, 'block_product_panel_combinations'],
            'product_panel_shipping' => [$this, 'block_product_panel_shipping'],
            'product_panel_pricing' => [$this, 'block_product_panel_pricing'],
            'product_panel_seo' => [$this, 'block_product_panel_seo'],
            'product_panel_options' => [$this, 'block_product_panel_options'],
            'product_panel_modules' => [$this, 'block_product_panel_modules'],
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
        // line 312
        $context["js_translatable"] = twig_array_merge(["Are you sure to disable variations ? they will all be deleted" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will delete all the combinations. Do you wish to proceed?", [], "Admin.Catalog.Notification")],         // line 314
($context["js_translatable"] ?? null));
        // line 316
        $context["js_translatable"] = twig_array_merge(["Form update success" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings updated.", [], "Admin.Notifications.Success"), "Form update errors" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unable to update settings.", [], "Admin.Notifications.Error"), "Delete" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The file is too large. Maximum size allowed is: [1] MB. The file you are trying to upload is [2] MB.", [], "Admin.Notifications.Error"), ["[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}"]), "Drop images here" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop images here", [], "Admin.Catalog.Feature"), "or select files" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or select files", [], "Admin.Catalog.Feature"), "files recommandations" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recommended size 800 x 800px for default theme.", [], "Admin.Catalog.Feature"), "files recommandations2" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("JPG, GIF, PNG or WebP format.", [], "Admin.Catalog.Feature"), "Cover" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cover", [], "Admin.Catalog.Feature"), "Are you sure you want to delete this item?" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this item?", [], "Admin.Notifications.Warning"), "Quantities" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantities", [], "Admin.Catalog.Feature"), "Combinations" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combinations", [], "Admin.Catalog.Feature"), "Virtual product" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Virtual product", [], "Admin.Catalog.Feature"), "tax incl." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl.", [], "Admin.Catalog.Feature"), "tax excl." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax excl.", [], "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A pack of products can't have combinations.", [], "Admin.Catalog.Notification") . " ") . (($__internal_compile_0 =         // line 332
($context["js_translatable"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["Are you sure to disable variations ? they will all be deleted"] ?? null) : null)), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A virtual product can't have combinations.", [], "Admin.Catalog.Notification") . " ") . (($__internal_compile_1 =         // line 333
($context["js_translatable"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Are you sure to disable variations ? they will all be deleted"] ?? null) : null)), "Are you sure you want to delete the selected item(s)?" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete the selected item(s)?", [], "Admin.Global")],         // line 335
($context["js_translatable"] ?? null));
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "  ";
        $context["hooks"] = $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHooksArray("displayAdminProductsExtra", ["id_product" => ($context["id_product"] ?? null)]);
        // line 34
        echo "  <div class=\"header-toolbar d-print-none\">
    ";
        // line 35
        echo $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension']->getMultistoreHeader();
        echo "
  </div>
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    ";
        // line 39
        if ( !($context["editable"] ?? null)) {
            echo " <fieldset disabled id=\"field-disabled\"> ";
        }
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        $this->displayBlock('product_header', $context, $blocks);
        // line 53
        echo "
    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      ";
        // line 62
        echo "      ";
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 65
        echo "      <div id=\"form_content\" class=\"tab-content\">

        ";
        // line 68
        echo "        ";
        $this->displayBlock('product_panel_essentials', $context, $blocks);
        // line 89
        echo "
        ";
        // line 91
        echo "        ";
        $this->displayBlock('product_panel_combinations', $context, $blocks);
        // line 113
        echo "
        ";
        // line 115
        echo "        ";
        $this->displayBlock('product_panel_shipping', $context, $blocks);
        // line 130
        echo "
        ";
        // line 132
        echo "        ";
        $this->displayBlock('product_panel_pricing', $context, $blocks);
        // line 139
        echo "
        ";
        // line 141
        echo "        ";
        $this->displayBlock('product_panel_seo', $context, $blocks);
        // line 147
        echo "
        ";
        // line 149
        echo "        ";
        $this->displayBlock('product_panel_options', $context, $blocks);
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        $this->displayBlock('product_panel_modules', $context, $blocks);
        // line 231
        echo "      </div>

      ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id_product", [], "any", false, false, false, 233), 'widget');
        echo "
      ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 234), 'widget');
        echo "

    </div>
    ";
        // line 238
        echo "    ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/footer.html.twig", ["preview_link" =>         // line 239
($context["preview_link"] ?? null), "preview_link_deactivate" =>         // line 240
($context["preview_link_deactivate"] ?? null), "is_shop_context" =>         // line 241
($context["is_shop_context"] ?? null), "editable" =>         // line 242
($context["editable"] ?? null), "is_active" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 243
($context["form"] ?? null), "step1", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "value", [], "any", false, false, false, 243), "active", [], "any", false, false, false, 243), "productId" =>         // line 244
($context["id_product"] ?? null)]);
        // line 245
        echo "
    ";
        // line 246
        if ( !($context["editable"] ?? null)) {
            echo " </fieldset> ";
        }
        // line 247
        echo "  </form>


  ";
        // line 250
        $this->loadTemplate("@PrestaShop/Admin/Product/ProductPage/product.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 250, "449752849")->display(twig_array_merge($context, ["id" => "confirmation_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning", [], "Admin.Notifications.Warning"), "closable" => false, "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"], 1 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "class" => "btn btn-primary btn-lg continue"]]]));
        // line 271
        echo "
";
    }

    // line 41
    public function block_product_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "      ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/header.html.twig", ["formName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["form"] ?? null), "step1", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "formType" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["form"] ?? null), "step1", [], "any", false, false, false, 44), "type_product", [], "any", false, false, false, 44), "is_multishop_context" =>         // line 45
($context["is_multishop_context"] ?? null), "languages" =>         // line 46
($context["languages"] ?? null), "help_link" =>         // line 47
($context["help_link"] ?? null), "stats_link" =>         // line 48
($context["stats_link"] ?? null), "isCreationMode" =>         // line 49
($context["isCreationMode"] ?? null)]);
        // line 51
        echo "
    ";
    }

    // line 62
    public function block_product_tabs_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/tabs.html.twig", ["hooks" => ($context["hooks"] ?? null)]);
        echo "
      ";
    }

    // line 68
    public function block_product_panel_essentials($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "          ";
        $context["formQuantityShortcut"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "step1", [], "any", false, true, false, 69), "qty_0_shortcut", [], "any", true, true, false, 69)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "step1", [], "any", false, false, false, 69), "qty_0_shortcut", [], "any", false, false, false, 69)) : (null));
        // line 70
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/essentials.html.twig", ["formPackItems" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["form"] ?? null), "step1", [], "any", false, false, false, 71), "inputPackItems", [], "any", false, false, false, 71), "productId" =>         // line 72
($context["id_product"] ?? null), "images" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["form"] ?? null), "step1", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73), "images", [], "any", false, false, false, 73), "formShortDescription" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["form"] ?? null), "step1", [], "any", false, false, false, 74), "description_short", [], "any", false, false, false, 74), "formDescription" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["form"] ?? null), "step1", [], "any", false, false, false, 75), "description", [], "any", false, false, false, 75), "formFeatures" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["form"] ?? null), "step1", [], "any", false, false, false, 76), "features", [], "any", false, false, false, 76), "formManufacturer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
($context["form"] ?? null), "step1", [], "any", false, false, false, 77), "id_manufacturer", [], "any", false, false, false, 77), "formRelatedProducts" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 78
($context["form"] ?? null), "step1", [], "any", false, false, false, 78), "related_products", [], "any", false, false, false, 78), "is_combination_active" =>         // line 79
($context["is_combination_active"] ?? null), "has_combinations" =>         // line 80
($context["has_combinations"] ?? null), "formReference" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
($context["form"] ?? null), "step6", [], "any", false, false, false, 81), "reference", [], "any", false, false, false, 81), "formQuantityShortcut" =>         // line 82
($context["formQuantityShortcut"] ?? null), "formPriceShortcut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
($context["form"] ?? null), "step1", [], "any", false, false, false, 83), "price_shortcut", [], "any", false, false, false, 83), "formPriceShortcutTTC" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
($context["form"] ?? null), "step1", [], "any", false, false, false, 84), "price_ttc_shortcut", [], "any", false, false, false, 84), "formCategories" => twig_get_attribute($this->env, $this->source,         // line 85
($context["form"] ?? null), "step1", [], "any", false, false, false, 85)]);
        // line 87
        echo "
        ";
    }

    // line 91
    public function block_product_panel_combinations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "          ";
        $context["formStockQuantity"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "step3", [], "any", false, true, false, 92), "qty_0", [], "any", true, true, false, 92)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "step3", [], "any", false, false, false, 92), "qty_0", [], "any", false, false, false, 92)) : (null));
        // line 93
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/combinations.html.twig", ["formDependsOnStocks" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 94
($context["form"] ?? null), "step3", [], "any", false, false, false, 94), "depends_on_stock", [], "any", false, false, false, 94), "productId" =>         // line 95
($context["id_product"] ?? null), "formStockQuantity" =>         // line 96
($context["formStockQuantity"] ?? null), "formStockMinimalQuantity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["form"] ?? null), "step3", [], "any", false, false, false, 97), "minimal_quantity", [], "any", false, false, false, 97), "formLowStockThreshold" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["form"] ?? null), "step3", [], "any", false, false, false, 98), "low_stock_threshold", [], "any", false, false, false, 98), "formLocation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["form"] ?? null), "step3", [], "any", false, false, false, 99), "location", [], "any", false, false, false, 99), "formLowStockAlert" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
($context["form"] ?? null), "step3", [], "any", false, false, false, 100), "low_stock_alert", [], "any", false, false, false, 100), "formVirtualProduct" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["form"] ?? null), "step3", [], "any", false, false, false, 101), "virtual_product", [], "any", false, false, false, 101), "asm_globally_activated" =>         // line 102
($context["asm_globally_activated"] ?? null), "formType" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["form"] ?? null), "step1", [], "any", false, false, false, 103), "type_product", [], "any", false, false, false, 103), "formAdvancedStockManagement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 104
($context["form"] ?? null), "step3", [], "any", false, false, false, 104), "advanced_stock_management", [], "any", false, false, false, 104), "formPackStockType" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 105
($context["form"] ?? null), "step3", [], "any", false, false, false, 105), "pack_stock_type", [], "any", false, false, false, 105), "formStep3" => twig_get_attribute($this->env, $this->source,         // line 106
($context["form"] ?? null), "step3", [], "any", false, false, false, 106), "formCombinations" =>         // line 107
($context["formCombinations"] ?? null), "has_combinations" =>         // line 108
($context["has_combinations"] ?? null), "max_upload_size" =>         // line 109
($context["max_upload_size"] ?? null)]);
        // line 111
        echo "
        ";
    }

    // line 115
    public function block_product_panel_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    ";
        // line 119
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_shipping.html.twig", ["form" => twig_get_attribute($this->env, $this->source,         // line 120
($context["form"] ?? null), "step4", [], "any", false, false, false, 120), "asm_globally_activated" =>         // line 121
($context["asm_globally_activated"] ?? null), "isNotVirtual" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 122
($context["form"] ?? null), "step1", [], "any", false, false, false, 122), "type_product", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "value", [], "any", false, false, false, 122) != "2"), "isChecked" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 123
($context["form"] ?? null), "step3", [], "any", false, false, false, 123), "advanced_stock_management", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "checked", [], "any", false, false, false, 123), "warehouses" =>         // line 124
($context["warehouses"] ?? null)]);
        // line 125
        echo "
                  </div>
                </div>
          </div>
        ";
    }

    // line 132
    public function block_product_panel_pricing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/pricing.html.twig", ["pricingForm" => twig_get_attribute($this->env, $this->source,         // line 134
($context["form"] ?? null), "step2", [], "any", false, false, false, 134), "is_multishop_context" =>         // line 135
($context["is_multishop_context"] ?? null), "productId" =>         // line 136
($context["id_product"] ?? null)]);
        // line 137
        echo "
        ";
    }

    // line 141
    public function block_product_panel_seo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/seo.html.twig", ["seoForm" => twig_get_attribute($this->env, $this->source,         // line 143
($context["form"] ?? null), "step5", [], "any", false, false, false, 143), "productId" =>         // line 144
($context["id_product"] ?? null)]);
        // line 145
        echo "
        ";
    }

    // line 149
    public function block_product_panel_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/options.html.twig", ["optionsForm" => twig_get_attribute($this->env, $this->source,         // line 151
($context["form"] ?? null), "step6", [], "any", false, false, false, 151), "productId" =>         // line 152
($context["id_product"] ?? null)]);
        // line 153
        echo "
        ";
    }

    // line 157
    public function block_product_panel_modules($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "          ";
        if ( !twig_test_empty($this->extensions['PrestaShopBundle\Twig\HookExtension']->hooksArrayContent(($context["hooks"] ?? null)))) {
            // line 159
            echo "            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"container-fluid\">
                <div class=\"row module-selection\" style=\"display: none;\">
                  <div class=\"col-lg-7\">
                    ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 164
                echo "                      <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 164), "name", [], "any", false, false, false, 164), "html", null, true);
                echo "\">
                        <div>
                          <img class=\"top-logo\" src=\"";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 166), "img", [], "any", false, false, false, 166), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 166), "displayName", [], "any", false, false, false, 166), "html", null, true);
                echo "\">
                          <h2 class=\"text-ellipsis module-name-grid\">";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 167), "displayName", [], "any", false, false, false, 167), "html", null, true);
                echo "</h2>
                          <div class=\"text-ellipsis small-text module-version\">";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 168), "version", [], "any", false, false, false, 168), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 168), "author", [], "any", false, false, false, 168), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"small no-padding\">
                          ";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 171), "description", [], "any", false, false, false, 171), "html", null, true);
                echo "
                        </div>
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                  </div>
                  <div class=\"col-lg-5\">
                    <h2>";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                    <select class=\"modules-list-select\" data-toggle=\"select2\">
                      ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 180
                echo "                        <option value=\"module-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 180), "displayName", [], "any", false, false, false, 180), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                    </select>
                  </div>
                </div>

                <div class=\"module-render-container all-modules\">
                  <div>
                    <h2>";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                    <p>";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("These modules are relative to the product page of your shop.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />
                    ";
            // line 190
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage all your modules go to the [1]Installed module page[/1]", [], "Admin.Catalog.Feature"), ["[1]" => (("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"]);
            echo "</p>
                  </div>
                  <div class=\"row\">
                    ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 194
                echo "                      <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"module-item-wrapper-grid\">
                          <div class=\"module-item-heading-grid\">
                            <img class=\"module-logo-thumb-grid\" src=\"";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 197), "img", [], "any", false, false, false, 197), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 197), "displayName", [], "any", false, false, false, 197), "html", null, true);
                echo "\">
                            <h3 class=\"text-ellipsis module-name-grid\">
                              ";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 199), "displayName", [], "any", false, false, false, 199), "html", null, true);
                echo "
                            </h3>
                            <div class=\"text-ellipsis small-text module-version-author-grid\">
                              ";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 202), "version", [], "any", false, false, false, 202), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 202), "author", [], "any", false, false, false, 202), "html", null, true);
                echo "
                            </div>
                          </div>
                          <div class=\"module-quick-description-grid small no-padding\">
                            ";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 206), "description", [], "any", false, false, false, 206), "html", null, true);
                echo "
                          </div>
                          <div class=\"module-container\">
                            <div class=\"module-quick-action-grid clearfix\">
                              <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 210), "html", null, true);
                echo "\">
                                ";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions"), "html", null, true);
                echo "
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                  </div>
                </div>

                ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 222
                echo "                  <div id=\"module_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 222), "html", null, true);
                echo "\" class=\"module-render-container module-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 222), "name", [], "any", false, false, false, 222), "html", null, true);
                echo "\" style=\"display: none;\">
                    <div>";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["module"], "content", [], "any", false, false, false, 223);
                echo "</div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "
              </div>
            </div>
          ";
        }
        // line 230
        echo "        ";
    }

    // line 274
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 275
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/catalog_product.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 293
        echo twig_escape_filter($this->env, ($context["editable"] ?? null), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 293,  611 => 289,  607 => 288,  603 => 287,  599 => 286,  595 => 285,  591 => 284,  587 => 283,  583 => 282,  579 => 281,  575 => 280,  571 => 279,  567 => 278,  563 => 277,  557 => 275,  553 => 274,  549 => 230,  543 => 226,  534 => 223,  527 => 222,  523 => 221,  518 => 218,  505 => 211,  501 => 210,  494 => 206,  485 => 202,  479 => 199,  472 => 197,  467 => 194,  463 => 193,  457 => 190,  453 => 189,  449 => 188,  441 => 182,  430 => 180,  426 => 179,  421 => 177,  417 => 175,  407 => 171,  399 => 168,  395 => 167,  389 => 166,  383 => 164,  379 => 163,  373 => 159,  370 => 158,  366 => 157,  361 => 153,  359 => 152,  358 => 151,  356 => 150,  352 => 149,  347 => 145,  345 => 144,  344 => 143,  342 => 142,  338 => 141,  333 => 137,  331 => 136,  330 => 135,  329 => 134,  327 => 133,  323 => 132,  315 => 125,  313 => 124,  312 => 123,  311 => 122,  310 => 121,  309 => 120,  308 => 119,  303 => 116,  299 => 115,  294 => 111,  292 => 109,  291 => 108,  290 => 107,  289 => 106,  288 => 105,  287 => 104,  286 => 103,  285 => 102,  284 => 101,  283 => 100,  282 => 99,  281 => 98,  280 => 97,  279 => 96,  278 => 95,  277 => 94,  275 => 93,  272 => 92,  268 => 91,  263 => 87,  261 => 85,  260 => 84,  259 => 83,  258 => 82,  257 => 81,  256 => 80,  255 => 79,  254 => 78,  253 => 77,  252 => 76,  251 => 75,  250 => 74,  249 => 73,  248 => 72,  247 => 71,  245 => 70,  242 => 69,  238 => 68,  231 => 63,  227 => 62,  222 => 51,  220 => 49,  219 => 48,  218 => 47,  217 => 46,  216 => 45,  215 => 44,  214 => 43,  212 => 42,  208 => 41,  203 => 271,  201 => 250,  196 => 247,  192 => 246,  189 => 245,  187 => 244,  186 => 243,  185 => 242,  184 => 241,  183 => 240,  182 => 239,  180 => 238,  174 => 234,  170 => 233,  166 => 231,  163 => 157,  160 => 155,  157 => 149,  154 => 147,  151 => 141,  148 => 139,  145 => 132,  142 => 130,  139 => 115,  136 => 113,  133 => 91,  130 => 89,  127 => 68,  123 => 65,  120 => 62,  112 => 56,  107 => 53,  104 => 41,  102 => 40,  98 => 39,  91 => 35,  88 => 34,  85 => 33,  81 => 32,  75 => 29,  70 => 28,  66 => 27,  61 => 25,  59 => 335,  58 => 333,  57 => 332,  56 => 316,  54 => 314,  53 => 312,  46 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}


/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_5c47df14d1aaedf5c5904e43db1f8fe3___449752849 extends Template
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
        // line 250
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 250);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 267
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        echo "      <div class=\"modal-body\"></div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  696 => 268,  692 => 267,  681 => 250,  618 => 293,  611 => 289,  607 => 288,  603 => 287,  599 => 286,  595 => 285,  591 => 284,  587 => 283,  583 => 282,  579 => 281,  575 => 280,  571 => 279,  567 => 278,  563 => 277,  557 => 275,  553 => 274,  549 => 230,  543 => 226,  534 => 223,  527 => 222,  523 => 221,  518 => 218,  505 => 211,  501 => 210,  494 => 206,  485 => 202,  479 => 199,  472 => 197,  467 => 194,  463 => 193,  457 => 190,  453 => 189,  449 => 188,  441 => 182,  430 => 180,  426 => 179,  421 => 177,  417 => 175,  407 => 171,  399 => 168,  395 => 167,  389 => 166,  383 => 164,  379 => 163,  373 => 159,  370 => 158,  366 => 157,  361 => 153,  359 => 152,  358 => 151,  356 => 150,  352 => 149,  347 => 145,  345 => 144,  344 => 143,  342 => 142,  338 => 141,  333 => 137,  331 => 136,  330 => 135,  329 => 134,  327 => 133,  323 => 132,  315 => 125,  313 => 124,  312 => 123,  311 => 122,  310 => 121,  309 => 120,  308 => 119,  303 => 116,  299 => 115,  294 => 111,  292 => 109,  291 => 108,  290 => 107,  289 => 106,  288 => 105,  287 => 104,  286 => 103,  285 => 102,  284 => 101,  283 => 100,  282 => 99,  281 => 98,  280 => 97,  279 => 96,  278 => 95,  277 => 94,  275 => 93,  272 => 92,  268 => 91,  263 => 87,  261 => 85,  260 => 84,  259 => 83,  258 => 82,  257 => 81,  256 => 80,  255 => 79,  254 => 78,  253 => 77,  252 => 76,  251 => 75,  250 => 74,  249 => 73,  248 => 72,  247 => 71,  245 => 70,  242 => 69,  238 => 68,  231 => 63,  227 => 62,  222 => 51,  220 => 49,  219 => 48,  218 => 47,  217 => 46,  216 => 45,  215 => 44,  214 => 43,  212 => 42,  208 => 41,  203 => 271,  201 => 250,  196 => 247,  192 => 246,  189 => 245,  187 => 244,  186 => 243,  185 => 242,  184 => 241,  183 => 240,  182 => 239,  180 => 238,  174 => 234,  170 => 233,  166 => 231,  163 => 157,  160 => 155,  157 => 149,  154 => 147,  151 => 141,  148 => 139,  145 => 132,  142 => 130,  139 => 115,  136 => 113,  133 => 91,  130 => 89,  127 => 68,  123 => 65,  120 => 62,  112 => 56,  107 => 53,  104 => 41,  102 => 40,  98 => 39,  91 => 35,  88 => 34,  85 => 33,  81 => 32,  75 => 29,  70 => 28,  66 => 27,  61 => 25,  59 => 335,  58 => 333,  57 => 332,  56 => 316,  54 => 314,  53 => 312,  46 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}
