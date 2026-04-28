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
class __TwigTemplate_f7d1a5bb6ca52255c5d35c9e2dea2f75 extends Template
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

                        <form method=\"post\"
                              action=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_new_step3");
        yield "\"
                              id=\"transactionForm\"
                              onsubmit=\"return validateTransaction()\">

                            ";
        // line 111
        yield "                            <input type=\"hidden\" id=\"walletSolde\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 111, $this->source); })()), "solde", [], "any", false, false, false, 111), "html", null, true);
        yield "\">
                            <input type=\"hidden\" id=\"walletDevise\" value=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 112, $this->source); })()), "devise", [], "any", false, false, false, 112), "html", null, true);
        yield "\">
                            <input type=\"hidden\" id=\"walletPays\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 113, $this->source); })()), "pays", [], "any", false, false, false, 113), "html", null, true);
        yield "\">
                            <input type=\"hidden\" id=\"transactionType\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "\">
                            <input type=\"hidden\" id=\"budgetsData\" value=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["budgetsData"]) || array_key_exists("budgetsData", $context) ? $context["budgetsData"] : (function () { throw new RuntimeError('Variable "budgetsData" does not exist.', 115, $this->source); })())), "html", null, true);
        yield "\">

                            ";
        // line 118
        yield "                            ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 118, $this->source); })()) == "depense")) {
            // line 119
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Category</label>
                                    ";
            // line 121
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 121, $this->source); })()))) {
                // line 122
                yield "                                        <div class=\"rounded-3 p-3\" style=\"background: #fff3ee; border-left: 4px solid #F27438;\">
                                            <p class=\"mb-0 small\" style=\"color: #26474E;\">
                                                <i class=\"fas fa-info-circle me-2\" style=\"color: #F27438;\"></i>
                                                No budgets found for this wallet.
                                                <a href=\"";
                // line 126
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_new_step1");
                yield "\" style=\"color: #F27438;\">Create a budget first</a>
                                            </p>
                                        </div>
                                    ";
            } else {
                // line 130
                yield "                                        <div class=\"row g-2\">
                                            ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 131, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 132
                    yield "                                                <div class=\"col-md-6\">
                                                    <input type=\"radio\" name=\"categorie_id\"
                                                           id=\"cat_";
                    // line 134
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 134), "html", null, true);
                    yield "\"
                                                           value=\"";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 135), "html", null, true);
                    yield "\"
                                                           class=\"d-none cat-radio\">
                                                    <label for=\"cat_";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 137), "html", null, true);
                    yield "\"
                                                           class=\"cat-option w-100 rounded-3 p-2 d-flex align-items-center gap-2\"
                                                           style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                        <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                             style=\"width:38px; height:38px; background: ";
                    // line 141
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", true, true, false, 141) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 141)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 141), "html", null, true)) : ("#F27438"));
                    yield ";\">
                                                            <i class=\"fas ";
                    // line 142
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", true, true, false, 142) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 142)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 142), "html", null, true)) : ("fa-folder"));
                    yield " text-white small\"></i>
                                                        </div>
                                                        <span class=\"fw-bold small\" style=\"color: #26474E;\">";
                    // line 144
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 144), "html", null, true);
                    yield "</span>
                                                    </label>
                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                yield "                                        </div>
                                    ";
            }
            // line 150
            yield "                                </div>
                            ";
        } else {
            // line 152
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Category</label>
                                    <div class=\"row g-2\">
                                        ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 155, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 156
                yield "                                            <div class=\"col-md-6\">
                                                <input type=\"radio\" name=\"categorie_id\"
                                                       id=\"cat_";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 158), "html", null, true);
                yield "\"
                                                       value=\"";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 159), "html", null, true);
                yield "\"
                                                       class=\"d-none cat-radio\">
                                                <label for=\"cat_";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 161), "html", null, true);
                yield "\"
                                                       class=\"cat-option w-100 rounded-3 p-2 d-flex align-items-center gap-2\"
                                                       style=\"border: 2px solid #e0e0e0; cursor: pointer; transition: all 0.2s;\">
                                                    <div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\"
                                                         style=\"width:38px; height:38px; background: ";
                // line 165
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", true, true, false, 165) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 165)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 165), "html", null, true)) : ("#F27438"));
                yield ";\">
                                                        <i class=\"fas ";
                // line 166
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", true, true, false, 166) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 166)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 166), "html", null, true)) : ("fa-folder"));
                yield " text-white small\"></i>
                                                    </div>
                                                    <span class=\"fw-bold small\" style=\"color: #26474E;\">";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 168), "html", null, true);
                yield "</span>
                                                </label>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "                                    </div>
                                </div>
                            ";
        }
        // line 175
        yield "
                            ";
        // line 177
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">
                                    Amount <span class=\"text-muted fw-normal\">(";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new RuntimeError('Variable "wallet" does not exist.', 179, $this->source); })()), "devise", [], "any", false, false, false, 179), "html", null, true);
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
                                           step=\"0.01\" min=\"0.01\" required
                                           style=\"border-color: #76CDCD;\">
                                </div>
                            </div>

                            ";
        // line 195
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

                            <hr class=\"my-3\">

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"";
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_new_step2");
        yield "\"
                                   class=\"btn px-4\"
                                   style=\"background: #f5f5f5; color: #26474E; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Back
                                </a>
                                <button type=\"submit\" class=\"btn px-4\"
                                        style=\"background: ";
        // line 215
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 215, $this->source); })()) == "income")) ? ("#e8f5e9") : ("#fde8e8"));
        yield ";
                                               color: ";
        // line 216
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 216, $this->source); })()) == "income")) ? ("#2d6a4f") : ("#c0392b"));
        yield ";
                                               border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>
                                    Add ";
        // line 219
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 219, $this->source); })()) == "income")) ? ("Income") : ("Expense"));
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
        return array (  450 => 219,  444 => 216,  440 => 215,  431 => 209,  415 => 195,  397 => 179,  393 => 177,  390 => 175,  385 => 172,  375 => 168,  370 => 166,  366 => 165,  359 => 161,  354 => 159,  350 => 158,  346 => 156,  342 => 155,  337 => 152,  333 => 150,  329 => 148,  319 => 144,  314 => 142,  310 => 141,  303 => 137,  298 => 135,  294 => 134,  290 => 132,  286 => 131,  283 => 130,  276 => 126,  270 => 122,  268 => 121,  264 => 119,  261 => 118,  256 => 115,  252 => 114,  248 => 113,  244 => 112,  239 => 111,  232 => 106,  218 => 94,  210 => 88,  206 => 87,  202 => 86,  191 => 80,  185 => 77,  178 => 72,  168 => 64,  160 => 59,  152 => 54,  115 => 19,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
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

                        <form method=\"post\"
                              action=\"{{ path('app_transaction_new_step3') }}\"
                              id=\"transactionForm\"
                              onsubmit=\"return validateTransaction()\">

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

                            {# Amount #}
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
                                           step=\"0.01\" min=\"0.01\" required
                                           style=\"border-color: #76CDCD;\">
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
</script>

{% endblock %}", "management/transaction/step3.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\management\\transaction\\step3.html.twig");
    }
}
