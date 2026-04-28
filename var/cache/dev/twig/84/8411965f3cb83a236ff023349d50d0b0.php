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
class __TwigTemplate_b90d4cf5c97ebf518d163c91c2be1a11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/wallet/index.html.twig"));

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

        yield "My Wallets - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\">My Wallets</h2>
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
                    <h1 class=\"text-primary\">💰 My Wallets</h1>
                    <p class=\"text-secondary\">Manage your wallets and track your balances across different currencies</p>
                </div>
            </div>
            <div class=\"col-lg-4 text-end\">
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i>Create Wallet
                </a>
            </div>
        </div>

        <!-- Search and Sort Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-5 mx-auto\">
                <form method=\"get\" action=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\" class=\"d-flex gap-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by country or currency...\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    ";
        // line 44
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
            yield "\" class=\"btn btn-secondary\">Clear</a>
                    ";
        }
        // line 47
        yield "                </form>
            </div>
            <div class=\"col-lg-3\">
                <select class=\"form-select\" id=\"sortSelect\" onchange=\"sortWallets()\">
                    <option value=\"country_asc\">Sort by Country ↑</option>
                    <option value=\"country_desc\">Sort by Country ↓</option>
                    <option value=\"balance_asc\">Sort by Balance ↑</option>
                    <option value=\"balance_desc\">Sort by Balance ↓</option>
                    <option value=\"currency_asc\">Sort by Currency ↑</option>
                    <option value=\"currency_desc\">Sort by Currency ↓</option>
                </select>
            </div>
        </div>

        <!-- Wallets Grid -->
        <div class=\"row\" id=\"walletsGrid\">
            ";
        // line 63
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 63, $this->source); })()))) {
            // line 64
            yield "                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No wallets found.
                        <a href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_new");
            yield "\">Create your first wallet</a>
                    </div>
                </div>
            ";
        } else {
            // line 71
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
                // line 72
                yield "                    <div class=\"col-lg-4 col-md-6 mb-4 wallet-card\" 
                         data-country=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "pays", [], "any", false, false, false, 73)), "html", null, true);
                yield "\"
                         data-balance=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "solde", [], "any", false, false, false, 74), "html", null, true);
                yield "\"
                         data-currency=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 75)), "html", null, true);
                yield "\">
                        <div class=\"card h-100 shadow-sm border-success\">
                            <div class=\"card-body bg-white\">
                                <h4 class=\"card-title text-primary\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "pays", [], "any", false, false, false, 78), "html", null, true);
                yield "</h4>
                                <div class=\"mt-3\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-money-bill-wave text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Balance:</strong> 
                                        <span class=\"text-success fw-bold\">";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "solde", [], "any", false, false, false, 83), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 83), "html", null, true);
                yield "</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Currency:</strong> 
                                        <span class=\"text-primary\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 88), "html", null, true);
                yield "</span>
                                    </p>
                                </div>
                                <hr class=\"border-success\">
                                <div class=\"d-flex justify-content-between\">
                                    <a href=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                    <a href=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                    <form method=\"post\" action=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 96))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['wallet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "            ";
        }
        // line 105
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
</style>

<script>
    function sortWallets() {
        const sortValue = document.getElementById('sortSelect').value;
        const grid = document.getElementById('walletsGrid');
        const cards = Array.from(document.querySelectorAll('.wallet-card'));
        
        cards.sort((a, b) => {
            let aVal, bVal;
            
            switch(sortValue) {
                case 'country_asc':
                    aVal = a.getAttribute('data-country');
                    bVal = b.getAttribute('data-country');
                    return aVal.localeCompare(bVal);
                case 'country_desc':
                    aVal = a.getAttribute('data-country');
                    bVal = b.getAttribute('data-country');
                    return bVal.localeCompare(aVal);
                case 'balance_asc':
                    aVal = parseFloat(a.getAttribute('data-balance'));
                    bVal = parseFloat(b.getAttribute('data-balance'));
                    return aVal - bVal;
                case 'balance_desc':
                    aVal = parseFloat(a.getAttribute('data-balance'));
                    bVal = parseFloat(b.getAttribute('data-balance'));
                    return bVal - aVal;
                case 'currency_asc':
                    aVal = a.getAttribute('data-currency');
                    bVal = b.getAttribute('data-currency');
                    return aVal.localeCompare(bVal);
                case 'currency_desc':
                    aVal = a.getAttribute('data-currency');
                    bVal = b.getAttribute('data-currency');
                    return bVal.localeCompare(aVal);
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
        return array (  275 => 105,  272 => 104,  258 => 96,  254 => 95,  250 => 94,  246 => 93,  238 => 88,  228 => 83,  220 => 78,  214 => 75,  210 => 74,  206 => 73,  203 => 72,  198 => 71,  191 => 67,  186 => 64,  184 => 63,  166 => 47,  160 => 45,  158 => 44,  153 => 42,  149 => 41,  137 => 32,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Wallets - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">My Wallets</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_wallet_index') }}\">Budget Management</a></li>
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
                    <h1 class=\"text-primary\">💰 My Wallets</h1>
                    <p class=\"text-secondary\">Manage your wallets and track your balances across different currencies</p>
                </div>
            </div>
            <div class=\"col-lg-4 text-end\">
                <a href=\"{{ path('app_wallet_new') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i>Create Wallet
                </a>
            </div>
        </div>

        <!-- Search and Sort Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-5 mx-auto\">
                <form method=\"get\" action=\"{{ path('app_wallet_index') }}\" class=\"d-flex gap-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by country or currency...\" value=\"{{ search }}\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    {% if search %}
                        <a href=\"{{ path('app_wallet_index') }}\" class=\"btn btn-secondary\">Clear</a>
                    {% endif %}
                </form>
            </div>
            <div class=\"col-lg-3\">
                <select class=\"form-select\" id=\"sortSelect\" onchange=\"sortWallets()\">
                    <option value=\"country_asc\">Sort by Country ↑</option>
                    <option value=\"country_desc\">Sort by Country ↓</option>
                    <option value=\"balance_asc\">Sort by Balance ↑</option>
                    <option value=\"balance_desc\">Sort by Balance ↓</option>
                    <option value=\"currency_asc\">Sort by Currency ↑</option>
                    <option value=\"currency_desc\">Sort by Currency ↓</option>
                </select>
            </div>
        </div>

        <!-- Wallets Grid -->
        <div class=\"row\" id=\"walletsGrid\">
            {% if wallets is empty %}
                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No wallets found.
                        <a href=\"{{ path('app_wallet_new') }}\">Create your first wallet</a>
                    </div>
                </div>
            {% else %}
                {% for wallet in wallets %}
                    <div class=\"col-lg-4 col-md-6 mb-4 wallet-card\" 
                         data-country=\"{{ wallet.pays|lower }}\"
                         data-balance=\"{{ wallet.solde }}\"
                         data-currency=\"{{ wallet.devise|lower }}\">
                        <div class=\"card h-100 shadow-sm border-success\">
                            <div class=\"card-body bg-white\">
                                <h4 class=\"card-title text-primary\">{{ wallet.pays }}</h4>
                                <div class=\"mt-3\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-money-bill-wave text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Balance:</strong> 
                                        <span class=\"text-success fw-bold\">{{ wallet.solde|number_format(2) }} {{ wallet.devise }}</span>
                                    </p>
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                                        <strong class=\"text-primary\">Currency:</strong> 
                                        <span class=\"text-primary\">{{ wallet.devise }}</span>
                                    </p>
                                </div>
                                <hr class=\"border-success\">
                                <div class=\"d-flex justify-content-between\">
                                    <a href=\"{{ path('app_wallet_show', {'id': wallet.id}) }}\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                    <a href=\"{{ path('app_wallet_edit', {'id': wallet.id}) }}\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                    <form method=\"post\" action=\"{{ path('app_wallet_delete', {'id': wallet.id}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ wallet.id) }}\">
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
</style>

<script>
    function sortWallets() {
        const sortValue = document.getElementById('sortSelect').value;
        const grid = document.getElementById('walletsGrid');
        const cards = Array.from(document.querySelectorAll('.wallet-card'));
        
        cards.sort((a, b) => {
            let aVal, bVal;
            
            switch(sortValue) {
                case 'country_asc':
                    aVal = a.getAttribute('data-country');
                    bVal = b.getAttribute('data-country');
                    return aVal.localeCompare(bVal);
                case 'country_desc':
                    aVal = a.getAttribute('data-country');
                    bVal = b.getAttribute('data-country');
                    return bVal.localeCompare(aVal);
                case 'balance_asc':
                    aVal = parseFloat(a.getAttribute('data-balance'));
                    bVal = parseFloat(b.getAttribute('data-balance'));
                    return aVal - bVal;
                case 'balance_desc':
                    aVal = parseFloat(a.getAttribute('data-balance'));
                    bVal = parseFloat(b.getAttribute('data-balance'));
                    return bVal - aVal;
                case 'currency_asc':
                    aVal = a.getAttribute('data-currency');
                    bVal = b.getAttribute('data-currency');
                    return aVal.localeCompare(bVal);
                case 'currency_desc':
                    aVal = a.getAttribute('data-currency');
                    bVal = b.getAttribute('data-currency');
                    return bVal.localeCompare(aVal);
                default:
                    return 0;
            }
        });
        
        grid.innerHTML = '';
        cards.forEach(card => grid.appendChild(card));
    }
</script>

{% endblock %}", "loan/wallet/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\wallet\\index.html.twig");
    }
}
