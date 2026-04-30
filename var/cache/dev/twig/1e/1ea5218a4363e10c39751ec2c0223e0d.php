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
class __TwigTemplate_4e469a697530922f56098d4c7943e72b extends Template
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

    .chat-container { background: #ffffff; height: 600px; }
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

    /* Summary Modal Styles */
    .summary-modal-overlay {
        position: fixed; inset: 0; background: rgba(15, 23, 42, 0.6);
        backdrop-filter: blur(8px); display: none; align-items: center;
        justify-content: center; z-index: 9999; padding: 20px;
        animation: fadeIn 0.3s ease;
    }
    .summary-modal {
        background: white; width: 100%; max-width: 600px;
        border-radius: 24px; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
        overflow: hidden; animation: slideIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .summary-modal-header {
        padding: 24px 32px; background: #f8fafc; border-bottom: 1px solid #e5e7eb;
        display: flex; justify-content: space-between; align-items: center;
    }
    .summary-modal-content { padding: 32px; display: flex; flex-direction: column; gap: 24px; }
    .summary-item { display: flex; gap: 16px; }
    .summary-icon {
        width: 40px; height: 40px; border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .summary-text h5 { margin: 0 0 4px 0; font-size: 13px; text-transform: uppercase; color: #64748b; letter-spacing: 0.05em; }
    .summary-text p { margin: 0; font-size: 15px; color: #1e293b; line-height: 1.6; font-weight: 500; }
    
    .sla-timer { font-size: 1.2rem; font-weight: 800; color: #22c55e; }

    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes slideIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    
    .animate-in {
        animation: fadeIn 0.4s ease-out, slideIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
</style>

";
        // line 334
        yield "
<div class=\"details-container\">
    <div class=\"breadcrumb\">
        <a href=\"";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a> &gt; 
        <a href=\"";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support_center");
        yield "\">Support</a> &gt; 
        <a href=\"";
        // line 339
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_tickets");
        yield "\">My Tickets</a> &gt; 
        Details
    </div>

    <!-- FLASH MESSAGES -->
    ";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 344, $this->source); })()), "flashes", ["success"], "method", false, false, false, 344));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 345
            yield "        <div style=\"background: #dcfce7; color: #166534; padding: 14px 18px; border-radius: 10px; margin-bottom: 20px; font-weight: 600; border: 1px solid #b2f5d1;\">
            ";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
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
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 361, $this->source); })()), "titre", [], "any", false, false, false, 361), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"info-group\">
                    <span class=\"info-label\">Status</span>
                    <div class=\"status-badge ";
        // line 366
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 366, $this->source); })()), "statut", [], "any", false, false, false, 366)) == "open")) {
            yield "status-open";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 366, $this->source); })()), "statut", [], "any", false, false, false, 366)) == "closed")) {
            yield "status-closed";
        } else {
            yield "status-in-progress";
        }
        yield "\">
                        ";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 367, $this->source); })()), "statut", [], "any", false, false, false, 367), "html", null, true);
        yield "
                    </div>
                </div>

                <div class=\"info-group\">
                    <span class=\"info-label\">Priority</span>
                    <div class=\"info-value priority-";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 373, $this->source); })()), "priorite", [], "any", false, false, false, 373)), "html", null, true);
        yield "\">
                        ";
        // line 374
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 374, $this->source); })()), "priorite", [], "any", false, false, false, 374)) == "high")) {
            // line 375
            yield "                            <i class=\"fas fa-arrow-up\"></i>
                        ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 376
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 376, $this->source); })()), "priorite", [], "any", false, false, false, 376)) == "medium")) {
            // line 377
            yield "                            <i class=\"fas fa-minus\"></i>
                        ";
        } else {
            // line 379
            yield "                            <i class=\"fas fa-arrow-down\"></i>
                        ";
        }
        // line 381
        yield "                        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 381, $this->source); })()), "priorite", [], "any", false, false, false, 381), "html", null, true);
        yield "
                    </div>
                </div>
                
                <div class=\"info-group\">
                    <span class=\"info-label\">Category</span>
                    <div class=\"info-value\">";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 387, $this->source); })()), "type", [], "any", false, false, false, 387), "html", null, true);
        yield "</div>
                </div>

                <div class=\"info-group\">
                    <span class=\"info-label\">Created At</span>
                    <div class=\"info-value\" style=\"color: #6b7280;\">";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 392, $this->source); })()), "dateCreation", [], "any", false, false, false, 392), "d M Y, H:i"), "html", null, true);
        yield "</div>
                </div>

                <div class=\"info-group\">
                    <span class=\"info-label\">Time Remaining (SLA)</span>
                    ";
        // line 397
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 397, $this->source); })()), "deadline", [], "any", false, false, false, 397)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 398
            yield "                        ";
            $context["isClosed"] = CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 398, $this->source); })()), "statut", [], "any", false, false, false, 398)), ["closed", "fermé"]);
            // line 399
            yield "                        ";
            if ((($tmp = (isset($context["isClosed"]) || array_key_exists("isClosed", $context) ? $context["isClosed"] : (function () { throw new RuntimeError('Variable "isClosed" does not exist.', 399, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 400
                yield "                            <div class=\"info-value\" style=\"color: #22c55e;\">Resolved</div>
                        ";
            } else {
                // line 402
                yield "                            <div class=\"sla-timer\" data-deadline=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 402, $this->source); })()), "deadline", [], "any", false, false, false, 402), "c"), "html", null, true);
                yield "\">
                                Loading...
                            </div>
                        ";
            }
            // line 406
            yield "                    ";
        } else {
            // line 407
            yield "                        <div class=\"info-value\" style=\"color: #94a3b8; font-style: italic;\">No deadline set</div>
                    ";
        }
        // line 409
        yield "                </div>

                <button type=\"button\" id=\"summarizeBtn\" class=\"btn\" style=\"width:100%; margin-top:10px; margin-bottom:20px; background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; border-radius:12px; padding:12px; font-weight:700; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:8px;\">
                    <i class=\"fas fa-magic\"></i>
                    AI Smart Summary
                </button>

                <!-- Summary Modal -->
                <div id=\"summaryModalOverlay\" class=\"summary-modal-overlay\">
                    <div class=\"summary-modal\">
                        <div class=\"summary-modal-header\">
                            <div style=\"display:flex; align-items:center; gap:12px;\">
                                <div style=\"background:#dcfce7; color:#15803d; padding:8px; border-radius:10px;\">
                                    <i class=\"fas fa-robot\"></i>
                                </div>
                                <h3 style=\"margin:0; font-size:18px; font-weight:800; color:#0f172a;\">AI Analysis</h3>
                            </div>
                            <button type=\"button\" onclick=\"closeSummaryModal()\" style=\"background:none; border:none; cursor:pointer; color:#94a3b8;\"><i class=\"fas fa-times\"></i></button>
                        </div>
                        <div class=\"summary-modal-content\">
                            <div class=\"summary-item\">
                                <div class=\"summary-icon\" style=\"background:#fee2e2; color:#b91c1c;\"><i class=\"fas fa-exclamation-circle\"></i></div>
                                <div class=\"summary-text\"><h5>Issue</h5><p id=\"summaryProblem\"></p></div>
                            </div>
                            <div class=\"summary-item\">
                                <div class=\"summary-icon\" style=\"background:#e0f2fe; color:#0369a1;\"><i class=\"fas fa-sync-alt\"></i></div>
                                <div class=\"summary-text\"><h5>Progress</h5><p id=\"summaryProcess\"></p></div>
                            </div>
                            <div class=\"summary-item\">
                                <div class=\"summary-icon\" style=\"background:#dcfce7; color:#15803d;\"><i class=\"fas fa-check-circle\"></i></div>
                                <div class=\"summary-text\"><h5>Solution</h5><p id=\"summarySolution\"></p></div>
                            </div>
                            <div id=\"summaryNoteWrapper\" style=\"display:none; padding:16px; background:#fff7ed; border-radius:14px; border:1px solid #ffedd5; color:#9a3412; font-style:italic; font-size:14px;\">
                                <i class=\"fas fa-lightbulb\" style=\"margin-right:8px;\"></i>
                                <span id=\"summaryNote\"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"info-group\" style=\"margin-top: 25px; padding-top: 25px; border-top: 1px dashed var(--border-color);\">
                    <span class=\"info-label\">Description</span>
                    <p style=\"color: var(--dark-text); font-size: 14px; line-height: 1.6; margin-top: 8px;\">";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 451, $this->source); })()), "description", [], "any", false, false, false, 451), "html", null, true);
        yield "</p>
                </div>

                ";
        // line 454
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 454, $this->source); })()), "imageUrl", [], "any", false, false, false, 454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 455
            yield "                <div class=\"info-group\">
                   <span class=\"info-label\">Attached Image</span>
                   <div style=\"margin-top: 10px; border-radius: 12px; overflow: hidden; border: 1px solid var(--border-color);\">
                       <img src=\"";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/tickets/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 458, $this->source); })()), "imageUrl", [], "any", false, false, false, 458))), "html", null, true);
            yield "\" alt=\"Ticket Attachment\" style=\"width: 100%; display: block;\" onerror=\"this.onerror=null; this.src='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-image-icon.png"), "html", null, true);
            yield "';\">
                   </div>
                </div>
                ";
        }
        // line 462
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
        // line 473
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 473, $this->source); })()));
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
            // line 474
            yield "                    ";
            yield from $this->load("reclamation/_message_item_user.html.twig", 474)->unwrap()->yield(CoreExtension::merge($context, ["message" => $context["message"], "ticket" => (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 474, $this->source); })())]));
            // line 475
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
            // line 476
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
        // line 482
        yield "            </div>


            <div class=\"reply-card\">
                <div class=\"reply-title\">Add a reply</div>
                
                ";
        // line 488
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 488, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_message_new", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 489
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 489, $this->source); })()), "id", [], "any", false, false, false, 489)]), "attr" => ["novalidate" => "novalidate", "id" => "replyForm"], "multipart" => true]);
        // line 495
        yield "
                    <div id=\"suggestionsBox\" style=\"display:flex; gap:8px; flex-wrap:wrap; margin-bottom:12px; min-height:36px; align-items:center;\"></div>
                    <div class=\"modern-textarea-wrapper\">
                        ";
        // line 498
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 498, $this->source); })()), "contenu", [], "any", false, false, false, 498), 'widget', ["attr" => ["class" => "modern-textarea", "placeholder" => "Type your message here..."]]);
        // line 503
        yield "
                        <div style=\"color: #ef4444; font-size: 12px; margin-top: 4px;\">";
        // line 504
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 504, $this->source); })()), "contenu", [], "any", false, false, false, 504), 'errors');
        yield "</div>
                    </div>

                    <div class=\"reply-actions\">
                        <div style=\"display: flex; align-items: center; gap: 8px;\">
                            <label class=\"attach-btn\" for=\"";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), "attachment", [], "any", false, false, false, 509), "vars", [], "any", false, false, false, 509), "id", [], "any", false, false, false, 509), "html", null, true);
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
        // line 528
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "attachment", [], "any", false, false, false, 528), 'widget');
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
        // line 550
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 550, $this->source); })()), "attachment", [], "any", false, false, false, 550), 'errors');
        yield "</div>
                ";
        // line 551
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 551, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

    </div>
</div>

<script>
(function() {
    // Global functions exposed to window
    window.toggleMessageDropdown = function(id) {
        const dropdown = document.getElementById('dropdown-' + id);
        if (!dropdown) return;
        const isOpen = dropdown.style.display === 'flex';
        document.querySelectorAll('[id^=\"dropdown-\"]').forEach(d => d.style.display = 'none');
        dropdown.style.display = isOpen ? 'none' : 'flex';
    };

    window.editMessage = function(id, content) {
        document.getElementById('msg-content-' + id).style.visibility = 'hidden';
        document.getElementById('dropdown-' + id).style.display = 'none';
        const form = document.getElementById('edit-form-' + id);
        form.style.display = 'flex';
        form.querySelector('textarea').value = content;
    };

    window.cancelEdit = function(id) {
        document.getElementById('msg-content-' + id).style.visibility = 'visible';
        document.getElementById('edit-form-' + id).style.display = 'none';
    };

    window.translateMsgToFR = async function(messageId, btn) {
        if (btn.dataset.translated === '1') {
            document.getElementById('msg-text-' + messageId).innerHTML = btn.dataset.original;
            btn.innerHTML = btn.dataset.btnOriginal;
            btn.dataset.translated = '0';
            btn.style.color = '';
            return;
        }

        const originalHtml = btn.innerHTML;
        btn.dataset.btnOriginal = originalHtml;
        btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Translating…';
        btn.disabled = true;
        try {
            const res = await fetch(`/message/\${messageId}/translate`, {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const data = await res.json();
            if (data.translated) {
                const msgEl = document.getElementById('msg-text-' + messageId);
                btn.dataset.original = msgEl.innerHTML;
                msgEl.innerHTML = data.translated.replace(/\\n/g, '<br>');
                btn.innerHTML = '↩ Show original';
                btn.style.color = '#22c55e';
                btn.dataset.translated = '1';
            } else {
                alert('Translation failed: ' + (data.error || 'Unknown error'));
                btn.innerHTML = originalHtml;
            }
        } catch(e) {
            btn.innerHTML = originalHtml;
        } finally {
            btn.disabled = false;
        }
    };

    window.toggleAudio = function(btn, url) {
        if (window.currentAudio && window.currentAudio.src === url) {
            if (window.currentAudio.paused) {
                window.currentAudio.play();
                btn.innerHTML = '<i class=\"fas fa-pause\"></i>';
            } else {
                window.currentAudio.pause();
                btn.innerHTML = '<i class=\"fas fa-play\"></i>';
            }
        } else {
            if (window.currentAudio) window.currentAudio.pause();
            window.currentAudio = new Audio(url);
            window.currentAudio.play();
            btn.innerHTML = '<i class=\"fas fa-pause\"></i>';
            window.currentAudio.onended = () => { btn.innerHTML = '<i class=\"fas fa-play\"></i>'; };
        }
    };

    function initTicketDetails() {
        console.log(\"Initializing Ticket Details (Admin-aligned)...\");
        const chatContainer = document.getElementById('chatContainer');
        if (chatContainer) chatContainer.scrollTop = chatContainer.scrollHeight;

        const suggestionsBox = document.getElementById('suggestionsBox');
        const textarea = document.getElementById('";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 643, $this->source); })()), "contenu", [], "any", false, false, false, 643), "vars", [], "any", false, false, false, 643), "id", [], "any", false, false, false, 643), "html", null, true);
        yield "');
        const fileInput = document.getElementById('";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 644, $this->source); })()), "attachment", [], "any", false, false, false, 644), "vars", [], "any", false, false, false, 644), "id", [], "any", false, false, false, 644), "html", null, true);
        yield "');
        const fileNameDisplay = document.getElementById('fileNameDisplay');
        
        if (fileInput && fileNameDisplay) {
            fileInput.onchange = () => {
                if (fileInput.files && fileInput.files[0]) {
                    const name = fileInput.files[0].name;
                    fileNameDisplay.style.display = 'flex';
                    fileNameDisplay.innerHTML = `<i class=\"fas fa-file-alt\" style=\"margin-right:8px;\"></i> Attached: <strong style=\"margin-left:4px;\">\${name}</strong> <i class=\"fas fa-times\" style=\"margin-left:auto; cursor:pointer; color:#ef4444;\" onclick=\"window.clearAttachment()\"></i>`;
                } else {
                    fileNameDisplay.style.display = 'none';
                }
            };
        }

        window.clearAttachment = function() {
            if (fileInput) fileInput.value = '';
            if (fileNameDisplay) fileNameDisplay.style.display = 'none';
        };

        // Load Suggestions once
        async function loadSuggestions() {
            if (!suggestionsBox) return;
            
            // Keep old suggestions but dim them to show we are loading
            const oldSuggestions = suggestionsBox.innerHTML;
            const loadingHtml = '<span style=\"font-size:12px;color:#64748b;margin-left:5px;\"><i class=\"fas fa-spinner fa-spin\"></i> Refreshing AI ideas...</span>';
            
            if (!oldSuggestions.trim()) {
                suggestionsBox.innerHTML = loadingHtml;
            }

            try {
                const response = await fetch('";
        // line 677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_message_suggestions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 677, $this->source); })()), "id", [], "any", false, false, false, 677)]), "html", null, true);
        yield "');
                if (!response.ok) throw new Error('API Error');
                const data = await response.json();
                
                if (data.suggestions && data.suggestions.length > 0) {
                    suggestionsBox.innerHTML = '';
                    data.suggestions.forEach(suggestion => {
                        const chip = document.createElement('button');
                        chip.type = 'button';
                        chip.className = 'suggestion-chip';
                        chip.textContent = suggestion;
                        chip.style.cssText = 'background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; padding:6px 14px; border-radius:10px; font-size:12.5px; font-weight:700; cursor:pointer; margin-right:8px; transition:all 0.2s; border-bottom: 2px solid #22c55e33;';
                        chip.onmouseover = () => { chip.style.background = '#dcfce7'; chip.style.transform = 'translateY(-1px)'; };
                        chip.onmouseout = () => { chip.style.background = '#f0fdf4'; chip.style.transform = 'none'; };
                        chip.onclick = () => { textarea.value = suggestion; textarea.focus(); };
                        suggestionsBox.appendChild(chip);
                    });
                } else if (!oldSuggestions.trim()) {
                    suggestionsBox.innerHTML = '<span style=\"font-size:11px;color:#94a3b8;font-style:italic;\">No suggestions right now. Try typing something first!</span>';
                } else {
                    // If no new suggestions found, just keep the old ones or show a retry
                }
            } catch (e) { 
                console.error('Suggestion Error:', e);
                if (!oldSuggestions.trim()) {
                    suggestionsBox.innerHTML = '<button onclick=\"loadSuggestions()\" style=\"background:none; border:none; color:#16a34a; font-size:12px; cursor:pointer; font-weight:700;\"><i class=\"fas fa-redo\"></i> Retry suggestions</button>';
                }
            }
        }

        if (textarea) loadSuggestions();

        // AI Transformations
        document.querySelectorAll('.transform-btn').forEach(btn => {
            btn.onclick = async () => {
                if (!textarea) return;
                const currentText = textarea.value.trim();
                if (!currentText) return;

                const originalContent = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';

                try {
                    const response = await fetch('";
        // line 721
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_reformulate");
        yield "', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ content: currentText, mode: btn.dataset.mode })
                    });
                    const data = await response.json();
                    if (data.transformed) textarea.value = data.transformed;
                } catch (e) {
                    console.error('AI Transform Error:', e);
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalContent;
                }
            };
        });

        // Polling
        var lastMessageId = ";
        // line 738
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 738, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 738, $this->source); })())), "id", [], "any", false, false, false, 738), "html", null, true)) : (0));
        yield ";
        function pollMessages() {
            const url = \"";
        // line 740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_fetch_new_messages", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 740, $this->source); })()), "id", [], "any", false, false, false, 740), "lastId" => "999999"]), "html", null, true);
        yield "\".replace('999999', lastMessageId);
            fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
            .then(res => res.json())
            .then(data => {
                if (data.count > 0) {
                    const chatContainer = document.getElementById('chatContainer');
                    const placeholder = document.getElementById('noMessagesPlaceholder');
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(data.html, 'text/html');
                    const newMessages = doc.querySelectorAll('[id^=\"msg-wrapper-\"]');
                    
                    let appended = false;
                    newMessages.forEach(msg => {
                        if (!document.getElementById(msg.id)) {
                            if (placeholder) placeholder.remove();
                            chatContainer.appendChild(msg);
                            appended = true;
                        }
                    });

                    if (appended) {
                        lastMessageId = data.lastId;
                        chatContainer.scrollTop = chatContainer.scrollHeight;
                    } else if (data.lastId > lastMessageId) {
                        lastMessageId = data.lastId;
                    }
                }
            }).catch(e => {});
        }

        if (window.chatPollingInterval) clearInterval(window.chatPollingInterval);
        window.chatPollingInterval = setInterval(pollMessages, 3000);

        // --- SLA Timer Logic ---
        const timers = document.querySelectorAll('.sla-timer');
        const serverTimeStr = '";
        // line 775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "c"), "html", null, true);
        yield "';
        const serverNow = new Date(serverTimeStr);
        const clientNow = new Date();
        const timeOffset = serverNow.getTime() - clientNow.getTime();

        function formatDuration(totalSeconds) {
            const isNegative = totalSeconds < 0;
            const absSeconds = Math.abs(totalSeconds);
            const days = Math.floor(absSeconds / 86400);
            const hours = Math.floor((absSeconds % 86400) / 3600);
            const minutes = Math.floor((absSeconds % 3600) / 60);
            const seconds = absSeconds % 60;
            let text = isNegative ? '- ' : '';
            if (days > 0) text += days + 'd ';
            text += String(hours).padStart(2, '0') + 'h ' + String(minutes).padStart(2, '0') + 'm ' + String(seconds).padStart(2, '0') + 's';
            return text;
        }

        function updateTimer(element) {
            const deadline = new Date(element.dataset.deadline);
            const now = new Date(Date.now() + timeOffset);
            const diff = deadline.getTime() - now.getTime();
            const totalSeconds = Math.floor(diff / 1000);
            element.textContent = formatDuration(totalSeconds);
            if (totalSeconds <= 0) {
                element.style.color = '#ef4444';
                element.textContent = \"BREACHED\";
            } else if (totalSeconds <= 3600) element.style.color = '#ef4444';
            else if (totalSeconds <= 24 * 3600) element.style.color = '#f59e0b';
            else element.style.color = '#22c55e';
        }

        if (timers.length > 0) {
            timers.forEach(t => {
                updateTimer(t);
                setInterval(() => updateTimer(t), 1000);
            });
        }

        // AI Summary logic
        const summarizeBtn = document.getElementById('summarizeBtn');
        const summaryModal = document.getElementById('summaryModalOverlay');
        
        window.closeSummaryModal = function() {
            if (summaryModal) summaryModal.style.display = 'none';
        };

        if (summarizeBtn) {
            summarizeBtn.addEventListener('click', async () => {
                const originalContent = summarizeBtn.innerHTML;
                summarizeBtn.disabled = true;
                summarizeBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Analyzing...';

                try {
                    const response = await fetch('";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_summary", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 829, $this->source); })()), "id", [], "any", false, false, false, 829)]), "html", null, true);
        yield "');
                    const data = await response.json();
                    if (data.problem) {
                        document.getElementById('summaryProblem').textContent = data.problem;
                        document.getElementById('summaryProcess').textContent = data.process;
                        document.getElementById('summarySolution').textContent = data.solution;
                        const noteWrapper = document.getElementById('summaryNoteWrapper');
                        if (data.adaptive_note) {
                            document.getElementById('summaryNote').textContent = data.adaptive_note;
                            noteWrapper.style.display = 'block';
                        } else noteWrapper.style.display = 'none';
                        if (summaryModal) summaryModal.style.display = 'flex';
                    }
                } catch (e) {
                    alert('Connection error while fetching summary.');
                } finally {
                    summarizeBtn.disabled = false;
                    summarizeBtn.innerHTML = originalContent;
                }
            });
        }

        if (summaryModal) {
            summaryModal.addEventListener('click', (e) => {
                if (e.target === summaryModal) closeSummaryModal();
            });
        }

        // Form Submit
        const replyForm = document.getElementById('replyForm');
        if (replyForm) {
            replyForm.onsubmit = () => {
                clearInterval(window.chatPollingInterval);
            };
        }

        // Voice
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

        if (micBtn) {
            micBtn.onclick = async () => {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    mediaRecorder = new MediaRecorder(stream);
                    audioChunks = [];
                    mediaRecorder.ondataavailable = e => audioChunks.push(e.data);
                    mediaRecorder.onstop = async () => {
                        const audioBlob = new Blob(audioChunks, { type: 'audio/webm' });
                        const formData = new FormData();
                        formData.append('audio', audioBlob, 'voice.webm');
                        try {
                            const res = await fetch(\"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_message_voice", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 889, $this->source); })()), "id", [], "any", false, false, false, 889)]), "html", null, true);
        yield "\", {
                                method: 'POST',
                                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                                body: formData
                            });
                            const result = await res.json();
                            if (result.success) window.location.reload();
                            else alert('Failed: ' + result.error);
                        } catch (err) { alert('Upload error'); }
                    };
                    mediaRecorder.start();
                    micBtn.style.display = 'none';
                    standardSendBtn.style.display = 'none';
                    recorderPanel.style.display = 'flex';
                    startTime = Date.now();
                    timerInterval = setInterval(() => {
                        const sec = Math.floor((Date.now() - startTime) / 1000);
                        timerDisplay.textContent = `\${Math.floor(sec/60).toString().padStart(2,'0')}:\${(sec%60).toString().padStart(2,'0')}`;
                    }, 1000);
                } catch (e) { alert('Mic denied'); }
            };
            stopRecordBtn.onclick = () => {
                if (mediaRecorder) {
                    mediaRecorder.stop();
                    mediaRecorder.stream.getTracks().forEach(t => t.stop());
                }
                clearInterval(timerInterval);
            };
            cancelRecordBtn.onclick = () => {
                if (mediaRecorder) {
                    mediaRecorder.onstop = null;
                    mediaRecorder.stop();
                    mediaRecorder.stream.getTracks().forEach(t => t.stop());
                }
                clearInterval(timerInterval);
                recorderPanel.style.display = 'none';
                micBtn.style.display = 'flex';
                standardSendBtn.style.display = 'flex';
            };
        }
    }

    document.addEventListener('turbo:load', initTicketDetails);
    if (document.readyState !== 'loading') initTicketDetails();

    document.addEventListener('click', e => {
        if (!e.target.closest('.message-actions-dropdown')) {
            document.querySelectorAll('[id^=\"dropdown-\"]').forEach(d => d.style.display = 'none');
        }
    });
})();
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
        return array (  1148 => 889,  1085 => 829,  1028 => 775,  990 => 740,  985 => 738,  965 => 721,  918 => 677,  882 => 644,  878 => 643,  783 => 551,  779 => 550,  754 => 528,  732 => 509,  724 => 504,  721 => 503,  719 => 498,  714 => 495,  712 => 489,  711 => 488,  703 => 482,  692 => 476,  679 => 475,  676 => 474,  658 => 473,  645 => 462,  636 => 458,  631 => 455,  629 => 454,  623 => 451,  579 => 409,  575 => 407,  572 => 406,  564 => 402,  560 => 400,  557 => 399,  554 => 398,  552 => 397,  544 => 392,  536 => 387,  526 => 381,  522 => 379,  518 => 377,  516 => 376,  513 => 375,  511 => 374,  507 => 373,  498 => 367,  488 => 366,  480 => 361,  466 => 349,  457 => 346,  454 => 345,  450 => 344,  442 => 339,  438 => 338,  434 => 337,  429 => 334,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    .chat-container { background: #ffffff; height: 600px; }
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

    /* Summary Modal Styles */
    .summary-modal-overlay {
        position: fixed; inset: 0; background: rgba(15, 23, 42, 0.6);
        backdrop-filter: blur(8px); display: none; align-items: center;
        justify-content: center; z-index: 9999; padding: 20px;
        animation: fadeIn 0.3s ease;
    }
    .summary-modal {
        background: white; width: 100%; max-width: 600px;
        border-radius: 24px; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
        overflow: hidden; animation: slideIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .summary-modal-header {
        padding: 24px 32px; background: #f8fafc; border-bottom: 1px solid #e5e7eb;
        display: flex; justify-content: space-between; align-items: center;
    }
    .summary-modal-content { padding: 32px; display: flex; flex-direction: column; gap: 24px; }
    .summary-item { display: flex; gap: 16px; }
    .summary-icon {
        width: 40px; height: 40px; border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .summary-text h5 { margin: 0 0 4px 0; font-size: 13px; text-transform: uppercase; color: #64748b; letter-spacing: 0.05em; }
    .summary-text p { margin: 0; font-size: 15px; color: #1e293b; line-height: 1.6; font-weight: 500; }
    
    .sla-timer { font-size: 1.2rem; font-weight: 800; color: #22c55e; }

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
                    <div class=\"info-value\" style=\"color: #6b7280;\">{{ ticket.dateCreation|date('d M Y, H:i') }}</div>
                </div>

                <div class=\"info-group\">
                    <span class=\"info-label\">Time Remaining (SLA)</span>
                    {% if ticket.deadline %}
                        {% set isClosed = ticket.statut|lower in ['closed', 'fermé'] %}
                        {% if isClosed %}
                            <div class=\"info-value\" style=\"color: #22c55e;\">Resolved</div>
                        {% else %}
                            <div class=\"sla-timer\" data-deadline=\"{{ ticket.deadline|date('c') }}\">
                                Loading...
                            </div>
                        {% endif %}
                    {% else %}
                        <div class=\"info-value\" style=\"color: #94a3b8; font-style: italic;\">No deadline set</div>
                    {% endif %}
                </div>

                <button type=\"button\" id=\"summarizeBtn\" class=\"btn\" style=\"width:100%; margin-top:10px; margin-bottom:20px; background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; border-radius:12px; padding:12px; font-weight:700; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:8px;\">
                    <i class=\"fas fa-magic\"></i>
                    AI Smart Summary
                </button>

                <!-- Summary Modal -->
                <div id=\"summaryModalOverlay\" class=\"summary-modal-overlay\">
                    <div class=\"summary-modal\">
                        <div class=\"summary-modal-header\">
                            <div style=\"display:flex; align-items:center; gap:12px;\">
                                <div style=\"background:#dcfce7; color:#15803d; padding:8px; border-radius:10px;\">
                                    <i class=\"fas fa-robot\"></i>
                                </div>
                                <h3 style=\"margin:0; font-size:18px; font-weight:800; color:#0f172a;\">AI Analysis</h3>
                            </div>
                            <button type=\"button\" onclick=\"closeSummaryModal()\" style=\"background:none; border:none; cursor:pointer; color:#94a3b8;\"><i class=\"fas fa-times\"></i></button>
                        </div>
                        <div class=\"summary-modal-content\">
                            <div class=\"summary-item\">
                                <div class=\"summary-icon\" style=\"background:#fee2e2; color:#b91c1c;\"><i class=\"fas fa-exclamation-circle\"></i></div>
                                <div class=\"summary-text\"><h5>Issue</h5><p id=\"summaryProblem\"></p></div>
                            </div>
                            <div class=\"summary-item\">
                                <div class=\"summary-icon\" style=\"background:#e0f2fe; color:#0369a1;\"><i class=\"fas fa-sync-alt\"></i></div>
                                <div class=\"summary-text\"><h5>Progress</h5><p id=\"summaryProcess\"></p></div>
                            </div>
                            <div class=\"summary-item\">
                                <div class=\"summary-icon\" style=\"background:#dcfce7; color:#15803d;\"><i class=\"fas fa-check-circle\"></i></div>
                                <div class=\"summary-text\"><h5>Solution</h5><p id=\"summarySolution\"></p></div>
                            </div>
                            <div id=\"summaryNoteWrapper\" style=\"display:none; padding:16px; background:#fff7ed; border-radius:14px; border:1px solid #ffedd5; color:#9a3412; font-style:italic; font-size:14px;\">
                                <i class=\"fas fa-lightbulb\" style=\"margin-right:8px;\"></i>
                                <span id=\"summaryNote\"></span>
                            </div>
                        </div>
                    </div>
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
(function() {
    // Global functions exposed to window
    window.toggleMessageDropdown = function(id) {
        const dropdown = document.getElementById('dropdown-' + id);
        if (!dropdown) return;
        const isOpen = dropdown.style.display === 'flex';
        document.querySelectorAll('[id^=\"dropdown-\"]').forEach(d => d.style.display = 'none');
        dropdown.style.display = isOpen ? 'none' : 'flex';
    };

    window.editMessage = function(id, content) {
        document.getElementById('msg-content-' + id).style.visibility = 'hidden';
        document.getElementById('dropdown-' + id).style.display = 'none';
        const form = document.getElementById('edit-form-' + id);
        form.style.display = 'flex';
        form.querySelector('textarea').value = content;
    };

    window.cancelEdit = function(id) {
        document.getElementById('msg-content-' + id).style.visibility = 'visible';
        document.getElementById('edit-form-' + id).style.display = 'none';
    };

    window.translateMsgToFR = async function(messageId, btn) {
        if (btn.dataset.translated === '1') {
            document.getElementById('msg-text-' + messageId).innerHTML = btn.dataset.original;
            btn.innerHTML = btn.dataset.btnOriginal;
            btn.dataset.translated = '0';
            btn.style.color = '';
            return;
        }

        const originalHtml = btn.innerHTML;
        btn.dataset.btnOriginal = originalHtml;
        btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Translating…';
        btn.disabled = true;
        try {
            const res = await fetch(`/message/\${messageId}/translate`, {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const data = await res.json();
            if (data.translated) {
                const msgEl = document.getElementById('msg-text-' + messageId);
                btn.dataset.original = msgEl.innerHTML;
                msgEl.innerHTML = data.translated.replace(/\\n/g, '<br>');
                btn.innerHTML = '↩ Show original';
                btn.style.color = '#22c55e';
                btn.dataset.translated = '1';
            } else {
                alert('Translation failed: ' + (data.error || 'Unknown error'));
                btn.innerHTML = originalHtml;
            }
        } catch(e) {
            btn.innerHTML = originalHtml;
        } finally {
            btn.disabled = false;
        }
    };

    window.toggleAudio = function(btn, url) {
        if (window.currentAudio && window.currentAudio.src === url) {
            if (window.currentAudio.paused) {
                window.currentAudio.play();
                btn.innerHTML = '<i class=\"fas fa-pause\"></i>';
            } else {
                window.currentAudio.pause();
                btn.innerHTML = '<i class=\"fas fa-play\"></i>';
            }
        } else {
            if (window.currentAudio) window.currentAudio.pause();
            window.currentAudio = new Audio(url);
            window.currentAudio.play();
            btn.innerHTML = '<i class=\"fas fa-pause\"></i>';
            window.currentAudio.onended = () => { btn.innerHTML = '<i class=\"fas fa-play\"></i>'; };
        }
    };

    function initTicketDetails() {
        console.log(\"Initializing Ticket Details (Admin-aligned)...\");
        const chatContainer = document.getElementById('chatContainer');
        if (chatContainer) chatContainer.scrollTop = chatContainer.scrollHeight;

        const suggestionsBox = document.getElementById('suggestionsBox');
        const textarea = document.getElementById('{{ form.contenu.vars.id }}');
        const fileInput = document.getElementById('{{ form.attachment.vars.id }}');
        const fileNameDisplay = document.getElementById('fileNameDisplay');
        
        if (fileInput && fileNameDisplay) {
            fileInput.onchange = () => {
                if (fileInput.files && fileInput.files[0]) {
                    const name = fileInput.files[0].name;
                    fileNameDisplay.style.display = 'flex';
                    fileNameDisplay.innerHTML = `<i class=\"fas fa-file-alt\" style=\"margin-right:8px;\"></i> Attached: <strong style=\"margin-left:4px;\">\${name}</strong> <i class=\"fas fa-times\" style=\"margin-left:auto; cursor:pointer; color:#ef4444;\" onclick=\"window.clearAttachment()\"></i>`;
                } else {
                    fileNameDisplay.style.display = 'none';
                }
            };
        }

        window.clearAttachment = function() {
            if (fileInput) fileInput.value = '';
            if (fileNameDisplay) fileNameDisplay.style.display = 'none';
        };

        // Load Suggestions once
        async function loadSuggestions() {
            if (!suggestionsBox) return;
            
            // Keep old suggestions but dim them to show we are loading
            const oldSuggestions = suggestionsBox.innerHTML;
            const loadingHtml = '<span style=\"font-size:12px;color:#64748b;margin-left:5px;\"><i class=\"fas fa-spinner fa-spin\"></i> Refreshing AI ideas...</span>';
            
            if (!oldSuggestions.trim()) {
                suggestionsBox.innerHTML = loadingHtml;
            }

            try {
                const response = await fetch('{{ path('app_ticket_message_suggestions', {id: ticket.id}) }}');
                if (!response.ok) throw new Error('API Error');
                const data = await response.json();
                
                if (data.suggestions && data.suggestions.length > 0) {
                    suggestionsBox.innerHTML = '';
                    data.suggestions.forEach(suggestion => {
                        const chip = document.createElement('button');
                        chip.type = 'button';
                        chip.className = 'suggestion-chip';
                        chip.textContent = suggestion;
                        chip.style.cssText = 'background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; padding:6px 14px; border-radius:10px; font-size:12.5px; font-weight:700; cursor:pointer; margin-right:8px; transition:all 0.2s; border-bottom: 2px solid #22c55e33;';
                        chip.onmouseover = () => { chip.style.background = '#dcfce7'; chip.style.transform = 'translateY(-1px)'; };
                        chip.onmouseout = () => { chip.style.background = '#f0fdf4'; chip.style.transform = 'none'; };
                        chip.onclick = () => { textarea.value = suggestion; textarea.focus(); };
                        suggestionsBox.appendChild(chip);
                    });
                } else if (!oldSuggestions.trim()) {
                    suggestionsBox.innerHTML = '<span style=\"font-size:11px;color:#94a3b8;font-style:italic;\">No suggestions right now. Try typing something first!</span>';
                } else {
                    // If no new suggestions found, just keep the old ones or show a retry
                }
            } catch (e) { 
                console.error('Suggestion Error:', e);
                if (!oldSuggestions.trim()) {
                    suggestionsBox.innerHTML = '<button onclick=\"loadSuggestions()\" style=\"background:none; border:none; color:#16a34a; font-size:12px; cursor:pointer; font-weight:700;\"><i class=\"fas fa-redo\"></i> Retry suggestions</button>';
                }
            }
        }

        if (textarea) loadSuggestions();

        // AI Transformations
        document.querySelectorAll('.transform-btn').forEach(btn => {
            btn.onclick = async () => {
                if (!textarea) return;
                const currentText = textarea.value.trim();
                if (!currentText) return;

                const originalContent = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';

                try {
                    const response = await fetch('{{ path('app_message_reformulate') }}', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ content: currentText, mode: btn.dataset.mode })
                    });
                    const data = await response.json();
                    if (data.transformed) textarea.value = data.transformed;
                } catch (e) {
                    console.error('AI Transform Error:', e);
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalContent;
                }
            };
        });

        // Polling
        var lastMessageId = {{ messages|length > 0 ? messages|last.id : 0 }};
        function pollMessages() {
            const url = \"{{ path('app_ticket_fetch_new_messages', {id: ticket.id, lastId: '999999'}) }}\".replace('999999', lastMessageId);
            fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
            .then(res => res.json())
            .then(data => {
                if (data.count > 0) {
                    const chatContainer = document.getElementById('chatContainer');
                    const placeholder = document.getElementById('noMessagesPlaceholder');
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(data.html, 'text/html');
                    const newMessages = doc.querySelectorAll('[id^=\"msg-wrapper-\"]');
                    
                    let appended = false;
                    newMessages.forEach(msg => {
                        if (!document.getElementById(msg.id)) {
                            if (placeholder) placeholder.remove();
                            chatContainer.appendChild(msg);
                            appended = true;
                        }
                    });

                    if (appended) {
                        lastMessageId = data.lastId;
                        chatContainer.scrollTop = chatContainer.scrollHeight;
                    } else if (data.lastId > lastMessageId) {
                        lastMessageId = data.lastId;
                    }
                }
            }).catch(e => {});
        }

        if (window.chatPollingInterval) clearInterval(window.chatPollingInterval);
        window.chatPollingInterval = setInterval(pollMessages, 3000);

        // --- SLA Timer Logic ---
        const timers = document.querySelectorAll('.sla-timer');
        const serverTimeStr = '{{ \"now\"|date(\"c\") }}';
        const serverNow = new Date(serverTimeStr);
        const clientNow = new Date();
        const timeOffset = serverNow.getTime() - clientNow.getTime();

        function formatDuration(totalSeconds) {
            const isNegative = totalSeconds < 0;
            const absSeconds = Math.abs(totalSeconds);
            const days = Math.floor(absSeconds / 86400);
            const hours = Math.floor((absSeconds % 86400) / 3600);
            const minutes = Math.floor((absSeconds % 3600) / 60);
            const seconds = absSeconds % 60;
            let text = isNegative ? '- ' : '';
            if (days > 0) text += days + 'd ';
            text += String(hours).padStart(2, '0') + 'h ' + String(minutes).padStart(2, '0') + 'm ' + String(seconds).padStart(2, '0') + 's';
            return text;
        }

        function updateTimer(element) {
            const deadline = new Date(element.dataset.deadline);
            const now = new Date(Date.now() + timeOffset);
            const diff = deadline.getTime() - now.getTime();
            const totalSeconds = Math.floor(diff / 1000);
            element.textContent = formatDuration(totalSeconds);
            if (totalSeconds <= 0) {
                element.style.color = '#ef4444';
                element.textContent = \"BREACHED\";
            } else if (totalSeconds <= 3600) element.style.color = '#ef4444';
            else if (totalSeconds <= 24 * 3600) element.style.color = '#f59e0b';
            else element.style.color = '#22c55e';
        }

        if (timers.length > 0) {
            timers.forEach(t => {
                updateTimer(t);
                setInterval(() => updateTimer(t), 1000);
            });
        }

        // AI Summary logic
        const summarizeBtn = document.getElementById('summarizeBtn');
        const summaryModal = document.getElementById('summaryModalOverlay');
        
        window.closeSummaryModal = function() {
            if (summaryModal) summaryModal.style.display = 'none';
        };

        if (summarizeBtn) {
            summarizeBtn.addEventListener('click', async () => {
                const originalContent = summarizeBtn.innerHTML;
                summarizeBtn.disabled = true;
                summarizeBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Analyzing...';

                try {
                    const response = await fetch('{{ path('app_ticket_summary', {id: ticket.id}) }}');
                    const data = await response.json();
                    if (data.problem) {
                        document.getElementById('summaryProblem').textContent = data.problem;
                        document.getElementById('summaryProcess').textContent = data.process;
                        document.getElementById('summarySolution').textContent = data.solution;
                        const noteWrapper = document.getElementById('summaryNoteWrapper');
                        if (data.adaptive_note) {
                            document.getElementById('summaryNote').textContent = data.adaptive_note;
                            noteWrapper.style.display = 'block';
                        } else noteWrapper.style.display = 'none';
                        if (summaryModal) summaryModal.style.display = 'flex';
                    }
                } catch (e) {
                    alert('Connection error while fetching summary.');
                } finally {
                    summarizeBtn.disabled = false;
                    summarizeBtn.innerHTML = originalContent;
                }
            });
        }

        if (summaryModal) {
            summaryModal.addEventListener('click', (e) => {
                if (e.target === summaryModal) closeSummaryModal();
            });
        }

        // Form Submit
        const replyForm = document.getElementById('replyForm');
        if (replyForm) {
            replyForm.onsubmit = () => {
                clearInterval(window.chatPollingInterval);
            };
        }

        // Voice
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

        if (micBtn) {
            micBtn.onclick = async () => {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    mediaRecorder = new MediaRecorder(stream);
                    audioChunks = [];
                    mediaRecorder.ondataavailable = e => audioChunks.push(e.data);
                    mediaRecorder.onstop = async () => {
                        const audioBlob = new Blob(audioChunks, { type: 'audio/webm' });
                        const formData = new FormData();
                        formData.append('audio', audioBlob, 'voice.webm');
                        try {
                            const res = await fetch(\"{{ path('app_user_message_voice', {id: ticket.id}) }}\", {
                                method: 'POST',
                                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                                body: formData
                            });
                            const result = await res.json();
                            if (result.success) window.location.reload();
                            else alert('Failed: ' + result.error);
                        } catch (err) { alert('Upload error'); }
                    };
                    mediaRecorder.start();
                    micBtn.style.display = 'none';
                    standardSendBtn.style.display = 'none';
                    recorderPanel.style.display = 'flex';
                    startTime = Date.now();
                    timerInterval = setInterval(() => {
                        const sec = Math.floor((Date.now() - startTime) / 1000);
                        timerDisplay.textContent = `\${Math.floor(sec/60).toString().padStart(2,'0')}:\${(sec%60).toString().padStart(2,'0')}`;
                    }, 1000);
                } catch (e) { alert('Mic denied'); }
            };
            stopRecordBtn.onclick = () => {
                if (mediaRecorder) {
                    mediaRecorder.stop();
                    mediaRecorder.stream.getTracks().forEach(t => t.stop());
                }
                clearInterval(timerInterval);
            };
            cancelRecordBtn.onclick = () => {
                if (mediaRecorder) {
                    mediaRecorder.onstop = null;
                    mediaRecorder.stop();
                    mediaRecorder.stream.getTracks().forEach(t => t.stop());
                }
                clearInterval(timerInterval);
                recorderPanel.style.display = 'none';
                micBtn.style.display = 'flex';
                standardSendBtn.style.display = 'flex';
            };
        }
    }

    document.addEventListener('turbo:load', initTicketDetails);
    if (document.readyState !== 'loading') initTicketDetails();

    document.addEventListener('click', e => {
        if (!e.target.closest('.message-actions-dropdown')) {
            document.querySelectorAll('[id^=\"dropdown-\"]').forEach(d => d.style.display = 'none');
        }
    });
})();
</script>
{% endblock %}
", "reclamation/my_ticket_details.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\reclamation\\my_ticket_details.html.twig");
    }
}
