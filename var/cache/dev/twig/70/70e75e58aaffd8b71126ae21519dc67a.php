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

/* management/budget/step1.html.twig */
class __TwigTemplate_6a8e3019204a5cec22fbaea0a3530686 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/step1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/step1.html.twig"));

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

        yield "New Budget - Step 1 - Fin-Dinari";
        
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
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Create New Budget</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp;<a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index");
        yield "\" style=\"color: #26474E;\">Budgets</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; New Budget</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        ";
        // line 26
        yield "        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"d-flex align-items-center justify-content-center\">

                    ";
        // line 31
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto fw-bold text-white\"
                             style=\"width:50px; height:50px; background: #F27438; box-shadow: 0 4px 12px rgba(242,116,56,0.4);\">
                            <i class=\"fas fa-wallet\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #F27438;\">Wallet</p>
                    </div>

                    ";
        // line 40
        yield "                    <div style=\"height:3px; width:80px; background: #e0e0e0; margin: 0 8px;\"></div>

                    ";
        // line 43
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto fw-bold\"
                             style=\"width:50px; height:50px; background: #f5f5f5; color: #999;\">
                            <i class=\"fas fa-folder\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #999;\">Category</p>
                    </div>

                    ";
        // line 52
        yield "                    <div style=\"height:3px; width:80px; background: #e0e0e0; margin: 0 8px;\"></div>

                    ";
        // line 55
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto fw-bold\"
                             style=\"width:50px; height:50px; background: #f5f5f5; color: #999;\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #999;\">Amount</p>
                    </div>

                </div>
            </div>
        </div>

        ";
        // line 68
        yield "        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">

                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    ";
        // line 75
        yield "                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Step 1 of 3</p>
                                <h4 class=\"fw-bold mb-0\">Choose Your Wallet</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-wallet fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 90
        yield "                    <div class=\"card-body p-4\">
                        <p class=\"text-muted mb-4\">Select the wallet you want to create a budget for:</p>

                        <form method=\"post\" action=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step1");
        yield "\">
                            <div class=\"row\">
                                ";
        // line 95
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 95, $this->source); })()))) {
            // line 96
            yield "                                    <div class=\"col-12 text-center py-4\">
                                        <div class=\"rounded-4 p-4\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                                            <i class=\"fas fa-wallet fa-2x mb-3\" style=\"color: #F27438;\"></i>
                                            <h5 style=\"color: #26474E;\">No wallets found</h5>
                                            <p class=\"text-muted small\">Create a wallet first</p>
                                            <a href=\"";
            // line 101
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_new");
            yield "\" class=\"btn btn-sm\"
                                               style=\"background: #F27438; color: white; border-radius: 10px;\">
                                                <i class=\"fas fa-plus me-1\"></i>Create Wallet
                                            </a>
                                        </div>
                                    </div>
                                ";
        } else {
            // line 108
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
                // line 109
                yield "                                        <div class=\"col-md-6 mb-3\">
                                            <input type=\"radio\" name=\"wallet_id\"
                                                   id=\"wallet_";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 111), "html", null, true);
                yield "\"
                                                   value=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 112), "html", null, true);
                yield "\"
                                                   class=\"d-none wallet-radio\">
                                            <label for=\"wallet_";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 114), "html", null, true);
                yield "\"
                                                   class=\"wallet-option w-100 rounded-4 p-3 d-flex align-items-center gap-3\"
                                                   style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                     style=\"width:50px; height:50px; background: #F27438;\">
                                                    <i class=\"fas fa-wallet text-white\"></i>
                                                </div>
                                                <div>
                                                    <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "pays", [], "any", false, false, false, 122), "html", null, true);
                yield "</h6>
                                                    <p class=\"text-muted small mb-0\">
                                                        ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "solde", [], "any", false, false, false, 124), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 124), "html", null, true);
                yield "
                                                    </p>
                                                </div>
                                            </label>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['wallet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "                                ";
        }
        // line 131
        yield "                            </div>

                            <hr class=\"my-4\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index");
        yield "\"
                                   class=\"btn px-4\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\" class=\"btn px-4\"
                                        style=\"background: #F27438; color: white; border-radius: 10px;\">
                                    Next: Choose Category <i class=\"fas fa-arrow-right ms-1\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .wallet-radio:checked + .wallet-option {
        border-color: #F27438 !important;
        background: #fff3ee;
        box-shadow: 0 4px 12px rgba(242,116,56,0.2);
    }
    .wallet-option:hover {
        border-color: #F27438 !important;
        background: #fff8f5;
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
        return "management/budget/step1.html.twig";
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
        return array (  286 => 136,  279 => 131,  276 => 130,  262 => 124,  257 => 122,  246 => 114,  241 => 112,  237 => 111,  233 => 109,  228 => 108,  218 => 101,  211 => 96,  209 => 95,  204 => 93,  199 => 90,  183 => 75,  175 => 68,  161 => 55,  157 => 52,  147 => 43,  143 => 40,  133 => 31,  127 => 26,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Budget - Step 1 - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Create New Budget</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp;<a href=\"{{ path('app_budget_index') }}\" style=\"color: #26474E;\">Budgets</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; New Budget</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        {# Progress Bar #}
        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"d-flex align-items-center justify-content-center\">

                    {# Step 1 - Active #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto fw-bold text-white\"
                             style=\"width:50px; height:50px; background: #F27438; box-shadow: 0 4px 12px rgba(242,116,56,0.4);\">
                            <i class=\"fas fa-wallet\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #F27438;\">Wallet</p>
                    </div>

                    {# Line #}
                    <div style=\"height:3px; width:80px; background: #e0e0e0; margin: 0 8px;\"></div>

                    {# Step 2 - Inactive #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto fw-bold\"
                             style=\"width:50px; height:50px; background: #f5f5f5; color: #999;\">
                            <i class=\"fas fa-folder\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #999;\">Category</p>
                    </div>

                    {# Line #}
                    <div style=\"height:3px; width:80px; background: #e0e0e0; margin: 0 8px;\"></div>

                    {# Step 3 - Inactive #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto fw-bold\"
                             style=\"width:50px; height:50px; background: #f5f5f5; color: #999;\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #999;\">Amount</p>
                    </div>

                </div>
            </div>
        </div>

        {# Content #}
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">

                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    {# Card Header #}
                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Step 1 of 3</p>
                                <h4 class=\"fw-bold mb-0\">Choose Your Wallet</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-wallet fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    {# Card Body #}
                    <div class=\"card-body p-4\">
                        <p class=\"text-muted mb-4\">Select the wallet you want to create a budget for:</p>

                        <form method=\"post\" action=\"{{ path('app_budget_new_step1') }}\">
                            <div class=\"row\">
                                {% if wallets is empty %}
                                    <div class=\"col-12 text-center py-4\">
                                        <div class=\"rounded-4 p-4\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                                            <i class=\"fas fa-wallet fa-2x mb-3\" style=\"color: #F27438;\"></i>
                                            <h5 style=\"color: #26474E;\">No wallets found</h5>
                                            <p class=\"text-muted small\">Create a wallet first</p>
                                            <a href=\"{{ path('app_wallet_new') }}\" class=\"btn btn-sm\"
                                               style=\"background: #F27438; color: white; border-radius: 10px;\">
                                                <i class=\"fas fa-plus me-1\"></i>Create Wallet
                                            </a>
                                        </div>
                                    </div>
                                {% else %}
                                    {% for wallet in wallets %}
                                        <div class=\"col-md-6 mb-3\">
                                            <input type=\"radio\" name=\"wallet_id\"
                                                   id=\"wallet_{{ wallet.id }}\"
                                                   value=\"{{ wallet.id }}\"
                                                   class=\"d-none wallet-radio\">
                                            <label for=\"wallet_{{ wallet.id }}\"
                                                   class=\"wallet-option w-100 rounded-4 p-3 d-flex align-items-center gap-3\"
                                                   style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                     style=\"width:50px; height:50px; background: #F27438;\">
                                                    <i class=\"fas fa-wallet text-white\"></i>
                                                </div>
                                                <div>
                                                    <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">{{ wallet.pays }}</h6>
                                                    <p class=\"text-muted small mb-0\">
                                                        {{ wallet.solde|number_format(2) }} {{ wallet.devise }}
                                                    </p>
                                                </div>
                                            </label>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>

                            <hr class=\"my-4\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"{{ path('app_budget_index') }}\"
                                   class=\"btn px-4\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\" class=\"btn px-4\"
                                        style=\"background: #F27438; color: white; border-radius: 10px;\">
                                    Next: Choose Category <i class=\"fas fa-arrow-right ms-1\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .wallet-radio:checked + .wallet-option {
        border-color: #F27438 !important;
        background: #fff3ee;
        box-shadow: 0 4px 12px rgba(242,116,56,0.2);
    }
    .wallet-option:hover {
        border-color: #F27438 !important;
        background: #fff8f5;
    }
</style>

{% endblock %}", "management/budget/step1.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\budget\\step1.html.twig");
    }
}
