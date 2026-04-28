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

/* admin/ticket_statistics.html.twig */
class __TwigTemplate_5d35c7f4bbc1b933bd12518a5a682cf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ticket_statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ticket_statistics.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ticket Statistics — Fin-Dinari Admin</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        yield "

    <style>
        :root {
            --brand: #16a34a;
            --brand-light: #dcfce7;
            --brand-dark: #15803d;
            --danger: #ef4444;
            --warning: #f59e0b;
            --info: #3b82f6;
            --bg: #f8fafc;
            --surface: #ffffff;
            --border: #e2e8f0;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --sidebar-width: 270px;
            --radius-lg: 24px;
            --shadow-sm: 0 4px 12px rgba(0,0,0,0.03);
            --shadow-md: 0 8px 24px rgba(0,0,0,0.06);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text-primary);
        }

        .layout { display: flex; min-height: 100vh; }

        .sidebar {
            width: var(--sidebar-width);
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0; left: 0; bottom: 0;
            z-index: 100;
            padding: 32px 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 40px;
            padding: 0 12px;
        }
        .brand-name { font-size: 24px; font-weight: 800; color: var(--brand); letter-spacing: -0.5px; }

        .nav-section {
            font-size: 11px; font-weight: 700; letter-spacing: 1px;
            text-transform: uppercase; color: var(--text-secondary);
            padding: 0 12px 12px;
        }

        .side-link {
            display: flex; align-items: center; gap: 12px;
            text-decoration: none; color: var(--text-secondary);
            padding: 14px 16px; border-radius: 16px;
            margin-bottom: 4px; font-weight: 600;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .side-link:hover { background: var(--brand-light); color: var(--brand); }
        .side-link.active { background: var(--brand-light); color: var(--brand-dark); }
        .side-link svg { width: 20px; height: 20px; }

        .content { margin-left: var(--sidebar-width); flex: 1; padding: 40px; min-height: 100vh; display: flex; flex-direction: column; }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            padding: 0 10px;
        }

        .page-title { font-size: 24px; font-weight: 800; color: #1e293b; }
        
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
            gap: 28px;
        }

        .chart-card {
            background: var(--surface);
            border-radius: 20px;
            padding: 24px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            display: flex;
            flex-direction: column;
        }

        .chart-header {
            font-size: 16px;
            font-weight: 800;
            color: var(--text-primary);
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .chart-header svg {
            width: 20px;
            height: 20px;
            color: var(--brand);
        }

        .chart-container {
            position: relative;
            height: 380px;
            width: 100%;
            flex: 1;
        }
    </style>
</head>
<body>
<div class=\"layout\">
    <aside class=\"sidebar\">
        <div class=\"brand\">
            <div class=\"brand-name\">Fin-Dinari</div>
        </div>
        
        <div class=\"nav-section\">Management</div>
        <a class=\"side-link\" href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
            Dashboard
        </a>
        <a class=\"side-link\" href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_wallets");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
            Manage Wallets
        </a>
        <a class=\"side-link\" href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_tickets");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"></path></svg>
            All Tickets
        </a>
        <a class=\"side-link\" href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ticket_calendar");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/></svg>
            Ticket Calendar
        </a>
        <a class=\"side-link active\" href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ticket_stats");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"/><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"/><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"/></svg>
            Ticket Statistics
        </a>
        
        <div style=\"margin-top:auto;\">
            <a class=\"side-link\" href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Back to Site</a>
            <a class=\"side-link\" href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" style=\"color:var(--danger)\">Logout</a>
        </div>
    </aside>

    <main class=\"content\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">Ticket Statistics</h1>
        </div>

        <div class=\"charts-grid\">
            <!-- Camembert des statuts -->
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21.21 15.89A10 10 0 1 1 8 2.83\"></path><path d=\"M22 12A10 10 0 0 0 12 2v10z\"></path></svg>
                    Ticket Statuses
                </div>
                <div class=\"chart-container\">
                    ";
        // line 182
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["statusChart"]) || array_key_exists("statusChart", $context) ? $context["statusChart"] : (function () { throw new RuntimeError('Variable "statusChart" does not exist.', 182, $this->source); })()));
        yield "
                </div>
            </div>

            <!-- Bar chart des priorités -->
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"/><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"/><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"/></svg>
                    Tickets by Priority
                </div>
                <div class=\"chart-container\">
                    ";
        // line 193
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["priorityChart"]) || array_key_exists("priorityChart", $context) ? $context["priorityChart"] : (function () { throw new RuntimeError('Variable "priorityChart" does not exist.', 193, $this->source); })()));
        yield "
                </div>
            </div>

            <!-- Camembert SLA (Respect délai / Retard) -->
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
                    SLA Adherence
                </div>
                <div class=\"chart-container\">
                    ";
        // line 204
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["slaChart"]) || array_key_exists("slaChart", $context) ? $context["slaChart"] : (function () { throw new RuntimeError('Variable "slaChart" does not exist.', 204, $this->source); })()));
        yield "
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/ticket_statistics.html.twig";
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
        return array (  283 => 204,  269 => 193,  255 => 182,  235 => 165,  231 => 164,  222 => 158,  215 => 154,  208 => 150,  201 => 146,  194 => 142,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ticket Statistics — Fin-Dinari Admin</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    
    {{ importmap('app') }}

    <style>
        :root {
            --brand: #16a34a;
            --brand-light: #dcfce7;
            --brand-dark: #15803d;
            --danger: #ef4444;
            --warning: #f59e0b;
            --info: #3b82f6;
            --bg: #f8fafc;
            --surface: #ffffff;
            --border: #e2e8f0;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --sidebar-width: 270px;
            --radius-lg: 24px;
            --shadow-sm: 0 4px 12px rgba(0,0,0,0.03);
            --shadow-md: 0 8px 24px rgba(0,0,0,0.06);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text-primary);
        }

        .layout { display: flex; min-height: 100vh; }

        .sidebar {
            width: var(--sidebar-width);
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0; left: 0; bottom: 0;
            z-index: 100;
            padding: 32px 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 40px;
            padding: 0 12px;
        }
        .brand-name { font-size: 24px; font-weight: 800; color: var(--brand); letter-spacing: -0.5px; }

        .nav-section {
            font-size: 11px; font-weight: 700; letter-spacing: 1px;
            text-transform: uppercase; color: var(--text-secondary);
            padding: 0 12px 12px;
        }

        .side-link {
            display: flex; align-items: center; gap: 12px;
            text-decoration: none; color: var(--text-secondary);
            padding: 14px 16px; border-radius: 16px;
            margin-bottom: 4px; font-weight: 600;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .side-link:hover { background: var(--brand-light); color: var(--brand); }
        .side-link.active { background: var(--brand-light); color: var(--brand-dark); }
        .side-link svg { width: 20px; height: 20px; }

        .content { margin-left: var(--sidebar-width); flex: 1; padding: 40px; min-height: 100vh; display: flex; flex-direction: column; }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            padding: 0 10px;
        }

        .page-title { font-size: 24px; font-weight: 800; color: #1e293b; }
        
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
            gap: 28px;
        }

        .chart-card {
            background: var(--surface);
            border-radius: 20px;
            padding: 24px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            display: flex;
            flex-direction: column;
        }

        .chart-header {
            font-size: 16px;
            font-weight: 800;
            color: var(--text-primary);
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .chart-header svg {
            width: 20px;
            height: 20px;
            color: var(--brand);
        }

        .chart-container {
            position: relative;
            height: 380px;
            width: 100%;
            flex: 1;
        }
    </style>
</head>
<body>
<div class=\"layout\">
    <aside class=\"sidebar\">
        <div class=\"brand\">
            <div class=\"brand-name\">Fin-Dinari</div>
        </div>
        
        <div class=\"nav-section\">Management</div>
        <a class=\"side-link\" href=\"{{ path('app_admin_dashboard') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
            Dashboard
        </a>
        <a class=\"side-link\" href=\"{{ path('app_admin_wallets') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
            Manage Wallets
        </a>
        <a class=\"side-link\" href=\"{{ path('app_admin_tickets') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"></path></svg>
            All Tickets
        </a>
        <a class=\"side-link\" href=\"{{ path('app_admin_ticket_calendar') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/></svg>
            Ticket Calendar
        </a>
        <a class=\"side-link active\" href=\"{{ path('app_admin_ticket_stats') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"/><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"/><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"/></svg>
            Ticket Statistics
        </a>
        
        <div style=\"margin-top:auto;\">
            <a class=\"side-link\" href=\"{{ path('app_home') }}\">Back to Site</a>
            <a class=\"side-link\" href=\"{{ path('app_logout') }}\" style=\"color:var(--danger)\">Logout</a>
        </div>
    </aside>

    <main class=\"content\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">Ticket Statistics</h1>
        </div>

        <div class=\"charts-grid\">
            <!-- Camembert des statuts -->
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21.21 15.89A10 10 0 1 1 8 2.83\"></path><path d=\"M22 12A10 10 0 0 0 12 2v10z\"></path></svg>
                    Ticket Statuses
                </div>
                <div class=\"chart-container\">
                    {{ render_chart(statusChart) }}
                </div>
            </div>

            <!-- Bar chart des priorités -->
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"/><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"/><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"/></svg>
                    Tickets by Priority
                </div>
                <div class=\"chart-container\">
                    {{ render_chart(priorityChart) }}
                </div>
            </div>

            <!-- Camembert SLA (Respect délai / Retard) -->
            <div class=\"chart-card\">
                <div class=\"chart-header\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
                    SLA Adherence
                </div>
                <div class=\"chart-container\">
                    {{ render_chart(slaChart) }}
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
", "admin/ticket_statistics.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\admin\\ticket_statistics.html.twig");
    }
}
