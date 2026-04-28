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

/* admin/dashboard_overview.html.twig */
class __TwigTemplate_fbb1a7f6e917eea69098e2b0b3d99c2d extends Template
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
        return "front/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard_overview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard_overview.html.twig"));

        $this->parent = $this->load("front/layout.html.twig", 1);
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

        yield "Overview Dashboard";
        
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
        yield "<section class=\"py-4\" style=\"background: #f5f7fb; min-height: 100vh;\">
    <div class=\"container-fluid px-4\">
        <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
            <div>
                <h2 class=\"fw-bold mb-1\">Overview Dashboard</h2>
                <p class=\"text-muted mb-0\">Users, wallets, investments, feedback and satisfaction overview</p>
            </div>
            <div class=\"badge rounded-pill bg-dark px-3 py-2 fs-6\">
                FinDinari Admin Panel
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-md-6 col-xl-3\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4\">
                    <div class=\"card-body\">
                        <div class=\"text-muted small mb-2\">Total Users</div>
                        <h3 class=\"fw-bold\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</h3>
                        <div class=\"mt-2 small text-success\">Active users: ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeUsers"]) || array_key_exists("activeUsers", $context) ? $context["activeUsers"] : (function () { throw new RuntimeError('Variable "activeUsers" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-xl-3\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4\">
                    <div class=\"card-body\">
                        <div class=\"text-muted small mb-2\">Total Wallets</div>
                        <h3 class=\"fw-bold\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalWallets"]) || array_key_exists("totalWallets", $context) ? $context["totalWallets"] : (function () { throw new RuntimeError('Variable "totalWallets" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "</h3>
                        <div class=\"mt-2 small text-muted\">Face enabled users: ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["faceEnabledUsers"]) || array_key_exists("faceEnabledUsers", $context) ? $context["faceEnabledUsers"] : (function () { throw new RuntimeError('Variable "faceEnabledUsers" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-xl-2\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4\">
                    <div class=\"card-body\">
                        <div class=\"text-muted small mb-2\">Investments</div>
                        <h3 class=\"fw-bold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalInvestments"]) || array_key_exists("totalInvestments", $context) ? $context["totalInvestments"] : (function () { throw new RuntimeError('Variable "totalInvestments" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "</h3>
                        <div class=\"mt-2 small text-muted\">All investment records</div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-xl-2\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4\">
                    <div class=\"card-body\">
                        <div class=\"text-muted small mb-2\">Feedbacks</div>
                        <h3 class=\"fw-bold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFeedbacks"]) || array_key_exists("totalFeedbacks", $context) ? $context["totalFeedbacks"] : (function () { throw new RuntimeError('Variable "totalFeedbacks" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</h3>
                        <div class=\"mt-2 small text-muted\">Average rating: ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "/5</div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-12 col-xl-2\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4 bg-dark text-white\">
                    <div class=\"card-body\">
                        <div class=\"small mb-2\" style=\"opacity:.8;\">Satisfaction</div>
                        <h3 class=\"fw-bold\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["satisfactionRate"]) || array_key_exists("satisfactionRate", $context) ? $context["satisfactionRate"] : (function () { throw new RuntimeError('Variable "satisfactionRate" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "%</h3>
                        <div class=\"progress mt-3\" style=\"height: 8px;\">
                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["satisfactionRate"]) || array_key_exists("satisfactionRate", $context) ? $context["satisfactionRate"] : (function () { throw new RuntimeError('Variable "satisfactionRate" does not exist.', 65, $this->source); })()), "html", null, true);
        yield "%\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-8\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Users Growth</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"usersGrowthChart\" height=\"110\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Users by Role</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"usersRoleChart\" height=\"260\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-6\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Wallets by Currency</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"walletCurrencyCountChart\" height=\"120\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Wallet Balance by Currency</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"walletCurrencyBalanceChart\" height=\"120\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Wallets by Country</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"walletCountryChart\" height=\"250\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Feedback Ratings</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"feedbackRatingChart\" height=\"250\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Investment Breakdown</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"investmentBreakdownChart\" height=\"250\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-8\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Feedback Timeline</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"feedbackTimelineChart\" height=\"110\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Investment Stats</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-4 p-3 rounded-3\" style=\"background:#f8f9fa;\">
                            <div class=\"text-muted small\">Obligation Investments</div>
                            <div class=\"fs-4 fw-bold\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["obligationInvestmentStats"] ?? null), "total_count", [], "any", true, true, false, 175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligationInvestmentStats"]) || array_key_exists("obligationInvestmentStats", $context) ? $context["obligationInvestmentStats"] : (function () { throw new RuntimeError('Variable "obligationInvestmentStats" does not exist.', 175, $this->source); })()), "total_count", [], "any", false, false, false, 175), 0)) : (0)), "html", null, true);
        yield "</div>
                            <div class=\"small text-muted\">
                                Total amount: ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["obligationInvestmentStats"] ?? null), "total_amount", [], "any", true, true, false, 177)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligationInvestmentStats"]) || array_key_exists("obligationInvestmentStats", $context) ? $context["obligationInvestmentStats"] : (function () { throw new RuntimeError('Variable "obligationInvestmentStats" does not exist.', 177, $this->source); })()), "total_amount", [], "any", false, false, false, 177), 0)) : (0)), 2, ".", ","), "html", null, true);
        yield "
                            </div>
                            <div class=\"small text-muted\">
                                Average amount: ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["obligationInvestmentStats"] ?? null), "average_amount", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligationInvestmentStats"]) || array_key_exists("obligationInvestmentStats", $context) ? $context["obligationInvestmentStats"] : (function () { throw new RuntimeError('Variable "obligationInvestmentStats" does not exist.', 180, $this->source); })()), "average_amount", [], "any", false, false, false, 180), 0)) : (0)), 2, ".", ","), "html", null, true);
        yield "
                            </div>
                        </div>

                        <div class=\"p-3 rounded-3\" style=\"background:#f8f9fa;\">
                            <div class=\"text-muted small\">Action Portfolios</div>
                            <div class=\"fs-4 fw-bold\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["portfolioStats"] ?? null), "total_count", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["portfolioStats"]) || array_key_exists("portfolioStats", $context) ? $context["portfolioStats"] : (function () { throw new RuntimeError('Variable "portfolioStats" does not exist.', 186, $this->source); })()), "total_count", [], "any", false, false, false, 186), 0)) : (0)), "html", null, true);
        yield "</div>
                            <div class=\"small text-muted\">
                                Average rendement: ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["portfolioStats"] ?? null), "average_rendement", [], "any", true, true, false, 188)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["portfolioStats"]) || array_key_exists("portfolioStats", $context) ? $context["portfolioStats"] : (function () { throw new RuntimeError('Variable "portfolioStats" does not exist.', 188, $this->source); })()), "average_rendement", [], "any", false, false, false, 188), 0)) : (0)), 2, ".", ","), "html", null, true);
        yield "%
                            </div>
                            <div class=\"small text-muted\">
                                Max rendement: ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["portfolioStats"] ?? null), "max_rendement", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["portfolioStats"]) || array_key_exists("portfolioStats", $context) ? $context["portfolioStats"] : (function () { throw new RuntimeError('Variable "portfolioStats" does not exist.', 191, $this->source); })()), "max_rendement", [], "any", false, false, false, 191), 0)) : (0)), 2, ".", ","), "html", null, true);
        yield "%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-6\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-semibold\">Wallet Summary by Currency</h5>
                    </div>
                    <div class=\"card-body table-responsive\">
                        <table class=\"table align-middle\">
                            <thead>
                                <tr>
                                    <th>Currency</th>
                                    <th>Wallets</th>
                                    <th>Total Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["walletTotalsByCurrency"]) || array_key_exists("walletTotalsByCurrency", $context) ? $context["walletTotalsByCurrency"] : (function () { throw new RuntimeError('Variable "walletTotalsByCurrency" does not exist.', 215, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 216
            yield "                                    <tr>
                                        <td><span class=\"badge bg-dark\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "devise", [], "any", false, false, false, 217), "html", null, true);
            yield "</span></td>
                                        <td>";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_wallets", [], "any", false, false, false, 218), "html", null, true);
            yield "</td>
                                        <td>";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_balance", [], "any", false, false, false, 219), 2, ".", ","), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 221
        if (!$context['_iterated']) {
            // line 222
            yield "                                    <tr>
                                        <td colspan=\"3\" class=\"text-center text-muted\">No wallet data</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Recent Feedbacks</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentFeedbacks"]) || array_key_exists("recentFeedbacks", $context) ? $context["recentFeedbacks"] : (function () { throw new RuntimeError('Variable "recentFeedbacks" does not exist.', 238, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
            // line 239
            yield "                            <div class=\"border rounded-3 p-3 mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <div class=\"fw-semibold\">";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "user_email", [], "any", false, false, false, 241), "html", null, true);
            yield "</div>
                                    <span class=\"badge bg-warning text-dark\">⭐ ";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "rating", [], "any", false, false, false, 242), "html", null, true);
            yield "/5</span>
                                </div>
                                <div class=\"text-muted small mb-2\">";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "created_at", [], "any", false, false, false, 244), "Y-m-d H:i"), "html", null, true);
            yield "</div>
                                <div>";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "message", [], "any", false, false, false, 245), "html", null, true);
            yield "</div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 247
        if (!$context['_iterated']) {
            // line 248
            yield "                            <div class=\"text-muted\">No feedback yet.</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feedback'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Recent Users</h5>
                    </div>
                    <div class=\"card-body table-responsive\">
                        <table class=\"table table-hover align-middle\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentUsers"]) || array_key_exists("recentUsers", $context) ? $context["recentUsers"] : (function () { throw new RuntimeError('Variable "recentUsers" does not exist.', 274, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 275
            yield "                                    <tr>
                                        <td>#";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 276), "html", null, true);
            yield "</td>
                                        <td>";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 277), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 277), "html", null, true);
            yield "</td>
                                        <td>";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "gmail", [], "any", false, false, false, 278), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge ";
            // line 280
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 280) == "ADMIN")) {
                yield "bg-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 280) == "INFLUENCER")) {
                yield "bg-info text-dark";
            } else {
                yield "bg-secondary";
            }
            yield "\">
                                                ";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 281), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>
                                            <span class=\"badge ";
            // line 285
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 285), ["ACTIF", "ACTIVE"])) {
                yield "bg-success";
            } else {
                yield "bg-dark";
            }
            yield "\">
                                                ";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 286), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateCreation", [], "any", false, false, false, 289), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 291
        if (!$context['_iterated']) {
            // line 292
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center text-muted\">No users found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    const usersGrowthLabels = ";
        // line 307
        yield json_encode((isset($context["usersGrowthLabels"]) || array_key_exists("usersGrowthLabels", $context) ? $context["usersGrowthLabels"] : (function () { throw new RuntimeError('Variable "usersGrowthLabels" does not exist.', 307, $this->source); })()));
        yield ";
    const usersGrowthValues = ";
        // line 308
        yield json_encode((isset($context["usersGrowthValues"]) || array_key_exists("usersGrowthValues", $context) ? $context["usersGrowthValues"] : (function () { throw new RuntimeError('Variable "usersGrowthValues" does not exist.', 308, $this->source); })()));
        yield ";

    const walletCurrencyLabels = ";
        // line 310
        yield json_encode((isset($context["walletCurrencyLabels"]) || array_key_exists("walletCurrencyLabels", $context) ? $context["walletCurrencyLabels"] : (function () { throw new RuntimeError('Variable "walletCurrencyLabels" does not exist.', 310, $this->source); })()));
        yield ";
    const walletCurrencyCounts = ";
        // line 311
        yield json_encode((isset($context["walletCurrencyCounts"]) || array_key_exists("walletCurrencyCounts", $context) ? $context["walletCurrencyCounts"] : (function () { throw new RuntimeError('Variable "walletCurrencyCounts" does not exist.', 311, $this->source); })()));
        yield ";
    const walletCurrencyBalances = ";
        // line 312
        yield json_encode((isset($context["walletCurrencyBalances"]) || array_key_exists("walletCurrencyBalances", $context) ? $context["walletCurrencyBalances"] : (function () { throw new RuntimeError('Variable "walletCurrencyBalances" does not exist.', 312, $this->source); })()));
        yield ";

    const countryLabels = ";
        // line 314
        yield json_encode((isset($context["countryLabels"]) || array_key_exists("countryLabels", $context) ? $context["countryLabels"] : (function () { throw new RuntimeError('Variable "countryLabels" does not exist.', 314, $this->source); })()));
        yield ";
    const countryValues = ";
        // line 315
        yield json_encode((isset($context["countryValues"]) || array_key_exists("countryValues", $context) ? $context["countryValues"] : (function () { throw new RuntimeError('Variable "countryValues" does not exist.', 315, $this->source); })()));
        yield ";

    const roleLabels = ";
        // line 317
        yield json_encode((isset($context["roleLabels"]) || array_key_exists("roleLabels", $context) ? $context["roleLabels"] : (function () { throw new RuntimeError('Variable "roleLabels" does not exist.', 317, $this->source); })()));
        yield ";
    const roleValues = ";
        // line 318
        yield json_encode((isset($context["roleValues"]) || array_key_exists("roleValues", $context) ? $context["roleValues"] : (function () { throw new RuntimeError('Variable "roleValues" does not exist.', 318, $this->source); })()));
        yield ";

    const feedbackLabels = ";
        // line 320
        yield json_encode((isset($context["feedbackLabels"]) || array_key_exists("feedbackLabels", $context) ? $context["feedbackLabels"] : (function () { throw new RuntimeError('Variable "feedbackLabels" does not exist.', 320, $this->source); })()));
        yield ";
    const feedbackValues = ";
        // line 321
        yield json_encode((isset($context["feedbackValues"]) || array_key_exists("feedbackValues", $context) ? $context["feedbackValues"] : (function () { throw new RuntimeError('Variable "feedbackValues" does not exist.', 321, $this->source); })()));
        yield ";

    const feedbackTimelineLabels = ";
        // line 323
        yield json_encode((isset($context["feedbackTimelineLabels"]) || array_key_exists("feedbackTimelineLabels", $context) ? $context["feedbackTimelineLabels"] : (function () { throw new RuntimeError('Variable "feedbackTimelineLabels" does not exist.', 323, $this->source); })()));
        yield ";
    const feedbackTimelineValues = ";
        // line 324
        yield json_encode((isset($context["feedbackTimelineValues"]) || array_key_exists("feedbackTimelineValues", $context) ? $context["feedbackTimelineValues"] : (function () { throw new RuntimeError('Variable "feedbackTimelineValues" does not exist.', 324, $this->source); })()));
        yield ";

    const investmentBreakdownLabels = ";
        // line 326
        yield json_encode((isset($context["investmentBreakdownLabels"]) || array_key_exists("investmentBreakdownLabels", $context) ? $context["investmentBreakdownLabels"] : (function () { throw new RuntimeError('Variable "investmentBreakdownLabels" does not exist.', 326, $this->source); })()));
        yield ";
    const investmentBreakdownValues = ";
        // line 327
        yield json_encode((isset($context["investmentBreakdownValues"]) || array_key_exists("investmentBreakdownValues", $context) ? $context["investmentBreakdownValues"] : (function () { throw new RuntimeError('Variable "investmentBreakdownValues" does not exist.', 327, $this->source); })()));
        yield ";

    new Chart(document.getElementById('usersGrowthChart'), {
        type: 'line',
        data: {
            labels: usersGrowthLabels,
            datasets: [{
                label: 'Users',
                data: usersGrowthValues,
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13,110,253,0.12)',
                fill: true,
                tension: 0.35
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
        }
    });

    new Chart(document.getElementById('usersRoleChart'), {
        type: 'doughnut',
        data: {
            labels: roleLabels,
            datasets: [{
                data: roleValues,
                backgroundColor: ['#0d6efd', '#dc3545', '#20c997', '#6c757d', '#ffc107']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    new Chart(document.getElementById('walletCurrencyCountChart'), {
        type: 'bar',
        data: {
            labels: walletCurrencyLabels,
            datasets: [{
                label: 'Wallet count',
                data: walletCurrencyCounts,
                backgroundColor: '#198754'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
        }
    });

    new Chart(document.getElementById('walletCurrencyBalanceChart'), {
        type: 'bar',
        data: {
            labels: walletCurrencyLabels,
            datasets: [{
                label: 'Total balance',
                data: walletCurrencyBalances,
                backgroundColor: '#6610f2'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
        }
    });

    new Chart(document.getElementById('walletCountryChart'), {
        type: 'pie',
        data: {
            labels: countryLabels,
            datasets: [{
                data: countryValues,
                backgroundColor: ['#0d6efd', '#20c997', '#ffc107', '#dc3545', '#6610f2', '#6f42c1', '#198754']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    new Chart(document.getElementById('feedbackRatingChart'), {
        type: 'polarArea',
        data: {
            labels: feedbackLabels,
            datasets: [{
                data: feedbackValues,
                backgroundColor: [
                    'rgba(220,53,69,0.7)',
                    'rgba(255,193,7,0.7)',
                    'rgba(13,202,240,0.7)',
                    'rgba(25,135,84,0.7)',
                    'rgba(13,110,253,0.7)'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    new Chart(document.getElementById('investmentBreakdownChart'), {
        type: 'doughnut',
        data: {
            labels: investmentBreakdownLabels,
            datasets: [{
                data: investmentBreakdownValues,
                backgroundColor: ['#fd7e14', '#0dcaf0']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    new Chart(document.getElementById('feedbackTimelineChart'), {
        type: 'line',
        data: {
            labels: feedbackTimelineLabels,
            datasets: [{
                label: 'Feedback count',
                data: feedbackTimelineValues,
                borderColor: '#dc3545',
                backgroundColor: 'rgba(220,53,69,0.12)',
                fill: true,
                tension: 0.35
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
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
        return "admin/dashboard_overview.html.twig";
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
        return array (  615 => 327,  611 => 326,  606 => 324,  602 => 323,  597 => 321,  593 => 320,  588 => 318,  584 => 317,  579 => 315,  575 => 314,  570 => 312,  566 => 311,  562 => 310,  557 => 308,  553 => 307,  540 => 296,  531 => 292,  529 => 291,  522 => 289,  516 => 286,  508 => 285,  501 => 281,  491 => 280,  486 => 278,  480 => 277,  476 => 276,  473 => 275,  468 => 274,  442 => 250,  435 => 248,  433 => 247,  426 => 245,  422 => 244,  417 => 242,  413 => 241,  409 => 239,  404 => 238,  390 => 226,  381 => 222,  379 => 221,  372 => 219,  368 => 218,  364 => 217,  361 => 216,  356 => 215,  329 => 191,  323 => 188,  318 => 186,  309 => 180,  303 => 177,  298 => 175,  185 => 65,  180 => 63,  168 => 54,  164 => 53,  151 => 43,  139 => 34,  135 => 33,  123 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}Overview Dashboard{% endblock %}

{% block body %}
<section class=\"py-4\" style=\"background: #f5f7fb; min-height: 100vh;\">
    <div class=\"container-fluid px-4\">
        <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
            <div>
                <h2 class=\"fw-bold mb-1\">Overview Dashboard</h2>
                <p class=\"text-muted mb-0\">Users, wallets, investments, feedback and satisfaction overview</p>
            </div>
            <div class=\"badge rounded-pill bg-dark px-3 py-2 fs-6\">
                FinDinari Admin Panel
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-md-6 col-xl-3\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4\">
                    <div class=\"card-body\">
                        <div class=\"text-muted small mb-2\">Total Users</div>
                        <h3 class=\"fw-bold\">{{ totalUsers }}</h3>
                        <div class=\"mt-2 small text-success\">Active users: {{ activeUsers }}</div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-xl-3\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4\">
                    <div class=\"card-body\">
                        <div class=\"text-muted small mb-2\">Total Wallets</div>
                        <h3 class=\"fw-bold\">{{ totalWallets }}</h3>
                        <div class=\"mt-2 small text-muted\">Face enabled users: {{ faceEnabledUsers }}</div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-xl-2\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4\">
                    <div class=\"card-body\">
                        <div class=\"text-muted small mb-2\">Investments</div>
                        <h3 class=\"fw-bold\">{{ totalInvestments }}</h3>
                        <div class=\"mt-2 small text-muted\">All investment records</div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-xl-2\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4\">
                    <div class=\"card-body\">
                        <div class=\"text-muted small mb-2\">Feedbacks</div>
                        <h3 class=\"fw-bold\">{{ totalFeedbacks }}</h3>
                        <div class=\"mt-2 small text-muted\">Average rating: {{ averageRating }}/5</div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-12 col-xl-2\">
                <div class=\"card border-0 shadow-sm h-100 rounded-4 bg-dark text-white\">
                    <div class=\"card-body\">
                        <div class=\"small mb-2\" style=\"opacity:.8;\">Satisfaction</div>
                        <h3 class=\"fw-bold\">{{ satisfactionRate }}%</h3>
                        <div class=\"progress mt-3\" style=\"height: 8px;\">
                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: {{ satisfactionRate }}%\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-8\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Users Growth</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"usersGrowthChart\" height=\"110\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Users by Role</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"usersRoleChart\" height=\"260\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-6\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Wallets by Currency</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"walletCurrencyCountChart\" height=\"120\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Wallet Balance by Currency</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"walletCurrencyBalanceChart\" height=\"120\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Wallets by Country</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"walletCountryChart\" height=\"250\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Feedback Ratings</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"feedbackRatingChart\" height=\"250\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Investment Breakdown</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"investmentBreakdownChart\" height=\"250\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-8\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Feedback Timeline</h5>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"feedbackTimelineChart\" height=\"110\"></canvas>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Investment Stats</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-4 p-3 rounded-3\" style=\"background:#f8f9fa;\">
                            <div class=\"text-muted small\">Obligation Investments</div>
                            <div class=\"fs-4 fw-bold\">{{ obligationInvestmentStats.total_count|default(0) }}</div>
                            <div class=\"small text-muted\">
                                Total amount: {{ obligationInvestmentStats.total_amount|default(0)|number_format(2, '.', ',') }}
                            </div>
                            <div class=\"small text-muted\">
                                Average amount: {{ obligationInvestmentStats.average_amount|default(0)|number_format(2, '.', ',') }}
                            </div>
                        </div>

                        <div class=\"p-3 rounded-3\" style=\"background:#f8f9fa;\">
                            <div class=\"text-muted small\">Action Portfolios</div>
                            <div class=\"fs-4 fw-bold\">{{ portfolioStats.total_count|default(0) }}</div>
                            <div class=\"small text-muted\">
                                Average rendement: {{ portfolioStats.average_rendement|default(0)|number_format(2, '.', ',') }}%
                            </div>
                            <div class=\"small text-muted\">
                                Max rendement: {{ portfolioStats.max_rendement|default(0)|number_format(2, '.', ',') }}%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mb-4\">
            <div class=\"col-xl-6\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-semibold\">Wallet Summary by Currency</h5>
                    </div>
                    <div class=\"card-body table-responsive\">
                        <table class=\"table align-middle\">
                            <thead>
                                <tr>
                                    <th>Currency</th>
                                    <th>Wallets</th>
                                    <th>Total Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for item in walletTotalsByCurrency %}
                                    <tr>
                                        <td><span class=\"badge bg-dark\">{{ item.devise }}</span></td>
                                        <td>{{ item.total_wallets }}</td>
                                        <td>{{ item.total_balance|number_format(2, '.', ',') }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"3\" class=\"text-center text-muted\">No wallet data</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"card border-0 shadow-sm rounded-4 h-100\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Recent Feedbacks</h5>
                    </div>
                    <div class=\"card-body\">
                        {% for feedback in recentFeedbacks %}
                            <div class=\"border rounded-3 p-3 mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <div class=\"fw-semibold\">{{ feedback.user_email }}</div>
                                    <span class=\"badge bg-warning text-dark\">⭐ {{ feedback.rating }}/5</span>
                                </div>
                                <div class=\"text-muted small mb-2\">{{ feedback.created_at|date('Y-m-d H:i') }}</div>
                                <div>{{ feedback.message }}</div>
                            </div>
                        {% else %}
                            <div class=\"text-muted\">No feedback yet.</div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4\">
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4\">
                    <div class=\"card-header bg-white border-0 pt-4 px-4\">
                        <h5 class=\"mb-0 fw-semibold\">Recent Users</h5>
                    </div>
                    <div class=\"card-body table-responsive\">
                        <table class=\"table table-hover align-middle\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in recentUsers %}
                                    <tr>
                                        <td>#{{ user.id }}</td>
                                        <td>{{ user.prenom }} {{ user.nom }}</td>
                                        <td>{{ user.gmail }}</td>
                                        <td>
                                            <span class=\"badge {% if user.role == 'ADMIN' %}bg-danger{% elseif user.role == 'INFLUENCER' %}bg-info text-dark{% else %}bg-secondary{% endif %}\">
                                                {{ user.role }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class=\"badge {% if user.statut in ['ACTIF', 'ACTIVE'] %}bg-success{% else %}bg-dark{% endif %}\">
                                                {{ user.statut }}
                                            </span>
                                        </td>
                                        <td>{{ user.dateCreation|date('Y-m-d H:i') }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center text-muted\">No users found</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    const usersGrowthLabels = {{ usersGrowthLabels|json_encode|raw }};
    const usersGrowthValues = {{ usersGrowthValues|json_encode|raw }};

    const walletCurrencyLabels = {{ walletCurrencyLabels|json_encode|raw }};
    const walletCurrencyCounts = {{ walletCurrencyCounts|json_encode|raw }};
    const walletCurrencyBalances = {{ walletCurrencyBalances|json_encode|raw }};

    const countryLabels = {{ countryLabels|json_encode|raw }};
    const countryValues = {{ countryValues|json_encode|raw }};

    const roleLabels = {{ roleLabels|json_encode|raw }};
    const roleValues = {{ roleValues|json_encode|raw }};

    const feedbackLabels = {{ feedbackLabels|json_encode|raw }};
    const feedbackValues = {{ feedbackValues|json_encode|raw }};

    const feedbackTimelineLabels = {{ feedbackTimelineLabels|json_encode|raw }};
    const feedbackTimelineValues = {{ feedbackTimelineValues|json_encode|raw }};

    const investmentBreakdownLabels = {{ investmentBreakdownLabels|json_encode|raw }};
    const investmentBreakdownValues = {{ investmentBreakdownValues|json_encode|raw }};

    new Chart(document.getElementById('usersGrowthChart'), {
        type: 'line',
        data: {
            labels: usersGrowthLabels,
            datasets: [{
                label: 'Users',
                data: usersGrowthValues,
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13,110,253,0.12)',
                fill: true,
                tension: 0.35
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
        }
    });

    new Chart(document.getElementById('usersRoleChart'), {
        type: 'doughnut',
        data: {
            labels: roleLabels,
            datasets: [{
                data: roleValues,
                backgroundColor: ['#0d6efd', '#dc3545', '#20c997', '#6c757d', '#ffc107']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    new Chart(document.getElementById('walletCurrencyCountChart'), {
        type: 'bar',
        data: {
            labels: walletCurrencyLabels,
            datasets: [{
                label: 'Wallet count',
                data: walletCurrencyCounts,
                backgroundColor: '#198754'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
        }
    });

    new Chart(document.getElementById('walletCurrencyBalanceChart'), {
        type: 'bar',
        data: {
            labels: walletCurrencyLabels,
            datasets: [{
                label: 'Total balance',
                data: walletCurrencyBalances,
                backgroundColor: '#6610f2'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
        }
    });

    new Chart(document.getElementById('walletCountryChart'), {
        type: 'pie',
        data: {
            labels: countryLabels,
            datasets: [{
                data: countryValues,
                backgroundColor: ['#0d6efd', '#20c997', '#ffc107', '#dc3545', '#6610f2', '#6f42c1', '#198754']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    new Chart(document.getElementById('feedbackRatingChart'), {
        type: 'polarArea',
        data: {
            labels: feedbackLabels,
            datasets: [{
                data: feedbackValues,
                backgroundColor: [
                    'rgba(220,53,69,0.7)',
                    'rgba(255,193,7,0.7)',
                    'rgba(13,202,240,0.7)',
                    'rgba(25,135,84,0.7)',
                    'rgba(13,110,253,0.7)'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    new Chart(document.getElementById('investmentBreakdownChart'), {
        type: 'doughnut',
        data: {
            labels: investmentBreakdownLabels,
            datasets: [{
                data: investmentBreakdownValues,
                backgroundColor: ['#fd7e14', '#0dcaf0']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    new Chart(document.getElementById('feedbackTimelineChart'), {
        type: 'line',
        data: {
            labels: feedbackTimelineLabels,
            datasets: [{
                label: 'Feedback count',
                data: feedbackTimelineValues,
                borderColor: '#dc3545',
                backgroundColor: 'rgba(220,53,69,0.12)',
                fill: true,
                tension: 0.35
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } }
        }
    });
</script>
{% endblock %}", "admin/dashboard_overview.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\admin\\dashboard_overview.html.twig");
    }
}
