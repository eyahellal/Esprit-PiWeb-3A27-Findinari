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

/* loan/wallet/index.html.twig */
class __TwigTemplate_7c1928c6ebb56155bf309e7a7f35d932 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "management/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/index.html.twig"));

        // line 5
        $context["active_tab"] = "wallet";
        // line 1
        $this->parent = $this->load("management/dashboard.html.twig", 1);
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

        yield "My Wallets - Fin-Dinari";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "
<turbo-frame id=\"content-frame\">

    ";
        // line 12
        yield "    <div class=\"row mb-4 align-items-center\">
        <div class=\"col-lg-8\">
            <h1 class=\"fw-bold mb-1\" style=\"color: #2d6a4f;\">
                <i class=\"fas fa-wallet me-2\"></i>My Wallets
            </h1>
            <p class=\"text-muted mb-0\">Manage your wallets and track your balances across different currencies</p>
        </div>
        <div class=\"col-lg-4 text-end\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_new");
        yield "\" class=\"btn btn-lg px-4\" 
               style=\"background: linear-gradient(135deg, #2d6a4f, #52b788); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(45,106,79,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Wallet
            </a>
        </div>
    </div>

    ";
        // line 28
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(45,106,79,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Wallets</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 35, $this->source); })())), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-wallet fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background:#76CDCD; box-shadow: 0 4px 20px rgba(30,58,95,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Currencies</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 50, $this->source); })())), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-coins fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2CCED2; box-shadow: 0 4px 20px rgba(106,5,114,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Countries</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 65, $this->source); })())), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-globe fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 77
        yield "    <div class=\"row mb-4\">
        <div class=\"col-lg-6\">
           <form method=\"get\" action=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\"
      data-turbo-frame=\"content-frame\"
      class=\"d-flex gap-2\">
                <div class=\"input-group\">
                    <span class=\"input-group-text border-0 bg-white\">
                        <i class=\"fas fa-search text-muted\"></i>
                    </span>
                    <input type=\"text\" name=\"search\" class=\"form-control border-0 shadow-sm\"
                           placeholder=\"Search by country or currency...\"
                           value=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 88, $this->source); })()), "html", null, true);
        yield "\"
                           style=\"border-radius: 0 12px 12px 0;\">
                </div>
                <button type=\"submit\" class=\"btn px-4\"
                        style=\"background: #F9968B; color: white; border-radius: 12px;\">
                    Search
                </button>
                ";
        // line 95
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 95, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
            yield "\" class=\"btn btn-outline-secondary\"
                       style=\"border-radius: 12px;\">Clear</a>
                ";
        }
        // line 99
        yield "            </form>
        </div>
    </div>

    ";
        // line 104
        yield "    <div class=\"row\" id=\"walletsGrid\">
        ";
        // line 105
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 105, $this->source); })()))) {
            // line 106
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #52b788;\">
                    <i class=\"fas fa-wallet fa-3x mb-3\" style=\"color: #52b788;\"></i>
                    <h4 style=\"color: #2d6a4f;\">No wallets found</h4>
                    <p class=\"text-muted\">Start by creating your first wallet</p>
                    <a href=\"";
            // line 111
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_new");
            yield "\" class=\"btn mt-2\"
                       style=\"background: #2d6a4f; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Create Wallet
                    </a>
                </div>
            </div>
        ";
        } else {
            // line 118
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
                // line 119
                yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4 wallet-card\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;\">

                        ";
                // line 124
                yield "                        <div class=\"rounded-top-4 p-4 text-white\"
                             style=\"background: #F27438;\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Wallet</p>
                                    <h4 class=\"fw-bold mb-0\">";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "pays", [], "any", false, false, false, 129), "html", null, true);
                yield "</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas fa-wallet fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        ";
                // line 139
                yield "                        <div class=\"card-body p-4\">
                            <div class=\"mb-3\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Balance</p>
                                <h3 class=\"fw-bold mb-0\" style=\"color: #2d6a4f;\">
                                    ";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "solde", [], "any", false, false, false, 143), 2), "html", null, true);
                yield "
                                    <span class=\"fs-5 text-muted\">";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 144), "html", null, true);
                yield "</span>
                                </h3>
                            </div>

                            <div class=\"d-flex align-items-center gap-2 mb-3\">
                                <span class=\"badge rounded-pill px-3 py-2\"
                                      style=\"background: #e8f5e9; color: #2d6a4f;\">
                                    <i class=\"fas fa-coins me-1\"></i>";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 151), "html", null, true);
                yield "
                                </span>
                                <span class=\"badge rounded-pill px-3 py-2\"
                                      style=\"background: #e3f2fd; color: #1e3a5f;\">
                                    <i class=\"fas fa-globe me-1\"></i>";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "pays", [], "any", false, false, false, 155), "html", null, true);
                yield "
                                </span>
                            </div>

                            <hr class=\"my-3\">

                            ";
                // line 162
                yield "                            <div class=\"d-flex gap-2\">
                                <a href=\"";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 163)]), "html", null, true);
                yield "\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-eye me-1\"></i>View
                                </a>
                                <a href=\"";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                yield "\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-edit me-1\"></i>Edit
                                </a>
                                <form method=\"post\" action=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\"
                                      onsubmit=\"return confirm('Are you sure you want to delete this wallet?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 175))), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-sm\"
                                            style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['wallet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            yield "        ";
        }
        // line 187
        yield "    </div>

</turbo-frame>

<style>
    .wallet-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px #F27438 !important;
    }
    .rounded-top-4 {
        border-radius: 1rem 1rem 0 0 !important;
    }
    .rounded-4 {
        border-radius: 1rem !important;
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
        return "loan/wallet/index.html.twig";
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
        return array (  360 => 187,  357 => 186,  340 => 175,  335 => 173,  327 => 168,  319 => 163,  316 => 162,  307 => 155,  300 => 151,  290 => 144,  286 => 143,  280 => 139,  268 => 129,  261 => 124,  255 => 119,  250 => 118,  240 => 111,  233 => 106,  231 => 105,  228 => 104,  222 => 99,  215 => 96,  213 => 95,  203 => 88,  191 => 79,  187 => 77,  173 => 65,  155 => 50,  137 => 35,  128 => 28,  118 => 20,  108 => 12,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'management/dashboard.html.twig' %}

{% block title %}My Wallets - Fin-Dinari{% endblock %}

{% set active_tab = 'wallet' %}

{% block content %}

<turbo-frame id=\"content-frame\">

    {# Header #}
    <div class=\"row mb-4 align-items-center\">
        <div class=\"col-lg-8\">
            <h1 class=\"fw-bold mb-1\" style=\"color: #2d6a4f;\">
                <i class=\"fas fa-wallet me-2\"></i>My Wallets
            </h1>
            <p class=\"text-muted mb-0\">Manage your wallets and track your balances across different currencies</p>
        </div>
        <div class=\"col-lg-4 text-end\">
            <a href=\"{{ path('app_wallet_new') }}\" class=\"btn btn-lg px-4\" 
               style=\"background: linear-gradient(135deg, #2d6a4f, #52b788); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(45,106,79,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Wallet
            </a>
        </div>
    </div>

    {# Stats Bar #}
    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(45,106,79,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Wallets</p>
                        <h2 class=\"fw-bold mb-0\">{{ wallets|length }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-wallet fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background:#76CDCD; box-shadow: 0 4px 20px rgba(30,58,95,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Currencies</p>
                        <h2 class=\"fw-bold mb-0\">{{ wallets|length }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-coins fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2CCED2; box-shadow: 0 4px 20px rgba(106,5,114,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Countries</p>
                        <h2 class=\"fw-bold mb-0\">{{ wallets|length }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-globe fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Search Bar #}
    <div class=\"row mb-4\">
        <div class=\"col-lg-6\">
           <form method=\"get\" action=\"{{ path('app_wallet_index') }}\"
      data-turbo-frame=\"content-frame\"
      class=\"d-flex gap-2\">
                <div class=\"input-group\">
                    <span class=\"input-group-text border-0 bg-white\">
                        <i class=\"fas fa-search text-muted\"></i>
                    </span>
                    <input type=\"text\" name=\"search\" class=\"form-control border-0 shadow-sm\"
                           placeholder=\"Search by country or currency...\"
                           value=\"{{ search }}\"
                           style=\"border-radius: 0 12px 12px 0;\">
                </div>
                <button type=\"submit\" class=\"btn px-4\"
                        style=\"background: #F9968B; color: white; border-radius: 12px;\">
                    Search
                </button>
                {% if search %}
                    <a href=\"{{ path('app_wallet_index') }}\" class=\"btn btn-outline-secondary\"
                       style=\"border-radius: 12px;\">Clear</a>
                {% endif %}
            </form>
        </div>
    </div>

    {# Wallets Grid #}
    <div class=\"row\" id=\"walletsGrid\">
        {% if wallets is empty %}
            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #52b788;\">
                    <i class=\"fas fa-wallet fa-3x mb-3\" style=\"color: #52b788;\"></i>
                    <h4 style=\"color: #2d6a4f;\">No wallets found</h4>
                    <p class=\"text-muted\">Start by creating your first wallet</p>
                    <a href=\"{{ path('app_wallet_new') }}\" class=\"btn mt-2\"
                       style=\"background: #2d6a4f; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Create Wallet
                    </a>
                </div>
            </div>
        {% else %}
            {% for wallet in wallets %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4 wallet-card\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;\">

                        {# Card Header with gradient #}
                        <div class=\"rounded-top-4 p-4 text-white\"
                             style=\"background: #F27438;\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Wallet</p>
                                    <h4 class=\"fw-bold mb-0\">{{ wallet.pays }}</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas fa-wallet fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        {# Card Body #}
                        <div class=\"card-body p-4\">
                            <div class=\"mb-3\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Balance</p>
                                <h3 class=\"fw-bold mb-0\" style=\"color: #2d6a4f;\">
                                    {{ wallet.solde|number_format(2) }}
                                    <span class=\"fs-5 text-muted\">{{ wallet.devise }}</span>
                                </h3>
                            </div>

                            <div class=\"d-flex align-items-center gap-2 mb-3\">
                                <span class=\"badge rounded-pill px-3 py-2\"
                                      style=\"background: #e8f5e9; color: #2d6a4f;\">
                                    <i class=\"fas fa-coins me-1\"></i>{{ wallet.devise }}
                                </span>
                                <span class=\"badge rounded-pill px-3 py-2\"
                                      style=\"background: #e3f2fd; color: #1e3a5f;\">
                                    <i class=\"fas fa-globe me-1\"></i>{{ wallet.pays }}
                                </span>
                            </div>

                            <hr class=\"my-3\">

                            {# Actions #}
                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_wallet_show', {'id': wallet.id}) }}\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-eye me-1\"></i>View
                                </a>
                                <a href=\"{{ path('app_wallet_edit', {'id': wallet.id}) }}\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-edit me-1\"></i>Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('app_wallet_delete', {'id': wallet.id}) }}\"
                                      onsubmit=\"return confirm('Are you sure you want to delete this wallet?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ wallet.id) }}\">
                                    <button class=\"btn btn-sm\"
                                            style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>

</turbo-frame>

<style>
    .wallet-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px #F27438 !important;
    }
    .rounded-top-4 {
        border-radius: 1rem 1rem 0 0 !important;
    }
    .rounded-4 {
        border-radius: 1rem !important;
    }
</style>

{% endblock %}", "loan/wallet/index.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\loan\\wallet\\index.html.twig");
    }
}
