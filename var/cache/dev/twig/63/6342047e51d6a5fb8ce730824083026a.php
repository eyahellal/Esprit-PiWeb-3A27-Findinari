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

/* loan/wallet/new.html.twig */
class __TwigTemplate_4f0a45859004907024b7e20a77a55dbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/new.html.twig"));

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

        yield "Create New Wallet - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">Create New Wallet</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" style=\"color: #26474E;\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\" style=\"color: #26474E;\">Budget Management</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Create</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
function validateWallet() {
    const solde = parseFloat(document.querySelector('input[name\$=\"[solde]\"], input[name=\"solde\"]').value);
    const errorDiv = document.getElementById('soldeError');

    errorDiv.innerHTML = '';

    if (isNaN(solde) || solde < 0) {
        errorDiv.innerHTML = '❌ Balance cannot be negative! Please enter a valid amount.';
        return false;
    }

    return true;
}
</script>
<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">

                <div class=\"card border-0 rounded-4 wallet-card\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    ";
        // line 46
        yield "                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">New</p>
                                <h4 class=\"fw-bold mb-0\">Create Wallet</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-wallet fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 61
        yield "                    <div class=\"card-body p-4\">

                        ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                            <div class=\"mb-3\">
    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "pays", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Country"]);
        yield "
    <select id=\"countrySelect\" class=\"form-select\" onchange=\"updateCurrency()\"
        style=\"border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
    <option value=\"\">Loading countries...</option>
</select>
    ";
        // line 72
        yield "    <div style=\"display:none;\">
        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "pays", [], "any", false, false, false, 73), 'widget', ["attr" => ["id" => "paysHidden"]]);
        yield "
    </div>
    <div class=\"text-danger small mt-1\">";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "pays", [], "any", false, false, false, 75), 'errors');
        yield "</div>
</div>

                            <div class=\"mb-3\">
    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "solde", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Balance"]);
        yield "
    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "solde", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter balance", "step" => "0.01", "min" => "0"]]);
        yield "
    <small class=\"text-muted\">Enter the initial balance of your wallet</small>
    <div class=\"text-danger small mt-1\" id=\"soldeError\"></div>
    <div class=\"text-danger small mt-1\">";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "solde", [], "any", false, false, false, 83), 'errors');
        yield "</div>
</div>

                            <div class=\"mb-4\">
    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "devise", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Currency"]);
        yield "
    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "devise", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select a country first", "readonly" => "readonly", "id" => "deviseField"]]);
        yield "
    <small class=\"text-muted\">Auto-filled based on the country you choose</small>
    <div class=\"text-danger small mt-1\">";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "devise", [], "any", false, false, false, 90), 'errors');
        yield "</div>
</div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\"
                                        class=\"btn btn-sm flex-fill create-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-plus me-1\"></i>Create Wallet
                                </button>
                            </div>

                        ";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 {
        border-radius: 1rem 1rem 0 0 !important;
    }
    .rounded-4 {
        border-radius: 1rem !important;
    }
    .wallet-card {
        transition: all 0.3s ease;
    }
    .wallet-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(242, 116, 56, 0.3) !important;
    }
    .create-btn:hover {
        background: #F27438 !important;
        color: white !important;
    }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242, 116, 56, 0.2) !important;
    }
    #countrySelect option {
    color: #26474E;
    background-color: white;
    padding: 8px;
}

#countrySelect option:hover {
    background-color: #e8f5f5;
}

#countrySelect:focus {
    border-color: #F27438 !important;
    box-shadow: 0 0 0 0.2rem rgba(242, 116, 56, 0.2) !important;
}
</style>
<script>
let countriesData = {};

async function loadCountries() {
    try {
        const response = await fetch('https://restcountries.com/v3.1/all?fields=name,currencies,flag');
        const countries = await response.json();
        
        countries.sort((a, b) => {
            const nameA = a?.name?.common || '';
            const nameB = b?.name?.common || '';
            return nameA.localeCompare(nameB);
        });
        
        const select = document.getElementById('countrySelect');
        select.innerHTML = '<option value=\"\">-- Choose a country --</option>';
        
        countries.forEach(country => {
            if (!country || !country.name || !country.name.common) return;
            if (!country.currencies) return;
            
            const currencyKeys = Object.keys(country.currencies);
            if (currencyKeys.length === 0) return;
            
            const currencyCode = currencyKeys[0];
            const currencyObj = country.currencies[currencyCode];
            
            countriesData[country.name.common] = {
                currency: currencyCode,
                currencyName: currencyObj?.name || currencyCode,
                flag: country.flag || ''
            };
            
            const option = document.createElement('option');
            option.value = country.name.common;
            option.textContent = `\${country.flag || ''} \${country.name.common}`;
            select.appendChild(option);
        });
    } catch (error) {
        console.error('Error loading countries:', error);
        document.getElementById('countrySelect').innerHTML = 
            '<option value=\"\">Error loading countries</option>';
    }
}

function updateCurrency() {
    const select = document.getElementById('countrySelect');
    const selectedCountry = select.value;
    
    // Find the hidden pays input by name (works regardless of Symfony's generated ID)
    const paysInput = document.querySelector('input[name*=\"[pays]\"]');
    const deviseInput = document.querySelector('input[name*=\"[devise]\"]');
    
    if (paysInput) paysInput.value = selectedCountry;
    
    if (selectedCountry && countriesData[selectedCountry]) {
        if (deviseInput) deviseInput.value = countriesData[selectedCountry].currency;
    } else {
        if (deviseInput) deviseInput.value = '';
    }
}

document.addEventListener('DOMContentLoaded', loadCountries);
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
        return "loan/wallet/new.html.twig";
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
        return array (  249 => 108,  234 => 96,  225 => 90,  220 => 88,  216 => 87,  209 => 83,  203 => 80,  199 => 79,  192 => 75,  187 => 73,  184 => 72,  176 => 66,  170 => 63,  166 => 61,  150 => 46,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create New Wallet - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">Create New Wallet</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\" style=\"color: #26474E;\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_wallet_index') }}\" style=\"color: #26474E;\">Budget Management</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Create</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
function validateWallet() {
    const solde = parseFloat(document.querySelector('input[name\$=\"[solde]\"], input[name=\"solde\"]').value);
    const errorDiv = document.getElementById('soldeError');

    errorDiv.innerHTML = '';

    if (isNaN(solde) || solde < 0) {
        errorDiv.innerHTML = '❌ Balance cannot be negative! Please enter a valid amount.';
        return false;
    }

    return true;
}
</script>
<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">

                <div class=\"card border-0 rounded-4 wallet-card\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    {# Card Header — same as index cards #}
                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">New</p>
                                <h4 class=\"fw-bold mb-0\">Create Wallet</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-wallet fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    {# Card Body #}
                    <div class=\"card-body p-4\">

                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                            <div class=\"mb-3\">
    {{ form_label(form.pays, 'Country', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #26474E;'}}) }}
    <select id=\"countrySelect\" class=\"form-select\" onchange=\"updateCurrency()\"
        style=\"border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
    <option value=\"\">Loading countries...</option>
</select>
    {# Hidden input that actually submits the country name #}
    <div style=\"display:none;\">
        {{ form_widget(form.pays, {'attr': {'id': 'paysHidden'}}) }}
    </div>
    <div class=\"text-danger small mt-1\">{{ form_errors(form.pays) }}</div>
</div>

                            <div class=\"mb-3\">
    {{ form_label(form.solde, 'Balance', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #26474E;'}}) }}
    {{ form_widget(form.solde, {'attr': {'class': 'form-control', 'placeholder': 'Enter balance', 'step': '0.01', 'min': '0'}}) }}
    <small class=\"text-muted\">Enter the initial balance of your wallet</small>
    <div class=\"text-danger small mt-1\" id=\"soldeError\"></div>
    <div class=\"text-danger small mt-1\">{{ form_errors(form.solde) }}</div>
</div>

                            <div class=\"mb-4\">
    {{ form_label(form.devise, 'Currency', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #26474E;'}}) }}
    {{ form_widget(form.devise, {'attr': {'class': 'form-control', 'placeholder': 'Select a country first', 'readonly': 'readonly', 'id': 'deviseField'}}) }}
    <small class=\"text-muted\">Auto-filled based on the country you choose</small>
    <div class=\"text-danger small mt-1\">{{ form_errors(form.devise) }}</div>
</div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_wallet_index') }}\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\"
                                        class=\"btn btn-sm flex-fill create-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-plus me-1\"></i>Create Wallet
                                </button>
                            </div>

                        {{ form_end(form) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 {
        border-radius: 1rem 1rem 0 0 !important;
    }
    .rounded-4 {
        border-radius: 1rem !important;
    }
    .wallet-card {
        transition: all 0.3s ease;
    }
    .wallet-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(242, 116, 56, 0.3) !important;
    }
    .create-btn:hover {
        background: #F27438 !important;
        color: white !important;
    }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242, 116, 56, 0.2) !important;
    }
    #countrySelect option {
    color: #26474E;
    background-color: white;
    padding: 8px;
}

#countrySelect option:hover {
    background-color: #e8f5f5;
}

#countrySelect:focus {
    border-color: #F27438 !important;
    box-shadow: 0 0 0 0.2rem rgba(242, 116, 56, 0.2) !important;
}
</style>
<script>
let countriesData = {};

async function loadCountries() {
    try {
        const response = await fetch('https://restcountries.com/v3.1/all?fields=name,currencies,flag');
        const countries = await response.json();
        
        countries.sort((a, b) => {
            const nameA = a?.name?.common || '';
            const nameB = b?.name?.common || '';
            return nameA.localeCompare(nameB);
        });
        
        const select = document.getElementById('countrySelect');
        select.innerHTML = '<option value=\"\">-- Choose a country --</option>';
        
        countries.forEach(country => {
            if (!country || !country.name || !country.name.common) return;
            if (!country.currencies) return;
            
            const currencyKeys = Object.keys(country.currencies);
            if (currencyKeys.length === 0) return;
            
            const currencyCode = currencyKeys[0];
            const currencyObj = country.currencies[currencyCode];
            
            countriesData[country.name.common] = {
                currency: currencyCode,
                currencyName: currencyObj?.name || currencyCode,
                flag: country.flag || ''
            };
            
            const option = document.createElement('option');
            option.value = country.name.common;
            option.textContent = `\${country.flag || ''} \${country.name.common}`;
            select.appendChild(option);
        });
    } catch (error) {
        console.error('Error loading countries:', error);
        document.getElementById('countrySelect').innerHTML = 
            '<option value=\"\">Error loading countries</option>';
    }
}

function updateCurrency() {
    const select = document.getElementById('countrySelect');
    const selectedCountry = select.value;
    
    // Find the hidden pays input by name (works regardless of Symfony's generated ID)
    const paysInput = document.querySelector('input[name*=\"[pays]\"]');
    const deviseInput = document.querySelector('input[name*=\"[devise]\"]');
    
    if (paysInput) paysInput.value = selectedCountry;
    
    if (selectedCountry && countriesData[selectedCountry]) {
        if (deviseInput) deviseInput.value = countriesData[selectedCountry].currency;
    } else {
        if (deviseInput) deviseInput.value = '';
    }
}

document.addEventListener('DOMContentLoaded', loadCountries);
</script>
{% endblock %}", "loan/wallet/new.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\loan\\wallet\\new.html.twig");
    }
}
