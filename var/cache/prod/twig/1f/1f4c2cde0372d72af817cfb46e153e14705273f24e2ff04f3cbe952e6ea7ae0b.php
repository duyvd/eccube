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

/* Help\guide.twig */
class __TwigTemplate_c168cc71569f534a91fbeb15d00c3679b814bf3bd8193c91818f99035d779886 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "Help\\guide.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ガイド"), "html", null, true);
        echo "</h1>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Help\\guide.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 14,  46 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Help\\guide.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Help\\guide.twig");
    }
}
