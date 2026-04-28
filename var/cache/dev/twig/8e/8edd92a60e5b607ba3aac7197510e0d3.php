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

/* pagination/bootstrap_5_custom.html.twig */
class __TwigTemplate_25b5fd7498275ebea7a3627075aaac9f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/bootstrap_5_custom.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/bootstrap_5_custom.html.twig"));

        // line 2
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            yield "    <div class=\"pagination-container\">
        <div class=\"d-flex flex-wrap justify-content-center align-items-center gap-3\">
            <!-- Pagination Links -->
            <ul class=\"pagination mb-0\">
                ";
            // line 7
            if (array_key_exists("previous", $context)) {
                // line 8
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 9, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 9, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 9, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 9, $this->source); })())])), "html", null, true);
                yield "\">
                            <i class=\"fas fa-chevron-left me-1\"></i>
                        </a>
                    </li>
                ";
            } else {
                // line 14
                yield "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\"><i class=\"fas fa-chevron-left me-1\"></i> Prev</span>
                    </li>
                ";
            }
            // line 18
            yield "
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 20
                yield "                    ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 20, $this->source); })()))) {
                    // line 21
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                    // line 22
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 22, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 22, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 22, $this->source); })()) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                        </li>
                    ";
                } else {
                    // line 25
                    yield "                        <li class=\"page-item active\">
                            <span class=\"page-link\">";
                    // line 26
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                        </li>
                    ";
                }
                // line 29
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "
                ";
            // line 31
            if (array_key_exists("next", $context)) {
                // line 32
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 33, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 33, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 33, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 33, $this->source); })())])), "html", null, true);
                yield "\">
                            >> <i class=\"fas fa-chevron-right ms-1\"></i>
                        </a>
                    </li>
                ";
            } else {
                // line 38
                yield "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\"> >> <i class=\"fas fa-chevron-right ms-1\"></i></span>
                    </li>
                ";
            }
            // line 42
            yield "            </ul>
            
            <!-- Page Info Badge -->
            <div class=\"pagination-info\">
                <span class=\"badge bg-light text-dark px-3 py-2 rounded-pill\">
                    <i class=\"fas fa-file-alt me-1 text-primary\"></i>
                    Page ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 48, $this->source); })()), "html", null, true);
            yield " of ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "
                    <span class=\"mx-1 text-muted\">|</span>
                    <i class=\"fas fa-database me-1 text-success\"></i>
                    ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 51, $this->source); })()), "html", null, true);
            yield " items
                </span>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pagination/bootstrap_5_custom.html.twig";
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
        return array (  149 => 51,  141 => 48,  133 => 42,  127 => 38,  119 => 33,  116 => 32,  114 => 31,  111 => 30,  105 => 29,  99 => 26,  96 => 25,  88 => 22,  85 => 21,  82 => 20,  78 => 19,  75 => 18,  69 => 14,  61 => 9,  58 => 8,  56 => 7,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/pagination/bootstrap_5_custom.html.twig #}
{% if pageCount > 1 %}
    <div class=\"pagination-container\">
        <div class=\"d-flex flex-wrap justify-content-center align-items-center gap-3\">
            <!-- Pagination Links -->
            <ul class=\"pagination mb-0\">
                {% if previous is defined %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                            <i class=\"fas fa-chevron-left me-1\"></i>
                        </a>
                    </li>
                {% else %}
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\"><i class=\"fas fa-chevron-left me-1\"></i> Prev</span>
                    </li>
                {% endif %}

                {% for page in pagesInRange %}
                    {% if page != current %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                        </li>
                    {% else %}
                        <li class=\"page-item active\">
                            <span class=\"page-link\">{{ page }}</span>
                        </li>
                    {% endif %}
                {% endfor %}

                {% if next is defined %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                            >> <i class=\"fas fa-chevron-right ms-1\"></i>
                        </a>
                    </li>
                {% else %}
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\"> >> <i class=\"fas fa-chevron-right ms-1\"></i></span>
                    </li>
                {% endif %}
            </ul>
            
            <!-- Page Info Badge -->
            <div class=\"pagination-info\">
                <span class=\"badge bg-light text-dark px-3 py-2 rounded-pill\">
                    <i class=\"fas fa-file-alt me-1 text-primary\"></i>
                    Page {{ current }} of {{ pageCount }}
                    <span class=\"mx-1 text-muted\">|</span>
                    <i class=\"fas fa-database me-1 text-success\"></i>
                    {{ totalCount }} items
                </span>
            </div>
        </div>
    </div>
{% endif %}", "pagination/bootstrap_5_custom.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\pagination\\bootstrap_5_custom.html.twig");
    }
}
