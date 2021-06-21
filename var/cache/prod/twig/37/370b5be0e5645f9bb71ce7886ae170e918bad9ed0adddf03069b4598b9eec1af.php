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

/* @admin/Order\mail_view.twig */
class __TwigTemplate_89506c77f257c9ac1d68d689635f5c2bf54e9141d6a784f52a3d22f03e6c4e06 extends \Eccube\Twig\Template
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
        echo "<style media=\"print\" type=\"text/css\">
    .modal-open .modal {
        position: absolute;
        display: block;
        overflow: visible;
    }
    #table1 {
        width: 100% !important;
    }
    #table2 {
        width: 100% !important;
    }
    .modal-open #main {
        visibility:hidden;
    }
</style>

";
        // line 28
        if ((twig_length_filter($this->env, ($context["html_body"] ?? null)) > 0)) {
            // line 29
            echo "\t<small>";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["html_body"] ?? null));
            echo "</small>
";
        } else {
            // line 31
            echo "\t<small>";
            echo nl2br(($context["body"] ?? null));
            echo "</small>
";
        }
    }

    public function getTemplateName()
    {
        return "@admin/Order\\mail_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 31,  58 => 29,  56 => 28,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order\\mail_view.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Order\\mail_view.twig");
    }
}
