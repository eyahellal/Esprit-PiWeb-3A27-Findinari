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
class __TwigTemplate_27cd56def8a4c7594ac4d1111b069f6e extends Template
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
    .tickets-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 40px 20px 80px;
        padding-top: 120px;
    }

    .breadcrumb {
        font-size: 0.85rem;
        color: #94a3b8;
        margin-bottom: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    .breadcrumb a { color: #94a3b8; text-decoration: none; transition: color 0.2s; }
    .breadcrumb a:hover { color: #22c55e; }
    
    .page-header {
        margin-bottom: 50px;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }
    
    .header-left h1 {
        font-size: 2.75rem;
        font-weight: 900;
        color: #0f172a;
        margin: 0 0 8px;
        letter-spacing: -0.04em;
    }
    
    .header-left p { color: #64748b; font-size: 1.1rem; }

    .tickets-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
        gap: 32px;
    }
    
    .ticket-card {
        background: #ffffff;
        border-radius: 32px;
        padding: 0;
        border: 1px solid rgba(226, 232, 240, 0.8);
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.04);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        position: relative;
    }

    .ticket-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; height: 6px;
        z-index: 10;
    }
    .priority-high-bar::before { background: linear-gradient(90deg, #ef4444, #f87171); }
    .priority-medium-bar::before { background: linear-gradient(90deg, #f59e0b, #fbbf24); }
    .priority-low-bar::before { background: linear-gradient(90deg, #3b82f6, #60a5fa); }
    
    .ticket-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.12);
        border-color: #22c55e;
    }
    
    .ticket-image-wrapper {
        width: 100%;
        height: 200px;
        position: relative;
        overflow: hidden;
        background: #f8fafc;
    }
    
    .ticket-thumbnail {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .ticket-card:hover .ticket-thumbnail { transform: scale(1.1); }

    .badge-overlay {
        position: absolute;
        top: 20px; right: 20px;
        z-index: 20;
        backdrop-filter: blur(8px);
        background: rgba(255, 255, 255, 0.9);
        padding: 6px 14px;
        border-radius: 12px;
        font-weight: 800;
        font-size: 0.7rem;
        text-transform: uppercase;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    .ticket-body {
        padding: 30px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .ticket-title {
        font-size: 1.4rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 12px;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .ticket-description {
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 24px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .ticket-footer {
        margin-top: auto;
        padding-top: 20px;
        border-top: 1px solid #f1f5f9;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-meta {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .meta-item {
        font-size: 0.8rem;
        font-weight: 600;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .meta-item i { color: #22c55e; font-size: 0.9rem; }

    .action-group {
        display: flex;
        gap: 10px;
    }

    .btn-circle {
        width: 44px;
        height: 44px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-view { background: #f0fdf4; color: #22c55e; }
    .btn-view:hover { background: #22c55e; color: white; transform: rotate(15deg); }

    .btn-edit { background: #f8fafc; color: #64748b; }
    .btn-edit:hover { background: #0f172a; color: white; transform: rotate(-15deg); }

    .btn-delete { background: #fff1f2; color: #ef4444; }
    .btn-delete:hover { background: #ef4444; color: white; transform: scale(1.1); }

    .btn-create-new {
        background: linear-gradient(135deg, #0f172a, #1e293b);
        color: white !important;
        padding: 18px 36px;
        border-radius: 20px;
        font-weight: 800;
        text-decoration: none;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .btn-create-new:hover { 
        background: #22c55e; 
        transform: scale(1.05) translateY(-4px); 
        box-shadow: 0 15px 30px rgba(34,197,94,0.3);
    }

    .empty-state {
        grid-column: 1 / -1;
        background: white;
        padding: 100px 40px;
        border-radius: 40px;
        text-align: center;
        border: 2px dashed #e2e8f0;
    }
    .empty-state i { font-size: 5rem; color: #e2e8f0; margin-bottom: 30px; display: block; }
</style>

<div class=\"tickets-container\">
    <div class=\"breadcrumb\">
        <a href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a> &gt; 
        <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support_center");
        yield "\">Support</a> &gt; 
        My Tickets
    </div>
    
    <div class=\"page-header\">
        <div class=\"header-left\">
            <h1 class=\"page-title\">Support Tickets</h1>
            <p>Track, manage, and resolve your inquiries with our expert support team.</p>
        </div>
        <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_createticket");
        yield "\" class=\"btn-create-new\">
            <i class=\"fas fa-plus\"></i> New Ticket
        </a>
    </div>
    
    ";
        // line 237
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 237, $this->source); })()))) {
            // line 238
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-folder-open\"></i>
            <h3>No tickets found</h3>
            <p>You haven't submitted any support requests yet. We're here to help whenever you need us.</p>
            <a href=\"";
            // line 242
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_createticket");
            yield "\" class=\"btn-create-new\">Submit your first ticket</a>
        </div>
    ";
        } else {
            // line 245
            yield "        <div class=\"tickets-grid\">
            ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 246, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 247
                yield "                <div class=\"ticket-card priority-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 247)), "html", null, true);
                yield "-bar\">
                    <div class=\"ticket-image-wrapper\">
                        ";
                // line 249
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "imageUrl", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 250
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/tickets/" . CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "imageUrl", [], "any", false, false, false, 250))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 250), "html", null, true);
                    yield "\" class=\"ticket-thumbnail\">
                        ";
                } else {
                    // line 252
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-image-icon.png"), "html", null, true);
                    yield "\" alt=\"No thumbnail\" class=\"ticket-thumbnail\" style=\"opacity:0.3; object-fit: contain; padding: 40px;\">
                        ";
                }
                // line 254
                yield "                        <div class=\"badge-overlay status-";
                yield (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 254)) == "open")) ? ("open") : ((((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 254)) == "closed")) ? ("closed") : ("in-progress"))));
                yield "\">
                            ";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 255), "html", null, true);
                yield "
                        </div>
                    </div>

                    <div class=\"ticket-body\">
                        <h3 class=\"ticket-title\">";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 260), "html", null, true);
                yield "</h3>
                        <p class=\"ticket-description\">";
                // line 261
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 261)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 261), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 261), "html", null, true)));
                yield "</p>
                        
                        <div class=\"ticket-footer\">
                            <div class=\"footer-meta\">
                                <div class=\"meta-item\">
                                    <i class=\"fas fa-history\"></i>
                                    ";
                // line 267
                yield $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "dateCreation", [], "any", false, false, false, 267));
                yield "
                                </div>
                                <div class=\"meta-item\">
                                    <i class=\"fas fa-tag\"></i>
                                    ";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "type", [], "any", false, false, false, 271), "html", null, true);
                yield "
                                </div>
                            </div>

                            <div class=\"action-group\">
                                <a href=\"";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_ticket_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 276)]), "html", null, true);
                yield "\" class=\"btn-circle btn-view\" title=\"View Details\">
                                    <i class=\"fas fa-external-link-alt\"></i>
                                </a>
                                
                                ";
                // line 280
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 280) != "Fermé")) {
                    // line 281
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_ticket_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 281)]), "html", null, true);
                    yield "\" class=\"btn-circle btn-edit\" title=\"Edit Ticket\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                ";
                }
                // line 285
                yield "                                
                                <form method=\"post\" action=\"";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_ticket_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 286)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Delete this ticket?')\" style=\"display:inline;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_ticket_" . CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 287))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn-circle btn-delete\" title=\"Delete Ticket\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            yield "        </div>
        
        <div class=\"pagination-container\" style=\"display:flex; justify-content:center; margin-top:60px;\">
            ";
            // line 300
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 300, $this->source); })()), "reclamation/pagination.html.twig");
            yield "
        </div>
    ";
        }
        // line 303
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
        return array (  477 => 303,  471 => 300,  466 => 297,  450 => 287,  446 => 286,  443 => 285,  435 => 281,  433 => 280,  426 => 276,  418 => 271,  411 => 267,  402 => 261,  398 => 260,  390 => 255,  385 => 254,  379 => 252,  371 => 250,  369 => 249,  363 => 247,  359 => 246,  356 => 245,  350 => 242,  344 => 238,  342 => 237,  334 => 232,  322 => 223,  318 => 222,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Tickets - FinDinari{% endblock %}

{% block body %}
<style>
    .tickets-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 40px 20px 80px;
        padding-top: 120px;
    }

    .breadcrumb {
        font-size: 0.85rem;
        color: #94a3b8;
        margin-bottom: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    .breadcrumb a { color: #94a3b8; text-decoration: none; transition: color 0.2s; }
    .breadcrumb a:hover { color: #22c55e; }
    
    .page-header {
        margin-bottom: 50px;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }
    
    .header-left h1 {
        font-size: 2.75rem;
        font-weight: 900;
        color: #0f172a;
        margin: 0 0 8px;
        letter-spacing: -0.04em;
    }
    
    .header-left p { color: #64748b; font-size: 1.1rem; }

    .tickets-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
        gap: 32px;
    }
    
    .ticket-card {
        background: #ffffff;
        border-radius: 32px;
        padding: 0;
        border: 1px solid rgba(226, 232, 240, 0.8);
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.04);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        position: relative;
    }

    .ticket-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; height: 6px;
        z-index: 10;
    }
    .priority-high-bar::before { background: linear-gradient(90deg, #ef4444, #f87171); }
    .priority-medium-bar::before { background: linear-gradient(90deg, #f59e0b, #fbbf24); }
    .priority-low-bar::before { background: linear-gradient(90deg, #3b82f6, #60a5fa); }
    
    .ticket-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.12);
        border-color: #22c55e;
    }
    
    .ticket-image-wrapper {
        width: 100%;
        height: 200px;
        position: relative;
        overflow: hidden;
        background: #f8fafc;
    }
    
    .ticket-thumbnail {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .ticket-card:hover .ticket-thumbnail { transform: scale(1.1); }

    .badge-overlay {
        position: absolute;
        top: 20px; right: 20px;
        z-index: 20;
        backdrop-filter: blur(8px);
        background: rgba(255, 255, 255, 0.9);
        padding: 6px 14px;
        border-radius: 12px;
        font-weight: 800;
        font-size: 0.7rem;
        text-transform: uppercase;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    .ticket-body {
        padding: 30px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .ticket-title {
        font-size: 1.4rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 12px;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .ticket-description {
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 24px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .ticket-footer {
        margin-top: auto;
        padding-top: 20px;
        border-top: 1px solid #f1f5f9;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-meta {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .meta-item {
        font-size: 0.8rem;
        font-weight: 600;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .meta-item i { color: #22c55e; font-size: 0.9rem; }

    .action-group {
        display: flex;
        gap: 10px;
    }

    .btn-circle {
        width: 44px;
        height: 44px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-view { background: #f0fdf4; color: #22c55e; }
    .btn-view:hover { background: #22c55e; color: white; transform: rotate(15deg); }

    .btn-edit { background: #f8fafc; color: #64748b; }
    .btn-edit:hover { background: #0f172a; color: white; transform: rotate(-15deg); }

    .btn-delete { background: #fff1f2; color: #ef4444; }
    .btn-delete:hover { background: #ef4444; color: white; transform: scale(1.1); }

    .btn-create-new {
        background: linear-gradient(135deg, #0f172a, #1e293b);
        color: white !important;
        padding: 18px 36px;
        border-radius: 20px;
        font-weight: 800;
        text-decoration: none;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .btn-create-new:hover { 
        background: #22c55e; 
        transform: scale(1.05) translateY(-4px); 
        box-shadow: 0 15px 30px rgba(34,197,94,0.3);
    }

    .empty-state {
        grid-column: 1 / -1;
        background: white;
        padding: 100px 40px;
        border-radius: 40px;
        text-align: center;
        border: 2px dashed #e2e8f0;
    }
    .empty-state i { font-size: 5rem; color: #e2e8f0; margin-bottom: 30px; display: block; }
</style>

<div class=\"tickets-container\">
    <div class=\"breadcrumb\">
        <a href=\"{{ path('app_home') }}\">Home</a> &gt; 
        <a href=\"{{ path('support_center') }}\">Support</a> &gt; 
        My Tickets
    </div>
    
    <div class=\"page-header\">
        <div class=\"header-left\">
            <h1 class=\"page-title\">Support Tickets</h1>
            <p>Track, manage, and resolve your inquiries with our expert support team.</p>
        </div>
        <a href=\"{{ path('app_user_createticket') }}\" class=\"btn-create-new\">
            <i class=\"fas fa-plus\"></i> New Ticket
        </a>
    </div>
    
    {% if tickets is empty %}
        <div class=\"empty-state\">
            <i class=\"fas fa-folder-open\"></i>
            <h3>No tickets found</h3>
            <p>You haven't submitted any support requests yet. We're here to help whenever you need us.</p>
            <a href=\"{{ path('app_user_createticket') }}\" class=\"btn-create-new\">Submit your first ticket</a>
        </div>
    {% else %}
        <div class=\"tickets-grid\">
            {% for ticket in tickets %}
                <div class=\"ticket-card priority-{{ ticket.priorite|lower }}-bar\">
                    <div class=\"ticket-image-wrapper\">
                        {% if ticket.imageUrl %}
                            <img src=\"{{ asset('uploads/tickets/' ~ ticket.imageUrl) }}\" alt=\"{{ ticket.titre }}\" class=\"ticket-thumbnail\">
                        {% else %}
                            <img src=\"{{ asset('images/placeholder-image-icon.png') }}\" alt=\"No thumbnail\" class=\"ticket-thumbnail\" style=\"opacity:0.3; object-fit: contain; padding: 40px;\">
                        {% endif %}
                        <div class=\"badge-overlay status-{{ ticket.statut|lower == 'open' ? 'open' : (ticket.statut|lower == 'closed' ? 'closed' : 'in-progress') }}\">
                            {{ ticket.statut }}
                        </div>
                    </div>

                    <div class=\"ticket-body\">
                        <h3 class=\"ticket-title\">{{ ticket.titre }}</h3>
                        <p class=\"ticket-description\">{{ ticket.description|length > 120 ? ticket.description|slice(0, 120) ~ '...' : ticket.description }}</p>
                        
                        <div class=\"ticket-footer\">
                            <div class=\"footer-meta\">
                                <div class=\"meta-item\">
                                    <i class=\"fas fa-history\"></i>
                                    {{ ticket.dateCreation|ago }}
                                </div>
                                <div class=\"meta-item\">
                                    <i class=\"fas fa-tag\"></i>
                                    {{ ticket.type }}
                                </div>
                            </div>

                            <div class=\"action-group\">
                                <a href=\"{{ path('app_user_ticket_details', {id: ticket.id}) }}\" class=\"btn-circle btn-view\" title=\"View Details\">
                                    <i class=\"fas fa-external-link-alt\"></i>
                                </a>
                                
                                {% if ticket.statut != 'Fermé' %}
                                    <a href=\"{{ path('app_user_ticket_edit', {id: ticket.id}) }}\" class=\"btn-circle btn-edit\" title=\"Edit Ticket\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                {% endif %}
                                
                                <form method=\"post\" action=\"{{ path('app_user_ticket_delete', {id: ticket.id}) }}\" onsubmit=\"return confirm('Delete this ticket?')\" style=\"display:inline;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_ticket_' ~ ticket.id) }}\">
                                    <button type=\"submit\" class=\"btn-circle btn-delete\" title=\"Delete Ticket\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        
        <div class=\"pagination-container\" style=\"display:flex; justify-content:center; margin-top:60px;\">
            {{ knp_pagination_render(tickets, 'reclamation/pagination.html.twig') }}
        </div>
    {% endif %}
</div>
{% endblock %}
", "reclamation/my_tickets.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\reclamation\\my_tickets.html.twig");
    }
}
