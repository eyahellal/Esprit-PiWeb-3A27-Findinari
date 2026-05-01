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

/* management/budget/index.html.twig */
class __TwigTemplate_1b8883e2f971ea7294244aae69cf001f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/index.html.twig"));

        // line 5
        $context["active_tab"] = "budget";
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

        yield "Budgets - Fin-Dinari";
        
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
                <i class=\"fas fa-chart-pie me-2\"></i>Budgets
            </h1>
            <p class=\"text-muted mb-0\">Manage your budgets and track your spending limits</p>
        </div>
        <div class=\"col-lg-4 text-end\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step1");
        yield "\" class=\"btn btn-lg px-4\"
             data-turbo-frame=\"_top\"
               style=\"background: linear-gradient(135deg, #F27438, #F9968B); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(242,116,56,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Budget
            </a>
        </div>
    </div>

    ";
        // line 29
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(38,71,78,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Budgets</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalBudgets"]) || array_key_exists("totalBudgets", $context) ? $context["totalBudgets"] : (function () { throw new RuntimeError('Variable "totalBudgets" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-chart-pie fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2d6a4f; box-shadow: 0 4px 20px rgba(45,106,79,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Amount</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 51, $this->source); })()), 2), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-money-bill-wave fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2CCED2; box-shadow: 0 4px 20px rgba(44,206,210,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Active / Expired</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalActive"]) || array_key_exists("totalActive", $context) ? $context["totalActive"] : (function () { throw new RuntimeError('Variable "totalActive" does not exist.', 66, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalExpired"]) || array_key_exists("totalExpired", $context) ? $context["totalExpired"] : (function () { throw new RuntimeError('Variable "totalExpired" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-folder fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 78
        yield "    <div class=\"row\">
        <div class=\"col-12 mb-3\">
            <h4 class=\"fw-bold\" style=\"color: #2d6a4f;\">
                <i class=\"fas fa-check-circle me-2\"></i>Active Budgets (";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalActive"]) || array_key_exists("totalActive", $context) ? $context["totalActive"] : (function () { throw new RuntimeError('Variable "totalActive" does not exist.', 81, $this->source); })()), "html", null, true);
        yield ")
            </h4>
        </div>

        ";
        // line 85
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["activeBudgets"]) || array_key_exists("activeBudgets", $context) ? $context["activeBudgets"] : (function () { throw new RuntimeError('Variable "activeBudgets" does not exist.', 85, $this->source); })()))) {
            // line 86
            yield "            <div class=\"col-12 text-center py-4\">
                <div class=\"rounded-4 p-4\" style=\"background: #f8fffe; border: 2px dashed #2d6a4f;\">
                    <i class=\"fas fa-check-circle fa-2x mb-3\" style=\"color: #2d6a4f;\"></i>
                    <h5 style=\"color: #26474E;\">No active budgets</h5>
                    <p class=\"text-muted mb-0\">Create a new budget to get started</p>
                </div>
            </div>
        ";
        } else {
            // line 94
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeBudgets"]) || array_key_exists("activeBudgets", $context) ? $context["activeBudgets"] : (function () { throw new RuntimeError('Variable "activeBudgets" does not exist.', 94, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
                // line 95
                yield "                ";
                $context["stats"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetsStats"]) || array_key_exists("budgetsStats", $context) ? $context["budgetsStats"] : (function () { throw new RuntimeError('Variable "budgetsStats" does not exist.', 95, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 95), [], "array", false, false, false, 95);
                // line 96
                yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4 budget-card\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;\">

                        <div class=\"rounded-top-4 p-4 text-white\"
                             style=\"background: ";
                // line 101
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, true, false, 101), "color", [], "any", true, true, false, 101) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 101), "color", [], "any", false, false, false, 101)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 101), "color", [], "any", false, false, false, 101), "html", null, true)) : ("#F27438"));
                yield ";\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 104), "pays", [], "any", false, false, false, 104), "html", null, true);
                yield "</p>
                                    <h4 class=\"fw-bold mb-0\">";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 105), "nom", [], "any", false, false, false, 105), "html", null, true);
                yield "</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas ";
                // line 109
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, true, false, 109), "icon", [], "any", true, true, false, 109) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 109), "icon", [], "any", false, false, false, 109)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 109), "icon", [], "any", false, false, false, 109), "html", null, true)) : ("fa-chart-pie"));
                yield " fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body p-4\">
                            <div class=\"mb-3\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Max Amount</p>
                                <h3 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    ";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "montantMax", [], "any", false, false, false, 118), 2), "html", null, true);
                yield "
                                    <span class=\"fs-5 text-muted\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 119), "devise", [], "any", false, false, false, 119), "html", null, true);
                yield "</span>
                                </h3>
                            </div>

                            <div class=\"mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"small fw-bold\" style=\"color: #26474E;\"><i class=\"fas fa-money-bill-wave me-1\"></i>Spent</span>
                                    <span class=\"small fw-bold\" style=\"color: ";
                // line 126
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 126, $this->source); })()), "spentPercent", [], "any", false, false, false, 126) > 90)) {
                    yield "#c0392b";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 126, $this->source); })()), "spentPercent", [], "any", false, false, false, 126) > 70)) {
                    yield "#F27438";
                } else {
                    yield "#2d6a4f";
                }
                yield ";\">
                                        ";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 127, $this->source); })()), "totalSpent", [], "any", false, false, false, 127), 2), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "montantMax", [], "any", false, false, false, 127), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 127), "devise", [], "any", false, false, false, 127), "html", null, true);
                yield "
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 10px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 10px; width: ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 131, $this->source); })()), "spentPercent", [], "any", false, false, false, 131), "html", null, true);
                yield "%;
                                        background: ";
                // line 132
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 132, $this->source); })()), "spentPercent", [], "any", false, false, false, 132) > 90)) {
                    yield "#c0392b";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 132, $this->source); })()), "spentPercent", [], "any", false, false, false, 132) > 70)) {
                    yield "#F27438";
                } else {
                    yield "#2d6a4f";
                }
                yield ";
                                        transition: width 0.5s ease;\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between mt-1\">
                                    <span class=\"small text-muted\">";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 136, $this->source); })()), "spentPercent", [], "any", false, false, false, 136), "html", null, true);
                yield "% used</span>
                                    <span class=\"small\" style=\"color: ";
                // line 137
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 137, $this->source); })()), "remaining", [], "any", false, false, false, 137) < 0)) {
                    yield "#c0392b";
                } else {
                    yield "#2d6a4f";
                }
                yield ";\">
                                        ";
                // line 138
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 138, $this->source); })()), "remaining", [], "any", false, false, false, 138) >= 0)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 138, $this->source); })()), "remaining", [], "any", false, false, false, 138), 2), "html", null, true);
                    yield " left";
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 138, $this->source); })()), "remaining", [], "any", false, false, false, 138) *  -1), 2), "html", null, true);
                    yield " over budget!";
                }
                // line 139
                yield "                                    </span>
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"small fw-bold\" style=\"color: #26474E;\"><i class=\"fas fa-clock me-1\"></i>Time</span>
                                    <span class=\"small fw-bold\" style=\"color: ";
                // line 146
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 146, $this->source); })()), "timePercent", [], "any", false, false, false, 146) > 80)) {
                    yield "#F27438";
                } else {
                    yield "#2CCED2";
                }
                yield ";\">
                                        ";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 147, $this->source); })()), "daysLeft", [], "any", false, false, false, 147), "html", null, true);
                yield " days left
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 10px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 10px; width: ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 151, $this->source); })()), "timePercent", [], "any", false, false, false, 151), "html", null, true);
                yield "%;
                                        background: ";
                // line 152
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 152, $this->source); })()), "timePercent", [], "any", false, false, false, 152) > 80)) {
                    yield "#F27438";
                } else {
                    yield "#2CCED2";
                }
                yield ";
                                        transition: width 0.5s ease;\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between mt-1\">
                                    <span class=\"small text-muted\">";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 156, $this->source); })()), "daysPassed", [], "any", false, false, false, 156), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dureeBudget", [], "any", false, false, false, 156), "html", null, true);
                yield " days</span>
                                    <span class=\"small text-muted\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateBudget", [], "any", false, false, false, 157), "d/m"), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 157, $this->source); })()), "endDate", [], "any", false, false, false, 157), "d/m/Y"), "html", null, true);
                yield "</span>
                                </div>
                            </div>

                            <div class=\"d-flex gap-2 flex-wrap mb-3\">
                                <span class=\"badge rounded-pill px-3 py-2\" style=\"background: #e8f5e9; color: #2d6a4f;\">
                                    <i class=\"fas fa-calendar me-1\"></i>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateBudget", [], "any", false, false, false, 163), "d/m/Y"), "html", null, true);
                yield "
                                </span>
                                <span class=\"badge rounded-pill px-3 py-2\" style=\"background: #e3f2fd; color: #1e3a5f;\">
                                    <i class=\"fas fa-clock me-1\"></i>";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dureeBudget", [], "any", false, false, false, 166), "html", null, true);
                yield " days
                                </span>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\" class=\"btn btn-sm flex-fill edit-btn\"
                                 data-turbo-frame=\"_top\"
                                   style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-edit me-1\"></i>Edit
                                </a>
                                <form method=\"post\" action=\"";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 179))), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-sm delete-btn\" style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
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
            unset($context['_seq'], $context['_key'], $context['budget'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            yield "        ";
        }
        // line 190
        yield "    </div>

    ";
        // line 193
        yield "    ";
        if (((isset($context["totalActivePages"]) || array_key_exists("totalActivePages", $context) ? $context["totalActivePages"] : (function () { throw new RuntimeError('Variable "totalActivePages" does not exist.', 193, $this->source); })()) > 1)) {
            // line 194
            yield "        <div class=\"d-flex justify-content-center mt-2 mb-4\">
            <nav>
                <ul class=\"pagination mb-0\" style=\"gap: 4px;\">
                    <li class=\"page-item ";
            // line 197
            yield ((((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 197, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index", ["active_page" => ((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 199, $this->source); })()) - 1), "expired_page" => (isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 199, $this->source); })())]), "html", null, true);
            yield "\"
                           style=\"color: ";
            // line 200
            yield ((((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 200, $this->source); })()) == 1)) ? ("#999") : ("#26474E"));
            yield "; background: ";
            yield ((((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 200, $this->source); })()) == 1)) ? ("#f5f5f5") : ("#e8f5f5"));
            yield ";\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </a>
                    </li>
                    ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalActivePages"]) || array_key_exists("totalActivePages", $context) ? $context["totalActivePages"] : (function () { throw new RuntimeError('Variable "totalActivePages" does not exist.', 204, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 205
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link rounded-3 border-0 px-3\"
                               href=\"";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index", ["active_page" => $context["p"], "expired_page" => (isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 207, $this->source); })())]), "html", null, true);
                yield "\"
                               style=\"background: ";
                // line 208
                yield ((($context["p"] == (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 208, $this->source); })()))) ? ("#2d6a4f") : ("#f5f5f5"));
                yield ";
                                      color: ";
                // line 209
                yield ((($context["p"] == (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 209, $this->source); })()))) ? ("white") : ("#26474E"));
                yield ";
                                      font-weight: ";
                // line 210
                yield ((($context["p"] == (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 210, $this->source); })()))) ? ("bold") : ("normal"));
                yield ";\">
                                ";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            yield "                    <li class=\"page-item ";
            yield ((((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 215, $this->source); })()) == (isset($context["totalActivePages"]) || array_key_exists("totalActivePages", $context) ? $context["totalActivePages"] : (function () { throw new RuntimeError('Variable "totalActivePages" does not exist.', 215, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index", ["active_page" => ((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 217, $this->source); })()) + 1), "expired_page" => (isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 217, $this->source); })())]), "html", null, true);
            yield "\"
                           style=\"color: ";
            // line 218
            yield ((((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 218, $this->source); })()) == (isset($context["totalActivePages"]) || array_key_exists("totalActivePages", $context) ? $context["totalActivePages"] : (function () { throw new RuntimeError('Variable "totalActivePages" does not exist.', 218, $this->source); })()))) ? ("#999") : ("#26474E"));
            yield "; background: ";
            yield ((((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 218, $this->source); })()) == (isset($context["totalActivePages"]) || array_key_exists("totalActivePages", $context) ? $context["totalActivePages"] : (function () { throw new RuntimeError('Variable "totalActivePages" does not exist.', 218, $this->source); })()))) ? ("#f5f5f5") : ("#e8f5f5"));
            yield ";\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    ";
        }
        // line 226
        yield "
    ";
        // line 228
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["expiredBudgets"]) || array_key_exists("expiredBudgets", $context) ? $context["expiredBudgets"] : (function () { throw new RuntimeError('Variable "expiredBudgets" does not exist.', 228, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 229
            yield "        <div class=\"row mt-5\">
            <div class=\"col-12 mb-3\">
                <h4 class=\"fw-bold\" style=\"color: #c0392b;\">
                    <i class=\"fas fa-exclamation-circle me-2\"></i>Expired Budgets (";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalExpired"]) || array_key_exists("totalExpired", $context) ? $context["totalExpired"] : (function () { throw new RuntimeError('Variable "totalExpired" does not exist.', 232, $this->source); })()), "html", null, true);
            yield ")
                </h4>
            </div>

            ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["expiredBudgets"]) || array_key_exists("expiredBudgets", $context) ? $context["expiredBudgets"] : (function () { throw new RuntimeError('Variable "expiredBudgets" does not exist.', 236, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
                // line 237
                yield "                ";
                $context["stats"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetsStats"]) || array_key_exists("budgetsStats", $context) ? $context["budgetsStats"] : (function () { throw new RuntimeError('Variable "budgetsStats" does not exist.', 237, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 237), [], "array", false, false, false, 237);
                // line 238
                yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.05); opacity: 0.75; transition: all 0.3s ease;\">

                        <div class=\"rounded-top-4 p-4 text-white\" style=\"background: #999;\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">";
                // line 245
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 245), "pays", [], "any", false, false, false, 245), "html", null, true);
                yield "</p>
                                    <h4 class=\"fw-bold mb-0\">";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 246), "nom", [], "any", false, false, false, 246), "html", null, true);
                yield "</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas ";
                // line 250
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, true, false, 250), "icon", [], "any", true, true, false, 250) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 250), "icon", [], "any", false, false, false, 250)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 250), "icon", [], "any", false, false, false, 250), "html", null, true)) : ("fa-chart-pie"));
                yield " fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body p-4\">
                            <div class=\"mb-3\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Max Amount</p>
                                <h3 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    ";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "montantMax", [], "any", false, false, false, 259), 2), "html", null, true);
                yield "
                                    <span class=\"fs-5 text-muted\">";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 260), "devise", [], "any", false, false, false, 260), "html", null, true);
                yield "</span>
                                </h3>
                            </div>

                            <div class=\"mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"small fw-bold\" style=\"color: #26474E;\"><i class=\"fas fa-money-bill-wave me-1\"></i>Spent</span>
                                    <span class=\"small fw-bold\" style=\"color: #c0392b;\">
                                        ";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 268, $this->source); })()), "totalSpent", [], "any", false, false, false, 268), 2), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "montantMax", [], "any", false, false, false, 268), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 268), "devise", [], "any", false, false, false, 268), "html", null, true);
                yield "
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 10px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 10px; width: ";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 272, $this->source); })()), "spentPercent", [], "any", false, false, false, 272), "html", null, true);
                yield "%; background: #c0392b;\"></div>
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"small fw-bold\" style=\"color: #26474E;\"><i class=\"fas fa-clock me-1\"></i>Time</span>
                                    <span class=\"small fw-bold\" style=\"color: #c0392b;\">Expired</span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 10px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 10px; width: 100%; background: #c0392b;\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between mt-1\">
                                    <span class=\"small text-muted\">";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateBudget", [], "any", false, false, false, 285), "d/m/Y"), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 285, $this->source); })()), "endDate", [], "any", false, false, false, 285), "d/m/Y"), "html", null, true);
                yield "</span>
                                    <span class=\"badge rounded-pill px-2 py-1\" style=\"background: #fde8e8; color: #c0392b;\">
                                        <i class=\"fas fa-exclamation-circle me-1\"></i>Expired
                                    </span>
                                </div>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 295)]), "html", null, true);
                yield "\" class=\"btn btn-sm flex-fill\"
                                   style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-redo me-1\"></i>Renew
                                </a>
                                <form method=\"post\" action=\"";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 299)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 300))), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-sm delete-btn\" style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
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
            unset($context['_seq'], $context['_key'], $context['budget'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            yield "        </div>

        ";
            // line 313
            yield "        ";
            if (((isset($context["totalExpiredPages"]) || array_key_exists("totalExpiredPages", $context) ? $context["totalExpiredPages"] : (function () { throw new RuntimeError('Variable "totalExpiredPages" does not exist.', 313, $this->source); })()) > 1)) {
                // line 314
                yield "            <div class=\"d-flex justify-content-center mt-2\">
                <nav>
                    <ul class=\"pagination mb-0\" style=\"gap: 4px;\">
                        <li class=\"page-item ";
                // line 317
                yield ((((isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 317, $this->source); })()) == 1)) ? ("disabled") : (""));
                yield "\">
                            <a class=\"page-link rounded-3 border-0 px-3\"
                               href=\"";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index", ["active_page" => (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 319, $this->source); })()), "expired_page" => ((isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 319, $this->source); })()) - 1)]), "html", null, true);
                yield "\"
                               style=\"color: ";
                // line 320
                yield ((((isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 320, $this->source); })()) == 1)) ? ("#999") : ("#26474E"));
                yield "; background: ";
                yield ((((isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 320, $this->source); })()) == 1)) ? ("#f5f5f5") : ("#fde8e8"));
                yield ";\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                        ";
                // line 324
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalExpiredPages"]) || array_key_exists("totalExpiredPages", $context) ? $context["totalExpiredPages"] : (function () { throw new RuntimeError('Variable "totalExpiredPages" does not exist.', 324, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 325
                    yield "                            <li class=\"page-item\">
                                <a class=\"page-link rounded-3 border-0 px-3\"
                                   href=\"";
                    // line 327
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index", ["active_page" => (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 327, $this->source); })()), "expired_page" => $context["p"]]), "html", null, true);
                    yield "\"
                                   style=\"background: ";
                    // line 328
                    yield ((($context["p"] == (isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 328, $this->source); })()))) ? ("#c0392b") : ("#f5f5f5"));
                    yield ";
                                          color: ";
                    // line 329
                    yield ((($context["p"] == (isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 329, $this->source); })()))) ? ("white") : ("#26474E"));
                    yield ";
                                          font-weight: ";
                    // line 330
                    yield ((($context["p"] == (isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 330, $this->source); })()))) ? ("bold") : ("normal"));
                    yield ";\">
                                    ";
                    // line 331
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "
                                </a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 335
                yield "                        <li class=\"page-item ";
                yield ((((isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 335, $this->source); })()) == (isset($context["totalExpiredPages"]) || array_key_exists("totalExpiredPages", $context) ? $context["totalExpiredPages"] : (function () { throw new RuntimeError('Variable "totalExpiredPages" does not exist.', 335, $this->source); })()))) ? ("disabled") : (""));
                yield "\">
                            <a class=\"page-link rounded-3 border-0 px-3\"
                               href=\"";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index", ["active_page" => (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 337, $this->source); })()), "expired_page" => ((isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 337, $this->source); })()) + 1)]), "html", null, true);
                yield "\"
                               style=\"color: ";
                // line 338
                yield ((((isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 338, $this->source); })()) == (isset($context["totalExpiredPages"]) || array_key_exists("totalExpiredPages", $context) ? $context["totalExpiredPages"] : (function () { throw new RuntimeError('Variable "totalExpiredPages" does not exist.', 338, $this->source); })()))) ? ("#999") : ("#26474E"));
                yield "; background: ";
                yield ((((isset($context["expiredPage"]) || array_key_exists("expiredPage", $context) ? $context["expiredPage"] : (function () { throw new RuntimeError('Variable "expiredPage" does not exist.', 338, $this->source); })()) == (isset($context["totalExpiredPages"]) || array_key_exists("totalExpiredPages", $context) ? $context["totalExpiredPages"] : (function () { throw new RuntimeError('Variable "totalExpiredPages" does not exist.', 338, $this->source); })()))) ? ("#f5f5f5") : ("#fde8e8"));
                yield ";\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        ";
            }
            // line 346
            yield "    ";
        }
        // line 347
        yield "
</turbo-frame>

<style>
    .budget-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(242, 116, 56, 0.2) !important;
    }
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .edit-btn:hover { background: #F27438 !important; color: white !important; }
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
        return "management/budget/index.html.twig";
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
        return array (  751 => 347,  748 => 346,  735 => 338,  731 => 337,  725 => 335,  715 => 331,  711 => 330,  707 => 329,  703 => 328,  699 => 327,  695 => 325,  691 => 324,  682 => 320,  678 => 319,  673 => 317,  668 => 314,  665 => 313,  661 => 310,  645 => 300,  641 => 299,  634 => 295,  619 => 285,  603 => 272,  592 => 268,  581 => 260,  577 => 259,  565 => 250,  558 => 246,  554 => 245,  545 => 238,  542 => 237,  538 => 236,  531 => 232,  526 => 229,  523 => 228,  520 => 226,  507 => 218,  503 => 217,  497 => 215,  487 => 211,  483 => 210,  479 => 209,  475 => 208,  471 => 207,  467 => 205,  463 => 204,  454 => 200,  450 => 199,  445 => 197,  440 => 194,  437 => 193,  433 => 190,  430 => 189,  414 => 179,  410 => 178,  402 => 173,  392 => 166,  386 => 163,  375 => 157,  369 => 156,  358 => 152,  354 => 151,  347 => 147,  339 => 146,  330 => 139,  322 => 138,  314 => 137,  310 => 136,  297 => 132,  293 => 131,  282 => 127,  272 => 126,  262 => 119,  258 => 118,  246 => 109,  239 => 105,  235 => 104,  229 => 101,  222 => 96,  219 => 95,  214 => 94,  204 => 86,  202 => 85,  195 => 81,  190 => 78,  174 => 66,  156 => 51,  138 => 36,  129 => 29,  118 => 20,  108 => 12,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'management/dashboard.html.twig' %}

{% block title %}Budgets - Fin-Dinari{% endblock %}

{% set active_tab = 'budget' %}

{% block content %}

<turbo-frame id=\"content-frame\">

    {# Header #}
    <div class=\"row mb-4 align-items-center\">
        <div class=\"col-lg-8\">
            <h1 class=\"fw-bold mb-1\" style=\"color: #26474E;\">
                <i class=\"fas fa-chart-pie me-2\"></i>Budgets
            </h1>
            <p class=\"text-muted mb-0\">Manage your budgets and track your spending limits</p>
        </div>
        <div class=\"col-lg-4 text-end\">
            <a href=\"{{ path('app_budget_new_step1') }}\" class=\"btn btn-lg px-4\"
             data-turbo-frame=\"_top\"
               style=\"background: linear-gradient(135deg, #F27438, #F9968B); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(242,116,56,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Budget
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
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Budgets</p>
                        <h2 class=\"fw-bold mb-0\">{{ totalBudgets }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-chart-pie fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2d6a4f; box-shadow: 0 4px 20px rgba(45,106,79,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Amount</p>
                        <h2 class=\"fw-bold mb-0\">{{ totalAmount|number_format(2) }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-money-bill-wave fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2CCED2; box-shadow: 0 4px 20px rgba(44,206,210,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Active / Expired</p>
                        <h2 class=\"fw-bold mb-0\">{{ totalActive }} / {{ totalExpired }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-folder fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Active Budgets #}
    <div class=\"row\">
        <div class=\"col-12 mb-3\">
            <h4 class=\"fw-bold\" style=\"color: #2d6a4f;\">
                <i class=\"fas fa-check-circle me-2\"></i>Active Budgets ({{ totalActive }})
            </h4>
        </div>

        {% if activeBudgets is empty %}
            <div class=\"col-12 text-center py-4\">
                <div class=\"rounded-4 p-4\" style=\"background: #f8fffe; border: 2px dashed #2d6a4f;\">
                    <i class=\"fas fa-check-circle fa-2x mb-3\" style=\"color: #2d6a4f;\"></i>
                    <h5 style=\"color: #26474E;\">No active budgets</h5>
                    <p class=\"text-muted mb-0\">Create a new budget to get started</p>
                </div>
            </div>
        {% else %}
            {% for budget in activeBudgets %}
                {% set stats = budgetsStats[budget.id] %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4 budget-card\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;\">

                        <div class=\"rounded-top-4 p-4 text-white\"
                             style=\"background: {{ budget.categorie.color ?? '#F27438' }};\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">{{ budget.wallet.pays }}</p>
                                    <h4 class=\"fw-bold mb-0\">{{ budget.categorie.nom }}</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas {{ budget.categorie.icon ?? 'fa-chart-pie' }} fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body p-4\">
                            <div class=\"mb-3\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Max Amount</p>
                                <h3 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    {{ budget.montantMax|number_format(2) }}
                                    <span class=\"fs-5 text-muted\">{{ budget.wallet.devise }}</span>
                                </h3>
                            </div>

                            <div class=\"mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"small fw-bold\" style=\"color: #26474E;\"><i class=\"fas fa-money-bill-wave me-1\"></i>Spent</span>
                                    <span class=\"small fw-bold\" style=\"color: {% if stats.spentPercent > 90 %}#c0392b{% elseif stats.spentPercent > 70 %}#F27438{% else %}#2d6a4f{% endif %};\">
                                        {{ stats.totalSpent|number_format(2) }} / {{ budget.montantMax|number_format(2) }} {{ budget.wallet.devise }}
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 10px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 10px; width: {{ stats.spentPercent }}%;
                                        background: {% if stats.spentPercent > 90 %}#c0392b{% elseif stats.spentPercent > 70 %}#F27438{% else %}#2d6a4f{% endif %};
                                        transition: width 0.5s ease;\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between mt-1\">
                                    <span class=\"small text-muted\">{{ stats.spentPercent }}% used</span>
                                    <span class=\"small\" style=\"color: {% if stats.remaining < 0 %}#c0392b{% else %}#2d6a4f{% endif %};\">
                                        {% if stats.remaining >= 0 %}{{ stats.remaining|number_format(2) }} left{% else %}{{ (stats.remaining * -1)|number_format(2) }} over budget!{% endif %}
                                    </span>
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"small fw-bold\" style=\"color: #26474E;\"><i class=\"fas fa-clock me-1\"></i>Time</span>
                                    <span class=\"small fw-bold\" style=\"color: {% if stats.timePercent > 80 %}#F27438{% else %}#2CCED2{% endif %};\">
                                        {{ stats.daysLeft }} days left
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 10px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 10px; width: {{ stats.timePercent }}%;
                                        background: {% if stats.timePercent > 80 %}#F27438{% else %}#2CCED2{% endif %};
                                        transition: width 0.5s ease;\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between mt-1\">
                                    <span class=\"small text-muted\">{{ stats.daysPassed }} / {{ budget.dureeBudget }} days</span>
                                    <span class=\"small text-muted\">{{ budget.dateBudget|date('d/m') }} → {{ stats.endDate|date('d/m/Y') }}</span>
                                </div>
                            </div>

                            <div class=\"d-flex gap-2 flex-wrap mb-3\">
                                <span class=\"badge rounded-pill px-3 py-2\" style=\"background: #e8f5e9; color: #2d6a4f;\">
                                    <i class=\"fas fa-calendar me-1\"></i>{{ budget.dateBudget|date('d/m/Y') }}
                                </span>
                                <span class=\"badge rounded-pill px-3 py-2\" style=\"background: #e3f2fd; color: #1e3a5f;\">
                                    <i class=\"fas fa-clock me-1\"></i>{{ budget.dureeBudget }} days
                                </span>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_budget_edit', {'id': budget.id}) }}\" class=\"btn btn-sm flex-fill edit-btn\"
                                 data-turbo-frame=\"_top\"
                                   style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-edit me-1\"></i>Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('app_budget_delete', {'id': budget.id}) }}\" onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ budget.id) }}\">
                                    <button class=\"btn btn-sm delete-btn\" style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
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

    {# Active Pagination #}
    {% if totalActivePages > 1 %}
        <div class=\"d-flex justify-content-center mt-2 mb-4\">
            <nav>
                <ul class=\"pagination mb-0\" style=\"gap: 4px;\">
                    <li class=\"page-item {{ activePage == 1 ? 'disabled' : '' }}\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"{{ path('app_budget_index', {active_page: activePage - 1, expired_page: expiredPage}) }}\"
                           style=\"color: {{ activePage == 1 ? '#999' : '#26474E' }}; background: {{ activePage == 1 ? '#f5f5f5' : '#e8f5f5' }};\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </a>
                    </li>
                    {% for p in 1..totalActivePages %}
                        <li class=\"page-item\">
                            <a class=\"page-link rounded-3 border-0 px-3\"
                               href=\"{{ path('app_budget_index', {active_page: p, expired_page: expiredPage}) }}\"
                               style=\"background: {{ p == activePage ? '#2d6a4f' : '#f5f5f5' }};
                                      color: {{ p == activePage ? 'white' : '#26474E' }};
                                      font-weight: {{ p == activePage ? 'bold' : 'normal' }};\">
                                {{ p }}
                            </a>
                        </li>
                    {% endfor %}
                    <li class=\"page-item {{ activePage == totalActivePages ? 'disabled' : '' }}\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"{{ path('app_budget_index', {active_page: activePage + 1, expired_page: expiredPage}) }}\"
                           style=\"color: {{ activePage == totalActivePages ? '#999' : '#26474E' }}; background: {{ activePage == totalActivePages ? '#f5f5f5' : '#e8f5f5' }};\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    {% endif %}

    {# Expired Budgets #}
    {% if expiredBudgets is not empty %}
        <div class=\"row mt-5\">
            <div class=\"col-12 mb-3\">
                <h4 class=\"fw-bold\" style=\"color: #c0392b;\">
                    <i class=\"fas fa-exclamation-circle me-2\"></i>Expired Budgets ({{ totalExpired }})
                </h4>
            </div>

            {% for budget in expiredBudgets %}
                {% set stats = budgetsStats[budget.id] %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.05); opacity: 0.75; transition: all 0.3s ease;\">

                        <div class=\"rounded-top-4 p-4 text-white\" style=\"background: #999;\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">{{ budget.wallet.pays }}</p>
                                    <h4 class=\"fw-bold mb-0\">{{ budget.categorie.nom }}</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas {{ budget.categorie.icon ?? 'fa-chart-pie' }} fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body p-4\">
                            <div class=\"mb-3\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Max Amount</p>
                                <h3 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    {{ budget.montantMax|number_format(2) }}
                                    <span class=\"fs-5 text-muted\">{{ budget.wallet.devise }}</span>
                                </h3>
                            </div>

                            <div class=\"mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"small fw-bold\" style=\"color: #26474E;\"><i class=\"fas fa-money-bill-wave me-1\"></i>Spent</span>
                                    <span class=\"small fw-bold\" style=\"color: #c0392b;\">
                                        {{ stats.totalSpent|number_format(2) }} / {{ budget.montantMax|number_format(2) }} {{ budget.wallet.devise }}
                                    </span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 10px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 10px; width: {{ stats.spentPercent }}%; background: #c0392b;\"></div>
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-1\">
                                    <span class=\"small fw-bold\" style=\"color: #26474E;\"><i class=\"fas fa-clock me-1\"></i>Time</span>
                                    <span class=\"small fw-bold\" style=\"color: #c0392b;\">Expired</span>
                                </div>
                                <div class=\"rounded-pill\" style=\"height: 10px; background: #e0e0e0;\">
                                    <div class=\"rounded-pill\" style=\"height: 10px; width: 100%; background: #c0392b;\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between mt-1\">
                                    <span class=\"small text-muted\">{{ budget.dateBudget|date('d/m/Y') }} → {{ stats.endDate|date('d/m/Y') }}</span>
                                    <span class=\"badge rounded-pill px-2 py-1\" style=\"background: #fde8e8; color: #c0392b;\">
                                        <i class=\"fas fa-exclamation-circle me-1\"></i>Expired
                                    </span>
                                </div>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_budget_edit', {'id': budget.id}) }}\" class=\"btn btn-sm flex-fill\"
                                   style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-redo me-1\"></i>Renew
                                </a>
                                <form method=\"post\" action=\"{{ path('app_budget_delete', {'id': budget.id}) }}\" onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ budget.id) }}\">
                                    <button class=\"btn btn-sm delete-btn\" style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        {# Expired Pagination #}
        {% if totalExpiredPages > 1 %}
            <div class=\"d-flex justify-content-center mt-2\">
                <nav>
                    <ul class=\"pagination mb-0\" style=\"gap: 4px;\">
                        <li class=\"page-item {{ expiredPage == 1 ? 'disabled' : '' }}\">
                            <a class=\"page-link rounded-3 border-0 px-3\"
                               href=\"{{ path('app_budget_index', {active_page: activePage, expired_page: expiredPage - 1}) }}\"
                               style=\"color: {{ expiredPage == 1 ? '#999' : '#26474E' }}; background: {{ expiredPage == 1 ? '#f5f5f5' : '#fde8e8' }};\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                        {% for p in 1..totalExpiredPages %}
                            <li class=\"page-item\">
                                <a class=\"page-link rounded-3 border-0 px-3\"
                                   href=\"{{ path('app_budget_index', {active_page: activePage, expired_page: p}) }}\"
                                   style=\"background: {{ p == expiredPage ? '#c0392b' : '#f5f5f5' }};
                                          color: {{ p == expiredPage ? 'white' : '#26474E' }};
                                          font-weight: {{ p == expiredPage ? 'bold' : 'normal' }};\">
                                    {{ p }}
                                </a>
                            </li>
                        {% endfor %}
                        <li class=\"page-item {{ expiredPage == totalExpiredPages ? 'disabled' : '' }}\">
                            <a class=\"page-link rounded-3 border-0 px-3\"
                               href=\"{{ path('app_budget_index', {active_page: activePage, expired_page: expiredPage + 1}) }}\"
                               style=\"color: {{ expiredPage == totalExpiredPages ? '#999' : '#26474E' }}; background: {{ expiredPage == totalExpiredPages ? '#f5f5f5' : '#fde8e8' }};\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        {% endif %}
    {% endif %}

</turbo-frame>

<style>
    .budget-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(242, 116, 56, 0.2) !important;
    }
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .edit-btn:hover { background: #F27438 !important; color: white !important; }
    .delete-btn:hover { background: #c0392b !important; color: white !important; }
</style>

{% endblock %}", "management/budget/index.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\budget\\index.html.twig");
    }
}
