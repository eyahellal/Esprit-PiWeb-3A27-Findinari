<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* reclamation/_message_item_user.html.twig */
class __TwigTemplate_e6d8a836ee103ebdb576d5068f368970 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_message_item_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_message_item_user.html.twig"));

        // line 1
        $context["isUser"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1, $this->source); })()), "typeSender", [], "any", false, false, false, 1) == "USER");
        // line 2
        yield "<div id=\"msg-wrapper-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        yield "\" class=\"msg-wrapper ";
        yield (((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user") : ("admin"));
        yield " animate-in\">
    <div class=\"msg-meta\">
        ";
        // line 4
        if ((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "            You &bull; ";
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })()), "date", [], "any", false, false, false, 5));
            yield "
        ";
        } else {
            // line 7
            yield "            <span style=\"color: #22c55e; font-weight: 800;\">Support Team</span> &bull; ";
            yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7));
            yield "
        ";
        }
        // line 9
        yield "    </div>
    
    <div style=\"display: flex; gap: 8px; align-items: center; ";
        // line 11
        yield (((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("flex-direction: row-reverse;") : (""));
        yield "\">
        <div class=\"msg-bubble\" id=\"msg-content-";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
            <div id=\"msg-text-";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "\">";
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 13, $this->source); })()), "contenu", [], "any", false, false, false, 13), "html", null, true));
        yield "</div>
            ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 14, $this->source); })()), "contenu", [], "any", false, false, false, 14) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 14, $this->source); })()), "contenu", [], "any", false, false, false, 14) != "Voice message"))) {
            // line 15
            yield "            <button
                onclick=\"translateMsgToFR(";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            yield ", this)\"
                title=\"Translate to French\"
                style=\"display:inline-flex; align-items:center; gap:5px; background:none; border:none; cursor:pointer; padding:3px 0 0 0; font-size:11px; color:";
            // line 18
            yield (((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.55)") : ("#9ca3af"));
            yield "; font-family:inherit; transition:color 0.2s;\"
                onmouseover=\"this.style.color='";
            // line 19
            yield (((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.9)") : ("#6b7280"));
            yield "';\"
                onmouseout=\"if(!this.dataset.done)this.style.color='";
            // line 20
            yield (((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.55)") : ("#9ca3af"));
            yield "';\"
            >
                <svg viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"width:11px;height:11px;\"><path fill-rule=\"evenodd\" d=\"M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a7.03 7.03 0 01-1.318 2.894A7.036 7.036 0 009 10.07V9a1 1 0 112 0v1.072a7.037 7.037 0 001.74-3.14.75.75 0 011.46.362A8.537 8.537 0 0112 10.66V11h1a1 1 0 110 2h-1v.5a1 1 0 11-2 0V13H9a1 1 0 110-2h1v-.34a8.537 8.537 0 01-2.2-3.44.75.75 0 011.46-.362A7.037 7.037 0 0010.422 9H8.578A7.036 7.036 0 007.322 6.894 7.033 7.033 0 016 5H3a1 1 0 110-2h3V3a1 1 0 011-1z\" clip-rule=\"evenodd\"/></svg>
                Translate
            </button>
            ";
        }
        // line 26
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                <div style=\"margin-top:12px; padding-top:12px; border-top:1px solid ";
            yield (((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.2)") : ("rgba(0,0,0,0.06)"));
            yield ";\">
                    ";
            // line 28
            $context["isUrl"] = (is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 28, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 28)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1));
            // line 29
            yield "                    ";
            $context["extension"] = (((($tmp = (isset($context["isUrl"]) || array_key_exists("isUrl", $context) ? $context["isUrl"] : (function () { throw new RuntimeError('Variable "isUrl" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("m4a") : (Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 29, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 29), ".")))));
            // line 30
            yield "                    
                    ";
            // line 31
            if (((isset($context["isUrl"]) || array_key_exists("isUrl", $context) ? $context["isUrl"] : (function () { throw new RuntimeError('Variable "isUrl" does not exist.', 31, $this->source); })()) || CoreExtension::inFilter((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 31, $this->source); })()), ["m4a", "mp3", "wav", "ogg"]))) {
                // line 32
                yield "                        <div class=\"voice-message-player\">
                            <button class=\"play-btn\" onclick=\"toggleAudio(this, '";
                // line 33
                yield (((($tmp = (isset($context["isUrl"]) || array_key_exists("isUrl", $context) ? $context["isUrl"] : (function () { throw new RuntimeError('Variable "isUrl" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 33, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 33), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/messages/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 33, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 33))), "html", null, true)));
                yield "')\">
                                <i class=\"fas fa-play\"></i>
                            </button>
                            <div class=\"waveform-mock\">
                                <div class=\"wave-bar\" style=\"height:40%\"></div>
                                <div class=\"wave-bar\" style=\"height:70%\"></div>
                                <div class=\"wave-bar\" style=\"height:50%\"></div>
                                <div class=\"wave-bar\" style=\"height:80%\"></div>
                                <div class=\"wave-bar\" style=\"height:30%\"></div>
                                <div class=\"wave-bar\" style=\"height:60%\"></div>
                                <div class=\"wave-bar\" style=\"height:40%\"></div>
                                <div class=\"wave-bar\" style=\"height:70%\"></div>
                                <div class=\"wave-bar\" style=\"height:50%\"></div>
                                <div class=\"wave-bar\" style=\"height:80%\"></div>
                            </div>
                            <span style=\"font-size:11px; opacity:0.8; color: inherit;\">Voice</span>
                        </div>
                    ";
            } elseif (CoreExtension::inFilter(            // line 50
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 50, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp", "svg"])) {
                // line 51
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/messages/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 51, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 51))), "html", null, true);
                yield "\" target=\"_blank\">
                            <img src=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/messages/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 52, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 52))), "html", null, true);
                yield "\" alt=\"Attachment\" style=\"max-width: 100%; max-height: 250px; border-radius: 12px; display: block; box-shadow: 0 4px 12px rgba(0,0,0,0.08);\">
                        </a>
                    ";
            } else {
                // line 55
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/messages/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 55, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 55))), "html", null, true);
                yield "\" target=\"_blank\" style=\"display:inline-flex; align-items:center; gap:8px; color:inherit; font-weight:700; text-decoration:none; opacity:.95; font-size:13px;\">
                            <i class=\"fas fa-file-download\"></i>
                            Download (";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 57, $this->source); })())), "html", null, true);
                yield ")
                        </a>
                    ";
            }
            // line 60
            yield "                </div>
            ";
        }
        // line 62
        yield "        </div>

        ";
        // line 64
        if ((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "            <div style=\"position: relative;\" class=\"message-actions-dropdown\">
                <button type=\"button\" onclick=\"toggleMessageMenu(";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66), "html", null, true);
            yield ")\" style=\"background:none; border:none; color: #9ca3af; cursor: pointer; padding: 4px; display: flex; align-items: center; justify-content: center;\">
                    <i class=\"fas fa-ellipsis-v\" style=\"font-size: 14px;\"></i>
                </button>
                
                <div id=\"dropdown-";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\" style=\"display: none; position: absolute; ";
            yield (((($tmp = (isset($context["isUser"]) || array_key_exists("isUser", $context) ? $context["isUser"] : (function () { throw new RuntimeError('Variable "isUser" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("right: 0") : ("left: 0"));
            yield "; top: 100%; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); z-index: 10; min-width: 120px; padding: 6px; flex-direction: column; gap: 4px;\">
                    <button type=\"button\" onclick=\"editMessage(";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
            yield ", `";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 71, $this->source); })()), "contenu", [], "any", false, false, false, 71), "html_attr");
            yield "`)\" style=\"background:none; border:none; color: #1f2937; cursor: pointer; padding: 8px 12px; font-size: 13px; font-weight: 600; text-align: left; display: flex; align-items: center; gap: 8px; border-radius: 6px;\">
                        <i class=\"fas fa-edit\" style=\"width:14px;\"></i> Modifier
                    </button>
                    
                    <form method=\"post\" action=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_message_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce message définitivement ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_message_user_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76))), "html", null, true);
            yield "\">
                        <button type=\"submit\" style=\"background:none; border:none; color: #ef4444; cursor: pointer; padding: 8px 12px; font-size: 13px; font-weight: 600; text-align: left; display: flex; align-items: center; gap: 8px; border-radius: 6px; width: 100%;\">
                            <i class=\"fas fa-trash-alt\" style=\"width:14px;\"></i> Supprimer
                        </button>
                    </form>
                </div>
            </div>

            <!-- Hidden edit form -->
            <form id=\"edit-form-";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "html", null, true);
            yield "\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_message_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\" style=\"display: none; align-items: flex-end; gap: 8px;\">
                <textarea name=\"edit_contenu\" style=\"width: 250px; height: 60px; padding: 8px; border-radius: 8px; border: 1px solid #e5e7eb; font-family: inherit; font-size: 13px; resize: vertical;\" required></textarea>
                <div style=\"display: flex; flex-direction: column; gap: 4px;\">
                    <button type=\"submit\" style=\"padding: 4px 8px; font-size: 11px; background: #22c55e; color: white; border: none; border-radius: 4px; cursor: pointer;\">Save</button>
                    <button type=\"button\" onclick=\"cancelEdit(";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "html", null, true);
            yield ")\" style=\"padding: 4px 8px; font-size: 11px; background: #eee; border: none; border-radius: 4px; cursor: pointer;\">Cancel</button>
                </div>
            </form>
        ";
        }
        // line 93
        yield "    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reclamation/_message_item_user.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  250 => 93,  243 => 89,  234 => 85,  222 => 76,  218 => 75,  209 => 71,  203 => 70,  196 => 66,  193 => 65,  191 => 64,  187 => 62,  183 => 60,  177 => 57,  171 => 55,  165 => 52,  160 => 51,  158 => 50,  138 => 33,  135 => 32,  133 => 31,  130 => 30,  127 => 29,  125 => 28,  120 => 27,  117 => 26,  108 => 20,  104 => 19,  100 => 18,  95 => 16,  92 => 15,  90 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 9,  66 => 7,  60 => 5,  58 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set isUser = message.typeSender == 'USER' %}
<div id=\"msg-wrapper-{{ message.id }}\" class=\"msg-wrapper {{ isUser ? 'user' : 'admin' }} animate-in\">
    <div class=\"msg-meta\">
        {% if isUser %}
            You &bull; {{ message.date|ago }}
        {% else %}
            <span style=\"color: #22c55e; font-weight: 800;\">Support Team</span> &bull; {{ message.date|ago }}
        {% endif %}
    </div>
    
    <div style=\"display: flex; gap: 8px; align-items: center; {{ isUser ? 'flex-direction: row-reverse;' : '' }}\">
        <div class=\"msg-bubble\" id=\"msg-content-{{ message.id }}\">
            <div id=\"msg-text-{{ message.id }}\">{{ message.contenu|nl2br }}</div>
            {% if message.contenu and message.contenu != 'Voice message' %}
            <button
                onclick=\"translateMsgToFR({{ message.id }}, this)\"
                title=\"Translate to French\"
                style=\"display:inline-flex; align-items:center; gap:5px; background:none; border:none; cursor:pointer; padding:3px 0 0 0; font-size:11px; color:{{ isUser ? 'rgba(255,255,255,0.55)' : '#9ca3af' }}; font-family:inherit; transition:color 0.2s;\"
                onmouseover=\"this.style.color='{{ isUser ? 'rgba(255,255,255,0.9)' : '#6b7280' }}';\"
                onmouseout=\"if(!this.dataset.done)this.style.color='{{ isUser ? 'rgba(255,255,255,0.55)' : '#9ca3af' }}';\"
            >
                <svg viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"width:11px;height:11px;\"><path fill-rule=\"evenodd\" d=\"M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a7.03 7.03 0 01-1.318 2.894A7.036 7.036 0 009 10.07V9a1 1 0 112 0v1.072a7.037 7.037 0 001.74-3.14.75.75 0 011.46.362A8.537 8.537 0 0112 10.66V11h1a1 1 0 110 2h-1v.5a1 1 0 11-2 0V13H9a1 1 0 110-2h1v-.34a8.537 8.537 0 01-2.2-3.44.75.75 0 011.46-.362A7.037 7.037 0 0010.422 9H8.578A7.036 7.036 0 007.322 6.894 7.033 7.033 0 016 5H3a1 1 0 110-2h3V3a1 1 0 011-1z\" clip-rule=\"evenodd\"/></svg>
                Translate
            </button>
            {% endif %}
            {% if message.urlPieceJointe %}
                <div style=\"margin-top:12px; padding-top:12px; border-top:1px solid {{ isUser ? 'rgba(255,255,255,0.2)' : 'rgba(0,0,0,0.06)' }};\">
                    {% set isUrl = message.urlPieceJointe starts with 'http' %}
                    {% set extension = isUrl ? 'm4a' : message.urlPieceJointe|split('.')|last|lower %}
                    
                    {% if isUrl or extension in ['m4a', 'mp3', 'wav', 'ogg'] %}
                        <div class=\"voice-message-player\">
                            <button class=\"play-btn\" onclick=\"toggleAudio(this, '{{ isUrl ? message.urlPieceJointe : asset('uploads/messages/' ~ message.urlPieceJointe) }}')\">
                                <i class=\"fas fa-play\"></i>
                            </button>
                            <div class=\"waveform-mock\">
                                <div class=\"wave-bar\" style=\"height:40%\"></div>
                                <div class=\"wave-bar\" style=\"height:70%\"></div>
                                <div class=\"wave-bar\" style=\"height:50%\"></div>
                                <div class=\"wave-bar\" style=\"height:80%\"></div>
                                <div class=\"wave-bar\" style=\"height:30%\"></div>
                                <div class=\"wave-bar\" style=\"height:60%\"></div>
                                <div class=\"wave-bar\" style=\"height:40%\"></div>
                                <div class=\"wave-bar\" style=\"height:70%\"></div>
                                <div class=\"wave-bar\" style=\"height:50%\"></div>
                                <div class=\"wave-bar\" style=\"height:80%\"></div>
                            </div>
                            <span style=\"font-size:11px; opacity:0.8; color: inherit;\">Voice</span>
                        </div>
                    {% elseif extension in ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'] %}
                        <a href=\"{{ asset('uploads/messages/' ~ message.urlPieceJointe) }}\" target=\"_blank\">
                            <img src=\"{{ asset('uploads/messages/' ~ message.urlPieceJointe) }}\" alt=\"Attachment\" style=\"max-width: 100%; max-height: 250px; border-radius: 12px; display: block; box-shadow: 0 4px 12px rgba(0,0,0,0.08);\">
                        </a>
                    {% else %}
                        <a href=\"{{ asset('uploads/messages/' ~ message.urlPieceJointe) }}\" target=\"_blank\" style=\"display:inline-flex; align-items:center; gap:8px; color:inherit; font-weight:700; text-decoration:none; opacity:.95; font-size:13px;\">
                            <i class=\"fas fa-file-download\"></i>
                            Download ({{ extension|upper }})
                        </a>
                    {% endif %}
                </div>
            {% endif %}
        </div>

        {% if isUser %}
            <div style=\"position: relative;\" class=\"message-actions-dropdown\">
                <button type=\"button\" onclick=\"toggleMessageMenu({{ message.id }})\" style=\"background:none; border:none; color: #9ca3af; cursor: pointer; padding: 4px; display: flex; align-items: center; justify-content: center;\">
                    <i class=\"fas fa-ellipsis-v\" style=\"font-size: 14px;\"></i>
                </button>
                
                <div id=\"dropdown-{{ message.id }}\" style=\"display: none; position: absolute; {{ isUser ? 'right: 0' : 'left: 0' }}; top: 100%; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); z-index: 10; min-width: 120px; padding: 6px; flex-direction: column; gap: 4px;\">
                    <button type=\"button\" onclick=\"editMessage({{ message.id }}, `{{ message.contenu|e('html_attr') }}`)\" style=\"background:none; border:none; color: #1f2937; cursor: pointer; padding: 8px 12px; font-size: 13px; font-weight: 600; text-align: left; display: flex; align-items: center; gap: 8px; border-radius: 6px;\">
                        <i class=\"fas fa-edit\" style=\"width:14px;\"></i> Modifier
                    </button>
                    
                    <form method=\"post\" action=\"{{ path('app_user_message_delete', {id: message.id}) }}\" onsubmit=\"return confirm('Supprimer ce message définitivement ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_message_user_' ~ message.id) }}\">
                        <button type=\"submit\" style=\"background:none; border:none; color: #ef4444; cursor: pointer; padding: 8px 12px; font-size: 13px; font-weight: 600; text-align: left; display: flex; align-items: center; gap: 8px; border-radius: 6px; width: 100%;\">
                            <i class=\"fas fa-trash-alt\" style=\"width:14px;\"></i> Supprimer
                        </button>
                    </form>
                </div>
            </div>

            <!-- Hidden edit form -->
            <form id=\"edit-form-{{ message.id }}\" method=\"post\" action=\"{{ path('app_user_message_edit', {id: message.id}) }}\" style=\"display: none; align-items: flex-end; gap: 8px;\">
                <textarea name=\"edit_contenu\" style=\"width: 250px; height: 60px; padding: 8px; border-radius: 8px; border: 1px solid #e5e7eb; font-family: inherit; font-size: 13px; resize: vertical;\" required></textarea>
                <div style=\"display: flex; flex-direction: column; gap: 4px;\">
                    <button type=\"submit\" style=\"padding: 4px 8px; font-size: 11px; background: #22c55e; color: white; border: none; border-radius: 4px; cursor: pointer;\">Save</button>
                    <button type=\"button\" onclick=\"cancelEdit({{ message.id }})\" style=\"padding: 4px 8px; font-size: 11px; background: #eee; border: none; border-radius: 4px; cursor: pointer;\">Cancel</button>
                </div>
            </form>
        {% endif %}
    </div>
</div>
", "reclamation/_message_item_user.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\reclamation\\_message_item_user.html.twig");
    }
}
