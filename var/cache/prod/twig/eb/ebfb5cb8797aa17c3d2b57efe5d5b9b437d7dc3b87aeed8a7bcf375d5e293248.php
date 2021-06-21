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

/* @admin/Store\authentication_setting.twig */
class __TwigTemplate_1d88f71973544acc83dbdc0bf3d1005829a1a85cc67d3c7a35d985ee48317839 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "store", 1 => "authentication_setting"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store\\authentication_setting.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <style>
        .modal #captcha_image {
            max-width: 400px;
            max-height: 50px;
            border: 1px #b9b9ba solid;
        }
    </style>
";
    }

    // line 30
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "<script>

    function refreshCaptchaImage() {
        \$('#captcha_image').attr('src', \"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_package_api_url", [], "any", false, false, false, 34), "html", null, true);
        echo "/captcha\" + '?' + new Date().getTime())
    }

    \$('#captcha').on('show.bs.modal', function() {
        refreshCaptchaImage();
    });

    \$('#generate_key').on('click', function() {
        \$.ajax({
            type: 'POST',
            url: \"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_package_api_url", [], "any", false, false, false, 44), "html", null, true);
        echo "/api_key\",
            dataType: 'json',
            cache: false,
            data: {
                \"captcha\": \$('#captcha_text').val(),
                \"eccube_url\": '";
        // line 49
        echo twig_escape_filter($this->env, ($context["eccubeUrl"] ?? null), "html", null, true);
        echo "',
                \"eccube_version\": \"";
        // line 50
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\",
                \"eccube_shop_name\": \"";
        // line 51
        echo twig_escape_filter($this->env, ($context["eccubeShopName"] ?? null), "html", null, true);
        echo "\"
            },
            xhrFields: {
                withCredentials: true
            }
        }).done(function(data) {
            \$('#captcha').modal('hide');
            \$('#admin_authentication_authentication_key').val(data.api_key);
            \$('#form').submit()
        }).fail(function(res) {
            if (res.status == 400) {
                \$('#captcha_error').show();
                refreshCaptchaImage();
            } else {
                alert('";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.system_error"), "html", null, true);
        echo "');
            }
        });
        return false;
    });
    \$('#captcha-refresh').on('click', refreshCaptchaImage);
</script>
";
    }

    // line 75
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    <form id=\"form\" method=\"post\" action=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_authentication_setting");
        echo "\">
    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 77), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key_info"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#captcha\" type=\"button\">
                                        ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_setting"), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_setting_info"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "authentication_key", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "label", [], "any", false, false, false, 118)), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg\" data-tooltip=\"true\" data-placement=\"top\" title=";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_tooltip"), "html", null, true);
        echo "></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "authentication_key", [], "any", false, false, false, 123), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 137
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.plugin_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class=\"modal fade\" id=\"captcha\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"captcha\" aria-hidden=\"true\">
        <form id=\"captcha-form\" method=\"post\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title font-weight-bold\">";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</h5>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <p>新しい認証キーを発行します。既に認証キーがある場合は、発行せずに既存のキーを設定してください。</p>
                        <img id=\"captcha_image\" class=\"mb-2\" src=\"#\">
                        <button id=\"captcha-refresh\" type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
                        <input type=\"text\" id=\"captcha_text\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.captcha_message"), "html", null, true);
        echo "\"/>
                        <span id=\"captcha_error\" class=\"invalid-feedback\" style=\"display: none\">
                            <span class=\"mb-0 d-block\">
                                <span class=\"initialism form-error-icon badge badge-danger\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.captcha_error"), "html", null, true);
        echo "</span> <span class=\"form-error-message\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.invalid_captcha"), "html", null, true);
        echo "</span>
                            </span>
                        </span>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
        echo "</button>
                        <button id=\"generate_key\" class=\"btn btn-ec-conversion\" type=\"button\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store\\authentication_setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 175,  304 => 174,  294 => 169,  288 => 166,  278 => 159,  261 => 145,  252 => 139,  247 => 137,  230 => 123,  223 => 119,  219 => 118,  210 => 112,  201 => 106,  187 => 95,  178 => 89,  169 => 83,  160 => 77,  155 => 76,  151 => 75,  139 => 65,  122 => 51,  118 => 50,  114 => 49,  106 => 44,  93 => 34,  88 => 31,  84 => 30,  73 => 21,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\authentication_setting.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\authentication_setting.twig");
    }
}
