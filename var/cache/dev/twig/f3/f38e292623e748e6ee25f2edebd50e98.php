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

/* management/budget/step2.html.twig */
class __TwigTemplate_aa7a6c1f681c3913f252c7071e53e9b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/step2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/budget/step2.html.twig"));

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

        yield "New Budget - Step 2 - Fin-Dinari";
        
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
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Create New Budget</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        ";
        // line 21
        yield "        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"d-flex align-items-center justify-content-center\">

                    ";
        // line 26
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Wallet</p>
                    </div>

                    ";
        // line 35
        yield "                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>

                    ";
        // line 38
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto fw-bold text-white\"
                             style=\"width:50px; height:50px; background: #F27438; box-shadow: 0 4px 12px rgba(242,116,56,0.4);\">
                            <i class=\"fas fa-folder\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #F27438;\">Category</p>
                    </div>

                    ";
        // line 47
        yield "                    <div style=\"height:3px; width:80px; background: #e0e0e0; margin: 0 8px;\"></div>

                    ";
        // line 50
        yield "                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto\"
                             style=\"width:50px; height:50px; background: #f5f5f5; color: #999;\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #999;\">Amount</p>
                    </div>

                </div>
            </div>
        </div>

        ";
        // line 63
        yield "        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    ";
        // line 69
        yield "                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Step 2 of 3</p>
                                <h4 class=\"fw-bold mb-0\">Choose a Category</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-folder fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 84
        yield "                    <div class=\"card-body p-4\">
                        <p class=\"text-muted mb-4\">Select an active category for this budget:</p>

                        <form method=\"post\" action=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step2");
        yield "\">
                            <div class=\"row\">
                                ";
        // line 89
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 89, $this->source); })()))) {
            // line 90
            yield "                                    <div class=\"col-12 text-center py-4\">
                                        <div class=\"rounded-4 p-4\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                                            <i class=\"fas fa-folder-open fa-2x mb-3\" style=\"color: #F27438;\"></i>
                                            <h5 style=\"color: #26474E;\">No active categories</h5>
                                            <p class=\"text-muted small\">Create an active category first</p>
                                            <a href=\"";
            // line 95
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
            yield "\" class=\"btn btn-sm\"
                                               style=\"background: #F27438; color: white; border-radius: 10px;\">
                                                <i class=\"fas fa-plus me-1\"></i>Create Category
                                            </a>
                                        </div>
                                    </div>
                                ";
        } else {
            // line 102
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 102, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 103
                yield "                                        <div class=\"col-md-6 mb-3\">
                                            <input type=\"radio\" name=\"categorie_id\"
                                                   id=\"cat_";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 105), "html", null, true);
                yield "\"
                                                   value=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 106), "html", null, true);
                yield "\"
                                                   class=\"d-none cat-radio\">
                                            <label for=\"cat_";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 108), "html", null, true);
                yield "\"
                                                   class=\"cat-option w-100 rounded-4 p-3 d-flex align-items-center gap-3\"
                                                   style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                     style=\"width:50px; height:50px; background: ";
                // line 112
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", true, true, false, 112) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 112)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 112), "html", null, true)) : ("#F27438"));
                yield ";\">
                                                    <i class=\"fas ";
                // line 113
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", true, true, false, 113) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 113)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 113), "html", null, true)) : ("fa-folder"));
                yield " text-white\"></i>
                                                </div>
                                                <div>
                                                    <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 116), "html", null, true);
                yield "</h6>
                                                    ";
                // line 117
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 118
                    yield "                                                        <p class=\"text-muted small mb-0\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 118), "html", null, true);
                    yield "</p>
                                                    ";
                }
                // line 120
                yield "                                                </div>
                                            </label>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "                                ";
        }
        // line 125
        yield "                            </div>

                            <hr class=\"my-4\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step1");
        yield "\"
                                   class=\"btn px-4\"
                                   style=\"background: #f5f5f5; color: #26474E; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Back
                                </a>
                                <button type=\"submit\" class=\"btn px-4\"
                                        style=\"background: #F27438; color: white; border-radius: 10px;\">
                                    Next: Set Amount <i class=\"fas fa-arrow-right ms-1\"></i>
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
    .cat-radio:checked + .cat-option {
        border-color: #F27438 !important;
        background: #fff3ee;
        box-shadow: 0 4px 12px rgba(242,116,56,0.2);
    }
    .cat-option:hover {
        border-color: #F27438 !important;
        background: #fff8f5;
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
        return "management/budget/step2.html.twig";
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
        return array (  282 => 130,  275 => 125,  272 => 124,  263 => 120,  257 => 118,  255 => 117,  251 => 116,  245 => 113,  241 => 112,  234 => 108,  229 => 106,  225 => 105,  221 => 103,  216 => 102,  206 => 95,  199 => 90,  197 => 89,  192 => 87,  187 => 84,  171 => 69,  164 => 63,  150 => 50,  146 => 47,  136 => 38,  132 => 35,  122 => 26,  116 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Budget - Step 2 - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Create New Budget</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        {# Progress Bar #}
        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"d-flex align-items-center justify-content-center\">

                    {# Step 1 - Done #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Wallet</p>
                    </div>

                    {# Line - done #}
                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>

                    {# Step 2 - Active #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto fw-bold text-white\"
                             style=\"width:50px; height:50px; background: #F27438; box-shadow: 0 4px 12px rgba(242,116,56,0.4);\">
                            <i class=\"fas fa-folder\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #F27438;\">Category</p>
                    </div>

                    {# Line #}
                    <div style=\"height:3px; width:80px; background: #e0e0e0; margin: 0 8px;\"></div>

                    {# Step 3 - Inactive #}
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto\"
                             style=\"width:50px; height:50px; background: #f5f5f5; color: #999;\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #999;\">Amount</p>
                    </div>

                </div>
            </div>
        </div>

        {# Content #}
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card border-0 rounded-4\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    {# Card Header #}
                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Step 2 of 3</p>
                                <h4 class=\"fw-bold mb-0\">Choose a Category</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-folder fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    {# Card Body #}
                    <div class=\"card-body p-4\">
                        <p class=\"text-muted mb-4\">Select an active category for this budget:</p>

                        <form method=\"post\" action=\"{{ path('app_budget_new_step2') }}\">
                            <div class=\"row\">
                                {% if categories is empty %}
                                    <div class=\"col-12 text-center py-4\">
                                        <div class=\"rounded-4 p-4\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                                            <i class=\"fas fa-folder-open fa-2x mb-3\" style=\"color: #F27438;\"></i>
                                            <h5 style=\"color: #26474E;\">No active categories</h5>
                                            <p class=\"text-muted small\">Create an active category first</p>
                                            <a href=\"{{ path('app_categorie_new') }}\" class=\"btn btn-sm\"
                                               style=\"background: #F27438; color: white; border-radius: 10px;\">
                                                <i class=\"fas fa-plus me-1\"></i>Create Category
                                            </a>
                                        </div>
                                    </div>
                                {% else %}
                                    {% for categorie in categories %}
                                        <div class=\"col-md-6 mb-3\">
                                            <input type=\"radio\" name=\"categorie_id\"
                                                   id=\"cat_{{ categorie.id }}\"
                                                   value=\"{{ categorie.id }}\"
                                                   class=\"d-none cat-radio\">
                                            <label for=\"cat_{{ categorie.id }}\"
                                                   class=\"cat-option w-100 rounded-4 p-3 d-flex align-items-center gap-3\"
                                                   style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                     style=\"width:50px; height:50px; background: {{ categorie.color ?? '#F27438' }};\">
                                                    <i class=\"fas {{ categorie.icon ?? 'fa-folder' }} text-white\"></i>
                                                </div>
                                                <div>
                                                    <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">{{ categorie.nom }}</h6>
                                                    {% if categorie.description %}
                                                        <p class=\"text-muted small mb-0\">{{ categorie.description }}</p>
                                                    {% endif %}
                                                </div>
                                            </label>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>

                            <hr class=\"my-4\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"{{ path('app_budget_new_step1') }}\"
                                   class=\"btn px-4\"
                                   style=\"background: #f5f5f5; color: #26474E; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Back
                                </a>
                                <button type=\"submit\" class=\"btn px-4\"
                                        style=\"background: #F27438; color: white; border-radius: 10px;\">
                                    Next: Set Amount <i class=\"fas fa-arrow-right ms-1\"></i>
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
    .cat-radio:checked + .cat-option {
        border-color: #F27438 !important;
        background: #fff3ee;
        box-shadow: 0 4px 12px rgba(242,116,56,0.2);
    }
    .cat-option:hover {
        border-color: #F27438 !important;
        background: #fff8f5;
    }
</style>

{% endblock %}", "management/budget/step2.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\management\\budget\\step2.html.twig");
    }
}
