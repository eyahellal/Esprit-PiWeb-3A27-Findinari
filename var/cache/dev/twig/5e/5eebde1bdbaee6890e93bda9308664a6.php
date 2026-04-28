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

/* management/dashboard.html.twig */
class __TwigTemplate_c9edf00a8829ca2eb49cf96ba541032a extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/dashboard.html.twig"));

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

        yield "Budget Management - Fin-Dinari";
        
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
        yield "
<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Budget Management</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        ";
        // line 21
        yield "        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"d-flex gap-2 border-bottom pb-3\">
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\"
                       class=\"btn ";
        // line 25
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 25, $this->source); })()) == "wallet")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-wallet me-1\"></i>Wallets
                    </a>
                    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"btn ";
        // line 31
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 31, $this->source); })()) == "categorie")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-folder me-1\"></i>Categories
                    </a>
                    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index");
        yield "\"
                       class=\"btn ";
        // line 37
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 37, $this->source); })()) == "budget")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-chart-pie me-1\"></i>Budgets
                    </a>
                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index");
        yield "\"
                       class=\"btn ";
        // line 43
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 43, $this->source); })()) == "transaction")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-exchange-alt me-1\"></i>Transactions
                    </a>
                </div>
            </div>
        </div>

        ";
        // line 53
        yield "        <turbo-frame id=\"content-frame\" target=\"_top\">
            ";
        // line 54
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 55
        yield "        </turbo-frame>

    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "management/dashboard.html.twig";
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
        return array (  195 => 54,  179 => 55,  177 => 54,  174 => 53,  162 => 43,  158 => 42,  150 => 37,  146 => 36,  138 => 31,  134 => 30,  126 => 25,  122 => 24,  117 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Budget Management - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Budget Management</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        {# Navigation Tabs #}
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"d-flex gap-2 border-bottom pb-3\">
                    <a href=\"{{ path('app_wallet_index') }}\"
                       class=\"btn {{ active_tab == 'wallet' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-wallet me-1\"></i>Wallets
                    </a>
                    <a href=\"{{ path('app_categorie_index') }}\"
                       class=\"btn {{ active_tab == 'categorie' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-folder me-1\"></i>Categories
                    </a>
                    <a href=\"{{ path('app_budget_index') }}\"
                       class=\"btn {{ active_tab == 'budget' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-chart-pie me-1\"></i>Budgets
                    </a>
                    <a href=\"{{ path('app_transaction_index') }}\"
                       class=\"btn {{ active_tab == 'transaction' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-exchange-alt me-1\"></i>Transactions
                    </a>
                </div>
            </div>
        </div>

        {# Content Frame #}
        <turbo-frame id=\"content-frame\" target=\"_top\">
            {% block content %}{% endblock %}
        </turbo-frame>

    </div>
</section>

{% endblock %}", "management/dashboard.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\management\\dashboard.html.twig");
    }
}
