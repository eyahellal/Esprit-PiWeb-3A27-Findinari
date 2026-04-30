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
class __TwigTemplate_f55fdc5256a0a0324d4e13f97c48f847 extends Template
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .calculator-card {
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
            border-radius: 16px;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #28a745;
        }
        .profit-positive {
            color: #28a745;
            font-size: 28px;
            font-weight: 700;
        }
        .info-badge {
            background: white;
            border-radius: 10px;
            padding: 10px 15px;
            margin: 5px 0;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .live-badge {
            display: inline-block;
            background: #28a745;
            color: white;
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 20px;
            margin-left: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
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

        // line 41
        yield "
<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Make New Investment</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 50
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
        // line 64
        if ((($tmp = (isset($context["selected_obligation"]) || array_key_exists("selected_obligation", $context) ? $context["selected_obligation"] : (function () { throw new RuntimeError('Variable "selected_obligation" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                        <div class=\"alert alert-info mb-4\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <strong>Selected Obligation:</strong> ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_obligation"]) || array_key_exists("selected_obligation", $context) ? $context["selected_obligation"] : (function () { throw new RuntimeError('Variable "selected_obligation" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), "html", null, true);
            yield " 
                            (";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_obligation"]) || array_key_exists("selected_obligation", $context) ? $context["selected_obligation"] : (function () { throw new RuntimeError('Variable "selected_obligation" does not exist.', 68, $this->source); })()), "tauxInteret", [], "any", false, false, false, 68), "html", null, true);
            yield "% interest for ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_obligation"]) || array_key_exists("selected_obligation", $context) ? $context["selected_obligation"] : (function () { throw new RuntimeError('Variable "selected_obligation" does not exist.', 68, $this->source); })()), "duree", [], "any", false, false, false, 68), "html", null, true);
            yield " months)
                        </div>
                    ";
        }
        // line 71
        yield "                    
                    ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_start');
        yield "
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Select Wallet</label>
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "walletId", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Select Obligation</label>
                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "obligationId", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "id" => "obligationSelect"]]);
        yield "
                        </div>
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Investment Amount (DT)</label>
                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "montantInvesti", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter amount to invest", "step" => "0.01", "id" => "amountInput"]]);
        yield "
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label fw-bold\">Purchase Date</label>
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "dateAchat", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control datepicker", "placeholder" => "Select date", "id" => "dateInput"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label fw-bold\">Maturity Date</label>
                                <input type=\"text\" class=\"form-control\" id=\"maturity_date\" readonly disabled placeholder=\"Will appear after selecting obligation\">
                                <small class=\"text-muted\">Auto-calculated based on obligation duration</small>
                            </div>
                        </div>
                        
                        <!-- Real-time Calculator - Always visible -->
                        <div class=\"calculator-card\">
                            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                <h5 class=\"mb-0 text-primary\">
                                    <i class=\"fas fa-calculator me-2\"></i>Live Profit Calculator
                                </h5>
                                <span class=\"live-badge\">LIVE</span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"info-badge\">
                                        <small class=\"text-muted\">📊 Interest Rate</small>
                                        <div class=\"fw-bold fs-4 text-primary\" id=\"displayRate\">--%</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"info-badge\">
                                        <small class=\"text-muted\">⏱️ Duration</small>
                                        <div class=\"fw-bold fs-4 text-primary\" id=\"displayDuration\">-- months</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"info-badge\">
                                        <small class=\"text-muted\">💰 Amount Invested</small>
                                        <div class=\"fw-bold fs-4\" id=\"displayAmount\">0 DT</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"info-badge\">
                                        <small class=\"text-muted\">📈 Expected Profit</small>
                                        <div class=\"profit-positive\" id=\"displayProfit\">0 DT</div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"info-badge bg-white\">
                                        <small class=\"text-muted\">💰 Total Return (Principal + Profit)</small>
                                        <div class=\"fw-bold fs-2 text-success\" id=\"displayTotal\">0 DT</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"alert alert-info mt-2 mb-0 py-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                <small>Select an obligation and enter an amount to see your potential profit in real-time!</small>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Make Investment</button>
                        </div>
                    ";
        // line 151
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), 'form_end');
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

    // line 160
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

        // line 161
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
    // Get obligations data from PHP
    const obligationsData = ";
        // line 165
        yield json_encode((isset($context["obligationsData"]) || array_key_exists("obligationsData", $context) ? $context["obligationsData"] : (function () { throw new RuntimeError('Variable "obligationsData" does not exist.', 165, $this->source); })()));
        yield ";
    
    console.log('Obligations Data:', obligationsData);
    
    document.addEventListener('DOMContentLoaded', function() {
        // Find the obligation select element - try multiple selectors
        let obligationSelect = document.getElementById('obligationSelect');
        
        // If not found by ID, try by name
        if (!obligationSelect) {
            obligationSelect = document.querySelector('select[name=\"investissementobligation[obligationId]\"]');
        }
        
        // If still not found, try any select element
        if (!obligationSelect) {
            obligationSelect = document.querySelector('select');
        }
        
        const amountInput = document.querySelector('input[name=\"investissementobligation[montantInvesti]\"]');
        const dateInput = document.querySelector('input[name=\"investissementobligation[dateAchat]\"]');
        const maturityDate = document.getElementById('maturity_date');
        
        // Log to see if elements were found
        console.log('Obligation select found:', obligationSelect);
        console.log('Amount input found:', amountInput);
        
        let currentRate = 0;
        let currentDuration = 0;
        
        function updateAll() {
            const amount = parseFloat(amountInput?.value) || 0;
            const profit = amount * (currentRate / 100);
            const total = amount + profit;
            
            const displayAmount = document.getElementById('displayAmount');
            const displayProfit = document.getElementById('displayProfit');
            const displayTotal = document.getElementById('displayTotal');
            
            if (displayAmount) displayAmount.innerHTML = amount.toFixed(2) + ' DT';
            if (displayProfit) displayProfit.innerHTML = profit.toFixed(2) + ' DT';
            if (displayTotal) displayTotal.innerHTML = total.toFixed(2) + ' DT';
            
            // Update maturity date
            const purchaseDate = dateInput?.value;
            if (purchaseDate && currentDuration > 0 && maturityDate) {
                let parts = purchaseDate.split('/');
                if (parts.length === 3) {
                    let date = new Date(parts[2], parts[1] - 1, parts[0]);
                    date.setMonth(date.getMonth() + currentDuration);
                    maturityDate.value = date.toLocaleDateString('fr-FR');
                }
            }
        }
        
        function onObligationChange() {
            if (!obligationSelect) return;
            
            const selectedId = obligationSelect.value;
            console.log('Selected ID:', selectedId);
            
            if (selectedId && obligationsData[selectedId]) {
                currentRate = obligationsData[selectedId].rate;
                currentDuration = obligationsData[selectedId].duration;
                
                const displayRate = document.getElementById('displayRate');
                const displayDuration = document.getElementById('displayDuration');
                
                if (displayRate) displayRate.innerHTML = currentRate + '%';
                if (displayDuration) displayDuration.innerHTML = currentDuration + ' months';
                
                updateAll();
            }
        }
        
        if (obligationSelect) {
            obligationSelect.addEventListener('change', onObligationChange);
        }
        
        if (amountInput) {
            amountInput.addEventListener('input', updateAll);
        }
        
        if (dateInput) {
            dateInput.addEventListener('change', updateAll);
        }
        
        // Run initial update
        setTimeout(onObligationChange, 500);
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
        return array (  352 => 165,  344 => 161,  331 => 160,  312 => 151,  306 => 148,  247 => 92,  238 => 86,  230 => 81,  222 => 76,  215 => 72,  212 => 71,  204 => 68,  200 => 67,  196 => 65,  194 => 64,  177 => 50,  173 => 49,  169 => 48,  160 => 41,  147 => 40,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Make New Investment - Fin-Dinari{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .calculator-card {
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
            border-radius: 16px;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #28a745;
        }
        .profit-positive {
            color: #28a745;
            font-size: 28px;
            font-weight: 700;
        }
        .info-badge {
            background: white;
            border-radius: 10px;
            padding: 10px 15px;
            margin: 5px 0;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .live-badge {
            display: inline-block;
            background: #28a745;
            color: white;
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 20px;
            margin-left: 10px;
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
                        </div>
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Select Obligation</label>
                            {{ form_widget(form.obligationId, {'attr': {'class': 'form-control', 'id': 'obligationSelect'}}) }}
                        </div>
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Investment Amount (DT)</label>
                            {{ form_widget(form.montantInvesti, {'attr': {'class': 'form-control', 'placeholder': 'Enter amount to invest', 'step': '0.01', 'id': 'amountInput'}}) }}
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label fw-bold\">Purchase Date</label>
                                {{ form_widget(form.dateAchat, {'attr': {'class': 'form-control datepicker', 'placeholder': 'Select date', 'id': 'dateInput'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label fw-bold\">Maturity Date</label>
                                <input type=\"text\" class=\"form-control\" id=\"maturity_date\" readonly disabled placeholder=\"Will appear after selecting obligation\">
                                <small class=\"text-muted\">Auto-calculated based on obligation duration</small>
                            </div>
                        </div>
                        
                        <!-- Real-time Calculator - Always visible -->
                        <div class=\"calculator-card\">
                            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                <h5 class=\"mb-0 text-primary\">
                                    <i class=\"fas fa-calculator me-2\"></i>Live Profit Calculator
                                </h5>
                                <span class=\"live-badge\">LIVE</span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"info-badge\">
                                        <small class=\"text-muted\">📊 Interest Rate</small>
                                        <div class=\"fw-bold fs-4 text-primary\" id=\"displayRate\">--%</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"info-badge\">
                                        <small class=\"text-muted\">⏱️ Duration</small>
                                        <div class=\"fw-bold fs-4 text-primary\" id=\"displayDuration\">-- months</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"info-badge\">
                                        <small class=\"text-muted\">💰 Amount Invested</small>
                                        <div class=\"fw-bold fs-4\" id=\"displayAmount\">0 DT</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"info-badge\">
                                        <small class=\"text-muted\">📈 Expected Profit</small>
                                        <div class=\"profit-positive\" id=\"displayProfit\">0 DT</div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"info-badge bg-white\">
                                        <small class=\"text-muted\">💰 Total Return (Principal + Profit)</small>
                                        <div class=\"fw-bold fs-2 text-success\" id=\"displayTotal\">0 DT</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"alert alert-info mt-2 mb-0 py-2\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                <small>Select an obligation and enter an amount to see your potential profit in real-time!</small>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4\">
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
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
    // Get obligations data from PHP
    const obligationsData = {{ obligationsData|json_encode|raw }};
    
    console.log('Obligations Data:', obligationsData);
    
    document.addEventListener('DOMContentLoaded', function() {
        // Find the obligation select element - try multiple selectors
        let obligationSelect = document.getElementById('obligationSelect');
        
        // If not found by ID, try by name
        if (!obligationSelect) {
            obligationSelect = document.querySelector('select[name=\"investissementobligation[obligationId]\"]');
        }
        
        // If still not found, try any select element
        if (!obligationSelect) {
            obligationSelect = document.querySelector('select');
        }
        
        const amountInput = document.querySelector('input[name=\"investissementobligation[montantInvesti]\"]');
        const dateInput = document.querySelector('input[name=\"investissementobligation[dateAchat]\"]');
        const maturityDate = document.getElementById('maturity_date');
        
        // Log to see if elements were found
        console.log('Obligation select found:', obligationSelect);
        console.log('Amount input found:', amountInput);
        
        let currentRate = 0;
        let currentDuration = 0;
        
        function updateAll() {
            const amount = parseFloat(amountInput?.value) || 0;
            const profit = amount * (currentRate / 100);
            const total = amount + profit;
            
            const displayAmount = document.getElementById('displayAmount');
            const displayProfit = document.getElementById('displayProfit');
            const displayTotal = document.getElementById('displayTotal');
            
            if (displayAmount) displayAmount.innerHTML = amount.toFixed(2) + ' DT';
            if (displayProfit) displayProfit.innerHTML = profit.toFixed(2) + ' DT';
            if (displayTotal) displayTotal.innerHTML = total.toFixed(2) + ' DT';
            
            // Update maturity date
            const purchaseDate = dateInput?.value;
            if (purchaseDate && currentDuration > 0 && maturityDate) {
                let parts = purchaseDate.split('/');
                if (parts.length === 3) {
                    let date = new Date(parts[2], parts[1] - 1, parts[0]);
                    date.setMonth(date.getMonth() + currentDuration);
                    maturityDate.value = date.toLocaleDateString('fr-FR');
                }
            }
        }
        
        function onObligationChange() {
            if (!obligationSelect) return;
            
            const selectedId = obligationSelect.value;
            console.log('Selected ID:', selectedId);
            
            if (selectedId && obligationsData[selectedId]) {
                currentRate = obligationsData[selectedId].rate;
                currentDuration = obligationsData[selectedId].duration;
                
                const displayRate = document.getElementById('displayRate');
                const displayDuration = document.getElementById('displayDuration');
                
                if (displayRate) displayRate.innerHTML = currentRate + '%';
                if (displayDuration) displayDuration.innerHTML = currentDuration + ' months';
                
                updateAll();
            }
        }
        
        if (obligationSelect) {
            obligationSelect.addEventListener('change', onObligationChange);
        }
        
        if (amountInput) {
            amountInput.addEventListener('input', updateAll);
        }
        
        if (dateInput) {
            dateInput.addEventListener('change', updateAll);
        }
        
        // Run initial update
        setTimeout(onObligationChange, 500);
    });
</script>
{% endblock %}", "loan/investment/new.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\loan\\investment\\new.html.twig");
    }
}
