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
class __TwigTemplate_1fba3a2b174c0e49ce055ed8a3316f6c extends Template
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
    <div style=\"max-width:700px; margin:0 auto; background:#fff; border-radius:20px; padding:28px; box-shadow:0 20px 50px rgba(0,0,0,.08);\">
        <h2 style=\"margin:0 0 18px; color:#173b2f;\">Edit your feedback</h2>

        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 11, $this->source); })()), "rating", [], "any", false, false, false, 11), 'widget', ["attr" => ["style" => "width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; background:#fff;"]]);
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 12, $this->source); })()), "message", [], "any", false, false, false, 12), 'widget', ["attr" => ["style" => "width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; resize:none;"]]);
        yield "

            <div style=\"display:flex; gap:12px; flex-wrap:wrap;\">
                <button type=\"submit\" style=\"padding:14px 22px; background:#28a745; color:#fff; border:none; border-radius:12px; font-weight:800; cursor:pointer;\">
                    Save
                </button>

                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback_index");
        yield "\" style=\"text-decoration:none; background:#1c8f66; color:#fff; padding:14px 22px; border-radius:12px; font-weight:800;\">
                    Back
                </a>
            </div>
        ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 23, $this->source); })()), 'form_end');
        yield "
    </div>
</section>
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
        return array (  131 => 23,  124 => 19,  114 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}Edit Feedback{% endblock %}

{% block body %}
<section style=\"background:linear-gradient(135deg,#eefcf4,#d8f6e4); min-height:100vh; padding:60px 20px;\">
    <div style=\"max-width:700px; margin:0 auto; background:#fff; border-radius:20px; padding:28px; box-shadow:0 20px 50px rgba(0,0,0,.08);\">
        <h2 style=\"margin:0 0 18px; color:#173b2f;\">Edit your feedback</h2>

        {{ form_start(feedbackForm) }}
            {{ form_widget(feedbackForm.rating, {'attr': {'style': 'width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; background:#fff;'}}) }}
            {{ form_widget(feedbackForm.message, {'attr': {'style': 'width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; resize:none;'}}) }}

            <div style=\"display:flex; gap:12px; flex-wrap:wrap;\">
                <button type=\"submit\" style=\"padding:14px 22px; background:#28a745; color:#fff; border:none; border-radius:12px; font-weight:800; cursor:pointer;\">
                    Save
                </button>

                <a href=\"{{ path('app_feedback_index') }}\" style=\"text-decoration:none; background:#1c8f66; color:#fff; padding:14px 22px; border-radius:12px; font-weight:800;\">
                    Back
                </a>
            </div>
        {{ form_end(feedbackForm) }}
    </div>
</section>
{% endblock %}", "feedback/edit.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\feedback\\edit.html.twig");
    }
}
