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

/* feedback/index.html.twig */
class __TwigTemplate_e71aba305bfd52df8d4225b40420fd57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/index.html.twig"));

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

        yield "Feedback";
        
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
    <div style=\"max-width:1100px; margin:0 auto;\">

        <div style=\"text-align:center; margin-bottom:30px;\">
            <h1 style=\"margin:0; color:#173b2f; font-size:40px; font-weight:800;\">Feedbacks</h1>
            <p style=\"margin-top:10px; color:#567468;\">Share your feedback and read others.</p>
        </div>

        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "            <div style=\"max-width:800px; margin:0 auto 20px auto; padding:14px 16px; border-radius:12px; background:#e8f9ee; color:#1f6b3d; font-weight:700;\">
                ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
        ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20) && (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "            <div style=\"max-width:800px; margin:0 auto 35px auto; background:#fff; border-radius:20px; padding:28px; box-shadow:0 20px 50px rgba(0,0,0,.08);\">
                <h2 style=\"margin:0 0 18px; color:#173b2f;\">Add your feedback</h2>

                ";
            // line 24
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 24, $this->source); })()), 'form_start');
            yield "
                    ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 25, $this->source); })()), "rating", [], "any", false, false, false, 25), 'widget', ["attr" => ["style" => "width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; background:#fff;"]]);
            yield "
                    ";
            // line 26
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 26, $this->source); })()), "message", [], "any", false, false, false, 26), 'widget', ["attr" => ["style" => "width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; resize:none;"]]);
            yield "

                    <button type=\"submit\" style=\"padding:14px 22px; background:#28a745; color:#fff; border:none; border-radius:12px; font-weight:800; cursor:pointer;\">
                        Publish Feedback
                    </button>
                ";
            // line 31
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 31, $this->source); })()), 'form_end');
            yield "
            </div>
        ";
        } else {
            // line 34
            yield "            <div style=\"max-width:800px; margin:0 auto 35px auto; background:#fff; border-radius:20px; padding:24px; box-shadow:0 20px 50px rgba(0,0,0,.08); text-align:center;\">
                <p style=\"margin:0; color:#385a4d; font-size:17px;\">
                    Please <a href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_login");
            yield "\" style=\"color:#1c8f66; font-weight:700; text-decoration:none;\">log in</a> to add feedback.
                </p>
            </div>
        ";
        }
        // line 40
        yield "
        <div style=\"display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:22px;\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
            // line 43
            yield "                <div style=\"background:#fff; border-radius:20px; padding:24px; box-shadow:0 20px 50px rgba(0,0,0,.08); border:1px solid #e8f5ed;\">
                    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;\">
                        <div style=\"font-size:15px; color:#567468; font-weight:700;\">
                            ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "userEmail", [], "any", false, false, false, 46), "html", null, true);
            yield "
                        </div>
                        <div style=\"background:#edf9f2; color:#16924f; padding:8px 12px; border-radius:999px; font-weight:800;\">
                            ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "rating", [], "any", false, false, false, 49), "html", null, true);
            yield "/5
                        </div>
                    </div>

                    <p style=\"margin:0 0 16px; color:#27463b; line-height:1.7;\">
                        ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "message", [], "any", false, false, false, 54), "html", null, true);
            yield "
                    </p>

                    <div style=\"font-size:13px; color:#7a9388; margin-bottom:16px;\">
                        ";
            // line 58
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 58), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "
                    </div>

                    ";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "gmail", [], "any", false, false, false, 61) == CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "userEmail", [], "any", false, false, false, 61)))) {
                // line 62
                yield "                        <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
                            <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" style=\"text-decoration:none; background:#1c8f66; color:#fff; padding:10px 14px; border-radius:10px; font-weight:700;\">
                                Edit
                            </a>

                            <form method=\"post\" action=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Delete this feedback?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_feedback_" . CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 68))), "html", null, true);
                yield "\">
                                <button type=\"submit\" style=\"background:#dc3545; color:#fff; padding:10px 14px; border:none; border-radius:10px; font-weight:700; cursor:pointer;\">
                                    Delete
                                </button>
                            </form>
                        </div>
                    ";
            }
            // line 75
            yield "                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "                <div style=\"grid-column:1/-1; background:#fff; border-radius:20px; padding:30px; text-align:center; color:#567468;\">
                    No feedback yet.
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feedback'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "        </div>
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
        return "feedback/index.html.twig";
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
        return array (  252 => 81,  243 => 77,  241 => 76,  236 => 75,  226 => 68,  222 => 67,  215 => 63,  212 => 62,  210 => 61,  204 => 58,  197 => 54,  189 => 49,  183 => 46,  178 => 43,  173 => 42,  169 => 40,  162 => 36,  158 => 34,  152 => 31,  144 => 26,  140 => 25,  136 => 24,  131 => 21,  129 => 20,  126 => 19,  117 => 16,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}Feedback{% endblock %}

{% block body %}
<section style=\"background:linear-gradient(135deg,#eefcf4,#d8f6e4); min-height:100vh; padding:60px 20px;\">
    <div style=\"max-width:1100px; margin:0 auto;\">

        <div style=\"text-align:center; margin-bottom:30px;\">
            <h1 style=\"margin:0; color:#173b2f; font-size:40px; font-weight:800;\">Feedbacks</h1>
            <p style=\"margin-top:10px; color:#567468;\">Share your feedback and read others.</p>
        </div>

        {% for message in app.flashes('success') %}
            <div style=\"max-width:800px; margin:0 auto 20px auto; padding:14px 16px; border-radius:12px; background:#e8f9ee; color:#1f6b3d; font-weight:700;\">
                {{ message }}
            </div>
        {% endfor %}

        {% if app.user and feedbackForm %}
            <div style=\"max-width:800px; margin:0 auto 35px auto; background:#fff; border-radius:20px; padding:28px; box-shadow:0 20px 50px rgba(0,0,0,.08);\">
                <h2 style=\"margin:0 0 18px; color:#173b2f;\">Add your feedback</h2>

                {{ form_start(feedbackForm) }}
                    {{ form_widget(feedbackForm.rating, {'attr': {'style': 'width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; background:#fff;'}}) }}
                    {{ form_widget(feedbackForm.message, {'attr': {'style': 'width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; resize:none;'}}) }}

                    <button type=\"submit\" style=\"padding:14px 22px; background:#28a745; color:#fff; border:none; border-radius:12px; font-weight:800; cursor:pointer;\">
                        Publish Feedback
                    </button>
                {{ form_end(feedbackForm) }}
            </div>
        {% else %}
            <div style=\"max-width:800px; margin:0 auto 35px auto; background:#fff; border-radius:20px; padding:24px; box-shadow:0 20px 50px rgba(0,0,0,.08); text-align:center;\">
                <p style=\"margin:0; color:#385a4d; font-size:17px;\">
                    Please <a href=\"{{ path('app_front_login') }}\" style=\"color:#1c8f66; font-weight:700; text-decoration:none;\">log in</a> to add feedback.
                </p>
            </div>
        {% endif %}

        <div style=\"display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:22px;\">
            {% for feedback in feedbacks %}
                <div style=\"background:#fff; border-radius:20px; padding:24px; box-shadow:0 20px 50px rgba(0,0,0,.08); border:1px solid #e8f5ed;\">
                    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;\">
                        <div style=\"font-size:15px; color:#567468; font-weight:700;\">
                            {{ feedback.userEmail }}
                        </div>
                        <div style=\"background:#edf9f2; color:#16924f; padding:8px 12px; border-radius:999px; font-weight:800;\">
                            {{ feedback.rating }}/5
                        </div>
                    </div>

                    <p style=\"margin:0 0 16px; color:#27463b; line-height:1.7;\">
                        {{ feedback.message }}
                    </p>

                    <div style=\"font-size:13px; color:#7a9388; margin-bottom:16px;\">
                        {{ feedback.createdAt ? feedback.createdAt|date('Y-m-d H:i') : '' }}
                    </div>

                    {% if app.user and app.user.gmail == feedback.userEmail %}
                        <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
                            <a href=\"{{ path('app_feedback_edit', {id: feedback.id}) }}\" style=\"text-decoration:none; background:#1c8f66; color:#fff; padding:10px 14px; border-radius:10px; font-weight:700;\">
                                Edit
                            </a>

                            <form method=\"post\" action=\"{{ path('app_feedback_delete', {id: feedback.id}) }}\" onsubmit=\"return confirm('Delete this feedback?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_feedback_' ~ feedback.id) }}\">
                                <button type=\"submit\" style=\"background:#dc3545; color:#fff; padding:10px 14px; border:none; border-radius:10px; font-weight:700; cursor:pointer;\">
                                    Delete
                                </button>
                            </form>
                        </div>
                    {% endif %}
                </div>
            {% else %}
                <div style=\"grid-column:1/-1; background:#fff; border-radius:20px; padding:30px; text-align:center; color:#567468;\">
                    No feedback yet.
                </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}", "feedback/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\feedback\\index.html.twig");
    }
}
