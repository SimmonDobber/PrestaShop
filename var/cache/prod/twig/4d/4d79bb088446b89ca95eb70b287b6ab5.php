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

/* @PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig */
class __TwigTemplate_a791d7aa9183884ad2190ea55fad1b28 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'perfs_form_smarty_cache' => [$this, 'block_perfs_form_smarty_cache'],
            'perfs_form_smarty_cache_form' => [$this, 'block_perfs_form_smarty_cache_form'],
            'perfs_form_debug_mode' => [$this, 'block_perfs_form_debug_mode'],
            'perfs_form_debug_mode_form' => [$this, 'block_perfs_form_debug_mode_form'],
            'perfs_form_modules' => [$this, 'block_perfs_form_modules'],
            'perfs_form_modules_form' => [$this, 'block_perfs_form_modules_form'],
            'perfs_form_optional_features' => [$this, 'block_perfs_form_optional_features'],
            'perfs_form_optional_features_form' => [$this, 'block_perfs_form_optional_features_form'],
            'perfs_form_ccc' => [$this, 'block_perfs_form_ccc'],
            'perfs_form_ccc_form' => [$this, 'block_perfs_form_ccc_form'],
            'perfs_form_media_servers' => [$this, 'block_perfs_form_media_servers'],
            'perfs_form_media_servers_form' => [$this, 'block_perfs_form_media_servers_form'],
            'perfs_form_caching' => [$this, 'block_perfs_form_caching'],
            'perfs_form_caching_form' => [$this, 'block_perfs_form_caching_form'],
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
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["smartyForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["debugModeForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["optionalFeaturesForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 30
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["combineCompressCacheForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 31
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["mediaServersForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 32
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["cachingForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["smartyForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_smarty_save")]);
        echo "
  ";
        // line 36
        $this->displayBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 56
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["smartyForm"] ?? null), 'form_end');
        echo "

  ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["debugModeForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_debug_mode_save")]);
        echo "
  ";
        // line 59
        $this->displayBlock('perfs_form_debug_mode', $context, $blocks);
        // line 79
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["debugModeForm"] ?? null), 'form_end');
        echo "

  ";
        // line 81
        $this->displayBlock('perfs_form_modules', $context, $blocks);
        // line 124
        echo "
  ";
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionalFeaturesForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_optional_features_save")]);
        echo "
  ";
        // line 126
        $this->displayBlock('perfs_form_optional_features', $context, $blocks);
        // line 155
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionalFeaturesForm"] ?? null), 'form_end');
        echo "

  ";
        // line 157
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combineCompressCacheForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_combine_compress_cache_save")]);
        echo "
  ";
        // line 158
        $this->displayBlock('perfs_form_ccc', $context, $blocks);
        // line 187
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combineCompressCacheForm"] ?? null), 'form_end');
        echo "

  ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mediaServersForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_media_servers_save")]);
        echo "
  ";
        // line 190
        $this->displayBlock('perfs_form_media_servers', $context, $blocks);
        // line 219
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mediaServersForm"] ?? null), 'form_end');
        echo "

  ";
        // line 221
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cachingForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_caching_save")]);
        echo "
  ";
        // line 222
        $this->displayBlock('perfs_form_caching', $context, $blocks);
        // line 244
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cachingForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 36
    public function block_perfs_form_smarty_cache($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">business_center</i>
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Smarty", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 44
        $this->displayBlock('perfs_form_smarty_cache_form', $context, $blocks);
        // line 47
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    // line 44
    public function block_perfs_form_smarty_cache_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["smartyForm"] ?? null), 'widget');
        echo "
          ";
    }

    // line 59
    public function block_perfs_form_debug_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 67
        $this->displayBlock('perfs_form_debug_mode_form', $context, $blocks);
        // line 70
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    // line 67
    public function block_perfs_form_debug_mode_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["debugModeForm"] ?? null), 'widget');
        echo "
          ";
    }

    // line 81
    public function block_perfs_form_modules($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "    <div class=\"card form-horizontal\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span
          class=\"help-box\"
          data-container=\"body\"
          data-toggle=\"popover\"
          data-trigger=\"hover\"
          data-placement=\"right\"
          data-content=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This feature allows you to identify modules that might be causing bugs on your store. Disable all non-built-in modules (not listed in composer.json). Then, re-enable each module one by one and check that everything works properly before moving on to the next one.", [], "Admin.Advparameters.Help"), "html_attr");
        echo "\"
          title=\"\"
          data-original-title=\"\"
        ></span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 100
        $this->displayBlock('perfs_form_modules_form', $context, $blocks);
        // line 120
        echo "        </div>
      </div>
    </div>
  ";
    }

    // line 100
    public function block_perfs_form_modules_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable non built-in modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
              </label>

              <div class=\"col-sm input-container\">
                <a
                  class=\"btn btn-primary pointer\"
                  href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_module_disable_non_builtin");
        echo "\"
                  id=\"disableNonBuiltInModulesBtn\"
                  data-confirm-title=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable all non-built-in modules?", [], "Advparameters.Feature"), "html", null, true);
        echo "\"
                  data-confirm-button-label=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        echo "\"
                  data-close-button-label=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
                >
                  ";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        echo "
                </a>
              </div>
            </div>
          ";
    }

    // line 126
    public function block_perfs_form_optional_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "    <div class=\"card\" id=\"optional_features\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">extension</i>
        ";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some features can be disabled in order to improve performance.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 143
        $this->displayBlock('perfs_form_optional_features_form', $context, $blocks);
        // line 146
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    // line 143
    public function block_perfs_form_optional_features_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["optionalFeaturesForm"] ?? null), 'widget');
        echo "
          ";
    }

    // line 158
    public function block_perfs_form_ccc($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">zoom_out_map</i>
        ";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC (Combine, Compress and Cache)", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.7+. Otherwise, CCC will cause problems.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 175
        $this->displayBlock('perfs_form_ccc_form', $context, $blocks);
        // line 178
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    // line 175
    public function block_perfs_form_ccc_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combineCompressCacheForm"] ?? null), 'widget');
        echo "
          ";
    }

    // line 190
    public function block_perfs_form_media_servers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media servers (use only with CCC)", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 207
        $this->displayBlock('perfs_form_media_servers_form', $context, $blocks);
        // line 210
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    // line 207
    public function block_perfs_form_media_servers_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 208
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["mediaServersForm"] ?? null), 'widget');
        echo "
          ";
    }

    // line 222
    public function block_perfs_form_caching($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Caching", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 230
        $this->displayBlock('perfs_form_caching_form', $context, $blocks);
        // line 233
        echo "
          ";
        // line 234
        echo twig_include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", ["form" => ($context["memcacheForm"] ?? null)]);
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    // line 230
    public function block_perfs_form_caching_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cachingForm"] ?? null), 'widget');
        echo "
          ";
    }

    // line 247
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 248
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/performance_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        echo "\"></script>
  <script>
    var configuration = {
      'addServerUrl': '";
        // line 253
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_add"), "js"), "html", null, true);
        echo "',
      'removeServerUrl': '";
        // line 254
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_delete"), "js"), "html", null, true);
        echo "',
      'testServerUrl': '";
        // line 255
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_test"), "js"), "html", null, true);
        echo "'
    };
    var app = new PerformancePage(configuration.addServerUrl, configuration.removeServerUrl, configuration.testServerUrl);

    window.addEventListener('load', function () {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 275,  572 => 255,  568 => 254,  564 => 253,  558 => 250,  554 => 249,  549 => 248,  545 => 247,  538 => 231,  534 => 230,  525 => 239,  517 => 234,  514 => 233,  512 => 230,  505 => 226,  500 => 223,  496 => 222,  489 => 208,  485 => 207,  476 => 214,  470 => 210,  468 => 207,  459 => 201,  449 => 194,  444 => 191,  440 => 190,  433 => 176,  429 => 175,  420 => 182,  414 => 178,  412 => 175,  403 => 169,  393 => 162,  388 => 159,  384 => 158,  377 => 144,  373 => 143,  364 => 150,  358 => 146,  356 => 143,  347 => 137,  337 => 130,  332 => 127,  328 => 126,  319 => 115,  314 => 113,  310 => 112,  306 => 111,  301 => 109,  292 => 103,  288 => 101,  284 => 100,  277 => 120,  275 => 100,  265 => 93,  254 => 85,  249 => 82,  245 => 81,  238 => 68,  234 => 67,  225 => 74,  219 => 70,  217 => 67,  210 => 63,  205 => 60,  201 => 59,  194 => 45,  190 => 44,  181 => 51,  175 => 47,  173 => 44,  166 => 40,  161 => 37,  157 => 36,  150 => 244,  148 => 222,  144 => 221,  138 => 219,  136 => 190,  132 => 189,  126 => 187,  124 => 158,  120 => 157,  114 => 155,  112 => 126,  108 => 125,  105 => 124,  103 => 81,  97 => 79,  95 => 59,  91 => 58,  85 => 56,  83 => 36,  78 => 35,  74 => 34,  69 => 25,  67 => 32,  65 => 31,  63 => 30,  61 => 29,  59 => 28,  57 => 27,  50 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
