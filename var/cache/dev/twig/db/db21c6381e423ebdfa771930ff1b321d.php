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

/* loan/wallet/show.html.twig */
class __TwigTemplate_64adc39b592beb55b297d989d6eeefbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/show.html.twig"));

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
<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 11, $this->source); })()), "pays", [], "any", false, false, false, 11), "html", null, true);
        yield " Wallet</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\">Budget Management</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 16, $this->source); })()), "pays", [], "any", false, false, false, 16), "html", null, true);
        yield "</a></li>
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
                    <div class=\"text-center mb-4\">
                        <div class=\"icon-box mb-3\">
                            <div class=\"icon icon-lg bg-primary-light rounded-circle mx-auto\">
                                <i class=\"fas fa-wallet fa-3x text-primary\"></i>
                            </div>
                        </div>
                        <h2 class=\"text-primary\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 34, $this->source); })()), "pays", [], "any", false, false, false, 34), "html", null, true);
        yield "</h2>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border rounded p-3 text-center\">
                                <p class=\"text-muted mb-1\">Balance</p>
                                <h3 class=\"text-success mb-0\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 41, $this->source); })()), "solde", [], "any", false, false, false, 41), 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 41, $this->source); })()), "devise", [], "any", false, false, false, 41), "html", null, true);
        yield "</h3>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border rounded p-3 text-center\">
                                <p class=\"text-muted mb-1\">Currency</p>
                                <h3 class=\"text-primary mb-0\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 47, $this->source); })()), "devise", [], "any", false, false, false, 47), "html", null, true);
        yield "</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        <strong>Information:</strong> This wallet allows you to manage your finances in ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 54, $this->source); })()), "devise", [], "any", false, false, false, 54), "html", null, true);
        yield " currency.
                        You can use this wallet for tracking expenses, making investments, and managing your budget.
                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Back to Wallets
                        </a>
                        <div>
                            <a href=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-edit me-1\"></i>Edit
                            </a>
                            <form method=\"post\" action=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this wallet?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-outline-danger ms-2\">
                                    <i class=\"fas fa-trash me-1\"></i>Delete
                                </button>
                            </form>
                        </div>
                    </div>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "loan/wallet/show.html.twig";
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
        return array (  204 => 67,  200 => 66,  194 => 63,  187 => 59,  179 => 54,  169 => 47,  158 => 41,  148 => 34,  125 => 16,  121 => 15,  117 => 14,  113 => 13,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ wallet.pays }} Wallet - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">{{ wallet.pays }} Wallet</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_wallet_index') }}\">Budget Management</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_wallet_show', {'id': wallet.id}) }}\">{{ wallet.pays }}</a></li>
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
                    <div class=\"text-center mb-4\">
                        <div class=\"icon-box mb-3\">
                            <div class=\"icon icon-lg bg-primary-light rounded-circle mx-auto\">
                                <i class=\"fas fa-wallet fa-3x text-primary\"></i>
                            </div>
                        </div>
                        <h2 class=\"text-primary\">{{ wallet.pays }}</h2>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border rounded p-3 text-center\">
                                <p class=\"text-muted mb-1\">Balance</p>
                                <h3 class=\"text-success mb-0\">{{ wallet.solde|number_format(2) }} {{ wallet.devise }}</h3>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border rounded p-3 text-center\">
                                <p class=\"text-muted mb-1\">Currency</p>
                                <h3 class=\"text-primary mb-0\">{{ wallet.devise }}</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        <strong>Information:</strong> This wallet allows you to manage your finances in {{ wallet.devise }} currency.
                        You can use this wallet for tracking expenses, making investments, and managing your budget.
                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('app_wallet_index') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Back to Wallets
                        </a>
                        <div>
                            <a href=\"{{ path('app_wallet_edit', {'id': wallet.id}) }}\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-edit me-1\"></i>Edit
                            </a>
                            <form method=\"post\" action=\"{{ path('app_wallet_delete', {'id': wallet.id}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this wallet?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ wallet.id) }}\">
                                <button type=\"submit\" class=\"btn btn-outline-danger ms-2\">
                                    <i class=\"fas fa-trash me-1\"></i>Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "loan/wallet/show.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\wallet\\show.html.twig");
    }
}
