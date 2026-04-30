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

/* management/budget/edit.html.twig */
class __TwigTemplate_cbaeeac76be5849d744ff03535c5c050 extends Template
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
        return "management/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/edit.html.twig"));

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

        yield "Edit Budget - Fin-Dinari";
        
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
<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Edit Budget</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp;<a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index");
        yield "\" style=\"color: #26474E;\">Budgets</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Edit</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">

                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    ";
        // line 31
        yield "                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: ";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["budget"] ?? null), "categorie", [], "any", false, true, false, 32), "color", [], "any", true, true, false, 32) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 32, $this->source); })()), "categorie", [], "any", false, false, false, 32), "color", [], "any", false, false, false, 32)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 32, $this->source); })()), "categorie", [], "any", false, false, false, 32), "color", [], "any", false, false, false, 32), "html", null, true)) : ("#F27438"));
        yield ";\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Editing Budget</p>
                                <h4 class=\"fw-bold mb-0\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 36, $this->source); })()), "categorie", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
        yield "</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["budget"] ?? null), "categorie", [], "any", false, true, false, 40), "icon", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 40, $this->source); })()), "categorie", [], "any", false, false, false, 40), "icon", [], "any", false, false, false, 40)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 40, $this->source); })()), "categorie", [], "any", false, false, false, 40), "icon", [], "any", false, false, false, 40), "html", null, true)) : ("fa-chart-pie"));
        yield " fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 46
        yield "                    <div class=\"card-body p-4\">

                        ";
        // line 49
        yield "                        <div class=\"rounded-4 p-3 mb-4 d-flex gap-3\"
                             style=\"background: #f8f9fa;\">
                            <div class=\"flex-fill text-center p-2 rounded-3\"
                                 style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Wallet</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas fa-wallet me-1\" style=\"color: #F27438;\"></i>
                                    ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 56, $this->source); })()), "wallet", [], "any", false, false, false, 56), "pays", [], "any", false, false, false, 56), "html", null, true);
        yield "
                                </p>
                                <p class=\"text-muted small mb-0\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 58, $this->source); })()), "wallet", [], "any", false, false, false, 58), "devise", [], "any", false, false, false, 58), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"flex-fill text-center p-2 rounded-3\"
                                 style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Category</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas ";
        // line 64
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["budget"] ?? null), "categorie", [], "any", false, true, false, 64), "icon", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 64, $this->source); })()), "categorie", [], "any", false, false, false, 64), "icon", [], "any", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 64, $this->source); })()), "categorie", [], "any", false, false, false, 64), "icon", [], "any", false, false, false, 64), "html", null, true)) : ("fa-folder"));
        yield " me-1\"
                                       style=\"color: ";
        // line 65
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["budget"] ?? null), "categorie", [], "any", false, true, false, 65), "color", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 65, $this->source); })()), "categorie", [], "any", false, false, false, 65), "color", [], "any", false, false, false, 65)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 65, $this->source); })()), "categorie", [], "any", false, false, false, 65), "color", [], "any", false, false, false, 65), "html", null, true)) : ("#F27438"));
        yield ";\"></i>
                                    ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 66, $this->source); })()), "categorie", [], "any", false, false, false, 66), "nom", [], "any", false, false, false, 66), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>

                        ";
        // line 72
        yield "                        <div class=\"rounded-3 p-3 mb-4\"
                             style=\"background: #fff3ee; border-left: 4px solid #F27438;\">
                            <p class=\"mb-0 small\" style=\"color: #26474E;\">
                                <i class=\"fas fa-info-circle me-2\" style=\"color: #F27438;\"></i>
                                Wallet and category cannot be changed. Only amount, duration and date can be updated.
                            </p>
                        </div>

                        <form method=\"post\" action=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\" novalidate>

                            ";
        // line 83
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Maximum Amount
                                    <span class=\"text-muted fw-normal\">(";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 86, $this->source); })()), "wallet", [], "any", false, false, false, 86), "devise", [], "any", false, false, false, 86), "html", null, true);
        yield ")</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-money-bill-wave\"></i>
                                    </span>
                                    <input type=\"number\" name=\"montantMax\"
                                           class=\"form-control\"
                                           value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 95, $this->source); })()), "montantMax", [], "any", false, false, false, 95), "html", null, true);
        yield "\"
                                           step=\"0.01\" min=\"0.01\" required
                                           style=\"border-color: #76CDCD;\">
                                           ";
        // line 98
        if (array_key_exists("errors", $context)) {
            // line 99
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 99, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 100
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 100) == "montantMax")) {
                    // line 101
                    yield "            <div class=\"text-danger small mt-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 101), "html", null, true);
                    yield "</div>
        ";
                }
                // line 103
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 105
        yield "                                </div>
                                <small class=\"text-muted\">The maximum amount you want to spend</small>
                            </div>

                            ";
        // line 110
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Duration
                                    <span class=\"text-muted fw-normal\">(days)</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-clock\"></i>
                                    </span>
                                    <input type=\"number\" name=\"dureeBudget\"
                                           class=\"form-control\"
                                           value=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 122, $this->source); })()), "dureeBudget", [], "any", false, false, false, 122), "html", null, true);
        yield "\"
                                           min=\"1\" required
                                           style=\"border-color: #76CDCD;\">
                                            ";
        // line 125
        if (array_key_exists("errors", $context)) {
            // line 126
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 126, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 127
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 127) == "dureeBudget")) {
                    // line 128
                    yield "            <div class=\"text-danger small mt-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 128), "html", null, true);
                    yield "</div>
        ";
                }
                // line 130
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 132
        yield "                                </div>
                            </div>

                            ";
        // line 136
        yield "                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Start Date</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-calendar\"></i>
                                    </span>
                                    <input type=\"date\" name=\"dateBudget\"
                                           class=\"form-control\"
                                           value=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 145, $this->source); })()), "dateBudget", [], "any", false, false, false, 145), "Y-m-d"), "html", null, true);
        yield "\"
                                           required
                                           style=\"border-color: #76CDCD;\">
                                            ";
        // line 148
        if (array_key_exists("errors", $context)) {
            // line 149
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 149, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 150
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 150) == "dateBudget")) {
                    // line 151
                    yield "            <div class=\"text-danger small mt-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 151), "html", null, true);
                    yield "</div>
        ";
                }
                // line 153
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 155
        yield "                                </div>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index");
        yield "\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\"
                                        class=\"btn btn-sm flex-fill update-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Update Budget
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
    .update-btn:hover {
        background: #F27438 !important;
        color: white !important;
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
        return "management/budget/edit.html.twig";
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
        return array (  363 => 161,  355 => 155,  348 => 153,  342 => 151,  339 => 150,  334 => 149,  332 => 148,  326 => 145,  315 => 136,  310 => 132,  303 => 130,  297 => 128,  294 => 127,  289 => 126,  287 => 125,  281 => 122,  267 => 110,  261 => 105,  254 => 103,  248 => 101,  245 => 100,  240 => 99,  238 => 98,  232 => 95,  220 => 86,  215 => 83,  210 => 80,  200 => 72,  192 => 66,  188 => 65,  184 => 64,  175 => 58,  170 => 56,  161 => 49,  157 => 46,  149 => 40,  142 => 36,  135 => 32,  132 => 31,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'management/dashboard.html.twig' %}

{% block title %}Edit Budget - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Edit Budget</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp;<a href=\"{{ path('app_budget_index') }}\" style=\"color: #26474E;\">Budgets</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Edit</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">

                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    {# Card Header — uses category color #}
                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: {{ budget.categorie.color ?? '#F27438' }};\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Editing Budget</p>
                                <h4 class=\"fw-bold mb-0\">{{ budget.categorie.nom }}</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas {{ budget.categorie.icon ?? 'fa-chart-pie' }} fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    {# Card Body #}
                    <div class=\"card-body p-4\">

                        {# Read-only Summary #}
                        <div class=\"rounded-4 p-3 mb-4 d-flex gap-3\"
                             style=\"background: #f8f9fa;\">
                            <div class=\"flex-fill text-center p-2 rounded-3\"
                                 style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Wallet</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas fa-wallet me-1\" style=\"color: #F27438;\"></i>
                                    {{ budget.wallet.pays }}
                                </p>
                                <p class=\"text-muted small mb-0\">{{ budget.wallet.devise }}</p>
                            </div>
                            <div class=\"flex-fill text-center p-2 rounded-3\"
                                 style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Category</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas {{ budget.categorie.icon ?? 'fa-folder' }} me-1\"
                                       style=\"color: {{ budget.categorie.color ?? '#F27438' }};\"></i>
                                    {{ budget.categorie.nom }}
                                </p>
                            </div>
                        </div>

                        {# Info Note #}
                        <div class=\"rounded-3 p-3 mb-4\"
                             style=\"background: #fff3ee; border-left: 4px solid #F27438;\">
                            <p class=\"mb-0 small\" style=\"color: #26474E;\">
                                <i class=\"fas fa-info-circle me-2\" style=\"color: #F27438;\"></i>
                                Wallet and category cannot be changed. Only amount, duration and date can be updated.
                            </p>
                        </div>

                        <form method=\"post\" action=\"{{ path('app_budget_edit', {'id': budget.id}) }}\" novalidate>

                            {# Max Amount #}
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Maximum Amount
                                    <span class=\"text-muted fw-normal\">({{ budget.wallet.devise }})</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-money-bill-wave\"></i>
                                    </span>
                                    <input type=\"number\" name=\"montantMax\"
                                           class=\"form-control\"
                                           value=\"{{ budget.montantMax }}\"
                                           step=\"0.01\" min=\"0.01\" required
                                           style=\"border-color: #76CDCD;\">
                                           {% if errors is defined %}
    {% for error in errors %}
        {% if error.propertyPath == 'montantMax' %}
            <div class=\"text-danger small mt-1\">{{ error.message }}</div>
        {% endif %}
    {% endfor %}
{% endif %}
                                </div>
                                <small class=\"text-muted\">The maximum amount you want to spend</small>
                            </div>

                            {# Duration #}
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Duration
                                    <span class=\"text-muted fw-normal\">(days)</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-clock\"></i>
                                    </span>
                                    <input type=\"number\" name=\"dureeBudget\"
                                           class=\"form-control\"
                                           value=\"{{ budget.dureeBudget }}\"
                                           min=\"1\" required
                                           style=\"border-color: #76CDCD;\">
                                            {% if errors is defined %}
    {% for error in errors %}
        {% if error.propertyPath == 'dureeBudget' %}
            <div class=\"text-danger small mt-1\">{{ error.message }}</div>
        {% endif %}
    {% endfor %}
{% endif %}
                                </div>
                            </div>

                            {# Start Date #}
                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Start Date</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"
                                          style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
                                        <i class=\"fas fa-calendar\"></i>
                                    </span>
                                    <input type=\"date\" name=\"dateBudget\"
                                           class=\"form-control\"
                                           value=\"{{ budget.dateBudget|date('Y-m-d') }}\"
                                           required
                                           style=\"border-color: #76CDCD;\">
                                            {% if errors is defined %}
    {% for error in errors %}
        {% if error.propertyPath == 'dateBudget' %}
            <div class=\"text-danger small mt-1\">{{ error.message }}</div>
        {% endif %}
    {% endfor %}
{% endif %}
                                </div>
                            </div>

                            <hr class=\"my-3\">

                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_budget_index') }}\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\"
                                        class=\"btn btn-sm flex-fill update-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Update Budget
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
    .update-btn:hover {
        background: #F27438 !important;
        color: white !important;
    }
</style>

{% endblock %}", "management/budget/edit.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\budget\\edit.html.twig");
    }
}
