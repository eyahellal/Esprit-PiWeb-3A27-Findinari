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

/* reclamation/pagination.html.twig */
class __TwigTemplate_c401189914cddab1d566f7b4da704dce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            yield "    <nav>
        <ul class=\"modern-pagination\">
            ";
            // line 4
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 4, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 4, $this->source); })())))) {
                // line 5
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 6, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 6, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 6, $this->source); })())])), "html", null, true);
                yield "\" class=\"page-link\" title=\"First\">
                        <i class=\"fas fa-angle-double-left\"></i>
                    </a>
                </li>
            ";
            }
            // line 11
            yield "
            ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 14, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 14, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 14, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 14, $this->source); })())])), "html", null, true);
                yield "\" class=\"page-link\" title=\"Previous\">
                        <i class=\"fas fa-angle-left\"></i>
                    </a>
                </li>
            ";
            }
            // line 19
            yield "
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 21
                yield "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 21, $this->source); })()))) {
                    // line 22
                    yield "                    <li class=\"page-item\">
                        <a href=\"";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 23, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 23, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 23, $this->source); })()) => $context["page"]])), "html", null, true);
                    yield "\" class=\"page-link\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                } else {
                    // line 26
                    yield "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                    </li>
                ";
                }
                // line 30
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "
            ";
            // line 32
            if (array_key_exists("next", $context)) {
                // line 33
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 34, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 34, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 34, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 34, $this->source); })())])), "html", null, true);
                yield "\" class=\"page-link\" title=\"Next\">
                        <i class=\"fas fa-angle-right\"></i>
                    </a>
                </li>
            ";
            }
            // line 39
            yield "
            ";
            // line 40
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 40, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 40, $this->source); })())))) {
                // line 41
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 42, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 42, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 42, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 42, $this->source); })())])), "html", null, true);
                yield "\" class=\"page-link\" title=\"Last\">
                        <i class=\"fas fa-angle-double-right\"></i>
                    </a>
                </li>
            ";
            }
            // line 47
            yield "        </ul>
    </nav>
";
        }
        // line 50
        yield "
<style>
    .modern-pagination {
        display: flex;
        align-items: center;
        gap: 8px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .modern-pagination .page-item {
        display: flex;
    }

    .modern-pagination .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 42px;
        height: 42px;
        padding: 0 8px;
        border-radius: 12px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        color: #64748b;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }

    .modern-pagination .page-link:hover {
        background: #f8fafc;
        border-color: #16a34a;
        color: #16a34a;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(22, 163, 74, 0.1);
    }

    .modern-pagination .page-item.active .page-link {
        background: #16a34a;
        border-color: #16a34a;
        color: #ffffff;
        box-shadow: 0 4px 12px rgba(22, 163, 74, 0.25);
    }

    .modern-pagination .page-item.active .page-link:hover {
        transform: none;
    }

    .modern-pagination .page-link i {
        font-size: 16px;
    }

    /* Support pour le mode sombre ou les fonds gris */
    .pagination-container {
        padding: 12px;
        border-radius: 20px;
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reclamation/pagination.html.twig";
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
        return array (  156 => 50,  151 => 47,  143 => 42,  140 => 41,  138 => 40,  135 => 39,  127 => 34,  124 => 33,  122 => 32,  119 => 31,  113 => 30,  107 => 27,  104 => 26,  96 => 23,  93 => 22,  90 => 21,  86 => 20,  83 => 19,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  59 => 6,  56 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if pageCount > 1 %}
    <nav>
        <ul class=\"modern-pagination\">
            {% if first is defined and current != first %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\" class=\"page-link\" title=\"First\">
                        <i class=\"fas fa-angle-double-left\"></i>
                    </a>
                </li>
            {% endif %}

            {% if previous is defined %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" class=\"page-link\" title=\"Previous\">
                        <i class=\"fas fa-angle-left\"></i>
                    </a>
                </li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li class=\"page-item\">
                        <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" class=\"page-link\">{{ page }}</a>
                    </li>
                {% else %}
                    <li class=\"page-item active\">
                        <span class=\"page-link\">{{ page }}</span>
                    </li>
                {% endif %}
            {% endfor %}

            {% if next is defined %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" class=\"page-link\" title=\"Next\">
                        <i class=\"fas fa-angle-right\"></i>
                    </a>
                </li>
            {% endif %}

            {% if last is defined and current != last %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\" class=\"page-link\" title=\"Last\">
                        <i class=\"fas fa-angle-double-right\"></i>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}

<style>
    .modern-pagination {
        display: flex;
        align-items: center;
        gap: 8px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .modern-pagination .page-item {
        display: flex;
    }

    .modern-pagination .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 42px;
        height: 42px;
        padding: 0 8px;
        border-radius: 12px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        color: #64748b;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }

    .modern-pagination .page-link:hover {
        background: #f8fafc;
        border-color: #16a34a;
        color: #16a34a;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(22, 163, 74, 0.1);
    }

    .modern-pagination .page-item.active .page-link {
        background: #16a34a;
        border-color: #16a34a;
        color: #ffffff;
        box-shadow: 0 4px 12px rgba(22, 163, 74, 0.25);
    }

    .modern-pagination .page-item.active .page-link:hover {
        transform: none;
    }

    .modern-pagination .page-link i {
        font-size: 16px;
    }

    /* Support pour le mode sombre ou les fonds gris */
    .pagination-container {
        padding: 12px;
        border-radius: 20px;
    }
</style>
", "reclamation/pagination.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\reclamation\\pagination.html.twig");
    }
}
