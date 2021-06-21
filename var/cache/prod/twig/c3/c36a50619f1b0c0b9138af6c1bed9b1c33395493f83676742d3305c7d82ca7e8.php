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

/* Help\tradelaw.twig */
class __TwigTemplate_b50034f3c244037d607d0e2db41a76eaedfaab1ea269c53732a208a45e51f7f7 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "Help\\tradelaw.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1> ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特定商取引法に基づく表記"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-borderedDefs\">
                    <dl>
                        <dt>
                            <label class=\"ec-label\">販売業者</label>
                        </dt>
                        <dd></dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">代表責任者</label>
                        </dt>
                        <dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">所在地</label>
                        </dt>
                        <dd>

                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">電話番号</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">メールアドレス</label>
                        </dt>
                        <dd><a href=\"mailto:\"></a></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">URL</label>
                        </dt>
                        <dd><a href=\"\"></a></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">商品代金以外の必要料金</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">引き渡し時期</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">お支払方法</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">返品・交換について</label>
                        </dt>
                        <dd></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Help\\tradelaw.twig";
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
        return new Source("", "Help\\tradelaw.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Help\\tradelaw.twig");
    }
}
