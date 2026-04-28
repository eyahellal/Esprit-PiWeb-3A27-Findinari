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

/* objectif/edit.html.twig */
class __TwigTemplate_48ebd9144b4f64ccc043bf1212c70138 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Modifier objectif";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "
<style>
  .form-page { max-width: 560px; margin: 2rem auto; padding: 0 1rem; font-family: 'DM Sans', sans-serif; }
  .form-card { background: #fff; border: 0.5px solid #e0e0dc; border-radius: 12px; padding: 2rem; }
  .form-title { font-size: 20px; font-weight: 600; margin-bottom: 1.5rem; }
  .form-page .form-label { font-size: 13px; color: #555; font-weight: 500; }
  .form-page .form-control,
  .form-page .form-select { border-radius: 8px; border: 0.5px solid #ccc; font-size: 14px; padding: 8px 12px; width: 100%; }
  .form-page .form-control:focus,
  .form-page .form-select:focus { border-color: #1a9e6e; box-shadow: none; outline: none; }
  .form-actions { display: flex; gap: 10px; margin-top: 1.5rem; }
  .btn-save { background: #1a9e6e; color: #fff; border: none; padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 500; cursor: pointer; }
  .btn-save:hover { background: #157a55; }
  .btn-cancel { padding: 10px 20px; border-radius: 8px; border: 0.5px solid #ccc; background: transparent; font-size: 14px; text-decoration: none; color: #555; }
  .btn-cancel:hover { background: #f5f5f3; color: #555; }
  .invalid-feedback { color: #a32d2d; font-size: 12px; margin-top: 4px; }
</style>

<div class=\"form-page\">
  <div class=\"form-card\">
    <h2 class=\"form-title\">Modifier — ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), "html", null, true);
        yield "</h2>

    ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

      <div class=\"mb-3\">
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "titre", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), 'errors');
        yield "
      </div>

      <div class=\"mb-3\">
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "montant", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "montant", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "montant", [], "any", false, false, false, 37), 'errors');
        yield "
      </div>

      <div class=\"mb-3\">
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateDebut", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateDebut", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dateDebut", [], "any", false, false, false, 43), 'errors');
        yield "
      </div>

      <div class=\"mb-3\">
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "duree", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "duree", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "duree", [], "any", false, false, false, 49), 'errors');
        yield "
      </div>

      <div class=\"mb-3\">
        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "statut", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "statut", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "statut", [], "any", false, false, false, 55), 'errors');
        yield "
      </div>

      <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn-save\">Mettre à jour</button>
        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_index");
        yield "\" class=\"btn-cancel\">Annuler</a>
      </div>

    ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        yield "
  </div>
</div>

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
        return "objectif/edit.html.twig";
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
        return array (  215 => 63,  209 => 60,  201 => 55,  197 => 54,  193 => 53,  186 => 49,  182 => 48,  178 => 47,  171 => 43,  167 => 42,  163 => 41,  156 => 37,  152 => 36,  148 => 35,  141 => 31,  137 => 30,  133 => 29,  127 => 26,  122 => 24,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier objectif{% endblock %}
{% block body %}

<style>
  .form-page { max-width: 560px; margin: 2rem auto; padding: 0 1rem; font-family: 'DM Sans', sans-serif; }
  .form-card { background: #fff; border: 0.5px solid #e0e0dc; border-radius: 12px; padding: 2rem; }
  .form-title { font-size: 20px; font-weight: 600; margin-bottom: 1.5rem; }
  .form-page .form-label { font-size: 13px; color: #555; font-weight: 500; }
  .form-page .form-control,
  .form-page .form-select { border-radius: 8px; border: 0.5px solid #ccc; font-size: 14px; padding: 8px 12px; width: 100%; }
  .form-page .form-control:focus,
  .form-page .form-select:focus { border-color: #1a9e6e; box-shadow: none; outline: none; }
  .form-actions { display: flex; gap: 10px; margin-top: 1.5rem; }
  .btn-save { background: #1a9e6e; color: #fff; border: none; padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 500; cursor: pointer; }
  .btn-save:hover { background: #157a55; }
  .btn-cancel { padding: 10px 20px; border-radius: 8px; border: 0.5px solid #ccc; background: transparent; font-size: 14px; text-decoration: none; color: #555; }
  .btn-cancel:hover { background: #f5f5f3; color: #555; }
  .invalid-feedback { color: #a32d2d; font-size: 12px; margin-top: 4px; }
</style>

<div class=\"form-page\">
  <div class=\"form-card\">
    <h2 class=\"form-title\">Modifier — {{ objectif.titre }}</h2>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

      <div class=\"mb-3\">
        {{ form_label(form.titre, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(form.titre) }}
      </div>

      <div class=\"mb-3\">
        {{ form_label(form.montant, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.montant, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(form.montant) }}
      </div>

      <div class=\"mb-3\">
        {{ form_label(form.dateDebut, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(form.dateDebut) }}
      </div>

      <div class=\"mb-3\">
        {{ form_label(form.duree, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.duree, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(form.duree) }}
      </div>

      <div class=\"mb-3\">
        {{ form_label(form.statut, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
        {{ form_errors(form.statut) }}
      </div>

      <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn-save\">Mettre à jour</button>
        <a href=\"{{ path('objectif_index') }}\" class=\"btn-cancel\">Annuler</a>
      </div>

    {{ form_end(form) }}
  </div>
</div>

{% endblock %}", "objectif/edit.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\objectif\\edit.html.twig");
    }
}
