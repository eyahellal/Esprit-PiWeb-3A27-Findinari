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
class __TwigTemplate_6410f43d1da62200c9d18bc64b42a356 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "            <div style=\"max-width:800px; margin:0 auto 20px auto; padding:14px 16px; border-radius:12px; background:#fdeaea; color:#a12626; font-weight:700;\">
                ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
        ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26) && (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 26, $this->source); })()))) {
            // line 27
            yield "            <div style=\"max-width:800px; margin:0 auto 35px auto; background:#fff; border-radius:20px; padding:28px; box-shadow:0 20px 50px rgba(0,0,0,.08);\">
                <h2 style=\"margin:0 0 18px; color:#173b2f;\">Add your feedback</h2>

               ";
            // line 30
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 30, $this->source); })()), 'form_start');
            yield "

    <label style=\"display:block; font-weight:800; color:#173b2f; margin-bottom:10px;\">
        Rating
    </label>

    <div id=\"star-rating\" style=\"display:flex; gap:8px; margin-bottom:16px;\">
        ";
            // line 37
            $context["selectedRating"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feedbackForm"] ?? null), "rating", [], "any", false, true, false, 37), "vars", [], "any", false, true, false, 37), "value", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 37, $this->source); })()), "rating", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), 0)) : (0));
            // line 38
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 39
                yield "            <span class=\"star-choice\"
                  data-value=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\"
                  style=\"font-size:34px; color:";
                // line 41
                if (($context["i"] <= (isset($context["selectedRating"]) || array_key_exists("selectedRating", $context) ? $context["selectedRating"] : (function () { throw new RuntimeError('Variable "selectedRating" does not exist.', 41, $this->source); })()))) {
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
            // line 45
            yield "    </div>

    <input
        type=\"hidden\"
        id=\"rating_input\"
        name=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 50, $this->source); })()), "rating", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "full_name", [], "any", false, false, false, 50), "html", null, true);
            yield "\"
        value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feedbackForm"] ?? null), "rating", [], "any", false, true, false, 51), "vars", [], "any", false, true, false, 51), "value", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 51, $this->source); })()), "rating", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "")) : ("")), "html", null, true);
            yield "\"
    >

    ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 54, $this->source); })()), "rating", [], "any", false, false, false, 54), 'errors');
            yield "

    ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 56, $this->source); })()), "message", [], "any", false, false, false, 56), 'widget', ["attr" => ["style" => "width:100%; padding:14px; border:1px solid #cdebd7; border-radius:12px; margin-bottom:14px; box-sizing:border-box; resize:none;"]]);
            // line 60
            yield "
    ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 61, $this->source); })()), "message", [], "any", false, false, false, 61), 'errors');
            yield "

    ";
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 63, $this->source); })()), "_token", [], "any", false, false, false, 63), 'widget');
            yield "

    <button type=\"submit\" style=\"padding:14px 22px; background:#28a745; color:#fff; border:none; border-radius:12px; font-weight:800; cursor:pointer;\">
        Publish Feedback
    </button>

";
            // line 69
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 69, $this->source); })()), 'form_end', ["render_rest" => false]);
            yield "
            </div>
        ";
        } else {
            // line 72
            yield "            <div style=\"max-width:800px; margin:0 auto 35px auto; background:#fff; border-radius:20px; padding:24px; box-shadow:0 20px 50px rgba(0,0,0,.08); text-align:center;\">
                <p style=\"margin:0; color:#385a4d; font-size:17px;\">
                    Please <a href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_login");
            yield "\" style=\"color:#1c8f66; font-weight:700; text-decoration:none;\">log in</a> to add feedback.
                </p>
            </div>
        ";
        }
        // line 78
        yield "
        <div style=\"display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:22px;\">
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
            // line 81
            yield "                <div style=\"background:#fff; border-radius:20px; padding:24px; box-shadow:0 20px 50px rgba(0,0,0,.08); border:1px solid #e8f5ed;\">
                    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:12px; gap:12px;\">
                        <div style=\"font-size:15px; color:#567468; font-weight:700;\">
                            ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "userEmail", [], "any", false, false, false, 84), "html", null, true);
            yield "
                        </div>

                        <div style=\"display:flex; align-items:center; gap:2px;\">
                            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                yield "                                <span style=\"font-size:20px; color:";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "rating", [], "any", false, false, false, 89))) {
                    yield "#f5b301";
                } else {
                    yield "#d8d8d8";
                }
                yield ";\">
                                    ★
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                            <span style=\"margin-left:6px; font-weight:800; color:#16924f;\">
                                ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "rating", [], "any", false, false, false, 94), "html", null, true);
            yield "/5
                            </span>
                        </div>
                    </div>

                    <p style=\"margin:0 0 16px; color:#27463b; line-height:1.7;\">
                        ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "message", [], "any", false, false, false, 100), "html", null, true);
            yield "
                    </p>

                    <div style=\"font-size:13px; color:#7a9388; margin-bottom:16px;\">
                        ";
            // line 104
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 104), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "
                    </div>

                    ";
            // line 107
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "gmail", [], "any", false, false, false, 107) == CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "userEmail", [], "any", false, false, false, 107)))) {
                // line 108
                yield "                        <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
                            <a href=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                yield "\" style=\"text-decoration:none; background:#1c8f66; color:#fff; padding:10px 14px; border-radius:10px; font-weight:700;\">
                                Edit
                            </a>

                            <form method=\"post\" action=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Delete this feedback?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_feedback_" . CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 114))), "html", null, true);
                yield "\">
                                <button type=\"submit\" style=\"background:#dc3545; color:#fff; padding:10px 14px; border:none; border-radius:10px; font-weight:700; cursor:pointer;\">
                                    Delete
                                </button>
                            </form>
                        </div>
                    ";
            }
            // line 121
            yield "                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 122
        if (!$context['_iterated']) {
            // line 123
            yield "                <div style=\"grid-column:1/-1; background:#fff; border-radius:20px; padding:30px; text-align:center; color:#567468;\">
                    No feedback yet.
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feedback'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "        </div>

        <div style=\"display:flex; justify-content:center; margin-top:30px;\">
            <div style=\"
                background:#fff;
                border-radius:14px;
                padding:14px 18px;
                box-shadow:0 12px 30px rgba(0,0,0,.06);
            \">
                ";
        // line 136
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 136, $this->source); })()));
        yield "
            </div>
        </div>
    </div>
</section>

<style>
    .pagination {
        display: flex;
        gap: 8px;
        list-style: none;
        padding: 0;
        margin: 0;
        flex-wrap: wrap;
        justify-content: center;
    }

    .pagination span,
    .pagination a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 38px;
        height: 38px;
        padding: 0 12px;
        border-radius: 10px;
        text-decoration: none;
        border: 1px solid #cdebd7;
        background: #fff;
        color: #1f6b3d;
        font-weight: 800;
    }

    .pagination .current {
        background: #28a745;
        color: #fff;
        border-color: #28a745;
    }
</style>

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
        return array (  369 => 136,  358 => 127,  349 => 123,  347 => 122,  342 => 121,  332 => 114,  328 => 113,  321 => 109,  318 => 108,  316 => 107,  310 => 104,  303 => 100,  294 => 94,  291 => 93,  276 => 89,  272 => 88,  265 => 84,  260 => 81,  255 => 80,  251 => 78,  244 => 74,  240 => 72,  234 => 69,  225 => 63,  220 => 61,  217 => 60,  215 => 56,  210 => 54,  204 => 51,  200 => 50,  193 => 45,  179 => 41,  175 => 40,  172 => 39,  167 => 38,  165 => 37,  155 => 30,  150 => 27,  148 => 26,  145 => 25,  136 => 22,  133 => 21,  129 => 20,  126 => 19,  117 => 16,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

        {% for message in app.flashes('danger') %}
            <div style=\"max-width:800px; margin:0 auto 20px auto; padding:14px 16px; border-radius:12px; background:#fdeaea; color:#a12626; font-weight:700;\">
                {{ message }}
            </div>
        {% endfor %}

        {% if app.user and feedbackForm %}
            <div style=\"max-width:800px; margin:0 auto 35px auto; background:#fff; border-radius:20px; padding:28px; box-shadow:0 20px 50px rgba(0,0,0,.08);\">
                <h2 style=\"margin:0 0 18px; color:#173b2f;\">Add your feedback</h2>

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

    <button type=\"submit\" style=\"padding:14px 22px; background:#28a745; color:#fff; border:none; border-radius:12px; font-weight:800; cursor:pointer;\">
        Publish Feedback
    </button>

{{ form_end(feedbackForm, {'render_rest': false}) }}
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
                    <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:12px; gap:12px;\">
                        <div style=\"font-size:15px; color:#567468; font-weight:700;\">
                            {{ feedback.userEmail }}
                        </div>

                        <div style=\"display:flex; align-items:center; gap:2px;\">
                            {% for i in 1..5 %}
                                <span style=\"font-size:20px; color:{% if i <= feedback.rating %}#f5b301{% else %}#d8d8d8{% endif %};\">
                                    ★
                                </span>
                            {% endfor %}
                            <span style=\"margin-left:6px; font-weight:800; color:#16924f;\">
                                {{ feedback.rating }}/5
                            </span>
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

        <div style=\"display:flex; justify-content:center; margin-top:30px;\">
            <div style=\"
                background:#fff;
                border-radius:14px;
                padding:14px 18px;
                box-shadow:0 12px 30px rgba(0,0,0,.06);
            \">
                {{ knp_pagination_render(feedbacks) }}
            </div>
        </div>
    </div>
</section>

<style>
    .pagination {
        display: flex;
        gap: 8px;
        list-style: none;
        padding: 0;
        margin: 0;
        flex-wrap: wrap;
        justify-content: center;
    }

    .pagination span,
    .pagination a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 38px;
        height: 38px;
        padding: 0 12px;
        border-radius: 10px;
        text-decoration: none;
        border: 1px solid #cdebd7;
        background: #fff;
        color: #1f6b3d;
        font-weight: 800;
    }

    .pagination .current {
        background: #28a745;
        color: #fff;
        border-color: #28a745;
    }
</style>

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
{% endblock %}", "feedback/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\feedback\\index.html.twig");
    }
}
