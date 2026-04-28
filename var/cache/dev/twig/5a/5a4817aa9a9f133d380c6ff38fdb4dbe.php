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
class __TwigTemplate_79b9f39f3b068fa914e69bd7147c363c extends Template
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
                <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_pdf_upload");
        yield "\" class=\"btn btn-outline-primary ms-2\">
                    <i class=\"fas fa-file-pdf me-1\"></i>Upload PDF
                </a>
            </div>
        </div>

        <!-- Search and Sort Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-5 mx-auto\">
                <form method=\"get\" action=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
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
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
            yield "\" class=\"btn btn-secondary\">Clear</a>
                    ";
        }
        // line 50
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
        // line 68
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 68, $this->source); })())) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 68, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 68) == 0))) {
            // line 69
            yield "                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No investments found.
                        <a href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
            yield "\">Browse obligations to invest</a>
                    </div>
                </div>
            ";
        } else {
            // line 76
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["investment"]) {
                // line 77
                yield "                    ";
                $context["currentDate"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 78
                yield "                    ";
                $context["isMatured"] = ((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 78, $this->source); })()) > CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "dateMaturite", [], "any", false, false, false, 78));
                // line 79
                yield "                    ";
                $context["obligation"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligations"]) || array_key_exists("obligations", $context) ? $context["obligations"] : (function () { throw new RuntimeError('Variable "obligations" does not exist.', 79, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "obligationId", [], "any", false, false, false, 79), [], "array", false, false, false, 79);
                // line 80
                yield "                    
                    <div class=\"col-lg-4 col-md-6 mb-4 investment-card\"
                         data-name=\"";
                // line 82
                yield (((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 82, $this->source); })()), "nom", [], "any", false, false, false, 82)), "html", null, true)) : (""));
                yield "\"
                         data-amount=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "montantInvesti", [], "any", false, false, false, 83), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "dateAchat", [], "any", false, false, false, 84), "Y-m-d"), "html", null, true);
                yield "\"
                         data-matured=\"";
                // line 85
                yield (((($tmp = (isset($context["isMatured"]) || array_key_exists("isMatured", $context) ? $context["isMatured"] : (function () { throw new RuntimeError('Variable "isMatured" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
                yield "\">
                        <div class=\"card h-100 shadow-sm border-success\">
                            <div class=\"card-body bg-white\">
                                <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                    <h4 class=\"card-title text-primary mb-0\">
                                        ";
                // line 90
                if ((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 91
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 91, $this->source); })()), "nom", [], "any", false, false, false, 91), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 93
                    yield "                                            Investment #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 93), "html", null, true);
                    yield "
                                        ";
                }
                // line 95
                yield "                                    </h4>
                                    ";
                // line 96
                if ((($tmp = (isset($context["isMatured"]) || array_key_exists("isMatured", $context) ? $context["isMatured"] : (function () { throw new RuntimeError('Variable "isMatured" does not exist.', 96, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 97
                    yield "                                        <span class=\"badge bg-success\">Matured</span>
                                    ";
                } else {
                    // line 99
                    yield "                                        <span class=\"badge bg-primary text-white\">Active</span>
                                    ";
                }
                // line 101
                yield "                                </div>
                                
                                <div class=\"mt-3\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-percent text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Interest Rate:</strong> 
                                        <span class=\"text-primary\">";
                // line 107
                if ((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 107, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 107, $this->source); })()), "tauxInteret", [], "any", false, false, false, 107), "html", null, true);
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
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "montantInvesti", [], "any", false, false, false, 112), 2), "html", null, true);
                yield " DT</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-alt text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Purchase Date:</strong> 
                                        <span class=\"text-primary\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "dateAchat", [], "any", false, false, false, 117), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-check text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Maturity Date:</strong> 
                                        <span class=\"text-primary\">";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "dateMaturite", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </p>
                                </div>
                                
                                <hr class=\"border-success\">
                                
                                <div class=\"d-flex justify-content-between\">
                                    <a href=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_show", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 129)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                    <a href=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_edit", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                    <form method=\"post\" action=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_delete", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 131)]), "html", null, true);
                yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["investment"], "idInvestissement", [], "any", false, false, false, 132))), "html", null, true);
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
            // line 140
            yield "            ";
        }
        // line 141
        yield "        </div>
        
        <!-- Pagination -->
        ";
        // line 144
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 144, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 144, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 144) > 3))) {
            // line 145
            yield "            <div class=\"row mt-4\">
                <div class=\"col-12\">
                    ";
            // line 147
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 147, $this->source); })()));
            yield "
                </div>
            </div>
        ";
        }
        // line 151
        yield "    </div>
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
    
    /* Pagination Styles */
    .pagination {
        gap: 6px;
        margin: 0;
    }
    
    .pagination .page-item .page-link {
        color: #2d6a4f;
        background-color: white;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 8px 14px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    
    .pagination .page-item .page-link:hover {
        background-color: #e8f5e9;
        border-color: #2d6a4f;
        color: #1b4d3b;
        transform: translateY(-1px);
    }
    
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
        border-color: #2d6a4f;
        color: white;
        box-shadow: 0 2px 8px rgba(45, 106, 79, 0.3);
    }
    
    .pagination .page-item.disabled .page-link {
        color: #adb5bd;
        background-color: #f8f9fa;
        cursor: not-allowed;
    }
    
    /* Pagination container */
    .pagination-container {
        padding: 20px 0;
        border-top: 1px solid #e8ecef;
        margin-top: 20px;
    }
    
    .pagination-info .badge {
        font-size: 13px;
        font-weight: 500;
        padding: 8px 16px;
        background: #f8f9fa;
        border: 1px solid #e8ecef;
        border-radius: 30px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .pagination .page-item .page-link {
            padding: 6px 10px;
            font-size: 12px;
        }
    }
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
    
    // Check for maturity alerts when viewing investments page
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(checkMaturityAlerts, 300);
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
        return array (  365 => 151,  358 => 147,  354 => 145,  352 => 144,  347 => 141,  344 => 140,  330 => 132,  326 => 131,  322 => 130,  318 => 129,  308 => 122,  300 => 117,  292 => 112,  279 => 107,  271 => 101,  267 => 99,  263 => 97,  261 => 96,  258 => 95,  252 => 93,  246 => 91,  244 => 90,  236 => 85,  232 => 84,  228 => 83,  224 => 82,  220 => 80,  217 => 79,  214 => 78,  211 => 77,  206 => 76,  199 => 72,  194 => 69,  192 => 68,  172 => 50,  166 => 48,  164 => 47,  159 => 45,  155 => 44,  143 => 35,  137 => 32,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <a href=\"{{ path('app_investment_pdf_upload') }}\" class=\"btn btn-outline-primary ms-2\">
                    <i class=\"fas fa-file-pdf me-1\"></i>Upload PDF
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
            {% if pagination is empty or pagination.getTotalItemCount == 0 %}
                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No investments found.
                        <a href=\"{{ path('app_obligation_index') }}\">Browse obligations to invest</a>
                    </div>
                </div>
            {% else %}
                {% for investment in pagination %}
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
        
        <!-- Pagination -->
        {% if pagination is not empty and pagination.getTotalItemCount > 3 %}
            <div class=\"row mt-4\">
                <div class=\"col-12\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        {% endif %}
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
    
    /* Pagination Styles */
    .pagination {
        gap: 6px;
        margin: 0;
    }
    
    .pagination .page-item .page-link {
        color: #2d6a4f;
        background-color: white;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 8px 14px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    
    .pagination .page-item .page-link:hover {
        background-color: #e8f5e9;
        border-color: #2d6a4f;
        color: #1b4d3b;
        transform: translateY(-1px);
    }
    
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
        border-color: #2d6a4f;
        color: white;
        box-shadow: 0 2px 8px rgba(45, 106, 79, 0.3);
    }
    
    .pagination .page-item.disabled .page-link {
        color: #adb5bd;
        background-color: #f8f9fa;
        cursor: not-allowed;
    }
    
    /* Pagination container */
    .pagination-container {
        padding: 20px 0;
        border-top: 1px solid #e8ecef;
        margin-top: 20px;
    }
    
    .pagination-info .badge {
        font-size: 13px;
        font-weight: 500;
        padding: 8px 16px;
        background: #f8f9fa;
        border: 1px solid #e8ecef;
        border-radius: 30px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .pagination .page-item .page-link {
            padding: 6px 10px;
            font-size: 12px;
        }
    }
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
    
    // Check for maturity alerts when viewing investments page
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(checkMaturityAlerts, 300);
    });
</script>

{% endblock %}", "loan/investment/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\investment\\index.html.twig");
    }
}
