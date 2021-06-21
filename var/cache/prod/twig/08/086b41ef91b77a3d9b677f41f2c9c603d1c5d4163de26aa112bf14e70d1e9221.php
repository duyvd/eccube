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

/* Shopping\shipping_multiple_edit.twig */
class __TwigTemplate_5d16df44764d212f53e9b90ff9a5413c079b20ae54ee929c822b8b2c37e6bdae extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping\\shipping_multiple_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の追加"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 26
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_multiple_edit");
        echo "\" class=\"h-adr\">
                    <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 28), 'widget');
        echo "
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 35
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 35), "name01", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 35), "name02", [], "any", false, false, false, 35))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 36), "name01", [], "any", false, false, false, 36), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 37), "name02", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 38), "name01", [], "any", false, false, false, 38), 'errors');
        echo "
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 39), "name02", [], "any", false, false, false, 39), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 48
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 48), "kana01", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 48), "kana02", [], "any", false, false, false, 48))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 49), "kana01", [], "any", false, false, false, 49), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 50), "kana02", [], "any", false, false, false, 50), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 51), "kana01", [], "any", false, false, false, 51), 'errors');
        echo "
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 52), "kana02", [], "any", false, false, false, 52), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 61
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 61))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 62), 'widget');
        echo "
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 63), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-zipInput";
        // line 72
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 72))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 73), 'widget');
        echo "
                                    <div class=\"ec-zipInputHelp\">
                                        <div class=\"ec-zipInputHelp__icon\">
                                            <div class=\"ec-icon\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                                        </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                                    </div>
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 79), 'errors');
        echo "
                                </div>
                                <div class=\"ec-select";
        // line 81
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 81), "pref", [], "any", false, false, false, 81))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 82), "pref", [], "any", false, false, false, 82), 'widget');
        echo "
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 83), "pref", [], "any", false, false, false, 83), 'errors');
        echo "
                                </div>
                                <div class=\"ec-input";
        // line 85
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 85), "addr01", [], "any", false, false, false, 85))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 86), "addr01", [], "any", false, false, false, 86), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 87), "addr01", [], "any", false, false, false, 87), 'errors');
        echo "
                                </div>
                                <div class=\"ec-input";
        // line 89
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 89), "addr02", [], "any", false, false, false, 89))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 90), "addr02", [], "any", false, false, false, 90), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 91), "addr02", [], "any", false, false, false, 91), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-telInput";
        // line 100
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 100))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 101), 'widget');
        echo "
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 102), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 107
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 107), "eccube_form_options", [], "any", false, false, false, 107), "auto_render", [], "any", false, false, false, 107)) {
                // line 108
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 108), "eccube_form_options", [], "any", false, false, false, 108), "form_theme", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "                                ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 109), "eccube_form_options", [], "any", false, false, false, 109), "form_theme", [], "any", false, false, false, 109)], true);
                    // line 110
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                            ";
                } else {
                    // line 112
                    echo "                                <dl>
                                    <dt>
                                        ";
                    // line 114
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'label');
                    echo "
                                    </dt>
                                    <dd>
                                        <div class=\"";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 117), "eccube_form_options", [], "any", false, false, false, 117), "style_class", [], "any", false, false, false, 117), "html", null, true);
                    echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($context["f"])) ? (" error") : (""));
                    echo "\">
                                            ";
                    // line 118
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                            ";
                    // line 119
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                        </div>
                                    </dd>
                                </dl>
                            ";
                }
                // line 124
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("登録する"), "html", null, true);
        echo "</button>
                                <a href=\"";
        // line 130
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_multiple");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Shopping\\shipping_multiple_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 130,  325 => 129,  319 => 125,  312 => 124,  304 => 119,  300 => 118,  295 => 117,  289 => 114,  285 => 112,  279 => 110,  276 => 109,  273 => 108,  267 => 107,  260 => 102,  256 => 101,  252 => 100,  246 => 97,  237 => 91,  233 => 90,  229 => 89,  224 => 87,  220 => 86,  216 => 85,  211 => 83,  207 => 82,  203 => 81,  198 => 79,  193 => 77,  189 => 76,  183 => 73,  177 => 72,  171 => 69,  162 => 63,  158 => 62,  154 => 61,  148 => 58,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  123 => 48,  117 => 45,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  86 => 32,  79 => 28,  74 => 26,  67 => 22,  63 => 20,  59 => 19,  54 => 16,  50 => 15,  45 => 11,  43 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping\\shipping_multiple_edit.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Shopping\\shipping_multiple_edit.twig");
    }
}
