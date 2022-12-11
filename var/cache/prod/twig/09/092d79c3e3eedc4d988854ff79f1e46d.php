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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_829252c8bbc939ce16dd7f8300f17233 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 45
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]);

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]);

        // line 48
        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 49
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 49, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        // line 50
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 50, $this->source);
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        // line 51
        $_trait_4 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 51);
        if (!$_trait_4->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        // line 52
        $_trait_5 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 52);
        if (!$_trait_5->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 52, $this->source);
        }
        $_trait_5_blocks = $_trait_5->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks,
            $_trait_5_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 46
        echo "
";
        // line 53
        echo "
";
        // line 55
        echo "
";
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('form_start', $context, $blocks);
        // line 68
        $this->displayBlock('form_widget', $context, $blocks);
        // line 76
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 81
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 91
        $this->displayBlock('password_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('form_row', $context, $blocks);
        // line 117
        echo "
";
        // line 122
        $this->displayBlock('form_modify_all_shops', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('form_disabling_switch', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('widget_type_class', $context, $blocks);
        // line 157
        echo "
";
        // line 160
        $this->displayBlock('form_label', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('money_widget', $context, $blocks);
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 255
        $this->displayBlock('url_widget', $context, $blocks);
        // line 261
        $this->displayBlock('date_widget', $context, $blocks);
        // line 279
        echo "
";
        // line 280
        $this->displayBlock('time_widget', $context, $blocks);
        // line 295
        $this->displayBlock('email_widget', $context, $blocks);
        // line 301
        $this->displayBlock('button_widget', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('icon_button_widget', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 358
        echo "
";
        // line 359
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 434
        echo "
";
        // line 435
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 441
        echo "
";
        // line 442
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 478
        echo "
";
        // line 479
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 535
        echo "
";
        // line 536
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 552
        echo "
";
        // line 553
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 578
        echo "
";
        // line 579
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 603
        $this->displayBlock('row_attributes', $context, $blocks);
        // line 611
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 640
        echo "
";
        // line 642
        echo "
";
        // line 643
        $this->displayBlock('choice_label', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 652
        echo "
";
        // line 653
        $this->displayBlock('radio_label', $context, $blocks);
        // line 656
        echo "
";
        // line 657
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 689
        echo "
";
        // line 690
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 704
        echo "
";
        // line 705
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 712
        echo "
";
        // line 714
        echo "
";
        // line 715
        $this->displayBlock('form_errors', $context, $blocks);
        // line 722
        echo "
";
        // line 723
        $this->displayBlock('form_errors_field', $context, $blocks);
        // line 789
        echo "
";
        // line 790
        $this->displayBlock('form_errors_other', $context, $blocks);
        // line 809
        echo "
";
        // line 811
        echo "
";
        // line 812
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 848
        echo "
";
        // line 849
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 901
        echo "
";
        // line 903
        $this->displayBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 926
        echo "
";
        // line 927
        $this->displayBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 963
        echo "
";
        // line 964
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 972
        echo "
";
        // line 973
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 997
        echo "
";
        // line 998
        $this->displayBlock('file_widget', $context, $blocks);
        // line 1030
        echo "
";
        // line 1031
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1047
        echo "
";
        // line 1048
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 1067
        echo "
";
        // line 1068
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1093
        echo "
";
        // line 1094
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1122
        echo "
";
        // line 1123
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1127
        echo "
";
        // line 1128
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 1143
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 1153
        $this->displayBlock('form_unit', $context, $blocks);
        // line 1160
        echo "
";
        // line 1161
        $this->displayBlock('form_unit_prepend', $context, $blocks);
        // line 1168
        echo "
";
        // line 1169
        $this->displayBlock('form_help', $context, $blocks);
        // line 1178
        echo "
";
        // line 1179
        $this->displayBlock('form_prepend_external_link', $context, $blocks);
        // line 1184
        echo "
";
        // line 1185
        $this->displayBlock('form_append_external_link', $context, $blocks);
        // line 1190
        echo "
";
        // line 1191
        $this->displayBlock('form_external_link', $context, $blocks);
        // line 1204
        $this->displayBlock('form_external_link_attributes', $context, $blocks);
        // line 1218
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 1221
        echo "
";
        // line 1222
        $this->displayBlock('text_widget', $context, $blocks);
        // line 1239
        $this->displayBlock('form_prepend_alert', $context, $blocks);
        // line 1245
        $this->displayBlock('form_append_alert', $context, $blocks);
        // line 1251
        $this->displayBlock('form_alert', $context, $blocks);
        // line 1284
        $this->displayBlock('unavailable_widget', $context, $blocks);
        // line 1291
        echo "
";
        // line 1292
        $this->displayBlock('text_preview_widget', $context, $blocks);
        // line 1310
        echo "
";
        // line 1311
        $this->displayBlock('image_preview_widget', $context, $blocks);
        // line 1316
        echo "
";
        // line 1317
        $this->displayBlock('delta_quantity_widget', $context, $blocks);
        // line 1325
        echo "
";
        // line 1326
        $this->displayBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1337
        echo "
";
        // line 1338
        $this->displayBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1354
        echo "
";
        // line 1355
        $this->displayBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1360
        echo "
";
        // line 1361
        $this->displayBlock('submittable_input_widget', $context, $blocks);
        // line 1374
        echo "
";
        // line 1375
        $this->displayBlock('submittable_input_button_widget', $context, $blocks);
        // line 1380
        echo "
";
        // line 1381
        $this->displayBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1395
        $this->displayBlock('navigation_tab_widget', $context, $blocks);
        // line 1446
        $this->displayBlock('accordion_widget', $context, $blocks);
        // line 1486
        $this->displayBlock('button_collection_widget', $context, $blocks);
        // line 1502
        echo "
";
        // line 1503
        $this->displayBlock('avatar_url_row', $context, $blocks);
        // line 1513
        echo "
";
        // line 1514
        $this->displayBlock('change_password_row', $context, $blocks);
        // line 1554
        $this->displayBlock('price_reduction_widget', $context, $blocks);
    }

    // line 58
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-success" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "success", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "success", [], "any", false, false, false, 59), [])) : ([])))]);
        // line 60
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-info" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "info", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "info", [], "any", false, false, false, 60), [])) : ([])))]);
        // line 61
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-warning" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "warning", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "warning", [], "any", false, false, false, 61), [])) : ([])))]);
        // line 62
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-error" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 62), "alerts", [], "any", false, true, false, 62), "error", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 62), "alerts", [], "any", false, true, false, 62), "error", [], "any", false, false, false, 62), [])) : ([])))]);
        // line 63
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-form-submitted" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "submitted", [], "any", false, false, false, 63)) ? (1) : (0))]);
        // line 64
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-form-valid" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 64), "valid", [], "any", false, false, false, 64)) ? (1) : (0))]);
        // line 65
        echo "  ";
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "
";
    }

    // line 68
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        if (array_key_exists("columns_number", $context)) {
            // line 70
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 70), "")) : ("")) . " form-columns-") . ($context["columns_number"] ?? null)))]);
            // line 71
            echo "  ";
        }
        // line 72
        echo "  ";
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 73
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 76
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 78
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 78)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
    }

    // line 81
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "  <div class=\"input-group\">";
        // line 83
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 84
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
  ";
        // line 88
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 91
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 93
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 94
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 99
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "<div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 100)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 100), "html", null, true);
        }
        echo "\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 102
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 103
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 107
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 109
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 110
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 111
        echo "</div>

  ";
        // line 113
        if (($context["column_breaker"] ?? null)) {
            // line 114
            echo "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
    }

    // line 122
    public function block_form_modify_all_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "  ";
        $context["overrideCheckboxName"] = (($context["modify_all_shops_prefix"] ?? null) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123));
        // line 124
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 124), ($context["overrideCheckboxName"] ?? null), [], "any", true, true, false, 124)) {
            // line 125
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 125), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 125), 'errors');
            echo "
    ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 126), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 126), 'widget');
            echo "
  ";
        }
    }

    // line 130
    public function block_form_disabling_switch($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "  ";
        $context["disablingSwitchName"] = (($context["disabling_switch_prefix"] ?? null) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 131), "name", [], "any", false, false, false, 131));
        // line 132
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 132), ($context["disablingSwitchName"] ?? null), [], "any", true, true, false, 132)) {
            // line 133
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 133), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 133), 'errors');
            echo "
    ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 134), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 134), 'widget');
            echo "
  ";
        }
    }

    // line 138
    public function block_widget_type_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        if (( !($context["compound"] ?? null) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 139), "block_prefixes", [], "any", false, false, false, 139)) > 2))) {
            // line 140
            echo " ";
            ob_start(function () { return ''; });
            // line 141
            echo "
    ";
            // line 142
            $context["index"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 142), "block_prefixes", [], "any", false, false, false, 142)) - 2);
            // line 143
            echo "    ";
            $context["widgetType"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 143), "block_prefixes", [], "any", false, false, false, 143)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["index"] ?? null)] ?? null) : null);
            // line 144
            echo "    ";
            if ((($context["widgetType"] ?? null) == "choice")) {
                // line 145
                echo "      ";
                if ( !($context["expanded"] ?? null)) {
                    // line 146
                    echo "        ";
                    $context["widgetType"] = "select";
                    // line 147
                    echo "      ";
                } elseif (($context["multiple"] ?? null)) {
                    // line 148
                    echo "        ";
                    $context["widgetType"] = "checboxes";
                    // line 149
                    echo "      ";
                } else {
                    // line 150
                    echo "        ";
                    $context["widgetType"] = "radio";
                    // line 151
                    echo "      ";
                }
                // line 152
                echo "    ";
            }
            // line 153
            echo "    ";
            echo twig_escape_filter($this->env, ($context["widgetType"] ?? null), "html", null, true);
            echo "-widget
";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            echo twig_spaceless($___internal_parse_2_);
        }
    }

    // line 160
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        if ( !(($context["label"] ?? null) === false)) {
            // line 162
            if ( !($context["compound"] ?? null)) {
                // line 163
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 165
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 166
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " required"))]);
            }
            // line 168
            echo "    ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 169
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 170
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 171
($context["name"] ?? null), "%id%" =>                     // line 172
($context["id"] ?? null)]);
                } else {
                    // line 175
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 179
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (_twig_default_filter(($context["label_tag_name"] ?? null), "label")) : ("label"));
            // line 180
            echo "    <";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 181
            if (($context["required"] ?? null)) {
                // line 182
                echo "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 184
            echo "    ";
            echo (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            echo "
    ";
            // line 185
            if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 185)) {
                // line 186
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 186)) ? ((($__internal_compile_1 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tooltip_placement"] ?? null) : null)) : ("top"));
                // line 187
                echo "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
                echo "\"
         title=\"";
                // line 188
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["tooltip"] ?? null) : null), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 190
            echo "
    ";
            // line 191
            if ((array_key_exists("label_help_box", $context) || twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 191))) {
                // line 192
                echo "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? (($context["label_help_box"] ?? null)) : ((($__internal_compile_3 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["popover"] ?? null) : null)));
                // line 193
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 193)) ? ((($__internal_compile_4 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["popover_placement"] ?? null) : null)) : ("top"));
                // line 194
                echo "      ";
                $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 194)->display(twig_array_merge($context, ["placement" => ($context["placement"] ?? null), "content" => ($context["content"] ?? null)]));
                // line 195
                echo "    ";
            }
            // line 196
            $this->displayBlock("form_disabling_switch", $context, $blocks);
            // line 197
            echo "</";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            echo ">";
        }
        // line 199
        if (array_key_exists("label_subtitle", $context)) {
            // line 200
            echo "    <p class=\"subtitle\">";
            echo ($context["label_subtitle"] ?? null);
            echo "</p>
  ";
        }
    }

    // line 206
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 207)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 207), "")) : ("")) . " form-control"))]);
        // line 208
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 209
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 209)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
        // line 210
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 213
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "<div class=\"input-group money-type\">
    ";
        // line 215
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 216
        echo "    ";
        if ( !($context["prepend"] ?? null)) {
            // line 217
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 218
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 221
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 222
        if (($context["prepend"] ?? null)) {
            // line 223
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 224
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 227
        echo "  </div>

  ";
        // line 229
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 232
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        echo "<div class=\"input-group\">";
        // line 234
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 235
        echo "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
    }

    // line 241
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 243
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 245
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 245)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 245), "")) : ("")) . " form-inline"))]);
            // line 246
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 247
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 247), 'errors');
            // line 248
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 248), 'errors');
            // line 249
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 249), 'widget', ["datetime" => true]);
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 250), 'widget', ["datetime" => true]);
            // line 251
            echo "</div>";
        }
    }

    // line 255
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 256
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 257
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 258
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 261
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 262
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 263
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 265
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 265)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 265), "")) : ("")) . " form-inline"))]);
            // line 266
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 267
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 269
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 270
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 270), 'widget'), "{{ month }}" =>             // line 271
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 271), 'widget'), "{{ day }}" =>             // line 272
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 272), 'widget')]);
            // line 274
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 275
                echo "</div>";
            }
        }
    }

    // line 280
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 281
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 282
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 284
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 284)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 284), "")) : ("")) . " form-inline"))]);
            // line 285
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 286
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 288
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 288), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 288), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 288), 'widget');
            }
            // line 289
            echo "    ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 290
                echo "</div>";
            }
        }
    }

    // line 295
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 296
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 297
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 298
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 301
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 302
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 302)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 302), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 303
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 306
    public function block_icon_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 307
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 307)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 307), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 308
        echo "  ";
        if ((($context["button_type"] ?? null) == "link")) {
            // line 309
            echo "    ";
            $context["buttonTag"] = "a";
            // line 310
            echo "    ";
            // line 311
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 311)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 311), false)) : (false))) {
                // line 312
                echo "      ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 312) . " disabled"))]);
                // line 313
                echo "    ";
            }
            // line 314
            echo "  ";
        } else {
            // line 315
            echo "    ";
            $context["buttonTag"] = "button";
            // line 316
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["type" => "button"]);
            // line 317
            echo "  ";
        }
        // line 318
        echo "
  <";
        // line 319
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo " ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    <i class=\"material-icons\">";
        // line 320
        echo twig_escape_filter($this->env, ($context["button_icon"] ?? null), "html", null, true);
        echo "</i>
    ";
        // line 321
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
  </";
        // line 322
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo ">";
    }

    // line 325
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        $this->displayParentBlock("choice_widget", $context, $blocks);
        // line 327
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 330
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 331)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 331), "")) : ("")) . " custom-select"))]);
        // line 332
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 335
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 336
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 336)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 336), "")) : ("")))) {
            // line 337
            echo "<div class=\"control-group\">";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 339
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 340
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 340)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 340), "")) : ("")), "translation_domain" =>                 // line 341
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 342
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "</div>";
        } else {
            // line 347
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 349
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 350
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 350)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 350), "")) : ("")), "translation_domain" =>                 // line 351
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 352
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "</div>";
        }
    }

    // line 359
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 360
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 364
            echo "        ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "</ul>
  </div>";
    }

    // line 370
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        echo "<li>
    ";
        // line 372
        $context["checked"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 372), "submitted_values", [], "any", true, true, false, 372) && twig_get_attribute($this->env, $this->source, ($context["submitted_values"] ?? null), twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 372), [], "array", true, true, false, 372))) ? ("checked=\"checked\"") : (""));
        // line 373
        echo "    ";
        if (($context["multiple"] ?? null)) {
            // line 374
            echo "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 376), "full_name", [], "any", false, false, false, 376), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 376), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
          ";
            // line 377
            if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 377) && (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 377) == 0))) {
                // line 378
                echo "            <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 378), "html", null, true);
                echo "</i>";
            } else {
                // line 380
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 380), "html", null, true);
                echo "
          ";
            }
            // line 382
            echo "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 383
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 383), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 385
            echo "        </label>
      </div>";
        } else {
            // line 388
            echo "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 390
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 390), "id", [], "any", false, false, false, 390), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 390), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
          ";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 391), "html", null, true);
            echo "
          ";
            // line 392
            if (array_key_exists("defaultCategory", $context)) {
                // line 393
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 393), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 395
            echo "        </label>
      </div>";
        }
        // line 398
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 398)) {
            // line 399
            echo "      <ul>
        ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 400));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 401
                echo "          ";
                $context["child"] = $context["item"];
                // line 402
                echo "          ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "</ul>
    ";
        }
        // line 406
        echo "  </li>";
    }

    // line 409
    public function block_translatefields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 410
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"translations tabbable\" id=\"";
        // line 411
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 411), "id", [], "any", false, false, false, 411), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 412
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 413
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 415
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 416
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "label", [], "any", false, false, false, 416), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 416) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "name", [], "any", false, false, false, 416))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "id", [], "any", false, false, false, 416), "html", null, true);
                echo "\">
              ";
                // line 417
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 417), "label", [], "any", false, false, false, 417)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 421
            echo "      </ul>
    ";
        }
        // line 423
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 426
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "label", [], "any", false, false, false, 426), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "id", [], "any", false, false, false, 426), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 426) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "name", [], "any", false, false, false, 426))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 426), "valid", [], "any", false, false, false, 426)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "label", [], "any", false, false, false, 426), "html", null, true);
            echo "\">
          ";
            // line 427
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
          ";
            // line 428
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "    </div>
  </div>
";
    }

    // line 435
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 436
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 437
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 437)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 437), "")) : ("")) . " form-control"))]);
        }
        // line 439
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 442
    public function block_translate_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 446
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 446), "attr", [], "any", false, true, false, 446), "class", [], "any", true, true, false, 446)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 446), "attr", [], "any", false, true, false, 446), "class", [], "any", false, false, false, 446), "")) : ("")) . " js-locale-input");
            // line 447
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 447), "label", [], "any", false, false, false, 447));
            // line 448
            echo "
      ";
            // line 449
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 449) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 449), "name", [], "any", false, false, false, 449))) {
                // line 450
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 451
                echo "      ";
            }
            // line 453
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(($context["classes"] ?? null))]);
            // line 454
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "
    ";
        // line 457
        if ( !($context["hide_locales"] ?? null)) {
            // line 458
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 464
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 464), "id", [], "any", false, false, false, 464), "html", null, true);
            echo "\"
        >
          ";
            // line 466
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 466), "default_locale", [], "any", false, false, false, 466), "iso_code", [], "any", false, false, false, 466), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 469
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 469), "id", [], "any", false, false, false, 469), "html", null, true);
            echo "\">
          ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 471
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 471), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 471), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 473
            echo "        </div>
      </div>
    ";
        }
        // line 476
        echo "  </div>";
    }

    // line 479
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 482
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 483
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 483), "attr", [], "any", false, true, false, 483), "class", [], "any", true, true, false, 483)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 483), "attr", [], "any", false, true, false, 483), "class", [], "any", false, false, false, 483), "")) : ("")) . " js-locale-input");
            // line 484
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 484), "label", [], "any", false, false, false, 484));
            // line 485
            echo "
      ";
            // line 486
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 486) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 486), "name", [], "any", false, false, false, 486))) {
                // line 487
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 488
                echo "      ";
            }
            // line 489
            echo "
      <div class=\"";
            // line 490
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 491
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "
    ";
        // line 495
        if (($context["show_locale_select"] ?? null)) {
            // line 496
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 502
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 502), "id", [], "any", false, false, false, 502), "html", null, true);
            echo "\"
        >
          ";
            // line 504
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 504), "default_locale", [], "any", false, false, false, 504), "iso_code", [], "any", false, false, false, 504), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 507), "id", [], "any", false, false, false, 507), "html", null, true);
            echo "\">
          ";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 509
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 510
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 510), "html", null, true);
                echo "\"
            >
              ";
                // line 512
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 512), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            echo "        </div>
      </div>
    ";
        }
        // line 518
        echo "  </div>";
    }

    // line 521
    public function block_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 522
        echo "  ";
        ob_start(function () { return ''; });
        // line 523
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 523)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 523), "")) : ("")) . " form-control datepicker"))]);
        // line 524
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
        // line 525
        echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
        // line 532
        $this->displayBlock("form_help", $context, $blocks);
        echo "
  ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 522
        echo twig_spaceless($___internal_parse_3_);
    }

    // line 536
    public function block_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 537
        echo "  ";
        ob_start(function () { return ''; });
        // line 538
        echo "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
        // line 540
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 540), 'row');
        echo "
      </div>
      <div class=\"col col-md-4\">
        ";
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 543), 'row');
        echo "
        ";
        // line 544
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 544)) {
            // line 545
            echo "          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 545), 'widget');
            echo "
          ";
            // line 546
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 546), 'errors');
            echo "
        ";
        }
        // line 548
        echo "      </div>
    </div>
  ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 537
        echo twig_spaceless($___internal_parse_4_);
    }

    // line 553
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 554
        echo "  ";
        ob_start(function () { return ''; });
        // line 555
        echo "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block\"
            title=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            name=\"";
        // line 558
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
    ";
        // line 563
        if (($context["show_reset_button"] ?? null)) {
            // line 564
            echo "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
            // line 566
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
            // line 568
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                data-redirect=\"";
            // line 569
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
            // line 572
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    ";
        }
        // line 576
        echo "  ";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 554
        echo twig_spaceless($___internal_parse_5_);
    }

    // line 579
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 580
        echo "  ";
        ob_start(function () { return ''; });
        // line 581
        echo "  ";
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter(($context["row_attr"] ?? null), [])) : ([]));
        // line 582
        echo "  <div class=\"input-group ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 582)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", false, false, false, 582), "")) : ("")), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            echo " ";
            if (($context["key"] != "class")) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"ps-switch\" id=\"";
        // line 583
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 583), "id", [], "any", false, false, false, 583), "html", null, true);
        echo "\">
        ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 585
            echo "          ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 585));
            // line 586
            echo "          <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\"
            ";
            // line 587
            $this->displayBlock("attributes", $context, $blocks);
            echo "
            name=\"";
            // line 588
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"
            value=\"";
            // line 589
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 589), "html", null, true);
            echo "\"
            ";
            // line 590
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            // line 591
            echo "            ";
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            // line 592
            echo "            type=\"radio\"
          >
          ";
            // line 594
            if (($context["show_choices"] ?? null)) {
                echo "<label for=\"";
                echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 594), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                echo "</label>";
            }
            // line 595
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 596
        echo "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 580
        echo twig_spaceless($___internal_parse_6_);
        // line 600
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 603
    public function block_row_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 604
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter(($context["row_attr"] ?? null), [])) : ([]));
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 606
            echo " ";
            // line 607
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 611
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 612
        echo "  <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
    <small>";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 616
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-6\">";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-2\">";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 628
            echo "            <tr>
              <td class=\"col-md-3\">";
            // line 629
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 630
            echo twig_escape_filter($this->env, (($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 630), "attr", [], "any", false, false, false, 630), "data", [], "any", false, false, false, 630)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 630)] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["file_name"] ?? null) : null), "html", null, true);
            echo "</span></td>
              <td class=\"col-md-2\">";
            // line 631
            echo twig_escape_filter($this->env, (($__internal_compile_7 = (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 631), "attr", [], "any", false, false, false, 631), "data", [], "any", false, false, false, 631)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 631)] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["mime"] ?? null) : null), "html", null, true);
            echo "</td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
    }

    // line 643
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 645
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 645)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 645), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 646
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 649
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 650
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 653
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 654
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 657
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 658
        echo "  ";
        // line 659
        echo "  ";
        if (array_key_exists("widget", $context)) {
            // line 660
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 661
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 661)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 661), "")) : ("")) . " required"))]);
                // line 662
                echo "    ";
            }
            // line 663
            echo "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 664
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 664)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 664), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 665
                echo "    ";
            }
            // line 666
            echo "    ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 667
                echo "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 668
                echo "    ";
            }
            // line 669
            echo "
    ";
            // line 670
            if (((($__internal_compile_9 = ($context["block_prefixes"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[2] ?? null) : null) == "radio")) {
                // line 671
                echo "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 672
                echo ($context["widget"] ?? null);
                // line 674
                echo "<i class=\"form-check-round\"></i>";
                // line 676
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 677
                echo "</label>
    ";
            } else {
                // line 679
                echo "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 680
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 681
                echo ($context["widget"] ?? null);
                // line 682
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 683
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 684
                echo "</label>
      </div>
    ";
            }
            // line 687
            echo "  ";
        }
    }

    // line 690
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 691
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 691)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 691), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 691)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 691), "")) : (""))));
        // line 692
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 693
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 693)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 693), "")) : ("")) . " custom-control-input"))]);
            // line 694
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 695
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 696
            echo "</div>";
        } else {
            // line 698
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 698)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 698), "")) : ("")) . " form-check-input"))]);
            // line 699
            echo "<div class=\"form-check form-check-radio form-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 700
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 701
            echo "</div>";
        }
    }

    // line 705
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 706
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : (""))));
        // line 707
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 707)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 707), "")) : ("")) . " form-check-input"))]);
        // line 708
        echo "<div class=\"form-check form-check-radio form-checkbox";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 708)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", false, false, false, 708), "html", null, true);
        }
        echo "\">";
        // line 709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>         $this->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 710
        echo "</div>";
    }

    // line 715
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 716
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 716) && ((($__internal_compile_10 = ($context["attr"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["fieldError"] ?? null) : null) == true))) {
            // line 717
            echo "    ";
            $this->displayBlock("form_errors_field", $context, $blocks);
            echo "
  ";
        } else {
            // line 719
            echo "    ";
            $this->displayBlock("form_errors_other", $context, $blocks);
            echo "
  ";
        }
    }

    // line 723
    public function block_form_errors_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 724
        echo "  ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 726
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 728
                $context["popoverContainer"] = ("popover-error-container-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 728), "id", [], "any", false, false, false, 728));
                // line 729
                echo "      <div class=\"";
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"></div>

      ";
                // line 731
                ob_start(function () { return ''; });
                // line 732
                echo "        <div class=\"popover-error-list\">
          <ul>";
                // line 734
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 735
                    echo "<li class=\"text-danger\"> ";
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 736
$context["error"], "messagePluralization", [], "any", false, false, false, 736))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 737
$context["error"], "messageTemplate", [], "any", false, false, false, 737), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 737), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 738
$context["error"], "messageTemplate", [], "any", false, false, false, 738), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 738), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 738), "form_error"))), "html", null, true);
                    // line 739
                    echo "
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 742
                echo "          </ul>
        </div>
      ";
                $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 745
                echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 746
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746), "html", null, true);
                echo "\">
        ";
                // line 747
                echo twig_escape_filter($this->env, ($context["popoverErrorContent"] ?? null), "html", null, true);
                echo "
      </template>

      ";
                // line 750
                ob_start(function () { return ''; });
                // line 751
                echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                // line 753
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 753), "id", [], "any", false, false, false, 753), "html", null, true);
                echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                // line 757
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                // line 759
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("%count% errors", twig_length_filter($this->env, ($context["errors"] ?? null)), [], "Admin.Global"), "html", null, true);
                echo "</u>
        </span>
      ";
                $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 762
                echo "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 765
                echo twig_escape_filter($this->env, ($context["errorPopover"] ?? null), "html", null, true);
                echo "
        </div>
      </div>

      ";
            } else {
                // line 771
                echo "<div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        ";
                // line 775
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 776
                    echo "          <div class=\"text-danger\">
            <p> ";
                    // line 777
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 778
$context["error"], "messagePluralization", [], "any", false, false, false, 778))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 779
$context["error"], "messageTemplate", [], "any", false, false, false, 779), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 779), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 780
$context["error"], "messageTemplate", [], "any", false, false, false, 780), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 780), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 780), "form_error"))), "html", null, true);
                    // line 781
                    echo "
            </p>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 785
                echo "</div>";
            }
        }
    }

    // line 790
    public function block_form_errors_other($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 791
        echo "  ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 792
            echo "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 797
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 798
                echo "            <p> ";
                echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                 // line 799
$context["error"], "messagePluralization", [], "any", false, false, false, 799))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                 // line 800
$context["error"], "messageTemplate", [], "any", false, false, false, 800), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 800), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                 // line 801
$context["error"], "messageTemplate", [], "any", false, false, false, 801), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 801), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 801), "form_error"))), "html", null, true);
                // line 802
                echo "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 805
            echo "</div>
    </div>
  ";
        }
    }

    // line 812
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 813
        echo "  ";
        ob_start(function () { return ''; });
        // line 814
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  ";
        // line 824
        if (($context["isCheckSelectAll"] ?? null)) {
            // line 825
            echo "                    checked
                  ";
        }
        // line 827
        echo "                >
                <i class=\"md-checkbox-control\"></i>
                ";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 837
            echo "          <tr>
            <td>
              ";
            // line 839
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 843
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 813
        echo twig_spaceless($___internal_parse_7_);
    }

    // line 849
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 850
        echo "  ";
        ob_start(function () { return ''; });
        // line 851
        echo "    <div class=\"choice-table";
        if (($context["headers_fixed"] ?? null)) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
        // line 855
        echo twig_escape_filter($this->env, ($context["table_label"] ?? null), "html", null, true);
        echo "</th>
          ";
        // line 856
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 857
            echo "            <th class=\"text-center\">
              ";
            // line 858
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 858), "multiple", [], "any", false, false, false, 858) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 858), "name", [], "any", false, false, false, 858), ($context["headers_to_disable"] ?? null)))) {
                // line 859
                echo "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                // line 861
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 861) + 1), "html", null, true);
                echo "\"
                   data-column-checked=\"false\"
                >
                  ";
                // line 864
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 864), "label", [], "any", false, false, false, 864), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 867
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 867), "label", [], "any", false, false, false, 867), "html", null, true);
                echo "
              ";
            }
            // line 869
            echo "            </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 871
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 874
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 875
            echo "          <tr>
            <td>
              ";
            // line 877
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 879
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 880
                echo "              <td class=\"text-center\">
                ";
                // line 881
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 881), $context["child_choice_name"], [], "array", true, true, false, 881)) {
                    // line 882
                    echo "                  ";
                    $context["entry_index"] = (($__internal_compile_11 = (($__internal_compile_12 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["choice_value"]] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["child_choice_name"]] ?? null) : null);
                    // line 883
                    echo "
                  ";
                    // line 884
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 884), "multiple", [], "any", false, false, false, 884)) {
                        // line 885
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_13 = $context["child_choice"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["entry_index"] ?? null)] ?? null) : null), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 887
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_14 = $context["child_choice"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["entry_index"] ?? null)] ?? null) : null), 'widget');
                        echo "
                  ";
                    }
                    // line 889
                    echo "                ";
                } else {
                    // line 890
                    echo "                  --
                ";
                }
                // line 892
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 894
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 896
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 850
        echo twig_spaceless($___internal_parse_8_);
    }

    // line 903
    public function block_translatable_fields_with_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 904
        echo "  <div class=\"translations tabbable\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 904), "id", [], "any", false, false, false, 904), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 905
        if (((($context["hide_locales"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 906
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 907
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 908
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 909
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "label", [], "any", false, false, false, 909), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 909) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "name", [], "any", false, false, false, 909))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "id", [], "any", false, false, false, 909), "html", null, true);
                echo "\">
              ";
                // line 910
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 910), "label", [], "any", false, false, false, 910)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 914
            echo "      </ul>
    ";
        }
        // line 916
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 918
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 919
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "label", [], "any", false, false, false, 919), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "id", [], "any", false, false, false, 919), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hide_locales"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 919) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "name", [], "any", false, false, false, 919))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 919), "valid", [], "any", false, false, false, 919)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "label", [], "any", false, false, false, 919), "html", null, true);
            echo "\">
          ";
            // line 920
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 923
        echo "    </div>
  </div>
";
    }

    // line 927
    public function block_translatable_fields_with_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 928
        $context["formClass"] = twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 928), "attr", [], "any", false, true, false, 928), "class", [], "any", true, true, false, 928)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 928), "attr", [], "any", false, true, false, 928), "class", [], "any", false, false, false, 928), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 929
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["formClass"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 929), "id", [], "any", false, false, false, 929), "html", null, true);
        echo "\" tabindex=\"1\">
      ";
        // line 930
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 931
            echo "        ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 931), "attr", [], "any", false, true, false, 931), "class", [], "any", true, true, false, 931)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 931), "attr", [], "any", false, true, false, 931), "class", [], "any", false, false, false, 931), "")) : ("")) . " js-locale-input");
            // line 932
            echo "        ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 932), "label", [], "any", false, false, false, 932));
            // line 933
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 933) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 933), "name", [], "any", false, false, false, 933))) {
                // line 934
                echo "          ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 935
                echo "        ";
            }
            // line 936
            echo "        <div data-lang-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 936), "name", [], "any", false, false, false, 936), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
          ";
            // line 937
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 940
        echo "      ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 941
            echo "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 945
            if (array_key_exists("change_form_language_url", $context)) {
                // line 946
                echo "              data-change-language-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 946), "change_form_language_url", [], "any", false, false, false, 946), "html", null, true);
                echo "\"
            ";
            }
            // line 948
            echo "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 950
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 950), "id", [], "any", false, false, false, 950), "html", null, true);
            echo "_dropdown\"
          >
            ";
            // line 952
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 952), "default_locale", [], "any", false, false, false, 952), "iso_code", [], "any", false, false, false, 952), "html", null, true);
            echo "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 954
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 954), "id", [], "any", false, false, false, 954), "html", null, true);
            echo "_dropdown\">
            ";
            // line 955
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 956
                echo "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 956), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 956), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 958
            echo "          </div>
        </div>
      ";
        }
        // line 961
        echo "    </div>";
    }

    // line 964
    public function block_translatable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 965
        if (($context["use_tabs"] ?? null)) {
            // line 966
            echo "    ";
            $this->displayBlock("translatable_fields_with_tabs", $context, $blocks);
            echo "
  ";
        } else {
            // line 968
            echo "    ";
            $this->displayBlock("translatable_fields_with_dropdown", $context, $blocks);
            echo "
  ";
        }
        // line 970
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 973
    public function block_birthday_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 974
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 975
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 977
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 977)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 977), "")) : ("")) . " form-inline"))]);
            // line 978
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 979
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 981
            echo "
    ";
            // line 982
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 982), 'widget')) . "</div>");
            // line 983
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 983), 'widget')) . "</div>");
            // line 984
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 984), 'widget')) . "</div>");
            // line 986
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 987
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 988
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 989
($context["dayWidget"] ?? null)]);
            // line 992
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 993
                echo "</div>";
            }
        }
    }

    // line 998
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 999
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 1001
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 1005
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1006
($context["attr"] ?? null), "class", [], "any", true, true, false, 1006)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1006), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 1011
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 1011) && twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 1011))) {
            // line 1012
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (twig_get_attribute($this->env, $this->source,             // line 1013
($context["attr"] ?? null), "class", [], "any", false, false, false, 1013) . " disabled")]);
            // line 1015
            echo "    ";
        }
        // line 1016
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1018
        echo "<label class=\"custom-file-label\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1018), "id", [], "any", false, false, false, 1018), "html", null, true);
        echo "\">
      ";
        // line 1019
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1019), "attr", [], "any", false, false, false, 1019);
        // line 1020
        echo "      ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 1020)) ? (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 1020)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>";
        // line 1023
        $this->displayBlock("form_help", $context, $blocks);
        // line 1024
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1024), "download_url", [], "any", false, false, false, 1024)) {
            // line 1025
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1025), "download_url", [], "any", false, false, false, 1025), "html", null, true);
            echo "\">
      ";
            // line 1026
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  ";
        }
    }

    // line 1031
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1032
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1032), "attr", [], "any", false, false, false, 1032), "is_allowed_to_display", [], "any", false, false, false, 1032)) {
            // line 1033
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1035
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 1036
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1038
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 1039
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 1040
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 1048
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1049
        echo "  <div class=\"input-group\">
    ";
        // line 1050
        if (($context["compound"] ?? null)) {
            // line 1051
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1053
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1055
        echo "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1058
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 1059
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 1061
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
  ";
        // line 1065
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 1068
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1069
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 1070
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1074
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 1075
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1077
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1079
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1081
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1084
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 1085
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1087
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 1089
        echo "
    </em>
  </small>
";
    }

    // line 1094
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1095
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1096
        $context["current_length"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1096), "max_length", [], "any", false, false, false, 1096) - twig_length_filter($this->env, ($context["value"] ?? null)));
        // line 1097
        echo "
    ";
        // line 1098
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1098), "position", [], "any", false, false, false, 1098) == "before")) {
            // line 1099
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1100
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1103
        echo "
    ";
        // line 1104
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-max-length" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1104), "max_length", [], "any", false, false, false, 1104), "maxlength" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1104), "max_length", [], "any", false, false, false, 1104), "class" => "js-countable-input"]);
        // line 1105
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 1107
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1107), "input", [], "any", false, false, false, 1107) == "input")) {
            // line 1108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1109
($context["form"] ?? null), "vars", [], "any", false, false, false, 1109), "input", [], "any", false, false, false, 1109) == "textarea")) {
            // line 1110
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1112
            $this->displayBlock("form_widget", $context, $blocks);
        }
        // line 1114
        echo "
    ";
        // line 1115
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1115), "position", [], "any", false, false, false, 1115) == "after")) {
            // line 1116
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1117
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1120
        echo "  </div>
";
    }

    // line 1123
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1124
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_15 = ($context["form"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_16 = ($context["form"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1128
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1129
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_17 = ($context["form"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_18 = ($context["form"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1133
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1134
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 1135
        echo "<div class=\"input-group\">";
        // line 1136
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1138
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1139
        echo "</div>
  ";
        // line 1140
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1143
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1144
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 1145
        echo "<div class=\"input-group\">";
        // line 1146
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1147
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1148
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1149
        echo "</div>
  ";
        // line 1150
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1153
    public function block_form_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1154
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1154), "unit", [], "any", true, true, false, 1154) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1154), "prepend_unit", [], "any", false, false, false, 1154))) {
            // line 1155
            echo "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1156), "unit", [], "any", false, false, false, 1156), "html", null, true);
            echo "</span>
    </div>
  ";
        }
    }

    // line 1161
    public function block_form_unit_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1162
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1162), "unit", [], "any", true, true, false, 1162) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1162), "prepend_unit", [], "any", false, false, false, 1162))) {
            // line 1163
            echo "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1164), "unit", [], "any", false, false, false, 1164), "html", null, true);
            echo "</span>
    </div>
  ";
        }
    }

    // line 1169
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1170
        echo "  ";
        if ( !(null === ($context["help"] ?? null))) {
            // line 1171
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1171)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 1171), "")) : ("")) . " form-text"))]);
            // line 1172
            echo "<small id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_compile_19 = $context;
            $__internal_compile_20 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_20)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1172, $this->getSourceContext());
            }
            $__internal_compile_20 = twig_to_array($__internal_compile_20);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_20));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_19;
            echo ">";
            echo ($context["help"] ?? null);
            echo "</small>
  ";
        }
        // line 1174
        echo "  ";
        if (array_key_exists("warning", $context)) {
            // line 1175
            echo "    ";
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "
  ";
        }
    }

    // line 1179
    public function block_form_prepend_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1180
        echo "  ";
        if ((array_key_exists("external_link", $context) && (twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1180) == "prepend"))) {
            // line 1181
            $this->displayBlock("form_external_link", $context, $blocks);
        }
    }

    // line 1185
    public function block_form_append_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1186
        echo "  ";
        if ((array_key_exists("external_link", $context) && (twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1186) == "append"))) {
            // line 1187
            $this->displayBlock("form_external_link", $context, $blocks);
        }
    }

    // line 1191
    public function block_form_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1192
        echo "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1193
            ob_start(function () { return ''; });
            // line 1194
            echo "<a ";
            $this->displayBlock("form_external_link_attributes", $context, $blocks);
            echo ">
        <i class=\"material-icons\">open_in_new</i>";
            $context["openingTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1198
            echo "<div class=\"small font-secondary";
            if ((twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "align", [], "any", false, false, false, 1198) === "right")) {
                echo " text-right";
            }
            echo "\">
      ";
            // line 1199
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1199), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
            echo "
    </div>
  ";
        }
    }

    // line 1204
    public function block_form_external_link_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1205
        $context["external_link_attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1205), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1205), "class", [], "any", true, true, false, 1205)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1205), "class", [], "any", false, false, false, 1205), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1206
        echo "
  ";
        // line 1207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["external_link_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1208
            echo "    ";
            if (!twig_in_filter($context["attrname"], [0 => "href", 1 => "class"])) {
                // line 1209
                echo "      ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"
    ";
            }
            // line 1211
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1212
        echo "
  target=\"_blank\"
  href=\"";
        // line 1214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "href", [], "any", false, false, false, 1214), "html", null, true);
        echo "\"
  class=\"";
        // line 1215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["external_link_attr"] ?? null), "class", [], "any", false, false, false, 1215), "html", null, true);
        echo "\"";
    }

    // line 1218
    public function block_custom_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1219
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 1219)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 1222
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1223
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1223), "id", [], "any", false, false, false, 1223)], "Admin.Global")]);
        // line 1224
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1225
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 1227
        echo "
  ";
        // line 1228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 1230
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1231
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 1232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1233
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1235
            echo "    </datalist>
  ";
        }
    }

    // line 1239
    public function block_form_prepend_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1240
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "prepend"))) {
            // line 1241
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1245
    public function block_form_append_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1246
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "append"))) {
            // line 1247
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1251
    public function block_form_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1252
        if (array_key_exists("alert_message", $context)) {
            // line 1253
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["alert_type"] ?? null), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                echo " expandable-alert";
            }
            echo "\" role=\"alert\">
    ";
            // line 1254
            if (array_key_exists("alert_title", $context)) {
                // line 1255
                echo "      <p class=\"alert-text\">
        ";
                // line 1256
                echo ($context["alert_title"] ?? null);
                echo "
      </p>
    ";
            } else {
                // line 1259
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1260
                    echo "        <p class=\"alert-text\">
          ";
                    // line 1261
                    echo $context["message"];
                    echo "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1264
                echo "    ";
            }
            // line 1265
            echo "
    ";
            // line 1266
            if (array_key_exists("alert_title", $context)) {
                // line 1267
                echo "      <div class=\"alert-more collapse\" id=\"expandable_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1267), "id", [], "any", false, false, false, 1267), "html", null, true);
                echo "\" style=\"\">
        ";
                // line 1268
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1269
                    echo "          <p>
            ";
                    // line 1270
                    echo $context["message"];
                    echo "
          </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1273
                echo "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1275), "id", [], "any", false, false, false, 1275), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1276
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                echo "
          </button>
       </div>
    ";
            }
            // line 1280
            echo "  </div>
  ";
        }
    }

    // line 1284
    public function block_unavailable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1285
        echo "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
";
    }

    // line 1292
    public function block_text_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1293
        echo "  ";
        // line 1294
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1295
        echo "<span class=\"label text-preview ";
        echo twig_escape_filter($this->env, ($context["preview_class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 1297
        echo "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1298
            echo "      ";
            echo ($context["prefix"] ?? null);
            echo "
    ";
        }
        // line 1300
        echo "
    ";
        // line 1302
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html");
        echo "

    ";
        // line 1305
        echo "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1306
            echo "      ";
            echo ($context["suffix"] ?? null);
            echo "
    ";
        }
        // line 1308
        echo "  </span>
";
    }

    // line 1311
    public function block_image_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1312
        echo "  ";
        // line 1313
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1314
        echo "<img src=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(("Image preview for " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1314), "name", [], "any", false, false, false, 1314))), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1314), "image_class", [], "any", false, false, false, 1314), "html", null, true);
        echo "\" />
";
    }

    // line 1317
    public function block_delta_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1318
        echo "  ";
        $context["quantity"] = ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1318)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", false, false, false, 1318), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1318), "vars", [], "any", false, false, false, 1318), "value", [], "any", false, false, false, 1318))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1318), "vars", [], "any", false, false, false, 1318), "value", [], "any", false, false, false, 1318)));
        // line 1319
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1319)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1319), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => ($context["quantity"] ?? null)]);
        // line 1320
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 1321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1321), 'widget', ["value" => ($context["quantity"] ?? null)]);
        echo "
    ";
        // line 1322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delta", [], "any", false, false, false, 1322), 'row');
        echo "
  </div>
";
    }

    // line 1326
    public function block_delta_quantity_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1327
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1327)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1327), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1328
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 1329
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1330
        echo "<span class=\"initial-quantity\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</span>
    <span class=\"quantity-update\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1333
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</span>
    </span>
  </div>
";
    }

    // line 1338
    public function block_delta_quantity_delta_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1339
        echo "  <div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1339)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 1339), "html", null, true);
        }
        echo "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 1342
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 1343
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 1345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 1347
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 1348
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 1349
        echo "</div>";
        // line 1350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 1351
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 1352
        echo "</div>
";
    }

    // line 1355
    public function block_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1356
        $context["type"] = "number";
        // line 1357
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1357)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1357), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1358
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 1361
    public function block_submittable_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1362
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1362)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1362), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1363
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1364
        $context["typeAttr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1364), "type_attr", [], "any", false, false, false, 1364), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1365
($context["form"] ?? null), "vars", [], "any", false, true, false, 1365), "type_attr", [], "any", false, true, false, 1365), "class", [], "any", true, true, false, 1365)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1365), "type_attr", [], "any", false, true, false, 1365), "class", [], "any", false, false, false, 1365), "")) : ("")) . " submittable-input")), "data-initial-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1366
($context["form"] ?? null), "value", [], "any", false, false, false, 1366), "vars", [], "any", false, false, false, 1366), "value", [], "any", false, false, false, 1366), "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1367
($context["form"] ?? null), "value", [], "any", false, false, false, 1367), "vars", [], "any", false, false, false, 1367), "value", [], "any", false, false, false, 1367)]);
        // line 1370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 1370), 'widget', ["attr" => ($context["typeAttr"] ?? null)]);
        // line 1371
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1372
        echo "</div>
";
    }

    // line 1375
    public function block_submittable_input_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1376
        echo "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
    }

    // line 1381
    public function block_submittable_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1382
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1382)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1382), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1383
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1384
        $context["attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1384), "attr", [], "any", false, false, false, 1384), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1385
($context["form"] ?? null), "vars", [], "any", false, true, false, 1385), "attr", [], "any", false, true, false, 1385), "class", [], "any", true, true, false, 1385)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1385), "attr", [], "any", false, true, false, 1385), "class", [], "any", false, false, false, 1385), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1386
($context["value"] ?? null), "value" =>         // line 1387
($context["value"] ?? null)]);
        // line 1390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        // line 1391
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1392
        echo "</div>
";
    }

    // line 1395
    public function block_navigation_tab_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1396
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1396)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1396), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1397
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
  <div id=\"";
        // line 1398
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1398), "id", [], "any", false, false, false, 1398), "html", null, true);
        echo "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1404
        $context["firstRenderedChild"] = true;
        // line 1405
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1405));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1406
            echo "      ";
            if ((( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1406) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1406), "name", [], "any", false, false, false, 1406) != "_toolbar_buttons")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1406), "name", [], "any", false, false, false, 1406) != "_token"))) {
                // line 1407
                echo "      <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1407), "id", [], "any", false, false, false, 1407), "html", null, true);
                echo "-tab-nav\" class=\"nav-item";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1407), "valid", [], "any", false, false, false, 1407)) {
                    echo " has-error";
                }
                echo "\">
        <a href=\"#";
                // line 1408
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1408), "id", [], "any", false, false, false, 1408), "html", null, true);
                echo "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if (($context["firstRenderedChild"] ?? null)) {
                    echo " active";
                }
                echo "\">
          ";
                // line 1409
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1409), "label", [], "any", false, false, false, 1409), "html", null, true);
                echo "
        </a>
      </li>
      ";
                // line 1412
                $context["firstRenderedChild"] = false;
                // line 1413
                echo "      ";
            }
            // line 1414
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1415
        echo "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1421
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", [0 => "_toolbar_buttons"], "method", false, false, false, 1421)) {
            // line 1422
            echo "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1423
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_toolbar_buttons", [], "any", false, false, false, 1423), 'widget');
            echo "
    </div>
    ";
        }
        // line 1426
        echo "  </div>

  <div id=\"";
        // line 1428
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1428), "id", [], "any", false, false, false, 1428), "html", null, true);
        echo "-tabs-content\" class=\"tab-content\">
    ";
        // line 1429
        $context["firstRenderedChild"] = true;
        // line 1430
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1430));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1431
            echo "      ";
            if (( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1431) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1431), "name", [], "any", false, false, false, 1431) != "_token"))) {
                // line 1432
                echo "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if (($context["firstRenderedChild"] ?? null)) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1432), "id", [], "any", false, false, false, 1432), "html", null, true);
                echo "-tab\">
        ";
                // line 1433
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1433), "label_tab", [], "any", true, true, false, 1433)) {
                    // line 1434
                    echo "          ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1434), "label_tab", [], "any", false, false, false, 1434)) ? [] : ["label" => $_label_]));
                    echo "
        ";
                }
                // line 1436
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
                // line 1437
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
      </div>
      ";
                // line 1439
                $context["firstRenderedChild"] = false;
                // line 1440
                echo "      ";
            }
            // line 1441
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1442
        echo "  </div>
</div>
";
    }

    // line 1446
    public function block_accordion_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1447
        echo "<div class=\"accordion accordion-form\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1447), "id", [], "any", false, false, false, 1447), "html", null, true);
        echo "\">
    ";
        // line 1448
        $context["firstChild"] = true;
        // line 1449
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1450
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1450), "compound", [], "any", false, false, false, 1450)) {
                // line 1451
                echo "      ";
                $context["hasError"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1451), "valid", [], "any", false, false, false, 1451) != true);
                // line 1452
                echo "      ";
                $context["isExpanded"] = ((($context["firstChild"] ?? null) && ($context["expand_first"] ?? null)) || (($context["hasError"] ?? null) && ($context["expand_on_error"] ?? null)));
                // line 1453
                echo "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1454
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1454), "id", [], "any", false, false, false, 1454), "html", null, true);
                echo "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1457
                if (($context["hasError"] ?? null)) {
                    echo " has-error ";
                }
                echo " btn btn-block text-left";
                if ( !($context["isExpanded"] ?? null)) {
                    echo " collapsed";
                }
                echo "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1460
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1460), "id", [], "any", false, false, false, 1460), "html", null, true);
                echo "_accordion\"
              aria-expanded=\"";
                // line 1461
                if (($context["isExpanded"] ?? null)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\"
              aria-controls=\"";
                // line 1462
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1462), "id", [], "any", false, false, false, 1462), "html", null, true);
                echo "_accordion\">
              ";
                // line 1463
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1463), "label", [], "any", false, false, false, 1463), "html", null, true);
                echo "
              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1469
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1469), "id", [], "any", false, false, false, 1469), "html", null, true);
                echo "_accordion\" class=\"collapse";
                if (($context["isExpanded"] ?? null)) {
                    echo " show";
                }
                echo "\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1469), "id", [], "any", false, false, false, 1469), "html", null, true);
                echo "_accordion_header\" ";
                if (($context["display_one"] ?? null)) {
                    echo "data-parent=\"#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1469), "id", [], "any", false, false, false, 1469), "html", null, true);
                    echo "\"";
                }
                echo ">
          <div class=\"card-body\">
            ";
                // line 1471
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1472
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ($context["childAttr"] ?? null)]);
                echo "
            ";
                // line 1473
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
          </div>
        </div>
      </div>
      ";
                // line 1477
                $context["firstChild"] = false;
                // line 1478
                echo "      ";
            }
            // line 1479
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1480
        echo "
    ";
        // line 1482
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
  </div>";
    }

    // line 1486
    public function block_button_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1487
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1488
($context["attr"] ?? null), "class", [], "any", true, true, false, 1488)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1488), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1490
($context["justify_content"] ?? null))]);
        // line 1492
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1493
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["button_groups"] ?? null));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1494
            echo "      <div class=\"btn-group group-";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "\">
        ";
            // line 1495
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["buttons"]);
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 1496
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1496), 'widget');
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1498
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['buttons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1500
        echo "  </div>
";
    }

    // line 1503
    public function block_avatar_url_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1504
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', ["attr" => ($context["attr"] ?? null)]);
        echo "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1509
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 1509), "vars", [], "any", false, false, false, 1509), "value", [], "any", false, false, false, 1509), "avatar_url", [], "any", false, false, false, 1509), "html", null, true);
        echo "\" alt=\"\">
    </div>
  </div>
";
    }

    // line 1514
    public function block_change_password_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1515
        echo "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        echo "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1521
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1521), "change_password_button", [], "any", false, false, false, 1521), 'row');
        echo "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1525
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1525), "old_password", [], "any", false, false, false, 1525), 'row');
        echo "

        ";
        // line 1528
        echo "        ";
        // line 1529
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1529), "new_password", [], "any", false, false, false, 1529), 'row');
        echo "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1534), "generated_password", [], "any", false, false, false, 1534), 'widget');
        echo "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1537
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1537), "generate_password_button", [], "any", false, false, false, 1537), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 1540
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1540), "cancel_button", [], "any", false, false, false, 1540), 'row');
        echo "

        ";
        // line 1543
        echo "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-medium\">";
        // line 1545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-high\">";
        // line 1546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-extreme\">";
        // line 1547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 1554
    public function block_price_reduction_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1555
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1555)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1555), "")) : ("")) . " reduction-widget row"))]);
        // line 1556
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1557
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1557));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1558
            echo "      ";
            $__internal_compile_21 = $context;
            $__internal_compile_22 = ["row_attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1558), "row_attr", [], "any", false, false, false, 1558), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1558), "row_attr", [], "any", false, true, false, 1558), "class", [], "any", true, true, false, 1558)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1558), "row_attr", [], "any", false, true, false, 1558), "class", [], "any", false, false, false, 1558), "")) : ("")) . " col col-md-3"))])];
            if (!twig_test_iterable($__internal_compile_22)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1558, $this->getSourceContext());
            }
            $__internal_compile_22 = twig_to_array($__internal_compile_22);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_22));
            // line 1559
            echo "      <div ";
            $this->displayBlock("row_attributes", $context, $blocks);
            echo ">
      ";
            $context = $__internal_compile_21;
            // line 1561
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 1562
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            echo "
      </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1565
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  4361 => 1565,  4344 => 1562,  4339 => 1561,  4333 => 1559,  4324 => 1558,  4307 => 1557,  4302 => 1556,  4300 => 1555,  4296 => 1554,  4286 => 1547,  4282 => 1546,  4278 => 1545,  4274 => 1544,  4271 => 1543,  4266 => 1540,  4260 => 1537,  4254 => 1534,  4245 => 1529,  4243 => 1528,  4237 => 1525,  4230 => 1521,  4224 => 1517,  4220 => 1515,  4216 => 1514,  4208 => 1509,  4199 => 1504,  4195 => 1503,  4190 => 1500,  4183 => 1498,  4177 => 1496,  4173 => 1495,  4168 => 1494,  4164 => 1493,  4159 => 1492,  4157 => 1490,  4156 => 1488,  4155 => 1487,  4151 => 1486,  4144 => 1482,  4141 => 1480,  4135 => 1479,  4132 => 1478,  4130 => 1477,  4123 => 1473,  4118 => 1472,  4116 => 1471,  4099 => 1469,  4090 => 1463,  4086 => 1462,  4078 => 1461,  4074 => 1460,  4062 => 1457,  4056 => 1454,  4053 => 1453,  4050 => 1452,  4047 => 1451,  4044 => 1450,  4039 => 1449,  4037 => 1448,  4032 => 1447,  4028 => 1446,  4022 => 1442,  4016 => 1441,  4013 => 1440,  4011 => 1439,  4006 => 1437,  4001 => 1436,  3995 => 1434,  3993 => 1433,  3984 => 1432,  3981 => 1431,  3976 => 1430,  3974 => 1429,  3970 => 1428,  3966 => 1426,  3960 => 1423,  3957 => 1422,  3955 => 1421,  3947 => 1415,  3941 => 1414,  3938 => 1413,  3936 => 1412,  3930 => 1409,  3922 => 1408,  3913 => 1407,  3910 => 1406,  3905 => 1405,  3903 => 1404,  3894 => 1398,  3889 => 1397,  3887 => 1396,  3883 => 1395,  3878 => 1392,  3876 => 1391,  3874 => 1390,  3872 => 1387,  3871 => 1386,  3870 => 1385,  3869 => 1384,  3865 => 1383,  3863 => 1382,  3859 => 1381,  3852 => 1376,  3848 => 1375,  3843 => 1372,  3841 => 1371,  3839 => 1370,  3837 => 1367,  3836 => 1366,  3835 => 1365,  3834 => 1364,  3830 => 1363,  3828 => 1362,  3824 => 1361,  3820 => 1358,  3818 => 1357,  3816 => 1356,  3812 => 1355,  3807 => 1352,  3805 => 1351,  3803 => 1350,  3801 => 1349,  3799 => 1348,  3797 => 1347,  3795 => 1345,  3793 => 1343,  3791 => 1342,  3789 => 1341,  3777 => 1339,  3773 => 1338,  3765 => 1333,  3758 => 1330,  3756 => 1329,  3752 => 1328,  3750 => 1327,  3746 => 1326,  3739 => 1322,  3735 => 1321,  3730 => 1320,  3727 => 1319,  3724 => 1318,  3720 => 1317,  3709 => 1314,  3707 => 1313,  3705 => 1312,  3701 => 1311,  3696 => 1308,  3690 => 1306,  3687 => 1305,  3681 => 1302,  3678 => 1300,  3672 => 1298,  3669 => 1297,  3664 => 1295,  3662 => 1294,  3660 => 1293,  3656 => 1292,  3648 => 1287,  3644 => 1285,  3640 => 1284,  3634 => 1280,  3627 => 1276,  3623 => 1275,  3619 => 1273,  3610 => 1270,  3607 => 1269,  3603 => 1268,  3598 => 1267,  3596 => 1266,  3593 => 1265,  3590 => 1264,  3581 => 1261,  3578 => 1260,  3573 => 1259,  3567 => 1256,  3564 => 1255,  3562 => 1254,  3554 => 1253,  3552 => 1252,  3548 => 1251,  3543 => 1247,  3541 => 1246,  3537 => 1245,  3532 => 1241,  3530 => 1240,  3526 => 1239,  3520 => 1235,  3511 => 1233,  3507 => 1232,  3502 => 1231,  3500 => 1230,  3495 => 1228,  3492 => 1227,  3489 => 1225,  3487 => 1224,  3485 => 1223,  3481 => 1222,  3476 => 1219,  3472 => 1218,  3467 => 1215,  3463 => 1214,  3459 => 1212,  3453 => 1211,  3445 => 1209,  3442 => 1208,  3438 => 1207,  3435 => 1206,  3433 => 1205,  3429 => 1204,  3421 => 1199,  3414 => 1198,  3408 => 1194,  3406 => 1193,  3403 => 1192,  3399 => 1191,  3394 => 1187,  3391 => 1186,  3387 => 1185,  3382 => 1181,  3379 => 1180,  3375 => 1179,  3367 => 1175,  3364 => 1174,  3346 => 1172,  3344 => 1171,  3341 => 1170,  3337 => 1169,  3329 => 1164,  3326 => 1163,  3323 => 1162,  3319 => 1161,  3311 => 1156,  3308 => 1155,  3305 => 1154,  3301 => 1153,  3297 => 1150,  3294 => 1149,  3292 => 1148,  3290 => 1147,  3288 => 1146,  3286 => 1145,  3284 => 1144,  3280 => 1143,  3276 => 1140,  3273 => 1139,  3271 => 1138,  3269 => 1137,  3267 => 1136,  3265 => 1135,  3263 => 1134,  3259 => 1133,  3253 => 1130,  3248 => 1129,  3244 => 1128,  3238 => 1125,  3233 => 1124,  3229 => 1123,  3224 => 1120,  3218 => 1117,  3215 => 1116,  3213 => 1115,  3210 => 1114,  3207 => 1112,  3204 => 1110,  3202 => 1109,  3200 => 1108,  3198 => 1107,  3196 => 1105,  3194 => 1104,  3191 => 1103,  3185 => 1100,  3182 => 1099,  3180 => 1098,  3177 => 1097,  3175 => 1096,  3172 => 1095,  3168 => 1094,  3161 => 1089,  3159 => 1087,  3158 => 1085,  3157 => 1084,  3151 => 1081,  3147 => 1079,  3144 => 1077,  3141 => 1075,  3139 => 1074,  3137 => 1070,  3135 => 1069,  3131 => 1068,  3125 => 1065,  3118 => 1061,  3113 => 1059,  3109 => 1058,  3104 => 1055,  3101 => 1053,  3098 => 1051,  3096 => 1050,  3093 => 1049,  3089 => 1048,  3078 => 1040,  3074 => 1039,  3070 => 1038,  3066 => 1036,  3064 => 1035,  3060 => 1033,  3057 => 1032,  3053 => 1031,  3045 => 1026,  3040 => 1025,  3038 => 1024,  3036 => 1023,  3030 => 1020,  3028 => 1019,  3023 => 1018,  3021 => 1016,  3018 => 1015,  3016 => 1013,  3014 => 1012,  3012 => 1011,  3010 => 1006,  3009 => 1005,  3002 => 1001,  2998 => 999,  2994 => 998,  2988 => 993,  2986 => 992,  2984 => 989,  2983 => 988,  2982 => 987,  2981 => 986,  2978 => 984,  2975 => 983,  2973 => 982,  2970 => 981,  2965 => 979,  2963 => 978,  2961 => 977,  2958 => 975,  2955 => 974,  2951 => 973,  2946 => 970,  2940 => 968,  2934 => 966,  2932 => 965,  2928 => 964,  2924 => 961,  2919 => 958,  2908 => 956,  2904 => 955,  2900 => 954,  2895 => 952,  2890 => 950,  2886 => 948,  2880 => 946,  2878 => 945,  2872 => 941,  2869 => 940,  2860 => 937,  2853 => 936,  2850 => 935,  2847 => 934,  2844 => 933,  2841 => 932,  2838 => 931,  2834 => 930,  2827 => 929,  2825 => 928,  2821 => 927,  2815 => 923,  2806 => 920,  2785 => 919,  2781 => 918,  2777 => 916,  2773 => 914,  2763 => 910,  2753 => 909,  2750 => 908,  2746 => 907,  2743 => 906,  2741 => 905,  2736 => 904,  2732 => 903,  2728 => 850,  2722 => 896,  2715 => 894,  2708 => 892,  2704 => 890,  2701 => 889,  2695 => 887,  2689 => 885,  2687 => 884,  2684 => 883,  2681 => 882,  2679 => 881,  2676 => 880,  2672 => 879,  2667 => 877,  2663 => 875,  2659 => 874,  2654 => 871,  2639 => 869,  2633 => 867,  2627 => 864,  2621 => 861,  2617 => 859,  2615 => 858,  2612 => 857,  2595 => 856,  2591 => 855,  2581 => 851,  2578 => 850,  2574 => 849,  2570 => 813,  2564 => 843,  2554 => 839,  2550 => 837,  2546 => 836,  2536 => 829,  2532 => 827,  2528 => 825,  2526 => 824,  2514 => 814,  2511 => 813,  2507 => 812,  2500 => 805,  2493 => 802,  2491 => 801,  2490 => 800,  2489 => 799,  2487 => 798,  2483 => 797,  2476 => 792,  2473 => 791,  2469 => 790,  2463 => 785,  2455 => 781,  2453 => 780,  2452 => 779,  2451 => 778,  2450 => 777,  2447 => 776,  2443 => 775,  2437 => 771,  2429 => 765,  2424 => 762,  2418 => 759,  2413 => 757,  2406 => 753,  2402 => 751,  2400 => 750,  2394 => 747,  2390 => 746,  2387 => 745,  2382 => 742,  2374 => 739,  2372 => 738,  2371 => 737,  2370 => 736,  2368 => 735,  2364 => 734,  2361 => 732,  2359 => 731,  2353 => 729,  2351 => 728,  2349 => 726,  2346 => 724,  2342 => 723,  2334 => 719,  2328 => 717,  2326 => 716,  2322 => 715,  2318 => 710,  2316 => 709,  2309 => 708,  2307 => 707,  2305 => 706,  2301 => 705,  2296 => 701,  2294 => 700,  2290 => 699,  2288 => 698,  2285 => 696,  2283 => 695,  2279 => 694,  2277 => 693,  2275 => 692,  2273 => 691,  2269 => 690,  2264 => 687,  2259 => 684,  2257 => 683,  2255 => 682,  2253 => 681,  2239 => 680,  2236 => 679,  2232 => 677,  2230 => 676,  2228 => 674,  2226 => 672,  2211 => 671,  2209 => 670,  2206 => 669,  2203 => 668,  2200 => 667,  2197 => 666,  2194 => 665,  2191 => 664,  2188 => 663,  2185 => 662,  2182 => 661,  2179 => 660,  2176 => 659,  2174 => 658,  2170 => 657,  2166 => 654,  2162 => 653,  2158 => 650,  2154 => 649,  2150 => 646,  2148 => 645,  2144 => 643,  2135 => 634,  2118 => 631,  2114 => 630,  2110 => 629,  2107 => 628,  2090 => 627,  2084 => 623,  2080 => 622,  2076 => 621,  2068 => 616,  2062 => 613,  2057 => 612,  2053 => 611,  2042 => 607,  2040 => 606,  2036 => 605,  2034 => 604,  2030 => 603,  2026 => 600,  2024 => 580,  2018 => 596,  2004 => 595,  1996 => 594,  1992 => 592,  1987 => 591,  1983 => 590,  1979 => 589,  1975 => 588,  1971 => 587,  1966 => 586,  1963 => 585,  1946 => 584,  1942 => 583,  1922 => 582,  1919 => 581,  1916 => 580,  1912 => 579,  1908 => 554,  1905 => 576,  1898 => 572,  1892 => 569,  1888 => 568,  1883 => 566,  1879 => 564,  1877 => 563,  1872 => 561,  1866 => 558,  1862 => 557,  1858 => 555,  1855 => 554,  1851 => 553,  1847 => 537,  1842 => 548,  1837 => 546,  1832 => 545,  1830 => 544,  1826 => 543,  1820 => 540,  1816 => 538,  1813 => 537,  1809 => 536,  1805 => 522,  1800 => 532,  1782 => 525,  1779 => 524,  1776 => 523,  1773 => 522,  1769 => 521,  1765 => 518,  1760 => 515,  1751 => 512,  1746 => 510,  1743 => 509,  1739 => 508,  1735 => 507,  1729 => 504,  1724 => 502,  1716 => 496,  1714 => 495,  1711 => 494,  1702 => 491,  1698 => 490,  1695 => 489,  1692 => 488,  1689 => 487,  1687 => 486,  1684 => 485,  1681 => 484,  1678 => 483,  1674 => 482,  1669 => 480,  1665 => 479,  1661 => 476,  1656 => 473,  1645 => 471,  1641 => 470,  1637 => 469,  1631 => 466,  1626 => 464,  1618 => 458,  1616 => 457,  1613 => 456,  1597 => 454,  1595 => 453,  1592 => 451,  1589 => 450,  1587 => 449,  1584 => 448,  1581 => 447,  1578 => 446,  1561 => 445,  1556 => 443,  1552 => 442,  1548 => 439,  1545 => 437,  1543 => 436,  1539 => 435,  1533 => 431,  1524 => 428,  1520 => 427,  1499 => 426,  1495 => 425,  1491 => 423,  1487 => 421,  1477 => 417,  1467 => 416,  1464 => 415,  1460 => 414,  1457 => 413,  1455 => 412,  1451 => 411,  1446 => 410,  1442 => 409,  1438 => 406,  1434 => 404,  1417 => 402,  1414 => 401,  1397 => 400,  1394 => 399,  1391 => 398,  1387 => 395,  1381 => 393,  1379 => 392,  1375 => 391,  1367 => 390,  1363 => 388,  1359 => 385,  1353 => 383,  1350 => 382,  1345 => 380,  1340 => 378,  1338 => 377,  1330 => 376,  1326 => 374,  1323 => 373,  1321 => 372,  1318 => 371,  1314 => 370,  1309 => 366,  1292 => 364,  1275 => 363,  1272 => 362,  1266 => 360,  1262 => 359,  1257 => 355,  1251 => 352,  1250 => 351,  1249 => 350,  1248 => 349,  1244 => 348,  1240 => 347,  1237 => 345,  1231 => 342,  1230 => 341,  1229 => 340,  1228 => 339,  1224 => 338,  1222 => 337,  1220 => 336,  1216 => 335,  1212 => 332,  1210 => 331,  1206 => 330,  1200 => 327,  1198 => 326,  1194 => 325,  1189 => 322,  1185 => 321,  1181 => 320,  1175 => 319,  1172 => 318,  1169 => 317,  1166 => 316,  1163 => 315,  1160 => 314,  1157 => 313,  1154 => 312,  1151 => 311,  1149 => 310,  1146 => 309,  1143 => 308,  1141 => 307,  1137 => 306,  1133 => 303,  1131 => 302,  1127 => 301,  1123 => 298,  1119 => 297,  1117 => 296,  1113 => 295,  1107 => 290,  1104 => 289,  1096 => 288,  1091 => 286,  1089 => 285,  1087 => 284,  1084 => 282,  1082 => 281,  1078 => 280,  1072 => 275,  1070 => 274,  1068 => 272,  1067 => 271,  1066 => 270,  1065 => 269,  1060 => 267,  1058 => 266,  1056 => 265,  1053 => 263,  1051 => 262,  1047 => 261,  1043 => 258,  1039 => 257,  1037 => 256,  1033 => 255,  1028 => 251,  1026 => 250,  1024 => 249,  1022 => 248,  1020 => 247,  1016 => 246,  1014 => 245,  1011 => 243,  1009 => 242,  1005 => 241,  998 => 235,  996 => 234,  994 => 233,  990 => 232,  986 => 229,  982 => 227,  976 => 224,  973 => 223,  971 => 222,  969 => 221,  963 => 218,  960 => 217,  957 => 216,  955 => 215,  952 => 214,  948 => 213,  943 => 210,  941 => 209,  939 => 208,  937 => 207,  933 => 206,  925 => 200,  923 => 199,  918 => 197,  916 => 196,  913 => 195,  910 => 194,  907 => 193,  904 => 192,  902 => 191,  899 => 190,  894 => 188,  889 => 187,  886 => 186,  884 => 185,  879 => 184,  875 => 182,  873 => 181,  856 => 180,  854 => 179,  850 => 175,  847 => 172,  846 => 171,  845 => 170,  843 => 169,  840 => 168,  837 => 166,  834 => 165,  831 => 163,  829 => 162,  827 => 161,  823 => 160,  818 => 140,  812 => 153,  809 => 152,  806 => 151,  803 => 150,  800 => 149,  797 => 148,  794 => 147,  791 => 146,  788 => 145,  785 => 144,  782 => 143,  780 => 142,  777 => 141,  774 => 140,  772 => 139,  768 => 138,  761 => 134,  756 => 133,  753 => 132,  750 => 131,  746 => 130,  739 => 126,  734 => 125,  731 => 124,  728 => 123,  724 => 122,  718 => 114,  716 => 113,  712 => 111,  710 => 110,  708 => 109,  706 => 107,  704 => 106,  702 => 105,  700 => 103,  698 => 102,  696 => 101,  685 => 100,  681 => 99,  677 => 94,  673 => 93,  671 => 92,  667 => 91,  661 => 88,  655 => 85,  650 => 84,  648 => 83,  646 => 82,  642 => 81,  638 => 78,  634 => 77,  630 => 76,  626 => 73,  623 => 72,  620 => 71,  617 => 70,  615 => 69,  611 => 68,  604 => 65,  601 => 64,  598 => 63,  595 => 62,  592 => 61,  589 => 60,  586 => 59,  582 => 58,  578 => 1554,  576 => 1514,  573 => 1513,  571 => 1503,  568 => 1502,  566 => 1486,  564 => 1446,  562 => 1395,  560 => 1381,  557 => 1380,  555 => 1375,  552 => 1374,  550 => 1361,  547 => 1360,  545 => 1355,  542 => 1354,  540 => 1338,  537 => 1337,  535 => 1326,  532 => 1325,  530 => 1317,  527 => 1316,  525 => 1311,  522 => 1310,  520 => 1292,  517 => 1291,  515 => 1284,  513 => 1251,  511 => 1245,  509 => 1239,  507 => 1222,  504 => 1221,  502 => 1218,  500 => 1204,  498 => 1191,  495 => 1190,  493 => 1185,  490 => 1184,  488 => 1179,  485 => 1178,  483 => 1169,  480 => 1168,  478 => 1161,  475 => 1160,  473 => 1153,  471 => 1143,  469 => 1133,  467 => 1128,  464 => 1127,  462 => 1123,  459 => 1122,  457 => 1094,  454 => 1093,  452 => 1068,  449 => 1067,  447 => 1048,  444 => 1047,  442 => 1031,  439 => 1030,  437 => 998,  434 => 997,  432 => 973,  429 => 972,  427 => 964,  424 => 963,  422 => 927,  419 => 926,  417 => 903,  414 => 901,  412 => 849,  409 => 848,  407 => 812,  404 => 811,  401 => 809,  399 => 790,  396 => 789,  394 => 723,  391 => 722,  389 => 715,  386 => 714,  383 => 712,  381 => 705,  378 => 704,  376 => 690,  373 => 689,  371 => 657,  368 => 656,  366 => 653,  363 => 652,  361 => 649,  358 => 648,  356 => 643,  353 => 642,  350 => 640,  348 => 611,  346 => 603,  344 => 579,  341 => 578,  339 => 553,  336 => 552,  334 => 536,  331 => 535,  329 => 521,  326 => 520,  324 => 479,  321 => 478,  319 => 442,  316 => 441,  314 => 435,  311 => 434,  309 => 409,  306 => 408,  304 => 370,  301 => 369,  299 => 359,  296 => 358,  294 => 335,  291 => 334,  289 => 330,  286 => 329,  284 => 325,  281 => 324,  279 => 306,  276 => 305,  274 => 301,  272 => 295,  270 => 280,  267 => 279,  265 => 261,  263 => 255,  261 => 241,  258 => 240,  256 => 232,  253 => 231,  251 => 213,  248 => 212,  246 => 206,  243 => 205,  241 => 160,  238 => 157,  236 => 138,  233 => 137,  231 => 130,  228 => 129,  226 => 122,  223 => 117,  221 => 99,  218 => 98,  216 => 91,  214 => 81,  212 => 76,  210 => 68,  208 => 58,  205 => 57,  202 => 55,  199 => 53,  196 => 46,  193 => 34,  190 => 25,  77 => 52,  70 => 51,  63 => 50,  56 => 49,  49 => 48,  30 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
