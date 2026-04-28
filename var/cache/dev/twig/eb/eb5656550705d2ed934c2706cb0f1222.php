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

/* partials/_header.html.twig */
class __TwigTemplate_b2b8d49bad05b97afc1ac957ac6238a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        yield "<header class=\"navigation bg-tertiary\">
    <nav class=\"navbar navbar-expand-xl navbar-light text-center py-3\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <img loading=\"prelaod\" decoding=\"async\" class=\"img-fluid\" width=\"160\" src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Wallet\">
            </a>

            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> 
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
                    </li>
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">About</a>
                    </li>
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_how_it_works");
        yield "\">How It Works</a>
                    </li>
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a>
                    </li>
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback_index");
        yield "\">Feedback</a>
</li>
                    <li class=\"nav-item dropdown\"> 
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Pages</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support_center");
        yield "\">Support center</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_details", ["id" => 1]);
        yield "\">Service Details</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_privacy");
        yield "\">Privacy &amp; Policy</a></li>

                            ";
        // line 39
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                                <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">My Profile</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_update");
            yield "\">Update Profile</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 42
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_password");
            yield "\">Update Password</a></li>
                            ";
        }
        // line 44
        yield "                        </ul>
                    </li>
                </ul>

                ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "role", [], "any", false, false, false, 49) == "ADMIN")) {
                // line 50
                yield "                     <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\" class=\"btn btn-warning me-2\">
                     Admin Panel
                      </a>
                   ";
            }
            // line 54
            yield "
                    <a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"btn btn-outline-primary\">Profile</a>
                    <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-primary ms-2 ms-lg-3\">Logout</a>

               ";
        } else {
            // line 59
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_login");
            yield "\" class=\"btn btn-outline-primary\">Log In</a>
                    <a href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
            yield "\" class=\"btn btn-primary ms-2 ms-lg-3\">Sign Up</a>
                ";
        }
        // line 62
        yield "            </div>
        </div>
    </nav>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_header.html.twig";
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
        return array (  179 => 62,  174 => 60,  169 => 59,  163 => 56,  159 => 55,  156 => 54,  148 => 50,  145 => 49,  143 => 48,  137 => 44,  132 => 42,  128 => 41,  123 => 40,  121 => 39,  116 => 37,  112 => 36,  108 => 35,  100 => 30,  94 => 27,  88 => 24,  82 => 21,  76 => 18,  70 => 15,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"navigation bg-tertiary\">
    <nav class=\"navbar navbar-expand-xl navbar-light text-center py-3\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                <img loading=\"prelaod\" decoding=\"async\" class=\"img-fluid\" width=\"160\" src=\"{{ asset('images/logo.png') }}\" alt=\"Wallet\">
            </a>

            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> 
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Home</a>
                    </li>
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"{{ path('app_about') }}\">About</a>
                    </li>
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"{{ path('app_how_it_works') }}\">How It Works</a>
                    </li>
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"{{ path('app_services') }}\">Services</a>
                    </li>
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('app_feedback_index') }}\">Feedback</a>
</li>
                    <li class=\"nav-item dropdown\"> 
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Pages</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('support_center') }}\">Support center</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_service_details', {id: 1}) }}\">Service Details</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_privacy') }}\">Privacy &amp; Policy</a></li>

                            {% if app.user %}
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">My Profile</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_profile_update') }}\">Update Profile</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_profile_password') }}\">Update Password</a></li>
                            {% endif %}
                        </ul>
                    </li>
                </ul>

                {% if app.user %}
                   {% if app.user.role == 'ADMIN' %}
                     <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-warning me-2\">
                     Admin Panel
                      </a>
                   {% endif %}

                    <a href=\"{{ path('app_profile') }}\" class=\"btn btn-outline-primary\">Profile</a>
                    <a href=\"{{ path('app_logout') }}\" class=\"btn btn-primary ms-2 ms-lg-3\">Logout</a>

               {% else %}
                    <a href=\"{{ path('app_front_login') }}\" class=\"btn btn-outline-primary\">Log In</a>
                    <a href=\"{{ path('app_front_register') }}\" class=\"btn btn-primary ms-2 ms-lg-3\">Sign Up</a>
                {% endif %}
            </div>
        </div>
    </nav>
</header>", "partials/_header.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\partials\\_header.html.twig");
    }
}
