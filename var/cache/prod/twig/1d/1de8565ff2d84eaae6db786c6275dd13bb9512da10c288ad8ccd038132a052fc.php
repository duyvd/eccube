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

/* @admin/Store\plugin_confirm.twig */
class __TwigTemplate_0f93bad8aee3792739e03c73e68218e2818406ac7c15c6ccc41f4661be8ad09b extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store\\plugin_confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        if (($context["is_update"] ?? null)) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.title.upgrade"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.title"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.subtitle"), "html", null, true);
        echo "
";
    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<script>
\$(function() {

    var MODES = {
        'install': {
            'name': 'インストール',
            'init': function(ctx) {
                ctx.progressBar.css('width', (0.5/ctx.totalCount*100) + '%');
            },
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をインストール中');
                    ctx.log('**************** ' + ctx.plugin.pluginCode + ' ****************');
                    return \$.post(\"";
        // line 40
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_install");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', ((ctx.currentCount/ctx.totalCount + 0.5/ctx.totalCount)*100) + '%');
                        ctx.log(data.log);
                    })
                });
            }
        },
        'upgrade': {
            'name': 'アップデート',
            'init': function(ctx) {},
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」を無効化中');
                    ctx.log('**************** Disable ****************');
                    return \$.post(ctx.relatedTarget.data('disable-url'), ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '10%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をアップデート中');
                    ctx.log('**************** Upgrade ****************');
                    return \$.post(\"";
        // line 63
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_upgrade");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '40%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」のスキーマ更新中');
                    ctx.log('**************** Schema Update ****************');
                    return \$.post(\"";
        // line 71
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_schema_update");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '60%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」の更新処理中');
                    ctx.log('**************** Update ****************');
                    return \$.post(\"";
        // line 79
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_update");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '80%');
                        ctx.log(data.log);
                    })
                });
            }
        }
    };

    var mode;
    var relatedTarget;
    var modal = \$('#installModal');
    var message = \$('div.modal-body > p', modal);

    \$('#installModal').on('show.bs.modal', function(e) {
        relatedTarget = \$(e.relatedTarget);
        mode = MODES[relatedTarget.data('mode')];
        \$('.modal-title', modal).text(mode.name + '確認');
        message.text('「";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 98), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, false, 98), "html", null, true);
        echo ")」を' + mode.name + 'しますか？');
        \$('#installBtn').text(mode.name);
    });

    \$('#installBtn').on('click', function() {
        message.text('「";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 103), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, false, 103), "html", null, true);
        echo ")」を' + mode.name + '中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。');
        var footer = \$('div.modal-footer', modal).hide();
        var progress = \$('div.progress', modal).show();
        var statusBar = \$('#installStatus').text('');
        var log = function(text) {
            if (text) {
                \$('#installLog').text(\$('#installLog').text() ? (\$('#installLog').text() + '\\n' + text) : text);
            }
        };

        var requires = ";
        // line 113
        echo json_encode(($context["requires"] ?? null));
        echo ";
        requires = requires.map(function(req) {
            return {'pluginCode':req.name.replace(/^ec-cube\\//, '') }
        });
        requires.push({'pluginCode': '";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "code", [], "any", false, false, false, 117), "html", null, true);
        echo "', 'version': '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, false, 117), "html", null, true);
        echo "'});

        var progressBar = \$('div.progress-bar', progress);

        var d = \$.Deferred().resolve();

        var ctx = {
            'statusBar': statusBar,
            'progressBar': progressBar,
            'log': log,
            'currentCount': 0,
            'totalCount': requires.length,
            'deferred': d,
            'relatedTarget': relatedTarget
        };

        mode.init(ctx);

        requires.forEach(function(req) {
            d = mode.execute(\$.extend({}, ctx, {
                'plugin': req,
                'deferred': d
            }));
        });

        d.done(function() {
            \$('div.progress-bar', progress).css('width', '100%');

            var message_text = 'インストールが完了しました。';
            ";
        // line 146
        if ((($context["is_update"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["Plugin"] ?? null), "enabled", [], "any", false, false, false, 146))) {
            // line 147
            echo "                message_text += 'プラグイン一覧より有効化を行って下さい。';
            ";
        }
        // line 149
        echo "            message.text(message_text);

        }).fail(function(res) {
            message.text('システムエラーが発生しました。');
            if (res.responseJSON) {
                log(res.responseJSON.log);
            }
            if (res.responseText) {
                log(res.responseText);
            }
        }).always(function() {
            statusBar.hide();
            \$('#installLogPane').show();
            \$('button', footer).hide();
            \$('a', footer).show();
            footer.show();
            progress.hide();
        });
    });
});

</script>
";
    }

    // line 173
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div id=\"plugin-list\" class=\"card rounded mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">
                            ";
        // line 180
        if (($context["is_update"] ?? null)) {
            // line 181
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.header.upgrade"), "html", null, true);
            echo "
                            ";
        } else {
            // line 183
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.header"), "html", null, true);
            echo "
                            ";
        }
        // line 185
        echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row pb-4 mb-4 border-bottom border-ec-gray\">
                        ";
        // line 189
        echo twig_include($this->env, $context, "@admin/Store/plugin_confirm_panel.twig");
        echo "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" onclick=\"return window.history.back()\">";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                ";
        // line 195
        if (($context["is_update"] ?? null)) {
            // line 196
            echo "                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#installModal\" data-mode=\"upgrade\"
                                            data-enable-url=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, ($context["Plugin"] ?? null), "id", [], "any", false, false, false, 197), "maintenance_mode" => twig_constant("Eccube\\Service\\SystemService::AUTO_MAINTENANCE_UPDATE")]), "html", null, true);
            echo "\"
                                            data-disable-url=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, ($context["Plugin"] ?? null), "id", [], "any", false, false, false, 198), "maintenance_mode" => twig_constant("Eccube\\Service\\SystemService::AUTO_MAINTENANCE_UPDATE")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.upgrade"), "html", null, true);
            echo "</button>
                                ";
        } else {
            // line 200
            echo "                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#installModal\" data-mode=\"install\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
            echo "</button>
                                ";
        }
        // line 202
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 207
        if (((($context["is_update"] ?? null) == false) && (twig_length_filter($this->env, ($context["requires"] ?? null)) > 0))) {
            // line 208
            echo "                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.require.header", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 210)]), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"card-body\">
                        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["requires"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 214
                echo "                            <ul>
                                <li>";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 215), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "versions", [], "any", false, false, false, 215), "html", null, true);
                echo "</li>
                            </ul>
                            ";
                // line 218
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                    </div>
                </div>
                ";
        }
        // line 222
        echo "            </div>
        </div>
    </div>

    <div id=\"installModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"></h5>
                </div>
                <div class=\"modal-body\">
                    <p></p>
                    <div id=\"installProgress\" class=\"progress\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <div>
                        <p class=\"text-right small\" id=\"installStatus\"></p>
                    </div>
                    <div id=\"installLogPane\" style=\"display: none;\">
                        <div class=\"d-inline-block collapsed\" data-toggle=\"collapse\" href=\"#installLog\" aria-expanded=\"false\" aria-controls=\"installLog\">
                            <a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">ログを確認</span></a>
                        </div>
                        <pre class=\"collapsed collapse\" id=\"installLog\"></pre>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-ec-sub\" data-dismiss=\"modal\">";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-ec-conversion\" id=\"installBtn\"></button>
                    <a href=\"";
        // line 250
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin");
        echo "\" class=\"btn btn-ec-regular\" style=\"display: none\">完了</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store\\plugin_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 250,  409 => 248,  381 => 222,  376 => 219,  370 => 218,  363 => 215,  360 => 214,  356 => 213,  350 => 210,  346 => 208,  344 => 207,  337 => 202,  331 => 200,  324 => 198,  320 => 197,  317 => 196,  315 => 195,  311 => 194,  303 => 189,  297 => 185,  291 => 183,  285 => 181,  283 => 180,  275 => 174,  271 => 173,  245 => 149,  241 => 147,  239 => 146,  205 => 117,  198 => 113,  183 => 103,  173 => 98,  151 => 79,  140 => 71,  129 => 63,  103 => 40,  88 => 27,  84 => 26,  77 => 23,  73 => 22,  65 => 19,  59 => 17,  56 => 16,  52 => 15,  47 => 11,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\plugin_confirm.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_confirm.twig");
    }
}
