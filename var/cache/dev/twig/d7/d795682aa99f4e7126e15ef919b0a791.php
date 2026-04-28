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

/* management/budget/step3.html.twig */
class __TwigTemplate_2aef19acca14dd7e947fddcaa2cd6716 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/step3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/step3.html.twig"));

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

        yield "New Budget - Step 3 - Fin-Dinari";
        
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
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        ";
        // line 21
        yield "        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"d-flex align-items-center justify-content-center\">

                    ";
        // line 26
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Wallet</p>
                    </div>

                    ";
        // line 35
        yield "                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>

                    ";
        // line 38
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Category</p>
                    </div>

                    ";
        // line 47
        yield "                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>

                    ";
        // line 50
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #F27438; box-shadow: 0 4px 12px rgba(242,116,56,0.4);\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #F27438;\">Amount</p>
                    </div>

                </div>
            </div>
        </div>

        ";
        // line 63
        yield "        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">
                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    ";
        // line 69
        yield "                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: ";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "color", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 70, $this->source); })()), "color", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 70, $this->source); })()), "color", [], "any", false, false, false, 70), "html", null, true)) : ("#F27438"));
        yield ";\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Step 3 of 3</p>
                                <h4 class=\"fw-bold mb-0\">Set Budget Amount</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas ";
        // line 78
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "icon", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 78, $this->source); })()), "icon", [], "any", false, false, false, 78)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 78, $this->source); })()), "icon", [], "any", false, false, false, 78), "html", null, true)) : ("fa-folder"));
        yield " fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 84
        yield "                    <div class=\"card-body p-4\">

                        ";
        // line 87
        yield "                        <div class=\"rounded-4 p-3 mb-4 d-flex gap-3\"
                             style=\"background: #f8f9fa;\">
                            <div class=\"flex-fill text-center p-2 rounded-3\"
                                 style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Wallet</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas fa-wallet me-1\" style=\"color: #F27438;\"></i>
                                    ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 94, $this->source); })()), "pays", [], "any", false, false, false, 94), "html", null, true);
        yield "
                                </p>
                                <p class=\"text-muted small mb-0\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 96, $this->source); })()), "devise", [], "any", false, false, false, 96), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"flex-fill text-center p-2 rounded-3\"
                                 style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Category</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas ";
        // line 102
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "icon", [], "any", true, true, false, 102) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 102, $this->source); })()), "icon", [], "any", false, false, false, 102)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 102, $this->source); })()), "icon", [], "any", false, false, false, 102), "html", null, true)) : ("fa-folder"));
        yield " me-1\"
                                       style=\"color: ";
        // line 103
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "color", [], "any", true, true, false, 103) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 103, $this->source); })()), "color", [], "any", false, false, false, 103)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 103, $this->source); })()), "color", [], "any", false, false, false, 103), "html", null, true)) : ("#F27438"));
        yield ";\"></i>
                                    ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 104, $this->source); })()), "nom", [], "any", false, false, false, 104), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>

                        <form method=\"post\" action=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step3");
        yield "\">

                            ";
        // line 112
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Maximum Amount <span class=\"text-muted fw-normal\">(";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 114, $this->source); })()), "devise", [], "any", false, false, false, 114), "html", null, true);
        yield ")</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-money-bill-wave\"></i>
                                    </span>
                                    <input type=\"number\" name=\"montantMax\"
                                           class=\"form-control\"
                                           placeholder=\"Enter maximum budget amount\"
                                           step=\"0.01\" min=\"0.01\" required
                                           style=\"border-color: #76CDCD;\">
                                </div>
                                <small class=\"text-muted\">The maximum amount you want to spend in this category</small>
                            </div>

                            ";
        // line 131
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Duration <span class=\"text-muted fw-normal\">(days)</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-clock\"></i>
                                    </span>
                                    <input type=\"number\" name=\"dureeBudget\"
                                           class=\"form-control\"
                                           placeholder=\"e.g. 30 for monthly budget\"
                                           min=\"1\" required
                                           style=\"border-color: #76CDCD;\">
                                </div>
                                <small class=\"text-muted\">How many days this budget should last</small>
                            </div>

                            ";
        // line 150
        yield "                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Start Date</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-calendar\"></i>
                                    </span>
                                    <input type=\"date\" name=\"dateBudget\"
                                           class=\"form-control\"
                                           value=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\"
                                           required
                                           style=\"border-color: #76CDCD;\">
                                </div>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step2");
        yield "\"
                                   class=\"btn px-4\"
                                   style=\"background: #f5f5f5; color: #26474E; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Back
                                </a>
                                <button type=\"submit\" class=\"btn px-4 create-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Create Budget
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
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
    .create-btn:hover {
        background: #F27438 !important;
        color: white !important;
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
        return "management/budget/step3.html.twig";
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
        return array (  307 => 168,  295 => 159,  284 => 150,  264 => 131,  245 => 114,  241 => 112,  236 => 109,  228 => 104,  224 => 103,  220 => 102,  211 => 96,  206 => 94,  197 => 87,  193 => 84,  185 => 78,  174 => 70,  171 => 69,  164 => 63,  150 => 50,  146 => 47,  136 => 38,  132 => 35,  122 => 26,  116 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Budget - Step 3 - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Create New Budget</h2>
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

                    {# Step 1 - Done #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Wallet</p>
                    </div>

                    {# Line - done #}
                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>

                    {# Step 2 - Done #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Category</p>
                    </div>

                    {# Line - done #}
                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>

                    {# Step 3 - Active #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #F27438; box-shadow: 0 4px 12px rgba(242,116,56,0.4);\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #F27438;\">Amount</p>
                    </div>

                </div>
            </div>
        </div>

        {# Content #}
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">
                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    {# Card Header — uses category color #}
                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: {{ categorie.color ?? '#F27438' }};\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Step 3 of 3</p>
                                <h4 class=\"fw-bold mb-0\">Set Budget Amount</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas {{ categorie.icon ?? 'fa-folder' }} fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    {# Card Body #}
                    <div class=\"card-body p-4\">

                        {# Summary #}
                        <div class=\"rounded-4 p-3 mb-4 d-flex gap-3\"
                             style=\"background: #f8f9fa;\">
                            <div class=\"flex-fill text-center p-2 rounded-3\"
                                 style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Wallet</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas fa-wallet me-1\" style=\"color: #F27438;\"></i>
                                    {{ wallet.pays }}
                                </p>
                                <p class=\"text-muted small mb-0\">{{ wallet.devise }}</p>
                            </div>
                            <div class=\"flex-fill text-center p-2 rounded-3\"
                                 style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Category</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas {{ categorie.icon ?? 'fa-folder' }} me-1\"
                                       style=\"color: {{ categorie.color ?? '#F27438' }};\"></i>
                                    {{ categorie.nom }}
                                </p>
                            </div>
                        </div>

                        <form method=\"post\" action=\"{{ path('app_budget_new_step3') }}\">

                            {# Max Amount #}
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Maximum Amount <span class=\"text-muted fw-normal\">({{ wallet.devise }})</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-money-bill-wave\"></i>
                                    </span>
                                    <input type=\"number\" name=\"montantMax\"
                                           class=\"form-control\"
                                           placeholder=\"Enter maximum budget amount\"
                                           step=\"0.01\" min=\"0.01\" required
                                           style=\"border-color: #76CDCD;\">
                                </div>
                                <small class=\"text-muted\">The maximum amount you want to spend in this category</small>
                            </div>

                            {# Duration #}
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Duration <span class=\"text-muted fw-normal\">(days)</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-clock\"></i>
                                    </span>
                                    <input type=\"number\" name=\"dureeBudget\"
                                           class=\"form-control\"
                                           placeholder=\"e.g. 30 for monthly budget\"
                                           min=\"1\" required
                                           style=\"border-color: #76CDCD;\">
                                </div>
                                <small class=\"text-muted\">How many days this budget should last</small>
                            </div>

                            {# Start Date #}
                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Start Date</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-calendar\"></i>
                                    </span>
                                    <input type=\"date\" name=\"dateBudget\"
                                           class=\"form-control\"
                                           value=\"{{ \"now\"|date(\"Y-m-d\") }}\"
                                           required
                                           style=\"border-color: #76CDCD;\">
                                </div>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"{{ path('app_budget_new_step2') }}\"
                                   class=\"btn px-4\"
                                   style=\"background: #f5f5f5; color: #26474E; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Back
                                </a>
                                <button type=\"submit\" class=\"btn px-4 create-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Create Budget
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
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
    .create-btn:hover {
        background: #F27438 !important;
        color: white !important;
    }
</style>

{% endblock %}", "management/budget/step3.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\management\\budget\\step3.html.twig");
    }
}
