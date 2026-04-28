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

/* admin/tickets.html.twig */
class __TwigTemplate_2b3c67a3834059da053974758b4fcdf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tickets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tickets.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Manage Tickets — Fin-Dinari</title>
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t\t<style>:root
\t\t{
\t\t\t--brand: #16a34a;
\t\t\t--brand-light: #dcfce7;
\t\t\t--brand-dark: #15803d;
\t\t\t--danger: #ef4444;
\t\t\t--danger-light: #fef2f2;
\t\t\t--success: #22c55e;
\t\t\t--success-light: #dcfce7;
\t\t\t--warning: #f59e0b;
\t\t\t--warning-light: #fff8e6;
\t\t\t--info: #0ea5e9;
\t\t\t--info-light: #e6f6ff;
\t\t\t--bg: #f4f7f4;
\t\t\t--surface: #ffffff;
\t\t\t--border: #e4ebe4;
\t\t\t--text-primary: #1a2e1a;
\t\t\t--text-secondary: #4b6b4b;
\t\t\t--text-muted: #8faa8f;
\t\t\t--sidebar-width: 270px;
\t\t\t--radius-sm: 8px;
\t\t\t--radius-md: 14px;
\t\t\t--radius-lg: 20px;
\t\t\t--shadow-card: 0 2px 16px rgba(22, 163, 74, .07);
\t\t\t--shadow-hover: 0 8px 28px rgba(22, 163, 74, .20);
\t\t\t--transition: 0.22s cubic-bezier(0.4,0,0.2,1);
\t\t}

\t\t*,
\t\t*::before,
\t\t*::after {
\t\t\tbox-sizing: border-box;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}

\t\tbody {
\t\t\tfont-family: 'Plus Jakarta Sans', sans-serif;
\t\t\tbackground: var(--bg);
\t\t\tcolor: var(--text-primary);
\t\t\tfont-size: 14.5px;
\t\t\tline-height: 1.6;
\t\t}

\t\t.layout {
\t\t\tdisplay: flex;
\t\t\tmin-height: 100vh;
\t\t}

\t\t.sidebar {
\t\t\twidth: var(--sidebar-width);
\t\t\tbackground: var(--surface);
\t\t\tborder-right: 1px solid var(--border);
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\tbottom: 0;
\t\t\tz-index: 100;
\t\t\tpadding: 28px 18px 24px;
\t\t\toverflow-y: auto;
\t\t}

\t\t.brand {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 10px;
\t\t\tpadding: 4px 10px 28px;
\t\t\tborder-bottom: 1px solid var(--border);
\t\t\tmargin-bottom: 18px;
\t\t}

\t\t.brand-icon {
\t\t\twidth: 40px;
\t\t\theight: 40px;
\t\t}

\t\t.brand-icon img {
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tobject-fit: contain;
\t\t}

\t\t.brand-name {
\t\t\tfont-size: 22px;
\t\t\tfont-weight: 800;
\t\t\tcolor: var(--brand);
\t\t\tletter-spacing: -0.5px;
\t\t}

\t\t.nav-section {
\t\t\tfont-size: 11px;
\t\t\tfont-weight: 700;
\t\t\tletter-spacing: 0.9px;
\t\t\ttext-transform: uppercase;
\t\t\tcolor: var(--text-muted);
\t\t\tpadding: 8px 12px 6px;
\t\t\tmargin-top: 4px;
\t\t}

\t\t.side-link {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 11px;
\t\t\ttext-decoration: none;
\t\t\tcolor: var(--text-secondary);
\t\t\tpadding: 11px 14px;
\t\t\tborder-radius: var(--radius-md);
\t\t\tmargin-bottom: 4px;
\t\t\tfont-weight: 600;
\t\t\tfont-size: 14px;
\t\t\ttransition: background var(--transition), color var(--transition), transform var(--transition);
\t\t}

\t\t.side-link:hover {
\t\t\tbackground: var(--brand-light);
\t\t\tcolor: var(--brand);
\t\t\ttransform: translateX(2px);
\t\t}

\t\t.side-link.active {
\t\t\tbackground: var(--brand-light);
\t\t\tcolor: var(--brand-dark);
\t\t\tbox-shadow: inset 3px 0 0 var(--brand);
\t\t}

\t\t.side-link svg {
\t\t\twidth: 18px;
\t\t\theight: 18px;
\t\t\tflex-shrink: 0;
\t\t}

\t\t.sidebar-footer {
\t\t\tmargin-top: auto;
\t\t\tpadding-top: 18px;
\t\t\tborder-top: 1px solid var(--border);
\t\t}

\t\t.content {
\t\t\tmargin-left: var(--sidebar-width);
\t\t\tflex: 1;
\t\t\tpadding: 28px;
\t\t\tmin-width: 0;
\t\t}

\t\t.topbar {
\t\t\tbackground: var(--surface);
\t\t\tborder-radius: var(--radius-lg);
\t\t\tpadding: 16px 24px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\tmargin-bottom: 26px;
\t\t\tbox-shadow: var(--shadow-card);
\t\t\tborder: 1px solid var(--border);
\t\t}

\t\t.topbar-title {
\t\t\tfont-size: 22px;
\t\t\tfont-weight: 800;
\t\t\tletter-spacing: -0.4px;
\t\t}
\t\t.topbar-title span {
\t\t\tcolor: var(--brand);
\t\t}
\t\t.topbar-right {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 14px;
\t\t}

\t\t.avatar {
\t\t\twidth: 38px;
\t\t\theight: 38px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: var(--brand-light);
\t\t\tcolor: var(--brand-dark);
\t\t\tfont-weight: 800;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tfont-size: 15px;
\t\t\tborder: 2px solid var(--brand);
\t\t}

\t\t.welcome-text {
\t\t\tfont-size: 13.5px;
\t\t\tcolor: var(--text-secondary);
\t\t\tfont-weight: 600;
\t\t}
\t\t.welcome-text strong {
\t\t\tcolor: var(--text-primary);
\t\t}

\t\t.flash {
\t\t\tpadding: 14px 18px;
\t\t\tborder-radius: var(--radius-md);
\t\t\tmargin-bottom: 20px;
\t\t\tfont-weight: 600;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 10px;
\t\t\tfont-size: 14px;
\t\t\tborder: 1px solid transparent;
\t\t\tanimation: fadeSlideDown 0.3s ease;
\t\t}

\t\t@keyframes fadeSlideDown {
\t\t\tfrom {
\t\t\t\topacity: 0;
\t\t\t\ttransform: translateY(-8px);
\t\t\t}
\t\t\tto {
\t\t\t\topacity: 1;
\t\t\t\ttransform: translateY(0);
\t\t\t}
\t\t}

\t\t.flash.success {
\t\t\tbackground: var(--success-light);
\t\t\tcolor: #166534;
\t\t\tborder-color: #b2f5d1;
\t\t}
\t\t.flash.danger {
\t\t\tbackground: var(--danger-light);
\t\t\tcolor: #9b1c1c;
\t\t\tborder-color: #fdb9b9;
\t\t}
\t\t.flash svg {
\t\t\tflex-shrink: 0;
\t\t\twidth: 18px;
\t\t\theight: 18px;
\t\t}

\t\t.cards {
\t\t\tdisplay: grid;
\t\t\tgrid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
\t\t\tgap: 18px;
\t\t\tmargin-bottom: 26px;
\t\t}

\t\t.card {
\t\t\tbackground: var(--surface);
\t\t\tborder-radius: var(--radius-lg);
\t\t\tpadding: 22px;
\t\t\tbox-shadow: var(--shadow-card);
\t\t\tborder: 1px solid var(--border);
\t\t\tdisplay: flex;
\t\t\talign-items: flex-start;
\t\t\tgap: 16px;
\t\t\ttransition: transform var(--transition), box-shadow var(--transition);
\t\t\tposition: relative;
\t\t\toverflow: hidden;
\t\t}

\t\t.card::after {
\t\t\tcontent: '';
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\twidth: 80px;
\t\t\theight: 80px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: var(--card-accent, var(--brand-light));
\t\t\ttransform: translate(25px, -25px);
\t\t\topacity: .5;
\t\t}

\t\t.card:hover {
\t\t\ttransform: translateY(-3px);
\t\t\tbox-shadow: var(--shadow-hover);
\t\t}

\t\t.card-icon {
\t\t\twidth: 46px;
\t\t\theight: 46px;
\t\t\tborder-radius: 14px;
\t\t\tbackground: var(--card-accent, var(--brand-light));
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tflex-shrink: 0;
\t\t}

\t\t.card-icon svg {
\t\t\twidth: 22px;
\t\t\theight: 22px;
\t\t}
\t\t.card-body {
\t\t\tflex: 1;
\t\t}
\t\t.card-label {
\t\t\tfont-size: 12.5px;
\t\t\tcolor: var(--text-muted);
\t\t\tfont-weight: 700;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.6px;
\t\t\tmargin-bottom: 4px;
\t\t}
\t\t.card-value {
\t\t\tfont-size: 32px;
\t\t\tfont-weight: 800;
\t\t\tcolor: var(--text-primary);
\t\t\tletter-spacing: -1px;
\t\t\tline-height: 1;
\t\t}

\t\t.card.c-blue {
\t\t\t--card-accent: #e6f6ff;
\t\t}
\t\t.card.c-blue .card-icon svg {
\t\t\tcolor: var(--info);
\t\t}

\t\t.section {
\t\t\tbackground: var(--surface);
\t\t\tborder-radius: var(--radius-lg);
\t\t\tborder: 1px solid var(--border);
\t\t\tbox-shadow: var(--shadow-card);
\t\t\tmargin-bottom: 26px;
\t\t\toverflow: hidden;
\t\t}

\t\t.section-header {
\t\t\tpadding: 22px 26px 18px;
\t\t\tborder-bottom: 1px solid var(--border);
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between;
\t\t}

\t\t.section-title {
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 800;
\t\t\tcolor: var(--text-primary);
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 9px;
\t\t}

\t\t.section-title svg {
\t\t\twidth: 18px;
\t\t\theight: 18px;
\t\t\tcolor: var(--brand);
\t\t}

\t\t.search-wrap {
\t\t\tposition: relative;
\t\t\tmax-width: 280px;
\t\t}

\t\t.search-wrap svg {
\t\t\tposition: absolute;
\t\t\tleft: 12px;
\t\t\ttop: 50%;
\t\t\ttransform: translateY(-50%);
\t\t\twidth: 16px;
\t\t\theight: 16px;
\t\t\tcolor: var(--text-muted);
\t\t\tpointer-events: none;
\t\t}

\t\t#searchInput {
\t\t\twidth: 100%;
\t\t\tpadding: 9px 14px 9px 36px;
\t\t\tborder: 1.5px solid var(--border);
\t\t\tborder-radius: var(--radius-sm);
\t\t\tfont-family: inherit;
\t\t\tfont-size: 13.5px;
\t\t\tfont-weight: 500;
\t\t\tcolor: var(--text-primary);
\t\t\tbackground: #fafff9;
\t\t\toutline: none;
\t\t\ttransition: border-color var(--transition), box-shadow var(--transition);
\t\t}

\t\t#searchInput:focus {
\t\t\tborder-color: var(--brand);
\t\t\tbox-shadow: 0 0 0 3px rgba(22, 163, 74, .13);
\t\t}

\t\t#searchInput::placeholder {
\t\t\tcolor: var(--text-muted);
\t\t\tfont-weight: 400;
\t\t}

\t\t.table-wrapper {
\t\t\toverflow-x: auto;
\t\t}

\t\ttable {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t}

\t\tthead tr {
\t\t\tbackground: #f4faf6;
\t\t\tborder-bottom: 2px solid var(--border);
\t\t}

\t\tth {
\t\t\ttext-align: left;
\t\t\tpadding: 13px 16px;
\t\t\tfont-size: 12px;
\t\t\tfont-weight: 700;
\t\t\tcolor: var(--text-muted);
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.7px;
\t\t\twhite-space: nowrap;
\t\t}

\t\ttd {
\t\t\tpadding: 14px 16px;
\t\t\tborder-bottom: 1px solid var(--border);
\t\t\tvertical-align: middle;
\t\t\tcolor: var(--text-primary);
\t\t}

\t\ttbody tr {
\t\t\ttransition: background var(--transition);
\t\t}
\t\ttbody tr:hover {
\t\t\tbackground: #f9fdf9;
\t\t}
\t\ttbody tr:last-child td {
\t\t\tborder-bottom: none;
\t\t}

\t\t.badge {
\t\t\tdisplay: inline-flex;
\t\t\talign-items: center;
\t\t\tgap: 5px;
\t\t\tpadding: 5px 11px;
\t\t\tborder-radius: 999px;
\t\t\tfont-size: 12px;
\t\t\tfont-weight: 700;
\t\t\tletter-spacing: 0.3px;
\t\t}

\t\t.badge.type {
\t\t\tbackground: var(--brand-light);
\t\t\tcolor: var(--brand-dark);
\t\t}
\t\t.badge.priority {
\t\t\tbackground: var(--info-light);
\t\t\tcolor: var(--info);
\t\t}
\t\t.badge.status {
\t\t\tbackground: var(--warning-light);
\t\t\tcolor: var(--warning);
\t\t}

\t\t.sla-text {
\t\t\tfont-weight: 800;
\t\t\tfont-size: 13.5px;
\t\t}

\t\t.btn {
\t\t\tdisplay: inline-flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tgap: 7px;
\t\t\tborder: none;
\t\t\tborder-radius: var(--radius-sm);
\t\t\tpadding: 8px 14px;
\t\t\tcursor: pointer;
\t\t\tfont-family: inherit;
\t\t\tfont-size: 13px;
\t\t\tfont-weight: 700;
\t\t\ttext-decoration: none;
\t\t\ttransition: filter var(--transition), transform var(--transition);
\t\t\twhite-space: nowrap;
\t\t}

\t\t.btn:hover {
\t\t\tfilter: brightness(1.08);
\t\t\ttransform: translateY(-1px);
\t\t}
\t\t.btn-danger { background: var(--danger); color: #fff; box-shadow: 0 4px 12px rgba(239, 68, 68, .25); }
\t\t.btn-primary { background: var(--brand); color: #fff; box-shadow: 0 4px 12px rgba(22, 163, 74, .28); }
\t\t
\t\t.empty-state { text-align: center; padding: 48px 20px; color: var(--text-muted); }
\t\t.empty-state svg { width: 48px; height: 48px; margin-bottom: 14px; opacity: .4; }
\t\t
\t\t.user-chip { display: flex; align-items: center; gap: 9px; }
\t\t.user-avatar-sm { width: 30px; height: 30px; border-radius: 50%; background: var(--brand-light); color: var(--brand-dark); font-weight: 800; font-size: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
\t</style>
</head>
<body>
\t<div class=\"layout\">
\t\t<aside class=\"sidebar\">
\t\t\t<div class=\"brand\">
\t\t\t\t<div class=\"brand-icon\"><img src=\"";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Fin-Dinari Logo\"></div>
\t\t\t\t<span class=\"brand-name\">Fin-Dinari</span>
\t\t\t</div>
\t\t\t<div class=\"nav-section\">Main</div>
\t\t\t<a class=\"side-link\" href=\"";
        // line 506
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
\t\t\t\tDashboard
\t\t\t</a>
\t\t\t<a class=\"side-link active\" href=\"";
        // line 510
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_tickets");
        yield "\">
\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"></path></svg>
\t\t\t\tTickets & Messages
\t\t\t</a>
            <a class=\"side-link\" href=\"";
        // line 514
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ticket_calendar");
        yield "\">
\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/></svg>
\t\t\t\tTicket Calendar
\t\t\t</a>
\t\t\t<a class=\"side-link\" href=\"";
        // line 518
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ticket_stats");
        yield "\">
\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"/><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"/><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"/></svg>
\t\t\t\tTicket Statistics
\t\t\t</a>
\t\t\t<div class=\"sidebar-footer\">
\t\t\t\t<a class=\"side-link\" href=\"";
        // line 523
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Back to site</a>
\t\t\t\t<a class=\"side-link\" href=\"";
        // line 524
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
\t\t\t</div>
\t\t</aside>

\t\t<main class=\"content\">
\t\t\t<div class=\"topbar\">
\t\t\t\t<div class=\"topbar-title\">Ticket <span>Management</span></div>
\t\t\t\t<div class=\"topbar-right\">
\t\t\t\t\t<div class=\"welcome-text\">Welcome back, <strong>";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 532, $this->source); })()), "user", [], "any", false, false, false, 532), "prenom", [], "any", false, false, false, 532), "html", null, true);
        yield "</strong></div>
\t\t\t\t\t<div class=\"avatar\">";
        // line 533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 533, $this->source); })()), "user", [], "any", false, false, false, 533), "prenom", [], "any", false, false, false, 533))), "html", null, true);
        yield "</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"cards\">
\t\t\t\t<div class=\"card c-blue\">
\t\t\t\t\t<div class=\"card-icon\"><svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"></path></svg></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"card-label\">Total Tickets</div>
\t\t\t\t\t\t<div class=\"card-value\">";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 542, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 542), "html", null, true);
        yield "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<div class=\"section-title\">All Tickets</div>
\t\t\t\t\t<div class=\"search-wrap\">
\t\t\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tickets…\" oninput=\"filterTable(this.value)\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-wrapper\">
\t\t\t\t\t<table id=\"ticketsTable\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>User</th>
\t\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t\t<th>Category</th>
\t\t\t\t\t\t\t\t<th>Status/Priority</th>
\t\t\t\t\t\t\t\t<th>SLA</th>
\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 567
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 567, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 568
            yield "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"user-chip\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-avatar-sm\">";
            // line 571
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "utilisateur", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "utilisateur", [], "any", false, false, false, 571), "prenom", [], "any", false, false, false, 571))), "html", null, true)) : ("?"));
            yield "</div>
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight:600;\">";
            // line 572
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "utilisateur", [], "any", false, false, false, 572)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "utilisateur", [], "any", false, false, false, 572), "gmail", [], "any", false, false, false, 572), "html", null, true)) : ("Guest"));
            yield "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div style=\"font-weight:600;\">";
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 576), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><span class=\"badge type\">";
            // line 578
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "type", [], "any", false, false, false, 578), "html", null, true);
            yield "</span></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div style=\"display:flex;gap:6px;flex-direction:column;align-items:start;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge status\">";
            // line 581
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 581), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge priority\">";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 582), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 586
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "deadline", [], "any", false, false, false, 586)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 587
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                $context["isClosed"] = (CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 587) == Twig\Extension\CoreExtension::constant("App\\Entity\\reclamation\\Ticket::STATUS_CLOSED"));
                // line 588
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                if ((($tmp = (isset($context["isClosed"]) || array_key_exists("isClosed", $context) ? $context["isClosed"] : (function () { throw new RuntimeError('Variable "isClosed" does not exist.', 588, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 589
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sla-text\" style=\"color: #16a34a;\">Closed</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 590
$context["ticket"], "isBreached", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 591
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sla-text\" style=\"color: #dc2626;\">BREACHED</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 593
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sla-timer sla-text\" data-deadline=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "deadline", [], "any", false, false, false, 593), "c"), "html", null, true);
                    yield "\">Loading...</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 595
                yield "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 596
                yield "\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:var(--text-muted);font-style:italic;\">No SLA</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 598
            yield "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div style=\"display:flex; gap:8px;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ticket_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 601)]), "html", null, true);
            yield "\" class=\"btn btn-primary\" style=\"padding: 6px 12px; font-size: 12px;\">Details</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ticket_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 603)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this ticket?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_ticket_admin_" . CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 604))), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\" style=\"padding: 6px 12px; font-size: 12px;\">Delete</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 611
        yield "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
                <div style=\"padding: 20px; display: flex; justify-content: center;\">
                    ";
        // line 615
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 615, $this->source); })()), "reclamation/pagination.html.twig");
        yield "
                </div>
\t\t\t</div>
\t\t</main>
\t</div>

\t<script>
\t\tfunction filterTable(query) {
\t\t\tconst rows = document.querySelectorAll('#ticketsTable tbody tr');
\t\t\tconst q = query.toLowerCase().trim();
\t\t\trows.forEach(row => {
\t\t\t\tconst text = row.textContent.toLowerCase();
\t\t\t\trow.style.display = (!q || text.includes(q)) ? '' : 'none';
\t\t\t});
\t\t}

\t\tdocument.addEventListener('DOMContentLoaded', function () {
            const timers = document.querySelectorAll('.sla-timer');
            const serverNow = new Date('";
        // line 633
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "c"), "html", null, true);
        yield "');
            const timeOffset = serverNow.getTime() - new Date().getTime();

            function formatDuration(totalSeconds) {
                const absSeconds = Math.abs(totalSeconds);
                const h = Math.floor(absSeconds / 3600);
                const m = Math.floor((absSeconds % 3600) / 60);
                const s = absSeconds % 60;
                return (totalSeconds < 0 ? '- ' : '') + String(h).padStart(2, '0') + 'h ' + String(m).padStart(2, '0') + 'm ' + String(s).padStart(2, '0') + 's';
            }

            function updateTimer(element) {
                const deadline = new Date(element.dataset.deadline);
                const now = new Date(Date.now() + timeOffset);
                const diff = deadline.getTime() - now.getTime();
                const totalSeconds = Math.floor(diff / 1000);

                if (totalSeconds <= 0) {
                    element.textContent = \"BREACHED\";
                    element.style.color = '#dc2626';
                } else {
                    element.textContent = formatDuration(totalSeconds);
                    if (totalSeconds <= 3600) element.style.color = '#dc2626';
                    else if (totalSeconds <= 4 * 3600) element.style.color = '#d97706';
                    else if (totalSeconds <= 24 * 3600) element.style.color = '#0284c7';
                    else element.style.color = '#16a34a';
                }
            }

            timers.forEach(t => {
                updateTimer(t);
                setInterval(() => updateTimer(t), 1000);
            });
        });
\t</script>
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
        return "admin/tickets.html.twig";
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
        return array (  772 => 633,  751 => 615,  745 => 611,  732 => 604,  728 => 603,  723 => 601,  718 => 598,  714 => 596,  711 => 595,  705 => 593,  701 => 591,  699 => 590,  696 => 589,  693 => 588,  690 => 587,  688 => 586,  681 => 582,  677 => 581,  671 => 578,  666 => 576,  659 => 572,  655 => 571,  650 => 568,  646 => 567,  618 => 542,  606 => 533,  602 => 532,  591 => 524,  587 => 523,  579 => 518,  572 => 514,  565 => 510,  558 => 506,  551 => 502,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Manage Tickets — Fin-Dinari</title>
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
\t\t<style>:root
\t\t{
\t\t\t--brand: #16a34a;
\t\t\t--brand-light: #dcfce7;
\t\t\t--brand-dark: #15803d;
\t\t\t--danger: #ef4444;
\t\t\t--danger-light: #fef2f2;
\t\t\t--success: #22c55e;
\t\t\t--success-light: #dcfce7;
\t\t\t--warning: #f59e0b;
\t\t\t--warning-light: #fff8e6;
\t\t\t--info: #0ea5e9;
\t\t\t--info-light: #e6f6ff;
\t\t\t--bg: #f4f7f4;
\t\t\t--surface: #ffffff;
\t\t\t--border: #e4ebe4;
\t\t\t--text-primary: #1a2e1a;
\t\t\t--text-secondary: #4b6b4b;
\t\t\t--text-muted: #8faa8f;
\t\t\t--sidebar-width: 270px;
\t\t\t--radius-sm: 8px;
\t\t\t--radius-md: 14px;
\t\t\t--radius-lg: 20px;
\t\t\t--shadow-card: 0 2px 16px rgba(22, 163, 74, .07);
\t\t\t--shadow-hover: 0 8px 28px rgba(22, 163, 74, .20);
\t\t\t--transition: 0.22s cubic-bezier(0.4,0,0.2,1);
\t\t}

\t\t*,
\t\t*::before,
\t\t*::after {
\t\t\tbox-sizing: border-box;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}

\t\tbody {
\t\t\tfont-family: 'Plus Jakarta Sans', sans-serif;
\t\t\tbackground: var(--bg);
\t\t\tcolor: var(--text-primary);
\t\t\tfont-size: 14.5px;
\t\t\tline-height: 1.6;
\t\t}

\t\t.layout {
\t\t\tdisplay: flex;
\t\t\tmin-height: 100vh;
\t\t}

\t\t.sidebar {
\t\t\twidth: var(--sidebar-width);
\t\t\tbackground: var(--surface);
\t\t\tborder-right: 1px solid var(--border);
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\tbottom: 0;
\t\t\tz-index: 100;
\t\t\tpadding: 28px 18px 24px;
\t\t\toverflow-y: auto;
\t\t}

\t\t.brand {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 10px;
\t\t\tpadding: 4px 10px 28px;
\t\t\tborder-bottom: 1px solid var(--border);
\t\t\tmargin-bottom: 18px;
\t\t}

\t\t.brand-icon {
\t\t\twidth: 40px;
\t\t\theight: 40px;
\t\t}

\t\t.brand-icon img {
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tobject-fit: contain;
\t\t}

\t\t.brand-name {
\t\t\tfont-size: 22px;
\t\t\tfont-weight: 800;
\t\t\tcolor: var(--brand);
\t\t\tletter-spacing: -0.5px;
\t\t}

\t\t.nav-section {
\t\t\tfont-size: 11px;
\t\t\tfont-weight: 700;
\t\t\tletter-spacing: 0.9px;
\t\t\ttext-transform: uppercase;
\t\t\tcolor: var(--text-muted);
\t\t\tpadding: 8px 12px 6px;
\t\t\tmargin-top: 4px;
\t\t}

\t\t.side-link {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 11px;
\t\t\ttext-decoration: none;
\t\t\tcolor: var(--text-secondary);
\t\t\tpadding: 11px 14px;
\t\t\tborder-radius: var(--radius-md);
\t\t\tmargin-bottom: 4px;
\t\t\tfont-weight: 600;
\t\t\tfont-size: 14px;
\t\t\ttransition: background var(--transition), color var(--transition), transform var(--transition);
\t\t}

\t\t.side-link:hover {
\t\t\tbackground: var(--brand-light);
\t\t\tcolor: var(--brand);
\t\t\ttransform: translateX(2px);
\t\t}

\t\t.side-link.active {
\t\t\tbackground: var(--brand-light);
\t\t\tcolor: var(--brand-dark);
\t\t\tbox-shadow: inset 3px 0 0 var(--brand);
\t\t}

\t\t.side-link svg {
\t\t\twidth: 18px;
\t\t\theight: 18px;
\t\t\tflex-shrink: 0;
\t\t}

\t\t.sidebar-footer {
\t\t\tmargin-top: auto;
\t\t\tpadding-top: 18px;
\t\t\tborder-top: 1px solid var(--border);
\t\t}

\t\t.content {
\t\t\tmargin-left: var(--sidebar-width);
\t\t\tflex: 1;
\t\t\tpadding: 28px;
\t\t\tmin-width: 0;
\t\t}

\t\t.topbar {
\t\t\tbackground: var(--surface);
\t\t\tborder-radius: var(--radius-lg);
\t\t\tpadding: 16px 24px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\tmargin-bottom: 26px;
\t\t\tbox-shadow: var(--shadow-card);
\t\t\tborder: 1px solid var(--border);
\t\t}

\t\t.topbar-title {
\t\t\tfont-size: 22px;
\t\t\tfont-weight: 800;
\t\t\tletter-spacing: -0.4px;
\t\t}
\t\t.topbar-title span {
\t\t\tcolor: var(--brand);
\t\t}
\t\t.topbar-right {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 14px;
\t\t}

\t\t.avatar {
\t\t\twidth: 38px;
\t\t\theight: 38px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: var(--brand-light);
\t\t\tcolor: var(--brand-dark);
\t\t\tfont-weight: 800;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tfont-size: 15px;
\t\t\tborder: 2px solid var(--brand);
\t\t}

\t\t.welcome-text {
\t\t\tfont-size: 13.5px;
\t\t\tcolor: var(--text-secondary);
\t\t\tfont-weight: 600;
\t\t}
\t\t.welcome-text strong {
\t\t\tcolor: var(--text-primary);
\t\t}

\t\t.flash {
\t\t\tpadding: 14px 18px;
\t\t\tborder-radius: var(--radius-md);
\t\t\tmargin-bottom: 20px;
\t\t\tfont-weight: 600;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 10px;
\t\t\tfont-size: 14px;
\t\t\tborder: 1px solid transparent;
\t\t\tanimation: fadeSlideDown 0.3s ease;
\t\t}

\t\t@keyframes fadeSlideDown {
\t\t\tfrom {
\t\t\t\topacity: 0;
\t\t\t\ttransform: translateY(-8px);
\t\t\t}
\t\t\tto {
\t\t\t\topacity: 1;
\t\t\t\ttransform: translateY(0);
\t\t\t}
\t\t}

\t\t.flash.success {
\t\t\tbackground: var(--success-light);
\t\t\tcolor: #166534;
\t\t\tborder-color: #b2f5d1;
\t\t}
\t\t.flash.danger {
\t\t\tbackground: var(--danger-light);
\t\t\tcolor: #9b1c1c;
\t\t\tborder-color: #fdb9b9;
\t\t}
\t\t.flash svg {
\t\t\tflex-shrink: 0;
\t\t\twidth: 18px;
\t\t\theight: 18px;
\t\t}

\t\t.cards {
\t\t\tdisplay: grid;
\t\t\tgrid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
\t\t\tgap: 18px;
\t\t\tmargin-bottom: 26px;
\t\t}

\t\t.card {
\t\t\tbackground: var(--surface);
\t\t\tborder-radius: var(--radius-lg);
\t\t\tpadding: 22px;
\t\t\tbox-shadow: var(--shadow-card);
\t\t\tborder: 1px solid var(--border);
\t\t\tdisplay: flex;
\t\t\talign-items: flex-start;
\t\t\tgap: 16px;
\t\t\ttransition: transform var(--transition), box-shadow var(--transition);
\t\t\tposition: relative;
\t\t\toverflow: hidden;
\t\t}

\t\t.card::after {
\t\t\tcontent: '';
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\twidth: 80px;
\t\t\theight: 80px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: var(--card-accent, var(--brand-light));
\t\t\ttransform: translate(25px, -25px);
\t\t\topacity: .5;
\t\t}

\t\t.card:hover {
\t\t\ttransform: translateY(-3px);
\t\t\tbox-shadow: var(--shadow-hover);
\t\t}

\t\t.card-icon {
\t\t\twidth: 46px;
\t\t\theight: 46px;
\t\t\tborder-radius: 14px;
\t\t\tbackground: var(--card-accent, var(--brand-light));
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tflex-shrink: 0;
\t\t}

\t\t.card-icon svg {
\t\t\twidth: 22px;
\t\t\theight: 22px;
\t\t}
\t\t.card-body {
\t\t\tflex: 1;
\t\t}
\t\t.card-label {
\t\t\tfont-size: 12.5px;
\t\t\tcolor: var(--text-muted);
\t\t\tfont-weight: 700;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.6px;
\t\t\tmargin-bottom: 4px;
\t\t}
\t\t.card-value {
\t\t\tfont-size: 32px;
\t\t\tfont-weight: 800;
\t\t\tcolor: var(--text-primary);
\t\t\tletter-spacing: -1px;
\t\t\tline-height: 1;
\t\t}

\t\t.card.c-blue {
\t\t\t--card-accent: #e6f6ff;
\t\t}
\t\t.card.c-blue .card-icon svg {
\t\t\tcolor: var(--info);
\t\t}

\t\t.section {
\t\t\tbackground: var(--surface);
\t\t\tborder-radius: var(--radius-lg);
\t\t\tborder: 1px solid var(--border);
\t\t\tbox-shadow: var(--shadow-card);
\t\t\tmargin-bottom: 26px;
\t\t\toverflow: hidden;
\t\t}

\t\t.section-header {
\t\t\tpadding: 22px 26px 18px;
\t\t\tborder-bottom: 1px solid var(--border);
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between;
\t\t}

\t\t.section-title {
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 800;
\t\t\tcolor: var(--text-primary);
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 9px;
\t\t}

\t\t.section-title svg {
\t\t\twidth: 18px;
\t\t\theight: 18px;
\t\t\tcolor: var(--brand);
\t\t}

\t\t.search-wrap {
\t\t\tposition: relative;
\t\t\tmax-width: 280px;
\t\t}

\t\t.search-wrap svg {
\t\t\tposition: absolute;
\t\t\tleft: 12px;
\t\t\ttop: 50%;
\t\t\ttransform: translateY(-50%);
\t\t\twidth: 16px;
\t\t\theight: 16px;
\t\t\tcolor: var(--text-muted);
\t\t\tpointer-events: none;
\t\t}

\t\t#searchInput {
\t\t\twidth: 100%;
\t\t\tpadding: 9px 14px 9px 36px;
\t\t\tborder: 1.5px solid var(--border);
\t\t\tborder-radius: var(--radius-sm);
\t\t\tfont-family: inherit;
\t\t\tfont-size: 13.5px;
\t\t\tfont-weight: 500;
\t\t\tcolor: var(--text-primary);
\t\t\tbackground: #fafff9;
\t\t\toutline: none;
\t\t\ttransition: border-color var(--transition), box-shadow var(--transition);
\t\t}

\t\t#searchInput:focus {
\t\t\tborder-color: var(--brand);
\t\t\tbox-shadow: 0 0 0 3px rgba(22, 163, 74, .13);
\t\t}

\t\t#searchInput::placeholder {
\t\t\tcolor: var(--text-muted);
\t\t\tfont-weight: 400;
\t\t}

\t\t.table-wrapper {
\t\t\toverflow-x: auto;
\t\t}

\t\ttable {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t}

\t\tthead tr {
\t\t\tbackground: #f4faf6;
\t\t\tborder-bottom: 2px solid var(--border);
\t\t}

\t\tth {
\t\t\ttext-align: left;
\t\t\tpadding: 13px 16px;
\t\t\tfont-size: 12px;
\t\t\tfont-weight: 700;
\t\t\tcolor: var(--text-muted);
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.7px;
\t\t\twhite-space: nowrap;
\t\t}

\t\ttd {
\t\t\tpadding: 14px 16px;
\t\t\tborder-bottom: 1px solid var(--border);
\t\t\tvertical-align: middle;
\t\t\tcolor: var(--text-primary);
\t\t}

\t\ttbody tr {
\t\t\ttransition: background var(--transition);
\t\t}
\t\ttbody tr:hover {
\t\t\tbackground: #f9fdf9;
\t\t}
\t\ttbody tr:last-child td {
\t\t\tborder-bottom: none;
\t\t}

\t\t.badge {
\t\t\tdisplay: inline-flex;
\t\t\talign-items: center;
\t\t\tgap: 5px;
\t\t\tpadding: 5px 11px;
\t\t\tborder-radius: 999px;
\t\t\tfont-size: 12px;
\t\t\tfont-weight: 700;
\t\t\tletter-spacing: 0.3px;
\t\t}

\t\t.badge.type {
\t\t\tbackground: var(--brand-light);
\t\t\tcolor: var(--brand-dark);
\t\t}
\t\t.badge.priority {
\t\t\tbackground: var(--info-light);
\t\t\tcolor: var(--info);
\t\t}
\t\t.badge.status {
\t\t\tbackground: var(--warning-light);
\t\t\tcolor: var(--warning);
\t\t}

\t\t.sla-text {
\t\t\tfont-weight: 800;
\t\t\tfont-size: 13.5px;
\t\t}

\t\t.btn {
\t\t\tdisplay: inline-flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tgap: 7px;
\t\t\tborder: none;
\t\t\tborder-radius: var(--radius-sm);
\t\t\tpadding: 8px 14px;
\t\t\tcursor: pointer;
\t\t\tfont-family: inherit;
\t\t\tfont-size: 13px;
\t\t\tfont-weight: 700;
\t\t\ttext-decoration: none;
\t\t\ttransition: filter var(--transition), transform var(--transition);
\t\t\twhite-space: nowrap;
\t\t}

\t\t.btn:hover {
\t\t\tfilter: brightness(1.08);
\t\t\ttransform: translateY(-1px);
\t\t}
\t\t.btn-danger { background: var(--danger); color: #fff; box-shadow: 0 4px 12px rgba(239, 68, 68, .25); }
\t\t.btn-primary { background: var(--brand); color: #fff; box-shadow: 0 4px 12px rgba(22, 163, 74, .28); }
\t\t
\t\t.empty-state { text-align: center; padding: 48px 20px; color: var(--text-muted); }
\t\t.empty-state svg { width: 48px; height: 48px; margin-bottom: 14px; opacity: .4; }
\t\t
\t\t.user-chip { display: flex; align-items: center; gap: 9px; }
\t\t.user-avatar-sm { width: 30px; height: 30px; border-radius: 50%; background: var(--brand-light); color: var(--brand-dark); font-weight: 800; font-size: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
\t</style>
</head>
<body>
\t<div class=\"layout\">
\t\t<aside class=\"sidebar\">
\t\t\t<div class=\"brand\">
\t\t\t\t<div class=\"brand-icon\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"Fin-Dinari Logo\"></div>
\t\t\t\t<span class=\"brand-name\">Fin-Dinari</span>
\t\t\t</div>
\t\t\t<div class=\"nav-section\">Main</div>
\t\t\t<a class=\"side-link\" href=\"{{ path('app_admin_dashboard') }}\">
\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
\t\t\t\tDashboard
\t\t\t</a>
\t\t\t<a class=\"side-link active\" href=\"{{ path('app_admin_tickets') }}\">
\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"></path></svg>
\t\t\t\tTickets & Messages
\t\t\t</a>
            <a class=\"side-link\" href=\"{{ path('app_admin_ticket_calendar') }}\">
\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/></svg>
\t\t\t\tTicket Calendar
\t\t\t</a>
\t\t\t<a class=\"side-link\" href=\"{{ path('app_admin_ticket_stats') }}\">
\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"/><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"/><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"/></svg>
\t\t\t\tTicket Statistics
\t\t\t</a>
\t\t\t<div class=\"sidebar-footer\">
\t\t\t\t<a class=\"side-link\" href=\"{{ path('app_home') }}\">Back to site</a>
\t\t\t\t<a class=\"side-link\" href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t</div>
\t\t</aside>

\t\t<main class=\"content\">
\t\t\t<div class=\"topbar\">
\t\t\t\t<div class=\"topbar-title\">Ticket <span>Management</span></div>
\t\t\t\t<div class=\"topbar-right\">
\t\t\t\t\t<div class=\"welcome-text\">Welcome back, <strong>{{ app.user.prenom }}</strong></div>
\t\t\t\t\t<div class=\"avatar\">{{ app.user.prenom|first|upper }}</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"cards\">
\t\t\t\t<div class=\"card c-blue\">
\t\t\t\t\t<div class=\"card-icon\"><svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"></path></svg></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"card-label\">Total Tickets</div>
\t\t\t\t\t\t<div class=\"card-value\">{{ tickets.getTotalItemCount }}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<div class=\"section-title\">All Tickets</div>
\t\t\t\t\t<div class=\"search-wrap\">
\t\t\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tickets…\" oninput=\"filterTable(this.value)\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-wrapper\">
\t\t\t\t\t<table id=\"ticketsTable\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>User</th>
\t\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t\t<th>Category</th>
\t\t\t\t\t\t\t\t<th>Status/Priority</th>
\t\t\t\t\t\t\t\t<th>SLA</th>
\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for ticket in tickets %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"user-chip\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-avatar-sm\">{{ ticket.utilisateur ? ticket.utilisateur.prenom|first|upper : '?' }}</div>
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight:600;\">{{ ticket.utilisateur ? ticket.utilisateur.gmail : 'Guest' }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div style=\"font-weight:600;\">{{ ticket.titre }}</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><span class=\"badge type\">{{ ticket.type }}</span></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div style=\"display:flex;gap:6px;flex-direction:column;align-items:start;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge status\">{{ ticket.statut }}</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge priority\">{{ ticket.priorite }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if ticket.deadline %}
\t\t\t\t\t\t\t\t\t\t\t{% set isClosed = ticket.statut == constant('App\\\\Entity\\\\reclamation\\\\Ticket::STATUS_CLOSED') %}
\t\t\t\t\t\t\t\t\t\t\t{% if isClosed %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sla-text\" style=\"color: #16a34a;\">Closed</span>
\t\t\t\t\t\t\t\t\t\t\t{% elseif ticket.isBreached %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sla-text\" style=\"color: #dc2626;\">BREACHED</span>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sla-timer sla-text\" data-deadline=\"{{ ticket.deadline|date('c') }}\">Loading...</span>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:var(--text-muted);font-style:italic;\">No SLA</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div style=\"display:flex; gap:8px;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_ticket_details', {id: ticket.id}) }}\" class=\"btn btn-primary\" style=\"padding: 6px 12px; font-size: 12px;\">Details</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_admin_ticket_delete', {id: ticket.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this ticket?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_ticket_admin_' ~ ticket.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\" style=\"padding: 6px 12px; font-size: 12px;\">Delete</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
                <div style=\"padding: 20px; display: flex; justify-content: center;\">
                    {{ knp_pagination_render(tickets, 'reclamation/pagination.html.twig') }}
                </div>
\t\t\t</div>
\t\t</main>
\t</div>

\t<script>
\t\tfunction filterTable(query) {
\t\t\tconst rows = document.querySelectorAll('#ticketsTable tbody tr');
\t\t\tconst q = query.toLowerCase().trim();
\t\t\trows.forEach(row => {
\t\t\t\tconst text = row.textContent.toLowerCase();
\t\t\t\trow.style.display = (!q || text.includes(q)) ? '' : 'none';
\t\t\t});
\t\t}

\t\tdocument.addEventListener('DOMContentLoaded', function () {
            const timers = document.querySelectorAll('.sla-timer');
            const serverNow = new Date('{{ \"now\"|date(\"c\") }}');
            const timeOffset = serverNow.getTime() - new Date().getTime();

            function formatDuration(totalSeconds) {
                const absSeconds = Math.abs(totalSeconds);
                const h = Math.floor(absSeconds / 3600);
                const m = Math.floor((absSeconds % 3600) / 60);
                const s = absSeconds % 60;
                return (totalSeconds < 0 ? '- ' : '') + String(h).padStart(2, '0') + 'h ' + String(m).padStart(2, '0') + 'm ' + String(s).padStart(2, '0') + 's';
            }

            function updateTimer(element) {
                const deadline = new Date(element.dataset.deadline);
                const now = new Date(Date.now() + timeOffset);
                const diff = deadline.getTime() - now.getTime();
                const totalSeconds = Math.floor(diff / 1000);

                if (totalSeconds <= 0) {
                    element.textContent = \"BREACHED\";
                    element.style.color = '#dc2626';
                } else {
                    element.textContent = formatDuration(totalSeconds);
                    if (totalSeconds <= 3600) element.style.color = '#dc2626';
                    else if (totalSeconds <= 4 * 3600) element.style.color = '#d97706';
                    else if (totalSeconds <= 24 * 3600) element.style.color = '#0284c7';
                    else element.style.color = '#16a34a';
                }
            }

            timers.forEach(t => {
                updateTimer(t);
                setInterval(() => updateTimer(t), 1000);
            });
        });
\t</script>
</body>
</html>
", "admin/tickets.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\admin\\tickets.html.twig");
    }
}
