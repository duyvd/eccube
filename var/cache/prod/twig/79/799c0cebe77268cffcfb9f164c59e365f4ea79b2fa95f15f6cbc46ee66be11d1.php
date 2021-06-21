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

/* @admin/Setting\Shop\mail_view.twig */
class __TwigTemplate_5c425fac889c8568eafffc8fe77e6ede1e76f80135402bdee5a5b1425de5c300 extends \Eccube\Twig\Template
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

<small>";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["html_body"] ?? null));
        echo "</small>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting\\Shop\\mail_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 28,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting\\Shop\\mail_view.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\mail_view.twig");
    }
}
