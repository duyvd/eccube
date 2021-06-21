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

/* @admin/Setting\System\authority_prototype.twig */
class __TwigTemplate_9679746a4d1ebe3d3834cb93cb28d7343aa0efd4e30f73f0d5abf8f0a1cc7b3f extends \Eccube\Twig\Template
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
        echo "<tr class=\"authority-rule\">
    <td>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Authority", [], "any", false, false, false, 13), 'widget');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Authority", [], "any", false, false, false, 14), 'errors');
        echo "
    </td>
    <td>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "deny_url", [], "any", false, false, false, 17), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "deny_url", [], "any", false, false, false, 18), 'errors');
        echo "
    </td>
    <td class=\"text-center\">
        <button type=\"button\" class=\"btn btn-ec-regular delete\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</button>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting\\System\\authority_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  55 => 18,  51 => 17,  45 => 14,  41 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting\\System\\authority_prototype.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Setting\\System\\authority_prototype.twig");
    }
}
