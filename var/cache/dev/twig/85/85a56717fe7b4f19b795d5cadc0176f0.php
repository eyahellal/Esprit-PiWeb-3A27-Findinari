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
class __TwigTemplate_31998a8069a7348eb22bb709ebe8eb6b extends Template
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
               style=\"background: linear-gradient(135deg, #F27438, #F9968B); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(242,116,56,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Budget
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
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Budgets</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 35, $this->source); })())), "html", null, true);
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
                        <h2 class=\"fw-bold mb-0\">
                            ";
        // line 51
        $context["total"] = 0;
        // line 52
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
            // line 53
            yield "                                ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 53, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "montantMax", [], "any", false, false, false, 53));
            // line 54
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['budget'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()), 2), "html", null, true);
        yield "
                        </h2>
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
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Categories Used</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 71, $this->source); })())), "html", null, true);
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
        // line 83
        yield "    <div class=\"row\">
        ";
        // line 84
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 84, $this->source); })()))) {
            // line 85
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                    <i class=\"fas fa-chart-pie fa-3x mb-3\" style=\"color: #F27438;\"></i>
                    <h4 style=\"color: #26474E;\">No budgets found</h4>
                    <p class=\"text-muted\">Start by creating your first budget</p>
                    <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step1");
            yield "\" class=\"btn mt-2\"
                       style=\"background: #F27438; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Create Budget
                    </a>
                </div>
            </div>
        ";
        } else {
            // line 97
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 97, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
                // line 98
                yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4 budget-card\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;\">

                        ";
                // line 103
                yield "                        <div class=\"rounded-top-4 p-4 text-white\"
                             style=\"background: ";
                // line 104
                yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 104), "color", [], "any", false, false, false, 104))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 104), "color", [], "any", false, false, false, 104), "html", null, true)) : ("#F27438"));
                yield ";\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">
                                        ";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 108), "pays", [], "any", false, false, false, 108), "html", null, true);
                yield "
                                    </p>
                                    <h4 class=\"fw-bold mb-0\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 110), "nom", [], "any", false, false, false, 110), "html", null, true);
                yield "</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas ";
                // line 114
                yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 114), "icon", [], "any", false, false, false, 114))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 114), "icon", [], "any", false, false, false, 114), "html", null, true)) : ("fa-chart-pie"));
                yield " fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        ";
                // line 120
                yield "                        <div class=\"card-body p-4\">

                            ";
                // line 123
                yield "                            <div class=\"mb-3\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Max Amount</p>
                                <h3 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    ";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "montantMax", [], "any", false, false, false, 126), 2), "html", null, true);
                yield "
                                    <span class=\"fs-5 text-muted\">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 127), "devise", [], "any", false, false, false, 127), "html", null, true);
                yield "</span>
                                </h3>
                            </div>

                            ";
                // line 132
                yield "                            <div class=\"d-flex gap-2 flex-wrap mb-3\">
                                <span class=\"badge rounded-pill px-3 py-2\"
                                      style=\"background: #e8f5e9; color: #2d6a4f;\">
                                    <i class=\"fas fa-calendar me-1\"></i>
                                    ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateBudget", [], "any", false, false, false, 136), "d/m/Y"), "html", null, true);
                yield "
                                </span>
                                <span class=\"badge rounded-pill px-3 py-2\"
                                      style=\"background: #e3f2fd; color: #1e3a5f;\">
                                    <i class=\"fas fa-clock me-1\"></i>
                                    ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dureeBudget", [], "any", false, false, false, 141), "html", null, true);
                yield " days
                                </span>
                            </div>

                            <hr class=\"my-3\">

                            ";
                // line 148
                yield "                            <div class=\"d-flex gap-2\">
                                <a href=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                yield "\"
                                class=\"btn btn-sm flex-fill edit-btn\"
                                style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-edit me-1\"></i>Edit
                                </a>
                                <form method=\"post\" action=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 154)]), "html", null, true);
                yield "\"
                                      onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 156))), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-sm delete-btn\"
                                            style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
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
            // line 167
            yield "        ";
        }
        // line 168
        yield "    </div>

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
        return array (  348 => 168,  345 => 167,  328 => 156,  323 => 154,  315 => 149,  312 => 148,  303 => 141,  295 => 136,  289 => 132,  282 => 127,  278 => 126,  273 => 123,  269 => 120,  261 => 114,  254 => 110,  249 => 108,  242 => 104,  239 => 103,  233 => 98,  228 => 97,  218 => 90,  211 => 85,  209 => 84,  206 => 83,  192 => 71,  172 => 55,  166 => 54,  163 => 53,  158 => 52,  156 => 51,  137 => 35,  128 => 28,  118 => 20,  108 => 12,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
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
                        <h2 class=\"fw-bold mb-0\">{{ budgets|length }}</h2>
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
                        <h2 class=\"fw-bold mb-0\">
                            {% set total = 0 %}
                            {% for budget in budgets %}
                                {% set total = total + budget.montantMax %}
                            {% endfor %}
                            {{ total|number_format(2) }}
                        </h2>
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
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Categories Used</p>
                        <h2 class=\"fw-bold mb-0\">{{ budgets|length }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-folder fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Budgets Grid #}
    <div class=\"row\">
        {% if budgets is empty %}
            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                    <i class=\"fas fa-chart-pie fa-3x mb-3\" style=\"color: #F27438;\"></i>
                    <h4 style=\"color: #26474E;\">No budgets found</h4>
                    <p class=\"text-muted\">Start by creating your first budget</p>
                    <a href=\"{{ path('app_budget_new_step1') }}\" class=\"btn mt-2\"
                       style=\"background: #F27438; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Create Budget
                    </a>
                </div>
            </div>
        {% else %}
            {% for budget in budgets %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4 budget-card\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;\">

                        {# Card Header #}
                        <div class=\"rounded-top-4 p-4 text-white\"
                             style=\"background: {{ budget.categorie.color is not null ? budget.categorie.color : '#F27438' }};\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">
                                        {{ budget.wallet.pays }}
                                    </p>
                                    <h4 class=\"fw-bold mb-0\">{{ budget.categorie.nom }}</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas {{ budget.categorie.icon is not null ? budget.categorie.icon : 'fa-chart-pie' }} fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        {# Card Body #}
                        <div class=\"card-body p-4\">

                            {# Amount #}
                            <div class=\"mb-3\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Max Amount</p>
                                <h3 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    {{ budget.montantMax|number_format(2) }}
                                    <span class=\"fs-5 text-muted\">{{ budget.wallet.devise }}</span>
                                </h3>
                            </div>

                            {# Details #}
                            <div class=\"d-flex gap-2 flex-wrap mb-3\">
                                <span class=\"badge rounded-pill px-3 py-2\"
                                      style=\"background: #e8f5e9; color: #2d6a4f;\">
                                    <i class=\"fas fa-calendar me-1\"></i>
                                    {{ budget.dateBudget|date('d/m/Y') }}
                                </span>
                                <span class=\"badge rounded-pill px-3 py-2\"
                                      style=\"background: #e3f2fd; color: #1e3a5f;\">
                                    <i class=\"fas fa-clock me-1\"></i>
                                    {{ budget.dureeBudget }} days
                                </span>
                            </div>

                            <hr class=\"my-3\">

                            {# Actions #}
                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_budget_edit', {'id': budget.id}) }}\"
                                class=\"btn btn-sm flex-fill edit-btn\"
                                style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-edit me-1\"></i>Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('app_budget_delete', {'id': budget.id}) }}\"
                                      onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ budget.id) }}\">
                                    <button class=\"btn btn-sm delete-btn\"
                                            style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
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

{% endblock %}", "management/budget/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\management\\budget\\index.html.twig");
    }
}
