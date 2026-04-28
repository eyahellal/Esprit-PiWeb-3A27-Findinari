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

/* loan/investment/show.html.twig */
class __TwigTemplate_29f70b31b6e4aac219385fcd3e541754 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/investment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/investment/show.html.twig"));

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

        yield "Investment Details - Fin-Dinari";
        
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
<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Investment Details</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\">My Investments</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_show", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 16, $this->source); })()), "idInvestissement", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\">Details</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"shadow rounded p-5 bg-white border-success\">
                    <div class=\"text-center mb-4\">
                        <div class=\"icon-box mb-3\">
                            <div class=\"icon icon-lg bg-success-light rounded-circle mx-auto\">
                                <i class=\"fas fa-chart-line fa-3x text-primary\"></i>
                            </div>
                        </div>
                        <h2 class=\"text-primary\">
                            ";
        // line 35
        if ((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "
                            ";
        } else {
            // line 38
            yield "                                Investment Details
                            ";
        }
        // line 40
        yield "                        </h2>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-4\">
                            <div class=\"border border-success rounded p-3 text-center bg-light\">
                                <p class=\"text-muted mb-1\">Amount Invested</p>
                                <h4 class=\"text-success mb-0\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 47, $this->source); })()), "montantInvesti", [], "any", false, false, false, 47), 2), "html", null, true);
        yield " DT</h4>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"border border-success rounded p-3 text-center bg-light\">
                                <p class=\"text-muted mb-1\">Interest Rate</p>
                                <h4 class=\"text-primary mb-0\">
                                    ";
        // line 54
        if ((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 55, $this->source); })()), "tauxInteret", [], "any", false, false, false, 55), "html", null, true);
            yield "%
                                    ";
        } else {
            // line 57
            yield "                                        --
                                    ";
        }
        // line 59
        yield "                                </h4>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"border border-success rounded p-3 text-center bg-light\">
                                <p class=\"text-muted mb-1\">Duration</p>
                                <h4 class=\"text-primary mb-0\">
                                    ";
        // line 66
        if ((($tmp = (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 67, $this->source); })()), "duree", [], "any", false, false, false, 67), "html", null, true);
            yield " months
                                    ";
        } else {
            // line 69
            yield "                                        --
                                    ";
        }
        // line 71
        yield "                                </h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border border-success rounded p-3 bg-light\">
                                <p class=\"text-muted mb-1\">Purchase Date</p>
                                <h5 class=\"text-primary mb-0\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 80, $this->source); })()), "dateAchat", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
        yield "</h5>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border border-success rounded p-3 bg-light\">
                                <p class=\"text-muted mb-1\">Maturity Date</p>
                                <h5 class=\"text-primary mb-0\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 86, $this->source); })()), "dateMaturite", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
        yield "</h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <div class=\"border border-success rounded p-3 bg-light\">
                                <p class=\"text-muted mb-1\">Status</p>
                                ";
        // line 95
        $context["currentDate"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
        // line 96
        yield "                                ";
        $context["isMatured"] = ((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 96, $this->source); })()) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 96, $this->source); })()), "dateMaturite", [], "any", false, false, false, 96));
        // line 97
        yield "                                ";
        if ((($tmp = (isset($context["isMatured"]) || array_key_exists("isMatured", $context) ? $context["isMatured"] : (function () { throw new RuntimeError('Variable "isMatured" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "                                    <h5 class=\"mb-0 text-success\"><i class=\"fas fa-check-circle me-1\"></i>Matured</h5>
                                ";
        } else {
            // line 100
            yield "                                    <h5 class=\"mb-0 text-primary\"><i class=\"fas fa-clock me-1\"></i>Active</h5>
                                ";
        }
        // line 102
        yield "                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 106
        if (( !(isset($context["isMatured"]) || array_key_exists("isMatured", $context) ? $context["isMatured"] : (function () { throw new RuntimeError('Variable "isMatured" does not exist.', 106, $this->source); })()) && (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 106, $this->source); })()))) {
            // line 107
            yield "                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-trophy me-2\"></i>
                            <strong>Expected Return:</strong> 
                            ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 110, $this->source); })()), "montantInvesti", [], "any", false, false, false, 110) * (1 + (CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 110, $this->source); })()), "tauxInteret", [], "any", false, false, false, 110) / 100))), 2), "html", null, true);
            yield " DT
                            (";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 111, $this->source); })()), "montantInvesti", [], "any", false, false, false, 111), 2), "html", null, true);
            yield " DT principal + 
                            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 112, $this->source); })()), "montantInvesti", [], "any", false, false, false, 112) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["obligation"]) || array_key_exists("obligation", $context) ? $context["obligation"] : (function () { throw new RuntimeError('Variable "obligation" does not exist.', 112, $this->source); })()), "tauxInteret", [], "any", false, false, false, 112)) / 100), 2), "html", null, true);
            yield " DT profit)
                        </div>
                    ";
        }
        // line 115
        yield "                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Back to Investments
                        </a>
                        <div class=\"d-flex gap-2\">
                            <a href=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_edit", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 121, $this->source); })()), "idInvestissement", [], "any", false, false, false, 121)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-edit me-1\"></i>Edit
                            </a>
                            <form method=\"post\" action=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_delete", ["idInvestissement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 124, $this->source); })()), "idInvestissement", [], "any", false, false, false, 124)]), "html", null, true);
        yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this investment?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 125, $this->source); })()), "idInvestissement", [], "any", false, false, false, 125))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-outline-danger\">
                                    <i class=\"fas fa-trash me-1\"></i>Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- PDF Contract Button with Graphics -->
                    <div class=\"text-center mt-4 pt-3 border-top\">
                        <a href=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_investment_contract", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["investment"]) || array_key_exists("investment", $context) ? $context["investment"] : (function () { throw new RuntimeError('Variable "investment" does not exist.', 135, $this->source); })()), "idInvestissement", [], "any", false, false, false, 135)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-pdf btn-lg px-5 py-3\"
                           target=\"_blank\"
                           style=\"background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; border-radius: 50px; box-shadow: 0 4px 15px rgba(220,53,69,0.3); transition: all 0.3s ease;\">
                            <i class=\"fas fa-file-pdf fa-2x me-3\" style=\"vertical-align: middle;\"></i>
                            <span style=\"vertical-align: middle;\">
                                <strong>DOWNLOAD CONTRACT</strong><br>
                                <small style=\"font-size: 11px;\">PDF with signatures</small>
                            </span>
                            <i class=\"fas fa-download ms-3\" style=\"vertical-align: middle;\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-success-light { background-color: #e8f5e9; }
    .text-primary { color: #2d6a4f !important; }
    .text-success { color: #28a745 !important; }
    .border-success { border-color: #28a745 !important; }
    .btn-outline-primary { color: #2d6a4f; border-color: #2d6a4f; }
    .btn-outline-primary:hover { background-color: #2d6a4f; border-color: #2d6a4f; color: white; }
    .btn-primary { background-color: #2d6a4f; border-color: #2d6a4f; }
    .btn-primary:hover { background-color: #1b4d3b; border-color: #1b4d3b; }
    .bg-tertiary { background-color: #e8f5e9 !important; }
    .bg-light { background-color: #f8f9fa !important; }
    
    /* PDF Button Hover Effect */
    .btn-pdf:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(220,53,69,0.4);
    }
    
    .btn-pdf:active {
        transform: translateY(0);
    }
    
    .gap-2 {
        gap: 8px;
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
        return "loan/investment/show.html.twig";
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
        return array (  316 => 135,  303 => 125,  299 => 124,  293 => 121,  286 => 117,  282 => 115,  276 => 112,  272 => 111,  268 => 110,  263 => 107,  261 => 106,  255 => 102,  251 => 100,  247 => 98,  244 => 97,  241 => 96,  239 => 95,  227 => 86,  218 => 80,  207 => 71,  203 => 69,  197 => 67,  195 => 66,  186 => 59,  182 => 57,  176 => 55,  174 => 54,  164 => 47,  155 => 40,  151 => 38,  145 => 36,  143 => 35,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Investment Details - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Investment Details</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_investment_index') }}\">My Investments</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_investment_show', {'idInvestissement': investment.idInvestissement}) }}\">Details</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"shadow rounded p-5 bg-white border-success\">
                    <div class=\"text-center mb-4\">
                        <div class=\"icon-box mb-3\">
                            <div class=\"icon icon-lg bg-success-light rounded-circle mx-auto\">
                                <i class=\"fas fa-chart-line fa-3x text-primary\"></i>
                            </div>
                        </div>
                        <h2 class=\"text-primary\">
                            {% if obligation %}
                                {{ obligation.nom }}
                            {% else %}
                                Investment Details
                            {% endif %}
                        </h2>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-4\">
                            <div class=\"border border-success rounded p-3 text-center bg-light\">
                                <p class=\"text-muted mb-1\">Amount Invested</p>
                                <h4 class=\"text-success mb-0\">{{ investment.montantInvesti|number_format(2) }} DT</h4>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"border border-success rounded p-3 text-center bg-light\">
                                <p class=\"text-muted mb-1\">Interest Rate</p>
                                <h4 class=\"text-primary mb-0\">
                                    {% if obligation %}
                                        {{ obligation.tauxInteret }}%
                                    {% else %}
                                        --
                                    {% endif %}
                                </h4>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"border border-success rounded p-3 text-center bg-light\">
                                <p class=\"text-muted mb-1\">Duration</p>
                                <h4 class=\"text-primary mb-0\">
                                    {% if obligation %}
                                        {{ obligation.duree }} months
                                    {% else %}
                                        --
                                    {% endif %}
                                </h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border border-success rounded p-3 bg-light\">
                                <p class=\"text-muted mb-1\">Purchase Date</p>
                                <h5 class=\"text-primary mb-0\">{{ investment.dateAchat|date('d/m/Y') }}</h5>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border border-success rounded p-3 bg-light\">
                                <p class=\"text-muted mb-1\">Maturity Date</p>
                                <h5 class=\"text-primary mb-0\">{{ investment.dateMaturite|date('d/m/Y') }}</h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <div class=\"border border-success rounded p-3 bg-light\">
                                <p class=\"text-muted mb-1\">Status</p>
                                {% set currentDate = date() %}
                                {% set isMatured = currentDate > investment.dateMaturite %}
                                {% if isMatured %}
                                    <h5 class=\"mb-0 text-success\"><i class=\"fas fa-check-circle me-1\"></i>Matured</h5>
                                {% else %}
                                    <h5 class=\"mb-0 text-primary\"><i class=\"fas fa-clock me-1\"></i>Active</h5>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    
                    {% if not isMatured and obligation %}
                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-trophy me-2\"></i>
                            <strong>Expected Return:</strong> 
                            {{ (investment.montantInvesti * (1 + obligation.tauxInteret / 100))|number_format(2) }} DT
                            ({{ investment.montantInvesti|number_format(2) }} DT principal + 
                            {{ (investment.montantInvesti * obligation.tauxInteret / 100)|number_format(2) }} DT profit)
                        </div>
                    {% endif %}
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('app_investment_index') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Back to Investments
                        </a>
                        <div class=\"d-flex gap-2\">
                            <a href=\"{{ path('app_investment_edit', {'idInvestissement': investment.idInvestissement}) }}\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-edit me-1\"></i>Edit
                            </a>
                            <form method=\"post\" action=\"{{ path('app_investment_delete', {'idInvestissement': investment.idInvestissement}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this investment?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ investment.idInvestissement) }}\">
                                <button type=\"submit\" class=\"btn btn-outline-danger\">
                                    <i class=\"fas fa-trash me-1\"></i>Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- PDF Contract Button with Graphics -->
                    <div class=\"text-center mt-4 pt-3 border-top\">
                        <a href=\"{{ path('api_investment_contract', {'id': investment.idInvestissement}) }}\" 
                           class=\"btn btn-pdf btn-lg px-5 py-3\"
                           target=\"_blank\"
                           style=\"background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; border-radius: 50px; box-shadow: 0 4px 15px rgba(220,53,69,0.3); transition: all 0.3s ease;\">
                            <i class=\"fas fa-file-pdf fa-2x me-3\" style=\"vertical-align: middle;\"></i>
                            <span style=\"vertical-align: middle;\">
                                <strong>DOWNLOAD CONTRACT</strong><br>
                                <small style=\"font-size: 11px;\">PDF with signatures</small>
                            </span>
                            <i class=\"fas fa-download ms-3\" style=\"vertical-align: middle;\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-success-light { background-color: #e8f5e9; }
    .text-primary { color: #2d6a4f !important; }
    .text-success { color: #28a745 !important; }
    .border-success { border-color: #28a745 !important; }
    .btn-outline-primary { color: #2d6a4f; border-color: #2d6a4f; }
    .btn-outline-primary:hover { background-color: #2d6a4f; border-color: #2d6a4f; color: white; }
    .btn-primary { background-color: #2d6a4f; border-color: #2d6a4f; }
    .btn-primary:hover { background-color: #1b4d3b; border-color: #1b4d3b; }
    .bg-tertiary { background-color: #e8f5e9 !important; }
    .bg-light { background-color: #f8f9fa !important; }
    
    /* PDF Button Hover Effect */
    .btn-pdf:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(220,53,69,0.4);
    }
    
    .btn-pdf:active {
        transform: translateY(0);
    }
    
    .gap-2 {
        gap: 8px;
    }
</style>

{% endblock %}", "loan/investment/show.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\investment\\show.html.twig");
    }
}
