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

/* admin/dashboard.html.twig */
class __TwigTemplate_0d568be77635fe47f1b232cb5b960aaf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Dashboard — Fin-Dinari</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        :root {
            --brand: #16a34a;
            --brand-light: #dcfce7;
            --brand-dark: #15803d;
            --danger: #ef4444;
            --danger-light: #fef2f2;
            --success: #22c55e;
            --success-light: #dcfce7;
            --warning: #f59e0b;
            --warning-light: #fff8e6;
            --info: #0ea5e9;
            --info-light: #e6f6ff;
            --bg: #f4f7f4;
            --surface: #ffffff;
            --border: #e4ebe4;
            --text-primary: #1a2e1a;
            --text-secondary: #4b6b4b;
            --text-muted: #8faa8f;
            --sidebar-width: 270px;
            --topbar-height: 72px;
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 20px;
            --shadow-card: 0 2px 16px rgba(22,163,74,.07);
            --shadow-hover: 0 8px 28px rgba(22,163,74,.20);
            --transition: .22s cubic-bezier(.4,0,.2,1);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text-primary);
            font-size: 14.5px;
            line-height: 1.6;
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
            padding: 28px 18px 24px;
            overflow-y: auto;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 4px 10px 28px;
            border-bottom: 1px solid var(--border);
            margin-bottom: 18px;
        }

        .brand-icon { width: 40px; height: 40px; }
        .brand-icon img { width: 100%; height: 100%; object-fit: contain; }

        .brand-name {
            font-size: 22px;
            font-weight: 800;
            color: var(--brand);
            letter-spacing: -0.5px;
        }

        .nav-section {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.9px;
            text-transform: uppercase;
            color: var(--text-muted);
            padding: 8px 12px 6px;
            margin-top: 4px;
        }

        .side-link {
            display: flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            color: var(--text-secondary);
            padding: 11px 14px;
            border-radius: var(--radius-md);
            margin-bottom: 4px;
            font-weight: 600;
            font-size: 14px;
            transition: background var(--transition), color var(--transition), transform var(--transition);
            position: relative;
        }

        .side-link:hover { background: var(--brand-light); color: var(--brand); transform: translateX(2px); }
        .side-link.active { background: var(--brand-light); color: var(--brand); box-shadow: inset 3px 0 0 var(--brand); }

        .sidebar-footer {
            margin-top: auto;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }

        .content { margin-left: var(--sidebar-width); flex: 1; padding: 28px; min-width: 0; }

        .topbar {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 26px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border);
        }

        .topbar-title { font-size: 22px; font-weight: 800; letter-spacing: -0.4px; }
        .topbar-title span { color: var(--brand); }
        .topbar-right { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }

        .avatar {
            width: 38px; height: 38px;
            border-radius: 50%;
            background: var(--brand-light);
            color: var(--brand);
            font-weight: 800;
            display: flex; align-items: center; justify-content: center;
            font-size: 15px;
            border: 2px solid var(--brand);
        }

        .welcome-text { font-size: 13.5px; color: var(--text-secondary); font-weight: 600; }
        .welcome-text strong { color: var(--text-primary); }

        .flash {
            padding: 14px 18px;
            border-radius: var(--radius-md);
            margin-bottom: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            border: 1px solid transparent;
        }

        .flash.success { background: var(--success-light); color: #166534; border-color: #b2f5d1; }
        .flash.danger  { background: var(--danger-light);  color: #9b1c1c; border-color: #fdb9b9; }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-bottom: 26px;
        }

        .card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 22px 22px 20px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border);
            display: flex;
            align-items: flex-start;
            gap: 16px;
            transition: transform var(--transition), box-shadow var(--transition);
            position: relative;
            overflow: hidden;
        }

        .card::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 80px; height: 80px;
            border-radius: 50%;
            background: var(--card-accent, var(--brand-light));
            transform: translate(25px, -25px);
            opacity: .55;
        }

        .card:hover { transform: translateY(-3px); box-shadow: var(--shadow-hover); }

        .card-body { flex: 1; min-width: 0; }
        .card-label { font-size: 12.5px; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; margin-bottom: 4px; }
        .card-value { font-size: 32px; font-weight: 800; color: var(--text-primary); letter-spacing: -1px; line-height: 1; }

        .card.c-purple  { --card-accent: #dcfce7; }
        .card.c-green   { --card-accent: #d1fae5; }
        .card.c-amber   { --card-accent: #fff8e6; }
        .card.c-blue    { --card-accent: #e6f6ff; }
        .card.c-red     { --card-accent: #fef2f2; }

        .section {
            background: var(--surface);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-card);
            margin-bottom: 26px;
            overflow: hidden;
        }

        .section-header {
            padding: 22px 26px 18px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .section-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .section-body { padding: 24px 26px; }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 14px; }
        @media (max-width: 640px) { .form-grid { grid-template-columns: 1fr; } }

        .form-group { display: flex; flex-direction: column; gap: 6px; }
        .form-group label { font-size: 12.5px; font-weight: 700; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .5px; }

        input[type=\"text\"], input[type=\"email\"], input[type=\"password\"], select, textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            background: #fafbff;
            color: var(--text-primary);
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(105,108,255,.14);
            background: #fff;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border: none;
            border-radius: var(--radius-sm);
            padding: 10px 18px;
            cursor: pointer;
            font-family: inherit;
            font-size: 13.5px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-primary   { background: var(--brand); color: #fff; }
        .btn-danger    { background: var(--danger); color: #fff; }
        .btn-success   { background: var(--success); color: #fff; }
        .btn-secondary { background: #f0f2f7; color: var(--text-secondary); }
        .btn-sm        { padding: 7px 13px; font-size: 12.5px; border-radius: 6px; }

        .table-wrapper { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        thead tr { background: #f8f9fd; border-bottom: 2px solid var(--border); }

        th {
            text-align: left;
            padding: 13px 16px;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: .7px;
            white-space: nowrap;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
            color: var(--text-primary);
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 11px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .3px;
        }

        .badge.admin       { background: var(--brand-light); color: var(--brand-dark); }
        .badge.user        { background: var(--info-light); color: var(--info); }
        .badge.influencer  { background: var(--warning-light); color: var(--warning); }
        .badge.active      { background: #dcfce7; color: #166534; }
        .badge.inactive    { background: #fef2f2; color: #b91c1c; }
        .badge.badge-termine  { background: #dcfce7; color: #166534; }
        .badge.badge-en-cours { background: #fff8e6; color: #b45309; }

        .role-form { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        .role-form select { padding: 7px 10px; border-radius: 6px; margin: 0; font-size: 13px; min-width: 110px; }

        .empty-state { text-align: center; padding: 40px 20px; color: var(--text-muted); }
        .stars { display: inline-flex; gap: 2px; }
        .star { color: #d1d5db; font-size: 14px; }
        .star.filled { color: var(--warning); }

        .filters-bar { display: flex; gap: 12px; flex-wrap: wrap; align-items: end; }
        .filters-bar .form-group.flex-grow { flex: 1; min-width: 260px; }
        .filters-bar .form-group.fixed-width { min-width: 220px; }
        .filters-actions { display: flex; gap: 10px; flex-wrap: wrap; }

        .action-icons { display: flex; align-items: center; gap: 8px; }
        .action-icons a, .action-icons button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 4px;
            border-radius: 6px;
        }

        .pagination {
            display: flex;
            gap: 8px;
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            flex-wrap: wrap;
        }

        .pagination span,
        .pagination a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 36px;
            height: 36px;
            padding: 0 12px;
            border-radius: 10px;
            text-decoration: none;
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--text-secondary);
            font-weight: 700;
        }

        .pagination .current {
            background: var(--brand);
            color: #fff;
            border-color: var(--brand);
        }

        .ajax-loading {
            opacity: .6;
            pointer-events: none;
            transition: opacity .2s ease;
        }
    </style>
</head>
<body>
<div class=\"layout\">

    <aside class=\"sidebar\">
        <div class=\"brand\">
            <div class=\"brand-icon\">
                <img src=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Fin-Dinari Logo\">
            </div>
            <span class=\"brand-name\">Fin-Dinari</span>
        </div>

        <div class=\"nav-section\">Main</div>
        <a class=\"side-link active\" href=\"";
        // line 399
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">Dashboard</a>
        <a class=\"side-link ";
        // line 400
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 400, $this->source); })()), "request", [], "any", false, false, false, 400), "attributes", [], "any", false, false, false, 400), "get", ["_route"], "method", false, false, false, 400) == "app_admin_overview_dashboard")) {
            yield "active";
        }
        yield "\" 
   href=\"";
        // line 401
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_overview_dashboard");
        yield "\">
    Overview Dashboard
</a>
        <a class=\"side-link\" href=\"";
        // line 404
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_wallets");
        yield "\">Manage Wallets</a>
        <a class=\"side-link\" href=\"";
        // line 405
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_objectifs");
        yield "\">Manage Objectifs</a>
        <a class=\"side-link\" href=\"";
        // line 406
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_tickets");
        yield "\">Tickets & Messages</a>
        <a class=\"side-link\" href=\"";
        // line 407
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_obligations");
        yield "\">Manage Obligations</a>

        <div class=\"sidebar-footer\">
            <a class=\"side-link\" href=\"";
        // line 410
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Back to site</a>
            <a class=\"side-link\" href=\"";
        // line 411
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
        </div>
    </aside>

    <main class=\"content\">

        <div class=\"topbar\">
            <div>
                <div class=\"topbar-title\">Admin <span>Dashboard</span></div>
            </div>
            <div class=\"topbar-right\">
                <a href=\"";
        // line 422
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_wallets");
        yield "\" class=\"btn btn-primary\">Wallets</a>
                <div class=\"welcome-text\">Welcome back, <strong>";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 423, $this->source); })()), "user", [], "any", false, false, false, 423), "prenom", [], "any", false, false, false, 423), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 423, $this->source); })()), "user", [], "any", false, false, false, 423), "nom", [], "any", false, false, false, 423), "html", null, true);
        yield "</strong></div>
                <div class=\"avatar\">";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424), "prenom", [], "any", false, false, false, 424))), "html", null, true);
        yield "</div>
            </div>
        </div>

        ";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "flashes", ["success"], "method", false, false, false, 428));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 429
            yield "            <div class=\"flash success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 431, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 431));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 432
            yield "            <div class=\"flash danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        yield "
        <div class=\"cards\">
            <div class=\"card c-purple\">
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Users</div>
                    <div class=\"card-value\">";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 439, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"card c-blue\">
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Feedbacks</div>
                    <div class=\"card-value\">";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFeedbacks"]) || array_key_exists("totalFeedbacks", $context) ? $context["totalFeedbacks"] : (function () { throw new RuntimeError('Variable "totalFeedbacks" does not exist.', 445, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"card c-red\">
                <div class=\"card-body\">
                    <div class=\"card-label\">Admins</div>
                    <div class=\"card-value\">";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["adminCount"]) || array_key_exists("adminCount", $context) ? $context["adminCount"] : (function () { throw new RuntimeError('Variable "adminCount" does not exist.', 451, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"card c-amber\">
                <div class=\"card-body\">
                    <div class=\"card-label\">Influencers</div>
                    <div class=\"card-value\">";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["influencerCount"]) || array_key_exists("influencerCount", $context) ? $context["influencerCount"] : (function () { throw new RuntimeError('Variable "influencerCount" does not exist.', 457, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Create Admin Account</div>
            </div>
            <div class=\"section-body\">
                <form method=\"post\" action=\"";
        // line 467
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_create_admin");
        yield "\">
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label>Last name</label>
                            <input type=\"text\" name=\"nom\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>First name</label>
                            <input type=\"text\" name=\"prenom\" required>
                        </div>
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label>Email address</label>
                            <input type=\"email\" name=\"gmail\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            <input type=\"password\" name=\"password\" required>
                        </div>
                    </div>
                    <button class=\"btn btn-primary\" type=\"submit\">Create Admin</button>
                </form>
            </div>
        </div>

        ";
        // line 493
        yield from $this->load("admin/_users_table.html.twig", 493)->unwrap()->yield($context);
        // line 494
        yield "
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Feedbacks</div>
                <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFeedbacks"]) || array_key_exists("totalFeedbacks", $context) ? $context["totalFeedbacks"] : (function () { throw new RuntimeError('Variable "totalFeedbacks" does not exist.', 498, $this->source); })()), "html", null, true);
        yield " total</span>
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr><th>#</th><th>User</th><th>Rating</th><th>Message</th><th>Date</th><th>Action</th></tr>
                    </thead>
                    <tbody>
                    ";
        // line 506
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 506, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
            // line 507
            yield "                        <tr>
                            <td>";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 508), "html", null, true);
            yield "</td>
                            <td>";
            // line 509
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "userEmail", [], "any", false, false, false, 509), "html", null, true);
            yield "</td>
                            <td>
                                <div class=\"stars\">
                                    ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 513
                yield "                                        <span class=\"star ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "rating", [], "any", false, false, false, 513))) {
                    yield "filled";
                }
                yield "\">★</span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            yield "                                </div>
                                <div>";
            // line 516
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "rating", [], "any", false, false, false, 516), "html", null, true);
            yield "/5</div>
                            </td>
                            <td>";
            // line 518
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "message", [], "any", false, false, false, 518), "html", null, true);
            yield "</td>
                            <td>";
            // line 519
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 519), "d M Y, H:i"), "html", null, true)) : ("—"));
            yield "</td>
                            <td>
                                <form method=\"post\" action=\"";
            // line 521
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_feedback_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 521)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Delete this feedback?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_feedback_admin_" . CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 522))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">Delete</button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 527
        if (!$context['_iterated']) {
            // line 528
            yield "                        <tr><td colspan=\"6\"><div class=\"empty-state\"><p>No feedbacks found yet.</p></div></td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feedback'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        yield "                    </tbody>
                </table>
            </div>

            <div style=\"padding:18px 26px;\">
                ";
        // line 535
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 535, $this->source); })()));
        yield "
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Objectifs</div>
                <div style=\"display:flex;align-items:center;gap:12px;\">
                    <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 543, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 543), "html", null, true);
        yield " total</span>
                    <a href=\"";
        // line 544
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_objectifs");
        yield "\" class=\"btn btn-primary btn-sm\">Gérer les objectifs →</a>
                </div>
            </div>

            <div class=\"section-body\" style=\"padding-bottom:0; border-bottom:1px solid var(--border);\">
                <form method=\"get\" action=\"";
        // line 549
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"filters-bar\">
                    <div class=\"form-group fixed-width\">
                        <label>Statut objectif</label>
                        <select name=\"obj_statut\" onchange=\"this.form.submit()\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"EN_COURS\" ";
        // line 554
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 554, $this->source); })()), "request", [], "any", false, false, false, 554), "query", [], "any", false, false, false, 554), "get", ["obj_statut"], "method", false, false, false, 554) == "EN_COURS")) ? ("selected") : (""));
        yield ">En cours</option>
                            <option value=\"TERMINE\" ";
        // line 555
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "request", [], "any", false, false, false, 555), "query", [], "any", false, false, false, 555), "get", ["obj_statut"], "method", false, false, false, 555) == "TERMINE")) ? ("selected") : (""));
        yield ">Terminé</option>
                        </select>
                    </div>
                    ";
        // line 558
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 558, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"q\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 558, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 559
        yield "                    ";
        if ((($tmp = (isset($context["userSort"]) || array_key_exists("userSort", $context) ? $context["userSort"] : (function () { throw new RuntimeError('Variable "userSort" does not exist.', 559, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<input type=\"hidden\" name=\"user_sort\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userSort"]) || array_key_exists("userSort", $context) ? $context["userSort"] : (function () { throw new RuntimeError('Variable "userSort" does not exist.', 559, $this->source); })()), "html", null, true);
            yield "\">";
        }
        // line 560
        yield "                </form>
            </div>

            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th><th>Wallet ID</th><th>Titre</th><th>Montant</th><th>Date début</th><th>Durée (mois)</th><th>Statut</th><th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 571
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 571, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 572
            yield "                        <tr>
                            <td>";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 573), "html", null, true);
            yield "</td>
                            <td>";
            // line 574
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "walletId", [], "any", false, false, false, 574), "html", null, true);
            yield "</td>
                            <td><strong>";
            // line 575
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "titre", [], "any", false, false, false, 575), "html", null, true);
            yield "</strong></td>
                            <td>";
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "montant", [], "any", false, false, false, 576), 2, ",", " "), "html", null, true);
            yield "</td>
                            <td>";
            // line 577
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "dateDebut", [], "any", false, false, false, 577)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "dateDebut", [], "any", false, false, false, 577), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
                            <td>";
            // line 578
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "duree", [], "any", false, false, false, 578), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"badge ";
            // line 580
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "statut", [], "any", false, false, false, 580) == "TERMINE")) ? ("badge-termine") : ("badge-en-cours"));
            yield "\">
                                    ";
            // line 581
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "statut", [], "any", false, false, false, 581) == "TERMINE")) ? ("Terminé") : ("En cours"));
            yield "
                                </span>
                            </td>
                            <td class=\"action-icons\">
                                <a href=\"";
            // line 585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 585)]), "html", null, true);
            yield "\" title=\"Modifier\">✏️</a>
                                <form method=\"post\" action=\"";
            // line 586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 586)]), "html", null, true);
            yield "\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer cet objectif ?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 587
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 587))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" title=\"Supprimer\">🗑️</button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 592
        if (!$context['_iterated']) {
            // line 593
            yield "                        <tr><td colspan=\"8\"><div class=\"empty-state\"><p>Aucun objectif trouvé.</p></div></td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['obj'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 595
        yield "                    </tbody>
                </table>
            </div>

            <div style=\"padding:18px 26px;\">
                ";
        // line 600
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 600, $this->source); })()));
        yield "
            </div>
        </div>

    </main>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    function initUsersAjax() {
        const usersSection = document.getElementById('users-section');
        if (!usersSection) {
            return;
        }

        const form = document.getElementById('users-filter-form');
        const searchInput = document.getElementById('ajax-search');
        const sortSelect = document.getElementById('ajax-sort');
        const resetBtn = document.getElementById('ajax-reset');

        if (!form || !searchInput || !sortSelect) {
            return;
        }

        let debounceTimer = null;

        function loadUsers(page = 1) {
            usersSection.classList.add('ajax-loading');

            const params = new URLSearchParams();
            params.set('q', searchInput.value || '');
            params.set('user_sort', sortSelect.value || 'name_asc');
            params.set('users_page', page);

            fetch(\"";
        // line 634
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ajax_users");
        yield "?\" + params.toString(), {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('AJAX request failed');
                }
                return response.text();
            })
            .then(function (html) {
                const currentSection = document.getElementById('users-section');
                if (currentSection) {
                    currentSection.outerHTML = html;
                    initUsersAjax();
                }
            })
            .catch(function (error) {
                console.error(error);
            })
            .finally(function () {
                const refreshedSection = document.getElementById('users-section');
                if (refreshedSection) {
                    refreshedSection.classList.remove('ajax-loading');
                }
            });
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            loadUsers(1);
        });

        searchInput.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function () {
                loadUsers(1);
            }, 350);
        });

        sortSelect.addEventListener('change', function () {
            loadUsers(1);
        });

        if (resetBtn) {
            resetBtn.addEventListener('click', function () {
                searchInput.value = '';
                sortSelect.value = 'name_asc';
                loadUsers(1);
            });
        }

        const paginationLinks = document.querySelectorAll('#users-section .pagination a');
        paginationLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                const url = new URL(this.href);
                const page = url.searchParams.get('users_page') || 1;
                loadUsers(page);
            });
        });
    }

    initUsersAjax();
});
</script>
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
        return "admin/dashboard.html.twig";
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
        return array (  904 => 634,  867 => 600,  860 => 595,  853 => 593,  851 => 592,  841 => 587,  837 => 586,  833 => 585,  826 => 581,  822 => 580,  817 => 578,  813 => 577,  809 => 576,  805 => 575,  801 => 574,  797 => 573,  794 => 572,  789 => 571,  776 => 560,  769 => 559,  763 => 558,  757 => 555,  753 => 554,  745 => 549,  737 => 544,  733 => 543,  722 => 535,  715 => 530,  708 => 528,  706 => 527,  696 => 522,  692 => 521,  687 => 519,  683 => 518,  678 => 516,  675 => 515,  664 => 513,  660 => 512,  654 => 509,  650 => 508,  647 => 507,  642 => 506,  631 => 498,  625 => 494,  623 => 493,  594 => 467,  581 => 457,  572 => 451,  563 => 445,  554 => 439,  547 => 434,  538 => 432,  533 => 431,  524 => 429,  520 => 428,  513 => 424,  507 => 423,  503 => 422,  489 => 411,  485 => 410,  479 => 407,  475 => 406,  471 => 405,  467 => 404,  461 => 401,  455 => 400,  451 => 399,  442 => 393,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Dashboard — Fin-Dinari</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        :root {
            --brand: #16a34a;
            --brand-light: #dcfce7;
            --brand-dark: #15803d;
            --danger: #ef4444;
            --danger-light: #fef2f2;
            --success: #22c55e;
            --success-light: #dcfce7;
            --warning: #f59e0b;
            --warning-light: #fff8e6;
            --info: #0ea5e9;
            --info-light: #e6f6ff;
            --bg: #f4f7f4;
            --surface: #ffffff;
            --border: #e4ebe4;
            --text-primary: #1a2e1a;
            --text-secondary: #4b6b4b;
            --text-muted: #8faa8f;
            --sidebar-width: 270px;
            --topbar-height: 72px;
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 20px;
            --shadow-card: 0 2px 16px rgba(22,163,74,.07);
            --shadow-hover: 0 8px 28px rgba(22,163,74,.20);
            --transition: .22s cubic-bezier(.4,0,.2,1);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text-primary);
            font-size: 14.5px;
            line-height: 1.6;
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
            padding: 28px 18px 24px;
            overflow-y: auto;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 4px 10px 28px;
            border-bottom: 1px solid var(--border);
            margin-bottom: 18px;
        }

        .brand-icon { width: 40px; height: 40px; }
        .brand-icon img { width: 100%; height: 100%; object-fit: contain; }

        .brand-name {
            font-size: 22px;
            font-weight: 800;
            color: var(--brand);
            letter-spacing: -0.5px;
        }

        .nav-section {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.9px;
            text-transform: uppercase;
            color: var(--text-muted);
            padding: 8px 12px 6px;
            margin-top: 4px;
        }

        .side-link {
            display: flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            color: var(--text-secondary);
            padding: 11px 14px;
            border-radius: var(--radius-md);
            margin-bottom: 4px;
            font-weight: 600;
            font-size: 14px;
            transition: background var(--transition), color var(--transition), transform var(--transition);
            position: relative;
        }

        .side-link:hover { background: var(--brand-light); color: var(--brand); transform: translateX(2px); }
        .side-link.active { background: var(--brand-light); color: var(--brand); box-shadow: inset 3px 0 0 var(--brand); }

        .sidebar-footer {
            margin-top: auto;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }

        .content { margin-left: var(--sidebar-width); flex: 1; padding: 28px; min-width: 0; }

        .topbar {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 26px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border);
        }

        .topbar-title { font-size: 22px; font-weight: 800; letter-spacing: -0.4px; }
        .topbar-title span { color: var(--brand); }
        .topbar-right { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }

        .avatar {
            width: 38px; height: 38px;
            border-radius: 50%;
            background: var(--brand-light);
            color: var(--brand);
            font-weight: 800;
            display: flex; align-items: center; justify-content: center;
            font-size: 15px;
            border: 2px solid var(--brand);
        }

        .welcome-text { font-size: 13.5px; color: var(--text-secondary); font-weight: 600; }
        .welcome-text strong { color: var(--text-primary); }

        .flash {
            padding: 14px 18px;
            border-radius: var(--radius-md);
            margin-bottom: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            border: 1px solid transparent;
        }

        .flash.success { background: var(--success-light); color: #166534; border-color: #b2f5d1; }
        .flash.danger  { background: var(--danger-light);  color: #9b1c1c; border-color: #fdb9b9; }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-bottom: 26px;
        }

        .card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 22px 22px 20px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border);
            display: flex;
            align-items: flex-start;
            gap: 16px;
            transition: transform var(--transition), box-shadow var(--transition);
            position: relative;
            overflow: hidden;
        }

        .card::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 80px; height: 80px;
            border-radius: 50%;
            background: var(--card-accent, var(--brand-light));
            transform: translate(25px, -25px);
            opacity: .55;
        }

        .card:hover { transform: translateY(-3px); box-shadow: var(--shadow-hover); }

        .card-body { flex: 1; min-width: 0; }
        .card-label { font-size: 12.5px; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; margin-bottom: 4px; }
        .card-value { font-size: 32px; font-weight: 800; color: var(--text-primary); letter-spacing: -1px; line-height: 1; }

        .card.c-purple  { --card-accent: #dcfce7; }
        .card.c-green   { --card-accent: #d1fae5; }
        .card.c-amber   { --card-accent: #fff8e6; }
        .card.c-blue    { --card-accent: #e6f6ff; }
        .card.c-red     { --card-accent: #fef2f2; }

        .section {
            background: var(--surface);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-card);
            margin-bottom: 26px;
            overflow: hidden;
        }

        .section-header {
            padding: 22px 26px 18px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .section-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .section-body { padding: 24px 26px; }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 14px; }
        @media (max-width: 640px) { .form-grid { grid-template-columns: 1fr; } }

        .form-group { display: flex; flex-direction: column; gap: 6px; }
        .form-group label { font-size: 12.5px; font-weight: 700; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .5px; }

        input[type=\"text\"], input[type=\"email\"], input[type=\"password\"], select, textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            background: #fafbff;
            color: var(--text-primary);
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(105,108,255,.14);
            background: #fff;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border: none;
            border-radius: var(--radius-sm);
            padding: 10px 18px;
            cursor: pointer;
            font-family: inherit;
            font-size: 13.5px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-primary   { background: var(--brand); color: #fff; }
        .btn-danger    { background: var(--danger); color: #fff; }
        .btn-success   { background: var(--success); color: #fff; }
        .btn-secondary { background: #f0f2f7; color: var(--text-secondary); }
        .btn-sm        { padding: 7px 13px; font-size: 12.5px; border-radius: 6px; }

        .table-wrapper { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        thead tr { background: #f8f9fd; border-bottom: 2px solid var(--border); }

        th {
            text-align: left;
            padding: 13px 16px;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: .7px;
            white-space: nowrap;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
            color: var(--text-primary);
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 11px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .3px;
        }

        .badge.admin       { background: var(--brand-light); color: var(--brand-dark); }
        .badge.user        { background: var(--info-light); color: var(--info); }
        .badge.influencer  { background: var(--warning-light); color: var(--warning); }
        .badge.active      { background: #dcfce7; color: #166534; }
        .badge.inactive    { background: #fef2f2; color: #b91c1c; }
        .badge.badge-termine  { background: #dcfce7; color: #166534; }
        .badge.badge-en-cours { background: #fff8e6; color: #b45309; }

        .role-form { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        .role-form select { padding: 7px 10px; border-radius: 6px; margin: 0; font-size: 13px; min-width: 110px; }

        .empty-state { text-align: center; padding: 40px 20px; color: var(--text-muted); }
        .stars { display: inline-flex; gap: 2px; }
        .star { color: #d1d5db; font-size: 14px; }
        .star.filled { color: var(--warning); }

        .filters-bar { display: flex; gap: 12px; flex-wrap: wrap; align-items: end; }
        .filters-bar .form-group.flex-grow { flex: 1; min-width: 260px; }
        .filters-bar .form-group.fixed-width { min-width: 220px; }
        .filters-actions { display: flex; gap: 10px; flex-wrap: wrap; }

        .action-icons { display: flex; align-items: center; gap: 8px; }
        .action-icons a, .action-icons button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 4px;
            border-radius: 6px;
        }

        .pagination {
            display: flex;
            gap: 8px;
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            flex-wrap: wrap;
        }

        .pagination span,
        .pagination a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 36px;
            height: 36px;
            padding: 0 12px;
            border-radius: 10px;
            text-decoration: none;
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--text-secondary);
            font-weight: 700;
        }

        .pagination .current {
            background: var(--brand);
            color: #fff;
            border-color: var(--brand);
        }

        .ajax-loading {
            opacity: .6;
            pointer-events: none;
            transition: opacity .2s ease;
        }
    </style>
</head>
<body>
<div class=\"layout\">

    <aside class=\"sidebar\">
        <div class=\"brand\">
            <div class=\"brand-icon\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Fin-Dinari Logo\">
            </div>
            <span class=\"brand-name\">Fin-Dinari</span>
        </div>

        <div class=\"nav-section\">Main</div>
        <a class=\"side-link active\" href=\"{{ path('app_admin_dashboard') }}\">Dashboard</a>
        <a class=\"side-link {% if app.request.attributes.get('_route') == 'app_admin_overview_dashboard' %}active{% endif %}\" 
   href=\"{{ path('app_admin_overview_dashboard') }}\">
    Overview Dashboard
</a>
        <a class=\"side-link\" href=\"{{ path('app_admin_wallets') }}\">Manage Wallets</a>
        <a class=\"side-link\" href=\"{{ path('app_admin_objectifs') }}\">Manage Objectifs</a>
        <a class=\"side-link\" href=\"{{ path('app_admin_tickets') }}\">Tickets & Messages</a>
        <a class=\"side-link\" href=\"{{ path('app_admin_obligations') }}\">Manage Obligations</a>

        <div class=\"sidebar-footer\">
            <a class=\"side-link\" href=\"{{ path('app_home') }}\">Back to site</a>
            <a class=\"side-link\" href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    </aside>

    <main class=\"content\">

        <div class=\"topbar\">
            <div>
                <div class=\"topbar-title\">Admin <span>Dashboard</span></div>
            </div>
            <div class=\"topbar-right\">
                <a href=\"{{ path('app_admin_wallets') }}\" class=\"btn btn-primary\">Wallets</a>
                <div class=\"welcome-text\">Welcome back, <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong></div>
                <div class=\"avatar\">{{ app.user.prenom|first|upper }}</div>
            </div>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"flash success\">{{ message }}</div>
        {% endfor %}
        {% for message in app.flashes('danger') %}
            <div class=\"flash danger\">{{ message }}</div>
        {% endfor %}

        <div class=\"cards\">
            <div class=\"card c-purple\">
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Users</div>
                    <div class=\"card-value\">{{ totalUsers }}</div>
                </div>
            </div>
            <div class=\"card c-blue\">
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Feedbacks</div>
                    <div class=\"card-value\">{{ totalFeedbacks }}</div>
                </div>
            </div>
            <div class=\"card c-red\">
                <div class=\"card-body\">
                    <div class=\"card-label\">Admins</div>
                    <div class=\"card-value\">{{ adminCount }}</div>
                </div>
            </div>
            <div class=\"card c-amber\">
                <div class=\"card-body\">
                    <div class=\"card-label\">Influencers</div>
                    <div class=\"card-value\">{{ influencerCount }}</div>
                </div>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Create Admin Account</div>
            </div>
            <div class=\"section-body\">
                <form method=\"post\" action=\"{{ path('app_admin_create_admin') }}\">
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label>Last name</label>
                            <input type=\"text\" name=\"nom\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>First name</label>
                            <input type=\"text\" name=\"prenom\" required>
                        </div>
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label>Email address</label>
                            <input type=\"email\" name=\"gmail\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            <input type=\"password\" name=\"password\" required>
                        </div>
                    </div>
                    <button class=\"btn btn-primary\" type=\"submit\">Create Admin</button>
                </form>
            </div>
        </div>

        {% include 'admin/_users_table.html.twig' %}

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Feedbacks</div>
                <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">{{ totalFeedbacks }} total</span>
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr><th>#</th><th>User</th><th>Rating</th><th>Message</th><th>Date</th><th>Action</th></tr>
                    </thead>
                    <tbody>
                    {% for feedback in feedbacks %}
                        <tr>
                            <td>{{ feedback.id }}</td>
                            <td>{{ feedback.userEmail }}</td>
                            <td>
                                <div class=\"stars\">
                                    {% for i in 1..5 %}
                                        <span class=\"star {% if i <= feedback.rating %}filled{% endif %}\">★</span>
                                    {% endfor %}
                                </div>
                                <div>{{ feedback.rating }}/5</div>
                            </td>
                            <td>{{ feedback.message }}</td>
                            <td>{{ feedback.createdAt ? feedback.createdAt|date('d M Y, H:i') : '—' }}</td>
                            <td>
                                <form method=\"post\" action=\"{{ path('app_admin_feedback_delete', {id: feedback.id}) }}\" onsubmit=\"return confirm('Delete this feedback?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_feedback_admin_' ~ feedback.id) }}\">
                                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">Delete</button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr><td colspan=\"6\"><div class=\"empty-state\"><p>No feedbacks found yet.</p></div></td></tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>

            <div style=\"padding:18px 26px;\">
                {{ knp_pagination_render(feedbacks) }}
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">Objectifs</div>
                <div style=\"display:flex;align-items:center;gap:12px;\">
                    <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">{{ objectifs.getTotalItemCount }} total</span>
                    <a href=\"{{ path('app_admin_objectifs') }}\" class=\"btn btn-primary btn-sm\">Gérer les objectifs →</a>
                </div>
            </div>

            <div class=\"section-body\" style=\"padding-bottom:0; border-bottom:1px solid var(--border);\">
                <form method=\"get\" action=\"{{ path('app_admin_dashboard') }}\" class=\"filters-bar\">
                    <div class=\"form-group fixed-width\">
                        <label>Statut objectif</label>
                        <select name=\"obj_statut\" onchange=\"this.form.submit()\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"EN_COURS\" {{ app.request.query.get('obj_statut') == 'EN_COURS' ? 'selected' : '' }}>En cours</option>
                            <option value=\"TERMINE\" {{ app.request.query.get('obj_statut') == 'TERMINE' ? 'selected' : '' }}>Terminé</option>
                        </select>
                    </div>
                    {% if search %}<input type=\"hidden\" name=\"q\" value=\"{{ search }}\">{% endif %}
                    {% if userSort %}<input type=\"hidden\" name=\"user_sort\" value=\"{{ userSort }}\">{% endif %}
                </form>
            </div>

            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th><th>Wallet ID</th><th>Titre</th><th>Montant</th><th>Date début</th><th>Durée (mois)</th><th>Statut</th><th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for obj in objectifs %}
                        <tr>
                            <td>{{ obj.id }}</td>
                            <td>{{ obj.walletId }}</td>
                            <td><strong>{{ obj.titre }}</strong></td>
                            <td>{{ obj.montant|number_format(2, ',', ' ') }}</td>
                            <td>{{ obj.dateDebut ? obj.dateDebut|date('d/m/Y') : '—' }}</td>
                            <td>{{ obj.duree }}</td>
                            <td>
                                <span class=\"badge {{ obj.statut == 'TERMINE' ? 'badge-termine' : 'badge-en-cours' }}\">
                                    {{ obj.statut == 'TERMINE' ? 'Terminé' : 'En cours' }}
                                </span>
                            </td>
                            <td class=\"action-icons\">
                                <a href=\"{{ path('objectif_edit', {id: obj.id}) }}\" title=\"Modifier\">✏️</a>
                                <form method=\"post\" action=\"{{ path('objectif_delete', {id: obj.id}) }}\" style=\"display:inline\" onsubmit=\"return confirm('Supprimer cet objectif ?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ obj.id) }}\">
                                    <button type=\"submit\" title=\"Supprimer\">🗑️</button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr><td colspan=\"8\"><div class=\"empty-state\"><p>Aucun objectif trouvé.</p></div></td></tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>

            <div style=\"padding:18px 26px;\">
                {{ knp_pagination_render(objectifs) }}
            </div>
        </div>

    </main>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    function initUsersAjax() {
        const usersSection = document.getElementById('users-section');
        if (!usersSection) {
            return;
        }

        const form = document.getElementById('users-filter-form');
        const searchInput = document.getElementById('ajax-search');
        const sortSelect = document.getElementById('ajax-sort');
        const resetBtn = document.getElementById('ajax-reset');

        if (!form || !searchInput || !sortSelect) {
            return;
        }

        let debounceTimer = null;

        function loadUsers(page = 1) {
            usersSection.classList.add('ajax-loading');

            const params = new URLSearchParams();
            params.set('q', searchInput.value || '');
            params.set('user_sort', sortSelect.value || 'name_asc');
            params.set('users_page', page);

            fetch(\"{{ path('app_admin_ajax_users') }}?\" + params.toString(), {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('AJAX request failed');
                }
                return response.text();
            })
            .then(function (html) {
                const currentSection = document.getElementById('users-section');
                if (currentSection) {
                    currentSection.outerHTML = html;
                    initUsersAjax();
                }
            })
            .catch(function (error) {
                console.error(error);
            })
            .finally(function () {
                const refreshedSection = document.getElementById('users-section');
                if (refreshedSection) {
                    refreshedSection.classList.remove('ajax-loading');
                }
            });
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            loadUsers(1);
        });

        searchInput.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function () {
                loadUsers(1);
            }, 350);
        });

        sortSelect.addEventListener('change', function () {
            loadUsers(1);
        });

        if (resetBtn) {
            resetBtn.addEventListener('click', function () {
                searchInput.value = '';
                sortSelect.value = 'name_asc';
                loadUsers(1);
            });
        }

        const paginationLinks = document.querySelectorAll('#users-section .pagination a');
        paginationLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                const url = new URL(this.href);
                const page = url.searchParams.get('users_page') || 1;
                loadUsers(page);
            });
        });
    }

    initUsersAjax();
});
</script>
</body>
</html>", "admin/dashboard.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed - Copy\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\admin\\dashboard.html.twig");
    }
}
