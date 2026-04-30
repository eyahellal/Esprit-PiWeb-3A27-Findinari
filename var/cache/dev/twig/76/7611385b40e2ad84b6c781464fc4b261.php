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

/* reclamation/support_center.html.twig */
class __TwigTemplate_81bd735a9671c9fb4af544ab78e8a8e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/support_center.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/support_center.html.twig"));

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

        yield "Support Center - FinDinari";
        
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
    .support-hero {
        background-color: #eafaf1;
        padding: 100px 0;
        text-align: center;
        padding-top: 150px;
    }

    .support-hero h1 {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        margin-bottom: 20px;
    }

    .support-hero p {
        font-size: 1.1rem;
        color: #6b7280;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .support-content {
        margin-top: -60px;
        padding-bottom: 80px;
    }

    .support-cards {
        display: flex;
        justify-content: center;
        gap: 40px;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .support-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 40px;
        flex: 1;
        text-align: left;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        display: flex;
        flex-direction: column;
    }

    .card-icon {
        width: 60px;
        height: 60px;
        background-color: #eafaf1;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
    }

    .card-icon i {
        font-size: 1.8rem;
        color: #22c55e;
    }

    .support-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 15px;
    }

    .support-card p {
        color: #6b7280;
        font-size: 1rem;
        margin-bottom: 30px;
        flex-grow: 1;
    }

    .btn-card-action {
        border: 1.5px solid #22c55e;
        color: #22c55e;
        text-decoration: none;
        padding: 12px 0;
        border-radius: 10px;
        font-weight: 600;
        text-align: center;
        transition: all 0.2s;
        display: block;
    }

    .btn-card-action:hover {
        background-color: #22c55e;
        color: white;
    }

    @media (max-width: 768px) {
        .support-cards { flex-direction: column; gap: 20px; }
        .support-hero h1 { font-size: 2.2rem; }
    }
</style>

";
        // line 109
        yield "
<section class=\"support-hero\">
    <div class=\"container\">
        <h1>How can we help you?</h1>
        <p>Submit a support ticket or manage your existing requests. Our team is here to help 24/7.</p>
    </div>
</section>

<div class=\"support-content\">
    <div class=\"container\">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "flashes", ["success"], "method", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 120
            yield "            <div style=\"background-color: #d1fae5; color: #065f46; padding: 15px; border-radius: 12px; margin-bottom: 40px; text-align: center; border: 1px solid #34d399;\">
                ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "
        <div class=\"support-cards\">
            <!-- Submit a Ticket Card -->
            <div class=\"support-card\">
                <div class=\"card-icon\">
                    <i class=\"far fa-file-alt\"></i>
                </div>
                <h3>Submit a Ticket</h3>
                <p>Can't find what you're looking for? Submit a support request and our team will get back to you.</p>
                <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_createticket");
        yield "\" class=\"btn-card-action\">Create Ticket</a>
            </div>

            <!-- My Tickets Card -->
            <div class=\"support-card\">
                <div class=\"card-icon\">
                    <i class=\"far fa-comment-alt\"></i>
                </div>
                <h3>My Tickets</h3>
                <p>View and manage your existing support tickets. Track the status of your requests in real-time.</p>
                <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_tickets");
        yield "\" class=\"btn-card-action\">View Tickets</a>
            </div>
        </div>
    </div>
</div>
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
        return "reclamation/support_center.html.twig";
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
        return array (  256 => 143,  243 => 133,  232 => 124,  223 => 121,  220 => 120,  216 => 119,  204 => 109,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Support Center - FinDinari{% endblock %}

{% block body %}
<style>
    .support-hero {
        background-color: #eafaf1;
        padding: 100px 0;
        text-align: center;
        padding-top: 150px;
    }

    .support-hero h1 {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        margin-bottom: 20px;
    }

    .support-hero p {
        font-size: 1.1rem;
        color: #6b7280;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .support-content {
        margin-top: -60px;
        padding-bottom: 80px;
    }

    .support-cards {
        display: flex;
        justify-content: center;
        gap: 40px;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .support-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 40px;
        flex: 1;
        text-align: left;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        display: flex;
        flex-direction: column;
    }

    .card-icon {
        width: 60px;
        height: 60px;
        background-color: #eafaf1;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
    }

    .card-icon i {
        font-size: 1.8rem;
        color: #22c55e;
    }

    .support-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 15px;
    }

    .support-card p {
        color: #6b7280;
        font-size: 1rem;
        margin-bottom: 30px;
        flex-grow: 1;
    }

    .btn-card-action {
        border: 1.5px solid #22c55e;
        color: #22c55e;
        text-decoration: none;
        padding: 12px 0;
        border-radius: 10px;
        font-weight: 600;
        text-align: center;
        transition: all 0.2s;
        display: block;
    }

    .btn-card-action:hover {
        background-color: #22c55e;
        color: white;
    }

    @media (max-width: 768px) {
        .support-cards { flex-direction: column; gap: 20px; }
        .support-hero h1 { font-size: 2.2rem; }
    }
</style>

{# Custom Support Header removed to show default navbar #}

<section class=\"support-hero\">
    <div class=\"container\">
        <h1>How can we help you?</h1>
        <p>Submit a support ticket or manage your existing requests. Our team is here to help 24/7.</p>
    </div>
</section>

<div class=\"support-content\">
    <div class=\"container\">
        {% for message in app.flashes('success') %}
            <div style=\"background-color: #d1fae5; color: #065f46; padding: 15px; border-radius: 12px; margin-bottom: 40px; text-align: center; border: 1px solid #34d399;\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"support-cards\">
            <!-- Submit a Ticket Card -->
            <div class=\"support-card\">
                <div class=\"card-icon\">
                    <i class=\"far fa-file-alt\"></i>
                </div>
                <h3>Submit a Ticket</h3>
                <p>Can't find what you're looking for? Submit a support request and our team will get back to you.</p>
                <a href=\"{{ path('app_user_createticket') }}\" class=\"btn-card-action\">Create Ticket</a>
            </div>

            <!-- My Tickets Card -->
            <div class=\"support-card\">
                <div class=\"card-icon\">
                    <i class=\"far fa-comment-alt\"></i>
                </div>
                <h3>My Tickets</h3>
                <p>View and manage your existing support tickets. Track the status of your requests in real-time.</p>
                <a href=\"{{ path('app_user_tickets') }}\" class=\"btn-card-action\">View Tickets</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

", "reclamation/support_center.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\reclamation\\support_center.html.twig");
    }
}
