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

/* @PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig */
class __TwigTemplate_4b8a8b01c1ae3fb2fb2bf97c9c66c3f1 extends Template
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
            'administration_form_upload_quota' => [$this, 'block_administration_form_upload_quota'],
            'administration_form_notifications' => [$this, 'block_administration_form_notifications'],
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["generalForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["uploadQuotaForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["notificationsForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_administration_general_save")]);
        echo "
  ";
        // line 33
        $this->displayBlock('administration_form_general', $context, $blocks);
        // line 51
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_end');
        echo "

  ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["uploadQuotaForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_administration_upload_quota_save")]);
        echo "
  ";
        // line 54
        $this->displayBlock('administration_form_upload_quota', $context, $blocks);
        // line 72
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["uploadQuotaForm"] ?? null), 'form_end');
        echo "

  ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["notificationsForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_administration_notifications_save")]);
        echo "
  ";
        // line 75
        $this->displayBlock('administration_form_notifications', $context, $blocks);
        // line 102
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["notificationsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 33
    public function block_administration_form_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    <div class=\"card\" id=\"configuration_fieldset_general\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
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
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    // line 54
    public function block_administration_form_upload_quota($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    <div class=\"card\" id=\"configuration_fieldset_upload\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">file_upload</i>
        ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload quota", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["uploadQuotaForm"] ?? null), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    // line 75
    public function block_administration_form_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    <div class=\"card\" id=\"configuration_fieldset_notifications\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">priority_high</i>
        ";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notifications", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span class=\"help-box\" 
              data-container=\"body\" 
              data-toggle=\"popover\" 
              data-trigger=\"hover\" 
              data-placement=\"right\" 
              data-content=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notifications are numbered bubbles displayed at the very top of your back office, right next to the shop's name. They display the number of new items since you last clicked on them.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" 
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["notificationsForm"] ?? null), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 97,  192 => 92,  183 => 86,  173 => 79,  168 => 76,  164 => 75,  155 => 67,  147 => 62,  140 => 58,  135 => 55,  131 => 54,  122 => 46,  114 => 41,  107 => 37,  102 => 34,  98 => 33,  91 => 102,  89 => 75,  85 => 74,  79 => 72,  77 => 54,  73 => 53,  67 => 51,  65 => 33,  60 => 32,  56 => 31,  51 => 25,  49 => 29,  47 => 28,  45 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/administration.html.twig");
    }
}
