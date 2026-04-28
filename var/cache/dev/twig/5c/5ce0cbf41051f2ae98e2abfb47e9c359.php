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

/* login/login.html.twig */
class __TwigTemplate_c25218fed1f7fdab9926ef3b15b9ec55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin:0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,#20c997,#28a745);
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .container {
            display:flex;
            width:900px;
            background:#fff;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 20px 50px rgba(0,0,0,0.2);
        }

        .left {
            width:50%;
            background:#e6f9f0;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .left img {
            width:80%;
        }

        .right {
            width:50%;
            padding:40px;
        }

        h2 {
            margin-bottom:20px;
            color:#2f4f4f;
        }

        input {
            width:100%;
            padding:12px;
            margin:10px 0;
            border-radius:8px;
            border:1px solid #ccc;
        }

        input:focus {
            border-color:#28a745;
            outline:none;
        }

        button {
            width:100%;
            padding:12px;
            background:#28a745;
            border:none;
            color:white;
            border-radius:8px;
            font-weight:bold;
            cursor:pointer;
        }

        button:hover {
            background:#218838;
        }

        .link {
            margin-top:15px;
            text-align:center;
        }

        .link a {
            color:#28a745;
            text-decoration:none;
        }
    </style>
</head>

<body>

<div class=\"container\">

    <div class=\"left\">
        <img src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration-1.png"), "html", null, true);
        yield "\">
    </div>

    <div class=\"right\">
        <h2>Login</h2>

        <form method=\"post\">
    <input type=\"text\" name=\"_username\" placeholder=\"Email\">
    <input type=\"password\" name=\"_password\" placeholder=\"Password\">
    <button type=\"submit\">Login</button>
</form>

        <div class=\"link\">
            <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
        yield "\">Create account</a>
        </div>
    </div>

</div>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/login.html.twig";
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
        return array (  158 => 106,  142 => 93,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin:0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,#20c997,#28a745);
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .container {
            display:flex;
            width:900px;
            background:#fff;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 20px 50px rgba(0,0,0,0.2);
        }

        .left {
            width:50%;
            background:#e6f9f0;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .left img {
            width:80%;
        }

        .right {
            width:50%;
            padding:40px;
        }

        h2 {
            margin-bottom:20px;
            color:#2f4f4f;
        }

        input {
            width:100%;
            padding:12px;
            margin:10px 0;
            border-radius:8px;
            border:1px solid #ccc;
        }

        input:focus {
            border-color:#28a745;
            outline:none;
        }

        button {
            width:100%;
            padding:12px;
            background:#28a745;
            border:none;
            color:white;
            border-radius:8px;
            font-weight:bold;
            cursor:pointer;
        }

        button:hover {
            background:#218838;
        }

        .link {
            margin-top:15px;
            text-align:center;
        }

        .link a {
            color:#28a745;
            text-decoration:none;
        }
    </style>
</head>

<body>

<div class=\"container\">

    <div class=\"left\">
        <img src=\"{{ asset('images/illustration-1.png') }}\">
    </div>

    <div class=\"right\">
        <h2>Login</h2>

        <form method=\"post\">
    <input type=\"text\" name=\"_username\" placeholder=\"Email\">
    <input type=\"password\" name=\"_password\" placeholder=\"Password\">
    <button type=\"submit\">Login</button>
</form>

        <div class=\"link\">
            <a href=\"{{ path('app_front_register') }}\">Create account</a>
        </div>
    </div>

</div>

</body>
</html>", "login/login.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\login\\login.html.twig");
    }
}
