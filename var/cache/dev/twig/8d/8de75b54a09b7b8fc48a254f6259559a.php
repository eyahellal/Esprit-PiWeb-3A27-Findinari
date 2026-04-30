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

/* reclamation/my_tickets.html.twig */
class __TwigTemplate_e46794674fae21f96a2b7ac408e7c255 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/my_tickets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/my_tickets.html.twig"));

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

        yield "My Tickets - FinDinari";
        
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
    /* Scope styles to the tickets-container to avoid global conflicts */
    .tickets-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        background-color: transparent;
        padding-top: 100px; /* Avoid content being hidden behind a fixed navbar */
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
    
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    
    .page-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }
    
    .tickets-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .ticket-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }
    
    .ticket-main-content {
        display: flex;
        gap: 24px;
        align-items: flex-start;
        flex: 1;
    }
    
    .ticket-info {
        flex: 1;
    }
    
    .ticket-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 12px;
    }
    
    .ticket-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }
    
    .status-badge {
        padding: 5px 14px;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
    }
    .status-open { background-color: #dbeafe; color: #2563eb; }
    .status-closed { background-color: #f3f4f6; color: #4b5563; }
    .status-in-progress { background-color: #fef3c7; color: #d97706; }

    .priority-badge {
        font-size: 0.8rem;
        padding: 5px 12px;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
    }
    .priority-high { color: #ef4444; background: #fef2f2; }
    .priority-medium { color: #f59e0b; background: #fffbeb; }
    .priority-low { color: #3b82f6; background: #eff6ff; }
    
    .ticket-meta {
        display: flex;
        gap: 20px;
        color: #6b7280;
        font-size: 0.9rem;
        margin-bottom: 12px;
    }
    
    .ticket-desc {
        color: #4b5563;
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0;
    }

    /* Actions Buttons */
    .ticket-actions {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 180px;
        flex-shrink: 0;
    }

    .btn-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.85rem;
        text-decoration: none;
        transition: all 0.2s;
        cursor: pointer;
        border: 1.5px solid transparent;
        height: 42px;
    }

    .btn-action-primary {
        background: #22c55e;
        color: white !important;
    }
    .btn-action-primary:hover { background: #16a34a; }

    .btn-action-outline {
        border-color: #e5e7eb;
        color: #6b7280 !important;
    }
    .btn-action-outline:hover { border-color: #22c55e; color: #22c55e !important; }

    .btn-action-danger {
        color: #ef4444 !important;
        background: #fef2f2;
    }
    .btn-action-danger:hover { background: #ef4444; color: white !important; }

    .btn-open-ticket {
        background-color: #22c55e;
        color: white !important;
        padding: 10px 25px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
    }
</style>

";
        // line 176
        yield "
<div class=\"tickets-container\">
    <div class=\"breadcrumb\">
        <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a> &gt; 
        <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support_center");
        yield "\">Support</a> &gt; 
        My Tickets
    </div>
    
    <div class=\"page-header\">
        <h1 class=\"page-title\">My Support Tickets</h1>
        <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_createticket");
        yield "\" class=\"btn-open-ticket\"><i class=\"fas fa-plus\"></i> New Ticket</a>
    </div>
    
    ";
        // line 189
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 189, $this->source); })()))) {
            // line 190
            yield "        <div class=\"empty-state\">
            <i class=\"far fa-folder-open\"></i>
            <h3>No tickets found</h3>
            <p>You haven't submitted any support requests yet.</p>
            <a href=\"";
            // line 194
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_createticket");
            yield "\" class=\"btn-open-ticket\">Create your first ticket</a>
        </div>
    ";
        } else {
            // line 197
            yield "        <div class=\"tickets-grid\">
            ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 198, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 199
                yield "                <div class=\"ticket-card\">
                    <div class=\"ticket-main-content\">
                        ";
                // line 201
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "imageUrl", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 202
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/tickets/" . CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "imageUrl", [], "any", false, false, false, 202))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"ticket-image-container\" title=\"View attached image\">
                                <img src=\"";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/tickets/" . CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "imageUrl", [], "any", false, false, false, 203))), "html", null, true);
                    yield "\" alt=\"Ticket Attachment\" class=\"ticket-image\" onerror=\"this.onerror=null; this.src='";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-image-icon.png"), "html", null, true);
                    yield "';\">
                            </a>
                        ";
                }
                // line 206
                yield "                        
                        <div class=\"ticket-info\">
                            <div class=\"ticket-header\">
                                <h3 class=\"ticket-title\">";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 209), "html", null, true);
                yield "</h3>
                                <span class=\"status-badge ";
                // line 210
                if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 210)) == "open")) {
                    yield "status-open";
                } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 210)) == "closed")) {
                    yield "status-closed";
                } else {
                    yield "status-in-progress";
                }
                yield "\">
                                    ";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 211), "html", null, true);
                yield "
                                </span>
                                <div class=\"priority-badge priority-";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 213)), "html", null, true);
                yield "\">
                                    ";
                // line 214
                if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 214)) == "high")) {
                    // line 215
                    yield "                                        <i class=\"fas fa-arrow-up\"></i>
                                    ";
                } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                 // line 216
$context["ticket"], "priorite", [], "any", false, false, false, 216)) == "medium")) {
                    // line 217
                    yield "                                        <i class=\"fas fa-minus\"></i>
                                    ";
                } else {
                    // line 219
                    yield "                                        <i class=\"fas fa-arrow-down\"></i>
                                    ";
                }
                // line 221
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 221), "html", null, true);
                yield "
                                </div>
                            </div>
                            
                            <div class=\"ticket-meta\">
                                <span><i class=\"far fa-clock\"></i> ";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "dateCreation", [], "any", false, false, false, 226), "M d, Y \\a\\t H:i"), "html", null, true);
                yield "</span>
                                <span><i class=\"far fa-folder\"></i> ";
                // line 227
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "type", [], "any", false, false, false, 227), "html", null, true);
                yield "</span>
                                <span><i class=\"fas fa-fingerprint\"></i> #";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 228), "html", null, true);
                yield "</span>
                            </div>
                            
                            <p class=\"ticket-desc\">";
                // line 231
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 231)) > 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 231), 0, 150) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 231), "html", null, true)));
                yield "</p>
                        </div>
                    </div>
                    
                    <div class=\"ticket-actions\">
                        <a href=\"";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_ticket_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 236)]), "html", null, true);
                yield "\" class=\"btn-action btn-action-primary\">
                            <i class=\"far fa-eye\"></i> Details
                        </a>
                        
                        ";
                // line 240
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 240) != "Fermé")) {
                    // line 241
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_ticket_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 241)]), "html", null, true);
                    yield "\" class=\"btn-action btn-action-outline\">
                                <i class=\"fas fa-edit\"></i> Edit
                            </a>
                        ";
                }
                // line 245
                yield "                        
                        <form method=\"post\" action=\"";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_ticket_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 246)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Delete this ticket?')\" style=\"width: 100%;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_ticket_" . CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 247))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn-action btn-action-danger\" style=\"width: 100%;\">
                                <i class=\"fas fa-trash-alt\"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            yield "        </div>
    ";
        }
        // line 257
        yield "</div>
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
        return "reclamation/my_tickets.html.twig";
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
        return array (  451 => 257,  447 => 255,  433 => 247,  429 => 246,  426 => 245,  418 => 241,  416 => 240,  409 => 236,  401 => 231,  395 => 228,  391 => 227,  387 => 226,  378 => 221,  374 => 219,  370 => 217,  368 => 216,  365 => 215,  363 => 214,  359 => 213,  354 => 211,  344 => 210,  340 => 209,  335 => 206,  327 => 203,  322 => 202,  320 => 201,  316 => 199,  312 => 198,  309 => 197,  303 => 194,  297 => 190,  295 => 189,  289 => 186,  280 => 180,  276 => 179,  271 => 176,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Tickets - FinDinari{% endblock %}

{% block body %}
<style>
    /* Scope styles to the tickets-container to avoid global conflicts */
    .tickets-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        background-color: transparent;
        padding-top: 100px; /* Avoid content being hidden behind a fixed navbar */
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
    
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    
    .page-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }
    
    .tickets-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .ticket-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }
    
    .ticket-main-content {
        display: flex;
        gap: 24px;
        align-items: flex-start;
        flex: 1;
    }
    
    .ticket-info {
        flex: 1;
    }
    
    .ticket-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 12px;
    }
    
    .ticket-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }
    
    .status-badge {
        padding: 5px 14px;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
    }
    .status-open { background-color: #dbeafe; color: #2563eb; }
    .status-closed { background-color: #f3f4f6; color: #4b5563; }
    .status-in-progress { background-color: #fef3c7; color: #d97706; }

    .priority-badge {
        font-size: 0.8rem;
        padding: 5px 12px;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
    }
    .priority-high { color: #ef4444; background: #fef2f2; }
    .priority-medium { color: #f59e0b; background: #fffbeb; }
    .priority-low { color: #3b82f6; background: #eff6ff; }
    
    .ticket-meta {
        display: flex;
        gap: 20px;
        color: #6b7280;
        font-size: 0.9rem;
        margin-bottom: 12px;
    }
    
    .ticket-desc {
        color: #4b5563;
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0;
    }

    /* Actions Buttons */
    .ticket-actions {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 180px;
        flex-shrink: 0;
    }

    .btn-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.85rem;
        text-decoration: none;
        transition: all 0.2s;
        cursor: pointer;
        border: 1.5px solid transparent;
        height: 42px;
    }

    .btn-action-primary {
        background: #22c55e;
        color: white !important;
    }
    .btn-action-primary:hover { background: #16a34a; }

    .btn-action-outline {
        border-color: #e5e7eb;
        color: #6b7280 !important;
    }
    .btn-action-outline:hover { border-color: #22c55e; color: #22c55e !important; }

    .btn-action-danger {
        color: #ef4444 !important;
        background: #fef2f2;
    }
    .btn-action-danger:hover { background: #ef4444; color: white !important; }

    .btn-open-ticket {
        background-color: #22c55e;
        color: white !important;
        padding: 10px 25px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
    }
</style>

{# Custom Support Header removed to show default navbar #}

<div class=\"tickets-container\">
    <div class=\"breadcrumb\">
        <a href=\"{{ path('app_home') }}\">Home</a> &gt; 
        <a href=\"{{ path('support_center') }}\">Support</a> &gt; 
        My Tickets
    </div>
    
    <div class=\"page-header\">
        <h1 class=\"page-title\">My Support Tickets</h1>
        <a href=\"{{ path('app_user_createticket') }}\" class=\"btn-open-ticket\"><i class=\"fas fa-plus\"></i> New Ticket</a>
    </div>
    
    {% if tickets is empty %}
        <div class=\"empty-state\">
            <i class=\"far fa-folder-open\"></i>
            <h3>No tickets found</h3>
            <p>You haven't submitted any support requests yet.</p>
            <a href=\"{{ path('app_user_createticket') }}\" class=\"btn-open-ticket\">Create your first ticket</a>
        </div>
    {% else %}
        <div class=\"tickets-grid\">
            {% for ticket in tickets %}
                <div class=\"ticket-card\">
                    <div class=\"ticket-main-content\">
                        {% if ticket.imageUrl %}
                            <a href=\"{{ asset('uploads/tickets/' ~ ticket.imageUrl) }}\" target=\"_blank\" class=\"ticket-image-container\" title=\"View attached image\">
                                <img src=\"{{ asset('uploads/tickets/' ~ ticket.imageUrl) }}\" alt=\"Ticket Attachment\" class=\"ticket-image\" onerror=\"this.onerror=null; this.src='{{ asset('images/placeholder-image-icon.png') }}';\">
                            </a>
                        {% endif %}
                        
                        <div class=\"ticket-info\">
                            <div class=\"ticket-header\">
                                <h3 class=\"ticket-title\">{{ ticket.titre }}</h3>
                                <span class=\"status-badge {% if ticket.statut|lower == 'open' %}status-open{% elseif ticket.statut|lower == 'closed' %}status-closed{% else %}status-in-progress{% endif %}\">
                                    {{ ticket.statut }}
                                </span>
                                <div class=\"priority-badge priority-{{ ticket.priorite|lower }}\">
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
                            
                            <div class=\"ticket-meta\">
                                <span><i class=\"far fa-clock\"></i> {{ ticket.dateCreation|date('M d, Y \\\\a\\\\t H:i') }}</span>
                                <span><i class=\"far fa-folder\"></i> {{ ticket.type }}</span>
                                <span><i class=\"fas fa-fingerprint\"></i> #{{ ticket.id }}</span>
                            </div>
                            
                            <p class=\"ticket-desc\">{{ ticket.description|length > 150 ? ticket.description|slice(0, 150) ~ '...' : ticket.description }}</p>
                        </div>
                    </div>
                    
                    <div class=\"ticket-actions\">
                        <a href=\"{{ path('app_user_ticket_details', {id: ticket.id}) }}\" class=\"btn-action btn-action-primary\">
                            <i class=\"far fa-eye\"></i> Details
                        </a>
                        
                        {% if ticket.statut != 'Fermé' %}
                            <a href=\"{{ path('app_user_ticket_edit', {id: ticket.id}) }}\" class=\"btn-action btn-action-outline\">
                                <i class=\"fas fa-edit\"></i> Edit
                            </a>
                        {% endif %}
                        
                        <form method=\"post\" action=\"{{ path('app_user_ticket_delete', {id: ticket.id}) }}\" onsubmit=\"return confirm('Delete this ticket?')\" style=\"width: 100%;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_ticket_' ~ ticket.id) }}\">
                            <button type=\"submit\" class=\"btn-action btn-action-danger\" style=\"width: 100%;\">
                                <i class=\"fas fa-trash-alt\"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}
", "reclamation/my_tickets.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\reclamation\\my_tickets.html.twig");
    }
}
