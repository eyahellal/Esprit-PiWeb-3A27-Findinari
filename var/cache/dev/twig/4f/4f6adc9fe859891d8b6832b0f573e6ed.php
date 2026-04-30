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

/* home/service-details.html.twig */
class __TwigTemplate_dab518aa4eb700e835d20ddf1205ef9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/service-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/service-details.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Fin-Dinari";
        
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
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8 mx-auto text-center\">
\t\t\t\t<h2 class=\"mb-3 text-capitalize\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        yield "</h2>
\t\t\t\t<ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a>
\t\t\t\t\t</li>
<a class=\"btn btn-sm btn-outline-primary\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_details", ["id" => 4]);
        yield "\">View Details <i class=\"las la-arrow-right ms-1\"></i></a>\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"has-shapes\">
\t\t<svg class=\"shape shape-left text-light\" viewBox=\"0 0 192 752\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path d=\"M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t</svg>
\t\t<svg class=\"shape shape-right text-light\" viewBox=\"0 0 731 746\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path d=\"M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M89.8715 745.14C80.6239 711.363 73.8654 674.568 86.8091 642.028C103.766 599.396 150.788 575.515 196.347 570.054C241.906 564.578 287.767 573.629 333.523 577.099C379.278 580.584 428.277 577.567 465.976 551.423C518.279 515.172 535.431 444.525 582.62 401.832C621.964 366.229 681.356 354.493 731.291 372.46\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M128.718 745.14C120.029 713.414 113.678 678.838 125.837 648.274C141.768 608.221 185.939 585.788 228.737 580.659C271.536 575.515 314.621 584.008 357.6 587.282C400.58 590.556 446.607 587.719 482.028 563.16C531.163 529.111 547.275 462.733 591.612 422.635C628.572 389.19 684.375 378.162 731.276 395.043\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M167.564 745.14C159.432 715.451 153.504 683.107 164.863 654.519C179.753 617.046 221.088 596.062 261.126 591.265C301.164 586.452 341.473 594.402 381.677 597.465C421.88 600.527 464.95 597.872 498.094 574.896C544.061 543.035 559.146 480.942 600.617 443.423C635.194 412.135 687.406 401.817 731.276 417.612\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M817.266 289.466C813.108 259.989 787.151 237.697 759.261 227.271C731.372 216.846 701.077 215.553 671.666 210.904C642.254 206.24 611.795 197.156 591.664 175.224C555.853 136.189 566.345 75.5336 560.763 22.8649C552.302 -56.8256 498.487 -130.133 425 -162.081\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M832.584 276.159C828.427 246.683 802.469 224.391 774.58 213.965C746.69 203.539 716.395 202.246 686.984 197.598C657.573 192.934 627.114 183.85 606.982 161.918C571.172 122.883 581.663 62.2275 576.082 9.55873C567.62 -70.1318 513.806 -143.439 440.318 -175.387\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M847.904 262.853C843.747 233.376 817.789 211.084 789.9 200.659C762.011 190.233 731.716 188.94 702.304 184.292C672.893 179.627 642.434 170.544 622.303 148.612C586.492 109.577 596.983 48.9211 591.402 -3.74766C582.94 -83.4382 529.126 -156.746 455.638 -188.694\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M863.24 249.547C859.083 220.07 833.125 197.778 805.236 187.353C777.347 176.927 747.051 175.634 717.64 170.986C688.229 166.321 657.77 157.237 637.639 135.306C601.828 96.2707 612.319 35.6149 606.738 -17.0538C598.276 -96.7443 544.462 -170.052 470.974 -202\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t</svg>
\t</div>
</section>

<section class=\"section-sm\">
\t<div class=\"container\">
\t\t<div class=\"row g-5\">
\t\t\t<div class=\"col-lg-4 mb-5 mb-lg-0\">
\t\t\t\t<div class=\"bg-white shadow rounded-lg p-4 sticky-top\" style=\"top: 30px;\">
\t\t\t\t\t<h4 class=\"has-line-end\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
        yield "</h4>
\t\t\t\t\t<nav id=\"TableOfContents\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#how-it-works\">How It Works</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#key-features\">Key Features</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#benefits\">Benefits</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#get-started\">Get Started</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t
\t\t\t\t\t<!-- SERVICE 1: BUDGET MANAGEMENT -->
\t\t\t\t\t";
        // line 69
        if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 69, $this->source); })()) == 1)) {
            // line 70
            yield "\t\t\t\t\t
\t\t\t\t\t<h2 id=\"how-it-works\">How Budget Management Works</h2>
\t\t\t\t\t<p>Fin-Dinari's Budget Management system uses AI-powered technology to automatically categorize your transactions and provide real-time insights into your spending habits. Track every dinar you earn and every cent you spend across multiple wallets including Cash, Bank Accounts, Crypto, and Investments.</p>
\t\t\t\t\t<p>Our intelligent system learns your spending patterns and helps you identify areas where you can save. Set monthly budgets for different categories like groceries, entertainment, transportation, and utilities, and receive alerts when you're approaching your limits.</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"key-features\">Key Features</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>AI-Powered Categorization</strong> - Automatically sorts your expenses into smart categories</li>
\t\t\t\t\t\t<li><strong>Multi-Wallet Support</strong> - Manage Cash, Bank, Crypto, and Investment accounts in one place</li>
\t\t\t\t\t\t<li><strong>Real-Time Balance Updates</strong> - See your financial position instantly across all accounts</li>
\t\t\t\t\t\t<li><strong>Recurring Transaction Scheduling</strong> - Automate regular bills and income tracking</li>
\t\t\t\t\t\t<li><strong>Spending Insights & Reports</strong> - Visual charts showing where your money goes</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"benefits\">Benefits of Budget Management</h2>
\t\t\t\t\t<div style=\"position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/jgAsPXRhTLQ\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;\" allowfullscreen title=\"Budget Management Video\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"get-started\">Get Started with Budget Management</h2>
\t\t\t\t\t<p>Getting started is easy. Simply connect your bank accounts or start adding transactions manually. Our AI will learn your patterns and provide personalized recommendations to help you save more and spend smarter. Premium users get unlimited wallets and advanced analytics.</p>
\t\t\t\t\t<p>Start tracking your finances today and take the first step toward financial freedom. Whether you're living paycheck to paycheck or building wealth, our budget management tools adapt to your unique situation.</p>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- SERVICE 2: LOAN INVESTMENT -->
\t\t\t\t\t";
        } elseif ((        // line 97
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 97, $this->source); })()) == 2)) {
            // line 98
            yield "\t\t\t\t\t
\t\t\t\t\t<h2 id=\"how-it-works\">How Loan Investment Works</h2>
\t\t\t\t\t<p>Fin-Dinari's Loan Investment feature transforms you from a spender to an investor. You can lend money to trusted borrowers, generate secure digital receipts, and earn returns after a fixed period. Your money works for you while helping others achieve their financial goals.</p>
\t\t\t\t\t<p>Choose your investment amount, select the duration (1 to 12 months), and set your expected return rate. Our platform handles all documentation, receipts, and payment tracking automatically. When the loan matures, your principal plus earned interest is returned directly to your wallet.</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"key-features\">Key Features</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>Peer-to-Peer Lending</strong> - Connect directly with verified borrowers</li>
\t\t\t\t\t\t<li><strong>Digital Receipts</strong> - Every transaction generates a secure, timestamped receipt</li>
\t\t\t\t\t\t<li><strong>Fixed Return Periods</strong> - Choose 1, 3, 6, or 12 month investment terms</li>
\t\t\t\t\t\t<li><strong>Return on Investment Calculator</strong> - See exactly what you'll earn before investing</li>
\t\t\t\t\t\t<li><strong>Auto-Reinvest Option</strong> - Compound your returns automatically</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"benefits\">Benefits of Loan Investment</h2>
\t\t\t\t\t<div style=\"position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/jgAsPXRhTLQ\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;\" allowfullscreen title=\"Loan Investment Video\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"get-started\">Get Started with Loan Investment</h2>
\t\t\t\t\t<p>Start with as little as 100 Dinar. Browse available loan requests, review borrower profiles and ratings, then choose where to invest. Our platform handles payment collection and will automatically credit your account when loans mature. Premium investors get priority access to high-rated borrowers and lower fees.</p>
\t\t\t\t\t<p>Build your investment portfolio, earn passive income, and watch your wealth grow - all while helping others achieve their financial dreams.</p>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- SERVICE 3: OBJECTIVE MANAGEMENT -->
\t\t\t\t\t";
        } elseif ((        // line 125
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 125, $this->source); })()) == 3)) {
            // line 126
            yield "\t\t\t\t\t
\t\t\t\t\t<h2 id=\"how-it-works\">How Objective Management Works</h2>
\t\t\t\t\t<p>Fin-Dinari's Objective Management system helps you turn your financial dreams into reality. Set any goal - whether it's saving for a vacation, buying a car, building an emergency fund, or achieving financial independence. Our AI helps you create a realistic plan and keeps you motivated throughout your journey.</p>
\t\t\t\t\t<p>Define your target amount, deadline, and how much you can contribute monthly. Our system calculates exactly when you'll reach your goal and suggests adjustments if you fall behind. Visual progress trackers and milestone celebrations keep you engaged and motivated.</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"key-features\">Key Features</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>Multiple Goal Types</strong> - Short-term (vacation, emergency fund), Medium-term (car, wedding), Long-term (retirement, children's education)</li>
\t\t\t\t\t\t<li><strong>Visual Progress Trackers</strong> - See your progress with motivational animations</li>
\t\t\t\t\t\t<li><strong>AI-Optimized Savings Plans</strong> - Get smart suggestions to reach goals faster</li>
\t\t\t\t\t\t<li><strong>Catch-Up Mode</strong> - AI recalculates contributions if you fall behind</li>
\t\t\t\t\t\t<li><strong>Milestone Celebrations</strong> - Congratulations at 25%, 50%, 75%, and 100%</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"benefits\">Benefits of Objective Management</h2>
\t\t\t\t\t<div style=\"position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/jgAsPXRhTLQ\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;\" allowfullscreen title=\"Goal Management Video\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"get-started\">Get Started with Objective Management</h2>
\t\t\t\t\t<p>Setting your first goal takes less than a minute. Choose what you want to achieve, set your target amount and deadline, and our AI will create a personalized savings plan. Share your goals with the community for accountability, find an accountability partner, and celebrate every milestone along the way.</p>
\t\t\t\t\t<p>Premium users can set unlimited goals, access advanced analytics, and connect with mentors who have achieved similar objectives.</p>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- SERVICE 4: COMMUNITY -->
\t\t\t\t\t";
        } elseif ((        // line 153
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 153, $this->source); })()) == 4)) {
            // line 154
            yield "\t\t\t\t\t
\t\t\t\t\t<h2 id=\"how-it-works\">How Our Community Works</h2>
\t\t\t\t\t<p>Fin-Dinari's Community transforms personal finance from a lonely journey into a shared adventure. Connect with like-minded individuals, learn from successful investors, and grow your financial knowledge together. Share your wins, ask questions, and celebrate milestones with people who understand your journey.</p>
\t\t\t\t\t<p>Our platform includes social feeds, interest-based groups, mentorship programs, and monthly challenges. Whether you're interested in stock trading, crypto investing, real estate, or the FIRE movement, you'll find your tribe here.</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"key-features\">Key Features</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>Social Feed</strong> - Share financial wins, post questions, celebrate milestones</li>
\t\t\t\t\t\t<li><strong>Interest-Based Groups</strong> - FIRE Movement, Stock Investors, Crypto Traders, Real Estate, Student Finances, Family Budgeting</li>
\t\t\t\t\t\t<li><strong>Mentorship System</strong> - Learn from experienced investors and financial experts</li>
\t\t\t\t\t\t<li><strong>Monthly Challenges</strong> - Compete in savings challenges and investment competitions</li>
\t\t\t\t\t\t<li><strong>Accountability Partners</strong> - Get matched with someone who shares your goals</li>
\t\t\t\t\t\t<li><strong>Billionaire Insights</strong> - Learn strategies from the world's most successful investors</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"benefits\">Benefits of Joining Our Community</h2>
\t\t\t\t\t<div style=\"position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/jgAsPXRhTLQ\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;\" allowfullscreen title=\"Community Video\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"get-started\">Get Started with Our Community</h2>
\t\t\t\t\t<p>Join thousands of users who have transformed their financial lives with Fin-Dinari. Create your profile, introduce yourself in the welcome forum, join groups that match your interests, and start connecting. Share your first financial win, ask a question, or find an accountability partner today.</p>
\t\t\t\t\t<p>Premium members get full access to all groups, mentorship opportunities, and can create their own private groups for family or close friends.</p>
\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 181
        yield "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "home/service-details.html.twig";
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
        return array (  305 => 181,  276 => 154,  274 => 153,  245 => 126,  243 => 125,  214 => 98,  212 => 97,  183 => 70,  181 => 69,  157 => 48,  123 => 17,  118 => 15,  113 => 13,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ service.name }} - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8 mx-auto text-center\">
\t\t\t\t<h2 class=\"mb-3 text-capitalize\">{{ service.name }}</h2>
\t\t\t\t<ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\">Services</a>
\t\t\t\t\t</li>
<a class=\"btn btn-sm btn-outline-primary\" href=\"{{ path('app_service_details', {'id': 4}) }}\">View Details <i class=\"las la-arrow-right ms-1\"></i></a>\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"has-shapes\">
\t\t<svg class=\"shape shape-left text-light\" viewBox=\"0 0 192 752\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path d=\"M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t</svg>
\t\t<svg class=\"shape shape-right text-light\" viewBox=\"0 0 731 746\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path d=\"M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M89.8715 745.14C80.6239 711.363 73.8654 674.568 86.8091 642.028C103.766 599.396 150.788 575.515 196.347 570.054C241.906 564.578 287.767 573.629 333.523 577.099C379.278 580.584 428.277 577.567 465.976 551.423C518.279 515.172 535.431 444.525 582.62 401.832C621.964 366.229 681.356 354.493 731.291 372.46\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M128.718 745.14C120.029 713.414 113.678 678.838 125.837 648.274C141.768 608.221 185.939 585.788 228.737 580.659C271.536 575.515 314.621 584.008 357.6 587.282C400.58 590.556 446.607 587.719 482.028 563.16C531.163 529.111 547.275 462.733 591.612 422.635C628.572 389.19 684.375 378.162 731.276 395.043\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M167.564 745.14C159.432 715.451 153.504 683.107 164.863 654.519C179.753 617.046 221.088 596.062 261.126 591.265C301.164 586.452 341.473 594.402 381.677 597.465C421.88 600.527 464.95 597.872 498.094 574.896C544.061 543.035 559.146 480.942 600.617 443.423C635.194 412.135 687.406 401.817 731.276 417.612\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M817.266 289.466C813.108 259.989 787.151 237.697 759.261 227.271C731.372 216.846 701.077 215.553 671.666 210.904C642.254 206.24 611.795 197.156 591.664 175.224C555.853 136.189 566.345 75.5336 560.763 22.8649C552.302 -56.8256 498.487 -130.133 425 -162.081\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M832.584 276.159C828.427 246.683 802.469 224.391 774.58 213.965C746.69 203.539 716.395 202.246 686.984 197.598C657.573 192.934 627.114 183.85 606.982 161.918C571.172 122.883 581.663 62.2275 576.082 9.55873C567.62 -70.1318 513.806 -143.439 440.318 -175.387\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M847.904 262.853C843.747 233.376 817.789 211.084 789.9 200.659C762.011 190.233 731.716 188.94 702.304 184.292C672.893 179.627 642.434 170.544 622.303 148.612C586.492 109.577 596.983 48.9211 591.402 -3.74766C582.94 -83.4382 529.126 -156.746 455.638 -188.694\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t\t<path d=\"M863.24 249.547C859.083 220.07 833.125 197.778 805.236 187.353C777.347 176.927 747.051 175.634 717.64 170.986C688.229 166.321 657.77 157.237 637.639 135.306C601.828 96.2707 612.319 35.6149 606.738 -17.0538C598.276 -96.7443 544.462 -170.052 470.974 -202\" stroke=\"currentColor\" stroke-miterlimit=\"10\" />
\t\t</svg>
\t</div>
</section>

<section class=\"section-sm\">
\t<div class=\"container\">
\t\t<div class=\"row g-5\">
\t\t\t<div class=\"col-lg-4 mb-5 mb-lg-0\">
\t\t\t\t<div class=\"bg-white shadow rounded-lg p-4 sticky-top\" style=\"top: 30px;\">
\t\t\t\t\t<h4 class=\"has-line-end\">{{ service.name }}</h4>
\t\t\t\t\t<nav id=\"TableOfContents\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#how-it-works\">How It Works</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#key-features\">Key Features</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#benefits\">Benefits</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#get-started\">Get Started</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t
\t\t\t\t\t<!-- SERVICE 1: BUDGET MANAGEMENT -->
\t\t\t\t\t{% if id == 1 %}
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"how-it-works\">How Budget Management Works</h2>
\t\t\t\t\t<p>Fin-Dinari's Budget Management system uses AI-powered technology to automatically categorize your transactions and provide real-time insights into your spending habits. Track every dinar you earn and every cent you spend across multiple wallets including Cash, Bank Accounts, Crypto, and Investments.</p>
\t\t\t\t\t<p>Our intelligent system learns your spending patterns and helps you identify areas where you can save. Set monthly budgets for different categories like groceries, entertainment, transportation, and utilities, and receive alerts when you're approaching your limits.</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"key-features\">Key Features</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>AI-Powered Categorization</strong> - Automatically sorts your expenses into smart categories</li>
\t\t\t\t\t\t<li><strong>Multi-Wallet Support</strong> - Manage Cash, Bank, Crypto, and Investment accounts in one place</li>
\t\t\t\t\t\t<li><strong>Real-Time Balance Updates</strong> - See your financial position instantly across all accounts</li>
\t\t\t\t\t\t<li><strong>Recurring Transaction Scheduling</strong> - Automate regular bills and income tracking</li>
\t\t\t\t\t\t<li><strong>Spending Insights & Reports</strong> - Visual charts showing where your money goes</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"benefits\">Benefits of Budget Management</h2>
\t\t\t\t\t<div style=\"position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/jgAsPXRhTLQ\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;\" allowfullscreen title=\"Budget Management Video\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"get-started\">Get Started with Budget Management</h2>
\t\t\t\t\t<p>Getting started is easy. Simply connect your bank accounts or start adding transactions manually. Our AI will learn your patterns and provide personalized recommendations to help you save more and spend smarter. Premium users get unlimited wallets and advanced analytics.</p>
\t\t\t\t\t<p>Start tracking your finances today and take the first step toward financial freedom. Whether you're living paycheck to paycheck or building wealth, our budget management tools adapt to your unique situation.</p>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- SERVICE 2: LOAN INVESTMENT -->
\t\t\t\t\t{% elseif id == 2 %}
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"how-it-works\">How Loan Investment Works</h2>
\t\t\t\t\t<p>Fin-Dinari's Loan Investment feature transforms you from a spender to an investor. You can lend money to trusted borrowers, generate secure digital receipts, and earn returns after a fixed period. Your money works for you while helping others achieve their financial goals.</p>
\t\t\t\t\t<p>Choose your investment amount, select the duration (1 to 12 months), and set your expected return rate. Our platform handles all documentation, receipts, and payment tracking automatically. When the loan matures, your principal plus earned interest is returned directly to your wallet.</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"key-features\">Key Features</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>Peer-to-Peer Lending</strong> - Connect directly with verified borrowers</li>
\t\t\t\t\t\t<li><strong>Digital Receipts</strong> - Every transaction generates a secure, timestamped receipt</li>
\t\t\t\t\t\t<li><strong>Fixed Return Periods</strong> - Choose 1, 3, 6, or 12 month investment terms</li>
\t\t\t\t\t\t<li><strong>Return on Investment Calculator</strong> - See exactly what you'll earn before investing</li>
\t\t\t\t\t\t<li><strong>Auto-Reinvest Option</strong> - Compound your returns automatically</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"benefits\">Benefits of Loan Investment</h2>
\t\t\t\t\t<div style=\"position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/jgAsPXRhTLQ\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;\" allowfullscreen title=\"Loan Investment Video\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"get-started\">Get Started with Loan Investment</h2>
\t\t\t\t\t<p>Start with as little as 100 Dinar. Browse available loan requests, review borrower profiles and ratings, then choose where to invest. Our platform handles payment collection and will automatically credit your account when loans mature. Premium investors get priority access to high-rated borrowers and lower fees.</p>
\t\t\t\t\t<p>Build your investment portfolio, earn passive income, and watch your wealth grow - all while helping others achieve their financial dreams.</p>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- SERVICE 3: OBJECTIVE MANAGEMENT -->
\t\t\t\t\t{% elseif id == 3 %}
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"how-it-works\">How Objective Management Works</h2>
\t\t\t\t\t<p>Fin-Dinari's Objective Management system helps you turn your financial dreams into reality. Set any goal - whether it's saving for a vacation, buying a car, building an emergency fund, or achieving financial independence. Our AI helps you create a realistic plan and keeps you motivated throughout your journey.</p>
\t\t\t\t\t<p>Define your target amount, deadline, and how much you can contribute monthly. Our system calculates exactly when you'll reach your goal and suggests adjustments if you fall behind. Visual progress trackers and milestone celebrations keep you engaged and motivated.</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"key-features\">Key Features</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>Multiple Goal Types</strong> - Short-term (vacation, emergency fund), Medium-term (car, wedding), Long-term (retirement, children's education)</li>
\t\t\t\t\t\t<li><strong>Visual Progress Trackers</strong> - See your progress with motivational animations</li>
\t\t\t\t\t\t<li><strong>AI-Optimized Savings Plans</strong> - Get smart suggestions to reach goals faster</li>
\t\t\t\t\t\t<li><strong>Catch-Up Mode</strong> - AI recalculates contributions if you fall behind</li>
\t\t\t\t\t\t<li><strong>Milestone Celebrations</strong> - Congratulations at 25%, 50%, 75%, and 100%</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"benefits\">Benefits of Objective Management</h2>
\t\t\t\t\t<div style=\"position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/jgAsPXRhTLQ\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;\" allowfullscreen title=\"Goal Management Video\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"get-started\">Get Started with Objective Management</h2>
\t\t\t\t\t<p>Setting your first goal takes less than a minute. Choose what you want to achieve, set your target amount and deadline, and our AI will create a personalized savings plan. Share your goals with the community for accountability, find an accountability partner, and celebrate every milestone along the way.</p>
\t\t\t\t\t<p>Premium users can set unlimited goals, access advanced analytics, and connect with mentors who have achieved similar objectives.</p>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- SERVICE 4: COMMUNITY -->
\t\t\t\t\t{% elseif id == 4 %}
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"how-it-works\">How Our Community Works</h2>
\t\t\t\t\t<p>Fin-Dinari's Community transforms personal finance from a lonely journey into a shared adventure. Connect with like-minded individuals, learn from successful investors, and grow your financial knowledge together. Share your wins, ask questions, and celebrate milestones with people who understand your journey.</p>
\t\t\t\t\t<p>Our platform includes social feeds, interest-based groups, mentorship programs, and monthly challenges. Whether you're interested in stock trading, crypto investing, real estate, or the FIRE movement, you'll find your tribe here.</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"key-features\">Key Features</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>Social Feed</strong> - Share financial wins, post questions, celebrate milestones</li>
\t\t\t\t\t\t<li><strong>Interest-Based Groups</strong> - FIRE Movement, Stock Investors, Crypto Traders, Real Estate, Student Finances, Family Budgeting</li>
\t\t\t\t\t\t<li><strong>Mentorship System</strong> - Learn from experienced investors and financial experts</li>
\t\t\t\t\t\t<li><strong>Monthly Challenges</strong> - Compete in savings challenges and investment competitions</li>
\t\t\t\t\t\t<li><strong>Accountability Partners</strong> - Get matched with someone who shares your goals</li>
\t\t\t\t\t\t<li><strong>Billionaire Insights</strong> - Learn strategies from the world's most successful investors</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"benefits\">Benefits of Joining Our Community</h2>
\t\t\t\t\t<div style=\"position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/jgAsPXRhTLQ\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;\" allowfullscreen title=\"Community Video\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h2 id=\"get-started\">Get Started with Our Community</h2>
\t\t\t\t\t<p>Join thousands of users who have transformed their financial lives with Fin-Dinari. Create your profile, introduce yourself in the welcome forum, join groups that match your interests, and start connecting. Share your first financial win, ask a question, or find an accountability partner today.</p>
\t\t\t\t\t<p>Premium members get full access to all groups, mentorship opportunities, and can create their own private groups for family or close friends.</p>
\t\t\t\t\t
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

{% endblock %}", "home/service-details.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\home\\service-details.html.twig");
    }
}
