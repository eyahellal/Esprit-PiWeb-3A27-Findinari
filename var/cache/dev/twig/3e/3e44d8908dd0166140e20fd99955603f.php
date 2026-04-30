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
class __TwigTemplate_d4bca1c3195d87139d7b57411266ef01 extends Template
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
<input type=\"hidden\" id=\"transactionsDataJson\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["transactionsData"]) || array_key_exists("transactionsData", $context) ? $context["transactionsData"] : (function () { throw new RuntimeError('Variable "transactionsData" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "\">
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
        ";
        // line 30
        yield "        <div class=\"col-12 mb-3\">
            <div class=\"d-flex align-items-center gap-2\">
                <span class=\"small fw-bold\" style=\"color: #26474E;\">
                    <i class=\"fas fa-globe me-1\"></i>Display totals in:
                </span>
                <select id=\"statsCurrency\" class=\"form-select form-select-sm\"
                        onchange=\"convertStats()\"
                        style=\"width: 120px; border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
                    <option value=\"\">Loading...</option>
                </select>
                <div id=\"statsLoading\" style=\"display: none;\">
                    <span class=\"spinner-border spinner-border-sm\" style=\"color: #F27438;\"></span>
                </div>
            </div>
        </div>

        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(38,71,78,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Transactions</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()), "html", null, true);
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
                        <h2 class=\"fw-bold mb-0\" id=\"totalIncomeDisplay\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 67, $this->source); })()), 2), "html", null, true);
        yield "</h2>
                        <p class=\"mb-0 opacity-75 small\" id=\"incomeCurrencyLabel\">mixed currencies</p>
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
                        <h2 class=\"fw-bold mb-0\" id=\"totalExpenseDisplay\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 83, $this->source); })()), 2), "html", null, true);
        yield "</h2>
                        <p class=\"mb-0 opacity-75 small\" id=\"expenseCurrencyLabel\">mixed currencies</p>
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
        // line 96
        yield "    <div class=\"row mb-4\">
        <div class=\"col-lg-6\">
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index");
        yield "\"
                   class=\"btn px-4 ";
        // line 100
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 100, $this->source); })()) == "")) ? ("active-filter") : (""));
        yield "\"
                   style=\"border-radius: 12px; background: ";
        // line 101
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 101, $this->source); })()) == "")) ? ("#F27438") : ("white"));
        yield "; color: ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 101, $this->source); })()) == "")) ? ("white") : ("#26474E"));
        yield "; border: 2px solid ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 101, $this->source); })()) == "")) ? ("#F27438") : ("#e0e0e0"));
        yield ";\">
                    <i class=\"fas fa-list me-1\"></i>All
                </a>
                <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index", ["type" => "income"]);
        yield "\"
                   class=\"btn px-4\"
                   style=\"border-radius: 12px; background: ";
        // line 106
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 106, $this->source); })()) == "income")) ? ("#2d6a4f") : ("white"));
        yield "; color: ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 106, $this->source); })()) == "income")) ? ("white") : ("#2d6a4f"));
        yield "; border: 2px solid ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 106, $this->source); })()) == "income")) ? ("#2d6a4f") : ("#e0e0e0"));
        yield ";\">
                    <i class=\"fas fa-arrow-up me-1\"></i>Income
                </a>
                <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index", ["type" => "depense"]);
        yield "\"
                   class=\"btn px-4\"
                   style=\"border-radius: 12px; background: ";
        // line 111
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 111, $this->source); })()) == "depense")) ? ("#c0392b") : ("white"));
        yield "; color: ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 111, $this->source); })()) == "depense")) ? ("white") : ("#c0392b"));
        yield "; border: 2px solid ";
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 111, $this->source); })()) == "depense")) ? ("#c0392b") : ("#e0e0e0"));
        yield ";\">
                    <i class=\"fas fa-arrow-down me-1\"></i>Expense
                </a>
            </div>
        </div>
    </div>

   ";
        // line 119
        yield "    <div class=\"row\">
        ";
        // line 120
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 120, $this->source); })()))) {
            // line 121
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                    <i class=\"fas fa-exchange-alt fa-3x mb-3\" style=\"color: #F27438;\"></i>
                    <h4 style=\"color: #26474E;\">No transactions found</h4>
                    <p class=\"text-muted\">Start by adding your first transaction</p>
                    <a href=\"";
            // line 126
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_new_step1");
            yield "\" class=\"btn mt-2\"
                       style=\"background: #F27438; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Add Transaction
                    </a>
                </div>
            </div>
        ";
        } else {
            // line 133
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                    <div class=\"card-body p-0\">
                        ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 137, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 138
                yield "                            <div class=\"d-flex align-items-center p-3 transaction-row\"
                                 style=\"border-bottom: 1px solid #f5f5f5; transition: all 0.2s;\">

                                ";
                // line 142
                yield "                                <div class=\"rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0\"
                                     style=\"width:48px; height:48px;
                                            background: ";
                // line 144
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 144) == "income")) ? ("#e8f5e9") : ("#fde8e8"));
                yield ";\">
                                    <i class=\"fas ";
                // line 145
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 145) == "income")) ? ("fa-arrow-up") : ("fa-arrow-down"));
                yield "\"
                                       style=\"color: ";
                // line 146
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 146) == "income")) ? ("#2d6a4f") : ("#c0392b"));
                yield ";\"></i>
                                </div>

                                ";
                // line 150
                yield "                                <div class=\"flex-fill\">
                                    <div class=\"d-flex justify-content-between align-items-start\">
                                        <div>
                                            <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                                ";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, false, false, 154), "nom", [], "any", false, false, false, 154), "html", null, true);
                yield "
                                                ";
                // line 155
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "isRecurring", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 156
                    yield "                                                    <span class=\"badge rounded-pill px-2 py-1 ms-1\" style=\"background: #fff3ee; color: #F27438;\">
                                                        <i class=\"fas fa-sync-alt me-1\"></i>";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "frequency", [], "any", false, false, false, 157)), "html", null, true);
                    yield "
                                                    </span>
                                                ";
                }
                // line 160
                yield "                                                ";
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 160)) && is_string($_v1 = "[Auto]") && str_starts_with($_v0, $_v1))) {
                    // line 161
                    yield "                                                    <span class=\"badge rounded-pill px-2 py-1 ms-1\" style=\"background: #e3f2fd; color: #1e3a5f;\">
                                                        <i class=\"fas fa-robot me-1\"></i>Auto
                                                    </span>
                                                ";
                }
                // line 165
                yield "                                            </h6>
                                            <p class=\"text-muted small mb-0\">
                                                <i class=\"fas fa-wallet me-1\"></i>";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "wallet", [], "any", false, false, false, 167), "pays", [], "any", false, false, false, 167), "html", null, true);
                yield "
                                                ";
                // line 168
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 169
                    yield "                                                    · ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 169), 0, 40), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 169)) > 40)) {
                        yield "...";
                    }
                    // line 170
                    yield "                                                ";
                }
                // line 171
                yield "                                            </p>
                                        </div>
                                        <div class=\"text-end\">
                                            <h6 class=\"fw-bold mb-0\"
                                                style=\"color: ";
                // line 175
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 175) == "income")) ? ("#2d6a4f") : ("#c0392b"));
                yield ";\">
                                                ";
                // line 176
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 176) == "income")) ? ("+") : ("-"));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 176), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "devise", [], "any", false, false, false, 176), "html", null, true);
                yield "
                                            </h6>
                                            <p class=\"text-muted small mb-0\">
                                                ";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 179), "d/m/Y H:i"), "html", null, true);
                yield "
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                ";
                // line 186
                yield "                                <div class=\"ms-3 flex-shrink-0 d-flex gap-2\">
                                    ";
                // line 187
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "isRecurring", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 188
                    yield "                                        <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_toggle_recurring", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 188)]), "html", null, true);
                    yield "\"
                                              onsubmit=\"return confirm('Stop this recurring transaction?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 190
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 190))), "html", null, true);
                    yield "\">
                                            <button class=\"btn btn-sm\" style=\"background: #fff3ee; color: #F27438; border-radius: 10px;\">
                                                <i class=\"fas fa-stop\"></i>
                                            </button>
                                        </form>
                                    ";
                }
                // line 196
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 196)]), "html", null, true);
                yield "\"
                                          onsubmit=\"return confirm('Are you sure?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 198))), "html", null, true);
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
            // line 207
            yield "                    </div>
                </div>
            </div>
        ";
        }
        // line 211
        yield "    </div>

    ";
        // line 214
        yield "    ";
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 214, $this->source); })()) > 1)) {
            // line 215
            yield "        <div class=\"d-flex justify-content-center mt-4\">
            <nav>
                <ul class=\"pagination mb-0\" style=\"gap: 4px;\">
                    <li class=\"page-item ";
            // line 218
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 218, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 220, $this->source); })()) - 1), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 220, $this->source); })())]), "html", null, true);
            yield "\"
                           style=\"color: ";
            // line 221
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 221, $this->source); })()) == 1)) ? ("#999") : ("#26474E"));
            yield "; background: ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 221, $this->source); })()) == 1)) ? ("#f5f5f5") : ("#e8f5f5"));
            yield ";\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </a>
                    </li>

                    ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 226, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 227
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link rounded-3 border-0 px-3\"
                               href=\"";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index", ["page" => $context["p"], "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 229, $this->source); })())]), "html", null, true);
                yield "\"
                               style=\"background: ";
                // line 230
                yield ((($context["p"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 230, $this->source); })()))) ? ("#F27438") : ("#f5f5f5"));
                yield ";
                                      color: ";
                // line 231
                yield ((($context["p"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 231, $this->source); })()))) ? ("white") : ("#26474E"));
                yield ";
                                      font-weight: ";
                // line 232
                yield ((($context["p"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 232, $this->source); })()))) ? ("bold") : ("normal"));
                yield ";\">
                                ";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            yield "
                    <li class=\"page-item ";
            // line 238
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 238, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 238, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 240, $this->source); })()) + 1), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 240, $this->source); })())]), "html", null, true);
            yield "\"
                           style=\"color: ";
            // line 241
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 241, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 241, $this->source); })()))) ? ("#999") : ("#26474E"));
            yield "; background: ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 241, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 241, $this->source); })()))) ? ("#f5f5f5") : ("#e8f5f5"));
            yield ";\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <p class=\"text-center text-muted small mt-2\">
            Showing ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 250, $this->source); })()) - 1) * 8) + 1), "html", null, true);
            yield "-";
            if ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 250, $this->source); })()) * 8) > (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 250, $this->source); })()))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 250, $this->source); })()), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 250, $this->source); })()) * 8), "html", null, true);
            }
            yield " of ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 250, $this->source); })()), "html", null, true);
            yield " transactions
        </p>
    ";
        }
        // line 253
        yield "
</turbo-frame>

<style>
    .rounded-4 { border-radius: 1rem !important; }
    .transaction-row:hover { background: #fff8f5; }
    .delete-btn:hover { background: #c0392b !important; color: white !important; }
    #statsCurrency {
    color: #26474E !important;
    background-color: #f8f9fa !important;
}
#statsCurrency option {
    color: #26474E;
    background-color: white;
}
</style>
<script>
const currencyMap = { 'DT': 'TND', 'DA': 'DZD', 'LE': 'EGP', 'LD': 'LYD' };
let allRates = {};

async function loadStatsCurrencies() {
    try {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        const data = await response.json();

        if (data.rates) {
            allRates = data.rates;
            const select = document.getElementById('statsCurrency');
            const currencies = Object.keys(data.rates).sort();

            select.innerHTML = '';

            // Add TND as default first
            const tndOption = document.createElement('option');
            tndOption.value = 'TND';
            tndOption.textContent = 'TND (Tunisian Dinar)';
            tndOption.selected = true;
            select.appendChild(tndOption);

            currencies.forEach(currency => {
                if (currency === 'TND') return; // Skip since already added
                const option = document.createElement('option');
                option.value = currency;
                option.textContent = currency;
                select.appendChild(option);
            });

            // Auto-convert on load
            convertStats();
        }
    } catch (error) {
        console.error('Error loading currencies:', error);
        document.getElementById('statsCurrency').innerHTML = '<option>Error</option>';
    }
}

async function convertStats() {
    const targetCurrency = document.getElementById('statsCurrency').value;
    const loadingDiv = document.getElementById('statsLoading');
    const transactionsData = JSON.parse(document.getElementById('transactionsDataJson').value || '[]');

    if (!targetCurrency || transactionsData.length === 0) return;

    loadingDiv.style.display = 'block';

    try {
        // We need rates FROM each transaction currency TO target
        // Strategy: get rates from USD, then convert source→USD→target
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/' + targetCurrency);
        const data = await response.json();

        if (data.rates) {
            let totalIncome = 0;
            let totalExpense = 0;

            transactionsData.forEach(t => {
                // Map non-standard codes
                let sourceCurrency = t.devise.toUpperCase().trim();
                sourceCurrency = currencyMap[sourceCurrency] || sourceCurrency;

                // Rate from target to source (we need inverse: source to target)
                const rateTargetToSource = data.rates[sourceCurrency];

                if (rateTargetToSource) {
                    // Convert: amount in source / rate = amount in target
                    const convertedAmount = t.montant / rateTargetToSource;

                    if (t.type === 'income') {
                        totalIncome += convertedAmount;
                    } else {
                        totalExpense += convertedAmount;
                    }
                } else {
                    // Fallback: add raw amount if currency not found
                    if (t.type === 'income') {
                        totalIncome += t.montant;
                    } else {
                        totalExpense += t.montant;
                    }
                }
            });

            document.getElementById('totalIncomeDisplay').textContent = totalIncome.toFixed(2);
            document.getElementById('totalExpenseDisplay').textContent = totalExpense.toFixed(2);
            document.getElementById('incomeCurrencyLabel').textContent = targetCurrency;
            document.getElementById('expenseCurrencyLabel').textContent = targetCurrency;
        }
    } catch (error) {
        console.error('Conversion error:', error);
    }

    loadingDiv.style.display = 'none';
}

document.addEventListener('DOMContentLoaded', loadStatsCurrencies);
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
        return array (  551 => 253,  537 => 250,  523 => 241,  519 => 240,  514 => 238,  511 => 237,  501 => 233,  497 => 232,  493 => 231,  489 => 230,  485 => 229,  481 => 227,  477 => 226,  467 => 221,  463 => 220,  458 => 218,  453 => 215,  450 => 214,  446 => 211,  440 => 207,  425 => 198,  419 => 196,  410 => 190,  404 => 188,  402 => 187,  399 => 186,  390 => 179,  381 => 176,  377 => 175,  371 => 171,  368 => 170,  362 => 169,  360 => 168,  356 => 167,  352 => 165,  346 => 161,  343 => 160,  337 => 157,  334 => 156,  332 => 155,  328 => 154,  322 => 150,  316 => 146,  312 => 145,  308 => 144,  304 => 142,  299 => 138,  295 => 137,  289 => 133,  279 => 126,  272 => 121,  270 => 120,  267 => 119,  253 => 111,  248 => 109,  238 => 106,  233 => 104,  223 => 101,  219 => 100,  215 => 99,  210 => 96,  195 => 83,  176 => 67,  158 => 52,  134 => 30,  131 => 28,  121 => 20,  111 => 12,  107 => 10,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'management/dashboard.html.twig' %}

{% block title %}Transactions - Fin-Dinari{% endblock %}

{% set active_tab = 'transaction' %}

{% block content %}

<turbo-frame id=\"content-frame\">
<input type=\"hidden\" id=\"transactionsDataJson\" value=\"{{ transactionsData|json_encode }}\">
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
        {# Currency selector #}
        <div class=\"col-12 mb-3\">
            <div class=\"d-flex align-items-center gap-2\">
                <span class=\"small fw-bold\" style=\"color: #26474E;\">
                    <i class=\"fas fa-globe me-1\"></i>Display totals in:
                </span>
                <select id=\"statsCurrency\" class=\"form-select form-select-sm\"
                        onchange=\"convertStats()\"
                        style=\"width: 120px; border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
                    <option value=\"\">Loading...</option>
                </select>
                <div id=\"statsLoading\" style=\"display: none;\">
                    <span class=\"spinner-border spinner-border-sm\" style=\"color: #F27438;\"></span>
                </div>
            </div>
        </div>

        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(38,71,78,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Transactions</p>
                        <h2 class=\"fw-bold mb-0\">{{ total }}</h2>
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
                        <h2 class=\"fw-bold mb-0\" id=\"totalIncomeDisplay\">{{ totalIncome|number_format(2) }}</h2>
                        <p class=\"mb-0 opacity-75 small\" id=\"incomeCurrencyLabel\">mixed currencies</p>
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
                        <h2 class=\"fw-bold mb-0\" id=\"totalExpenseDisplay\">{{ totalExpense|number_format(2) }}</h2>
                        <p class=\"mb-0 opacity-75 small\" id=\"expenseCurrencyLabel\">mixed currencies</p>
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
                                                {% if transaction.isRecurring %}
                                                    <span class=\"badge rounded-pill px-2 py-1 ms-1\" style=\"background: #fff3ee; color: #F27438;\">
                                                        <i class=\"fas fa-sync-alt me-1\"></i>{{ transaction.frequency | capitalize }}
                                                    </span>
                                                {% endif %}
                                                {% if transaction.description starts with '[Auto]' %}
                                                    <span class=\"badge rounded-pill px-2 py-1 ms-1\" style=\"background: #e3f2fd; color: #1e3a5f;\">
                                                        <i class=\"fas fa-robot me-1\"></i>Auto
                                                    </span>
                                                {% endif %}
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

                                {# Actions #}
                                <div class=\"ms-3 flex-shrink-0 d-flex gap-2\">
                                    {% if transaction.isRecurring %}
                                        <form method=\"post\" action=\"{{ path('app_transaction_toggle_recurring', {'id': transaction.id}) }}\"
                                              onsubmit=\"return confirm('Stop this recurring transaction?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ transaction.id) }}\">
                                            <button class=\"btn btn-sm\" style=\"background: #fff3ee; color: #F27438; border-radius: 10px;\">
                                                <i class=\"fas fa-stop\"></i>
                                            </button>
                                        </form>
                                    {% endif %}
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

    {# Pagination — OUTSIDE the if/else block #}
    {% if totalPages > 1 %}
        <div class=\"d-flex justify-content-center mt-4\">
            <nav>
                <ul class=\"pagination mb-0\" style=\"gap: 4px;\">
                    <li class=\"page-item {{ currentPage == 1 ? 'disabled' : '' }}\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"{{ path('app_transaction_index', {page: currentPage - 1, type: type}) }}\"
                           style=\"color: {{ currentPage == 1 ? '#999' : '#26474E' }}; background: {{ currentPage == 1 ? '#f5f5f5' : '#e8f5f5' }};\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </a>
                    </li>

                    {% for p in 1..totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link rounded-3 border-0 px-3\"
                               href=\"{{ path('app_transaction_index', {page: p, type: type}) }}\"
                               style=\"background: {{ p == currentPage ? '#F27438' : '#f5f5f5' }};
                                      color: {{ p == currentPage ? 'white' : '#26474E' }};
                                      font-weight: {{ p == currentPage ? 'bold' : 'normal' }};\">
                                {{ p }}
                            </a>
                        </li>
                    {% endfor %}

                    <li class=\"page-item {{ currentPage == totalPages ? 'disabled' : '' }}\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"{{ path('app_transaction_index', {page: currentPage + 1, type: type}) }}\"
                           style=\"color: {{ currentPage == totalPages ? '#999' : '#26474E' }}; background: {{ currentPage == totalPages ? '#f5f5f5' : '#e8f5f5' }};\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <p class=\"text-center text-muted small mt-2\">
            Showing {{ (currentPage - 1) * 8 + 1 }}-{% if currentPage * 8 > total %}{{ total }}{% else %}{{ currentPage * 8 }}{% endif %} of {{ total }} transactions
        </p>
    {% endif %}

</turbo-frame>

<style>
    .rounded-4 { border-radius: 1rem !important; }
    .transaction-row:hover { background: #fff8f5; }
    .delete-btn:hover { background: #c0392b !important; color: white !important; }
    #statsCurrency {
    color: #26474E !important;
    background-color: #f8f9fa !important;
}
#statsCurrency option {
    color: #26474E;
    background-color: white;
}
</style>
<script>
const currencyMap = { 'DT': 'TND', 'DA': 'DZD', 'LE': 'EGP', 'LD': 'LYD' };
let allRates = {};

async function loadStatsCurrencies() {
    try {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        const data = await response.json();

        if (data.rates) {
            allRates = data.rates;
            const select = document.getElementById('statsCurrency');
            const currencies = Object.keys(data.rates).sort();

            select.innerHTML = '';

            // Add TND as default first
            const tndOption = document.createElement('option');
            tndOption.value = 'TND';
            tndOption.textContent = 'TND (Tunisian Dinar)';
            tndOption.selected = true;
            select.appendChild(tndOption);

            currencies.forEach(currency => {
                if (currency === 'TND') return; // Skip since already added
                const option = document.createElement('option');
                option.value = currency;
                option.textContent = currency;
                select.appendChild(option);
            });

            // Auto-convert on load
            convertStats();
        }
    } catch (error) {
        console.error('Error loading currencies:', error);
        document.getElementById('statsCurrency').innerHTML = '<option>Error</option>';
    }
}

async function convertStats() {
    const targetCurrency = document.getElementById('statsCurrency').value;
    const loadingDiv = document.getElementById('statsLoading');
    const transactionsData = JSON.parse(document.getElementById('transactionsDataJson').value || '[]');

    if (!targetCurrency || transactionsData.length === 0) return;

    loadingDiv.style.display = 'block';

    try {
        // We need rates FROM each transaction currency TO target
        // Strategy: get rates from USD, then convert source→USD→target
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/' + targetCurrency);
        const data = await response.json();

        if (data.rates) {
            let totalIncome = 0;
            let totalExpense = 0;

            transactionsData.forEach(t => {
                // Map non-standard codes
                let sourceCurrency = t.devise.toUpperCase().trim();
                sourceCurrency = currencyMap[sourceCurrency] || sourceCurrency;

                // Rate from target to source (we need inverse: source to target)
                const rateTargetToSource = data.rates[sourceCurrency];

                if (rateTargetToSource) {
                    // Convert: amount in source / rate = amount in target
                    const convertedAmount = t.montant / rateTargetToSource;

                    if (t.type === 'income') {
                        totalIncome += convertedAmount;
                    } else {
                        totalExpense += convertedAmount;
                    }
                } else {
                    // Fallback: add raw amount if currency not found
                    if (t.type === 'income') {
                        totalIncome += t.montant;
                    } else {
                        totalExpense += t.montant;
                    }
                }
            });

            document.getElementById('totalIncomeDisplay').textContent = totalIncome.toFixed(2);
            document.getElementById('totalExpenseDisplay').textContent = totalExpense.toFixed(2);
            document.getElementById('incomeCurrencyLabel').textContent = targetCurrency;
            document.getElementById('expenseCurrencyLabel').textContent = targetCurrency;
        }
    } catch (error) {
        console.error('Conversion error:', error);
    }

    loadingDiv.style.display = 'none';
}

document.addEventListener('DOMContentLoaded', loadStatsCurrencies);
</script>
{% endblock %}", "management/transaction/index.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\transaction\\index.html.twig");
    }
}
