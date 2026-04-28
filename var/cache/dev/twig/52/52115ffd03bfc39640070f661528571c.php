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

/* profile/update_profile.html.twig */
class __TwigTemplate_241c97a4f6d0fda5d48f66bad70812d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/update_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/update_profile.html.twig"));

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

        yield "Update Profile";
        
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
        yield "<section style=\"
    background: linear-gradient(135deg,#b7f5d1,#7ed6a7);
    min-height: 100vh;
    padding: 60px 20px;
\">
    <div style=\"
        width: 500px;
        max-width: 100%;
        margin: 0 auto;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 20px 50px rgba(0,0,0,.15);
        padding: 35px;
    \">
        <h2 style=\"margin:0 0 20px; color:#1f3b2d;\">Update Profile</h2>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "            <div style=\"padding:12px 14px; border-radius:10px; margin-bottom:15px; background:#fdeaea; color:#a12626;\">
                ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
        ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 28, $this->source); })()), 'form_start');
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'widget', ["attr" => ["style" => "width:100%; padding:12px 14px; margin-bottom:14px; border:1px solid #cfe8d8; border-radius:10px; box-sizing:border-box; font-size:15px;"]]);
        yield "
            <div style=\"color:#c0392b; font-size:13px; margin:-8px 0 10px;\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'errors');
        yield "</div>

            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'widget', ["attr" => ["style" => "width:100%; padding:12px 14px; margin-bottom:14px; border:1px solid #cfe8d8; border-radius:10px; box-sizing:border-box; font-size:15px;"]]);
        yield "
            <div style=\"color:#c0392b; font-size:13px; margin:-8px 0 10px;\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'errors');
        yield "</div>

            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 35, $this->source); })()), "gmail", [], "any", false, false, false, 35), 'widget', ["attr" => ["style" => "width:100%; padding:12px 14px; margin-bottom:14px; border:1px solid #cfe8d8; border-radius:10px; box-sizing:border-box; font-size:15px;"]]);
        yield "
            <div style=\"color:#c0392b; font-size:13px; margin:-8px 0 10px;\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 36, $this->source); })()), "gmail", [], "any", false, false, false, 36), 'errors');
        yield "</div>

            <button type=\"submit\" style=\"width:100%; padding:12px; background:#28a745; color:#fff; border:none; border-radius:10px; font-weight:700; cursor:pointer;\">
                Save Changes
            </button>
        ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 41, $this->source); })()), 'form_end');
        yield "

        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" style=\"display:block; text-align:center; margin-top:14px; color:#1f8f66; text-decoration:none; font-weight:700;\">
            Back to profile
        </a>
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
        return "profile/update_profile.html.twig";
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
        return array (  176 => 43,  171 => 41,  163 => 36,  159 => 35,  154 => 33,  150 => 32,  145 => 30,  141 => 29,  137 => 28,  134 => 27,  125 => 24,  122 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}Update Profile{% endblock %}

{% block body %}
<section style=\"
    background: linear-gradient(135deg,#b7f5d1,#7ed6a7);
    min-height: 100vh;
    padding: 60px 20px;
\">
    <div style=\"
        width: 500px;
        max-width: 100%;
        margin: 0 auto;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 20px 50px rgba(0,0,0,.15);
        padding: 35px;
    \">
        <h2 style=\"margin:0 0 20px; color:#1f3b2d;\">Update Profile</h2>

        {% for message in app.flashes('danger') %}
            <div style=\"padding:12px 14px; border-radius:10px; margin-bottom:15px; background:#fdeaea; color:#a12626;\">
                {{ message }}
            </div>
        {% endfor %}

        {{ form_start(profileForm) }}
            {{ form_widget(profileForm.nom, {'attr': {'style': 'width:100%; padding:12px 14px; margin-bottom:14px; border:1px solid #cfe8d8; border-radius:10px; box-sizing:border-box; font-size:15px;'}}) }}
            <div style=\"color:#c0392b; font-size:13px; margin:-8px 0 10px;\">{{ form_errors(profileForm.nom) }}</div>

            {{ form_widget(profileForm.prenom, {'attr': {'style': 'width:100%; padding:12px 14px; margin-bottom:14px; border:1px solid #cfe8d8; border-radius:10px; box-sizing:border-box; font-size:15px;'}}) }}
            <div style=\"color:#c0392b; font-size:13px; margin:-8px 0 10px;\">{{ form_errors(profileForm.prenom) }}</div>

            {{ form_widget(profileForm.gmail, {'attr': {'style': 'width:100%; padding:12px 14px; margin-bottom:14px; border:1px solid #cfe8d8; border-radius:10px; box-sizing:border-box; font-size:15px;'}}) }}
            <div style=\"color:#c0392b; font-size:13px; margin:-8px 0 10px;\">{{ form_errors(profileForm.gmail) }}</div>

            <button type=\"submit\" style=\"width:100%; padding:12px; background:#28a745; color:#fff; border:none; border-radius:10px; font-weight:700; cursor:pointer;\">
                Save Changes
            </button>
        {{ form_end(profileForm) }}

        <a href=\"{{ path('app_profile') }}\" style=\"display:block; text-align:center; margin-top:14px; color:#1f8f66; text-decoration:none; font-weight:700;\">
            Back to profile
        </a>
    </div>
</section>
{% endblock %}", "profile/update_profile.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\profile\\update_profile.html.twig");
    }
}
