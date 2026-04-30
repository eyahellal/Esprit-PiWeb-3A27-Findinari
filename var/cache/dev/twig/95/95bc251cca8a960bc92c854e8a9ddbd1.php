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

/* management/dashboard.html.twig */
class __TwigTemplate_44d1d9253ba19cb0c3039da2565264d5 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/dashboard.html.twig"));

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

        yield "Budget Management - Fin-Dinari";
        
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
<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Budget Management</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        ";
        // line 21
        yield "        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"d-flex gap-2 border-bottom pb-3 align-items-center\">
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\"
                       class=\"btn ";
        // line 25
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 25, $this->source); })()) == "wallet")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-wallet me-1\"></i>Wallets
                    </a>
                    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"btn ";
        // line 31
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 31, $this->source); })()) == "categorie")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-folder me-1\"></i>Categories
                    </a>
                    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index");
        yield "\"
                       class=\"btn ";
        // line 37
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 37, $this->source); })()) == "budget")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-chart-pie me-1\"></i>Budgets
                    </a>
                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index");
        yield "\"
                       class=\"btn ";
        // line 43
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 43, $this->source); })()) == "transaction")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-exchange-alt me-1\"></i>Transactions
                    </a>
                    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stats_index");
        yield "\"
                       class=\"btn ";
        // line 49
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 49, $this->source); })()) == "stats")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-chart-bar me-1\"></i>Statistics
                    </a>
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_weather_index");
        yield "\"
   class=\"btn ";
        // line 55
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 55, $this->source); })()) == "weather")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
   data-turbo-frame=\"content-frame\"
   style=\"border-radius: 10px;\">
    <i class=\"fas fa-cloud-sun me-1\"></i>Weather
</a>
<a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_holiday_index");
        yield "\"
   class=\"btn ";
        // line 61
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 61, $this->source); })()) == "holiday")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\"
   data-turbo-frame=\"content-frame\"
   style=\"border-radius: 10px;\">
    <i class=\"fas fa-calendar-check me-1\"></i>Holidays
</a>
                    ";
        // line 67
        yield "                    <div class=\"ms-auto position-relative\">
                        <button class=\"btn position-relative\" id=\"notifBell\"
                                onclick=\"toggleNotifications()\"
                                style=\"background: none; border: none; font-size: 1.3rem; color: #26474E;\">
                            <i class=\"fas fa-bell\"></i>
                            <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill\"
                                  id=\"notifCount\"
                                  style=\"background: #c0392b; display: none; font-size: 0.6rem;\">
                                0
                            </span>
                        </button>

                        ";
        // line 80
        yield "                        <div id=\"notifDropdown\" class=\"position-absolute end-0 mt-2 rounded-4\"
                             style=\"display: none; width: 360px; background: white; box-shadow: 0 8px 30px rgba(0,0,0,0.15); z-index: 1000; max-height: 400px; overflow-y: auto;\">

                            <div class=\"p-3 d-flex justify-content-between align-items-center\"
                                 style=\"border-bottom: 1px solid #f0f0f0;\">
                                <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas fa-bell me-1\" style=\"color: #F27438;\"></i>Notifications
                                </h6>
                                <button class=\"btn btn-sm\" onclick=\"clearNotifications()\"
                                        style=\"color: #999; font-size: 0.75rem;\">
                                    Clear all
                                </button>
                            </div>

                            <div id=\"notifList\">
                                <div class=\"p-4 text-center text-muted small\" id=\"notifEmpty\">
                                    <i class=\"fas fa-check-circle fa-2x mb-2\" style=\"color: #2d6a4f;\"></i>
                                    <p class=\"mb-0\">No new notifications</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 107
        yield "        <turbo-frame id=\"content-frame\" target=\"_top\">
            ";
        // line 108
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 109
        yield "        </turbo-frame>

    </div>
</section>

";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", ["budget_alert"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 116
            yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            addNotification('budget', ";
            // line 118
            yield $context["message"];
            yield ");
        });
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "
<style>
    #notifBell:hover {
        color: #F27438 !important;
    }
    .notif-item {
        transition: all 0.2s;
        cursor: pointer;
    }
    .notif-item:hover {
        background: #fff8f5 !important;
    }
    .notif-item.unread {
        border-left: 3px solid #F27438;
    }
</style>

<script>
// Notification system
let notifications = JSON.parse(localStorage.getItem('findinari_notifications') || '[]');

function renderNotifications() {
    const list = document.getElementById('notifList');
    const count = document.getElementById('notifCount');
    const empty = document.getElementById('notifEmpty');

    const unread = notifications.filter(n => !n.read).length;

    if (unread > 0) {
        count.textContent = unread > 9 ? '9+' : unread;
        count.style.display = 'block';
    } else {
        count.style.display = 'none';
    }

    if (notifications.length === 0) {
        list.innerHTML = '<div class=\"p-4 text-center text-muted small\" id=\"notifEmpty\">' +
            '<i class=\"fas fa-check-circle fa-2x mb-2\" style=\"color: #2d6a4f;\"></i>' +
            '<p class=\"mb-0\">No new notifications</p></div>';
        return;
    }

    let html = '';
    notifications.slice().reverse().forEach((notif, index) => {
        const realIndex = notifications.length - 1 - index;
        const icon = notif.type === 'budget' ? 'fa-exclamation-triangle' : 'fa-info-circle';
        const color = notif.type === 'budget' ? '#c0392b' : '#F27438';
        const bgColor = notif.type === 'budget' ? '#fde8e8' : '#fff3ee';

        html += '<div class=\"notif-item p-3 ' + (notif.read ? '' : 'unread') + '\" ' +
            'style=\"border-bottom: 1px solid #f5f5f5;\" ' +
            'onclick=\"markAsRead(' + realIndex + ')\">' +
            '<div class=\"d-flex gap-3 align-items-start\">' +
            '<div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\" ' +
            'style=\"width:36px; height:36px; background:' + bgColor + ';\">' +
            '<i class=\"fas ' + icon + '\" style=\"color:' + color + ';\"></i></div>' +
            '<div class=\"flex-fill\">' +
            '<p class=\"mb-0 small fw-bold\" style=\"color: #26474E;\">' + notif.title + '</p>' +
            '<p class=\"mb-0 small text-muted\">' + notif.message + '</p>' +
            '<p class=\"mb-0 small text-muted\" style=\"font-size: 0.7rem;\">' + notif.time + '</p>' +
            '</div>' +
            (notif.read ? '' : '<span class=\"rounded-circle\" style=\"width:8px; height:8px; background:#F27438; flex-shrink:0; margin-top:6px;\"></span>') +
            '</div></div>';
    });

    list.innerHTML = html;
}

function addNotification(type, data) {
    const now = new Date();
    const time = now.toLocaleDateString('en-GB') + ' ' + now.toLocaleTimeString('en-GB', {hour: '2-digit', minute: '2-digit'});

    notifications.push({
        type: type,
        title: data.title || 'Notification',
        message: data.message || '',
        time: time,
        read: false,
    });

    // Keep max 20 notifications
    if (notifications.length > 20) {
        notifications = notifications.slice(-20);
    }

    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();

    // Animate bell
    const bell = document.getElementById('notifBell');
    bell.style.color = '#c0392b';
    bell.classList.add('fa-shake');
    setTimeout(() => {
        bell.style.color = '#26474E';
        bell.classList.remove('fa-shake');
    }, 2000);
}

function toggleNotifications() {
    const dropdown = document.getElementById('notifDropdown');
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
}

function markAsRead(index) {
    notifications[index].read = true;
    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();
}

function clearNotifications() {
    notifications = [];
    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    const bell = document.getElementById('notifBell');
    const dropdown = document.getElementById('notifDropdown');
    if (!bell.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.style.display = 'none';
    }
});

// Render on page load
document.addEventListener('DOMContentLoaded', renderNotifications);
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "management/dashboard.html.twig";
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
        return array (  417 => 108,  278 => 122,  268 => 118,  264 => 116,  260 => 115,  253 => 109,  251 => 108,  248 => 107,  220 => 80,  206 => 67,  198 => 61,  194 => 60,  186 => 55,  182 => 54,  174 => 49,  170 => 48,  162 => 43,  158 => 42,  150 => 37,  146 => 36,  138 => 31,  134 => 30,  126 => 25,  122 => 24,  117 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Budget Management - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Budget Management</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        {# Navigation Tabs #}
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"d-flex gap-2 border-bottom pb-3 align-items-center\">
                    <a href=\"{{ path('app_wallet_index') }}\"
                       class=\"btn {{ active_tab == 'wallet' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-wallet me-1\"></i>Wallets
                    </a>
                    <a href=\"{{ path('app_categorie_index') }}\"
                       class=\"btn {{ active_tab == 'categorie' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-folder me-1\"></i>Categories
                    </a>
                    <a href=\"{{ path('app_budget_index') }}\"
                       class=\"btn {{ active_tab == 'budget' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-chart-pie me-1\"></i>Budgets
                    </a>
                    <a href=\"{{ path('app_transaction_index') }}\"
                       class=\"btn {{ active_tab == 'transaction' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-exchange-alt me-1\"></i>Transactions
                    </a>
                    <a href=\"{{ path('app_stats_index') }}\"
                       class=\"btn {{ active_tab == 'stats' ? 'btn-primary' : 'btn-outline-primary' }}\"
                       data-turbo-frame=\"content-frame\"
                       style=\"border-radius: 10px;\">
                        <i class=\"fas fa-chart-bar me-1\"></i>Statistics
                    </a>
                    <a href=\"{{ path('app_weather_index') }}\"
   class=\"btn {{ active_tab == 'weather' ? 'btn-primary' : 'btn-outline-primary' }}\"
   data-turbo-frame=\"content-frame\"
   style=\"border-radius: 10px;\">
    <i class=\"fas fa-cloud-sun me-1\"></i>Weather
</a>
<a href=\"{{ path('app_holiday_index') }}\"
   class=\"btn {{ active_tab == 'holiday' ? 'btn-primary' : 'btn-outline-primary' }}\"
   data-turbo-frame=\"content-frame\"
   style=\"border-radius: 10px;\">
    <i class=\"fas fa-calendar-check me-1\"></i>Holidays
</a>
                    {# Notification Bell #}
                    <div class=\"ms-auto position-relative\">
                        <button class=\"btn position-relative\" id=\"notifBell\"
                                onclick=\"toggleNotifications()\"
                                style=\"background: none; border: none; font-size: 1.3rem; color: #26474E;\">
                            <i class=\"fas fa-bell\"></i>
                            <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill\"
                                  id=\"notifCount\"
                                  style=\"background: #c0392b; display: none; font-size: 0.6rem;\">
                                0
                            </span>
                        </button>

                        {# Notification Dropdown #}
                        <div id=\"notifDropdown\" class=\"position-absolute end-0 mt-2 rounded-4\"
                             style=\"display: none; width: 360px; background: white; box-shadow: 0 8px 30px rgba(0,0,0,0.15); z-index: 1000; max-height: 400px; overflow-y: auto;\">

                            <div class=\"p-3 d-flex justify-content-between align-items-center\"
                                 style=\"border-bottom: 1px solid #f0f0f0;\">
                                <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas fa-bell me-1\" style=\"color: #F27438;\"></i>Notifications
                                </h6>
                                <button class=\"btn btn-sm\" onclick=\"clearNotifications()\"
                                        style=\"color: #999; font-size: 0.75rem;\">
                                    Clear all
                                </button>
                            </div>

                            <div id=\"notifList\">
                                <div class=\"p-4 text-center text-muted small\" id=\"notifEmpty\">
                                    <i class=\"fas fa-check-circle fa-2x mb-2\" style=\"color: #2d6a4f;\"></i>
                                    <p class=\"mb-0\">No new notifications</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# Content Frame #}
        <turbo-frame id=\"content-frame\" target=\"_top\">
            {% block content %}{% endblock %}
        </turbo-frame>

    </div>
</section>

{# Load notifications from flash messages #}
{% for message in app.flashes('budget_alert') %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            addNotification('budget', {{ message|raw }});
        });
    </script>
{% endfor %}

<style>
    #notifBell:hover {
        color: #F27438 !important;
    }
    .notif-item {
        transition: all 0.2s;
        cursor: pointer;
    }
    .notif-item:hover {
        background: #fff8f5 !important;
    }
    .notif-item.unread {
        border-left: 3px solid #F27438;
    }
</style>

<script>
// Notification system
let notifications = JSON.parse(localStorage.getItem('findinari_notifications') || '[]');

function renderNotifications() {
    const list = document.getElementById('notifList');
    const count = document.getElementById('notifCount');
    const empty = document.getElementById('notifEmpty');

    const unread = notifications.filter(n => !n.read).length;

    if (unread > 0) {
        count.textContent = unread > 9 ? '9+' : unread;
        count.style.display = 'block';
    } else {
        count.style.display = 'none';
    }

    if (notifications.length === 0) {
        list.innerHTML = '<div class=\"p-4 text-center text-muted small\" id=\"notifEmpty\">' +
            '<i class=\"fas fa-check-circle fa-2x mb-2\" style=\"color: #2d6a4f;\"></i>' +
            '<p class=\"mb-0\">No new notifications</p></div>';
        return;
    }

    let html = '';
    notifications.slice().reverse().forEach((notif, index) => {
        const realIndex = notifications.length - 1 - index;
        const icon = notif.type === 'budget' ? 'fa-exclamation-triangle' : 'fa-info-circle';
        const color = notif.type === 'budget' ? '#c0392b' : '#F27438';
        const bgColor = notif.type === 'budget' ? '#fde8e8' : '#fff3ee';

        html += '<div class=\"notif-item p-3 ' + (notif.read ? '' : 'unread') + '\" ' +
            'style=\"border-bottom: 1px solid #f5f5f5;\" ' +
            'onclick=\"markAsRead(' + realIndex + ')\">' +
            '<div class=\"d-flex gap-3 align-items-start\">' +
            '<div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\" ' +
            'style=\"width:36px; height:36px; background:' + bgColor + ';\">' +
            '<i class=\"fas ' + icon + '\" style=\"color:' + color + ';\"></i></div>' +
            '<div class=\"flex-fill\">' +
            '<p class=\"mb-0 small fw-bold\" style=\"color: #26474E;\">' + notif.title + '</p>' +
            '<p class=\"mb-0 small text-muted\">' + notif.message + '</p>' +
            '<p class=\"mb-0 small text-muted\" style=\"font-size: 0.7rem;\">' + notif.time + '</p>' +
            '</div>' +
            (notif.read ? '' : '<span class=\"rounded-circle\" style=\"width:8px; height:8px; background:#F27438; flex-shrink:0; margin-top:6px;\"></span>') +
            '</div></div>';
    });

    list.innerHTML = html;
}

function addNotification(type, data) {
    const now = new Date();
    const time = now.toLocaleDateString('en-GB') + ' ' + now.toLocaleTimeString('en-GB', {hour: '2-digit', minute: '2-digit'});

    notifications.push({
        type: type,
        title: data.title || 'Notification',
        message: data.message || '',
        time: time,
        read: false,
    });

    // Keep max 20 notifications
    if (notifications.length > 20) {
        notifications = notifications.slice(-20);
    }

    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();

    // Animate bell
    const bell = document.getElementById('notifBell');
    bell.style.color = '#c0392b';
    bell.classList.add('fa-shake');
    setTimeout(() => {
        bell.style.color = '#26474E';
        bell.classList.remove('fa-shake');
    }, 2000);
}

function toggleNotifications() {
    const dropdown = document.getElementById('notifDropdown');
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
}

function markAsRead(index) {
    notifications[index].read = true;
    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();
}

function clearNotifications() {
    notifications = [];
    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    const bell = document.getElementById('notifBell');
    const dropdown = document.getElementById('notifDropdown');
    if (!bell.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.style.display = 'none';
    }
});

// Render on page load
document.addEventListener('DOMContentLoaded', renderNotifications);
</script>

{% endblock %}", "management/dashboard.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\dashboard.html.twig");
    }
}
