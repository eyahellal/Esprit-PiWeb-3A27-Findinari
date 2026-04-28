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

/* statistics/index.html.twig */
class __TwigTemplate_285d038dded28617c46cc339f43fb33f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistics/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistics/index.html.twig"));

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

        yield "Statistics Dashboard - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\">Statistics Dashboard</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistics");
        yield "\">Statistics</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        
        <!-- Stats Cards -->
        <div class=\"row g-4 mb-5\">
            <div class=\"col-md-3 col-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fas fa-chart-line fa-2x text-primary mb-2\"></i>
                        <h3 class=\"mb-0 text-primary\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["investmentStats"]) || array_key_exists("investmentStats", $context) ? $context["investmentStats"] : (function () { throw new RuntimeError('Variable "investmentStats" does not exist.', 30, $this->source); })()), "totalInvested", [], "any", false, false, false, 30), 2), "html", null, true);
        yield " DT</h3>
                        <p class=\"text-muted mb-0\">Total Invested</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fas fa-wallet fa-2x text-primary mb-2\"></i>
                        <h3 class=\"mb-0 text-primary\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["walletStats"]) || array_key_exists("walletStats", $context) ? $context["walletStats"] : (function () { throw new RuntimeError('Variable "walletStats" does not exist.', 39, $this->source); })()), "totalWallets", [], "any", false, false, false, 39), "html", null, true);
        yield "</h3>
                        <p class=\"text-muted mb-0\">Total Wallets</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fas fa-play-circle fa-2x text-success mb-2\"></i>
                        <h3 class=\"mb-0 text-success\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["investmentStats"]) || array_key_exists("investmentStats", $context) ? $context["investmentStats"] : (function () { throw new RuntimeError('Variable "investmentStats" does not exist.', 48, $this->source); })()), "activeInvestments", [], "any", false, false, false, 48), "html", null, true);
        yield "</h3>
                        <p class=\"text-muted mb-0\">Active Investments</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fas fa-check-circle fa-2x text-warning mb-2\"></i>
                        <h3 class=\"mb-0 text-warning\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["investmentStats"]) || array_key_exists("investmentStats", $context) ? $context["investmentStats"] : (function () { throw new RuntimeError('Variable "investmentStats" does not exist.', 57, $this->source); })()), "maturedInvestments", [], "any", false, false, false, 57), "html", null, true);
        yield "</h3>
                        <p class=\"text-muted mb-0\">Matured Investments</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Charts Row - Medium Size -->
        <div class=\"row g-4 mb-5\">
            <div class=\"col-lg-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4\">
                        <h5 class=\"mb-0 fw-bold text-primary\">📊 Investment Distribution by Obligation</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"obligationPieChart\" height=\"280\" style=\"max-height: 280px;\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4\">
                        <h5 class=\"mb-0 fw-bold text-primary\">💰 Wallet Balance by Currency</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"walletDonutChart\" height=\"280\" style=\"max-height: 280px;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Obligation Ranking - Visible Table -->
        <div class=\"row mb-5\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4\">
                        <h5 class=\"mb-0 fw-bold text-primary\">🏆 Top Performing Obligations</h5>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0\">
                                <thead style=\"background-color: #2d6a4f;\">
                                    <tr>
                                        <th style=\"color: white;\">Rank</th>
                                        <th style=\"color: white;\">Obligation Name</th>
                                        <th style=\"color: white;\">Interest Rate</th>
                                        <th style=\"color: white;\">Duration</th>
                                        <th style=\"color: white;\">Total Invested</th>
                                        <th style=\"color: white;\">Investors</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["obligationRanking"]) || array_key_exists("obligationRanking", $context) ? $context["obligationRanking"] : (function () { throw new RuntimeError('Variable "obligationRanking" does not exist.', 109, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["obligation"]) {
            // line 110
            yield "                                    <tr style=\"color: #1a2e1a; background-color: white;\">
                                        <td>
                                            ";
            // line 112
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112) == 1)) {
                yield "🥇
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 113
$context["loop"], "index", [], "any", false, false, false, 113) == 2)) {
                yield "🥈
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 114
$context["loop"], "index", [], "any", false, false, false, 114) == 3)) {
                yield "🥉
                                            ";
            } else {
                // line 115
                yield "<span style=\"color: #4b6b4b; font-weight: 500;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 115), "html", null, true);
                yield "</span>";
            }
            // line 116
            yield "                                        </td>
                                        <td style=\"color: #2d6a4f; font-weight: 600;\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "name", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                        <td><span class=\"badge bg-success\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "rate", [], "any", false, false, false, 118), "html", null, true);
            yield "%</span></td>
                                        <td style=\"color: #4b6b4b;\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "duration", [], "any", false, false, false, 119), "html", null, true);
            yield " months</td>
                                        <td style=\"color: #28a745; font-weight: 600;\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "totalInvested", [], "any", false, false, false, 120), 2), "html", null, true);
            yield " DT</td>
                                        <td style=\"color: #4b6b4b;\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "investorsCount", [], "any", false, false, false, 121), "html", null, true);
            yield "</td>
                                    </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['obligation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Maturity Forecast - Medium Chart -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4\">
                        <h5 class=\"mb-0 fw-bold text-primary\">📅 Maturity Forecast (Next 6 Months)</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"maturityBarChart\" height=\"250\" style=\"max-height: 250px;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<style>
    .text-primary { color: #2d6a4f !important; }
    .text-success { color: #28a745 !important; }
    .text-warning { color: #ffc107 !important; }
    .badge.bg-success { background-color: #28a745 !important; }
    .table th, .table td { vertical-align: middle; }
    .table-hover tbody tr:hover { background-color: #e8f5e9; }
    .card-header { background-color: white !important; }
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // Obligation Pie Chart
        const obligationData = ";
        // line 168
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["investmentStats"]) || array_key_exists("investmentStats", $context) ? $context["investmentStats"] : (function () { throw new RuntimeError('Variable "investmentStats" does not exist.', 168, $this->source); })()), "byObligation", [], "any", false, false, false, 168));
        yield ";
        const obligationLabels = Object.keys(obligationData);
        const obligationValues = Object.values(obligationData);
        
        const pieCtx = document.getElementById('obligationPieChart');
        if (pieCtx && obligationLabels.length > 0) {
            new Chart(pieCtx, {
                type: 'pie',
                data: {
                    labels: obligationLabels,
                    datasets: [{
                        data: obligationValues,
                        backgroundColor: ['#2d6a4f', '#28a745', '#20c997', '#17a2b8', '#fd7e14', '#dc3545', '#ffc107', '#6c757d', '#0dcaf0', '#d63384'],
                        borderWidth: 2,
                        borderColor: 'white'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: { 
                            position: 'bottom',
                            labels: { color: '#1a2e1a', font: { size: 11, boxWidth: 14 } }
                        },
                        tooltip: { 
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = ((value / total) * 100).toFixed(1);
                                    return `\${label}: \${value.toLocaleString()} DT (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
        }
        
        // Wallet Donut Chart
        const walletData = ";
        // line 210
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["walletStats"]) || array_key_exists("walletStats", $context) ? $context["walletStats"] : (function () { throw new RuntimeError('Variable "walletStats" does not exist.', 210, $this->source); })()), "byCurrency", [], "any", false, false, false, 210));
        yield ";
        const walletLabels = Object.keys(walletData);
        const walletValues = Object.values(walletData);
        
        const donutCtx = document.getElementById('walletDonutChart');
        if (donutCtx && walletLabels.length > 0) {
            new Chart(donutCtx, {
                type: 'doughnut',
                data: {
                    labels: walletLabels,
                    datasets: [{
                        data: walletValues,
                        backgroundColor: ['#2d6a4f', '#28a745', '#20c997', '#17a2b8', '#fd7e14', '#dc3545'],
                        borderWidth: 2,
                        borderColor: 'white'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: { 
                            position: 'bottom',
                            labels: { color: '#1a2e1a', font: { size: 11, boxWidth: 14 } }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    return `\${label}: \${value.toLocaleString()} DT`;
                                }
                            }
                        }
                    }
                }
            });
        }
        
        // Maturity Bar Chart
        const maturityData = ";
        // line 250
        yield json_encode((isset($context["maturityForecast"]) || array_key_exists("maturityForecast", $context) ? $context["maturityForecast"] : (function () { throw new RuntimeError('Variable "maturityForecast" does not exist.', 250, $this->source); })()));
        yield ";
        const maturityLabels = Object.keys(maturityData);
        const maturityValues = Object.values(maturityData);
        
        const barCtx = document.getElementById('maturityBarChart');
        if (barCtx && maturityLabels.length > 0) {
            new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: maturityLabels,
                    datasets: [{
                        label: 'Amount Maturing (DT)',
                        data: maturityValues,
                        backgroundColor: '#2d6a4f',
                        borderRadius: 8,
                        barPercentage: 0.65
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: { 
                            position: 'top',
                            labels: { color: '#1a2e1a', font: { size: 11 } }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `\${context.dataset.label}: \${context.raw.toLocaleString()} DT`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: { 
                            beginAtZero: true, 
                            title: { display: true, text: 'Amount (DT)', color: '#1a2e1a', font: { size: 11 } },
                            ticks: { color: '#1a2e1a', font: { size: 11 } },
                            grid: { color: '#e0e8e0' }
                        },
                        x: { 
                            title: { display: true, text: 'Month', color: '#1a2e1a', font: { size: 11 } },
                            ticks: { color: '#1a2e1a', font: { size: 11 }, rotation: 0 },
                            grid: { color: '#e0e8e0' }
                        }
                    }
                }
            });
        }
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
        return "statistics/index.html.twig";
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
        return array (  455 => 250,  412 => 210,  367 => 168,  358 => 162,  345 => 161,  299 => 124,  282 => 121,  278 => 120,  274 => 119,  270 => 118,  266 => 117,  263 => 116,  258 => 115,  253 => 114,  249 => 113,  245 => 112,  241 => 110,  224 => 109,  169 => 57,  157 => 48,  145 => 39,  133 => 30,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistics Dashboard - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Statistics Dashboard</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_statistics') }}\">Statistics</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        
        <!-- Stats Cards -->
        <div class=\"row g-4 mb-5\">
            <div class=\"col-md-3 col-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fas fa-chart-line fa-2x text-primary mb-2\"></i>
                        <h3 class=\"mb-0 text-primary\">{{ investmentStats.totalInvested|number_format(2) }} DT</h3>
                        <p class=\"text-muted mb-0\">Total Invested</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fas fa-wallet fa-2x text-primary mb-2\"></i>
                        <h3 class=\"mb-0 text-primary\">{{ walletStats.totalWallets }}</h3>
                        <p class=\"text-muted mb-0\">Total Wallets</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fas fa-play-circle fa-2x text-success mb-2\"></i>
                        <h3 class=\"mb-0 text-success\">{{ investmentStats.activeInvestments }}</h3>
                        <p class=\"text-muted mb-0\">Active Investments</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fas fa-check-circle fa-2x text-warning mb-2\"></i>
                        <h3 class=\"mb-0 text-warning\">{{ investmentStats.maturedInvestments }}</h3>
                        <p class=\"text-muted mb-0\">Matured Investments</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Charts Row - Medium Size -->
        <div class=\"row g-4 mb-5\">
            <div class=\"col-lg-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4\">
                        <h5 class=\"mb-0 fw-bold text-primary\">📊 Investment Distribution by Obligation</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"obligationPieChart\" height=\"280\" style=\"max-height: 280px;\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4\">
                        <h5 class=\"mb-0 fw-bold text-primary\">💰 Wallet Balance by Currency</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"walletDonutChart\" height=\"280\" style=\"max-height: 280px;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Obligation Ranking - Visible Table -->
        <div class=\"row mb-5\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4\">
                        <h5 class=\"mb-0 fw-bold text-primary\">🏆 Top Performing Obligations</h5>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0\">
                                <thead style=\"background-color: #2d6a4f;\">
                                    <tr>
                                        <th style=\"color: white;\">Rank</th>
                                        <th style=\"color: white;\">Obligation Name</th>
                                        <th style=\"color: white;\">Interest Rate</th>
                                        <th style=\"color: white;\">Duration</th>
                                        <th style=\"color: white;\">Total Invested</th>
                                        <th style=\"color: white;\">Investors</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for obligation in obligationRanking %}
                                    <tr style=\"color: #1a2e1a; background-color: white;\">
                                        <td>
                                            {% if loop.index == 1 %}🥇
                                            {% elseif loop.index == 2 %}🥈
                                            {% elseif loop.index == 3 %}🥉
                                            {% else %}<span style=\"color: #4b6b4b; font-weight: 500;\">{{ loop.index }}</span>{% endif %}
                                        </td>
                                        <td style=\"color: #2d6a4f; font-weight: 600;\">{{ obligation.name }}</td>
                                        <td><span class=\"badge bg-success\">{{ obligation.rate }}%</span></td>
                                        <td style=\"color: #4b6b4b;\">{{ obligation.duration }} months</td>
                                        <td style=\"color: #28a745; font-weight: 600;\">{{ obligation.totalInvested|number_format(2) }} DT</td>
                                        <td style=\"color: #4b6b4b;\">{{ obligation.investorsCount }}</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Maturity Forecast - Medium Chart -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-header bg-white border-0 pt-4\">
                        <h5 class=\"mb-0 fw-bold text-primary\">📅 Maturity Forecast (Next 6 Months)</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"maturityBarChart\" height=\"250\" style=\"max-height: 250px;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<style>
    .text-primary { color: #2d6a4f !important; }
    .text-success { color: #28a745 !important; }
    .text-warning { color: #ffc107 !important; }
    .badge.bg-success { background-color: #28a745 !important; }
    .table th, .table td { vertical-align: middle; }
    .table-hover tbody tr:hover { background-color: #e8f5e9; }
    .card-header { background-color: white !important; }
</style>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // Obligation Pie Chart
        const obligationData = {{ investmentStats.byObligation|json_encode|raw }};
        const obligationLabels = Object.keys(obligationData);
        const obligationValues = Object.values(obligationData);
        
        const pieCtx = document.getElementById('obligationPieChart');
        if (pieCtx && obligationLabels.length > 0) {
            new Chart(pieCtx, {
                type: 'pie',
                data: {
                    labels: obligationLabels,
                    datasets: [{
                        data: obligationValues,
                        backgroundColor: ['#2d6a4f', '#28a745', '#20c997', '#17a2b8', '#fd7e14', '#dc3545', '#ffc107', '#6c757d', '#0dcaf0', '#d63384'],
                        borderWidth: 2,
                        borderColor: 'white'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: { 
                            position: 'bottom',
                            labels: { color: '#1a2e1a', font: { size: 11, boxWidth: 14 } }
                        },
                        tooltip: { 
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = ((value / total) * 100).toFixed(1);
                                    return `\${label}: \${value.toLocaleString()} DT (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
        }
        
        // Wallet Donut Chart
        const walletData = {{ walletStats.byCurrency|json_encode|raw }};
        const walletLabels = Object.keys(walletData);
        const walletValues = Object.values(walletData);
        
        const donutCtx = document.getElementById('walletDonutChart');
        if (donutCtx && walletLabels.length > 0) {
            new Chart(donutCtx, {
                type: 'doughnut',
                data: {
                    labels: walletLabels,
                    datasets: [{
                        data: walletValues,
                        backgroundColor: ['#2d6a4f', '#28a745', '#20c997', '#17a2b8', '#fd7e14', '#dc3545'],
                        borderWidth: 2,
                        borderColor: 'white'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: { 
                            position: 'bottom',
                            labels: { color: '#1a2e1a', font: { size: 11, boxWidth: 14 } }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    return `\${label}: \${value.toLocaleString()} DT`;
                                }
                            }
                        }
                    }
                }
            });
        }
        
        // Maturity Bar Chart
        const maturityData = {{ maturityForecast|json_encode|raw }};
        const maturityLabels = Object.keys(maturityData);
        const maturityValues = Object.values(maturityData);
        
        const barCtx = document.getElementById('maturityBarChart');
        if (barCtx && maturityLabels.length > 0) {
            new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: maturityLabels,
                    datasets: [{
                        label: 'Amount Maturing (DT)',
                        data: maturityValues,
                        backgroundColor: '#2d6a4f',
                        borderRadius: 8,
                        barPercentage: 0.65
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: { 
                            position: 'top',
                            labels: { color: '#1a2e1a', font: { size: 11 } }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `\${context.dataset.label}: \${context.raw.toLocaleString()} DT`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: { 
                            beginAtZero: true, 
                            title: { display: true, text: 'Amount (DT)', color: '#1a2e1a', font: { size: 11 } },
                            ticks: { color: '#1a2e1a', font: { size: 11 } },
                            grid: { color: '#e0e8e0' }
                        },
                        x: { 
                            title: { display: true, text: 'Month', color: '#1a2e1a', font: { size: 11 } },
                            ticks: { color: '#1a2e1a', font: { size: 11 }, rotation: 0 },
                            grid: { color: '#e0e8e0' }
                        }
                    }
                }
            });
        }
    });
</script>
{% endblock %}", "statistics/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\statistics\\index.html.twig");
    }
}
