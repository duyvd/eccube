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

/* @admin/Setting\Shop\delivery_time_prototype.twig */
class __TwigTemplate_ff9fbb4d06cbe21c0e640c615dc7f6a34189625f01a3365eee9b1ec3ccf55563 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["DeliveryTime"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11);
        // line 12
        echo "<li class=\"list-group-item delivery-time-item sortable-item\">
    <div class=\"row justify-content-around mode-view\">
        <div class=\"col-auto d-flex align-items-center\">
            <i class=\"fa fa-bars text-ec-gray\"></i>
        </div>
        <div class=\"col d-flex align-items-center\">
            <a class=\"display-label\">";
        // line 18
        if (twig_test_empty(($context["DeliveryTime"] ?? null))) {
            echo "__value__";
        } else {
            echo twig_escape_filter($this->env, ($context["DeliveryTime"] ?? null), "html", null, true);
        }
        echo "</a>
        </div>
        <div class=\"col-auto text-right\">
            <a class=\"btn btn-ec-actionIcon mr-2 action-up\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
        echo "\">
                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-down\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
        echo "\">
                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-edit\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
        echo "\">
                <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
            </a>
            ";
        // line 33
        if (twig_test_empty(($context["DeliveryTime"] ?? null))) {
            // line 34
            echo "                <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"\" data-tooltip=\"true\"
                   data-placement=\"top\" title=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-toggle-on fa-lg text-secondary\" aria-hidden=\"true\"></i>
                </a>
            ";
        } else {
            // line 39
            echo "                <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"\" data-tooltip=\"true\"
                   data-placement=\"top\" title=\"";
            // line 40
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["DeliveryTime"] ?? null), "visible", [], "any", false, false, false, 40)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-toggle-";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, ($context["DeliveryTime"] ?? null), "visible", [], "any", false, false, false, 41)) ? ("on") : ("off"));
            echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                </a>
            ";
        }
        // line 44
        echo "            <a class=\"btn btn-ec-actionIcon mr-2 remove-delivery-time-item\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "\">
                <i class=\"fa fa-close fa-lg text-secondary\"></i>
            </a>
        </div>
    </div>
    <div class=\"row justify-content-around mode-edit d-none\">
        <div class=\"col d-flex align-items-center\">
            <div class=\"form-row\">
                <div class=\"col-auto d-flex align-items-center\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_time", [], "any", false, false, false, 54), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54)]]);
        echo "
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-conversion action-edit-submit\" type=\"submit\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
        echo "</button>
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"submit\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_time", [], "any", false, false, false, 62), 'errors');
        echo "
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sort_no", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "sort-no"]]);
        echo "
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sort_no", [], "any", false, false, false, 64), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "visible d-none"]]);
        echo "
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 66), 'errors');
        echo "
            </div>
        </div>
    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting\\Shop\\delivery_time_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 66,  147 => 65,  143 => 64,  139 => 63,  135 => 62,  130 => 60,  124 => 57,  118 => 54,  106 => 45,  103 => 44,  97 => 41,  93 => 40,  90 => 39,  83 => 35,  80 => 34,  78 => 33,  72 => 30,  65 => 26,  58 => 22,  47 => 18,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting\\Shop\\delivery_time_prototype.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\delivery_time_prototype.twig");
    }
}
