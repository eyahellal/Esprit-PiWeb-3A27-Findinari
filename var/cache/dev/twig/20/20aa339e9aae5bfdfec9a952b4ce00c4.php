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

/* loan/investment/new.html.twig */
class __TwigTemplate_999940d1491033db63e2addfdfc96720 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/investment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/investment/new.html.twig"));

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

        yield "Make New Investment - Fin-Dinari";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Flatpickr CSS for beautiful date picker -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-calendar {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            font-family: inherit;
        }
        .flatpickr-day.selected {
            background: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "
<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Make New Investment</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\">My Investments</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"shadow rounded p-5 bg-white\">
                    <h3 class=\"mb-4\">Make a New Investment</h3>
                    
                    ";
        // line 47
        if ((($tmp = (isset($context["selected_obligation"]) || array_key_exists("selected_obligation", $context) ? $context["selected_obligation"] : (function () { throw new RuntimeError('Variable "selected_obligation" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                        <div class=\"alert alert-info mb-4\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <strong>Selected Obligation:</strong> ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_obligation"]) || array_key_exists("selected_obligation", $context) ? $context["selected_obligation"] : (function () { throw new RuntimeError('Variable "selected_obligation" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), "html", null, true);
            yield " 
                            (";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_obligation"]) || array_key_exists("selected_obligation", $context) ? $context["selected_obligation"] : (function () { throw new RuntimeError('Variable "selected_obligation" does not exist.', 51, $this->source); })()), "tauxInteret", [], "any", false, false, false, 51), "html", null, true);
            yield "% interest for ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_obligation"]) || array_key_exists("selected_obligation", $context) ? $context["selected_obligation"] : (function () { throw new RuntimeError('Variable "selected_obligation" does not exist.', 51, $this->source); })()), "duree", [], "any", false, false, false, 51), "html", null, true);
            yield " months)
                        </div>
                    ";
        }
        // line 54
        yield "                    
                    ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_start');
        yield "
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Select Wallet</label>
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "walletId", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"text-danger\">";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "walletId", [], "any", false, false, false, 60), 'errors');
        yield "</div>
                        </div>
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Select Obligation</label>
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "obligationId", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"text-danger\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "obligationId", [], "any", false, false, false, 66), 'errors');
        yield "</div>
                        </div>
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Investment Amount (DT)</label>
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "montantInvesti", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter amount to invest"]]);
        yield "
                            <div class=\"text-danger\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "montantInvesti", [], "any", false, false, false, 72), 'errors');
        yield "</div>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label fw-bold\">Purchase Date</label>
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "dateAchat", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control datepicker", "placeholder" => "Select date"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "dateAchat", [], "any", false, false, false, 79), 'errors');
        yield "</div>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label fw-bold\">Maturity Date</label>
                                <input type=\"text\" class=\"form-control\" id=\"maturity_date\" placeholder=\"Will be auto-calculated\" readonly disabled>
                                <small class=\"text-muted\">Automatically calculated based on obligation duration</small>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Make Investment</button>
                        </div>
                    ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Flatpickr JS for beautiful date picker -->
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize date picker for purchase date
            flatpickr(\".datepicker\", {
                dateFormat: \"d/m/Y\",
                allowInput: true,
                locale: {
                    firstDayOfWeek: 1
                }
            });
            
            // Auto-calculate maturity date when obligation or purchase date changes
            const obligationSelect = document.querySelector('select[name=\"investissementobligation[obligationId]\"]');
            const purchaseDateInput = document.querySelector('input[name=\"investissementobligation[dateAchat]\"]');
            const maturityDateInput = document.getElementById('maturity_date');
            
            function calculateMaturityDate() {
                const obligationId = obligationSelect ? obligationSelect.value : null;
                const purchaseDate = purchaseDateInput ? purchaseDateInput.value : null;
                
                if (obligationId && purchaseDate) {
                    // Get duration from selected obligation
                    let durationMonths = 0;
                    const selectedOption = obligationSelect.options[obligationSelect.selectedIndex];
                    const obligationText = selectedOption ? selectedOption.text : '';
                    
                    if (obligationText.includes('12 months')) durationMonths = 12;
                    else if (obligationText.includes('240 months')) durationMonths = 240;
                    else if (obligationText.includes('10 months')) durationMonths = 10;
                    else if (obligationText.includes('24 months')) durationMonths = 24;
                    else if (obligationText.includes('36 months')) durationMonths = 36;
                    
                    if (durationMonths > 0 && purchaseDate) {
                        // Parse date
                        let parts = purchaseDate.split('/');
                        if (parts.length === 3) {
                            let date = new Date(parts[2], parts[1] - 1, parts[0]);
                            date.setMonth(date.getMonth() + durationMonths);
                            let day = String(date.getDate()).padStart(2, '0');
                            let month = String(date.getMonth() + 1).padStart(2, '0');
                            let year = date.getFullYear();
                            maturityDateInput.value = day + '/' + month + '/' + year;
                        }
                    } else {
                        maturityDateInput.value = '';
                    }
                } else {
                    maturityDateInput.value = '';
                }
            }
            
            if (obligationSelect) {
                obligationSelect.addEventListener('change', calculateMaturityDate);
            }
            if (purchaseDateInput) {
                purchaseDateInput.addEventListener('change', calculateMaturityDate);
            }
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
        return "loan/investment/new.html.twig";
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
        return array (  298 => 103,  285 => 102,  266 => 93,  260 => 90,  246 => 79,  242 => 78,  233 => 72,  229 => 71,  221 => 66,  217 => 65,  209 => 60,  205 => 59,  198 => 55,  195 => 54,  187 => 51,  183 => 50,  179 => 48,  177 => 47,  160 => 33,  156 => 32,  152 => 31,  143 => 24,  130 => 23,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Make New Investment - Fin-Dinari{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Flatpickr CSS for beautiful date picker -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-calendar {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            font-family: inherit;
        }
        .flatpickr-day.selected {
            background: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Make New Investment</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_investment_index') }}\">My Investments</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"shadow rounded p-5 bg-white\">
                    <h3 class=\"mb-4\">Make a New Investment</h3>
                    
                    {% if selected_obligation %}
                        <div class=\"alert alert-info mb-4\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <strong>Selected Obligation:</strong> {{ selected_obligation.nom }} 
                            ({{ selected_obligation.tauxInteret }}% interest for {{ selected_obligation.duree }} months)
                        </div>
                    {% endif %}
                    
                    {{ form_start(form) }}
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Select Wallet</label>
                            {{ form_widget(form.walletId, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"text-danger\">{{ form_errors(form.walletId) }}</div>
                        </div>
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Select Obligation</label>
                            {{ form_widget(form.obligationId, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"text-danger\">{{ form_errors(form.obligationId) }}</div>
                        </div>
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Investment Amount (DT)</label>
                            {{ form_widget(form.montantInvesti, {'attr': {'class': 'form-control', 'placeholder': 'Enter amount to invest'}}) }}
                            <div class=\"text-danger\">{{ form_errors(form.montantInvesti) }}</div>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label fw-bold\">Purchase Date</label>
                                {{ form_widget(form.dateAchat, {'attr': {'class': 'form-control datepicker', 'placeholder': 'Select date'}}) }}
                                <div class=\"text-danger\">{{ form_errors(form.dateAchat) }}</div>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label fw-bold\">Maturity Date</label>
                                <input type=\"text\" class=\"form-control\" id=\"maturity_date\" placeholder=\"Will be auto-calculated\" readonly disabled>
                                <small class=\"text-muted\">Automatically calculated based on obligation duration</small>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"{{ path('app_investment_index') }}\" class=\"btn btn-secondary\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Make Investment</button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Flatpickr JS for beautiful date picker -->
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize date picker for purchase date
            flatpickr(\".datepicker\", {
                dateFormat: \"d/m/Y\",
                allowInput: true,
                locale: {
                    firstDayOfWeek: 1
                }
            });
            
            // Auto-calculate maturity date when obligation or purchase date changes
            const obligationSelect = document.querySelector('select[name=\"investissementobligation[obligationId]\"]');
            const purchaseDateInput = document.querySelector('input[name=\"investissementobligation[dateAchat]\"]');
            const maturityDateInput = document.getElementById('maturity_date');
            
            function calculateMaturityDate() {
                const obligationId = obligationSelect ? obligationSelect.value : null;
                const purchaseDate = purchaseDateInput ? purchaseDateInput.value : null;
                
                if (obligationId && purchaseDate) {
                    // Get duration from selected obligation
                    let durationMonths = 0;
                    const selectedOption = obligationSelect.options[obligationSelect.selectedIndex];
                    const obligationText = selectedOption ? selectedOption.text : '';
                    
                    if (obligationText.includes('12 months')) durationMonths = 12;
                    else if (obligationText.includes('240 months')) durationMonths = 240;
                    else if (obligationText.includes('10 months')) durationMonths = 10;
                    else if (obligationText.includes('24 months')) durationMonths = 24;
                    else if (obligationText.includes('36 months')) durationMonths = 36;
                    
                    if (durationMonths > 0 && purchaseDate) {
                        // Parse date
                        let parts = purchaseDate.split('/');
                        if (parts.length === 3) {
                            let date = new Date(parts[2], parts[1] - 1, parts[0]);
                            date.setMonth(date.getMonth() + durationMonths);
                            let day = String(date.getDate()).padStart(2, '0');
                            let month = String(date.getMonth() + 1).padStart(2, '0');
                            let year = date.getFullYear();
                            maturityDateInput.value = day + '/' + month + '/' + year;
                        }
                    } else {
                        maturityDateInput.value = '';
                    }
                } else {
                    maturityDateInput.value = '';
                }
            }
            
            if (obligationSelect) {
                obligationSelect.addEventListener('change', calculateMaturityDate);
            }
            if (purchaseDateInput) {
                purchaseDateInput.addEventListener('change', calculateMaturityDate);
            }
        });
    </script>
{% endblock %}", "loan/investment/new.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\investment\\new.html.twig");
    }
}
