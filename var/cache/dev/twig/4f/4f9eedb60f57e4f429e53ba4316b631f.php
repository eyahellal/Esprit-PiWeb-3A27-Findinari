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

/* loan/investment/index.html.twig */
class __TwigTemplate_ab0b8137f843d83216a23795b7877e10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/investment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/investment/index.html.twig"));

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

        yield "My Investments - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\">My Investments</h2>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\">Loan Investment</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-lg-8\">
                <div class=\"section-title\">
                    <h1 class=\"text-primary\">📊 My Investment Portfolio</h1>
                    <p class=\"text-secondary\">Track all your loan investments and monitor your returns</p>
                </div>
            </div>
            <div class=\"col-lg-4 text-end\">
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i>Browse Obligations
                </a>
            </div>
        </div>

        <!-- Search and Sort Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-5 mx-auto\">
                <form method=\"get\" action=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\" class=\"d-flex gap-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by obligation name...\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    ";
        // line 44
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
            yield "\" class=\"btn btn-secondary\">Clear</a>
                    ";
        }
        // line 47
        yield "                </form>
            </div>
            <div class=\"col-lg-3\">
                <select class=\"form-select\" id=\"sortSelect\" onchange=\"sortInvestments()\">
                    <option value=\"name_asc\">Sort by Name ↑</option>
                    <option value=\"name_desc\">Sort by Name ↓</option>
                    <option value=\"amount_asc\">Sort by Amount ↑</option>
                    <option value=\"amount_desc\">Sort by Amount ↓</option>
                    <option value=\"date_asc\">Sort by Date ↑</option>
                    <option value=\"date_desc\">Sort by Date ↓</option>
                    <option value=\"status_active\">Status: Active first</option>
                    <option value=\"status_matured\">Status: Matured first</option>
                </select>
            </div>
        </div>

        <!-- Investments Grid -->
        <div class=\"row\" id=\"investmentsGrid\">
            ";
        // line 65
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["investments"]) || array_key_exists("investments", $context) ? $context["investments"] : (function () { throw new RuntimeError('Variable "investments" does not exist.', 65, $this->source); })()))) {
            // line 66
            yield "                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No investments found.
                        <a href=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
            yield "\">Browse obligations to invest</a>
                    </div>
                </div>
            ";
        } else {
            // line 73
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["investments"]) || array_key_exists("investments", $context) ? $context["investments"] : (function () { throw new RuntimeError('Variable "investments" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["investment"]) {
                // line 74
                yield "                    ";
                $context["currentDate"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 75
                yield "                    ";
                $context["isMatured"] = ((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 75, $this->source); })()) > CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "dateMaturite", [], "any", false, false, false, 75));
                // line 76
                yield "                    ";
                $context["obligation"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligations"]) || array_key_exists("obligations", $context) ? $context["obligations"] : (function () { throw new RuntimeError('Variable "obligations" does not exist.', 76, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "obligationId", [], "any", false, false, false, 76), [], "array", false, false, false, 76);
                // line 77
                yield "                    
                    <div class=\"col-lg-4 col-md-6 mb-4 investment-card\"
                         data-name=\"";
                // line 79
                yield (((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 79, $this->source); })()), "nom", [], "any", false, false, false, 79)), "html", null, true)) : (""));
                yield "\"
                         data-amount=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "montantInvesti", [], "any", false, false, false, 80), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "dateAchat", [], "any", false, false, false, 81), "Y-m-d"), "html", null, true);
                yield "\"
                         data-matured=\"";
                // line 82
                yield (((($tmp = (isset($context["isMatured"]) || array_key_exists("isMatured", $context) ? $context["isMatured"] : (function () { throw new RuntimeError('Variable "isMatured" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
                yield "\">
                        <div class=\"card h-100 shadow-sm border-success\">
                            <div class=\"card-body bg-white\">
                                <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                    <h4 class=\"card-title text-primary mb-0\">
                                        ";
                // line 87
                if ((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 88
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 88, $this->source); })()), "nom", [], "any", false, false, false, 88), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 90
                    yield "                                            Investment #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 90), "html", null, true);
                    yield "
                                        ";
                }
                // line 92
                yield "                                    </h4>
                                    ";
                // line 93
                if ((($tmp = (isset($context["isMatured"]) || array_key_exists("isMatured", $context) ? $context["isMatured"] : (function () { throw new RuntimeError('Variable "isMatured" does not exist.', 93, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 94
                    yield "                                        <span class=\"badge bg-success\">Matured</span>
                                    ";
                } else {
                    // line 96
                    yield "                                        <span class=\"badge bg-primary text-white\">Active</span>
                                    ";
                }
                // line 98
                yield "                                </div>
                                
                                <div class=\"mt-3\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-percent text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Interest Rate:</strong> 
                                        <span class=\"text-primary\">";
                // line 104
                if ((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 104, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 104, $this->source); })()), "tauxInteret", [], "any", false, false, false, 104), "html", null, true);
                    yield "%";
                } else {
                    yield "--";
                }
                yield "</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-money-bill-wave text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Amount:</strong> 
                                        <span class=\"text-success fw-bold\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "montantInvesti", [], "any", false, false, false, 109), 2), "html", null, true);
                yield " DT</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-alt text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Purchase Date:</strong> 
                                        <span class=\"text-primary\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "dateAchat", [], "any", false, false, false, 114), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-check text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Maturity Date:</strong> 
                                        <span class=\"text-primary\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "dateMaturite", [], "any", false, false, false, 119), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </p>
                                </div>
                                
                                <hr class=\"border-success\">
                                
                                <div class=\"d-flex justify-content-between\">
                                    <a href=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_show", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 126)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                    <a href=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_edit", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 127)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                    <form method=\"post\" action=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_delete", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 128)]), "html", null, true);
                yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 129))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-sm btn-outline-danger\">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['investment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "            ";
        }
        // line 138
        yield "        </div>
    </div>
</section>

<style>
    .card { border-radius: 12px; overflow: hidden; transition: transform 0.2s; }
    .card:hover { transform: translateY(-4px); }
    .border-success { border-color: #28a745 !important; }
    .text-primary { color: #2d6a4f !important; }
    .btn-outline-primary { color: #2d6a4f; border-color: #2d6a4f; }
    .btn-outline-primary:hover { background-color: #2d6a4f; border-color: #2d6a4f; color: white; }
    .btn-primary { background-color: #2d6a4f; border-color: #2d6a4f; }
    .btn-primary:hover { background-color: #1b4d3b; border-color: #1b4d3b; }
    .bg-tertiary { background-color: #e8f5e9 !important; }
    .badge.bg-primary { background-color: #2d6a4f !important; }
    .badge.bg-success { background-color: #28a745 !important; }
</style>

<script>
    function sortInvestments() {
        const sortValue = document.getElementById('sortSelect').value;
        const grid = document.getElementById('investmentsGrid');
        const cards = Array.from(document.querySelectorAll('.investment-card'));
        
        cards.sort((a, b) => {
            let aVal, bVal;
            
            switch(sortValue) {
                case 'name_asc':
                    aVal = a.getAttribute('data-name');
                    bVal = b.getAttribute('data-name');
                    return aVal.localeCompare(bVal);
                case 'name_desc':
                    aVal = a.getAttribute('data-name');
                    bVal = b.getAttribute('data-name');
                    return bVal.localeCompare(aVal);
                case 'amount_asc':
                    aVal = parseFloat(a.getAttribute('data-amount'));
                    bVal = parseFloat(b.getAttribute('data-amount'));
                    return aVal - bVal;
                case 'amount_desc':
                    aVal = parseFloat(a.getAttribute('data-amount'));
                    bVal = parseFloat(b.getAttribute('data-amount'));
                    return bVal - aVal;
                case 'date_asc':
                    aVal = a.getAttribute('data-date');
                    bVal = b.getAttribute('data-date');
                    return aVal.localeCompare(bVal);
                case 'date_desc':
                    aVal = a.getAttribute('data-date');
                    bVal = b.getAttribute('data-date');
                    return bVal.localeCompare(aVal);
                case 'status_active':
                    aVal = parseInt(a.getAttribute('data-matured'));
                    bVal = parseInt(b.getAttribute('data-matured'));
                    return aVal - bVal;
                case 'status_matured':
                    aVal = parseInt(a.getAttribute('data-matured'));
                    bVal = parseInt(b.getAttribute('data-matured'));
                    return bVal - aVal;
                default:
                    return 0;
            }
        });
        
        grid.innerHTML = '';
        cards.forEach(card => grid.appendChild(card));
    }
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
        return "loan/investment/index.html.twig";
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
        return array (  341 => 138,  338 => 137,  324 => 129,  320 => 128,  316 => 127,  312 => 126,  302 => 119,  294 => 114,  286 => 109,  273 => 104,  265 => 98,  261 => 96,  257 => 94,  255 => 93,  252 => 92,  246 => 90,  240 => 88,  238 => 87,  230 => 82,  226 => 81,  222 => 80,  218 => 79,  214 => 77,  211 => 76,  208 => 75,  205 => 74,  200 => 73,  193 => 69,  188 => 66,  186 => 65,  166 => 47,  160 => 45,  158 => 44,  153 => 42,  149 => 41,  137 => 32,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Investments - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">My Investments</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_investment_index') }}\">Loan Investment</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-lg-8\">
                <div class=\"section-title\">
                    <h1 class=\"text-primary\">📊 My Investment Portfolio</h1>
                    <p class=\"text-secondary\">Track all your loan investments and monitor your returns</p>
                </div>
            </div>
            <div class=\"col-lg-4 text-end\">
                <a href=\"{{ path('app_obligation_index') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i>Browse Obligations
                </a>
            </div>
        </div>

        <!-- Search and Sort Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-5 mx-auto\">
                <form method=\"get\" action=\"{{ path('app_investment_index') }}\" class=\"d-flex gap-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by obligation name...\" value=\"{{ search }}\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    {% if search %}
                        <a href=\"{{ path('app_investment_index') }}\" class=\"btn btn-secondary\">Clear</a>
                    {% endif %}
                </form>
            </div>
            <div class=\"col-lg-3\">
                <select class=\"form-select\" id=\"sortSelect\" onchange=\"sortInvestments()\">
                    <option value=\"name_asc\">Sort by Name ↑</option>
                    <option value=\"name_desc\">Sort by Name ↓</option>
                    <option value=\"amount_asc\">Sort by Amount ↑</option>
                    <option value=\"amount_desc\">Sort by Amount ↓</option>
                    <option value=\"date_asc\">Sort by Date ↑</option>
                    <option value=\"date_desc\">Sort by Date ↓</option>
                    <option value=\"status_active\">Status: Active first</option>
                    <option value=\"status_matured\">Status: Matured first</option>
                </select>
            </div>
        </div>

        <!-- Investments Grid -->
        <div class=\"row\" id=\"investmentsGrid\">
            {% if investments is empty %}
                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No investments found.
                        <a href=\"{{ path('app_obligation_index') }}\">Browse obligations to invest</a>
                    </div>
                </div>
            {% else %}
                {% for investment in investments %}
                    {% set currentDate = date() %}
                    {% set isMatured = currentDate > investment.dateMaturite %}
                    {% set obligation = obligations[investment.obligationId] %}
                    
                    <div class=\"col-lg-4 col-md-6 mb-4 investment-card\"
                         data-name=\"{{ obligation ? obligation.nom|lower : '' }}\"
                         data-amount=\"{{ investment.montantInvesti }}\"
                         data-date=\"{{ investment.dateAchat|date('Y-m-d') }}\"
                         data-matured=\"{{ isMatured ? 1 : 0 }}\">
                        <div class=\"card h-100 shadow-sm border-success\">
                            <div class=\"card-body bg-white\">
                                <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                    <h4 class=\"card-title text-primary mb-0\">
                                        {% if obligation %}
                                            {{ obligation.nom }}
                                        {% else %}
                                            Investment #{{ investment.idInvestissement }}
                                        {% endif %}
                                    </h4>
                                    {% if isMatured %}
                                        <span class=\"badge bg-success\">Matured</span>
                                    {% else %}
                                        <span class=\"badge bg-primary text-white\">Active</span>
                                    {% endif %}
                                </div>
                                
                                <div class=\"mt-3\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-percent text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Interest Rate:</strong> 
                                        <span class=\"text-primary\">{% if obligation %}{{ obligation.tauxInteret }}%{% else %}--{% endif %}</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-money-bill-wave text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Amount:</strong> 
                                        <span class=\"text-success fw-bold\">{{ investment.montantInvesti|number_format(2) }} DT</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-alt text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Purchase Date:</strong> 
                                        <span class=\"text-primary\">{{ investment.dateAchat|date('d/m/Y') }}</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-check text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Maturity Date:</strong> 
                                        <span class=\"text-primary\">{{ investment.dateMaturite|date('d/m/Y') }}</span>
                                    </p>
                                </div>
                                
                                <hr class=\"border-success\">
                                
                                <div class=\"d-flex justify-content-between\">
                                    <a href=\"{{ path('app_investment_show', {'idInvestissement': investment.idInvestissement}) }}\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                    <a href=\"{{ path('app_investment_edit', {'idInvestissement': investment.idInvestissement}) }}\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                    <form method=\"post\" action=\"{{ path('app_investment_delete', {'idInvestissement': investment.idInvestissement}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ investment.idInvestissement) }}\">
                                        <button class=\"btn btn-sm btn-outline-danger\">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
</section>

<style>
    .card { border-radius: 12px; overflow: hidden; transition: transform 0.2s; }
    .card:hover { transform: translateY(-4px); }
    .border-success { border-color: #28a745 !important; }
    .text-primary { color: #2d6a4f !important; }
    .btn-outline-primary { color: #2d6a4f; border-color: #2d6a4f; }
    .btn-outline-primary:hover { background-color: #2d6a4f; border-color: #2d6a4f; color: white; }
    .btn-primary { background-color: #2d6a4f; border-color: #2d6a4f; }
    .btn-primary:hover { background-color: #1b4d3b; border-color: #1b4d3b; }
    .bg-tertiary { background-color: #e8f5e9 !important; }
    .badge.bg-primary { background-color: #2d6a4f !important; }
    .badge.bg-success { background-color: #28a745 !important; }
</style>

<script>
    function sortInvestments() {
        const sortValue = document.getElementById('sortSelect').value;
        const grid = document.getElementById('investmentsGrid');
        const cards = Array.from(document.querySelectorAll('.investment-card'));
        
        cards.sort((a, b) => {
            let aVal, bVal;
            
            switch(sortValue) {
                case 'name_asc':
                    aVal = a.getAttribute('data-name');
                    bVal = b.getAttribute('data-name');
                    return aVal.localeCompare(bVal);
                case 'name_desc':
                    aVal = a.getAttribute('data-name');
                    bVal = b.getAttribute('data-name');
                    return bVal.localeCompare(aVal);
                case 'amount_asc':
                    aVal = parseFloat(a.getAttribute('data-amount'));
                    bVal = parseFloat(b.getAttribute('data-amount'));
                    return aVal - bVal;
                case 'amount_desc':
                    aVal = parseFloat(a.getAttribute('data-amount'));
                    bVal = parseFloat(b.getAttribute('data-amount'));
                    return bVal - aVal;
                case 'date_asc':
                    aVal = a.getAttribute('data-date');
                    bVal = b.getAttribute('data-date');
                    return aVal.localeCompare(bVal);
                case 'date_desc':
                    aVal = a.getAttribute('data-date');
                    bVal = b.getAttribute('data-date');
                    return bVal.localeCompare(aVal);
                case 'status_active':
                    aVal = parseInt(a.getAttribute('data-matured'));
                    bVal = parseInt(b.getAttribute('data-matured'));
                    return aVal - bVal;
                case 'status_matured':
                    aVal = parseInt(a.getAttribute('data-matured'));
                    bVal = parseInt(b.getAttribute('data-matured'));
                    return bVal - aVal;
                default:
                    return 0;
            }
        });
        
        grid.innerHTML = '';
        cards.forEach(card => grid.appendChild(card));
    }
</script>

{% endblock %}", "loan/investment/index.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\loan\\investment\\index.html.twig");
    }
}
