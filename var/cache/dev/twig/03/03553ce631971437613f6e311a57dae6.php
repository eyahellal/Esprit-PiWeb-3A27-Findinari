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
class __TwigTemplate_641e9f8ea84ada5dcdf697a5adeb8d2a extends Template
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
<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 11, $this->source); })()), "pays", [], "any", false, false, false, 11), "html", null, true);
        yield " Wallet</h2>
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
                    <li class=\"list-inline-item\">/ &nbsp; ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 16, $this->source); })()), "pays", [], "any", false, false, false, 16), "html", null, true);
        yield "</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">

                ";
        // line 29
        yield "                <div class=\"border-0 rounded-4 overflow-hidden\"
                     style=\"box-shadow: 0 8px 30px rgba(0,0,0,0.1);\">

                    ";
        // line 33
        yield "                    <div class=\"p-5 text-white text-center\"
                         style=\"background: #F27438;\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\"
                             style=\"width:80px; height:80px; background: rgba(255,255,255,0.2);\">
                            <i class=\"fas fa-wallet fa-2x\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 39, $this->source); })()), "pays", [], "any", false, false, false, 39), "html", null, true);
        yield "</h2>
                        <p class=\"opacity-75 mb-0\">Wallet Details</p>
                    </div>

                    ";
        // line 44
        yield "                    <div class=\"bg-white p-5\">

                        ";
        // line 47
        yield "                        <div class=\"row mb-4\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"rounded-4 p-4 text-center h-100\"
                                     style=\"background: #26474E;\">
                                    <p class=\"text-white opacity-75 small mb-2 text-uppercase fw-semibold\">
                                        <i class=\"fas fa-money-bill-wave me-1\"></i>Balance
                                    </p>
                                    <h3 class=\"fw-bold mb-0 text-white\">
                                        ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 55, $this->source); })()), "solde", [], "any", false, false, false, 55), 2), "html", null, true);
        yield "
                                        <span class=\"fs-5 opacity-75\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 56, $this->source); })()), "devise", [], "any", false, false, false, 56), "html", null, true);
        yield "</span>
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"rounded-4 p-4 text-center h-100\"
                                     style=\"background: #76CDCD;\">
                                    <p class=\"text-white opacity-75 small mb-2 text-uppercase fw-semibold\">
                                        <i class=\"fas fa-coins me-1\"></i>Currency
                                    </p>
                                    <h3 class=\"fw-bold mb-0 text-white\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 66, $this->source); })()), "devise", [], "any", false, false, false, 66), "html", null, true);
        yield "</h3>
                                </div>
                            </div>
                        </div>

                        ";
        // line 72
        yield "                        <div class=\"rounded-4 p-4 mb-4\"
                             style=\"background: #f0fafa; border-left: 4px solid #2CCED2;\">
                            <div class=\"d-flex align-items-start\">
                                <i class=\"fas fa-info-circle me-3 mt-1\" style=\"color: #2CCED2;\"></i>
                                <div>
                                    <strong style=\"color: #26474E;\">Information</strong>
                                    <p class=\"mb-0 text-muted small mt-1\">
                                        This wallet allows you to manage your finances in
                                        <strong>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 80, $this->source); })()), "devise", [], "any", false, false, false, 80), "html", null, true);
        yield "</strong> currency.
                                        Use it for tracking expenses, making investments,
                                        and managing your budget efficiently.
                                    </p>
                                </div>
                            </div>
                        </div>

                        ";
        // line 89
        yield "                        <div class=\"d-flex justify-content-between align-items-center mt-4\">
                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\" class=\"btn px-4\"
                               style=\"background: #f5f5f5; color: #26474E; border-radius: 12px;\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Back to Wallets
                            </a>
                            <div class=\"d-flex gap-2\">
                                <a href=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
        yield "\"
                                   class=\"btn px-4\"
                                   style=\"background: #76CDCD; color: white; border-radius: 12px;\">
                                    <i class=\"fas fa-edit me-2\"></i>Edit
                                </a>
                                <form method=\"post\" 
                                      action=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        yield "\"
                                      onsubmit=\"return confirm('Are you sure you want to delete this wallet?');\">
                                    <input type=\"hidden\" name=\"_token\" 
                                           value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104))), "html", null, true);
        yield "\">
                                    <button type=\"submit\" class=\"btn px-4\"
                                            style=\"background: #fde8e8; color: #c0392b; border-radius: 12px;\">
                                        <i class=\"fas fa-trash me-2\"></i>Delete
                                    </button>
                                </form>
                            </div>
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
        return array (  246 => 104,  240 => 101,  231 => 95,  223 => 90,  220 => 89,  209 => 80,  199 => 72,  191 => 66,  178 => 56,  174 => 55,  164 => 47,  160 => 44,  153 => 39,  145 => 33,  140 => 29,  125 => 16,  121 => 15,  117 => 14,  113 => 13,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ wallet.pays }} Wallet - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">{{ wallet.pays }} Wallet</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\" style=\"color: #26474E;\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_wallet_index') }}\" style=\"color: #26474E;\">Budget Management</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; {{ wallet.pays }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">

                {# Main Card #}
                <div class=\"border-0 rounded-4 overflow-hidden\"
                     style=\"box-shadow: 0 8px 30px rgba(0,0,0,0.1);\">

                    {# Card Header #}
                    <div class=\"p-5 text-white text-center\"
                         style=\"background: #F27438;\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\"
                             style=\"width:80px; height:80px; background: rgba(255,255,255,0.2);\">
                            <i class=\"fas fa-wallet fa-2x\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\">{{ wallet.pays }}</h2>
                        <p class=\"opacity-75 mb-0\">Wallet Details</p>
                    </div>

                    {# Card Body #}
                    <div class=\"bg-white p-5\">

                        {# Balance and Currency #}
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"rounded-4 p-4 text-center h-100\"
                                     style=\"background: #26474E;\">
                                    <p class=\"text-white opacity-75 small mb-2 text-uppercase fw-semibold\">
                                        <i class=\"fas fa-money-bill-wave me-1\"></i>Balance
                                    </p>
                                    <h3 class=\"fw-bold mb-0 text-white\">
                                        {{ wallet.solde|number_format(2) }}
                                        <span class=\"fs-5 opacity-75\">{{ wallet.devise }}</span>
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"rounded-4 p-4 text-center h-100\"
                                     style=\"background: #76CDCD;\">
                                    <p class=\"text-white opacity-75 small mb-2 text-uppercase fw-semibold\">
                                        <i class=\"fas fa-coins me-1\"></i>Currency
                                    </p>
                                    <h3 class=\"fw-bold mb-0 text-white\">{{ wallet.devise }}</h3>
                                </div>
                            </div>
                        </div>

                        {# Info Alert #}
                        <div class=\"rounded-4 p-4 mb-4\"
                             style=\"background: #f0fafa; border-left: 4px solid #2CCED2;\">
                            <div class=\"d-flex align-items-start\">
                                <i class=\"fas fa-info-circle me-3 mt-1\" style=\"color: #2CCED2;\"></i>
                                <div>
                                    <strong style=\"color: #26474E;\">Information</strong>
                                    <p class=\"mb-0 text-muted small mt-1\">
                                        This wallet allows you to manage your finances in
                                        <strong>{{ wallet.devise }}</strong> currency.
                                        Use it for tracking expenses, making investments,
                                        and managing your budget efficiently.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {# Action Buttons #}
                        <div class=\"d-flex justify-content-between align-items-center mt-4\">
                            <a href=\"{{ path('app_wallet_index') }}\" class=\"btn px-4\"
                               style=\"background: #f5f5f5; color: #26474E; border-radius: 12px;\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Back to Wallets
                            </a>
                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_wallet_edit', {'id': wallet.id}) }}\"
                                   class=\"btn px-4\"
                                   style=\"background: #76CDCD; color: white; border-radius: 12px;\">
                                    <i class=\"fas fa-edit me-2\"></i>Edit
                                </a>
                                <form method=\"post\" 
                                      action=\"{{ path('app_wallet_delete', {'id': wallet.id}) }}\"
                                      onsubmit=\"return confirm('Are you sure you want to delete this wallet?');\">
                                    <input type=\"hidden\" name=\"_token\" 
                                           value=\"{{ csrf_token('delete' ~ wallet.id) }}\">
                                    <button type=\"submit\" class=\"btn px-4\"
                                            style=\"background: #fde8e8; color: #c0392b; border-radius: 12px;\">
                                        <i class=\"fas fa-trash me-2\"></i>Delete
                                    </button>
                                </form>
                            </div>
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
