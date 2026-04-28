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

/* management/transaction/index.html.twig */
class __TwigTemplate_445d597955885872e762b9131cdcefaa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/transaction/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/transaction/index.html.twig"));

        // line 5
        $context["active_tab"] = "transaction";
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

        yield "Transactions - Fin-Dinari";
        
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
            <h1 class=\"fw-bold mb-1\" style=\"color: #26474E;\">
                <i class=\"fas fa-exchange-alt me-2\"></i>Transactions
            </h1>
            <p class=\"text-muted mb-0\">Track your income and expenses</p>
        </div>
        <div class=\"col-lg-4 text-end\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_new_step1");
        yield "\" class=\"btn btn-lg px-4\"
               style=\"background: linear-gradient(135deg, #F27438, #F9968B); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(242,116,56,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Transaction
            </a>
        </div>
    </div>

    ";
        // line 28
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(38,71,78,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Transactions</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 35, $this->source); })())), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-exchange-alt fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2d6a4f; box-shadow: 0 4px 20px rgba(45,106,79,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Income</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 50, $this->source); })()), 2), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-arrow-up fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #c0392b; box-shadow: 0 4px 20px rgba(192,57,43,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Expense</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 65, $this->source); })()), 2), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-arrow-down fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 77
        yield "    <div class=\"row mb-4\">
        <div class=\"col-lg-6\">
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index");
        yield "\"
                   class=\"btn px-4 ";
        // line 81
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 81, $this->source); })()) == "")) ? ("active-filter") : (""));
        yield "\"
                   style=\"border-radius: 12px; background: ";
        // line 82
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 82, $this->source); })()) == "")) ? ("#F27438") : ("white"));
        yield "; color: ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 82, $this->source); })()) == "")) ? ("white") : ("#26474E"));
        yield "; border: 2px solid ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 82, $this->source); })()) == "")) ? ("#F27438") : ("#e0e0e0"));
        yield ";\">
                    <i class=\"fas fa-list me-1\"></i>All
                </a>
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index", ["type" => "income"]);
        yield "\"
                   class=\"btn px-4\"
                   style=\"border-radius: 12px; background: ";
        // line 87
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 87, $this->source); })()) == "income")) ? ("#2d6a4f") : ("white"));
        yield "; color: ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 87, $this->source); })()) == "income")) ? ("white") : ("#2d6a4f"));
        yield "; border: 2px solid ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 87, $this->source); })()) == "income")) ? ("#2d6a4f") : ("#e0e0e0"));
        yield ";\">
                    <i class=\"fas fa-arrow-up me-1\"></i>Income
                </a>
                <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index", ["type" => "depense"]);
        yield "\"
                   class=\"btn px-4\"
                   style=\"border-radius: 12px; background: ";
        // line 92
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 92, $this->source); })()) == "depense")) ? ("#c0392b") : ("white"));
        yield "; color: ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 92, $this->source); })()) == "depense")) ? ("white") : ("#c0392b"));
        yield "; border: 2px solid ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 92, $this->source); })()) == "depense")) ? ("#c0392b") : ("#e0e0e0"));
        yield ";\">
                    <i class=\"fas fa-arrow-down me-1\"></i>Expense
                </a>
            </div>
        </div>
    </div>

    ";
        // line 100
        yield "    <div class=\"row\">
        ";
        // line 101
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 101, $this->source); })()))) {
            // line 102
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                    <i class=\"fas fa-exchange-alt fa-3x mb-3\" style=\"color: #F27438;\"></i>
                    <h4 style=\"color: #26474E;\">No transactions found</h4>
                    <p class=\"text-muted\">Start by adding your first transaction</p>
                    <a href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_new_step1");
            yield "\" class=\"btn mt-2\"
                       style=\"background: #F27438; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Add Transaction
                    </a>
                </div>
            </div>
        ";
        } else {
            // line 114
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                    <div class=\"card-body p-0\">
                        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 119
                yield "                            <div class=\"d-flex align-items-center p-3 transaction-row\"
                                 style=\"border-bottom: 1px solid #f5f5f5; transition: all 0.2s;\">

                                ";
                // line 123
                yield "                                <div class=\"rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0\"
                                     style=\"width:48px; height:48px;
                                            background: ";
                // line 125
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 125) == "income")) ? ("#e8f5e9") : ("#fde8e8"));
                yield ";\">
                                    <i class=\"fas ";
                // line 126
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 126) == "income")) ? ("fa-arrow-up") : ("fa-arrow-down"));
                yield "\"
                                       style=\"color: ";
                // line 127
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 127) == "income")) ? ("#2d6a4f") : ("#c0392b"));
                yield ";\"></i>
                                </div>

                                ";
                // line 131
                yield "                                <div class=\"flex-fill\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div>
                                            <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                                ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, false, false, 135), "nom", [], "any", false, false, false, 135), "html", null, true);
                yield "
                                            </h6>
                                            <p class=\"text-muted small mb-0\">
                                                <i class=\"fas fa-wallet me-1\"></i>";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "wallet", [], "any", false, false, false, 138), "pays", [], "any", false, false, false, 138), "html", null, true);
                yield "
                                                ";
                // line 139
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 140
                    yield "                                                    · ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 140), 0, 40), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 140)) > 40)) {
                        yield "...";
                    }
                    // line 141
                    yield "                                                ";
                }
                // line 142
                yield "                                            </p>
                                        </div>
                                        <div class=\"text-end\">
                                            <h6 class=\"fw-bold mb-0\"
                                                style=\"color: ";
                // line 146
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 146) == "income")) ? ("#2d6a4f") : ("#c0392b"));
                yield ";\">
                                                ";
                // line 147
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 147) == "income")) ? ("+") : ("-"));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 147), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "devise", [], "any", false, false, false, 147), "html", null, true);
                yield "
                                            </h6>
                                            <p class=\"text-muted small mb-0\">
                                                ";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 150), "d/m/Y H:i"), "html", null, true);
                yield "
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                ";
                // line 157
                yield "                                <div class=\"ms-3 flex-shrink-0\">
                                    <form method=\"post\" action=\"";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 158)]), "html", null, true);
                yield "\"
                                          onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 160))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-sm delete-btn\"
                                                style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "                    </div>
                </div>
            </div>
        ";
        }
        // line 173
        yield "    </div>

</turbo-frame>

<style>
    .rounded-4 { border-radius: 1rem !important; }
    .transaction-row:hover { background: #fff8f5; }
    .delete-btn:hover { background: #c0392b !important; color: white !important; }
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
        return "management/transaction/index.html.twig";
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
        return array (  383 => 173,  377 => 169,  362 => 160,  357 => 158,  354 => 157,  345 => 150,  336 => 147,  332 => 146,  326 => 142,  323 => 141,  317 => 140,  315 => 139,  311 => 138,  305 => 135,  299 => 131,  293 => 127,  289 => 126,  285 => 125,  281 => 123,  276 => 119,  272 => 118,  266 => 114,  256 => 107,  249 => 102,  247 => 101,  244 => 100,  230 => 92,  225 => 90,  215 => 87,  210 => 85,  200 => 82,  196 => 81,  192 => 80,  187 => 77,  173 => 65,  155 => 50,  137 => 35,  128 => 28,  118 => 20,  108 => 12,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'management/dashboard.html.twig' %}

{% block title %}Transactions - Fin-Dinari{% endblock %}

{% set active_tab = 'transaction' %}

{% block content %}

<turbo-frame id=\"content-frame\">

    {# Header #}
    <div class=\"row mb-4 align-items-center\">
        <div class=\"col-lg-8\">
            <h1 class=\"fw-bold mb-1\" style=\"color: #26474E;\">
                <i class=\"fas fa-exchange-alt me-2\"></i>Transactions
            </h1>
            <p class=\"text-muted mb-0\">Track your income and expenses</p>
        </div>
        <div class=\"col-lg-4 text-end\">
            <a href=\"{{ path('app_transaction_new_step1') }}\" class=\"btn btn-lg px-4\"
               style=\"background: linear-gradient(135deg, #F27438, #F9968B); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(242,116,56,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Transaction
            </a>
        </div>
    </div>

    {# Stats Bar #}
    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(38,71,78,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Transactions</p>
                        <h2 class=\"fw-bold mb-0\">{{ transactions|length }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-exchange-alt fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2d6a4f; box-shadow: 0 4px 20px rgba(45,106,79,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Income</p>
                        <h2 class=\"fw-bold mb-0\">{{ totalIncome|number_format(2) }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-arrow-up fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #c0392b; box-shadow: 0 4px 20px rgba(192,57,43,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Expense</p>
                        <h2 class=\"fw-bold mb-0\">{{ totalExpense|number_format(2) }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-arrow-down fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Filter Bar #}
    <div class=\"row mb-4\">
        <div class=\"col-lg-6\">
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_transaction_index') }}\"
                   class=\"btn px-4 {{ type == '' ? 'active-filter' : '' }}\"
                   style=\"border-radius: 12px; background: {{ type == '' ? '#F27438' : 'white' }}; color: {{ type == '' ? 'white' : '#26474E' }}; border: 2px solid {{ type == '' ? '#F27438' : '#e0e0e0' }};\">
                    <i class=\"fas fa-list me-1\"></i>All
                </a>
                <a href=\"{{ path('app_transaction_index', {'type': 'income'}) }}\"
                   class=\"btn px-4\"
                   style=\"border-radius: 12px; background: {{ type == 'income' ? '#2d6a4f' : 'white' }}; color: {{ type == 'income' ? 'white' : '#2d6a4f' }}; border: 2px solid {{ type == 'income' ? '#2d6a4f' : '#e0e0e0' }};\">
                    <i class=\"fas fa-arrow-up me-1\"></i>Income
                </a>
                <a href=\"{{ path('app_transaction_index', {'type': 'depense'}) }}\"
                   class=\"btn px-4\"
                   style=\"border-radius: 12px; background: {{ type == 'depense' ? '#c0392b' : 'white' }}; color: {{ type == 'depense' ? 'white' : '#c0392b' }}; border: 2px solid {{ type == 'depense' ? '#c0392b' : '#e0e0e0' }};\">
                    <i class=\"fas fa-arrow-down me-1\"></i>Expense
                </a>
            </div>
        </div>
    </div>

    {# Transactions List #}
    <div class=\"row\">
        {% if transactions is empty %}
            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                    <i class=\"fas fa-exchange-alt fa-3x mb-3\" style=\"color: #F27438;\"></i>
                    <h4 style=\"color: #26474E;\">No transactions found</h4>
                    <p class=\"text-muted\">Start by adding your first transaction</p>
                    <a href=\"{{ path('app_transaction_new_step1') }}\" class=\"btn mt-2\"
                       style=\"background: #F27438; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Add Transaction
                    </a>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                    <div class=\"card-body p-0\">
                        {% for transaction in transactions %}
                            <div class=\"d-flex align-items-center p-3 transaction-row\"
                                 style=\"border-bottom: 1px solid #f5f5f5; transition: all 0.2s;\">

                                {# Icon #}
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0\"
                                     style=\"width:48px; height:48px;
                                            background: {{ transaction.type == 'income' ? '#e8f5e9' : '#fde8e8' }};\">
                                    <i class=\"fas {{ transaction.type == 'income' ? 'fa-arrow-up' : 'fa-arrow-down' }}\"
                                       style=\"color: {{ transaction.type == 'income' ? '#2d6a4f' : '#c0392b' }};\"></i>
                                </div>

                                {# Info #}
                                <div class=\"flex-fill\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div>
                                            <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                                {{ transaction.categorie.nom }}
                                            </h6>
                                            <p class=\"text-muted small mb-0\">
                                                <i class=\"fas fa-wallet me-1\"></i>{{ transaction.wallet.pays }}
                                                {% if transaction.description %}
                                                    · {{ transaction.description|slice(0, 40) }}{% if transaction.description|length > 40 %}...{% endif %}
                                                {% endif %}
                                            </p>
                                        </div>
                                        <div class=\"text-end\">
                                            <h6 class=\"fw-bold mb-0\"
                                                style=\"color: {{ transaction.type == 'income' ? '#2d6a4f' : '#c0392b' }};\">
                                                {{ transaction.type == 'income' ? '+' : '-' }}{{ transaction.montant|number_format(2) }} {{ transaction.devise }}
                                            </h6>
                                            <p class=\"text-muted small mb-0\">
                                                {{ transaction.date|date('d/m/Y H:i') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                {# Delete #}
                                <div class=\"ms-3 flex-shrink-0\">
                                    <form method=\"post\" action=\"{{ path('app_transaction_delete', {'id': transaction.id}) }}\"
                                          onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ transaction.id) }}\">
                                        <button class=\"btn btn-sm delete-btn\"
                                                style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>

</turbo-frame>

<style>
    .rounded-4 { border-radius: 1rem !important; }
    .transaction-row:hover { background: #fff8f5; }
    .delete-btn:hover { background: #c0392b !important; color: white !important; }
</style>

{% endblock %}", "management/transaction/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\management\\transaction\\index.html.twig");
    }
}
