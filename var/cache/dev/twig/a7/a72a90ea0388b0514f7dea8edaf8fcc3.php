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

/* emails/ticket_resolved.html.twig */
class __TwigTemplate_8eb8e261ab67e0467879b800187625f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/ticket_resolved.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/ticket_resolved.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Ticket Resolved</title>
</head>
<body style=\"font-family: Arial, sans-serif; background:#f7f7f7; padding:30px;\">
    <div style=\"max-width:600px; margin:auto; background:white; padding:30px; border-radius:12px;\">
        <h2 style=\"color:#16a34a; margin-bottom:20px;\">Your ticket has been resolved</h2>

        <p>Hello ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "prenom", [], "any", false, false, false, 11), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield ",</p>

        <p>Your support ticket has been marked as resolved by our team.</p>

        <div style=\"margin:20px 0; padding:16px; background:#f8faf8; border-radius:10px;\">
            <p><strong>Ticket:</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
            <p><strong>Priority:</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 17, $this->source); })()), "priorite", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
            <p><strong>Status:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 18, $this->source); })()), "statut", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
            <p><strong>Description:</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
        </div>

        <p>Thank you for using Fin-Dinari.</p>
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
        return "emails/ticket_resolved.html.twig";
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
        return array (  82 => 19,  78 => 18,  74 => 17,  70 => 16,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Ticket Resolved</title>
</head>
<body style=\"font-family: Arial, sans-serif; background:#f7f7f7; padding:30px;\">
    <div style=\"max-width:600px; margin:auto; background:white; padding:30px; border-radius:12px;\">
        <h2 style=\"color:#16a34a; margin-bottom:20px;\">Your ticket has been resolved</h2>

        <p>Hello {{ user.prenom }} {{ user.nom }},</p>

        <p>Your support ticket has been marked as resolved by our team.</p>

        <div style=\"margin:20px 0; padding:16px; background:#f8faf8; border-radius:10px;\">
            <p><strong>Ticket:</strong> {{ ticket.titre }}</p>
            <p><strong>Priority:</strong> {{ ticket.priorite }}</p>
            <p><strong>Status:</strong> {{ ticket.statut }}</p>
            <p><strong>Description:</strong> {{ ticket.description }}</p>
        </div>

        <p>Thank you for using Fin-Dinari.</p>
    </div>
</body>
</html>", "emails/ticket_resolved.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\emails\\ticket_resolved.html.twig");
    }
}
