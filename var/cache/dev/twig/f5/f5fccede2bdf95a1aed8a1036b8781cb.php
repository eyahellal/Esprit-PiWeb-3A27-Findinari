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

/* loan/obligation/index.html.twig */
class __TwigTemplate_bbba6ab199a53e3ecaacaad4d79bef26 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/obligation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/obligation/index.html.twig"));

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

        yield "Loan Obligations - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\">Loan Obligations</h2>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
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
                    <h1 class=\"text-primary\">📋 Available Loan Obligations</h1>
                    <p class=\"text-secondary\">Browse through available loan types and start your investment journey</p>
                </div>
            </div>
            <div class=\"col-lg-4 text-end\">
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_new");
        yield "\" class=\"btn btn-primary me-2\">
                    <i class=\"fas fa-plus me-1\"></i>Create
                </a>
                <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"fas fa-chart-line me-1\"></i>My Investments
                </a>
            </div>
        </div>

        <!-- Search and Sort Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-5 mx-auto\">
                <form method=\"get\" action=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
        yield "\" class=\"d-flex gap-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by obligation name...\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    ";
        // line 47
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
            yield "\" class=\"btn btn-secondary\">Clear</a>
                    ";
        }
        // line 50
        yield "                </form>
            </div>
            <div class=\"col-lg-3\">
                <select class=\"form-select\" id=\"sortSelect\" onchange=\"sortObligations()\">
                    <option value=\"name_asc\">Sort by Name ↑</option>
                    <option value=\"name_desc\">Sort by Name ↓</option>
                    <option value=\"rate_asc\">Sort by Interest Rate ↑</option>
                    <option value=\"rate_desc\">Sort by Interest Rate ↓</option>
                    <option value=\"duration_asc\">Sort by Duration ↑</option>
                    <option value=\"duration_desc\">Sort by Duration ↓</option>
                </select>
            </div>
        </div>

        <!-- Obligations Grid -->
        <div class=\"row\" id=\"obligationsGrid\">
            ";
        // line 66
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["obligations"]) || array_key_exists("obligations", $context) ? $context["obligations"] : (function () { throw new RuntimeError('Variable "obligations" does not exist.', 66, $this->source); })()))) {
            // line 67
            yield "                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No obligations found.
                        <a href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_new");
            yield "\">Create your first obligation</a>
                    </div>
                </div>
            ";
        } else {
            // line 74
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["obligations"]) || array_key_exists("obligations", $context) ? $context["obligations"] : (function () { throw new RuntimeError('Variable "obligations" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obligation"]) {
                // line 75
                yield "                    <div class=\"col-lg-4 col-md-6 mb-4 obligation-card\"
                         data-name=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "nom", [], "any", false, false, false, 76)), "html", null, true);
                yield "\"
                         data-rate=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "tauxInteret", [], "any", false, false, false, 77), "html", null, true);
                yield "\"
                         data-duration=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "duree", [], "any", false, false, false, 78), "html", null, true);
                yield "\">
                        <div class=\"card h-100 shadow-sm border-success\">
                            <div class=\"card-body bg-white\">
                                <h4 class=\"card-title text-primary\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "nom", [], "any", false, false, false, 81), "html", null, true);
                yield "</h4>
                                <div class=\"mt-3\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-percent text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Interest Rate:</strong> 
                                        <span class=\"text-success fw-bold\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "tauxInteret", [], "any", false, false, false, 86), "html", null, true);
                yield "%</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-alt text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Duration:</strong> 
                                        <span class=\"text-primary\">";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "duree", [], "any", false, false, false, 91), "html", null, true);
                yield " months</span>
                                    </p>
                                </div>
                                <hr class=\"border-success\">
                                <div class=\"d-flex justify-content-between\">
                                    <a href=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_show", ["idObligation" => CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                    <a href=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_edit", ["idObligation" => CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                    <a href=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_new", ["idObligation" => CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 98)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\">Invest</a>
                                    <form method=\"post\" action=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_delete", ["idObligation" => CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 99)]), "html", null, true);
                yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 100))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['obligation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "            ";
        }
        // line 109
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
    .btn-success { background-color: #28a745; border-color: #28a745; }
    .bg-tertiary { background-color: #e8f5e9 !important; }
</style>

<script>
    function sortObligations() {
        const sortValue = document.getElementById('sortSelect').value;
        const grid = document.getElementById('obligationsGrid');
        const cards = Array.from(document.querySelectorAll('.obligation-card'));
        
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
                case 'rate_asc':
                    aVal = parseFloat(a.getAttribute('data-rate'));
                    bVal = parseFloat(b.getAttribute('data-rate'));
                    return aVal - bVal;
                case 'rate_desc':
                    aVal = parseFloat(a.getAttribute('data-rate'));
                    bVal = parseFloat(b.getAttribute('data-rate'));
                    return bVal - aVal;
                case 'duration_asc':
                    aVal = parseInt(a.getAttribute('data-duration'));
                    bVal = parseInt(b.getAttribute('data-duration'));
                    return aVal - bVal;
                case 'duration_desc':
                    aVal = parseInt(a.getAttribute('data-duration'));
                    bVal = parseInt(b.getAttribute('data-duration'));
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
        return "loan/obligation/index.html.twig";
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
        return array (  283 => 109,  280 => 108,  266 => 100,  262 => 99,  258 => 98,  254 => 97,  250 => 96,  242 => 91,  234 => 86,  226 => 81,  220 => 78,  216 => 77,  212 => 76,  209 => 75,  204 => 74,  197 => 70,  192 => 67,  190 => 66,  172 => 50,  166 => 48,  164 => 47,  159 => 45,  155 => 44,  143 => 35,  137 => 32,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Loan Obligations - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Loan Obligations</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_obligation_index') }}\">Loan Investment</a></li>
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
                    <h1 class=\"text-primary\">📋 Available Loan Obligations</h1>
                    <p class=\"text-secondary\">Browse through available loan types and start your investment journey</p>
                </div>
            </div>
            <div class=\"col-lg-4 text-end\">
                <a href=\"{{ path('app_obligation_new') }}\" class=\"btn btn-primary me-2\">
                    <i class=\"fas fa-plus me-1\"></i>Create
                </a>
                <a href=\"{{ path('app_investment_index') }}\" class=\"btn btn-outline-primary\">
                    <i class=\"fas fa-chart-line me-1\"></i>My Investments
                </a>
            </div>
        </div>

        <!-- Search and Sort Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-5 mx-auto\">
                <form method=\"get\" action=\"{{ path('app_obligation_index') }}\" class=\"d-flex gap-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by obligation name...\" value=\"{{ search }}\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    {% if search %}
                        <a href=\"{{ path('app_obligation_index') }}\" class=\"btn btn-secondary\">Clear</a>
                    {% endif %}
                </form>
            </div>
            <div class=\"col-lg-3\">
                <select class=\"form-select\" id=\"sortSelect\" onchange=\"sortObligations()\">
                    <option value=\"name_asc\">Sort by Name ↑</option>
                    <option value=\"name_desc\">Sort by Name ↓</option>
                    <option value=\"rate_asc\">Sort by Interest Rate ↑</option>
                    <option value=\"rate_desc\">Sort by Interest Rate ↓</option>
                    <option value=\"duration_asc\">Sort by Duration ↑</option>
                    <option value=\"duration_desc\">Sort by Duration ↓</option>
                </select>
            </div>
        </div>

        <!-- Obligations Grid -->
        <div class=\"row\" id=\"obligationsGrid\">
            {% if obligations is empty %}
                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No obligations found.
                        <a href=\"{{ path('app_obligation_new') }}\">Create your first obligation</a>
                    </div>
                </div>
            {% else %}
                {% for obligation in obligations %}
                    <div class=\"col-lg-4 col-md-6 mb-4 obligation-card\"
                         data-name=\"{{ obligation.nom|lower }}\"
                         data-rate=\"{{ obligation.tauxInteret }}\"
                         data-duration=\"{{ obligation.duree }}\">
                        <div class=\"card h-100 shadow-sm border-success\">
                            <div class=\"card-body bg-white\">
                                <h4 class=\"card-title text-primary\">{{ obligation.nom }}</h4>
                                <div class=\"mt-3\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-percent text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Interest Rate:</strong> 
                                        <span class=\"text-success fw-bold\">{{ obligation.tauxInteret }}%</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-alt text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Duration:</strong> 
                                        <span class=\"text-primary\">{{ obligation.duree }} months</span>
                                    </p>
                                </div>
                                <hr class=\"border-success\">
                                <div class=\"d-flex justify-content-between\">
                                    <a href=\"{{ path('app_obligation_show', {'idObligation': obligation.idObligation}) }}\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                    <a href=\"{{ path('app_obligation_edit', {'idObligation': obligation.idObligation}) }}\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                    <a href=\"{{ path('app_investment_new', {'idObligation': obligation.idObligation}) }}\" class=\"btn btn-sm btn-success\">Invest</a>
                                    <form method=\"post\" action=\"{{ path('app_obligation_delete', {'idObligation': obligation.idObligation}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ obligation.idObligation) }}\">
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
    .btn-success { background-color: #28a745; border-color: #28a745; }
    .bg-tertiary { background-color: #e8f5e9 !important; }
</style>

<script>
    function sortObligations() {
        const sortValue = document.getElementById('sortSelect').value;
        const grid = document.getElementById('obligationsGrid');
        const cards = Array.from(document.querySelectorAll('.obligation-card'));
        
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
                case 'rate_asc':
                    aVal = parseFloat(a.getAttribute('data-rate'));
                    bVal = parseFloat(b.getAttribute('data-rate'));
                    return aVal - bVal;
                case 'rate_desc':
                    aVal = parseFloat(a.getAttribute('data-rate'));
                    bVal = parseFloat(b.getAttribute('data-rate'));
                    return bVal - aVal;
                case 'duration_asc':
                    aVal = parseInt(a.getAttribute('data-duration'));
                    bVal = parseInt(b.getAttribute('data-duration'));
                    return aVal - bVal;
                case 'duration_desc':
                    aVal = parseInt(a.getAttribute('data-duration'));
                    bVal = parseInt(b.getAttribute('data-duration'));
                    return bVal - aVal;
                default:
                    return 0;
            }
        });
        
        grid.innerHTML = '';
        cards.forEach(card => grid.appendChild(card));
    }
</script>

{% endblock %}", "loan/obligation/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\obligation\\index.html.twig");
    }
}
