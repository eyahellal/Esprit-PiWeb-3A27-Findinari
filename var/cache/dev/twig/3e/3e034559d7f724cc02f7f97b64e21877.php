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

/* feedback/edit.html.twig */
class __TwigTemplate_649aff218f9ea4ba76ccc70f129805a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/edit.html.twig"));

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

        yield "Edit Feedback";
        
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
        yield "<section style=\"background:linear-gradient(135deg,#eefcf4,#d8f6e4); min-height:100vh; padding:60px 20px;\">
    <div style=\"max-width:800px; margin:0 auto; background:#fff; border-radius:20px; padding:28px; box-shadow:0 20px 50px rgba(0,0,0,.08);\">
        <h1 style=\"margin:0 0 20px; color:#173b2f;\">Edit Feedback</h1>

        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 10, $this->source); })()), 'form_start');
        yield "

            <label style=\"display:block; font-weight:800; color:#173b2f; margin-bottom:10px;\">
                Rating
            </label>

            <div id=\"star-rating\" style=\"display:flex; gap:8px; margin-bottom:16px;\">
                ";
        // line 17
        $context["selectedRating"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feedbackForm"] ?? null), "rating", [], "any", false, true, false, 17), "vars", [], "any", false, true, false, 17), "value", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 17, $this->source); })()), "rating", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), 0)) : (0));
        // line 18
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            yield "                    <span class=\"star-choice\"
                          data-value=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\"
                          style=\"font-size:34px; color:";
            // line 21
            if (($context["i"] <= (isset($context["selectedRating"]) || array_key_exists("selectedRating", $context) ? $context["selectedRating"] : (function () { throw new RuntimeError('Variable "selectedRating" does not exist.', 21, $this->source); })()))) {
                yield "#f5b301";
            } else {
                yield "#d8d8d8";
            }
            yield "; cursor:pointer; user-select:none; transition: color .2s ease;\">
                        ★
                    </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "            </div>

            <input
                type=\"hidden\"
                id=\"rating_input\"
                name=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 30, $this->source); })()), "rating", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "full_name", [], "any", false, false, false, 30), "html", null, true);
        yield "\"
                value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feedbackForm"] ?? null), "rating", [], "any", false, true, false, 31), "vars", [], "any", false, true, false, 31), "value", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 31, $this->source); })()), "rating", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        yield "\"
            >

            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 34, $this->source); })()), "rating", [], "any", false, false, false, 34), 'errors');
        yield "

            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 36, $this->source); })()), "message", [], "any", false, false, false, 36), 'widget', ["attr" => ["style" => "width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; resize:none;"]]);
        // line 40
        yield "
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 41, $this->source); })()), "message", [], "any", false, false, false, 41), 'errors');
        yield "

            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 43, $this->source); })()), "_token", [], "any", false, false, false, 43), 'widget');
        yield "

            <div style=\"display:flex; gap:12px; flex-wrap:wrap;\">
                <button type=\"submit\" style=\"padding:14px 22px; background:#28a745; color:#fff; border:none; border-radius:12px; font-weight:800; cursor:pointer;\">
                    Save Changes
                </button>

                <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback_index");
        yield "\" style=\"text-decoration:none; background:#6c757d; color:#fff; padding:14px 22px; border-radius:12px; font-weight:800;\">
                    Back
                </a>
            </div>

        ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 55, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star-choice');
    const input = document.getElementById('rating_input');

    if (!stars.length || !input) {
        return;
    }

    function paintStars(value) {
        const selected = parseInt(value || 0, 10);

        stars.forEach((star) => {
            const starValue = parseInt(star.dataset.value, 10);
            star.style.color = starValue <= selected ? '#f5b301' : '#d8d8d8';
        });
    }

    paintStars(input.value);

    stars.forEach((star) => {
        star.addEventListener('click', function () {
            const value = this.dataset.value;
            input.value = value;
            paintStars(value);
        });

        star.addEventListener('mouseenter', function () {
            paintStars(this.dataset.value);
        });

        star.addEventListener('mouseleave', function () {
            paintStars(input.value);
        });
    });
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
        return "feedback/edit.html.twig";
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
        return array (  194 => 55,  186 => 50,  176 => 43,  171 => 41,  168 => 40,  166 => 36,  161 => 34,  155 => 31,  151 => 30,  144 => 25,  130 => 21,  126 => 20,  123 => 19,  118 => 18,  116 => 17,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}Edit Feedback{% endblock %}

{% block body %}
<section style=\"background:linear-gradient(135deg,#eefcf4,#d8f6e4); min-height:100vh; padding:60px 20px;\">
    <div style=\"max-width:800px; margin:0 auto; background:#fff; border-radius:20px; padding:28px; box-shadow:0 20px 50px rgba(0,0,0,.08);\">
        <h1 style=\"margin:0 0 20px; color:#173b2f;\">Edit Feedback</h1>

        {{ form_start(feedbackForm) }}

            <label style=\"display:block; font-weight:800; color:#173b2f; margin-bottom:10px;\">
                Rating
            </label>

            <div id=\"star-rating\" style=\"display:flex; gap:8px; margin-bottom:16px;\">
                {% set selectedRating = feedbackForm.rating.vars.value|default(0) %}
                {% for i in 1..5 %}
                    <span class=\"star-choice\"
                          data-value=\"{{ i }}\"
                          style=\"font-size:34px; color:{% if i <= selectedRating %}#f5b301{% else %}#d8d8d8{% endif %}; cursor:pointer; user-select:none; transition: color .2s ease;\">
                        ★
                    </span>
                {% endfor %}
            </div>

            <input
                type=\"hidden\"
                id=\"rating_input\"
                name=\"{{ feedbackForm.rating.vars.full_name }}\"
                value=\"{{ feedbackForm.rating.vars.value|default('') }}\"
            >

            {{ form_errors(feedbackForm.rating) }}

            {{ form_widget(feedbackForm.message, {
                'attr': {
                    'style': 'width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; resize:none;'
                }
            }) }}
            {{ form_errors(feedbackForm.message) }}

            {{ form_widget(feedbackForm._token) }}

            <div style=\"display:flex; gap:12px; flex-wrap:wrap;\">
                <button type=\"submit\" style=\"padding:14px 22px; background:#28a745; color:#fff; border:none; border-radius:12px; font-weight:800; cursor:pointer;\">
                    Save Changes
                </button>

                <a href=\"{{ path('app_feedback_index') }}\" style=\"text-decoration:none; background:#6c757d; color:#fff; padding:14px 22px; border-radius:12px; font-weight:800;\">
                    Back
                </a>
            </div>

        {{ form_end(feedbackForm, {'render_rest': false}) }}
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star-choice');
    const input = document.getElementById('rating_input');

    if (!stars.length || !input) {
        return;
    }

    function paintStars(value) {
        const selected = parseInt(value || 0, 10);

        stars.forEach((star) => {
            const starValue = parseInt(star.dataset.value, 10);
            star.style.color = starValue <= selected ? '#f5b301' : '#d8d8d8';
        });
    }

    paintStars(input.value);

    stars.forEach((star) => {
        star.addEventListener('click', function () {
            const value = this.dataset.value;
            input.value = value;
            paintStars(value);
        });

        star.addEventListener('mouseenter', function () {
            paintStars(this.dataset.value);
        });

        star.addEventListener('mouseleave', function () {
            paintStars(input.value);
        });
    });
});
</script>
{% endblock %}", "feedback/edit.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\feedback\\edit.html.twig");
    }
}
