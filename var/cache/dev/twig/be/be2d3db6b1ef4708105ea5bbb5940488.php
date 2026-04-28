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

/* reclamation/_message_item_admin.html.twig */
class __TwigTemplate_9bdcb779761552046b6a36e5ac5356f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_message_item_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_message_item_admin.html.twig"));

        // line 1
        $context["isAdmin"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1, $this->source); })()), "typeSender", [], "any", false, false, false, 1) == "ADMIN");
        // line 2
        yield "<div class=\"msg-group animate-in\">
    <div class=\"msg-container ";
        // line 3
        yield (((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("admin") : ("user"));
        yield "\">
        ";
        // line 4
        if ((($tmp =  !(isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "            <div class=\"msg-avatar\">
                ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 6, $this->source); })()), "utilisateur", [], "any", false, false, false, 6), "prenom", [], "any", false, false, false, 6))), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 9
        yield "
        <div class=\"msg-content-wrapper\">
            <div class=\"msg-bubble\" id=\"bubble-";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "\">
                ";
        // line 12
        if ((($tmp =  !(isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                    <span class=\"msg-sender-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 13, $this->source); })()), "utilisateur", [], "any", false, false, false, 13), "prenom", [], "any", false, false, false, 13), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 13, $this->source); })()), "utilisateur", [], "any", false, false, false, 13), "nom", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
                ";
        }
        // line 15
        yield "                
                <div id=\"msg-text-";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "\">";
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), "contenu", [], "any", false, false, false, 16), "html", null, true));
        yield "</div>
                ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 17, $this->source); })()), "contenu", [], "any", false, false, false, 17) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 17, $this->source); })()), "contenu", [], "any", false, false, false, 17) != "Voice message"))) {
            // line 18
            yield "                <button
                    onclick=\"translateMsgToFR(";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
            yield ", this)\"
                    title=\"Translate to French\"
                    style=\"display:inline-flex; align-items:center; gap:5px; background:none; border:none; cursor:pointer; padding:3px 0 0 0; font-size:11px; color:";
            // line 21
            yield (((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.5)") : ("#9ca3af"));
            yield "; font-family:inherit; transition:color 0.2s;\"
                    onmouseover=\"this.style.color='";
            // line 22
            yield (((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.9)") : ("#6b7280"));
            yield "';\"
                    onmouseout=\"if(!this.dataset.done)this.style.color='";
            // line 23
            yield (((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.5)") : ("#9ca3af"));
            yield "';\"
                >
                    <svg viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"width:11px;height:11px;\"><path fill-rule=\"evenodd\" d=\"M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a7.03 7.03 0 01-1.318 2.894A7.036 7.036 0 009 10.07V9a1 1 0 112 0v1.072a7.037 7.037 0 001.74-3.14.75.75 0 011.46.362A8.537 8.537 0 0112 10.66V11h1a1 1 0 110 2h-1v.5a1 1 0 11-2 0V13H9a1 1 0 110-2h1v-.34a8.537 8.537 0 01-2.2-3.44.75.75 0 011.46-.362A7.037 7.037 0 0010.422 9H8.578A7.036 7.036 0 007.322 6.894 7.033 7.033 0 016 5H3a1 1 0 110-2h3V3a1 1 0 011-1z\" clip-rule=\"evenodd\"/></svg>
                    Translate
                </button>
                ";
        }
        // line 29
        yield "
                ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 30, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                    <div style=\"margin-top:12px; padding-top:12px; border-top: 1px solid ";
            yield (((($tmp =  !(isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(0,0,0,0.06)") : ("rgba(255,255,255,0.2)"));
            yield ";\">
                        ";
            // line 32
            $context["isUrl"] = (is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 32, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 32)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1));
            // line 33
            yield "                        ";
            $context["extension"] = (((($tmp = (isset($context["isUrl"]) || array_key_exists("isUrl", $context) ? $context["isUrl"] : (function () { throw new RuntimeError('Variable "isUrl" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("m4a") : (Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 33, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 33), ".")))));
            // line 34
            yield "                        
                        ";
            // line 35
            if (((isset($context["isUrl"]) || array_key_exists("isUrl", $context) ? $context["isUrl"] : (function () { throw new RuntimeError('Variable "isUrl" does not exist.', 35, $this->source); })()) || CoreExtension::inFilter((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 35, $this->source); })()), ["m4a", "mp3", "wav", "ogg"]))) {
                // line 36
                yield "                            <div class=\"voice-message-player\">
                                <button class=\"play-btn\" onclick=\"toggleAudio(this, '";
                // line 37
                yield (((($tmp = (isset($context["isUrl"]) || array_key_exists("isUrl", $context) ? $context["isUrl"] : (function () { throw new RuntimeError('Variable "isUrl" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 37, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 37), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/messages/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 37, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 37))), "html", null, true)));
                yield "')\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" style=\"width:16px; height:16px;\"><path d=\"M8 5v14l11-7z\"/></svg>
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
                                <span class=\"timer\" style=\"font-size:11px; opacity:0.8; color: inherit;\">Voice</span>
                            </div>
                        ";
            } elseif (CoreExtension::inFilter(            // line 54
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 54, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp", "svg"])) {
                // line 55
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/messages/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 55, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 55))), "html", null, true);
                yield "\" target=\"_blank\" class=\"image-attachment-link\">
                                <img src=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/messages/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 56, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 56))), "html", null, true);
                yield "\" alt=\"Attachment\" style=\"max-width: 100%; max-height: 250px; border-radius: 12px; display: block; box-shadow: 0 4px 12px rgba(0,0,0,0.08);\">
                            </a>
                        ";
            } else {
                // line 59
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/messages/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 59, $this->source); })()), "urlPieceJointe", [], "any", false, false, false, 59))), "html", null, true);
                yield "\" target=\"_blank\" style=\"display:inline-flex; align-items:center; gap:8px; color:inherit; font-weight:700; text-decoration:none; opacity:.95; font-size: 13px;\">
                                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" style=\"width:16px;height:16px;\">
                                    <path d=\"M21.44 11.05l-8.49 8.49a5.5 5.5 0 0 1-7.78-7.78l8.49-8.49a3.5 3.5 0 0 1 4.95 4.95l-8.5 8.49a1.5 1.5 0 0 1-2.12-2.12l7.78-7.78\"/>
                                </svg>
                                Download (";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 63, $this->source); })())), "html", null, true);
                yield ")
                            </a>
                        ";
            }
            // line 66
            yield "                    </div>
                ";
        }
        // line 68
        yield "            </div>
            
            <div class=\"msg-date\">
                ";
        // line 71
        yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 71, $this->source); })()), "date", [], "any", false, false, false, 71));
        yield "
            </div>
        </div>

        ";
        // line 75
        if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 75, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "            <div style=\"position:relative; align-self: center;\">
                <div class=\"kebab-btn\" style=\"color: #64748b;\" onclick=\"toggleMenu(";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "html", null, true);
            yield ")\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" style=\"width:14px;\"><circle cx=\"12\" cy=\"12\" r=\"1\"></circle><circle cx=\"12\" cy=\"5\" r=\"1\"></circle><circle cx=\"12\" cy=\"19\" r=\"1\"></circle></svg>
                </div>
                <div id=\"menu-";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80), "html", null, true);
            yield "\" class=\"dropdown-menu\">
                    <button class=\"dropdown-item\" onclick=\"editMsg(";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "html", null, true);
            yield ", `";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 81, $this->source); })()), "contenu", [], "any", false, false, false, 81), "html_attr");
            yield "`)\">Edit</button>
                    <form method=\"POST\" action=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_message_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_message_admin_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"dropdown-item danger\">Delete</button>
                    </form>
                </div>
            </div>
        ";
        }
        // line 89
        yield "    </div>
    
    ";
        // line 91
        if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 91, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "        <form id=\"edit-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92), "html", null, true);
            yield "\" method=\"POST\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_message_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" style=\"display:none; margin-top:8px; align-self: flex-end; margin-right: 48px;\">
            <textarea name=\"edit_contenu\" style=\"width:250px; height:80px; padding:10px; border-radius:12px; border:1.5px solid var(--brand); font-family: inherit; font-size: 13px;\"></textarea>
            <div style=\"display:flex; gap:8px; margin-top:6px;\">
                <button type=\"submit\" style=\"background:var(--brand); color:white; border:none; padding:6px 12px; border-radius:6px; font-size:12px; font-weight:700; cursor:pointer;\">Update</button>
                <button type=\"button\" onclick=\"this.parentElement.parentElement.style.display='none'\" style=\"background:#f1f5f9; color:#475569; border:none; padding:6px 12px; border-radius:6px; font-size:12px; font-weight:700; cursor:pointer;\">Cancel</button>
            </div>
        </form>
    ";
        }
        // line 100
        yield "</div>
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
        return "reclamation/_message_item_admin.html.twig";
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
        return array (  262 => 100,  248 => 92,  246 => 91,  242 => 89,  233 => 83,  229 => 82,  223 => 81,  219 => 80,  213 => 77,  210 => 76,  208 => 75,  201 => 71,  196 => 68,  192 => 66,  186 => 63,  178 => 59,  172 => 56,  167 => 55,  165 => 54,  145 => 37,  142 => 36,  140 => 35,  137 => 34,  134 => 33,  132 => 32,  127 => 31,  125 => 30,  122 => 29,  113 => 23,  109 => 22,  105 => 21,  100 => 19,  97 => 18,  95 => 17,  89 => 16,  86 => 15,  78 => 13,  76 => 12,  72 => 11,  68 => 9,  62 => 6,  59 => 5,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set isAdmin = message.typeSender == 'ADMIN' %}
<div class=\"msg-group animate-in\">
    <div class=\"msg-container {{ isAdmin ? 'admin' : 'user' }}\">
        {% if not isAdmin %}
            <div class=\"msg-avatar\">
                {{ message.utilisateur.prenom|first|upper }}
            </div>
        {% endif %}

        <div class=\"msg-content-wrapper\">
            <div class=\"msg-bubble\" id=\"bubble-{{ message.id }}\">
                {% if not isAdmin %}
                    <span class=\"msg-sender-name\">{{ message.utilisateur.prenom }} {{ message.utilisateur.nom }}</span>
                {% endif %}
                
                <div id=\"msg-text-{{ message.id }}\">{{ message.contenu|nl2br }}</div>
                {% if message.contenu and message.contenu != 'Voice message' %}
                <button
                    onclick=\"translateMsgToFR({{ message.id }}, this)\"
                    title=\"Translate to French\"
                    style=\"display:inline-flex; align-items:center; gap:5px; background:none; border:none; cursor:pointer; padding:3px 0 0 0; font-size:11px; color:{{ isAdmin ? 'rgba(255,255,255,0.5)' : '#9ca3af' }}; font-family:inherit; transition:color 0.2s;\"
                    onmouseover=\"this.style.color='{{ isAdmin ? 'rgba(255,255,255,0.9)' : '#6b7280' }}';\"
                    onmouseout=\"if(!this.dataset.done)this.style.color='{{ isAdmin ? 'rgba(255,255,255,0.5)' : '#9ca3af' }}';\"
                >
                    <svg viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"width:11px;height:11px;\"><path fill-rule=\"evenodd\" d=\"M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a7.03 7.03 0 01-1.318 2.894A7.036 7.036 0 009 10.07V9a1 1 0 112 0v1.072a7.037 7.037 0 001.74-3.14.75.75 0 011.46.362A8.537 8.537 0 0112 10.66V11h1a1 1 0 110 2h-1v.5a1 1 0 11-2 0V13H9a1 1 0 110-2h1v-.34a8.537 8.537 0 01-2.2-3.44.75.75 0 011.46-.362A7.037 7.037 0 0010.422 9H8.578A7.036 7.036 0 007.322 6.894 7.033 7.033 0 016 5H3a1 1 0 110-2h3V3a1 1 0 011-1z\" clip-rule=\"evenodd\"/></svg>
                    Translate
                </button>
                {% endif %}

                {% if message.urlPieceJointe %}
                    <div style=\"margin-top:12px; padding-top:12px; border-top: 1px solid {{ not isAdmin ? 'rgba(0,0,0,0.06)' : 'rgba(255,255,255,0.2)' }};\">
                        {% set isUrl = message.urlPieceJointe starts with 'http' %}
                        {% set extension = isUrl ? 'm4a' : message.urlPieceJointe|split('.')|last|lower %}
                        
                        {% if isUrl or extension in ['m4a', 'mp3', 'wav', 'ogg'] %}
                            <div class=\"voice-message-player\">
                                <button class=\"play-btn\" onclick=\"toggleAudio(this, '{{ isUrl ? message.urlPieceJointe : asset('uploads/messages/' ~ message.urlPieceJointe) }}')\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" style=\"width:16px; height:16px;\"><path d=\"M8 5v14l11-7z\"/></svg>
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
                                <span class=\"timer\" style=\"font-size:11px; opacity:0.8; color: inherit;\">Voice</span>
                            </div>
                        {% elseif extension in ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'] %}
                            <a href=\"{{ asset('uploads/messages/' ~ message.urlPieceJointe) }}\" target=\"_blank\" class=\"image-attachment-link\">
                                <img src=\"{{ asset('uploads/messages/' ~ message.urlPieceJointe) }}\" alt=\"Attachment\" style=\"max-width: 100%; max-height: 250px; border-radius: 12px; display: block; box-shadow: 0 4px 12px rgba(0,0,0,0.08);\">
                            </a>
                        {% else %}
                            <a href=\"{{ asset('uploads/messages/' ~ message.urlPieceJointe) }}\" target=\"_blank\" style=\"display:inline-flex; align-items:center; gap:8px; color:inherit; font-weight:700; text-decoration:none; opacity:.95; font-size: 13px;\">
                                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" style=\"width:16px;height:16px;\">
                                    <path d=\"M21.44 11.05l-8.49 8.49a5.5 5.5 0 0 1-7.78-7.78l8.49-8.49a3.5 3.5 0 0 1 4.95 4.95l-8.5 8.49a1.5 1.5 0 0 1-2.12-2.12l7.78-7.78\"/>
                                </svg>
                                Download ({{ extension|upper }})
                            </a>
                        {% endif %}
                    </div>
                {% endif %}
            </div>
            
            <div class=\"msg-date\">
                {{ message.date|ago }}
            </div>
        </div>

        {% if isAdmin %}
            <div style=\"position:relative; align-self: center;\">
                <div class=\"kebab-btn\" style=\"color: #64748b;\" onclick=\"toggleMenu({{ message.id }})\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" style=\"width:14px;\"><circle cx=\"12\" cy=\"12\" r=\"1\"></circle><circle cx=\"12\" cy=\"5\" r=\"1\"></circle><circle cx=\"12\" cy=\"19\" r=\"1\"></circle></svg>
                </div>
                <div id=\"menu-{{ message.id }}\" class=\"dropdown-menu\">
                    <button class=\"dropdown-item\" onclick=\"editMsg({{ message.id }}, `{{ message.contenu|e('html_attr') }}`)\">Edit</button>
                    <form method=\"POST\" action=\"{{ path('app_admin_message_delete', {id: message.id}) }}\" onsubmit=\"return confirm('Supprimer ?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_message_admin_' ~ message.id) }}\">
                        <button type=\"submit\" class=\"dropdown-item danger\">Delete</button>
                    </form>
                </div>
            </div>
        {% endif %}
    </div>
    
    {% if isAdmin %}
        <form id=\"edit-form-{{ message.id }}\" method=\"POST\" action=\"{{ path('app_admin_message_edit', {id: message.id}) }}\" style=\"display:none; margin-top:8px; align-self: flex-end; margin-right: 48px;\">
            <textarea name=\"edit_contenu\" style=\"width:250px; height:80px; padding:10px; border-radius:12px; border:1.5px solid var(--brand); font-family: inherit; font-size: 13px;\"></textarea>
            <div style=\"display:flex; gap:8px; margin-top:6px;\">
                <button type=\"submit\" style=\"background:var(--brand); color:white; border:none; padding:6px 12px; border-radius:6px; font-size:12px; font-weight:700; cursor:pointer;\">Update</button>
                <button type=\"button\" onclick=\"this.parentElement.parentElement.style.display='none'\" style=\"background:#f1f5f9; color:#475569; border:none; padding:6px 12px; border-radius:6px; font-size:12px; font-weight:700; cursor:pointer;\">Cancel</button>
            </div>
        </form>
    {% endif %}
</div>
", "reclamation/_message_item_admin.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\reclamation\\_message_item_admin.html.twig");
    }
}
