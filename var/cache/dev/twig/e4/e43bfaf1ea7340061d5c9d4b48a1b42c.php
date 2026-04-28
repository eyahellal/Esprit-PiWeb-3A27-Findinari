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

/* loan/wallet/edit.html.twig */
class __TwigTemplate_2ceeeabd311191fbaa92ec8879361286 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/edit.html.twig"));

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

        yield "Edit ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 3, $this->source); })()), "pays", [], "any", false, false, false, 3), "html", null, true);
        yield " Wallet - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">Edit Wallet</h2>
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
                    <li class=\"list-inline-item\">/ &nbsp; Edit</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
function validateWallet() {
    const soldeInput = document.querySelector('input[name\$=\"[solde]\"]') || 
                       document.querySelector('input[name=\"solde\"]');
    const solde = parseFloat(soldeInput.value);
    const errorDiv = document.getElementById('soldeError');

    errorDiv.innerHTML = '';

    if (isNaN(solde) || solde < 0) {
        errorDiv.innerHTML = '❌ Balance cannot be negative! Please enter a valid amount.';
        soldeInput.style.borderColor = '#c0392b';
        soldeInput.scrollIntoView({ behavior: 'smooth' });
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
        // line 50
        yield "                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Editing</p>
                                <h4 class=\"fw-bold mb-0\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 55, $this->source); })()), "pays", [], "any", false, false, false, 55), "html", null, true);
        yield " Wallet</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-edit fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 65
        yield "                    <div class=\"card-body p-4\">

                        ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validateWallet()"]]);
        yield "

                            <div class=\"mb-3\">
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "pays", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Country"]);
        yield "
                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "pays", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter country name"]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "pays", [], "any", false, false, false, 72), 'errors');
        yield "</div>
                            </div>

                            <div class=\"mb-3\">
    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "solde", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Balance"]);
        yield "
    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "solde", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "step" => "0.01", "min" => "0"]]);
        yield "
    <div class=\"text-danger small mt-1\" id=\"soldeError\"></div>
    <div class=\"text-danger small mt-1\">";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "solde", [], "any", false, false, false, 79), 'errors');
        yield "</div>
</div>

                            <div class=\"mb-4\">
                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "devise", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Currency"]);
        yield "
                                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "devise", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "DT, EUR, USD, GBP..."]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "devise", [], "any", false, false, false, 85), 'errors');
        yield "</div>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\"
                                        class=\"btn btn-sm flex-fill update-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Update Wallet
                                </button>
                            </div>

                        ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
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
    .update-btn:hover {
        background: #F27438 !important;
        color: white !important;
    }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242, 116, 56, 0.2) !important;
    }
</style>

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
        return "loan/wallet/edit.html.twig";
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
        return array (  248 => 103,  233 => 91,  224 => 85,  220 => 84,  216 => 83,  209 => 79,  204 => 77,  200 => 76,  193 => 72,  189 => 71,  185 => 70,  179 => 67,  175 => 65,  163 => 55,  156 => 50,  119 => 15,  115 => 14,  111 => 13,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit {{ wallet.pays }} Wallet - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">Edit Wallet</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\" style=\"color: #26474E;\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_wallet_index') }}\" style=\"color: #26474E;\">Budget Management</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Edit</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
function validateWallet() {
    const soldeInput = document.querySelector('input[name\$=\"[solde]\"]') || 
                       document.querySelector('input[name=\"solde\"]');
    const solde = parseFloat(soldeInput.value);
    const errorDiv = document.getElementById('soldeError');

    errorDiv.innerHTML = '';

    if (isNaN(solde) || solde < 0) {
        errorDiv.innerHTML = '❌ Balance cannot be negative! Please enter a valid amount.';
        soldeInput.style.borderColor = '#c0392b';
        soldeInput.scrollIntoView({ behavior: 'smooth' });
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
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Editing</p>
                                <h4 class=\"fw-bold mb-0\">{{ wallet.pays }} Wallet</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-edit fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    {# Card Body #}
                    <div class=\"card-body p-4\">

                        {{ form_start(form , {'attr': {'onsubmit': 'return validateWallet()'}}) }}

                            <div class=\"mb-3\">
                                {{ form_label(form.pays, 'Country', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #26474E;'}}) }}
                                {{ form_widget(form.pays, {'attr': {'class': 'form-control', 'placeholder': 'Enter country name'}}) }}
                                <div class=\"text-danger small mt-1\">{{ form_errors(form.pays) }}</div>
                            </div>

                            <div class=\"mb-3\">
    {{ form_label(form.solde, 'Balance', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #26474E;'}}) }}
    {{ form_widget(form.solde, {'attr': {'class': 'form-control', 'step': '0.01', 'min': '0'}}) }}
    <div class=\"text-danger small mt-1\" id=\"soldeError\"></div>
    <div class=\"text-danger small mt-1\">{{ form_errors(form.solde) }}</div>
</div>

                            <div class=\"mb-4\">
                                {{ form_label(form.devise, 'Currency', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #26474E;'}}) }}
                                {{ form_widget(form.devise, {'attr': {'class': 'form-control', 'placeholder': 'DT, EUR, USD, GBP...'}}) }}
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
                                        class=\"btn btn-sm flex-fill update-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Update Wallet
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
    .update-btn:hover {
        background: #F27438 !important;
        color: white !important;
    }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242, 116, 56, 0.2) !important;
    }
</style>

{% endblock %}", "loan/wallet/edit.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\wallet\\edit.html.twig");
    }
}
