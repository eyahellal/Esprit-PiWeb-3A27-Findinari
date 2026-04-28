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
class __TwigTemplate_1a24a045ad0228d2b0f5df81fcc456ee extends Template
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
                <div class=\"d-flex justify-content-end gap-2 mb-2\">
                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i>Create
                    </a>
                    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-chart-line me-1\"></i>My Investments
                    </a>
                </div>
                <div>
                    <button type=\"button\" class=\"btn btn-outline-primary w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#recommendationModal\">
                        <i class=\"fas fa-robot me-1\"></i>AI Recommendations
                    </button>
                </div>
            </div>
        </div>

        <!-- Search and Sort Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-5 mx-auto\">
                <form method=\"get\" action=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
        yield "\" class=\"d-flex gap-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by obligation name...\" value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    ";
        // line 54
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
            yield "\" class=\"btn btn-secondary\">Clear</a>
                    ";
        }
        // line 57
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
        // line 73
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 73, $this->source); })())) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 73, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 73) == 0))) {
            // line 74
            yield "                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No obligations found.
                        <a href=\"";
            // line 77
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_new");
            yield "\">Create your first obligation</a>
                    </div>
                </div>
            ";
        } else {
            // line 81
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obligation"]) {
                // line 82
                yield "                    <div class=\"col-lg-4 col-md-6 mb-4 obligation-card\"
                         data-name=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "nom", [], "any", false, false, false, 83)), "html", null, true);
                yield "\"
                         data-rate=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "tauxInteret", [], "any", false, false, false, 84), "html", null, true);
                yield "\"
                         data-duration=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "duree", [], "any", false, false, false, 85), "html", null, true);
                yield "\">
                        <div class=\"card h-100 shadow-sm border-success\">
                            <div class=\"card-body bg-white\">
                                <h4 class=\"card-title text-primary\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "nom", [], "any", false, false, false, 88), "html", null, true);
                yield "</h4>
                                <div class=\"mt-3\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-percent text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Interest Rate:</strong> 
                                        <span class=\"text-success fw-bold\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "tauxInteret", [], "any", false, false, false, 93), "html", null, true);
                yield "%</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-calendar-alt text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Duration:</strong> 
                                        <span class=\"text-primary\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "duree", [], "any", false, false, false, 98), "html", null, true);
                yield " months</span>
                                    </p>
                                </div>
                                <hr class=\"border-success\">
                                <div class=\"d-flex justify-content-between\">
                                    <a href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_show", ["idObligation" => CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 103)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                    <a href=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_edit", ["idObligation" => CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 104)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                    <a href=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_new", ["idObligation" => CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\">Invest</a>
                                    <form method=\"post\" action=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_delete", ["idObligation" => CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 106)]), "html", null, true);
                yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 107))), "html", null, true);
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
            // line 115
            yield "            ";
        }
        // line 116
        yield "        </div>
        
        <!-- Pagination -->
        ";
        // line 119
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 119, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 119, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 119) > 6))) {
            // line 120
            yield "            <div class=\"row mt-4\">
                <div class=\"col-12\">
                    ";
            // line 122
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 122, $this->source); })()));
            yield "
                </div>
            </div>
        ";
        }
        // line 126
        yield "    </div>
</section>

<!-- AI Recommendation Modal -->
<div class=\"modal fade\" id=\"recommendationModal\" tabindex=\"-1\" aria-labelledby=\"recommendationModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%); color: white;\">
                <h5 class=\"modal-title\" id=\"recommendationModalLabel\">
                    <i class=\"fas fa-robot me-2\"></i>AI Obligation Recommendations
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\" id=\"recommendationBody\">
                <div class=\"text-center py-5\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Loading...</span>
                    </div>
                    <p class=\"mt-3 text-muted\">AI is generating recommendations for you...</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

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
    
    /* Recommendation Modal Styles */
    .rec-card {
        border: 1px solid #e0e8e0;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 15px;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .rec-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-color: #2d6a4f;
    }
    .rec-card.selected {
        background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
        border-color: #2d6a4f;
        border-width: 2px;
    }
    .rec-radio {
        width: 20px;
        height: 20px;
        margin-right: 15px;
        accent-color: #2d6a4f;
    }
    .rec-name {
        font-size: 18px;
        font-weight: 700;
        color: #2d6a4f;
        margin-bottom: 5px;
    }
    .rec-rate {
        font-size: 24px;
        font-weight: 800;
        color: #28a745;
    }
    .rec-duration {
        color: #6c757d;
    }
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
    
    let selectedRecommendation = null;
    
    document.getElementById('recommendationModal').addEventListener('show.bs.modal', function() {
        loadRecommendations();
    });
    
    async function loadRecommendations() {
        const body = document.getElementById('recommendationBody');
        body.innerHTML = `
            <div class=\"text-center py-5\">
                <div class=\"spinner-border text-primary\" role=\"status\">
                    <span class=\"visually-hidden\">Loading...</span>
                </div>
                <p class=\"mt-3 text-muted\">AI is generating personalized recommendations for you...</p>
            </div>
        `;
        
        try {
            // UPDATED URL - Removed /obligation from the path
            const response = await fetch('/loan/obligation/api/recommendations');
            const data = await response.json();
            
            if (data.recommendations && data.recommendations.length > 0) {
                displayRecommendations(data.recommendations);
            } else {
                body.innerHTML = `
                    <div class=\"alert alert-warning text-center\">
                        <i class=\"fas fa-exclamation-triangle fa-2x mb-2 d-block\"></i>
                        <p>Unable to fetch AI recommendations. Please try again later.</p>
                    </div>
                `;
            }
        } catch (error) {
            console.error('Error loading recommendations:', error);
            body.innerHTML = `
                <div class=\"alert alert-danger text-center\">
                    <i class=\"fas fa-times-circle fa-2x mb-2 d-block\"></i>
                    <p>Error loading recommendations. Please try again.</p>
                    <button class=\"btn btn-primary mt-2\" onclick=\"loadRecommendations()\">
                        <i class=\"fas fa-sync-alt me-1\"></i>Try Again
                    </button>
                </div>
            `;
        }
    }
    
    function displayRecommendations(recommendations) {
        const body = document.getElementById('recommendationBody');
        let html = `
            <p class=\"text-muted mb-3\">
                <i class=\"fas fa-robot me-1\"></i> 
                Our AI has analyzed market trends and generated these recommendations for you:
            </p>
            <div class=\"recommendations-list\">
        `;
        
        recommendations.forEach((rec, index) => {
            html += `
                <div class=\"rec-card\" onclick=\"selectRec(\${index})\" data-index=\"\${index}\">
                    <div class=\"d-flex align-items-start\">
                        <input type=\"radio\" name=\"recommendation\" class=\"rec-radio\" value=\"\${index}\" id=\"rec_\${index}\">
                        <div class=\"flex-grow-1\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <div class=\"rec-name\">\${escapeHtml(rec.name)}</div>
                                    <div class=\"mt-2\">
                                        <span class=\"rec-rate\">\${rec.rate}%</span>
                                        <span class=\"text-muted ms-2\">interest rate</span>
                                    </div>
                                    <div class=\"rec-duration mt-1\">
                                        <i class=\"fas fa-calendar-alt me-1\"></i> \${rec.duration} months
                                    </div>
                                </div>
                                <div class=\"text-end\">
                                    <span class=\"badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill\">
                                        <i class=\"fas fa-chart-line me-1\"></i>Recommended
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        });
        
        html += `
            </div>
            <div class=\"mt-4\">
                <button type=\"button\" class=\"btn btn-primary w-100\" onclick=\"addSelectedRecommendation()\" id=\"addRecBtn\" disabled>
                    <i class=\"fas fa-plus-circle me-2\"></i>Add Selected Obligation
                </button>
            </div>
        `;
        
        body.innerHTML = html;
        
        document.querySelectorAll('input[name=\"recommendation\"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const addBtn = document.getElementById('addRecBtn');
                if (addBtn) {
                    addBtn.disabled = false;
                }
                selectedRecommendation = recommendations[parseInt(this.value)];
                
                document.querySelectorAll('.rec-card').forEach(card => {
                    card.classList.remove('selected');
                });
                const card = document.querySelector(`.rec-card[data-index=\"\${this.value}\"]`);
                if (card) card.classList.add('selected');
            });
        });
    }
    
    function selectRec(index) {
        const radio = document.getElementById(`rec_\${index}`);
        if (radio) {
            radio.click();
        }
    }
    
    async function addSelectedRecommendation() {
        if (!selectedRecommendation) {
            alert('Please select an obligation to add');
            return;
        }
        
        const addBtn = document.getElementById('addRecBtn');
        addBtn.disabled = true;
        addBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Adding...';
        
        try {
            // UPDATED URL - Removed /obligation from the path
            const response = await fetch('/loan/obligation/api/recommendation/add', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    name: selectedRecommendation.name,
                    rate: selectedRecommendation.rate,
                    duration: selectedRecommendation.duration
                })
            });
            
            const data = await response.json();
            
            if (data.success) {
                const modal = bootstrap.Modal.getInstance(document.getElementById('recommendationModal'));
                modal.hide();
                alert(`✅ \"\${selectedRecommendation.name}\" has been added to your obligations!`);
                location.reload();
            } else {
                alert('Error adding obligation. Please try again.');
                addBtn.disabled = false;
                addBtn.innerHTML = '<i class=\"fas fa-plus-circle me-2\"></i>Add Selected Obligation';
            }
        } catch (error) {
            console.error('Error adding recommendation:', error);
            alert('Error adding obligation. Please try again.');
            addBtn.disabled = false;
            addBtn.innerHTML = '<i class=\"fas fa-plus-circle me-2\"></i>Add Selected Obligation';
        }
    }
    
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
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
        return array (  308 => 126,  301 => 122,  297 => 120,  295 => 119,  290 => 116,  287 => 115,  273 => 107,  269 => 106,  265 => 105,  261 => 104,  257 => 103,  249 => 98,  241 => 93,  233 => 88,  227 => 85,  223 => 84,  219 => 83,  216 => 82,  211 => 81,  204 => 77,  199 => 74,  197 => 73,  179 => 57,  173 => 55,  171 => 54,  166 => 52,  162 => 51,  144 => 36,  138 => 33,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <div class=\"d-flex justify-content-end gap-2 mb-2\">
                    <a href=\"{{ path('app_obligation_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i>Create
                    </a>
                    <a href=\"{{ path('app_investment_index') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-chart-line me-1\"></i>My Investments
                    </a>
                </div>
                <div>
                    <button type=\"button\" class=\"btn btn-outline-primary w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#recommendationModal\">
                        <i class=\"fas fa-robot me-1\"></i>AI Recommendations
                    </button>
                </div>
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
            {% if pagination is empty or pagination.getTotalItemCount == 0 %}
                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No obligations found.
                        <a href=\"{{ path('app_obligation_new') }}\">Create your first obligation</a>
                    </div>
                </div>
            {% else %}
                {% for obligation in pagination %}
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
        
        <!-- Pagination -->
        {% if pagination is not empty and pagination.getTotalItemCount > 6 %}
            <div class=\"row mt-4\">
                <div class=\"col-12\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        {% endif %}
    </div>
</section>

<!-- AI Recommendation Modal -->
<div class=\"modal fade\" id=\"recommendationModal\" tabindex=\"-1\" aria-labelledby=\"recommendationModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%); color: white;\">
                <h5 class=\"modal-title\" id=\"recommendationModalLabel\">
                    <i class=\"fas fa-robot me-2\"></i>AI Obligation Recommendations
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\" id=\"recommendationBody\">
                <div class=\"text-center py-5\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Loading...</span>
                    </div>
                    <p class=\"mt-3 text-muted\">AI is generating recommendations for you...</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

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
    
    /* Recommendation Modal Styles */
    .rec-card {
        border: 1px solid #e0e8e0;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 15px;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .rec-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-color: #2d6a4f;
    }
    .rec-card.selected {
        background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
        border-color: #2d6a4f;
        border-width: 2px;
    }
    .rec-radio {
        width: 20px;
        height: 20px;
        margin-right: 15px;
        accent-color: #2d6a4f;
    }
    .rec-name {
        font-size: 18px;
        font-weight: 700;
        color: #2d6a4f;
        margin-bottom: 5px;
    }
    .rec-rate {
        font-size: 24px;
        font-weight: 800;
        color: #28a745;
    }
    .rec-duration {
        color: #6c757d;
    }
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
    
    let selectedRecommendation = null;
    
    document.getElementById('recommendationModal').addEventListener('show.bs.modal', function() {
        loadRecommendations();
    });
    
    async function loadRecommendations() {
        const body = document.getElementById('recommendationBody');
        body.innerHTML = `
            <div class=\"text-center py-5\">
                <div class=\"spinner-border text-primary\" role=\"status\">
                    <span class=\"visually-hidden\">Loading...</span>
                </div>
                <p class=\"mt-3 text-muted\">AI is generating personalized recommendations for you...</p>
            </div>
        `;
        
        try {
            // UPDATED URL - Removed /obligation from the path
            const response = await fetch('/loan/obligation/api/recommendations');
            const data = await response.json();
            
            if (data.recommendations && data.recommendations.length > 0) {
                displayRecommendations(data.recommendations);
            } else {
                body.innerHTML = `
                    <div class=\"alert alert-warning text-center\">
                        <i class=\"fas fa-exclamation-triangle fa-2x mb-2 d-block\"></i>
                        <p>Unable to fetch AI recommendations. Please try again later.</p>
                    </div>
                `;
            }
        } catch (error) {
            console.error('Error loading recommendations:', error);
            body.innerHTML = `
                <div class=\"alert alert-danger text-center\">
                    <i class=\"fas fa-times-circle fa-2x mb-2 d-block\"></i>
                    <p>Error loading recommendations. Please try again.</p>
                    <button class=\"btn btn-primary mt-2\" onclick=\"loadRecommendations()\">
                        <i class=\"fas fa-sync-alt me-1\"></i>Try Again
                    </button>
                </div>
            `;
        }
    }
    
    function displayRecommendations(recommendations) {
        const body = document.getElementById('recommendationBody');
        let html = `
            <p class=\"text-muted mb-3\">
                <i class=\"fas fa-robot me-1\"></i> 
                Our AI has analyzed market trends and generated these recommendations for you:
            </p>
            <div class=\"recommendations-list\">
        `;
        
        recommendations.forEach((rec, index) => {
            html += `
                <div class=\"rec-card\" onclick=\"selectRec(\${index})\" data-index=\"\${index}\">
                    <div class=\"d-flex align-items-start\">
                        <input type=\"radio\" name=\"recommendation\" class=\"rec-radio\" value=\"\${index}\" id=\"rec_\${index}\">
                        <div class=\"flex-grow-1\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <div class=\"rec-name\">\${escapeHtml(rec.name)}</div>
                                    <div class=\"mt-2\">
                                        <span class=\"rec-rate\">\${rec.rate}%</span>
                                        <span class=\"text-muted ms-2\">interest rate</span>
                                    </div>
                                    <div class=\"rec-duration mt-1\">
                                        <i class=\"fas fa-calendar-alt me-1\"></i> \${rec.duration} months
                                    </div>
                                </div>
                                <div class=\"text-end\">
                                    <span class=\"badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill\">
                                        <i class=\"fas fa-chart-line me-1\"></i>Recommended
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        });
        
        html += `
            </div>
            <div class=\"mt-4\">
                <button type=\"button\" class=\"btn btn-primary w-100\" onclick=\"addSelectedRecommendation()\" id=\"addRecBtn\" disabled>
                    <i class=\"fas fa-plus-circle me-2\"></i>Add Selected Obligation
                </button>
            </div>
        `;
        
        body.innerHTML = html;
        
        document.querySelectorAll('input[name=\"recommendation\"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const addBtn = document.getElementById('addRecBtn');
                if (addBtn) {
                    addBtn.disabled = false;
                }
                selectedRecommendation = recommendations[parseInt(this.value)];
                
                document.querySelectorAll('.rec-card').forEach(card => {
                    card.classList.remove('selected');
                });
                const card = document.querySelector(`.rec-card[data-index=\"\${this.value}\"]`);
                if (card) card.classList.add('selected');
            });
        });
    }
    
    function selectRec(index) {
        const radio = document.getElementById(`rec_\${index}`);
        if (radio) {
            radio.click();
        }
    }
    
    async function addSelectedRecommendation() {
        if (!selectedRecommendation) {
            alert('Please select an obligation to add');
            return;
        }
        
        const addBtn = document.getElementById('addRecBtn');
        addBtn.disabled = true;
        addBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Adding...';
        
        try {
            // UPDATED URL - Removed /obligation from the path
            const response = await fetch('/loan/obligation/api/recommendation/add', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    name: selectedRecommendation.name,
                    rate: selectedRecommendation.rate,
                    duration: selectedRecommendation.duration
                })
            });
            
            const data = await response.json();
            
            if (data.success) {
                const modal = bootstrap.Modal.getInstance(document.getElementById('recommendationModal'));
                modal.hide();
                alert(`✅ \"\${selectedRecommendation.name}\" has been added to your obligations!`);
                location.reload();
            } else {
                alert('Error adding obligation. Please try again.');
                addBtn.disabled = false;
                addBtn.innerHTML = '<i class=\"fas fa-plus-circle me-2\"></i>Add Selected Obligation';
            }
        } catch (error) {
            console.error('Error adding recommendation:', error);
            alert('Error adding obligation. Please try again.');
            addBtn.disabled = false;
            addBtn.innerHTML = '<i class=\"fas fa-plus-circle me-2\"></i>Add Selected Obligation';
        }
    }
    
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
</script>

{% endblock %}", "loan/obligation/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\obligation\\index.html.twig");
    }
}
