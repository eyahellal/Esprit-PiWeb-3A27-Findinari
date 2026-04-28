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

/* profile/profile.html.twig */
class __TwigTemplate_6a53ee6d4ddbf66ce2667eb1fefa9365 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

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

        yield "My Profile";
        
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
        width: 700px;
        max-width: 100%;
        margin: 0 auto;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 20px 50px rgba(0,0,0,.15);
        padding: 35px;
    \">
        <h2 style=\"margin:0 0 20px; color:#1f3b2d;\">My Profile</h2>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "            <div style=\"padding:12px 14px; border-radius:10px; margin-bottom:15px; background:#e7f8ee; color:#1c6b3d;\">
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "            <div style=\"padding:12px 14px; border-radius:10px; margin-bottom:15px; background:#fdeaea; color:#a12626;\">
                ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
        <div style=\"display:flex; gap:20px; margin-bottom:15px; flex-wrap:wrap;\">
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Last name</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), "html", null, true);
        yield "</div>
            </div>
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">First name</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), "html", null, true);
        yield "</div>
            </div>
        </div>

        <div style=\"display:flex; gap:20px; margin-bottom:15px; flex-wrap:wrap;\">
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Email</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 48, $this->source); })()), "gmail", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
            </div>
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Role</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 52, $this->source); })()), "role", [], "any", false, false, false, 52), "html", null, true);
        yield "</div>
            </div>
        </div>

        <div style=\"display:flex; gap:20px; margin-bottom:15px; flex-wrap:wrap;\">
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Status</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 59, $this->source); })()), "statut", [], "any", false, false, false, 59), "html", null, true);
        yield "</div>
            </div>
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Created at</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">
                    ";
        // line 64
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 64, $this->source); })()), "dateCreation", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 64, $this->source); })()), "dateCreation", [], "any", false, false, false, 64), "Y-m-d H:i"), "html", null, true)) : (""));
        yield "
                </div>
            </div>
        </div>

        <div style=\"display:flex; gap:15px; margin-top:25px; flex-wrap:wrap;\">
            <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_update");
        yield "\" style=\"text-decoration:none; background:#28a745; color:#fff; padding:12px 18px; border-radius:10px; font-weight:700;\">Update Profile</a>
            <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_password");
        yield "\" style=\"text-decoration:none; background:#1f8f66; color:#fff; padding:12px 18px; border-radius:10px; font-weight:700;\">Update Password</a>
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"text-decoration:none; background:#1f8f66; color:#fff; padding:12px 18px; border-radius:10px; font-weight:700;\">Back Home</a>
        </div>
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
        return "profile/profile.html.twig";
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
        return array (  218 => 72,  214 => 71,  210 => 70,  201 => 64,  193 => 59,  183 => 52,  176 => 48,  166 => 41,  159 => 37,  153 => 33,  144 => 30,  141 => 29,  137 => 28,  134 => 27,  125 => 24,  122 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}My Profile{% endblock %}

{% block body %}
<section style=\"
    background: linear-gradient(135deg,#b7f5d1,#7ed6a7);
    min-height: 100vh;
    padding: 60px 20px;
\">
    <div style=\"
        width: 700px;
        max-width: 100%;
        margin: 0 auto;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 20px 50px rgba(0,0,0,.15);
        padding: 35px;
    \">
        <h2 style=\"margin:0 0 20px; color:#1f3b2d;\">My Profile</h2>

        {% for message in app.flashes('success') %}
            <div style=\"padding:12px 14px; border-radius:10px; margin-bottom:15px; background:#e7f8ee; color:#1c6b3d;\">
                {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('danger') %}
            <div style=\"padding:12px 14px; border-radius:10px; margin-bottom:15px; background:#fdeaea; color:#a12626;\">
                {{ message }}
            </div>
        {% endfor %}

        <div style=\"display:flex; gap:20px; margin-bottom:15px; flex-wrap:wrap;\">
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Last name</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">{{ userData.nom }}</div>
            </div>
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">First name</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">{{ userData.prenom }}</div>
            </div>
        </div>

        <div style=\"display:flex; gap:20px; margin-bottom:15px; flex-wrap:wrap;\">
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Email</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">{{ userData.gmail }}</div>
            </div>
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Role</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">{{ userData.role }}</div>
            </div>
        </div>

        <div style=\"display:flex; gap:20px; margin-bottom:15px; flex-wrap:wrap;\">
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Status</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">{{ userData.statut }}</div>
            </div>
            <div style=\"flex:1; min-width:220px; background:#f6fff9; border:1px solid #d9f5e3; border-radius:12px; padding:15px;\">
                <div style=\"font-size:13px; color:#5f7b6c; margin-bottom:6px;\">Created at</div>
                <div style=\"font-size:17px; color:#1f3b2d; font-weight:700;\">
                    {{ userData.dateCreation ? userData.dateCreation|date('Y-m-d H:i') : '' }}
                </div>
            </div>
        </div>

        <div style=\"display:flex; gap:15px; margin-top:25px; flex-wrap:wrap;\">
            <a href=\"{{ path('app_profile_update') }}\" style=\"text-decoration:none; background:#28a745; color:#fff; padding:12px 18px; border-radius:10px; font-weight:700;\">Update Profile</a>
            <a href=\"{{ path('app_profile_password') }}\" style=\"text-decoration:none; background:#1f8f66; color:#fff; padding:12px 18px; border-radius:10px; font-weight:700;\">Update Password</a>
            <a href=\"{{ path('app_home') }}\" style=\"text-decoration:none; background:#1f8f66; color:#fff; padding:12px 18px; border-radius:10px; font-weight:700;\">Back Home</a>
        </div>
    </div>
</section>
{% endblock %}", "profile/profile.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\profile\\profile.html.twig");
    }
}
