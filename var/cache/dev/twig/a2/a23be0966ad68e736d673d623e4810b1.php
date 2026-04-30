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

/* management/transaction/step3.html.twig */
class __TwigTemplate_13347cd02962f5bdf94c6d194c68ba8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/transaction/step3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/transaction/step3.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "New Transaction - Step 3";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">New Transaction</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        ";
        // line 19
        yield "        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"d-flex align-items-center justify-content-center\">
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Wallet</p>
                    </div>
                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Type</p>
                    </div>
                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #F27438;\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #F27438;\">Details</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">
                <div class=\"card border-0 rounded-4\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: ";
        // line 54
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 54, $this->source); })()) == "income")) ? ("#2d6a4f") : ("#c0392b"));
        yield ";\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Step 3 of 3</p>
                                <h4 class=\"fw-bold mb-0\">
                                    ";
        // line 59
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 59, $this->source); })()) == "income")) ? ("💰 Income Details") : ("💸 Expense Details"));
        yield "
                                </h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas ";
        // line 64
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 64, $this->source); })()) == "income")) ? ("fa-arrow-up") : ("fa-arrow-down"));
        yield " fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-body p-4\">

                        ";
        // line 72
        yield "                        <div class=\"rounded-4 p-3 mb-4 d-flex gap-3\" style=\"background: #f8f9fa;\">
                            <div class=\"flex-fill text-center p-2 rounded-3\" style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Wallet</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas fa-wallet me-1\" style=\"color: #F27438;\"></i>
                                    ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 77, $this->source); })()), "pays", [], "any", false, false, false, 77), "html", null, true);
        yield "
                                </p>
                                <p class=\"text-muted small mb-0\">
                                    Balance: ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 80, $this->source); })()), "solde", [], "any", false, false, false, 80), 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 80, $this->source); })()), "devise", [], "any", false, false, false, 80), "html", null, true);
        yield "
                                </p>
                            </div>
                            <div class=\"flex-fill text-center p-2 rounded-3\" style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Type</p>
                                <p class=\"fw-bold mb-0\"
                                   style=\"color: ";
        // line 86
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 86, $this->source); })()) == "income")) ? ("#2d6a4f") : ("#c0392b"));
        yield ";\">
                                    <i class=\"fas ";
        // line 87
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 87, $this->source); })()) == "income")) ? ("fa-arrow-up") : ("fa-arrow-down"));
        yield " me-1\"></i>
                                    ";
        // line 88
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 88, $this->source); })()) == "income")) ? ("Income") : ("Expense"));
        yield "
                                </p>
                            </div>
                        </div>

                        ";
        // line 94
        yield "                        <div id=\"walletError\"
                             style=\"display:none; background: #fde8e8; border-left: 4px solid #c0392b; border-radius: 12px; padding: 16px; margin-bottom: 16px;\">
                            <div class=\"d-flex align-items-start gap-3\">
                                <i class=\"fas fa-times-circle fa-lg\" style=\"color: #c0392b; flex-shrink:0; margin-top:2px;\"></i>
                                <div>
                                    <h6 class=\"fw-bold mb-1\" style=\"color: #c0392b;\">❌ Transaction Blocked!</h6>
                                    <p class=\"mb-0 small\" style=\"color: #c0392b;\" id=\"walletErrorMsg\"></p>
                                </div>
                            </div>
                        </div>
";
        // line 105
        if (array_key_exists("errors", $context)) {
            // line 106
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 107
                yield "        ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 107), ["montant", "categorie"])) {
                    // line 108
                    yield "            <div class=\"alert alert-danger small py-2\">
                <i class=\"fas fa-exclamation-circle me-1\"></i>
                ";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 110), "html", null, true);
                    yield ": ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 110), "html", null, true);
                    yield "
            </div>
        ";
                }
                // line 113
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 115
        yield "                        <form method=\"post\"
                              action=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_new_step3");
        yield "\"
                              id=\"transactionForm\"
                              onsubmit=\"return validateTransaction()\"
                              novalidate>

                            ";
        // line 122
        yield "                            <input type=\"hidden\" id=\"walletSolde\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 122, $this->source); })()), "solde", [], "any", false, false, false, 122), "html", null, true);
        yield "\">
                            <input type=\"hidden\" id=\"walletDevise\" value=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 123, $this->source); })()), "devise", [], "any", false, false, false, 123), "html", null, true);
        yield "\">
                            <input type=\"hidden\" id=\"walletPays\" value=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 124, $this->source); })()), "pays", [], "any", false, false, false, 124), "html", null, true);
        yield "\">
                            <input type=\"hidden\" id=\"transactionType\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 125, $this->source); })()), "html", null, true);
        yield "\">
                            <input type=\"hidden\" id=\"budgetsData\" value=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["budgetsData"]) || array_key_exists("budgetsData", $context) ? $context["budgetsData"] : (function () { throw new RuntimeError('Variable "budgetsData" does not exist.', 126, $this->source); })())), "html", null, true);
        yield "\">

                            ";
        // line 129
        yield "                            ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 129, $this->source); })()) == "depense")) {
            // line 130
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Category</label>
                                    ";
            // line 132
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 132, $this->source); })()))) {
                // line 133
                yield "                                        <div class=\"rounded-3 p-3\" style=\"background: #fff3ee; border-left: 4px solid #F27438;\">
                                            <p class=\"mb-0 small\" style=\"color: #26474E;\">
                                                <i class=\"fas fa-info-circle me-2\" style=\"color: #F27438;\"></i>
                                                No budgets found for this wallet.
                                                <a href=\"";
                // line 137
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step1");
                yield "\" style=\"color: #F27438;\">Create a budget first</a>
                                            </p>
                                        </div>
                                    ";
            } else {
                // line 141
                yield "                                        <div class=\"row g-2\">
                                            ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 142, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 143
                    yield "                                                <div class=\"col-md-6\">
                                                    <input type=\"radio\" name=\"categorie_id\"
                                                           id=\"cat_";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 145), "html", null, true);
                    yield "\"
                                                           value=\"";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 146), "html", null, true);
                    yield "\"
                                                           class=\"d-none cat-radio\">
                                                    <label for=\"cat_";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 148), "html", null, true);
                    yield "\"
                                                           class=\"cat-option w-100 rounded-3 p-2 d-flex align-items-center gap-2\"
                                                           style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                        <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                             style=\"width:38px; height:38px; background: ";
                    // line 152
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", true, true, false, 152) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 152)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 152), "html", null, true)) : ("#F27438"));
                    yield ";\">
                                                            <i class=\"fas ";
                    // line 153
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", true, true, false, 153) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 153)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 153), "html", null, true)) : ("fa-folder"));
                    yield " text-white small\"></i>
                                                        </div>
                                                        <span class=\"fw-bold small\" style=\"color: #26474E;\">";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 155), "html", null, true);
                    yield "</span>
                                                    </label>
                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                yield "                                        </div>
                                    ";
            }
            // line 161
            yield "                                </div>
                            ";
        } else {
            // line 163
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Category</label>
                                    <div class=\"row g-2\">
                                        ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 166, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 167
                yield "                                            <div class=\"col-md-6\">
                                                <input type=\"radio\" name=\"categorie_id\"
                                                       id=\"cat_";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 169), "html", null, true);
                yield "\"
                                                       value=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 170), "html", null, true);
                yield "\"
                                                       class=\"d-none cat-radio\">
                                                <label for=\"cat_";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 172), "html", null, true);
                yield "\"
                                                       class=\"cat-option w-100 rounded-3 p-2 d-flex align-items-center gap-2\"
                                                       style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                    <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                         style=\"width:38px; height:38px; background: ";
                // line 176
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", true, true, false, 176) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 176)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 176), "html", null, true)) : ("#F27438"));
                yield ";\">
                                                        <i class=\"fas ";
                // line 177
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", true, true, false, 177) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 177)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 177), "html", null, true)) : ("fa-folder"));
                yield " text-white small\"></i>
                                                    </div>
                                                    <span class=\"fw-bold small\" style=\"color: #26474E;\">";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 179), "html", null, true);
                yield "</span>
                                                </label>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            yield "                                    </div>
                                </div>
                            ";
        }
        // line 186
        yield "                            ";
        if (array_key_exists("errors", $context)) {
            // line 187
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 187, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 188
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 188) == "categorie")) {
                    // line 189
                    yield "            <div class=\"text-danger small mt-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 189), "html", null, true);
                    yield "</div>
        ";
                }
                // line 191
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 193
        yield "
                           ";
        // line 195
        yield "<div class=\"mb-3\">
    <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
        Amount <span class=\"text-muted fw-normal\">(";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 197, $this->source); })()), "devise", [], "any", false, false, false, 197), "html", null, true);
        yield ")</span>
    </label>
    <div class=\"input-group\">
        <span class=\"input-group-text\"
              style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
            <i class=\"fas fa-money-bill-wave\"></i>
        </span>
        <input type=\"number\" name=\"montant\" id=\"montantInput\"
               class=\"form-control\"
               placeholder=\"Enter amount\"
               style=\"border-color: #76CDCD;\">
    </div>
    ";
        // line 209
        if (array_key_exists("errors", $context)) {
            // line 210
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 210, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 211
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "propertyPath", [], "any", false, false, false, 211) == "montant")) {
                    // line 212
                    yield "                <div class=\"text-danger small mt-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 212), "html", null, true);
                    yield "</div>
            ";
                }
                // line 214
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            yield "    ";
        }
        // line 216
        yield "</div>
";
        // line 218
        yield "<div class=\"mb-3\">
    <div class=\"rounded-4 p-3\" style=\"background: #f8f9fa; border: 1px solid #e0e0e0;\">
        <label class=\"form-label fw-bold small\" style=\"color: #26474E;\">
            <i class=\"fas fa-exchange-alt me-1\" style=\"color: #F27438;\"></i>Currency Converter
        </label>

        <div class=\"row g-2 mb-2\">
            ";
        // line 226
        yield "            <div class=\"col-4\">
                <input type=\"number\" id=\"convertAmount\" class=\"form-control form-control-sm\"
                       placeholder=\"Amount\" step=\"0.01\" style=\"border-color: #76CDCD;\">
            </div>

            ";
        // line 232
        yield "          <div class=\"col-3\">
    <select id=\"fromCurrency\" class=\"form-select form-select-sm\"
            style=\"border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
        <option value=\"\" style=\"color: #26474E;\">From</option>
    </select>
</div>
            ";
        // line 239
        yield "            <div class=\"col-1 d-flex align-items-center justify-content-center\">
                <i class=\"fas fa-arrow-right\" style=\"color: #F27438;\"></i>
            </div>

            ";
        // line 244
        yield "            <div class=\"col-4\">
                <input type=\"text\" id=\"toCurrency\" class=\"form-control form-control-sm\"
                       value=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 246, $this->source); })()), "devise", [], "any", false, false, false, 246), "html", null, true);
        yield "\" readonly
                       style=\"border-color: #76CDCD; background: #e8f5f5; font-weight: bold; color: #26474E;\">
            </div>
        </div>

        ";
        // line 252
        yield "        <div class=\"d-flex gap-2 align-items-center\">
            <button type=\"button\" class=\"btn btn-sm px-3\"
                    onclick=\"convertCurrency()\"
                    style=\"background: #F27438; color: white; border-radius: 10px;\">
                <i class=\"fas fa-calculator me-1\"></i>Convert
            </button>

            ";
        // line 260
        yield "            <div id=\"conversionResult\" style=\"display: none;\"
                 class=\"flex-fill d-flex align-items-center justify-content-between rounded-3 p-2\"
                 style=\"background: white;\">
                <span id=\"conversionText\" class=\"small fw-bold\" style=\"color: #26474E;\"></span>
                <button type=\"button\" class=\"btn btn-sm px-3\"
                        onclick=\"useConvertedAmount()\"
                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                    <i class=\"fas fa-check me-1\"></i>Use
                </button>
            </div>

            ";
        // line 272
        yield "            <div id=\"conversionLoading\" style=\"display: none;\">
                <span class=\"spinner-border spinner-border-sm\" style=\"color: #F27438;\"></span>
                <span class=\"small text-muted ms-1\">Converting...</span>
            </div>

            ";
        // line 278
        yield "            <div id=\"conversionError\" style=\"display: none;\" class=\"small text-danger\"></div>
        </div>
    </div>
</div>
                            ";
        // line 283
        yield "                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Description <span class=\"text-muted fw-normal\">(optional)</span>
                                </label>
                                <textarea name=\"description\"
                                          class=\"form-control\"
                                          placeholder=\"Add a note...\"
                                          rows=\"2\"
                                          style=\"border-color: #76CDCD;\"></textarea>
                            </div>
";
        // line 294
        yield "<div class=\"mb-4\">
    <div class=\"form-check form-switch mb-3\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"recurringToggle\"
               name=\"isRecurring\" value=\"1\" onchange=\"toggleRecurringOptions()\">
        <label class=\"form-check-label fw-bold\" for=\"recurringToggle\" style=\"color: #26474E;\">
            <i class=\"fas fa-sync-alt me-1\" style=\"color: #F27438;\"></i>Make this recurring
        </label>
    </div>

    <div id=\"recurringOptions\" style=\"display: none;\">
        <div class=\"rounded-4 p-3\" style=\"background: #fff3ee; border: 1px solid #F27438;\">
            ";
        // line 306
        yield "            <div class=\"mb-3\">
                <label class=\"form-label fw-bold small\" style=\"color: #26474E;\">Frequency</label>
                <div class=\"d-flex gap-2 flex-wrap\">
                    ";
        // line 309
        $context["frequencies"] = ["daily" => "fa-sun", "weekly" => "fa-calendar-week", "monthly" => "fa-calendar-alt", "yearly" => "fa-calendar"];
        // line 310
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["frequencies"]) || array_key_exists("frequencies", $context) ? $context["frequencies"] : (function () { throw new RuntimeError('Variable "frequencies" does not exist.', 310, $this->source); })()));
        foreach ($context['_seq'] as $context["freq"] => $context["icon"]) {
            // line 311
            yield "                        <div class=\"flex-fill\">
                            <input type=\"radio\" name=\"frequency\" id=\"freq_";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["freq"], "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["freq"], "html", null, true);
            yield "\" class=\"d-none freq-radio\">
                            <label for=\"freq_";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["freq"], "html", null, true);
            yield "\" class=\"freq-option w-100 text-center p-2 rounded-3\"
                                   style=\"border: 2px solid #e0e0e0; cursor: pointer; background: white;\">
                                <i class=\"fas ";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield " small\" style=\"color: #26474E;\"></i>
                                <p class=\"mb-0 fw-bold small\" style=\"color: #26474E;\">";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["freq"]), "html", null, true);
            yield "</p>
                            </label>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['freq'], $context['icon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        yield "                </div>
            </div>

            ";
        // line 324
        yield "            <div class=\"mb-0\">
                <label class=\"form-label fw-bold small\" style=\"color: #26474E;\">
                    End Date <span class=\"text-muted fw-normal\">(optional)</span>
                </label>
                <input type=\"date\" name=\"endDate\" class=\"form-control form-control-sm\" style=\"border-color: #76CDCD;\">
                <small class=\"text-muted\">Leave empty for no end date</small>
            </div>
        </div>
    </div>
</div>
                            <hr class=\"my-3\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_new_step2");
        yield "\"
                                   class=\"btn px-4\"
                                   style=\"background: #f5f5f5; color: #26474E; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Back
                                </a>
                                <button type=\"submit\" class=\"btn px-4\"
                                        style=\"background: ";
        // line 343
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 343, $this->source); })()) == "income")) ? ("#e8f5e9") : ("#fde8e8"));
        yield ";
                                               color: ";
        // line 344
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 344, $this->source); })()) == "income")) ? ("#2d6a4f") : ("#c0392b"));
        yield ";
                                               border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>
                                    Add ";
        // line 347
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 347, $this->source); })()) == "income")) ? ("Income") : ("Expense"));
        yield "
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .cat-radio:checked + .cat-option {
        border-color: #F27438 !important;
        background: #fff3ee;
    }
    .cat-option:hover { border-color: #F27438 !important; background: #fff8f5; }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
    .freq-radio:checked + .freq-option {
        border-color: #F27438 !important;
        background: #fff3ee !important;
    }
    .freq-option:hover {
        border-color: #F27438 !important;
    }
    #fromCurrency {
    color: #26474E !important;
    background-color: #f8f9fa !important;
}
#fromCurrency option {
    color: #26474E;
    background-color: white;
    padding: 4px;

}

</style>
<script>
function validateTransaction() {
    const type = document.getElementById('transactionType').value;
    const montant = parseFloat(document.getElementById('montantInput').value);
    const walletSolde = parseFloat(document.getElementById('walletSolde').value);
    const walletDevise = document.getElementById('walletDevise').value;
    const walletPays = document.getElementById('walletPays').value;
    const errorDiv = document.getElementById('walletError');

    // Hide previous error
    errorDiv.style.display = 'none';

    // ❌ Check 1 — Wallet balance exceeded — BLOCK
    if (type === 'depense' && montant > walletSolde) {
        document.getElementById('walletErrorMsg').innerHTML =
            'Insufficient balance! Your wallet \"<strong>' + walletPays + '</strong>\" has only <strong>' +
            walletSolde.toFixed(2) + ' ' + walletDevise + '</strong>. Please enter a smaller amount.';
        errorDiv.style.display = 'block';
        errorDiv.scrollIntoView({ behavior: 'smooth' });
        return false;
    }

    // ⚠️ Check 2 — Budget exceeded — confirm dialog
    if (type === 'depense') {
        const budgetsDataEl = document.getElementById('budgetsData');
        if (budgetsDataEl && budgetsDataEl.value && budgetsDataEl.value !== '[]') {
            const budgetsData = JSON.parse(budgetsDataEl.value);
            const selectedCat = document.querySelector('input[name=\"categorie_id\"]:checked');

            if (selectedCat) {
                const catId = selectedCat.value;
                const budget = budgetsData[catId];

                if (budget) {
                    const newTotal = parseFloat(budget.totalSpent) + montant;
                    if (newTotal > parseFloat(budget.montantMax)) {
                        const remaining = Math.max(0, parseFloat(budget.remaining)).toFixed(2);
                        const confirmed = confirm(
                            '⚠️ Budget Limit Exceeded!\\n\\n' +
                            'Budget limit: ' + parseFloat(budget.montantMax).toFixed(2) + ' ' + walletDevise + '\\n' +
                            'Already spent: ' + parseFloat(budget.totalSpent).toFixed(2) + ' ' + walletDevise + '\\n' +
                            'Remaining: ' + remaining + ' ' + walletDevise + '\\n\\n' +
                            'Do you still want to add this transaction?'
                        );
                        if (!confirmed) return false;
                    }
                }
            }
        }
    }

    return true;
}
function toggleRecurringOptions() {
    const toggle = document.getElementById('recurringToggle');
    const options = document.getElementById('recurringOptions');
    options.style.display = toggle.checked ? 'block' : 'none';
}
let lastConvertedAmount = 0;

async function loadCurrencies() {
    try {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        const data = await response.json();

        if (data.rates) {
            const select = document.getElementById('fromCurrency');
            const currencies = Object.keys(data.rates).sort();

            currencies.forEach(currency => {
                const option = document.createElement('option');
                option.value = currency;
                option.textContent = currency;
                option.style.color = '#26474E';
                select.appendChild(option);
            });

            // Check wallet currency
            const walletCurrency = document.getElementById('toCurrency').value.toUpperCase().trim();
            if (!data.rates[walletCurrency]) {
                console.warn('Wallet currency \"' + walletCurrency + '\" not found in API');
            }
        }
    } catch (error) {
        console.error('Error loading currencies:', error);
    }
}

async function convertCurrency() {
    const amount = parseFloat(document.getElementById('convertAmount').value);
    const from = document.getElementById('fromCurrency').value;
    const to = document.getElementById('toCurrency').value.toUpperCase().trim();
    const resultDiv = document.getElementById('conversionResult');
    const loadingDiv = document.getElementById('conversionLoading');
    const errorDiv = document.getElementById('conversionError');
    const resultText = document.getElementById('conversionText');

    resultDiv.style.display = 'none';
    errorDiv.style.display = 'none';

    if (!amount || isNaN(amount) || amount <= 0) {
        errorDiv.textContent = 'Please enter a valid amount';
        errorDiv.style.display = 'block';
        return;
    }
    if (!from) {
        errorDiv.textContent = 'Please select a source currency';
        errorDiv.style.display = 'block';
        return;
    }
    if (from === to) {
        lastConvertedAmount = amount;
        resultText.innerHTML = amount.toFixed(2) + ' ' + from + ' = <strong>' + amount.toFixed(2) + ' ' + to + '</strong>';
        resultDiv.style.display = 'flex';
        return;
    }

    loadingDiv.style.display = 'block';

    try {
        // Map common non-standard codes
        const currencyMap = { 'DT': 'TND', 'DA': 'DZD', 'LE': 'EGP', 'LD': 'LYD' };
        const targetCode = currencyMap[to] || to;

        const response = await fetch('https://api.exchangerate-api.com/v4/latest/' + from);
        const data = await response.json();

        if (data.rates && data.rates[targetCode]) {
            const rate = data.rates[targetCode];
            const converted = amount * rate;
            lastConvertedAmount = converted;

            resultText.innerHTML =
                amount.toFixed(2) + ' ' + from +
                ' = <strong>' + converted.toFixed(2) + ' ' + to + '</strong>' +
                ' <span class=\"text-muted small\">(1 ' + from + ' = ' + rate.toFixed(4) + ' ' + to + ')</span>';
            resultDiv.style.display = 'flex';
        } else {
            errorDiv.textContent = 'Currency \"' + to + '\" not supported. Try a standard code like TND, EUR, USD.';
            errorDiv.style.display = 'block';
        }
    } catch (error) {
        errorDiv.textContent = 'Conversion failed. Check your internet connection.';
        errorDiv.style.display = 'block';
    }

    loadingDiv.style.display = 'none';
}

function useConvertedAmount() {
    document.getElementById('montantInput').value = lastConvertedAmount.toFixed(2);
    const input = document.getElementById('montantInput');
    input.style.background = '#e8f5e9';
    setTimeout(() => { input.style.background = 'white'; }, 1000);
}

document.addEventListener('DOMContentLoaded', loadCurrencies);
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
        return "management/transaction/step3.html.twig";
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
        return array (  676 => 347,  670 => 344,  666 => 343,  657 => 337,  642 => 324,  637 => 320,  627 => 316,  623 => 315,  618 => 313,  612 => 312,  609 => 311,  604 => 310,  602 => 309,  597 => 306,  584 => 294,  572 => 283,  566 => 278,  559 => 272,  546 => 260,  537 => 252,  529 => 246,  525 => 244,  519 => 239,  511 => 232,  504 => 226,  495 => 218,  492 => 216,  489 => 215,  483 => 214,  477 => 212,  474 => 211,  469 => 210,  467 => 209,  452 => 197,  448 => 195,  445 => 193,  438 => 191,  432 => 189,  429 => 188,  424 => 187,  421 => 186,  416 => 183,  406 => 179,  401 => 177,  397 => 176,  390 => 172,  385 => 170,  381 => 169,  377 => 167,  373 => 166,  368 => 163,  364 => 161,  360 => 159,  350 => 155,  345 => 153,  341 => 152,  334 => 148,  329 => 146,  325 => 145,  321 => 143,  317 => 142,  314 => 141,  307 => 137,  301 => 133,  299 => 132,  295 => 130,  292 => 129,  287 => 126,  283 => 125,  279 => 124,  275 => 123,  270 => 122,  262 => 116,  259 => 115,  252 => 113,  244 => 110,  240 => 108,  237 => 107,  232 => 106,  230 => 105,  218 => 94,  210 => 88,  206 => 87,  202 => 86,  191 => 80,  185 => 77,  178 => 72,  168 => 64,  160 => 59,  152 => 54,  115 => 19,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}New Transaction - Step 3{% endblock %}

{% block body %}
<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">New Transaction</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        {# Progress Bar #}
        <div class=\"row mb-5\">
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"d-flex align-items-center justify-content-center\">
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Wallet</p>
                    </div>
                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #2d6a4f;\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #2d6a4f;\">Type</p>
                    </div>
                    <div style=\"height:3px; width:80px; background: #2d6a4f; margin: 0 8px;\"></div>
                    <div class=\"text-center\">
                        <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto text-white\"
                             style=\"width:50px; height:50px; background: #F27438;\">
                            <i class=\"fas fa-money-bill-wave\"></i>
                        </div>
                        <p class=\"small fw-bold mt-2 mb-0\" style=\"color: #F27438;\">Details</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">
                <div class=\"card border-0 rounded-4\" style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: {{ type == 'income' ? '#2d6a4f' : '#c0392b' }};\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Step 3 of 3</p>
                                <h4 class=\"fw-bold mb-0\">
                                    {{ type == 'income' ? '💰 Income Details' : '💸 Expense Details' }}
                                </h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas {{ type == 'income' ? 'fa-arrow-up' : 'fa-arrow-down' }} fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-body p-4\">

                        {# Summary #}
                        <div class=\"rounded-4 p-3 mb-4 d-flex gap-3\" style=\"background: #f8f9fa;\">
                            <div class=\"flex-fill text-center p-2 rounded-3\" style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Wallet</p>
                                <p class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                                    <i class=\"fas fa-wallet me-1\" style=\"color: #F27438;\"></i>
                                    {{ wallet.pays }}
                                </p>
                                <p class=\"text-muted small mb-0\">
                                    Balance: {{ wallet.solde|number_format(2) }} {{ wallet.devise }}
                                </p>
                            </div>
                            <div class=\"flex-fill text-center p-2 rounded-3\" style=\"background: white;\">
                                <p class=\"text-muted small mb-1 text-uppercase fw-semibold\">Type</p>
                                <p class=\"fw-bold mb-0\"
                                   style=\"color: {{ type == 'income' ? '#2d6a4f' : '#c0392b' }};\">
                                    <i class=\"fas {{ type == 'income' ? 'fa-arrow-up' : 'fa-arrow-down' }} me-1\"></i>
                                    {{ type == 'income' ? 'Income' : 'Expense' }}
                                </p>
                            </div>
                        </div>

                        {# ❌ Wallet Error Alert - hidden by default #}
                        <div id=\"walletError\"
                             style=\"display:none; background: #fde8e8; border-left: 4px solid #c0392b; border-radius: 12px; padding: 16px; margin-bottom: 16px;\">
                            <div class=\"d-flex align-items-start gap-3\">
                                <i class=\"fas fa-times-circle fa-lg\" style=\"color: #c0392b; flex-shrink:0; margin-top:2px;\"></i>
                                <div>
                                    <h6 class=\"fw-bold mb-1\" style=\"color: #c0392b;\">❌ Transaction Blocked!</h6>
                                    <p class=\"mb-0 small\" style=\"color: #c0392b;\" id=\"walletErrorMsg\"></p>
                                </div>
                            </div>
                        </div>
{# General errors display #}
{% if errors is defined %}
    {% for error in errors %}
        {% if error.propertyPath not in ['montant', 'categorie'] %}
            <div class=\"alert alert-danger small py-2\">
                <i class=\"fas fa-exclamation-circle me-1\"></i>
                {{ error.propertyPath }}: {{ error.message }}
            </div>
        {% endif %}
    {% endfor %}
{% endif %}
                        <form method=\"post\"
                              action=\"{{ path('app_transaction_new_step3') }}\"
                              id=\"transactionForm\"
                              onsubmit=\"return validateTransaction()\"
                              novalidate>

                            {# Hidden JS data #}
                            <input type=\"hidden\" id=\"walletSolde\" value=\"{{ wallet.solde }}\">
                            <input type=\"hidden\" id=\"walletDevise\" value=\"{{ wallet.devise }}\">
                            <input type=\"hidden\" id=\"walletPays\" value=\"{{ wallet.pays }}\">
                            <input type=\"hidden\" id=\"transactionType\" value=\"{{ type }}\">
                            <input type=\"hidden\" id=\"budgetsData\" value=\"{{ budgetsData|json_encode }}\">

                            {# Category #}
                            {% if type == 'depense' %}
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Category</label>
                                    {% if categories is empty %}
                                        <div class=\"rounded-3 p-3\" style=\"background: #fff3ee; border-left: 4px solid #F27438;\">
                                            <p class=\"mb-0 small\" style=\"color: #26474E;\">
                                                <i class=\"fas fa-info-circle me-2\" style=\"color: #F27438;\"></i>
                                                No budgets found for this wallet.
                                                <a href=\"{{ path('app_budget_new_step1') }}\" style=\"color: #F27438;\">Create a budget first</a>
                                            </p>
                                        </div>
                                    {% else %}
                                        <div class=\"row g-2\">
                                            {% for categorie in categories %}
                                                <div class=\"col-md-6\">
                                                    <input type=\"radio\" name=\"categorie_id\"
                                                           id=\"cat_{{ categorie.id }}\"
                                                           value=\"{{ categorie.id }}\"
                                                           class=\"d-none cat-radio\">
                                                    <label for=\"cat_{{ categorie.id }}\"
                                                           class=\"cat-option w-100 rounded-3 p-2 d-flex align-items-center gap-2\"
                                                           style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                        <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                             style=\"width:38px; height:38px; background: {{ categorie.color ?? '#F27438' }};\">
                                                            <i class=\"fas {{ categorie.icon ?? 'fa-folder' }} text-white small\"></i>
                                                        </div>
                                                        <span class=\"fw-bold small\" style=\"color: #26474E;\">{{ categorie.nom }}</span>
                                                    </label>
                                                </div>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>
                            {% else %}
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Category</label>
                                    <div class=\"row g-2\">
                                        {% for categorie in categories %}
                                            <div class=\"col-md-6\">
                                                <input type=\"radio\" name=\"categorie_id\"
                                                       id=\"cat_{{ categorie.id }}\"
                                                       value=\"{{ categorie.id }}\"
                                                       class=\"d-none cat-radio\">
                                                <label for=\"cat_{{ categorie.id }}\"
                                                       class=\"cat-option w-100 rounded-3 p-2 d-flex align-items-center gap-2\"
                                                       style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                    <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                         style=\"width:38px; height:38px; background: {{ categorie.color ?? '#F27438' }};\">
                                                        <i class=\"fas {{ categorie.icon ?? 'fa-folder' }} text-white small\"></i>
                                                    </div>
                                                    <span class=\"fw-bold small\" style=\"color: #26474E;\">{{ categorie.nom }}</span>
                                                </label>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if errors is defined %}
    {% for error in errors %}
        {% if error.propertyPath == 'categorie' %}
            <div class=\"text-danger small mt-1\">{{ error.message }}</div>
        {% endif %}
    {% endfor %}
{% endif %}

                           {# Amount — FIXED #}
<div class=\"mb-3\">
    <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
        Amount <span class=\"text-muted fw-normal\">({{ wallet.devise }})</span>
    </label>
    <div class=\"input-group\">
        <span class=\"input-group-text\"
              style=\"background: #e8f5f5; border-color: #76CDCD; color: #26474E;\">
            <i class=\"fas fa-money-bill-wave\"></i>
        </span>
        <input type=\"number\" name=\"montant\" id=\"montantInput\"
               class=\"form-control\"
               placeholder=\"Enter amount\"
               style=\"border-color: #76CDCD;\">
    </div>
    {% if errors is defined %}
        {% for error in errors %}
            {% if error.propertyPath == 'montant' %}
                <div class=\"text-danger small mt-1\">{{ error.message }}</div>
            {% endif %}
        {% endfor %}
    {% endif %}
</div>
{# Currency Converter #}
<div class=\"mb-3\">
    <div class=\"rounded-4 p-3\" style=\"background: #f8f9fa; border: 1px solid #e0e0e0;\">
        <label class=\"form-label fw-bold small\" style=\"color: #26474E;\">
            <i class=\"fas fa-exchange-alt me-1\" style=\"color: #F27438;\"></i>Currency Converter
        </label>

        <div class=\"row g-2 mb-2\">
            {# Amount to convert #}
            <div class=\"col-4\">
                <input type=\"number\" id=\"convertAmount\" class=\"form-control form-control-sm\"
                       placeholder=\"Amount\" step=\"0.01\" style=\"border-color: #76CDCD;\">
            </div>

            {# From currency #}
          <div class=\"col-3\">
    <select id=\"fromCurrency\" class=\"form-select form-select-sm\"
            style=\"border-color: #76CDCD; color: #26474E; background-color: #f8f9fa;\">
        <option value=\"\" style=\"color: #26474E;\">From</option>
    </select>
</div>
            {# Arrow #}
            <div class=\"col-1 d-flex align-items-center justify-content-center\">
                <i class=\"fas fa-arrow-right\" style=\"color: #F27438;\"></i>
            </div>

            {# To currency (wallet currency, readonly) #}
            <div class=\"col-4\">
                <input type=\"text\" id=\"toCurrency\" class=\"form-control form-control-sm\"
                       value=\"{{ wallet.devise }}\" readonly
                       style=\"border-color: #76CDCD; background: #e8f5f5; font-weight: bold; color: #26474E;\">
            </div>
        </div>

        {# Convert button #}
        <div class=\"d-flex gap-2 align-items-center\">
            <button type=\"button\" class=\"btn btn-sm px-3\"
                    onclick=\"convertCurrency()\"
                    style=\"background: #F27438; color: white; border-radius: 10px;\">
                <i class=\"fas fa-calculator me-1\"></i>Convert
            </button>

            {# Result #}
            <div id=\"conversionResult\" style=\"display: none;\"
                 class=\"flex-fill d-flex align-items-center justify-content-between rounded-3 p-2\"
                 style=\"background: white;\">
                <span id=\"conversionText\" class=\"small fw-bold\" style=\"color: #26474E;\"></span>
                <button type=\"button\" class=\"btn btn-sm px-3\"
                        onclick=\"useConvertedAmount()\"
                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                    <i class=\"fas fa-check me-1\"></i>Use
                </button>
            </div>

            {# Loading #}
            <div id=\"conversionLoading\" style=\"display: none;\">
                <span class=\"spinner-border spinner-border-sm\" style=\"color: #F27438;\"></span>
                <span class=\"small text-muted ms-1\">Converting...</span>
            </div>

            {# Error #}
            <div id=\"conversionError\" style=\"display: none;\" class=\"small text-danger\"></div>
        </div>
    </div>
</div>
                            {# Description #}
                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Description <span class=\"text-muted fw-normal\">(optional)</span>
                                </label>
                                <textarea name=\"description\"
                                          class=\"form-control\"
                                          placeholder=\"Add a note...\"
                                          rows=\"2\"
                                          style=\"border-color: #76CDCD;\"></textarea>
                            </div>
{# Recurring Options — add after Description #}
<div class=\"mb-4\">
    <div class=\"form-check form-switch mb-3\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"recurringToggle\"
               name=\"isRecurring\" value=\"1\" onchange=\"toggleRecurringOptions()\">
        <label class=\"form-check-label fw-bold\" for=\"recurringToggle\" style=\"color: #26474E;\">
            <i class=\"fas fa-sync-alt me-1\" style=\"color: #F27438;\"></i>Make this recurring
        </label>
    </div>

    <div id=\"recurringOptions\" style=\"display: none;\">
        <div class=\"rounded-4 p-3\" style=\"background: #fff3ee; border: 1px solid #F27438;\">
            {# Frequency #}
            <div class=\"mb-3\">
                <label class=\"form-label fw-bold small\" style=\"color: #26474E;\">Frequency</label>
                <div class=\"d-flex gap-2 flex-wrap\">
                    {% set frequencies = {daily: 'fa-sun', weekly: 'fa-calendar-week', monthly: 'fa-calendar-alt', yearly: 'fa-calendar'} %}
                    {% for freq, icon in frequencies %}
                        <div class=\"flex-fill\">
                            <input type=\"radio\" name=\"frequency\" id=\"freq_{{ freq }}\" value=\"{{ freq }}\" class=\"d-none freq-radio\">
                            <label for=\"freq_{{ freq }}\" class=\"freq-option w-100 text-center p-2 rounded-3\"
                                   style=\"border: 2px solid #e0e0e0; cursor: pointer; background: white;\">
                                <i class=\"fas {{ icon }} small\" style=\"color: #26474E;\"></i>
                                <p class=\"mb-0 fw-bold small\" style=\"color: #26474E;\">{{ freq | capitalize }}</p>
                            </label>
                        </div>
                    {% endfor %}
                </div>
            </div>

            {# End Date #}
            <div class=\"mb-0\">
                <label class=\"form-label fw-bold small\" style=\"color: #26474E;\">
                    End Date <span class=\"text-muted fw-normal\">(optional)</span>
                </label>
                <input type=\"date\" name=\"endDate\" class=\"form-control form-control-sm\" style=\"border-color: #76CDCD;\">
                <small class=\"text-muted\">Leave empty for no end date</small>
            </div>
        </div>
    </div>
</div>
                            <hr class=\"my-3\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"{{ path('app_transaction_new_step2') }}\"
                                   class=\"btn px-4\"
                                   style=\"background: #f5f5f5; color: #26474E; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Back
                                </a>
                                <button type=\"submit\" class=\"btn px-4\"
                                        style=\"background: {{ type == 'income' ? '#e8f5e9' : '#fde8e8' }};
                                               color: {{ type == 'income' ? '#2d6a4f' : '#c0392b' }};
                                               border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>
                                    Add {{ type == 'income' ? 'Income' : 'Expense' }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .cat-radio:checked + .cat-option {
        border-color: #F27438 !important;
        background: #fff3ee;
    }
    .cat-option:hover { border-color: #F27438 !important; background: #fff8f5; }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
    .freq-radio:checked + .freq-option {
        border-color: #F27438 !important;
        background: #fff3ee !important;
    }
    .freq-option:hover {
        border-color: #F27438 !important;
    }
    #fromCurrency {
    color: #26474E !important;
    background-color: #f8f9fa !important;
}
#fromCurrency option {
    color: #26474E;
    background-color: white;
    padding: 4px;

}

</style>
<script>
function validateTransaction() {
    const type = document.getElementById('transactionType').value;
    const montant = parseFloat(document.getElementById('montantInput').value);
    const walletSolde = parseFloat(document.getElementById('walletSolde').value);
    const walletDevise = document.getElementById('walletDevise').value;
    const walletPays = document.getElementById('walletPays').value;
    const errorDiv = document.getElementById('walletError');

    // Hide previous error
    errorDiv.style.display = 'none';

    // ❌ Check 1 — Wallet balance exceeded — BLOCK
    if (type === 'depense' && montant > walletSolde) {
        document.getElementById('walletErrorMsg').innerHTML =
            'Insufficient balance! Your wallet \"<strong>' + walletPays + '</strong>\" has only <strong>' +
            walletSolde.toFixed(2) + ' ' + walletDevise + '</strong>. Please enter a smaller amount.';
        errorDiv.style.display = 'block';
        errorDiv.scrollIntoView({ behavior: 'smooth' });
        return false;
    }

    // ⚠️ Check 2 — Budget exceeded — confirm dialog
    if (type === 'depense') {
        const budgetsDataEl = document.getElementById('budgetsData');
        if (budgetsDataEl && budgetsDataEl.value && budgetsDataEl.value !== '[]') {
            const budgetsData = JSON.parse(budgetsDataEl.value);
            const selectedCat = document.querySelector('input[name=\"categorie_id\"]:checked');

            if (selectedCat) {
                const catId = selectedCat.value;
                const budget = budgetsData[catId];

                if (budget) {
                    const newTotal = parseFloat(budget.totalSpent) + montant;
                    if (newTotal > parseFloat(budget.montantMax)) {
                        const remaining = Math.max(0, parseFloat(budget.remaining)).toFixed(2);
                        const confirmed = confirm(
                            '⚠️ Budget Limit Exceeded!\\n\\n' +
                            'Budget limit: ' + parseFloat(budget.montantMax).toFixed(2) + ' ' + walletDevise + '\\n' +
                            'Already spent: ' + parseFloat(budget.totalSpent).toFixed(2) + ' ' + walletDevise + '\\n' +
                            'Remaining: ' + remaining + ' ' + walletDevise + '\\n\\n' +
                            'Do you still want to add this transaction?'
                        );
                        if (!confirmed) return false;
                    }
                }
            }
        }
    }

    return true;
}
function toggleRecurringOptions() {
    const toggle = document.getElementById('recurringToggle');
    const options = document.getElementById('recurringOptions');
    options.style.display = toggle.checked ? 'block' : 'none';
}
let lastConvertedAmount = 0;

async function loadCurrencies() {
    try {
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        const data = await response.json();

        if (data.rates) {
            const select = document.getElementById('fromCurrency');
            const currencies = Object.keys(data.rates).sort();

            currencies.forEach(currency => {
                const option = document.createElement('option');
                option.value = currency;
                option.textContent = currency;
                option.style.color = '#26474E';
                select.appendChild(option);
            });

            // Check wallet currency
            const walletCurrency = document.getElementById('toCurrency').value.toUpperCase().trim();
            if (!data.rates[walletCurrency]) {
                console.warn('Wallet currency \"' + walletCurrency + '\" not found in API');
            }
        }
    } catch (error) {
        console.error('Error loading currencies:', error);
    }
}

async function convertCurrency() {
    const amount = parseFloat(document.getElementById('convertAmount').value);
    const from = document.getElementById('fromCurrency').value;
    const to = document.getElementById('toCurrency').value.toUpperCase().trim();
    const resultDiv = document.getElementById('conversionResult');
    const loadingDiv = document.getElementById('conversionLoading');
    const errorDiv = document.getElementById('conversionError');
    const resultText = document.getElementById('conversionText');

    resultDiv.style.display = 'none';
    errorDiv.style.display = 'none';

    if (!amount || isNaN(amount) || amount <= 0) {
        errorDiv.textContent = 'Please enter a valid amount';
        errorDiv.style.display = 'block';
        return;
    }
    if (!from) {
        errorDiv.textContent = 'Please select a source currency';
        errorDiv.style.display = 'block';
        return;
    }
    if (from === to) {
        lastConvertedAmount = amount;
        resultText.innerHTML = amount.toFixed(2) + ' ' + from + ' = <strong>' + amount.toFixed(2) + ' ' + to + '</strong>';
        resultDiv.style.display = 'flex';
        return;
    }

    loadingDiv.style.display = 'block';

    try {
        // Map common non-standard codes
        const currencyMap = { 'DT': 'TND', 'DA': 'DZD', 'LE': 'EGP', 'LD': 'LYD' };
        const targetCode = currencyMap[to] || to;

        const response = await fetch('https://api.exchangerate-api.com/v4/latest/' + from);
        const data = await response.json();

        if (data.rates && data.rates[targetCode]) {
            const rate = data.rates[targetCode];
            const converted = amount * rate;
            lastConvertedAmount = converted;

            resultText.innerHTML =
                amount.toFixed(2) + ' ' + from +
                ' = <strong>' + converted.toFixed(2) + ' ' + to + '</strong>' +
                ' <span class=\"text-muted small\">(1 ' + from + ' = ' + rate.toFixed(4) + ' ' + to + ')</span>';
            resultDiv.style.display = 'flex';
        } else {
            errorDiv.textContent = 'Currency \"' + to + '\" not supported. Try a standard code like TND, EUR, USD.';
            errorDiv.style.display = 'block';
        }
    } catch (error) {
        errorDiv.textContent = 'Conversion failed. Check your internet connection.';
        errorDiv.style.display = 'block';
    }

    loadingDiv.style.display = 'none';
}

function useConvertedAmount() {
    document.getElementById('montantInput').value = lastConvertedAmount.toFixed(2);
    const input = document.getElementById('montantInput');
    input.style.background = '#e8f5e9';
    setTimeout(() => { input.style.background = 'white'; }, 1000);
}

document.addEventListener('DOMContentLoaded', loadCurrencies);
</script>

{% endblock %}", "management/transaction/step3.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\transaction\\step3.html.twig");
    }
}
