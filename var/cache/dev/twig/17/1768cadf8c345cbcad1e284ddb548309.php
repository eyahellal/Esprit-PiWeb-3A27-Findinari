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

/* reclamation/my_ticket_details.html.twig */
class __TwigTemplate_382e13d1c40f2d26cbd130d85e6709c4 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/my_ticket_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/my_ticket_details.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Ticket Details - FinDinari";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    .details-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        padding-top: 100px;
    }
    
    .breadcrumb {
        font-size: 0.9rem;
        color: #6b7280;
        margin-bottom: 20px;
    }
    .breadcrumb a {
        color: #6b7280;
        text-decoration: none;
    }
    .breadcrumb a:hover {
        color: #22c55e;
    }
    
    .main-grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 25px;
    }

    @media (max-width: 768px) {
        .main-grid { grid-template-columns: 1fr; }
    }

    .card-panel {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .card-header {
        padding: 20px 24px;
        border-bottom: 1px solid #e5e7eb;
        background: #ffffff;
        font-weight: 700;
        color: #1f2937;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-body {
        padding: 24px;
    }

    .info-group { margin-bottom: 20px; }
    .info-label { font-size: 11px; color: #6b7280; font-weight: 800; text-transform: uppercase; margin-bottom: 4px; display: block; }
    .info-value { font-size: 14.5px; color: #1f2937; font-weight: 600; }

    .status-badge { display: inline-block; padding: 5px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; }
    .status-open { background-color: #dbeafe; color: #2563eb; }
    .status-closed { background-color: #f3f4f6; color: #4b5563; }
    .status-in-progress { background-color: #fef3c7; color: #d97706; }

    .priority-high { color: #ef4444; }
    .priority-medium { color: #f59e0b; }
    .priority-low { color: #3b82f6; }

    .chat-container { background: #fafbff; height: 600px; }
    .chat-messages { flex: 1; overflow-y: auto; padding: 24px; display: flex; flex-direction: column; }

    .msg-wrapper { display: flex; flex-direction: column; margin-bottom: 16px; width: 100%; }
    .msg-wrapper.user { align-items: flex-end; }
    .msg-wrapper.admin { align-items: flex-start; }

    .msg-meta { font-size: 11px; font-weight: 700; color: #6b7280; margin-bottom: 4px; padding: 0 4px; }
    .msg-bubble { 
        padding: 14px 20px; 
        border-radius: 16px; 
        max-width: 85%; 
        min-width: 80px;
        width: fit-content;
        font-size: 15px; 
        line-height: 1.6; 
        box-shadow: 0 4px 12px rgba(0,0,0,0.05); 
    }

    .msg-wrapper.user .msg-bubble { background: #22c55e; color: white; border-bottom-right-radius: 0; }
    .msg-wrapper.admin .msg-bubble { background: #ffffff; color: #1f2937; border: 1px solid #e5e7eb; border-bottom-left-radius: 0; }

    .chat-form button:hover { background-color: #16a34a; }

    /* Redesigned Reply Form */
    .reply-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .reply-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 20px;
    }

    .modern-textarea-wrapper {
        position: relative;
        margin-bottom: 20px;
    }

    .modern-textarea {
        width: 100%;
        min-height: 120px;
        padding: 16px 20px;
        border: 1.5px solid #e5e7eb;
        border-radius: 16px;
        font-family: inherit;
        font-size: 14.5px;
        outline: none;
        transition: all 0.2s;
        background: #ffffff;
        resize: vertical;
    }

    .modern-textarea:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.08);
    }

    .reply-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .attach-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #6b7280;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.2s;
        background: none;
        border: none;
        padding: 8px 12px;
        border-radius: 8px;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .attach-btn:hover {
        color: #22c55e;
        background: #f0fdf4;
    }

    .attach-btn i {
        font-size: 18px;
        flex-shrink: 0;
    }

    .send-reply-btn {
        background: #22c55e;
        color: white;
        padding: 12px 28px;
        border-radius: 14px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
        font-size: 15px;
        white-space: nowrap;
        flex-shrink: 0;
    }

    /* Voice Recorder Styles */
    .recorder-controls {
        display: none;
        align-items: center;
        gap: 15px;
        background: #f0fdf4;
        padding: 8px 16px;
        border-radius: 12px;
        border: 1px solid #bbf7d0;
        width: 100%;
        margin-bottom: 15px;
    }

    .recording-dot {
        width: 10px;
        height: 10px;
        background: #ef4444;
        border-radius: 50%;
        animation: pulse 1s infinite;
    }

    @keyframes pulse {
        0% { opacity: 1; }
        50% { opacity: 0.3; }
        100% { opacity: 1; }
    }

    .mic-btn {
        color: #64748b;
        cursor: pointer;
        padding: 8px;
        border-radius: 8px;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mic-btn:hover {
        color: #ef4444;
        background: #fee2e2;
    }

    /* Audio Player Styles */
    .voice-message-player {
        display: flex;
        align-items: center;
        gap: 12px;
        background: rgba(0,0,0,0.03);
        padding: 10px 16px;
        border-radius: 12px;
        width: 100%;
        min-width: 240px;
        margin-top: 8px;
        box-sizing: border-box;
    }

    .user .voice-message-player {
        background: rgba(255,255,255,0.15);
        color: white;
    }

    .play-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #22c55e;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: none;
        transition: transform 0.1s;
    }

    .waveform-mock {
        flex: 1;
        height: 20px;
        display: flex;
        align-items: center;
        gap: 2px;
    }

    .wave-bar {
        width: 3px;
        height: 60%;
        background: currentColor;
        opacity: 0.4;
        border-radius: 2px;
    }

    .send-reply-btn:hover {
        background: #16a34a;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(34, 197, 94, 0.25);
    }

    .file-preview {
        margin-top: 10px;
        font-size: 12px;
        color: #22c55e;
        font-weight: 700;
        display: none;
    }

    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes slideIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    
    .animate-in {
        animation: fadeIn 0.4s ease-out, slideIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
</style>

";
        // line 306
        yield "
<div class=\"details-container\">
    <div class=\"breadcrumb\">
        <a href=\"";
        // line 309
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a> &gt; 
        <a href=\"";
        // line 310
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support_center");
        yield "\">Support</a> &gt; 
        <a href=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_tickets");
        yield "\">My Tickets</a> &gt; 
        Details
    </div>

    <!-- FLASH MESSAGES -->
    ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "flashes", ["success"], "method", false, false, false, 316));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 317
            yield "        <div style=\"background: #dcfce7; color: #166534; padding: 14px 18px; border-radius: 10px; margin-bottom: 20px; font-weight: 600; border: 1px solid #b2f5d1;\">
            ";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        yield "
    <div class=\"main-grid\">
        
        <!-- LEFT: TICKET INFO -->
        <div class=\"card-panel\">
            <div class=\"card-header\">
                <i class=\"fas fa-info-circle\" style=\"color: var(--primary-green);\"></i>
                Ticket Details
            </div>
            <div class=\"card-body\">
                <div class=\"info-group\">
                    <span class=\"info-label\">Title</span>
                    <div class=\"info-value\" style=\"font-size: 18px;\">";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 333, $this->source); })()), "titre", [], "any", false, false, false, 333), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"info-group\">
                    <span class=\"info-label\">Status</span>
                    <div class=\"status-badge ";
        // line 338
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 338, $this->source); })()), "statut", [], "any", false, false, false, 338)) == "open")) {
            yield "status-open";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 338, $this->source); })()), "statut", [], "any", false, false, false, 338)) == "closed")) {
            yield "status-closed";
        } else {
            yield "status-in-progress";
        }
        yield "\">
                        ";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 339, $this->source); })()), "statut", [], "any", false, false, false, 339), "html", null, true);
        yield "
                    </div>
                </div>

                <div class=\"info-group\">
                    <span class=\"info-label\">Priority</span>
                    <div class=\"info-value priority-";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 345, $this->source); })()), "priorite", [], "any", false, false, false, 345)), "html", null, true);
        yield "\">
                        ";
        // line 346
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 346, $this->source); })()), "priorite", [], "any", false, false, false, 346)) == "high")) {
            // line 347
            yield "                            <i class=\"fas fa-arrow-up\"></i>
                        ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 348
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 348, $this->source); })()), "priorite", [], "any", false, false, false, 348)) == "medium")) {
            // line 349
            yield "                            <i class=\"fas fa-minus\"></i>
                        ";
        } else {
            // line 351
            yield "                            <i class=\"fas fa-arrow-down\"></i>
                        ";
        }
        // line 353
        yield "                        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 353, $this->source); })()), "priorite", [], "any", false, false, false, 353), "html", null, true);
        yield "
                    </div>
                </div>
                
                <div class=\"info-group\">
                    <span class=\"info-label\">Category</span>
                    <div class=\"info-value\">";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 359, $this->source); })()), "type", [], "any", false, false, false, 359), "html", null, true);
        yield "</div>
                </div>

                <div class=\"info-group\">
                    <span class=\"info-label\">Created At</span>
                    <div class=\"info-value\" style=\"color: var(--gray-text);\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 364, $this->source); })()), "dateCreation", [], "any", false, false, false, 364), "d M Y, H:i"), "html", null, true);
        yield "</div>
                </div>

                <div class=\"info-group\" style=\"margin-top: 25px; padding-top: 25px; border-top: 1px dashed var(--border-color);\">
                    <span class=\"info-label\">Description</span>
                    <p style=\"color: var(--dark-text); font-size: 14px; line-height: 1.6; margin-top: 8px;\">";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 369, $this->source); })()), "description", [], "any", false, false, false, 369), "html", null, true);
        yield "</p>
                </div>

                ";
        // line 372
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 372, $this->source); })()), "imageUrl", [], "any", false, false, false, 372)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 373
            yield "                <div class=\"info-group\">
                   <span class=\"info-label\">Attached Image</span>
                   <div style=\"margin-top: 10px; border-radius: 12px; overflow: hidden; border: 1px solid var(--border-color);\">
                       <img src=\"";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/tickets/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 376, $this->source); })()), "imageUrl", [], "any", false, false, false, 376))), "html", null, true);
            yield "\" alt=\"Ticket Attachment\" style=\"width: 100%; display: block;\" onerror=\"this.onerror=null; this.src='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-image-icon.png"), "html", null, true);
            yield "';\">
                   </div>
                </div>
                ";
        }
        // line 380
        yield "            </div>
        </div>

        <!-- RIGHT: CHAT -->
        <div class=\"card-panel chat-container\">
            <div class=\"card-header\">
                <i class=\"far fa-comments\" style=\"color: var(--primary-green);\"></i>
                Discussion
            </div>
            
            <div id=\"chatContainer\" class=\"chat-messages\">
                ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 391, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 392
            yield "                    ";
            yield from $this->load("reclamation/_message_item_user.html.twig", 392)->unwrap()->yield(CoreExtension::merge($context, ["message" => $context["message"], "ticket" => (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 392, $this->source); })())]));
            // line 393
            yield "                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 394
            yield "                    <div id=\"noMessagesPlaceholder\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; color: var(--gray-text); opacity: 0.6;\">
                        <i class=\"far fa-comment-dots\" style=\"font-size: 3rem; margin-bottom: 12px;\"></i>
                        <p style=\"font-weight: 600; font-size: 15px; margin:0;\">No messages yet.</p>
                        <span style=\"font-size: 13px;\">Add a reply to follow up on your ticket.</span>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        yield "            </div>


            <div class=\"reply-card\">
                <div class=\"reply-title\">Add a reply</div>
                
                ";
        // line 406
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_message_new", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 407
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 407, $this->source); })()), "id", [], "any", false, false, false, 407)]), "attr" => ["novalidate" => "novalidate", "id" => "replyForm"], "multipart" => true]);
        // line 413
        yield "
                    <div id=\"suggestionsBox\" style=\"display:flex; gap:8px; flex-wrap:wrap; margin-bottom:12px; min-height:36px; align-items:center;\"></div>
                    <div class=\"modern-textarea-wrapper\">
                        ";
        // line 416
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 416, $this->source); })()), "contenu", [], "any", false, false, false, 416), 'widget', ["attr" => ["class" => "modern-textarea", "placeholder" => "Type your message here..."]]);
        // line 421
        yield "
                        <div style=\"color: #ef4444; font-size: 12px; margin-top: 4px;\">";
        // line 422
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), "contenu", [], "any", false, false, false, 422), 'errors');
        yield "</div>
                    </div>

                    <div class=\"reply-actions\">
                        <div style=\"display: flex; align-items: center; gap: 8px;\">
                            <label class=\"attach-btn\" for=\"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), "attachment", [], "any", false, false, false, 427), "vars", [], "any", false, false, false, 427), "id", [], "any", false, false, false, 427), "html", null, true);
        yield "\" title=\"Attach a file\">
                                <i class=\"fas fa-paperclip\"></i>
                                <span>Attach file</span>
                            </label>

                            <div class=\"mic-btn\" id=\"micBtn\" title=\"Record voice message\">
                                <i class=\"fas fa-microphone\" style=\"font-size: 20px;\"></i>
                            </div>
                        </div>

                        <div id=\"recorderPanel\" class=\"recorder-controls\">
                            <div class=\"recording-dot\"></div>
                            <div class=\"timer\" id=\"recordTimer\" style=\"font-family: monospace; font-weight: 700; color: #166534; font-size: 14px;\">00:00</div>
                            <div style=\"flex:1;\"></div>
                            <button type=\"button\" id=\"cancelRecord\" style=\"background:none; border:none; color:#ef4444; font-weight:700; cursor:pointer; font-size:13px;\">Cancel</button>
                            <button type=\"button\" id=\"stopRecord\" style=\"background:#22c55e; border:none; color:white; padding:6px 12px; border-radius:8px; font-weight:700; cursor:pointer; font-size:13px;\">Send Voice</button>
                        </div>
                        
                        <div style=\"display:none !important;\">
                            ";
        // line 446
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "attachment", [], "any", false, false, false, 446), 'widget');
        yield "
                        </div>

                        <div style=\"display:flex; gap:10px; align-items:center;\">
                            <button type=\"button\" class=\"btn transform-btn\" data-mode=\"formalize\" style=\"background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; font-weight:700; border-radius:14px; padding:12px 20px; font-size:14px; cursor:pointer;\" title=\"Formalize & Professionalize\">
                                <i class=\"fas fa-magic\"></i>
                                Formalize
                            </button>

                            <button type=\"button\" class=\"btn transform-btn\" data-mode=\"correct\" style=\"background:#fffcf0; color:#854d0e; border:1px solid #fef08a; font-weight:700; border-radius:14px; padding:12px 20px; font-size:14px; cursor:pointer;\" title=\"Correct Vocabulary & Grammar\">
                                <i class=\"fas fa-spell-check\"></i>
                                Correct
                            </button>

                            <button type=\"submit\" class=\"send-reply-btn\" id=\"standardSendBtn\">
                                <i class=\"fas fa-paper-plane\"></i>
                                Send Reply
                            </button>
                        </div>
                    </div>
                    
                    <div id=\"fileNameDisplay\" class=\"file-preview\"></div>
                    <div style=\"color: #ef4444; font-size: 12px; margin-top: 4px;\">";
        // line 468
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 468, $this->source); })()), "attachment", [], "any", false, false, false, 468), 'errors');
        yield "</div>
                ";
        // line 469
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 469, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

    </div>
</div>

<script>
    // Auto-scroll chat to bottom
    const chatContainer = document.getElementById('chatContainer');
    if (chatContainer) {
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

    function toggleMessageMenu(id) {
        const dropdown = document.getElementById('dropdown-' + id);
        const isOpen = dropdown.style.display === 'flex';
        
        // Close all other dropdowns
        document.querySelectorAll('[id^=\"dropdown-\"]').forEach(d => d.style.display = 'none');
        
        dropdown.style.display = isOpen ? 'none' : 'flex';
    }

    // Close dropdowns on outside click
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.message-actions-dropdown')) {
            document.querySelectorAll('[id^=\"dropdown-\"]').forEach(d => d.style.display = 'none');
        }
    });

    function editMessage(id, content) {
        document.getElementById('msg-content-' + id).style.visibility = 'hidden';
        document.getElementById('dropdown-' + id).style.display = 'none';
        const form = document.getElementById('edit-form-' + id);
        form.style.display = 'flex';
        form.querySelector('textarea').value = content;
    }

    function cancelEdit(id) {
        document.getElementById('msg-content-' + id).style.visibility = 'visible';
        document.getElementById('edit-form-' + id).style.display = 'none';
    }

    async function translateMsgToFR(messageId, btn) {
        // If already translated → restore original
        if (btn.dataset.translated === '1') {
            document.getElementById('msg-text-' + messageId).innerHTML = btn.dataset.original;
            btn.innerHTML = btn.dataset.btnOriginal;
            btn.dataset.translated = '0';
            btn.style.color = '';
            return;
        }

        const originalHtml = btn.innerHTML;
        btn.dataset.btnOriginal = originalHtml;
        btn.innerHTML = '<svg viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"width:11px;height:11px;animation:spin 1s linear infinite\"><path fill-rule=\"evenodd\" d=\"M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z\" clip-rule=\"evenodd\"/></svg> Translating…';
        btn.disabled = true;
        try {
            const res = await fetch(`/message/\${messageId}/translate`, {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const data = await res.json();
            if (data.translated) {
                const msgEl = document.getElementById('msg-text-' + messageId);
                btn.dataset.original = msgEl.innerHTML; // save original HTML
                msgEl.innerHTML = data.translated.replace(/\\n/g, '<br>');
                btn.innerHTML = '↩ Show original';
                btn.style.color = '#22c55e';
                btn.dataset.translated = '1';
                btn.disabled = false;
            } else {
                btn.innerHTML = originalHtml;
                btn.disabled = false;
                alert('Translation failed: ' + (data.error || 'Unknown error'));
            }
        } catch(e) {
            btn.innerHTML = originalHtml;
            btn.disabled = false;
        }
    }

    // Voice Recording Logic
    let mediaRecorder;
    let audioChunks = [];
    let startTime;
    let timerInterval;

    const micBtn = document.getElementById('micBtn');
    const recorderPanel = document.getElementById('recorderPanel');
    const standardSendBtn = document.getElementById('standardSendBtn');
    const stopRecordBtn = document.getElementById('stopRecord');
    const cancelRecordBtn = document.getElementById('cancelRecord');
    const timerDisplay = document.getElementById('recordTimer');

    micBtn.onclick = async () => {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            mediaRecorder = new MediaRecorder(stream);
            audioChunks = [];

            mediaRecorder.ondataavailable = event => audioChunks.push(event.data);
            mediaRecorder.onstop = async () => {
                const audioBlob = new Blob(audioChunks, { type: mediaRecorder.mimeType || 'audio/webm' });
                const formData = new FormData();
                formData.append('audio', audioBlob, 'voice_message.webm');

                try {
                    const response = await fetch(\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_message_voice", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 578, $this->source); })()), "id", [], "any", false, false, false, 578)]), "html", null, true);
        yield "\", {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: formData
                    });
                    
                    const contentType = response.headers.get(\"content-type\");
                    if (contentType && contentType.indexOf(\"application/json\") !== -1) {
                        const result = await response.json();
                        console.log('Voice upload response:', result);
                        if (result.success) {
                            window.location.reload();
                        } else {
                            alert('Upload failed: ' + (result.error || 'Unknown error'));
                        }
                    } else {
                        const text = await response.text();
                        console.error('Server returned non-JSON response:', text);
                        alert('Server error: Could not process voice message. Please check the console for details.');
                    }
                } catch (err) {
                    console.error('Upload process failed:', err);
                    alert('Could not send voice message: ' + err.message);
                    
                    recorderPanel.style.display = 'none';
                    micBtn.style.display = 'flex';
                    standardSendBtn.style.display = 'flex';
                }
            };

            mediaRecorder.start();
            micBtn.style.display = 'none';
            standardSendBtn.style.display = 'none';
            recorderPanel.style.display = 'flex';
            
            startTime = Date.now();
            timerInterval = setInterval(() => {
                const seconds = Math.floor((Date.now() - startTime) / 1000);
                const m = Math.floor(seconds / 60).toString().padStart(2, '0');
                const s = (seconds % 60).toString().padStart(2, '0');
                timerDisplay.textContent = `\${m}:\${s}`;
            }, 1000);

        } catch (err) {
            console.error('Mic access denied:', err);
            alert('Mic access denied. Please enable microphone permissions.');
        }
    };

    stopRecordBtn.onclick = () => {
        mediaRecorder.stop();
        mediaRecorder.stream.getTracks().forEach(t => t.stop());
        clearInterval(timerInterval);
    };

    cancelRecordBtn.onclick = () => {
        mediaRecorder.onstop = null;
        mediaRecorder.stop();
        mediaRecorder.stream.getTracks().forEach(t => t.stop());
        clearInterval(timerInterval);
        recorderPanel.style.display = 'none';
        micBtn.style.display = 'flex';
        standardSendBtn.style.display = 'flex';
        timerDisplay.textContent = '00:00';
    };

    // Shared Audio Player logic
    let currentAudio = null;
    window.toggleAudio = function(btn, url) {
        if (currentAudio && currentAudio.src === url) {
            if (currentAudio.paused) {
                currentAudio.play();
                btn.innerHTML = '<i class=\"fas fa-pause\"></i>';
            } else {
                currentAudio.pause();
                btn.innerHTML = '<i class=\"fas fa-play\"></i>';
            }
        } else {
            if (currentAudio) currentAudio.pause();
            currentAudio = new Audio(url);
            currentAudio.play();
            btn.innerHTML = '<i class=\"fas fa-pause\"></i>';
            
            currentAudio.onended = () => {
                btn.innerHTML = '<i class=\"fas fa-play\"></i>';
            };
        }
    };

    // Handle file selection display
    const fileInputElement = document.getElementById('";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 671, $this->source); })()), "attachment", [], "any", false, false, false, 671), "vars", [], "any", false, false, false, 671), "id", [], "any", false, false, false, 671), "html", null, true);
        yield "');
    const fileNameDisplay = document.getElementById('fileNameDisplay');
    
    if (fileInputElement) {
        fileInputElement.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                fileNameDisplay.textContent = 'Selected: ' + this.files[0].name;
                fileNameDisplay.style.display = 'block';
            } else {
                fileNameDisplay.style.display = 'none';
            }
        });
    }

    // AI Suggestions Logic
    document.addEventListener('DOMContentLoaded', function () {
        const suggestionsBox = document.getElementById('suggestionsBox');
        const textarea = document.getElementById('";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 688, $this->source); })()), "contenu", [], "any", false, false, false, 688), "vars", [], "any", false, false, false, 688), "id", [], "any", false, false, false, 688), "html", null, true);
        yield "');
        const suggestionsUrl = '";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_message_suggestions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 689, $this->source); })()), "id", [], "any", false, false, false, 689)]), "html", null, true);
        yield "';

        async function loadSuggestions() {
            if (!suggestionsBox || !textarea) return;

            suggestionsBox.innerHTML = '<span style=\"color:#64748b;font-size:12px;font-weight:600;display:flex;align-items:center;gap:6px;\"><i class=\"fas fa-spinner fa-spin\"></i> Getting AI suggestions...</span>';

            try {
                const response = await fetch(suggestionsUrl);
                const data = await response.json();
                console.log('Detected Role:', data.detected_role);
                console.log('Groq Suggestions Response:', data);

                if (data.suggestions && data.suggestions.length > 0) {
                    suggestionsBox.innerHTML = '';
                    data.suggestions.forEach(suggestion => {
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = 'suggestion-chip';
                        btn.textContent = suggestion;
                        btn.style.cssText = 'background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; padding:6px 14px; border-radius:10px; font-size:12.5px; font-weight:700; cursor:pointer; transition:all 0.2s; white-space:nowrap; border: 1px solid #22c55e33;';
                        
                        btn.onmouseover = () => { btn.style.background = '#dcfce7'; btn.style.transform = 'translateY(-1px)'; };
                        btn.onmouseout = () => { btn.style.background = '#f0fdf4'; btn.style.transform = 'none'; };
                        
                        btn.onclick = () => {
                            textarea.value = suggestion;
                            textarea.focus();
                        };
                        suggestionsBox.appendChild(btn);
                    });
                } else {
                    suggestionsBox.innerHTML = '<span style=\"color:#94a3b8;font-size:12px;font-style:italic;\">No suggestions available</span>';
                }
            } catch (e) {
                console.error('Groq Error:', e);
                suggestionsBox.innerHTML = '';
            }
        }

        loadSuggestions();

        // AI Transformation logic (Formalize & Correct)
        document.querySelectorAll('.transform-btn').forEach(btn => {
            btn.addEventListener('click', async () => {
                const currentText = textarea.value.trim();
                if (!currentText) return;

                const mode = btn.dataset.mode;
                const originalContent = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';

                try {
                    const response = await fetch('";
        // line 743
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_reformulate");
        yield "', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ content: currentText, mode: mode })
                    });
                    const data = await response.json();
                    if (data.transformed) {
                        textarea.value = data.transformed;
                        textarea.style.height = 'auto';
                        textarea.style.height = textarea.scrollHeight + 'px';
                    }
                } catch (e) {
                    console.error('Transformation error:', e);
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalContent;
                }
            });
        });

        // --- AJAX Polling for new messages ---
        let lastMessageId = ";
        // line 764
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 764, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 764, $this->source); })())), "id", [], "any", false, false, false, 764), "html", null, true)) : (0));
        yield ";
        const fetchUrlPattern = \"";
        // line 765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_fetch_new_messages", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 765, $this->source); })()), "id", [], "any", false, false, false, 765), "lastId" => 999999]), "html", null, true);
        yield "\";

        function pollMessages() {
            const url = fetchUrlPattern.replace('999999', lastMessageId);
            
            fetch(url, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                if (data.count > 0) {
                    console.log(`Chat Polling: Found \${data.count} new messages.`);
                    const chatContainer = document.getElementById('chatContainer');
                    const noMessagesPlaceholder = document.getElementById('noMessagesPlaceholder');
                    
                    if (noMessagesPlaceholder) {
                        noMessagesPlaceholder.remove();
                    }
                    
                    // Append new messages
                    chatContainer.insertAdjacentHTML('beforeend', data.html);
                    
                    // Update lastId
                    lastMessageId = data.lastId;
                    
                    // Scroll to bottom
                    chatContainer.scrollTop = chatContainer.scrollHeight;
                }
            })
            .catch(err => console.error('Chat Polling Error:', err));
        }

        // Check for new messages every 3 seconds
        setInterval(pollMessages, 3000);
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reclamation/my_ticket_details.html.twig";
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
        return array (  1001 => 765,  997 => 764,  973 => 743,  916 => 689,  912 => 688,  892 => 671,  796 => 578,  684 => 469,  680 => 468,  655 => 446,  633 => 427,  625 => 422,  622 => 421,  620 => 416,  615 => 413,  613 => 407,  612 => 406,  604 => 400,  593 => 394,  580 => 393,  577 => 392,  559 => 391,  546 => 380,  537 => 376,  532 => 373,  530 => 372,  524 => 369,  516 => 364,  508 => 359,  498 => 353,  494 => 351,  490 => 349,  488 => 348,  485 => 347,  483 => 346,  479 => 345,  470 => 339,  460 => 338,  452 => 333,  438 => 321,  429 => 318,  426 => 317,  422 => 316,  414 => 311,  410 => 310,  406 => 309,  401 => 306,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ticket Details - FinDinari{% endblock %}

{% block body %}
<style>
    .details-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        padding-top: 100px;
    }
    
    .breadcrumb {
        font-size: 0.9rem;
        color: #6b7280;
        margin-bottom: 20px;
    }
    .breadcrumb a {
        color: #6b7280;
        text-decoration: none;
    }
    .breadcrumb a:hover {
        color: #22c55e;
    }
    
    .main-grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 25px;
    }

    @media (max-width: 768px) {
        .main-grid { grid-template-columns: 1fr; }
    }

    .card-panel {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .card-header {
        padding: 20px 24px;
        border-bottom: 1px solid #e5e7eb;
        background: #ffffff;
        font-weight: 700;
        color: #1f2937;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-body {
        padding: 24px;
    }

    .info-group { margin-bottom: 20px; }
    .info-label { font-size: 11px; color: #6b7280; font-weight: 800; text-transform: uppercase; margin-bottom: 4px; display: block; }
    .info-value { font-size: 14.5px; color: #1f2937; font-weight: 600; }

    .status-badge { display: inline-block; padding: 5px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; }
    .status-open { background-color: #dbeafe; color: #2563eb; }
    .status-closed { background-color: #f3f4f6; color: #4b5563; }
    .status-in-progress { background-color: #fef3c7; color: #d97706; }

    .priority-high { color: #ef4444; }
    .priority-medium { color: #f59e0b; }
    .priority-low { color: #3b82f6; }

    .chat-container { background: #fafbff; height: 600px; }
    .chat-messages { flex: 1; overflow-y: auto; padding: 24px; display: flex; flex-direction: column; }

    .msg-wrapper { display: flex; flex-direction: column; margin-bottom: 16px; width: 100%; }
    .msg-wrapper.user { align-items: flex-end; }
    .msg-wrapper.admin { align-items: flex-start; }

    .msg-meta { font-size: 11px; font-weight: 700; color: #6b7280; margin-bottom: 4px; padding: 0 4px; }
    .msg-bubble { 
        padding: 14px 20px; 
        border-radius: 16px; 
        max-width: 85%; 
        min-width: 80px;
        width: fit-content;
        font-size: 15px; 
        line-height: 1.6; 
        box-shadow: 0 4px 12px rgba(0,0,0,0.05); 
    }

    .msg-wrapper.user .msg-bubble { background: #22c55e; color: white; border-bottom-right-radius: 0; }
    .msg-wrapper.admin .msg-bubble { background: #ffffff; color: #1f2937; border: 1px solid #e5e7eb; border-bottom-left-radius: 0; }

    .chat-form button:hover { background-color: #16a34a; }

    /* Redesigned Reply Form */
    .reply-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .reply-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 20px;
    }

    .modern-textarea-wrapper {
        position: relative;
        margin-bottom: 20px;
    }

    .modern-textarea {
        width: 100%;
        min-height: 120px;
        padding: 16px 20px;
        border: 1.5px solid #e5e7eb;
        border-radius: 16px;
        font-family: inherit;
        font-size: 14.5px;
        outline: none;
        transition: all 0.2s;
        background: #ffffff;
        resize: vertical;
    }

    .modern-textarea:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.08);
    }

    .reply-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .attach-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #6b7280;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.2s;
        background: none;
        border: none;
        padding: 8px 12px;
        border-radius: 8px;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .attach-btn:hover {
        color: #22c55e;
        background: #f0fdf4;
    }

    .attach-btn i {
        font-size: 18px;
        flex-shrink: 0;
    }

    .send-reply-btn {
        background: #22c55e;
        color: white;
        padding: 12px 28px;
        border-radius: 14px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
        font-size: 15px;
        white-space: nowrap;
        flex-shrink: 0;
    }

    /* Voice Recorder Styles */
    .recorder-controls {
        display: none;
        align-items: center;
        gap: 15px;
        background: #f0fdf4;
        padding: 8px 16px;
        border-radius: 12px;
        border: 1px solid #bbf7d0;
        width: 100%;
        margin-bottom: 15px;
    }

    .recording-dot {
        width: 10px;
        height: 10px;
        background: #ef4444;
        border-radius: 50%;
        animation: pulse 1s infinite;
    }

    @keyframes pulse {
        0% { opacity: 1; }
        50% { opacity: 0.3; }
        100% { opacity: 1; }
    }

    .mic-btn {
        color: #64748b;
        cursor: pointer;
        padding: 8px;
        border-radius: 8px;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mic-btn:hover {
        color: #ef4444;
        background: #fee2e2;
    }

    /* Audio Player Styles */
    .voice-message-player {
        display: flex;
        align-items: center;
        gap: 12px;
        background: rgba(0,0,0,0.03);
        padding: 10px 16px;
        border-radius: 12px;
        width: 100%;
        min-width: 240px;
        margin-top: 8px;
        box-sizing: border-box;
    }

    .user .voice-message-player {
        background: rgba(255,255,255,0.15);
        color: white;
    }

    .play-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #22c55e;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: none;
        transition: transform 0.1s;
    }

    .waveform-mock {
        flex: 1;
        height: 20px;
        display: flex;
        align-items: center;
        gap: 2px;
    }

    .wave-bar {
        width: 3px;
        height: 60%;
        background: currentColor;
        opacity: 0.4;
        border-radius: 2px;
    }

    .send-reply-btn:hover {
        background: #16a34a;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(34, 197, 94, 0.25);
    }

    .file-preview {
        margin-top: 10px;
        font-size: 12px;
        color: #22c55e;
        font-weight: 700;
        display: none;
    }

    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes slideIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    
    .animate-in {
        animation: fadeIn 0.4s ease-out, slideIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
</style>

{# Custom Support Header removed to show default navbar #}

<div class=\"details-container\">
    <div class=\"breadcrumb\">
        <a href=\"{{ path('app_home') }}\">Home</a> &gt; 
        <a href=\"{{ path('support_center') }}\">Support</a> &gt; 
        <a href=\"{{ path('app_user_tickets') }}\">My Tickets</a> &gt; 
        Details
    </div>

    <!-- FLASH MESSAGES -->
    {% for message in app.flashes('success') %}
        <div style=\"background: #dcfce7; color: #166534; padding: 14px 18px; border-radius: 10px; margin-bottom: 20px; font-weight: 600; border: 1px solid #b2f5d1;\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"main-grid\">
        
        <!-- LEFT: TICKET INFO -->
        <div class=\"card-panel\">
            <div class=\"card-header\">
                <i class=\"fas fa-info-circle\" style=\"color: var(--primary-green);\"></i>
                Ticket Details
            </div>
            <div class=\"card-body\">
                <div class=\"info-group\">
                    <span class=\"info-label\">Title</span>
                    <div class=\"info-value\" style=\"font-size: 18px;\">{{ ticket.titre }}</div>
                </div>
                
                <div class=\"info-group\">
                    <span class=\"info-label\">Status</span>
                    <div class=\"status-badge {% if ticket.statut|lower == 'open' %}status-open{% elseif ticket.statut|lower == 'closed' %}status-closed{% else %}status-in-progress{% endif %}\">
                        {{ ticket.statut }}
                    </div>
                </div>

                <div class=\"info-group\">
                    <span class=\"info-label\">Priority</span>
                    <div class=\"info-value priority-{{ ticket.priorite|lower }}\">
                        {% if ticket.priorite|lower == 'high' %}
                            <i class=\"fas fa-arrow-up\"></i>
                        {% elseif ticket.priorite|lower == 'medium' %}
                            <i class=\"fas fa-minus\"></i>
                        {% else %}
                            <i class=\"fas fa-arrow-down\"></i>
                        {% endif %}
                        {{ ticket.priorite }}
                    </div>
                </div>
                
                <div class=\"info-group\">
                    <span class=\"info-label\">Category</span>
                    <div class=\"info-value\">{{ ticket.type }}</div>
                </div>

                <div class=\"info-group\">
                    <span class=\"info-label\">Created At</span>
                    <div class=\"info-value\" style=\"color: var(--gray-text);\">{{ ticket.dateCreation|date('d M Y, H:i') }}</div>
                </div>

                <div class=\"info-group\" style=\"margin-top: 25px; padding-top: 25px; border-top: 1px dashed var(--border-color);\">
                    <span class=\"info-label\">Description</span>
                    <p style=\"color: var(--dark-text); font-size: 14px; line-height: 1.6; margin-top: 8px;\">{{ ticket.description }}</p>
                </div>

                {% if ticket.imageUrl %}
                <div class=\"info-group\">
                   <span class=\"info-label\">Attached Image</span>
                   <div style=\"margin-top: 10px; border-radius: 12px; overflow: hidden; border: 1px solid var(--border-color);\">
                       <img src=\"{{ asset('uploads/tickets/' ~ ticket.imageUrl) }}\" alt=\"Ticket Attachment\" style=\"width: 100%; display: block;\" onerror=\"this.onerror=null; this.src='{{ asset('images/placeholder-image-icon.png') }}';\">
                   </div>
                </div>
                {% endif %}
            </div>
        </div>

        <!-- RIGHT: CHAT -->
        <div class=\"card-panel chat-container\">
            <div class=\"card-header\">
                <i class=\"far fa-comments\" style=\"color: var(--primary-green);\"></i>
                Discussion
            </div>
            
            <div id=\"chatContainer\" class=\"chat-messages\">
                {% for message in messages %}
                    {% include 'reclamation/_message_item_user.html.twig' with {'message': message, 'ticket': ticket} %}
                {% else %}
                    <div id=\"noMessagesPlaceholder\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; color: var(--gray-text); opacity: 0.6;\">
                        <i class=\"far fa-comment-dots\" style=\"font-size: 3rem; margin-bottom: 12px;\"></i>
                        <p style=\"font-weight: 600; font-size: 15px; margin:0;\">No messages yet.</p>
                        <span style=\"font-size: 13px;\">Add a reply to follow up on your ticket.</span>
                    </div>
                {% endfor %}
            </div>


            <div class=\"reply-card\">
                <div class=\"reply-title\">Add a reply</div>
                
                {{ form_start(form, {
                    'action': path('app_user_message_new', {id: ticket.id}),
                    'attr': {
                        'novalidate': 'novalidate',
                        'id': 'replyForm'
                    },
                    'multipart': true
                }) }}
                    <div id=\"suggestionsBox\" style=\"display:flex; gap:8px; flex-wrap:wrap; margin-bottom:12px; min-height:36px; align-items:center;\"></div>
                    <div class=\"modern-textarea-wrapper\">
                        {{ form_widget(form.contenu, {
                            'attr': {
                                'class': 'modern-textarea',
                                'placeholder': 'Type your message here...'
                            }
                        }) }}
                        <div style=\"color: #ef4444; font-size: 12px; margin-top: 4px;\">{{ form_errors(form.contenu) }}</div>
                    </div>

                    <div class=\"reply-actions\">
                        <div style=\"display: flex; align-items: center; gap: 8px;\">
                            <label class=\"attach-btn\" for=\"{{ form.attachment.vars.id }}\" title=\"Attach a file\">
                                <i class=\"fas fa-paperclip\"></i>
                                <span>Attach file</span>
                            </label>

                            <div class=\"mic-btn\" id=\"micBtn\" title=\"Record voice message\">
                                <i class=\"fas fa-microphone\" style=\"font-size: 20px;\"></i>
                            </div>
                        </div>

                        <div id=\"recorderPanel\" class=\"recorder-controls\">
                            <div class=\"recording-dot\"></div>
                            <div class=\"timer\" id=\"recordTimer\" style=\"font-family: monospace; font-weight: 700; color: #166534; font-size: 14px;\">00:00</div>
                            <div style=\"flex:1;\"></div>
                            <button type=\"button\" id=\"cancelRecord\" style=\"background:none; border:none; color:#ef4444; font-weight:700; cursor:pointer; font-size:13px;\">Cancel</button>
                            <button type=\"button\" id=\"stopRecord\" style=\"background:#22c55e; border:none; color:white; padding:6px 12px; border-radius:8px; font-weight:700; cursor:pointer; font-size:13px;\">Send Voice</button>
                        </div>
                        
                        <div style=\"display:none !important;\">
                            {{ form_widget(form.attachment) }}
                        </div>

                        <div style=\"display:flex; gap:10px; align-items:center;\">
                            <button type=\"button\" class=\"btn transform-btn\" data-mode=\"formalize\" style=\"background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; font-weight:700; border-radius:14px; padding:12px 20px; font-size:14px; cursor:pointer;\" title=\"Formalize & Professionalize\">
                                <i class=\"fas fa-magic\"></i>
                                Formalize
                            </button>

                            <button type=\"button\" class=\"btn transform-btn\" data-mode=\"correct\" style=\"background:#fffcf0; color:#854d0e; border:1px solid #fef08a; font-weight:700; border-radius:14px; padding:12px 20px; font-size:14px; cursor:pointer;\" title=\"Correct Vocabulary & Grammar\">
                                <i class=\"fas fa-spell-check\"></i>
                                Correct
                            </button>

                            <button type=\"submit\" class=\"send-reply-btn\" id=\"standardSendBtn\">
                                <i class=\"fas fa-paper-plane\"></i>
                                Send Reply
                            </button>
                        </div>
                    </div>
                    
                    <div id=\"fileNameDisplay\" class=\"file-preview\"></div>
                    <div style=\"color: #ef4444; font-size: 12px; margin-top: 4px;\">{{ form_errors(form.attachment) }}</div>
                {{ form_end(form) }}
            </div>
        </div>

    </div>
</div>

<script>
    // Auto-scroll chat to bottom
    const chatContainer = document.getElementById('chatContainer');
    if (chatContainer) {
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

    function toggleMessageMenu(id) {
        const dropdown = document.getElementById('dropdown-' + id);
        const isOpen = dropdown.style.display === 'flex';
        
        // Close all other dropdowns
        document.querySelectorAll('[id^=\"dropdown-\"]').forEach(d => d.style.display = 'none');
        
        dropdown.style.display = isOpen ? 'none' : 'flex';
    }

    // Close dropdowns on outside click
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.message-actions-dropdown')) {
            document.querySelectorAll('[id^=\"dropdown-\"]').forEach(d => d.style.display = 'none');
        }
    });

    function editMessage(id, content) {
        document.getElementById('msg-content-' + id).style.visibility = 'hidden';
        document.getElementById('dropdown-' + id).style.display = 'none';
        const form = document.getElementById('edit-form-' + id);
        form.style.display = 'flex';
        form.querySelector('textarea').value = content;
    }

    function cancelEdit(id) {
        document.getElementById('msg-content-' + id).style.visibility = 'visible';
        document.getElementById('edit-form-' + id).style.display = 'none';
    }

    async function translateMsgToFR(messageId, btn) {
        // If already translated → restore original
        if (btn.dataset.translated === '1') {
            document.getElementById('msg-text-' + messageId).innerHTML = btn.dataset.original;
            btn.innerHTML = btn.dataset.btnOriginal;
            btn.dataset.translated = '0';
            btn.style.color = '';
            return;
        }

        const originalHtml = btn.innerHTML;
        btn.dataset.btnOriginal = originalHtml;
        btn.innerHTML = '<svg viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"width:11px;height:11px;animation:spin 1s linear infinite\"><path fill-rule=\"evenodd\" d=\"M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z\" clip-rule=\"evenodd\"/></svg> Translating…';
        btn.disabled = true;
        try {
            const res = await fetch(`/message/\${messageId}/translate`, {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const data = await res.json();
            if (data.translated) {
                const msgEl = document.getElementById('msg-text-' + messageId);
                btn.dataset.original = msgEl.innerHTML; // save original HTML
                msgEl.innerHTML = data.translated.replace(/\\n/g, '<br>');
                btn.innerHTML = '↩ Show original';
                btn.style.color = '#22c55e';
                btn.dataset.translated = '1';
                btn.disabled = false;
            } else {
                btn.innerHTML = originalHtml;
                btn.disabled = false;
                alert('Translation failed: ' + (data.error || 'Unknown error'));
            }
        } catch(e) {
            btn.innerHTML = originalHtml;
            btn.disabled = false;
        }
    }

    // Voice Recording Logic
    let mediaRecorder;
    let audioChunks = [];
    let startTime;
    let timerInterval;

    const micBtn = document.getElementById('micBtn');
    const recorderPanel = document.getElementById('recorderPanel');
    const standardSendBtn = document.getElementById('standardSendBtn');
    const stopRecordBtn = document.getElementById('stopRecord');
    const cancelRecordBtn = document.getElementById('cancelRecord');
    const timerDisplay = document.getElementById('recordTimer');

    micBtn.onclick = async () => {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            mediaRecorder = new MediaRecorder(stream);
            audioChunks = [];

            mediaRecorder.ondataavailable = event => audioChunks.push(event.data);
            mediaRecorder.onstop = async () => {
                const audioBlob = new Blob(audioChunks, { type: mediaRecorder.mimeType || 'audio/webm' });
                const formData = new FormData();
                formData.append('audio', audioBlob, 'voice_message.webm');

                try {
                    const response = await fetch(\"{{ path('app_user_message_voice', {id: ticket.id}) }}\", {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: formData
                    });
                    
                    const contentType = response.headers.get(\"content-type\");
                    if (contentType && contentType.indexOf(\"application/json\") !== -1) {
                        const result = await response.json();
                        console.log('Voice upload response:', result);
                        if (result.success) {
                            window.location.reload();
                        } else {
                            alert('Upload failed: ' + (result.error || 'Unknown error'));
                        }
                    } else {
                        const text = await response.text();
                        console.error('Server returned non-JSON response:', text);
                        alert('Server error: Could not process voice message. Please check the console for details.');
                    }
                } catch (err) {
                    console.error('Upload process failed:', err);
                    alert('Could not send voice message: ' + err.message);
                    
                    recorderPanel.style.display = 'none';
                    micBtn.style.display = 'flex';
                    standardSendBtn.style.display = 'flex';
                }
            };

            mediaRecorder.start();
            micBtn.style.display = 'none';
            standardSendBtn.style.display = 'none';
            recorderPanel.style.display = 'flex';
            
            startTime = Date.now();
            timerInterval = setInterval(() => {
                const seconds = Math.floor((Date.now() - startTime) / 1000);
                const m = Math.floor(seconds / 60).toString().padStart(2, '0');
                const s = (seconds % 60).toString().padStart(2, '0');
                timerDisplay.textContent = `\${m}:\${s}`;
            }, 1000);

        } catch (err) {
            console.error('Mic access denied:', err);
            alert('Mic access denied. Please enable microphone permissions.');
        }
    };

    stopRecordBtn.onclick = () => {
        mediaRecorder.stop();
        mediaRecorder.stream.getTracks().forEach(t => t.stop());
        clearInterval(timerInterval);
    };

    cancelRecordBtn.onclick = () => {
        mediaRecorder.onstop = null;
        mediaRecorder.stop();
        mediaRecorder.stream.getTracks().forEach(t => t.stop());
        clearInterval(timerInterval);
        recorderPanel.style.display = 'none';
        micBtn.style.display = 'flex';
        standardSendBtn.style.display = 'flex';
        timerDisplay.textContent = '00:00';
    };

    // Shared Audio Player logic
    let currentAudio = null;
    window.toggleAudio = function(btn, url) {
        if (currentAudio && currentAudio.src === url) {
            if (currentAudio.paused) {
                currentAudio.play();
                btn.innerHTML = '<i class=\"fas fa-pause\"></i>';
            } else {
                currentAudio.pause();
                btn.innerHTML = '<i class=\"fas fa-play\"></i>';
            }
        } else {
            if (currentAudio) currentAudio.pause();
            currentAudio = new Audio(url);
            currentAudio.play();
            btn.innerHTML = '<i class=\"fas fa-pause\"></i>';
            
            currentAudio.onended = () => {
                btn.innerHTML = '<i class=\"fas fa-play\"></i>';
            };
        }
    };

    // Handle file selection display
    const fileInputElement = document.getElementById('{{ form.attachment.vars.id }}');
    const fileNameDisplay = document.getElementById('fileNameDisplay');
    
    if (fileInputElement) {
        fileInputElement.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                fileNameDisplay.textContent = 'Selected: ' + this.files[0].name;
                fileNameDisplay.style.display = 'block';
            } else {
                fileNameDisplay.style.display = 'none';
            }
        });
    }

    // AI Suggestions Logic
    document.addEventListener('DOMContentLoaded', function () {
        const suggestionsBox = document.getElementById('suggestionsBox');
        const textarea = document.getElementById('{{ form.contenu.vars.id }}');
        const suggestionsUrl = '{{ path('app_ticket_message_suggestions', {id: ticket.id}) }}';

        async function loadSuggestions() {
            if (!suggestionsBox || !textarea) return;

            suggestionsBox.innerHTML = '<span style=\"color:#64748b;font-size:12px;font-weight:600;display:flex;align-items:center;gap:6px;\"><i class=\"fas fa-spinner fa-spin\"></i> Getting AI suggestions...</span>';

            try {
                const response = await fetch(suggestionsUrl);
                const data = await response.json();
                console.log('Detected Role:', data.detected_role);
                console.log('Groq Suggestions Response:', data);

                if (data.suggestions && data.suggestions.length > 0) {
                    suggestionsBox.innerHTML = '';
                    data.suggestions.forEach(suggestion => {
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = 'suggestion-chip';
                        btn.textContent = suggestion;
                        btn.style.cssText = 'background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; padding:6px 14px; border-radius:10px; font-size:12.5px; font-weight:700; cursor:pointer; transition:all 0.2s; white-space:nowrap; border: 1px solid #22c55e33;';
                        
                        btn.onmouseover = () => { btn.style.background = '#dcfce7'; btn.style.transform = 'translateY(-1px)'; };
                        btn.onmouseout = () => { btn.style.background = '#f0fdf4'; btn.style.transform = 'none'; };
                        
                        btn.onclick = () => {
                            textarea.value = suggestion;
                            textarea.focus();
                        };
                        suggestionsBox.appendChild(btn);
                    });
                } else {
                    suggestionsBox.innerHTML = '<span style=\"color:#94a3b8;font-size:12px;font-style:italic;\">No suggestions available</span>';
                }
            } catch (e) {
                console.error('Groq Error:', e);
                suggestionsBox.innerHTML = '';
            }
        }

        loadSuggestions();

        // AI Transformation logic (Formalize & Correct)
        document.querySelectorAll('.transform-btn').forEach(btn => {
            btn.addEventListener('click', async () => {
                const currentText = textarea.value.trim();
                if (!currentText) return;

                const mode = btn.dataset.mode;
                const originalContent = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';

                try {
                    const response = await fetch('{{ path('app_message_reformulate') }}', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ content: currentText, mode: mode })
                    });
                    const data = await response.json();
                    if (data.transformed) {
                        textarea.value = data.transformed;
                        textarea.style.height = 'auto';
                        textarea.style.height = textarea.scrollHeight + 'px';
                    }
                } catch (e) {
                    console.error('Transformation error:', e);
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalContent;
                }
            });
        });

        // --- AJAX Polling for new messages ---
        let lastMessageId = {{ messages|length > 0 ? messages|last.id : 0 }};
        const fetchUrlPattern = \"{{ path('app_ticket_fetch_new_messages', {id: ticket.id, lastId: 999999}) }}\";

        function pollMessages() {
            const url = fetchUrlPattern.replace('999999', lastMessageId);
            
            fetch(url, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                if (data.count > 0) {
                    console.log(`Chat Polling: Found \${data.count} new messages.`);
                    const chatContainer = document.getElementById('chatContainer');
                    const noMessagesPlaceholder = document.getElementById('noMessagesPlaceholder');
                    
                    if (noMessagesPlaceholder) {
                        noMessagesPlaceholder.remove();
                    }
                    
                    // Append new messages
                    chatContainer.insertAdjacentHTML('beforeend', data.html);
                    
                    // Update lastId
                    lastMessageId = data.lastId;
                    
                    // Scroll to bottom
                    chatContainer.scrollTop = chatContainer.scrollHeight;
                }
            })
            .catch(err => console.error('Chat Polling Error:', err));
        }

        // Check for new messages every 3 seconds
        setInterval(pollMessages, 3000);
    });
</script>
{% endblock %}
", "reclamation/my_ticket_details.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\reclamation\\my_ticket_details.html.twig");
    }
}
