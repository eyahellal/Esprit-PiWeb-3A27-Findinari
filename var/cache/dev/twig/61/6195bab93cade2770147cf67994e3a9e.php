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

/* management/stats/index.html.twig */
class __TwigTemplate_a653e6e17caee5a6d8829382c7857396 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/stats/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/stats/index.html.twig"));

        // line 5
        $context["active_tab"] = "stats";
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

        yield "Statistics - Fin-Dinari";
        
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
        yield "    <input type=\"hidden\" id=\"monthlyDataJson\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "\">
    <input type=\"hidden\" id=\"categoryDataJson\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["categorySpending"]) || array_key_exists("categorySpending", $context) ? $context["categorySpending"] : (function () { throw new RuntimeError('Variable "categorySpending" does not exist.', 13, $this->source); })())), "html", null, true);
        yield "\">
    <input type=\"hidden\" id=\"transactionsDataJson\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["transactionsData"]) || array_key_exists("transactionsData", $context) ? $context["transactionsData"] : (function () { throw new RuntimeError('Variable "transactionsData" does not exist.', 14, $this->source); })())), "html", null, true);
        yield "\">

    ";
        // line 17
        yield "    <div class=\"row mb-4 align-items-center\">
        <div class=\"col-lg-6\">
            <h1 class=\"fw-bold mb-1\" style=\"color: #26474E;\">
                <i class=\"fas fa-chart-bar me-2\"></i>Statistics
            </h1>
            <p class=\"text-muted mb-0\">Analyze your spending and income patterns</p>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"d-flex gap-2 justify-content-end align-items-center\">
                <div class=\"d-flex align-items-center gap-2\">
                    <span class=\"small fw-bold\" style=\"color: #26474E;\">
                        <i class=\"fas fa-wallet me-1\"></i>Wallet:
                    </span>
                    <select id=\"walletFilter\" class=\"form-select form-select-sm\"
                            onchange=\"filterByWallet()\"
                            style=\"width: 180px; border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
                        <option value=\"all\" ";
        // line 33
        yield ((((isset($context["selectedWallet"]) || array_key_exists("selectedWallet", $context) ? $context["selectedWallet"] : (function () { throw new RuntimeError('Variable "selectedWallet" does not exist.', 33, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">All Wallets</option>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            // line 35
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedWallet"]) || array_key_exists("selectedWallet", $context) ? $context["selectedWallet"] : (function () { throw new RuntimeError('Variable "selectedWallet" does not exist.', 35, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 35))) ? ("selected") : (""));
            yield ">
                                ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "pays", [], "any", false, false, false, 36), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 36), "html", null, true);
            yield ")
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['wallet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                    </select>
                </div>
                <div class=\"d-flex align-items-center gap-2\">
                    <span class=\"small fw-bold\" style=\"color: #26474E;\">
                        <i class=\"fas fa-globe me-1\"></i>In:
                    </span>
                    <select id=\"statsCurrency\" class=\"form-select form-select-sm\"
                            onchange=\"convertAllStats()\"
                            style=\"width: 120px; border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
                        <option value=\"\">Loading...</option>
                    </select>
                    <div id=\"statsLoading\" style=\"display: none;\">
                        <span class=\"spinner-border spinner-border-sm\" style=\"color: #F27438;\"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 59
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-3 mb-3\">
            <div class=\"rounded-4 p-3 text-white h-100\" style=\"background: #26474E;\">
                <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Transactions</p>
                <h3 class=\"fw-bold mb-0\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalTransactions"]) || array_key_exists("totalTransactions", $context) ? $context["totalTransactions"] : (function () { throw new RuntimeError('Variable "totalTransactions" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "</h3>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"rounded-4 p-3 text-white h-100\" style=\"background: #2d6a4f;\">
                <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Income</p>
                <h3 class=\"fw-bold mb-0\" id=\"statIncome\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 69, $this->source); })()), 2), "html", null, true);
        yield "</h3>
                <p class=\"mb-0 opacity-75 small\" id=\"statIncomeCurrency\">mixed</p>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"rounded-4 p-3 text-white h-100\" style=\"background: #c0392b;\">
                <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Expense</p>
                <h3 class=\"fw-bold mb-0\" id=\"statExpense\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 76, $this->source); })()), 2), "html", null, true);
        yield "</h3>
                <p class=\"mb-0 opacity-75 small\" id=\"statExpenseCurrency\">mixed</p>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"rounded-4 p-3 text-white h-100\"
                 style=\"background: ";
        // line 82
        yield (((((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 82, $this->source); })()) - (isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 82, $this->source); })())) >= 0)) ? ("#2CCED2") : ("#F27438"));
        yield ";\">
                <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Net Balance</p>
                <h3 class=\"fw-bold mb-0\" id=\"statBalance\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 84, $this->source); })()) - (isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 84, $this->source); })())), 2), "html", null, true);
        yield "</h3>
                <p class=\"mb-0 opacity-75 small\" id=\"statBalanceCurrency\">mixed</p>
            </div>
        </div>
    </div>

    ";
        // line 91
        yield "    <div class=\"row mb-4\">
        <div class=\"col-lg-8 mb-3\">
            <div class=\"card border-0 rounded-4 h-100\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-chart-line me-2\" style=\"color: #F27438;\"></i>Monthly Overview
                    </h6>
                    <div style=\"height: 220px;\">
                        <canvas id=\"monthlyChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-4 mb-3\">
            <div class=\"card border-0 rounded-4 h-100\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-chart-pie me-2\" style=\"color: #F27438;\"></i>Spending by Category
                    </h6>
                    <div style=\"height: 220px;\">
                        <canvas id=\"categoryChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 119
        yield "    <div class=\"row mb-4\">
        <div class=\"col-lg-6 mb-3\">
            <div class=\"card border-0 rounded-4 h-100\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-fire me-2\" style=\"color: #c0392b;\"></i>Top Spending Categories
                    </h6>

                    ";
        // line 127
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categorySpending"]) || array_key_exists("categorySpending", $context) ? $context["categorySpending"] : (function () { throw new RuntimeError('Variable "categorySpending" does not exist.', 127, $this->source); })()))) {
            // line 128
            yield "                        <p class=\"text-muted text-center py-3 small\">No expense data yet</p>
                    ";
        } else {
            // line 130
            yield "                        ";
            $context["maxSpending"] = 0;
            // line 131
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorySpending"]) || array_key_exists("categorySpending", $context) ? $context["categorySpending"] : (function () { throw new RuntimeError('Variable "categorySpending" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["cat"] => $context["data"]) {
                // line 132
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 132) > (isset($context["maxSpending"]) || array_key_exists("maxSpending", $context) ? $context["maxSpending"] : (function () { throw new RuntimeError('Variable "maxSpending" does not exist.', 132, $this->source); })()))) {
                    $context["maxSpending"] = CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 132);
                }
                // line 133
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['cat'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "
                        ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categorySpending"]) || array_key_exists("categorySpending", $context) ? $context["categorySpending"] : (function () { throw new RuntimeError('Variable "categorySpending" does not exist.', 135, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["cat"] => $context["data"]) {
                // line 136
                yield "                            <div class=\"mb-2\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                             style=\"width:24px; height:24px; background: ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "color", [], "any", false, false, false, 140), "html", null, true);
                yield ";\">
                                            <i class=\"fas ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "icon", [], "any", false, false, false, 141), "html", null, true);
                yield " text-white\" style=\"font-size: 10px;\"></i>
                                        </div>
                                        <span class=\"fw-bold small\" style=\"color: #26474E;\">";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
                yield "</span>
                                    </div>
                                    <span class=\"small\" style=\"color: #c0392b;\">
                                        ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 146), 2), "html", null, true);
                yield "
                                        <span class=\"text-muted\">(";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 147), "html", null, true);
                yield ")</span>
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 5px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 5px; width: ";
                // line 151
                yield ((((isset($context["maxSpending"]) || array_key_exists("maxSpending", $context) ? $context["maxSpending"] : (function () { throw new RuntimeError('Variable "maxSpending" does not exist.', 151, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 151) / (isset($context["maxSpending"]) || array_key_exists("maxSpending", $context) ? $context["maxSpending"] : (function () { throw new RuntimeError('Variable "maxSpending" does not exist.', 151, $this->source); })())) * 100), "html", null, true)) : (0));
                yield "%;
                                        background: ";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "color", [], "any", false, false, false, 152), "html", null, true);
                yield ";\"></div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['cat'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            yield "                    ";
        }
        // line 157
        yield "                </div>
            </div>
        </div>

        <div class=\"col-lg-6 mb-3\">
            <div class=\"card border-0 rounded-4 h-100\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-chart-pie me-2\" style=\"color: #2CCED2;\"></i>Budget Usage
                    </h6>

                    ";
        // line 168
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["budgetUsage"]) || array_key_exists("budgetUsage", $context) ? $context["budgetUsage"] : (function () { throw new RuntimeError('Variable "budgetUsage" does not exist.', 168, $this->source); })()))) {
            // line 169
            yield "                        <p class=\"text-muted text-center py-3 small\">No budgets set up yet</p>
                    ";
        } else {
            // line 171
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["budgetUsage"]) || array_key_exists("budgetUsage", $context) ? $context["budgetUsage"] : (function () { throw new RuntimeError('Variable "budgetUsage" does not exist.', 171, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
                // line 172
                yield "                            <div class=\"mb-2\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"fw-bold small\" style=\"color: #26474E;\">";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "category", [], "any", false, false, false, 174), "html", null, true);
                yield "</span>
                                    <span class=\"small\" style=\"color: ";
                // line 175
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 175) > 90)) {
                    yield "#c0392b";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 175) > 70)) {
                    yield "#F27438";
                } else {
                    yield "#2d6a4f";
                }
                yield ";\">
                                        ";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "spent", [], "any", false, false, false, 176), 2), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "limit", [], "any", false, false, false, 176), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "devise", [], "any", false, false, false, 176), "html", null, true);
                yield "
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 5px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 5px; width: ";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 180), "html", null, true);
                yield "%;
                                        background: ";
                // line 181
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 181) > 90)) {
                    yield "#c0392b";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 181) > 70)) {
                    yield "#F27438";
                } else {
                    yield "#2d6a4f";
                }
                yield ";\"></div>
                                </div>
                                ";
                // line 183
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 183) > 100)) {
                    // line 184
                    yield "                                    <span class=\"small\" style=\"color: #c0392b;\">Over budget!</span>
                                ";
                }
                // line 186
                yield "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['budget'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            yield "                    ";
        }
        // line 189
        yield "                </div>
            </div>
        </div>
    </div>

    ";
        // line 195
        yield "    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 rounded-4\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-balance-scale me-2\" style=\"color: #F27438;\"></i>Income vs Expense Ratio
                    </h6>
                    ";
        // line 202
        $context["totalAll"] = ((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 202, $this->source); })()) + (isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 202, $this->source); })()));
        // line 203
        yield "                    ";
        $context["incomePercent"] = ((((isset($context["totalAll"]) || array_key_exists("totalAll", $context) ? $context["totalAll"] : (function () { throw new RuntimeError('Variable "totalAll" does not exist.', 203, $this->source); })()) > 0)) ? ((((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 203, $this->source); })()) / (isset($context["totalAll"]) || array_key_exists("totalAll", $context) ? $context["totalAll"] : (function () { throw new RuntimeError('Variable "totalAll" does not exist.', 203, $this->source); })())) * 100)) : (50));
        // line 204
        yield "                    ";
        $context["expensePercent"] = ((((isset($context["totalAll"]) || array_key_exists("totalAll", $context) ? $context["totalAll"] : (function () { throw new RuntimeError('Variable "totalAll" does not exist.', 204, $this->source); })()) > 0)) ? ((((isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 204, $this->source); })()) / (isset($context["totalAll"]) || array_key_exists("totalAll", $context) ? $context["totalAll"] : (function () { throw new RuntimeError('Variable "totalAll" does not exist.', 204, $this->source); })())) * 100)) : (50));
        // line 205
        yield "
                    <div class=\"d-flex rounded-pill overflow-hidden\" style=\"height: 24px;\">
                        <div style=\"width: ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["incomePercent"]) || array_key_exists("incomePercent", $context) ? $context["incomePercent"] : (function () { throw new RuntimeError('Variable "incomePercent" does not exist.', 207, $this->source); })()), "html", null, true);
        yield "%; background: #2d6a4f;\" class=\"d-flex align-items-center justify-content-center\">
                            ";
        // line 208
        if (((isset($context["incomePercent"]) || array_key_exists("incomePercent", $context) ? $context["incomePercent"] : (function () { throw new RuntimeError('Variable "incomePercent" does not exist.', 208, $this->source); })()) > 15)) {
            // line 209
            yield "                                <span class=\"text-white small fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["incomePercent"]) || array_key_exists("incomePercent", $context) ? $context["incomePercent"] : (function () { throw new RuntimeError('Variable "incomePercent" does not exist.', 209, $this->source); })()), 1), "html", null, true);
            yield "%</span>
                            ";
        }
        // line 211
        yield "                        </div>
                        <div style=\"width: ";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expensePercent"]) || array_key_exists("expensePercent", $context) ? $context["expensePercent"] : (function () { throw new RuntimeError('Variable "expensePercent" does not exist.', 212, $this->source); })()), "html", null, true);
        yield "%; background: #c0392b;\" class=\"d-flex align-items-center justify-content-center\">
                            ";
        // line 213
        if (((isset($context["expensePercent"]) || array_key_exists("expensePercent", $context) ? $context["expensePercent"] : (function () { throw new RuntimeError('Variable "expensePercent" does not exist.', 213, $this->source); })()) > 15)) {
            // line 214
            yield "                                <span class=\"text-white small fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["expensePercent"]) || array_key_exists("expensePercent", $context) ? $context["expensePercent"] : (function () { throw new RuntimeError('Variable "expensePercent" does not exist.', 214, $this->source); })()), 1), "html", null, true);
            yield "%</span>
                            ";
        }
        // line 216
        yield "                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between mt-1\">
                        <span class=\"small\" style=\"color: #2d6a4f;\"><i class=\"fas fa-circle me-1\"></i>Income</span>
                        <span class=\"small\" style=\"color: #c0392b;\"><i class=\"fas fa-circle me-1\"></i>Expense</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</turbo-frame>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<style>
    .rounded-4 { border-radius: 1rem !important; }
    #walletFilter, #statsCurrency { color: #26474E !important; background-color: #f8f9fa !important; }
    #walletFilter option, #statsCurrency option { color: #26474E; background-color: white; }
</style>

<script>
const currencyMap = { 'DT': 'TND', 'DA': 'DZD', 'LE': 'EGP', 'LD': 'LYD' };

function filterByWallet() {
    const walletId = document.getElementById('walletFilter').value;
    window.location.href = '";
        // line 242
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stats_index");
        yield "?wallet=' + walletId;
}

async function loadStatsCurrencies() {
    try {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        const data = await response.json();
        if (data.rates) {
            const select = document.getElementById('statsCurrency');
            const currencies = Object.keys(data.rates).sort();
            select.innerHTML = '';
            const tndOption = document.createElement('option');
            tndOption.value = 'TND';
            tndOption.textContent = 'TND';
            tndOption.selected = true;
            select.appendChild(tndOption);
            currencies.forEach(currency => {
                if (currency === 'TND') return;
                const option = document.createElement('option');
                option.value = currency;
                option.textContent = currency;
                select.appendChild(option);
            });
            convertAllStats();
        }
    } catch (error) { console.error('Error loading currencies:', error); }
}

async function convertAllStats() {
    const targetCurrency = document.getElementById('statsCurrency').value;
    const loadingDiv = document.getElementById('statsLoading');
    const transactionsData = JSON.parse(document.getElementById('transactionsDataJson').value || '[]');
    if (!targetCurrency || transactionsData.length === 0) return;
    loadingDiv.style.display = 'block';
    try {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/' + targetCurrency);
        const data = await response.json();
        if (data.rates) {
            let totalIncome = 0, totalExpense = 0;
            transactionsData.forEach(t => {
                let sourceCurrency = t.devise.toUpperCase().trim();
                sourceCurrency = currencyMap[sourceCurrency] || sourceCurrency;
                const rateTargetToSource = data.rates[sourceCurrency];
                const convertedAmount = rateTargetToSource ? t.montant / rateTargetToSource : t.montant;
                if (t.type === 'income') { totalIncome += convertedAmount; }
                else { totalExpense += convertedAmount; }
            });
            document.getElementById('statIncome').textContent = totalIncome.toFixed(2);
            document.getElementById('statExpense').textContent = totalExpense.toFixed(2);
            document.getElementById('statBalance').textContent = (totalIncome - totalExpense).toFixed(2);
            document.getElementById('statIncomeCurrency').textContent = targetCurrency;
            document.getElementById('statExpenseCurrency').textContent = targetCurrency;
            document.getElementById('statBalanceCurrency').textContent = targetCurrency;
        }
    } catch (error) { console.error('Conversion error:', error); }
    loadingDiv.style.display = 'none';
}

function renderCharts() {
    const monthlyData = JSON.parse(document.getElementById('monthlyDataJson').value || '{}');
    const categoryData = JSON.parse(document.getElementById('categoryDataJson').value || '{}');

    const monthLabels = Object.keys(monthlyData);
    const incomeData = monthLabels.map(m => monthlyData[m].income);
    const expenseData = monthLabels.map(m => monthlyData[m].expense);
    const formattedLabels = monthLabels.map(m => {
        const [year, month] = m.split('-');
        const months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        return months[parseInt(month) - 1] + ' ' + year;
    });

    new Chart(document.getElementById('monthlyChart'), {
        type: 'bar',
        data: {
            labels: formattedLabels,
            datasets: [
                { label: 'Income', data: incomeData, backgroundColor: 'rgba(45, 106, 79, 0.8)', borderRadius: 4 },
                { label: 'Expense', data: expenseData, backgroundColor: 'rgba(192, 57, 43, 0.8)', borderRadius: 4 }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'top', labels: { font: { size: 11 } } } },
            scales: { y: { beginAtZero: true } }
        }
    });

    const catLabels = Object.keys(categoryData);
    const catValues = catLabels.map(c => categoryData[c].total);
    const catColors = catLabels.map(c => categoryData[c].color);

    if (catLabels.length > 0) {
        new Chart(document.getElementById('categoryChart'), {
            type: 'doughnut',
            data: {
                labels: catLabels,
                datasets: [{ data: catValues, backgroundColor: catColors, borderWidth: 2, borderColor: 'white' }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'bottom', labels: { font: { size: 10 }, padding: 8 } } }
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    loadStatsCurrencies();
    renderCharts();
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
        return "management/stats/index.html.twig";
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
        return array (  522 => 242,  494 => 216,  488 => 214,  486 => 213,  482 => 212,  479 => 211,  473 => 209,  471 => 208,  467 => 207,  463 => 205,  460 => 204,  457 => 203,  455 => 202,  446 => 195,  439 => 189,  436 => 188,  429 => 186,  425 => 184,  423 => 183,  412 => 181,  408 => 180,  397 => 176,  387 => 175,  383 => 174,  379 => 172,  374 => 171,  370 => 169,  368 => 168,  355 => 157,  352 => 156,  342 => 152,  338 => 151,  331 => 147,  327 => 146,  321 => 143,  316 => 141,  312 => 140,  306 => 136,  302 => 135,  299 => 134,  293 => 133,  288 => 132,  283 => 131,  280 => 130,  276 => 128,  274 => 127,  264 => 119,  235 => 91,  226 => 84,  221 => 82,  212 => 76,  202 => 69,  193 => 63,  187 => 59,  166 => 39,  155 => 36,  148 => 35,  144 => 34,  140 => 33,  122 => 17,  117 => 14,  113 => 13,  108 => 12,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'management/dashboard.html.twig' %}

{% block title %}Statistics - Fin-Dinari{% endblock %}

{% set active_tab = 'stats' %}

{% block content %}

<turbo-frame id=\"content-frame\">

    {# Hidden data for JS #}
    <input type=\"hidden\" id=\"monthlyDataJson\" value=\"{{ monthlyData|json_encode }}\">
    <input type=\"hidden\" id=\"categoryDataJson\" value=\"{{ categorySpending|json_encode }}\">
    <input type=\"hidden\" id=\"transactionsDataJson\" value=\"{{ transactionsData|json_encode }}\">

    {# Header #}
    <div class=\"row mb-4 align-items-center\">
        <div class=\"col-lg-6\">
            <h1 class=\"fw-bold mb-1\" style=\"color: #26474E;\">
                <i class=\"fas fa-chart-bar me-2\"></i>Statistics
            </h1>
            <p class=\"text-muted mb-0\">Analyze your spending and income patterns</p>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"d-flex gap-2 justify-content-end align-items-center\">
                <div class=\"d-flex align-items-center gap-2\">
                    <span class=\"small fw-bold\" style=\"color: #26474E;\">
                        <i class=\"fas fa-wallet me-1\"></i>Wallet:
                    </span>
                    <select id=\"walletFilter\" class=\"form-select form-select-sm\"
                            onchange=\"filterByWallet()\"
                            style=\"width: 180px; border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
                        <option value=\"all\" {{ selectedWallet == 'all' ? 'selected' : '' }}>All Wallets</option>
                        {% for wallet in wallets %}
                            <option value=\"{{ wallet.id }}\" {{ selectedWallet == wallet.id ? 'selected' : '' }}>
                                {{ wallet.pays }} ({{ wallet.devise }})
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"d-flex align-items-center gap-2\">
                    <span class=\"small fw-bold\" style=\"color: #26474E;\">
                        <i class=\"fas fa-globe me-1\"></i>In:
                    </span>
                    <select id=\"statsCurrency\" class=\"form-select form-select-sm\"
                            onchange=\"convertAllStats()\"
                            style=\"width: 120px; border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
                        <option value=\"\">Loading...</option>
                    </select>
                    <div id=\"statsLoading\" style=\"display: none;\">
                        <span class=\"spinner-border spinner-border-sm\" style=\"color: #F27438;\"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Summary Cards #}
    <div class=\"row mb-4\">
        <div class=\"col-md-3 mb-3\">
            <div class=\"rounded-4 p-3 text-white h-100\" style=\"background: #26474E;\">
                <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Transactions</p>
                <h3 class=\"fw-bold mb-0\">{{ totalTransactions }}</h3>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"rounded-4 p-3 text-white h-100\" style=\"background: #2d6a4f;\">
                <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Income</p>
                <h3 class=\"fw-bold mb-0\" id=\"statIncome\">{{ totalIncome|number_format(2) }}</h3>
                <p class=\"mb-0 opacity-75 small\" id=\"statIncomeCurrency\">mixed</p>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"rounded-4 p-3 text-white h-100\" style=\"background: #c0392b;\">
                <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Expense</p>
                <h3 class=\"fw-bold mb-0\" id=\"statExpense\">{{ totalExpense|number_format(2) }}</h3>
                <p class=\"mb-0 opacity-75 small\" id=\"statExpenseCurrency\">mixed</p>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"rounded-4 p-3 text-white h-100\"
                 style=\"background: {{ totalIncome - totalExpense >= 0 ? '#2CCED2' : '#F27438' }};\">
                <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Net Balance</p>
                <h3 class=\"fw-bold mb-0\" id=\"statBalance\">{{ (totalIncome - totalExpense)|number_format(2) }}</h3>
                <p class=\"mb-0 opacity-75 small\" id=\"statBalanceCurrency\">mixed</p>
            </div>
        </div>
    </div>

    {# Charts Row #}
    <div class=\"row mb-4\">
        <div class=\"col-lg-8 mb-3\">
            <div class=\"card border-0 rounded-4 h-100\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-chart-line me-2\" style=\"color: #F27438;\"></i>Monthly Overview
                    </h6>
                    <div style=\"height: 220px;\">
                        <canvas id=\"monthlyChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-4 mb-3\">
            <div class=\"card border-0 rounded-4 h-100\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-chart-pie me-2\" style=\"color: #F27438;\"></i>Spending by Category
                    </h6>
                    <div style=\"height: 220px;\">
                        <canvas id=\"categoryChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Top Categories + Budget Usage #}
    <div class=\"row mb-4\">
        <div class=\"col-lg-6 mb-3\">
            <div class=\"card border-0 rounded-4 h-100\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-fire me-2\" style=\"color: #c0392b;\"></i>Top Spending Categories
                    </h6>

                    {% if categorySpending is empty %}
                        <p class=\"text-muted text-center py-3 small\">No expense data yet</p>
                    {% else %}
                        {% set maxSpending = 0 %}
                        {% for cat, data in categorySpending %}
                            {% if data.total > maxSpending %}{% set maxSpending = data.total %}{% endif %}
                        {% endfor %}

                        {% for cat, data in categorySpending|slice(0, 5) %}
                            <div class=\"mb-2\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                             style=\"width:24px; height:24px; background: {{ data.color }};\">
                                            <i class=\"fas {{ data.icon }} text-white\" style=\"font-size: 10px;\"></i>
                                        </div>
                                        <span class=\"fw-bold small\" style=\"color: #26474E;\">{{ cat }}</span>
                                    </div>
                                    <span class=\"small\" style=\"color: #c0392b;\">
                                        {{ data.total|number_format(2) }}
                                        <span class=\"text-muted\">({{ data.count }})</span>
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 5px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 5px; width: {{ maxSpending > 0 ? (data.total / maxSpending * 100) : 0 }}%;
                                        background: {{ data.color }};\"></div>
                                </div>
                            </div>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"col-lg-6 mb-3\">
            <div class=\"card border-0 rounded-4 h-100\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-chart-pie me-2\" style=\"color: #2CCED2;\"></i>Budget Usage
                    </h6>

                    {% if budgetUsage is empty %}
                        <p class=\"text-muted text-center py-3 small\">No budgets set up yet</p>
                    {% else %}
                        {% for budget in budgetUsage %}
                            <div class=\"mb-2\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"fw-bold small\" style=\"color: #26474E;\">{{ budget.category }}</span>
                                    <span class=\"small\" style=\"color: {% if budget.percent > 90 %}#c0392b{% elseif budget.percent > 70 %}#F27438{% else %}#2d6a4f{% endif %};\">
                                        {{ budget.spent|number_format(2) }} / {{ budget.limit|number_format(2) }} {{ budget.devise }}
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 5px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 5px; width: {{ budget.percent }}%;
                                        background: {% if budget.percent > 90 %}#c0392b{% elseif budget.percent > 70 %}#F27438{% else %}#2d6a4f{% endif %};\"></div>
                                </div>
                                {% if budget.percent > 100 %}
                                    <span class=\"small\" style=\"color: #c0392b;\">Over budget!</span>
                                {% endif %}
                            </div>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    {# Income vs Expense Ratio #}
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 rounded-4\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-3\">
                    <h6 class=\"fw-bold mb-2\" style=\"color: #26474E;\">
                        <i class=\"fas fa-balance-scale me-2\" style=\"color: #F27438;\"></i>Income vs Expense Ratio
                    </h6>
                    {% set totalAll = totalIncome + totalExpense %}
                    {% set incomePercent = totalAll > 0 ? (totalIncome / totalAll * 100) : 50 %}
                    {% set expensePercent = totalAll > 0 ? (totalExpense / totalAll * 100) : 50 %}

                    <div class=\"d-flex rounded-pill overflow-hidden\" style=\"height: 24px;\">
                        <div style=\"width: {{ incomePercent }}%; background: #2d6a4f;\" class=\"d-flex align-items-center justify-content-center\">
                            {% if incomePercent > 15 %}
                                <span class=\"text-white small fw-bold\">{{ incomePercent|number_format(1) }}%</span>
                            {% endif %}
                        </div>
                        <div style=\"width: {{ expensePercent }}%; background: #c0392b;\" class=\"d-flex align-items-center justify-content-center\">
                            {% if expensePercent > 15 %}
                                <span class=\"text-white small fw-bold\">{{ expensePercent|number_format(1) }}%</span>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between mt-1\">
                        <span class=\"small\" style=\"color: #2d6a4f;\"><i class=\"fas fa-circle me-1\"></i>Income</span>
                        <span class=\"small\" style=\"color: #c0392b;\"><i class=\"fas fa-circle me-1\"></i>Expense</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</turbo-frame>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<style>
    .rounded-4 { border-radius: 1rem !important; }
    #walletFilter, #statsCurrency { color: #26474E !important; background-color: #f8f9fa !important; }
    #walletFilter option, #statsCurrency option { color: #26474E; background-color: white; }
</style>

<script>
const currencyMap = { 'DT': 'TND', 'DA': 'DZD', 'LE': 'EGP', 'LD': 'LYD' };

function filterByWallet() {
    const walletId = document.getElementById('walletFilter').value;
    window.location.href = '{{ path('app_stats_index') }}?wallet=' + walletId;
}

async function loadStatsCurrencies() {
    try {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        const data = await response.json();
        if (data.rates) {
            const select = document.getElementById('statsCurrency');
            const currencies = Object.keys(data.rates).sort();
            select.innerHTML = '';
            const tndOption = document.createElement('option');
            tndOption.value = 'TND';
            tndOption.textContent = 'TND';
            tndOption.selected = true;
            select.appendChild(tndOption);
            currencies.forEach(currency => {
                if (currency === 'TND') return;
                const option = document.createElement('option');
                option.value = currency;
                option.textContent = currency;
                select.appendChild(option);
            });
            convertAllStats();
        }
    } catch (error) { console.error('Error loading currencies:', error); }
}

async function convertAllStats() {
    const targetCurrency = document.getElementById('statsCurrency').value;
    const loadingDiv = document.getElementById('statsLoading');
    const transactionsData = JSON.parse(document.getElementById('transactionsDataJson').value || '[]');
    if (!targetCurrency || transactionsData.length === 0) return;
    loadingDiv.style.display = 'block';
    try {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/' + targetCurrency);
        const data = await response.json();
        if (data.rates) {
            let totalIncome = 0, totalExpense = 0;
            transactionsData.forEach(t => {
                let sourceCurrency = t.devise.toUpperCase().trim();
                sourceCurrency = currencyMap[sourceCurrency] || sourceCurrency;
                const rateTargetToSource = data.rates[sourceCurrency];
                const convertedAmount = rateTargetToSource ? t.montant / rateTargetToSource : t.montant;
                if (t.type === 'income') { totalIncome += convertedAmount; }
                else { totalExpense += convertedAmount; }
            });
            document.getElementById('statIncome').textContent = totalIncome.toFixed(2);
            document.getElementById('statExpense').textContent = totalExpense.toFixed(2);
            document.getElementById('statBalance').textContent = (totalIncome - totalExpense).toFixed(2);
            document.getElementById('statIncomeCurrency').textContent = targetCurrency;
            document.getElementById('statExpenseCurrency').textContent = targetCurrency;
            document.getElementById('statBalanceCurrency').textContent = targetCurrency;
        }
    } catch (error) { console.error('Conversion error:', error); }
    loadingDiv.style.display = 'none';
}

function renderCharts() {
    const monthlyData = JSON.parse(document.getElementById('monthlyDataJson').value || '{}');
    const categoryData = JSON.parse(document.getElementById('categoryDataJson').value || '{}');

    const monthLabels = Object.keys(monthlyData);
    const incomeData = monthLabels.map(m => monthlyData[m].income);
    const expenseData = monthLabels.map(m => monthlyData[m].expense);
    const formattedLabels = monthLabels.map(m => {
        const [year, month] = m.split('-');
        const months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        return months[parseInt(month) - 1] + ' ' + year;
    });

    new Chart(document.getElementById('monthlyChart'), {
        type: 'bar',
        data: {
            labels: formattedLabels,
            datasets: [
                { label: 'Income', data: incomeData, backgroundColor: 'rgba(45, 106, 79, 0.8)', borderRadius: 4 },
                { label: 'Expense', data: expenseData, backgroundColor: 'rgba(192, 57, 43, 0.8)', borderRadius: 4 }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'top', labels: { font: { size: 11 } } } },
            scales: { y: { beginAtZero: true } }
        }
    });

    const catLabels = Object.keys(categoryData);
    const catValues = catLabels.map(c => categoryData[c].total);
    const catColors = catLabels.map(c => categoryData[c].color);

    if (catLabels.length > 0) {
        new Chart(document.getElementById('categoryChart'), {
            type: 'doughnut',
            data: {
                labels: catLabels,
                datasets: [{ data: catValues, backgroundColor: catColors, borderWidth: 2, borderColor: 'white' }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'bottom', labels: { font: { size: 10 }, padding: 8 } } }
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    loadStatsCurrencies();
    renderCharts();
});
</script>

{% endblock %}", "management/stats/index.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\stats\\index.html.twig");
    }
}
