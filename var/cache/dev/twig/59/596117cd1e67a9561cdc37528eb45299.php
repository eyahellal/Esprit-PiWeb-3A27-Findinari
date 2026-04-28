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

/* financial_health/index.html.twig */
class __TwigTemplate_51f053ba353c73dfe5291da62a737888 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "financial_health/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "financial_health/index.html.twig"));

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

        yield "Financial Health Score - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\">Financial Health Score</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ & <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financial_health");
        yield "\">Financial Health</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        
        <!-- Main Score Card -->
        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto text-center\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body p-5\">
                        <h3 class=\"mb-4\">Your Financial Health Score</h3>
                        <div class=\"score-circle ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 30, $this->source); })()), "html", null, true);
        yield " mb-4\">
                            <div class=\"score-value\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "<span>%</span></div>
                        </div>
                        <div class=\"score-level ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "</div>
                        <p class=\"text-muted mt-3\">Based on your financial activity</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Metrics Cards -->
        <div class=\"row mb-5\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"fas fa-chart-line text-primary me-2\"></i>Key Metrics
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        <div class=\"row g-4\">
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-piggy-bank\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Savings Rate</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-primary\" style=\"width: ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 59, $this->source); })()), "savingsRate", [], "any", false, false, false, 59), "html", null, true);
        yield "%\"></div>
                                        </div>
                                        <span class=\"metric-score\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 61, $this->source); })()), "savingsRate", [], "any", false, false, false, 61), "html", null, true);
        yield "%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-chart-line\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Investment Ratio</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-success\" style=\"width: ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 73, $this->source); })()), "investmentRatio", [], "any", false, false, false, 73), "html", null, true);
        yield "%\"></div>
                                        </div>
                                        <span class=\"metric-score\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 75, $this->source); })()), "investmentRatio", [], "any", false, false, false, 75), "html", null, true);
        yield "%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-chart-pie\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Diversification</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-info\" style=\"width: ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 87, $this->source); })()), "diversification", [], "any", false, false, false, 87), "html", null, true);
        yield "%\"></div>
                                        </div>
                                        <span class=\"metric-score\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 89, $this->source); })()), "diversification", [], "any", false, false, false, 89), "html", null, true);
        yield "%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-shield-alt\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Emergency Fund</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-warning\" style=\"width: ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 101, $this->source); })()), "emergencyFund", [], "any", false, false, false, 101), "html", null, true);
        yield "%\"></div>
                                        </div>
                                        <span class=\"metric-score\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 103, $this->source); })()), "emergencyFund", [], "any", false, false, false, 103), "html", null, true);
        yield "%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-bullseye\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Goal Progress</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-secondary\" style=\"width: ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 115, $this->source); })()), "goalProgress", [], "any", false, false, false, 115), "html", null, true);
        yield "%\"></div>
                                        </div>
                                        <span class=\"metric-score\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 117, $this->source); })()), "goalProgress", [], "any", false, false, false, 117), "html", null, true);
        yield "%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-wallet\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Total Balance</h5>
                                        <h4 class=\"text-primary mt-2\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalBalance"]) || array_key_exists("totalBalance", $context) ? $context["totalBalance"] : (function () { throw new RuntimeError('Variable "totalBalance" does not exist.', 128, $this->source); })()), 2), "html", null, true);
        yield " DT</h4>
                                        <small class=\"text-muted\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["walletsCount"]) || array_key_exists("walletsCount", $context) ? $context["walletsCount"] : (function () { throw new RuntimeError('Variable "walletsCount" does not exist.', 129, $this->source); })()), "html", null, true);
        yield " wallet(s) | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["investmentsCount"]) || array_key_exists("investmentsCount", $context) ? $context["investmentsCount"] : (function () { throw new RuntimeError('Variable "investmentsCount" does not exist.', 129, $this->source); })()), "html", null, true);
        yield " investment(s)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recommendations -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"fas fa-lightbulb text-warning me-2\"></i>Recommendations
                        </h4>
                        <p class=\"text-muted small mt-1\">Personalized tips to improve your financial health</p>
                    </div>
                    <div class=\"card-body p-4\">
                        <div class=\"row g-4\">
                            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recommendation"]) {
            // line 152
            yield "                                <div class=\"col-12\">
                                    <div class=\"recommendation-card ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "type", [], "any", false, false, false, 153), "html", null, true);
            yield "\">
                                        <div class=\"d-flex align-items-start\">
                                            <div class=\"recommendation-icon\">
                                                ";
            // line 156
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "type", [], "any", false, false, false, 156) == "savings")) {
                // line 157
                yield "                                                    <i class=\"fas fa-piggy-bank\"></i>
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 158
$context["recommendation"], "type", [], "any", false, false, false, 158) == "investment")) {
                // line 159
                yield "                                                    <i class=\"fas fa-chart-line\"></i>
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 160
$context["recommendation"], "type", [], "any", false, false, false, 160) == "diversification")) {
                // line 161
                yield "                                                    <i class=\"fas fa-chart-pie\"></i>
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 162
$context["recommendation"], "type", [], "any", false, false, false, 162) == "emergency")) {
                // line 163
                yield "                                                    <i class=\"fas fa-shield-alt\"></i>
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 164
$context["recommendation"], "type", [], "any", false, false, false, 164) == "positive")) {
                // line 165
                yield "                                                    <i class=\"fas fa-trophy\"></i>
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 166
$context["recommendation"], "type", [], "any", false, false, false, 166) == "opportunity")) {
                // line 167
                yield "                                                    <i class=\"fas fa-rocket\"></i>
                                                ";
            } else {
                // line 169
                yield "                                                    <i class=\"fas fa-info-circle\"></i>
                                                ";
            }
            // line 171
            yield "                                            </div>
                                            <div class=\"recommendation-content\">
                                                <div class=\"d-flex justify-content-between align-items-start\">
                                                    <h5 class=\"mb-1\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "title", [], "any", false, false, false, 174), "html", null, true);
            yield "</h5>
                                                    <span class=\"priority-badge ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "priority", [], "any", false, false, false, 175), "html", null, true);
            yield "\">
                                                        ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "priority", [], "any", false, false, false, 176)), "html", null, true);
            yield " PRIORITY
                                                    </span>
                                                </div>
                                                <p class=\"text-muted mb-2\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "message", [], "any", false, false, false, 179), "html", null, true);
            yield "</p>
                                                <div class=\"recommendation-action\">
                                                    <i class=\"fas fa-arrow-right me-1\"></i>
                                                    <span>";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "action", [], "any", false, false, false, 182), "html", null, true);
            yield "</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recommendation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class=\"row mt-5\">
            <div class=\"col-12 text-center\">
                <a href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\" class=\"btn btn-outline-primary me-2\">
                    <i class=\"fas fa-wallet me-2\"></i>Manage Wallets
                </a>
                <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\" class=\"btn btn-outline-success me-2\">
                    <i class=\"fas fa-chart-line me-2\"></i>View Investments
                </a>
                <a href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_obligation_index");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Invest Now
                </a>
            </div>
        </div>
        
    </div>
</section>

<style>
    /* Score Circle */
    .score-circle {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    .score-circle.green {
        background: linear-gradient(135deg, #28a745 0%, #1b5e2a 100%);
        box-shadow: 0 0 30px rgba(40, 167, 69, 0.3);
    }
    
    .score-circle.blue {
        background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
        box-shadow: 0 0 30px rgba(45, 106, 79, 0.3);
    }
    
    .score-circle.yellow {
        background: linear-gradient(135deg, #ffc107 0%, #d39e00 100%);
        box-shadow: 0 0 30px rgba(255, 193, 7, 0.3);
    }
    
    .score-circle.orange {
        background: linear-gradient(135deg, #fd7e14 0%, #dc6a0a 100%);
        box-shadow: 0 0 30px rgba(253, 126, 20, 0.3);
    }
    
    .score-circle.red {
        background: linear-gradient(135deg, #dc3545 0%, #a71d2a 100%);
        box-shadow: 0 0 30px rgba(220, 53, 69, 0.3);
    }
    
    .score-circle.gray {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        box-shadow: 0 0 30px rgba(108, 117, 125, 0.3);
    }
    
    .score-value {
        font-size: 48px;
        font-weight: 800;
        color: white;
    }
    
    .score-value span {
        font-size: 24px;
        font-weight: 600;
    }
    
    .score-level {
        font-size: 18px;
        font-weight: 700;
        padding: 8px 20px;
        border-radius: 30px;
        display: inline-block;
        margin-top: 15px;
    }
    
    .score-level.green {
        background: #d4edda;
        color: #155724;
    }
    
    .score-level.blue {
        background: #d1ecf1;
        color: #0c5460;
    }
    
    .score-level.yellow {
        background: #fff3cd;
        color: #856404;
    }
    
    .score-level.orange {
        background: #ffe5d0;
        color: #b45a0a;
    }
    
    .score-level.red {
        background: #f8d7da;
        color: #721c24;
    }
    
    .score-level.gray {
        background: #e9ecef;
        color: #495057;
    }
    
    /* Metric Cards */
    .metric-card {
        background: #f8f9fa;
        border-radius: 16px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        transition: transform 0.2s;
    }
    
    .metric-card:hover {
        transform: translateY(-3px);
    }
    
    .metric-icon {
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #2d6a4f;
    }
    
    .metric-info {
        flex: 1;
    }
    
    .metric-info h5 {
        margin: 0 0 5px 0;
        font-size: 14px;
        color: #6c757d;
    }
    
    .metric-score {
        font-size: 20px;
        font-weight: 700;
        color: #1a2e1a;
    }
    
    /* Recommendation Cards */
    .recommendation-card {
        background: #f8f9fa;
        border-radius: 16px;
        padding: 20px;
        border-left: 4px solid;
        transition: all 0.2s;
    }
    
    .recommendation-card:hover {
        transform: translateX(5px);
    }
    
    .recommendation-card.savings {
        border-left-color: #28a745;
    }
    
    .recommendation-card.investment {
        border-left-color: #2d6a4f;
    }
    
    .recommendation-card.diversification {
        border-left-color: #17a2b8;
    }
    
    .recommendation-card.emergency {
        border-left-color: #ffc107;
    }
    
    .recommendation-card.positive {
        border-left-color: #28a745;
    }
    
    .recommendation-card.opportunity {
        border-left-color: #fd7e14;
    }
    
    .recommendation-icon {
        width: 48px;
        height: 48px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .recommendation-card.savings .recommendation-icon {
        color: #28a745;
    }
    
    .recommendation-card.investment .recommendation-icon {
        color: #2d6a4f;
    }
    
    .recommendation-card.diversification .recommendation-icon {
        color: #17a2b8;
    }
    
    .recommendation-card.emergency .recommendation-icon {
        color: #ffc107;
    }
    
    .recommendation-card.positive .recommendation-icon {
        color: #28a745;
    }
    
    .recommendation-card.opportunity .recommendation-icon {
        color: #fd7e14;
    }
    
    .recommendation-content {
        flex: 1;
    }
    
    .priority-badge {
        font-size: 10px;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
        letter-spacing: 0.5px;
    }
    
    .priority-badge.high {
        background: #dc3545;
        color: white;
    }
    
    .priority-badge.medium {
        background: #ffc107;
        color: #1a2e1a;
    }
    
    .priority-badge.low {
        background: #28a745;
        color: white;
    }
    
    .recommendation-action {
        margin-top: 10px;
        font-size: 13px;
        color: #2d6a4f;
        font-weight: 600;
    }
    
    .progress-bar {
        transition: width 0.5s ease;
    }
    
    .text-primary {
        color: #2d6a4f !important;
    }
    
    .btn-primary {
        background-color: #2d6a4f;
        border-color: #2d6a4f;
    }
    
    .btn-primary:hover {
        background-color: #1b4d3b;
        border-color: #1b4d3b;
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
        return "financial_health/index.html.twig";
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
        return array (  411 => 204,  405 => 201,  399 => 198,  388 => 189,  375 => 182,  369 => 179,  363 => 176,  359 => 175,  355 => 174,  350 => 171,  346 => 169,  342 => 167,  340 => 166,  337 => 165,  335 => 164,  332 => 163,  330 => 162,  327 => 161,  325 => 160,  322 => 159,  320 => 158,  317 => 157,  315 => 156,  309 => 153,  306 => 152,  302 => 151,  275 => 129,  271 => 128,  257 => 117,  252 => 115,  237 => 103,  232 => 101,  217 => 89,  212 => 87,  197 => 75,  192 => 73,  177 => 61,  172 => 59,  141 => 33,  136 => 31,  132 => 30,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Financial Health Score - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Financial Health Score</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ & <a href=\"{{ path('app_financial_health') }}\">Financial Health</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        
        <!-- Main Score Card -->
        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto text-center\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body p-5\">
                        <h3 class=\"mb-4\">Your Financial Health Score</h3>
                        <div class=\"score-circle {{ color }} mb-4\">
                            <div class=\"score-value\">{{ score }}<span>%</span></div>
                        </div>
                        <div class=\"score-level {{ color }}\">{{ level }}</div>
                        <p class=\"text-muted mt-3\">Based on your financial activity</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Metrics Cards -->
        <div class=\"row mb-5\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"fas fa-chart-line text-primary me-2\"></i>Key Metrics
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        <div class=\"row g-4\">
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-piggy-bank\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Savings Rate</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-primary\" style=\"width: {{ metrics.savingsRate }}%\"></div>
                                        </div>
                                        <span class=\"metric-score\">{{ metrics.savingsRate }}%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-chart-line\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Investment Ratio</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-success\" style=\"width: {{ metrics.investmentRatio }}%\"></div>
                                        </div>
                                        <span class=\"metric-score\">{{ metrics.investmentRatio }}%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-chart-pie\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Diversification</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-info\" style=\"width: {{ metrics.diversification }}%\"></div>
                                        </div>
                                        <span class=\"metric-score\">{{ metrics.diversification }}%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-shield-alt\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Emergency Fund</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-warning\" style=\"width: {{ metrics.emergencyFund }}%\"></div>
                                        </div>
                                        <span class=\"metric-score\">{{ metrics.emergencyFund }}%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-bullseye\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Goal Progress</h5>
                                        <div class=\"progress mb-2\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-secondary\" style=\"width: {{ metrics.goalProgress }}%\"></div>
                                        </div>
                                        <span class=\"metric-score\">{{ metrics.goalProgress }}%</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"metric-card\">
                                    <div class=\"metric-icon\">
                                        <i class=\"fas fa-wallet\"></i>
                                    </div>
                                    <div class=\"metric-info\">
                                        <h5>Total Balance</h5>
                                        <h4 class=\"text-primary mt-2\">{{ totalBalance|number_format(2) }} DT</h4>
                                        <small class=\"text-muted\">{{ walletsCount }} wallet(s) | {{ investmentsCount }} investment(s)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recommendations -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"fas fa-lightbulb text-warning me-2\"></i>Recommendations
                        </h4>
                        <p class=\"text-muted small mt-1\">Personalized tips to improve your financial health</p>
                    </div>
                    <div class=\"card-body p-4\">
                        <div class=\"row g-4\">
                            {% for recommendation in recommendations %}
                                <div class=\"col-12\">
                                    <div class=\"recommendation-card {{ recommendation.type }}\">
                                        <div class=\"d-flex align-items-start\">
                                            <div class=\"recommendation-icon\">
                                                {% if recommendation.type == 'savings' %}
                                                    <i class=\"fas fa-piggy-bank\"></i>
                                                {% elseif recommendation.type == 'investment' %}
                                                    <i class=\"fas fa-chart-line\"></i>
                                                {% elseif recommendation.type == 'diversification' %}
                                                    <i class=\"fas fa-chart-pie\"></i>
                                                {% elseif recommendation.type == 'emergency' %}
                                                    <i class=\"fas fa-shield-alt\"></i>
                                                {% elseif recommendation.type == 'positive' %}
                                                    <i class=\"fas fa-trophy\"></i>
                                                {% elseif recommendation.type == 'opportunity' %}
                                                    <i class=\"fas fa-rocket\"></i>
                                                {% else %}
                                                    <i class=\"fas fa-info-circle\"></i>
                                                {% endif %}
                                            </div>
                                            <div class=\"recommendation-content\">
                                                <div class=\"d-flex justify-content-between align-items-start\">
                                                    <h5 class=\"mb-1\">{{ recommendation.title }}</h5>
                                                    <span class=\"priority-badge {{ recommendation.priority }}\">
                                                        {{ recommendation.priority|upper }} PRIORITY
                                                    </span>
                                                </div>
                                                <p class=\"text-muted mb-2\">{{ recommendation.message }}</p>
                                                <div class=\"recommendation-action\">
                                                    <i class=\"fas fa-arrow-right me-1\"></i>
                                                    <span>{{ recommendation.action }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class=\"row mt-5\">
            <div class=\"col-12 text-center\">
                <a href=\"{{ path('app_wallet_index') }}\" class=\"btn btn-outline-primary me-2\">
                    <i class=\"fas fa-wallet me-2\"></i>Manage Wallets
                </a>
                <a href=\"{{ path('app_investment_index') }}\" class=\"btn btn-outline-success me-2\">
                    <i class=\"fas fa-chart-line me-2\"></i>View Investments
                </a>
                <a href=\"{{ path('app_obligation_index') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Invest Now
                </a>
            </div>
        </div>
        
    </div>
</section>

<style>
    /* Score Circle */
    .score-circle {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    .score-circle.green {
        background: linear-gradient(135deg, #28a745 0%, #1b5e2a 100%);
        box-shadow: 0 0 30px rgba(40, 167, 69, 0.3);
    }
    
    .score-circle.blue {
        background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
        box-shadow: 0 0 30px rgba(45, 106, 79, 0.3);
    }
    
    .score-circle.yellow {
        background: linear-gradient(135deg, #ffc107 0%, #d39e00 100%);
        box-shadow: 0 0 30px rgba(255, 193, 7, 0.3);
    }
    
    .score-circle.orange {
        background: linear-gradient(135deg, #fd7e14 0%, #dc6a0a 100%);
        box-shadow: 0 0 30px rgba(253, 126, 20, 0.3);
    }
    
    .score-circle.red {
        background: linear-gradient(135deg, #dc3545 0%, #a71d2a 100%);
        box-shadow: 0 0 30px rgba(220, 53, 69, 0.3);
    }
    
    .score-circle.gray {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        box-shadow: 0 0 30px rgba(108, 117, 125, 0.3);
    }
    
    .score-value {
        font-size: 48px;
        font-weight: 800;
        color: white;
    }
    
    .score-value span {
        font-size: 24px;
        font-weight: 600;
    }
    
    .score-level {
        font-size: 18px;
        font-weight: 700;
        padding: 8px 20px;
        border-radius: 30px;
        display: inline-block;
        margin-top: 15px;
    }
    
    .score-level.green {
        background: #d4edda;
        color: #155724;
    }
    
    .score-level.blue {
        background: #d1ecf1;
        color: #0c5460;
    }
    
    .score-level.yellow {
        background: #fff3cd;
        color: #856404;
    }
    
    .score-level.orange {
        background: #ffe5d0;
        color: #b45a0a;
    }
    
    .score-level.red {
        background: #f8d7da;
        color: #721c24;
    }
    
    .score-level.gray {
        background: #e9ecef;
        color: #495057;
    }
    
    /* Metric Cards */
    .metric-card {
        background: #f8f9fa;
        border-radius: 16px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        transition: transform 0.2s;
    }
    
    .metric-card:hover {
        transform: translateY(-3px);
    }
    
    .metric-icon {
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #2d6a4f;
    }
    
    .metric-info {
        flex: 1;
    }
    
    .metric-info h5 {
        margin: 0 0 5px 0;
        font-size: 14px;
        color: #6c757d;
    }
    
    .metric-score {
        font-size: 20px;
        font-weight: 700;
        color: #1a2e1a;
    }
    
    /* Recommendation Cards */
    .recommendation-card {
        background: #f8f9fa;
        border-radius: 16px;
        padding: 20px;
        border-left: 4px solid;
        transition: all 0.2s;
    }
    
    .recommendation-card:hover {
        transform: translateX(5px);
    }
    
    .recommendation-card.savings {
        border-left-color: #28a745;
    }
    
    .recommendation-card.investment {
        border-left-color: #2d6a4f;
    }
    
    .recommendation-card.diversification {
        border-left-color: #17a2b8;
    }
    
    .recommendation-card.emergency {
        border-left-color: #ffc107;
    }
    
    .recommendation-card.positive {
        border-left-color: #28a745;
    }
    
    .recommendation-card.opportunity {
        border-left-color: #fd7e14;
    }
    
    .recommendation-icon {
        width: 48px;
        height: 48px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .recommendation-card.savings .recommendation-icon {
        color: #28a745;
    }
    
    .recommendation-card.investment .recommendation-icon {
        color: #2d6a4f;
    }
    
    .recommendation-card.diversification .recommendation-icon {
        color: #17a2b8;
    }
    
    .recommendation-card.emergency .recommendation-icon {
        color: #ffc107;
    }
    
    .recommendation-card.positive .recommendation-icon {
        color: #28a745;
    }
    
    .recommendation-card.opportunity .recommendation-icon {
        color: #fd7e14;
    }
    
    .recommendation-content {
        flex: 1;
    }
    
    .priority-badge {
        font-size: 10px;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
        letter-spacing: 0.5px;
    }
    
    .priority-badge.high {
        background: #dc3545;
        color: white;
    }
    
    .priority-badge.medium {
        background: #ffc107;
        color: #1a2e1a;
    }
    
    .priority-badge.low {
        background: #28a745;
        color: white;
    }
    
    .recommendation-action {
        margin-top: 10px;
        font-size: 13px;
        color: #2d6a4f;
        font-weight: 600;
    }
    
    .progress-bar {
        transition: width 0.5s ease;
    }
    
    .text-primary {
        color: #2d6a4f !important;
    }
    
    .btn-primary {
        background-color: #2d6a4f;
        border-color: #2d6a4f;
    }
    
    .btn-primary:hover {
        background-color: #1b4d3b;
        border-color: #1b4d3b;
    }
</style>

{% endblock %}", "financial_health/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\financial_health\\index.html.twig");
    }
}
