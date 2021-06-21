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

/* Contact\index.twig */
class __TwigTemplate_8ace62ee0b6987b65f229c9c29c953ead1fa6180bd8f4acb59360c2cdebec985 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact\\index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact\\index.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Contact\\index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "
    <div class=\"ec-contactRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact");
        echo "\" class=\"h-adr\" novalidate>
                    <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "_token", [], "any", false, false, false, 29), 'widget');
        echo "
                    <p class=\"ec-para-normal\">";
        // line 30
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内容によっては回答をさしあげるのにお時間をいただくこともございます。
また、休業日は翌営業日以降の対応となりますのでご了承ください。
"), "html", null, true));
        // line 32
        echo "</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 39
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "name01", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "name02", [], "any", false, false, false, 39))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "name01", [], "any", false, false, false, 40), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "name02", [], "any", false, false, false, 41), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "name01", [], "any", false, false, false, 42), 'errors');
        echo "
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "name02", [], "any", false, false, false, 43), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "kana", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 52
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "kana", [], "any", false, false, false, 52), "kana01", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "kana", [], "any", false, false, false, 52), "kana02", [], "any", false, false, false, 52))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "kana", [], "any", false, false, false, 53), "kana01", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "kana", [], "any", false, false, false, 54), "kana02", [], "any", false, false, false, 54), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "kana", [], "any", false, false, false, 55), "kana01", [], "any", false, false, false, 55), 'errors');
        echo "
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "kana", [], "any", false, false, false, 56), "kana02", [], "any", false, false, false, 56), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "address", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-zipInput";
        // line 65
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "postal_code", [], "any", false, false, false, 65))) ? (" error") : (""));
        echo "\">
                                    <span>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "postal_code", [], "any", false, false, false, 67), 'widget');
        echo "
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "postal_code", [], "any", false, false, false, 68), 'errors');
        echo "
                                </div>
                                <div class=\"ec-zipInputHelp\">
                                    <div class=\"ec-zipInputHelp__icon\">
                                        <div class=\"ec-icon\"><img
                                                    src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                    </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                                </div>
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "postal_code", [], "any", false, false, false, 77), 'errors');
        echo "
                                <div class=\"ec-select";
        // line 78
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "address", [], "any", false, false, false, 78), "pref", [], "any", false, false, false, 78))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "address", [], "any", false, false, false, 79), "pref", [], "any", false, false, false, 79), 'widget');
        echo "
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "address", [], "any", false, false, false, 80), "pref", [], "any", false, false, false, 80), 'errors');
        echo "
                                </div>
                                <div class=\"ec-input";
        // line 82
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "address", [], "any", false, false, false, 82), "addr01", [], "any", false, false, false, 82))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "address", [], "any", false, false, false, 83), "addr01", [], "any", false, false, false, 83), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "address", [], "any", false, false, false, 84), "addr01", [], "any", false, false, false, 84), 'errors');
        echo "
                                </div>
                                <div class=\"ec-input";
        // line 86
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "address", [], "any", false, false, false, 86), "addr02", [], "any", false, false, false, 86))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "address", [], "any", false, false, false, 87), "addr02", [], "any", false, false, false, 87), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "address", [], "any", false, false, false, 88), "addr02", [], "any", false, false, false, 88), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "phone_number", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-telInput";
        // line 97
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "phone_number", [], "any", false, false, false, 97))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "phone_number", [], "any", false, false, false, 98), 'widget');
        echo "
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "phone_number", [], "any", false, false, false, 99), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "email", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 108
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "email", [], "any", false, false, false, 108))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), 'widget');
        echo "
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "email", [], "any", false, false, false, 116), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お問い合わせ内容"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 119
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "contents", [], "any", false, false, false, 119))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "contents", [], "any", false, false, false, 120), 'widget');
        echo "
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "contents", [], "any", false, false, false, 121), 'errors');
        echo "
                                </div>
                                <p>";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文に関するお問い合わせには、必ず「ご注文番号」をご記入くださいますようお願いいたします。"), "html", null, true);
        echo "</p>
                            </dd>
                        </dl>
                        ";
        // line 127
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 127), "eccube_form_options", [], "any", false, false, false, 127), "auto_render", [], "any", false, false, false, 127)) {
                // line 128
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 128), "eccube_form_options", [], "any", false, false, false, 128), "form_theme", [], "any", false, false, false, 128)) {
                    // line 129
                    echo "                                ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 129), "eccube_form_options", [], "any", false, false, false, 129), "form_theme", [], "any", false, false, false, 129)], true);
                    // line 130
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                            ";
                } else {
                    // line 132
                    echo "                                <dl>
                                    <dt>
                                        ";
                    // line 134
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'label');
                    echo "
                                    </dt>
                                    <dd>
                                        <div class=\"";
                    // line 137
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 137), "eccube_form_options", [], "any", false, false, false, 137), "style_class", [], "any", false, false, false, 137), "html", null, true);
                    echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($context["f"])) ? (" error") : (""));
                    echo "\">
                                            ";
                    // line 138
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                            ";
                    // line 139
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                        </div>
                                    </dd>
                                </dl>
                            ";
                }
                // line 144
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                    </div>
                    <div class=\"ec-RegisterRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\" name=\"mode\" value=\"confirm\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認ページへ"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Contact\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 149,  392 => 145,  385 => 144,  377 => 139,  373 => 138,  368 => 137,  362 => 134,  358 => 132,  352 => 130,  349 => 129,  346 => 128,  340 => 127,  334 => 123,  329 => 121,  325 => 120,  321 => 119,  315 => 116,  306 => 110,  302 => 109,  298 => 108,  292 => 105,  283 => 99,  279 => 98,  275 => 97,  269 => 94,  260 => 88,  256 => 87,  252 => 86,  247 => 84,  243 => 83,  239 => 82,  234 => 80,  230 => 79,  226 => 78,  222 => 77,  217 => 75,  212 => 73,  204 => 68,  200 => 67,  196 => 66,  192 => 65,  186 => 62,  177 => 56,  173 => 55,  169 => 54,  165 => 53,  161 => 52,  155 => 49,  146 => 43,  142 => 42,  138 => 41,  134 => 40,  130 => 39,  124 => 36,  118 => 32,  114 => 30,  110 => 29,  105 => 27,  98 => 23,  93 => 20,  83 => 19,  72 => 16,  62 => 15,  51 => 11,  49 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends 'default_frame.twig' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}

    <div class=\"ec-contactRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'お問い合わせ'|trans }}</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"{{ url('contact') }}\" class=\"h-adr\" novalidate>
                    <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                    {{ form_widget(form._token) }}
                    <p class=\"ec-para-normal\">{{ '内容によっては回答をさしあげるのにお時間をいただくこともございます。
また、休業日は翌営業日以降の対応となりますのでご了承ください。
'|trans|nl2br }}</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                {{ form_label(form.name, 'お名前', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput{{ has_errors(form.name.name01, form.name.name02) ? ' error' }}\">
                                    {{ form_widget(form.name.name01, {'attr': { 'placeholder': '姓' }}) }}
                                    {{ form_widget(form.name.name02, {'attr': { 'placeholder': '名' }}) }}
                                    {{ form_errors(form.name.name01) }}
                                    {{ form_errors(form.name.name02) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.kana, 'お名前(カナ)', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput{{ has_errors(form.kana.kana01, form.kana.kana02) ? ' error' }}\">
                                    {{ form_widget(form.kana.kana01, {'attr': { 'placeholder': 'セイ' }}) }}
                                    {{ form_widget(form.kana.kana02, {'attr': { 'placeholder': 'メイ' }}) }}
                                    {{ form_errors(form.kana.kana01) }}
                                    {{ form_errors(form.kana.kana02) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.address, '住所', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-zipInput{{ has_errors(form.postal_code) ? ' error' }}\">
                                    <span>{{ '〒'|trans }}</span>
                                    {{ form_widget(form.postal_code) }}
                                    {{ form_errors(form.postal_code) }}
                                </div>
                                <div class=\"ec-zipInputHelp\">
                                    <div class=\"ec-zipInputHelp__icon\">
                                        <div class=\"ec-icon\"><img
                                                    src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                        </div>
                                    </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>{{ '郵便番号検索'|trans }}</span></a>
                                </div>
                                {{ form_errors(form.postal_code) }}
                                <div class=\"ec-select{{ has_errors(form.address.pref) ? ' error' }}\">
                                    {{ form_widget(form.address.pref) }}
                                    {{ form_errors(form.address.pref) }}
                                </div>
                                <div class=\"ec-input{{ has_errors(form.address.addr01) ? ' error' }}\">
                                    {{ form_widget(form.address.addr01, { 'attr': { 'placeholder': '市区町村名(例：大阪市北区)' }}) }}
                                    {{ form_errors(form.address.addr01) }}
                                </div>
                                <div class=\"ec-input{{ has_errors(form.address.addr02) ? ' error' }}\">
                                    {{ form_widget(form.address.addr02,  { 'attr': { 'placeholder': '番地・ビル名(例：西梅田1丁目6-8)' }}) }}
                                    {{ form_errors(form.address.addr02) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.phone_number, '電話番号', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-telInput{{ has_errors(form.phone_number) ? ' error' }}\">
                                    {{ form_widget(form.phone_number) }}
                                    {{ form_errors(form.phone_number) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.email, 'メールアドレス', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-input{{ has_errors(form.email) ? ' error' }}\">
                                    {{ form_widget(form.email) }}
                                    {{ form_errors(form.email) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.email, 'お問い合わせ内容', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-input{{ has_errors(form.contents) ? ' error' }}\">
                                    {{ form_widget(form.contents) }}
                                    {{ form_errors(form.contents) }}
                                </div>
                                <p>{{ 'ご注文に関するお問い合わせには、必ず「ご注文番号」をご記入くださいますようお願いいたします。'|trans }}</p>
                            </dd>
                        </dl>
                        {# エンティティ拡張の自動出力 #}
                        {% for f in form if f.vars.eccube_form_options.auto_render %}
                            {% if f.vars.eccube_form_options.form_theme %}
                                {% form_theme f f.vars.eccube_form_options.form_theme %}
                                {{ form_row(f) }}
                            {% else %}
                                <dl>
                                    <dt>
                                        {{ form_label(f) }}
                                    </dt>
                                    <dd>
                                        <div class=\"{{ f.vars.eccube_form_options.style_class }}{{ has_errors(f) ? ' error' }}\">
                                            {{ form_widget(f) }}
                                            {{ form_errors(f) }}
                                        </div>
                                    </dd>
                                </dl>
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"ec-RegisterRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\" name=\"mode\" value=\"confirm\">{{ '確認ページへ'|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}
", "Contact\\index.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Contact\\index.twig");
    }
}
