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

/* loan/investment/pdf_upload.html.twig */
class __TwigTemplate_0be27d1b08bf3cab573ed60048bc14f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/investment/pdf_upload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/investment/pdf_upload.html.twig"));

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

        yield "Upload Investment PDF - Fin-Dinari";
        
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Upload Investment PDF</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\">My Investments</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_pdf_upload");
        yield "\">Upload PDF</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"shadow rounded p-5 bg-white\">
                    
                    ";
        // line 29
        if ((($tmp =  !(isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                        <div class=\"text-center mb-4\">
                            <div class=\"upload-icon mb-3\">
                                <i class=\"fas fa-file-pdf fa-4x text-danger\"></i>
                            </div>
                            <h3 class=\"text-primary\">Import Investment from PDF</h3>
                            <p class=\"text-secondary\">Upload a PDF contract and we'll automatically fill the investment details for you!</p>
                        </div>
                        
                        ";
            // line 38
            if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>
                                ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 44
            yield "                        
                        <form method=\"post\" enctype=\"multipart/form-data\" action=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_pdf_upload");
            yield "\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("pdf_upload"), "html", null, true);
            yield "\">
                            
                            <div class=\"upload-area mb-4\" id=\"uploadArea\">
                                <div class=\"text-center p-5 border-2 border-dashed rounded-4 bg-light\">
                                    <i class=\"fas fa-cloud-upload-alt fa-3x text-primary mb-3\"></i>
                                    <p class=\"mb-2\">Drag & drop your PDF file here or click to browse</p>
                                    <small class=\"text-muted\">Supported format: PDF (Max 5MB)</small>
                                    
                                    <input type=\"file\" id=\"pdfFileInput\" name=\"pdf_file\" accept=\"application/pdf\" class=\"d-none\">
                                    
                                    <button type=\"button\" id=\"chooseFileBtn\" class=\"btn btn-primary mt-3\">
                                        <i class=\"fas fa-folder-open me-2\"></i>Choose File
                                    </button>
                                </div>
                                <div id=\"fileName\" class=\"text-center mt-2 text-success d-none\">
                                    <i class=\"fas fa-check-circle\"></i> <span></span>
                                </div>
                            </div>
                            
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                                    <i class=\"fas fa-upload me-2\"></i>Extract & Preview
                                </button>
                            </div>
                        </form>
                        
                    ";
        } else {
            // line 73
            yield "                        <!-- Confirmation Section -->
                        <div class=\"text-center mb-4\">
                            <div class=\"upload-icon mb-3\">
                                <i class=\"fas fa-check-circle fa-4x text-success\"></i>
                            </div>
                            <h3 class=\"text-primary\">Data Extracted Successfully!</h3>
                            <p class=\"text-secondary\">Please review the extracted information below:</p>
                        </div>
                        
                        <div class=\"card border-success mb-4\">
                            <div class=\"card-header bg-primary text-white\">
                                <i class=\"fas fa-file-invoice me-2\"></i> Extracted Investment Data
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Amount:</div>
                                    <div class=\"col-md-8\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["confirmData"] ?? null), "amount", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 89, $this->source); })()), "amount", [], "any", false, false, false, 89), 0)) : (0)), 2), "html", null, true);
            yield " DT</div>
                                </div>
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Obligation:</div>
                                    <div class=\"col-md-8\">
                                        ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["confirmData"] ?? null), "obligationName", [], "any", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 94, $this->source); })()), "obligationName", [], "any", false, false, false, 94), "Unknown")) : ("Unknown")), "html", null, true);
            yield "
                                        ";
            // line 95
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 95, $this->source); })()), "obligation", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                                            <span class=\"badge bg-success ms-2\">✓ Matched</span>
                                        ";
            } else {
                // line 98
                yield "                                            <span class=\"badge bg-warning ms-2\">⚠ Not found - will create new</span>
                                        ";
            }
            // line 100
            yield "                                    </div>
                                </div>
                                ";
            // line 102
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["confirmData"] ?? null), "interestRate", [], "any", true, true, false, 102) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 102, $this->source); })()), "interestRate", [], "any", false, false, false, 102))) {
                // line 103
                yield "                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Interest Rate:</div>
                                    <div class=\"col-md-8\">";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 105, $this->source); })()), "interestRate", [], "any", false, false, false, 105), "html", null, true);
                yield "%</div>
                                </div>
                                ";
            }
            // line 108
            yield "                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Purchase Date:</div>
                                    <div class=\"col-md-8\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["confirmData"] ?? null), "dateAchat", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 110, $this->source); })()), "dateAchat", [], "any", false, false, false, 110), "Not found")) : ("Not found")), "html", null, true);
            yield "</div>
                                </div>
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Maturity Date:</div>
                                    <div class=\"col-md-8\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["confirmData"] ?? null), "dateMaturite", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 114, $this->source); })()), "dateMaturite", [], "any", false, false, false, 114), "Not found")) : ("Not found")), "html", null, true);
            yield "</div>
                                </div>
                                ";
            // line 116
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["confirmData"] ?? null), "duration", [], "any", true, true, false, 116) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 116, $this->source); })()), "duration", [], "any", false, false, false, 116))) {
                // line 117
                yield "                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Duration:</div>
                                    <div class=\"col-md-8\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 119, $this->source); })()), "duration", [], "any", false, false, false, 119), "html", null, true);
                yield " months</div>
                                </div>
                                ";
            }
            // line 122
            yield "                            </div>
                        </div>
                        
                        <form method=\"get\" action=\"";
            // line 125
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_pdf_upload");
            yield "\">
                            <div class=\"row mb-4\">
                                <div class=\"col-md-6\">
                                    <label class=\"form-label fw-bold\">Select Wallet</label>
                                    <select name=\"walletId\" class=\"form-select\" required>
                                        <option value=\"\">-- Choose a wallet --</option>
                                        ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
                // line 132
                yield "                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 132), "html", null, true);
                yield "\">
                                                ";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "pays", [], "any", false, false, false, 133), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "solde", [], "any", false, false, false, 133), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 133), "html", null, true);
                yield "
                                            </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['wallet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            yield "                                    </select>
                                </div>
                                <div class=\"col-md-6\">
                                    <label class=\"form-label fw-bold\">Select Obligation</label>
                                    <select name=\"obligationId\" class=\"form-select\" required>
                                        <option value=\"\">-- Choose an obligation --</option>
                                        ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["obligations"]) || array_key_exists("obligations", $context) ? $context["obligations"] : (function () { throw new RuntimeError('Variable "obligations" does not exist.', 142, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obligation"]) {
                // line 143
                yield "                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "idObligation", [], "any", false, false, false, 143), "html", null, true);
                yield "\">
                                                ";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "nom", [], "any", false, false, false, 144), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obligation"], "tauxInteret", [], "any", false, false, false, 144), "html", null, true);
                yield "%
                                            </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['obligation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            yield "                                        <option value=\"new\">+ Create new obligation: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["confirmData"] ?? null), "obligationName", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["confirmData"]) || array_key_exists("confirmData", $context) ? $context["confirmData"] : (function () { throw new RuntimeError('Variable "confirmData" does not exist.', 147, $this->source); })()), "obligationName", [], "any", false, false, false, 147), "New Obligation")) : ("New Obligation")), "html", null, true);
            yield "</option>
                                    </select>
                                </div>
                            </div>
                            
                            <input type=\"hidden\" name=\"confirm\" value=\"yes\">
                            <div class=\"d-flex justify-content-between gap-3\">
                                <a href=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_pdf_upload");
            yield "\" class=\"btn btn-secondary\">
                                    <i class=\"fas fa-times me-2\"></i>Cancel
                                </a>
                                <button type=\"submit\" class=\"btn btn-success\">
                                    <i class=\"fas fa-check me-2\"></i>Confirm & Create Investment
                                </button>
                            </div>
                        </form>
                    ";
        }
        // line 163
        yield "                    
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .border-2 {
        border-width: 2px !important;
    }
    .border-dashed {
        border-style: dashed !important;
    }
    .upload-area {
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .upload-area .border-dashed {
        transition: all 0.3s ease;
    }
    .upload-area:hover .border-dashed {
        border-color: #2d6a4f !important;
        background: #e8f5e9 !important;
    }
    .btn-primary {
        background-color: #2d6a4f;
        border-color: #2d6a4f;
    }
    .btn-primary:hover {
        background-color: #1b4d3b;
        border-color: #1b4d3b;
    }
    .btn-outline-primary {
        color: #2d6a4f;
        border-color: #2d6a4f;
    }
    .btn-outline-primary:hover {
        background-color: #2d6a4f;
        border-color: #2d6a4f;
        color: white;
    }
    .bg-tertiary {
        background-color: #e8f5e9 !important;
    }
    .text-primary {
        color: #2d6a4f !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chooseFileBtn = document.getElementById('chooseFileBtn');
        const fileInput = document.getElementById('pdfFileInput');
        const uploadArea = document.getElementById('uploadArea');
        const fileNameDiv = document.getElementById('fileName');
        const fileNameSpan = fileNameDiv?.querySelector('span');
        
        // Button click - open file explorer
        if (chooseFileBtn) {
            chooseFileBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                fileInput.click();
            });
        }
        
        // Click on upload area - also open file explorer
        if (uploadArea) {
            uploadArea.addEventListener('click', function(e) {
                // Don't trigger if clicking on the button itself (already handled)
                if (e.target.id !== 'chooseFileBtn' && !e.target.closest('#chooseFileBtn')) {
                    fileInput.click();
                }
            });
        }
        
        // When file is selected
        if (fileInput) {
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file && fileNameSpan && fileNameDiv) {
                    fileNameSpan.textContent = file.name;
                    fileNameDiv.classList.remove('d-none');
                }
            });
        }
        
        // Drag and drop
        if (uploadArea) {
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                const dashedBorder = this.querySelector('.border-dashed');
                if (dashedBorder) {
                    dashedBorder.style.borderColor = '#2d6a4f';
                    dashedBorder.style.background = '#e8f5e9';
                }
            });
            
            uploadArea.addEventListener('dragleave', function(e) {
                const dashedBorder = this.querySelector('.border-dashed');
                if (dashedBorder) {
                    dashedBorder.style.borderColor = '';
                    dashedBorder.style.background = '';
                }
            });
            
            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                const dashedBorder = this.querySelector('.border-dashed');
                if (dashedBorder) {
                    dashedBorder.style.borderColor = '';
                    dashedBorder.style.background = '';
                }
                
                const file = e.dataTransfer.files[0];
                if (file && file.type === 'application/pdf') {
                    // Set the file to the input
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    fileInput.files = dataTransfer.files;
                    
                    // Show file name
                    if (fileNameSpan && fileNameDiv) {
                        fileNameSpan.textContent = file.name;
                        fileNameDiv.classList.remove('d-none');
                    }
                } else if (file) {
                    alert('Please upload a PDF file');
                }
            });
        }
    });
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
        return "loan/investment/pdf_upload.html.twig";
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
        return array (  369 => 163,  357 => 154,  346 => 147,  335 => 144,  330 => 143,  326 => 142,  318 => 136,  305 => 133,  300 => 132,  296 => 131,  287 => 125,  282 => 122,  276 => 119,  272 => 117,  270 => 116,  265 => 114,  258 => 110,  254 => 108,  248 => 105,  244 => 103,  242 => 102,  238 => 100,  234 => 98,  230 => 96,  228 => 95,  224 => 94,  216 => 89,  198 => 73,  168 => 46,  164 => 45,  161 => 44,  155 => 41,  151 => 39,  149 => 38,  139 => 30,  137 => 29,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Upload Investment PDF - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Upload Investment PDF</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_investment_index') }}\">My Investments</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_investment_pdf_upload') }}\">Upload PDF</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"shadow rounded p-5 bg-white\">
                    
                    {% if not confirmData %}
                        <div class=\"text-center mb-4\">
                            <div class=\"upload-icon mb-3\">
                                <i class=\"fas fa-file-pdf fa-4x text-danger\"></i>
                            </div>
                            <h3 class=\"text-primary\">Import Investment from PDF</h3>
                            <p class=\"text-secondary\">Upload a PDF contract and we'll automatically fill the investment details for you!</p>
                        </div>
                        
                        {% if error %}
                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>
                                {{ error }}
                            </div>
                        {% endif %}
                        
                        <form method=\"post\" enctype=\"multipart/form-data\" action=\"{{ path('app_investment_pdf_upload') }}\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('pdf_upload') }}\">
                            
                            <div class=\"upload-area mb-4\" id=\"uploadArea\">
                                <div class=\"text-center p-5 border-2 border-dashed rounded-4 bg-light\">
                                    <i class=\"fas fa-cloud-upload-alt fa-3x text-primary mb-3\"></i>
                                    <p class=\"mb-2\">Drag & drop your PDF file here or click to browse</p>
                                    <small class=\"text-muted\">Supported format: PDF (Max 5MB)</small>
                                    
                                    <input type=\"file\" id=\"pdfFileInput\" name=\"pdf_file\" accept=\"application/pdf\" class=\"d-none\">
                                    
                                    <button type=\"button\" id=\"chooseFileBtn\" class=\"btn btn-primary mt-3\">
                                        <i class=\"fas fa-folder-open me-2\"></i>Choose File
                                    </button>
                                </div>
                                <div id=\"fileName\" class=\"text-center mt-2 text-success d-none\">
                                    <i class=\"fas fa-check-circle\"></i> <span></span>
                                </div>
                            </div>
                            
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                                    <i class=\"fas fa-upload me-2\"></i>Extract & Preview
                                </button>
                            </div>
                        </form>
                        
                    {% else %}
                        <!-- Confirmation Section -->
                        <div class=\"text-center mb-4\">
                            <div class=\"upload-icon mb-3\">
                                <i class=\"fas fa-check-circle fa-4x text-success\"></i>
                            </div>
                            <h3 class=\"text-primary\">Data Extracted Successfully!</h3>
                            <p class=\"text-secondary\">Please review the extracted information below:</p>
                        </div>
                        
                        <div class=\"card border-success mb-4\">
                            <div class=\"card-header bg-primary text-white\">
                                <i class=\"fas fa-file-invoice me-2\"></i> Extracted Investment Data
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Amount:</div>
                                    <div class=\"col-md-8\">{{ confirmData.amount|default(0)|number_format(2) }} DT</div>
                                </div>
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Obligation:</div>
                                    <div class=\"col-md-8\">
                                        {{ confirmData.obligationName|default('Unknown') }}
                                        {% if confirmData.obligation %}
                                            <span class=\"badge bg-success ms-2\">✓ Matched</span>
                                        {% else %}
                                            <span class=\"badge bg-warning ms-2\">⚠ Not found - will create new</span>
                                        {% endif %}
                                    </div>
                                </div>
                                {% if confirmData.interestRate is defined and confirmData.interestRate %}
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Interest Rate:</div>
                                    <div class=\"col-md-8\">{{ confirmData.interestRate }}%</div>
                                </div>
                                {% endif %}
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Purchase Date:</div>
                                    <div class=\"col-md-8\">{{ confirmData.dateAchat|default('Not found') }}</div>
                                </div>
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Maturity Date:</div>
                                    <div class=\"col-md-8\">{{ confirmData.dateMaturite|default('Not found') }}</div>
                                </div>
                                {% if confirmData.duration is defined and confirmData.duration %}
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-4 fw-bold\">Duration:</div>
                                    <div class=\"col-md-8\">{{ confirmData.duration }} months</div>
                                </div>
                                {% endif %}
                            </div>
                        </div>
                        
                        <form method=\"get\" action=\"{{ path('app_investment_pdf_upload') }}\">
                            <div class=\"row mb-4\">
                                <div class=\"col-md-6\">
                                    <label class=\"form-label fw-bold\">Select Wallet</label>
                                    <select name=\"walletId\" class=\"form-select\" required>
                                        <option value=\"\">-- Choose a wallet --</option>
                                        {% for wallet in wallets %}
                                            <option value=\"{{ wallet.id }}\">
                                                {{ wallet.pays }} - {{ wallet.solde|number_format(2) }} {{ wallet.devise }}
                                            </option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"col-md-6\">
                                    <label class=\"form-label fw-bold\">Select Obligation</label>
                                    <select name=\"obligationId\" class=\"form-select\" required>
                                        <option value=\"\">-- Choose an obligation --</option>
                                        {% for obligation in obligations %}
                                            <option value=\"{{ obligation.idObligation }}\">
                                                {{ obligation.nom }} - {{ obligation.tauxInteret }}%
                                            </option>
                                        {% endfor %}
                                        <option value=\"new\">+ Create new obligation: {{ confirmData.obligationName|default('New Obligation') }}</option>
                                    </select>
                                </div>
                            </div>
                            
                            <input type=\"hidden\" name=\"confirm\" value=\"yes\">
                            <div class=\"d-flex justify-content-between gap-3\">
                                <a href=\"{{ path('app_investment_pdf_upload') }}\" class=\"btn btn-secondary\">
                                    <i class=\"fas fa-times me-2\"></i>Cancel
                                </a>
                                <button type=\"submit\" class=\"btn btn-success\">
                                    <i class=\"fas fa-check me-2\"></i>Confirm & Create Investment
                                </button>
                            </div>
                        </form>
                    {% endif %}
                    
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .border-2 {
        border-width: 2px !important;
    }
    .border-dashed {
        border-style: dashed !important;
    }
    .upload-area {
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .upload-area .border-dashed {
        transition: all 0.3s ease;
    }
    .upload-area:hover .border-dashed {
        border-color: #2d6a4f !important;
        background: #e8f5e9 !important;
    }
    .btn-primary {
        background-color: #2d6a4f;
        border-color: #2d6a4f;
    }
    .btn-primary:hover {
        background-color: #1b4d3b;
        border-color: #1b4d3b;
    }
    .btn-outline-primary {
        color: #2d6a4f;
        border-color: #2d6a4f;
    }
    .btn-outline-primary:hover {
        background-color: #2d6a4f;
        border-color: #2d6a4f;
        color: white;
    }
    .bg-tertiary {
        background-color: #e8f5e9 !important;
    }
    .text-primary {
        color: #2d6a4f !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chooseFileBtn = document.getElementById('chooseFileBtn');
        const fileInput = document.getElementById('pdfFileInput');
        const uploadArea = document.getElementById('uploadArea');
        const fileNameDiv = document.getElementById('fileName');
        const fileNameSpan = fileNameDiv?.querySelector('span');
        
        // Button click - open file explorer
        if (chooseFileBtn) {
            chooseFileBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                fileInput.click();
            });
        }
        
        // Click on upload area - also open file explorer
        if (uploadArea) {
            uploadArea.addEventListener('click', function(e) {
                // Don't trigger if clicking on the button itself (already handled)
                if (e.target.id !== 'chooseFileBtn' && !e.target.closest('#chooseFileBtn')) {
                    fileInput.click();
                }
            });
        }
        
        // When file is selected
        if (fileInput) {
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file && fileNameSpan && fileNameDiv) {
                    fileNameSpan.textContent = file.name;
                    fileNameDiv.classList.remove('d-none');
                }
            });
        }
        
        // Drag and drop
        if (uploadArea) {
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                const dashedBorder = this.querySelector('.border-dashed');
                if (dashedBorder) {
                    dashedBorder.style.borderColor = '#2d6a4f';
                    dashedBorder.style.background = '#e8f5e9';
                }
            });
            
            uploadArea.addEventListener('dragleave', function(e) {
                const dashedBorder = this.querySelector('.border-dashed');
                if (dashedBorder) {
                    dashedBorder.style.borderColor = '';
                    dashedBorder.style.background = '';
                }
            });
            
            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                const dashedBorder = this.querySelector('.border-dashed');
                if (dashedBorder) {
                    dashedBorder.style.borderColor = '';
                    dashedBorder.style.background = '';
                }
                
                const file = e.dataTransfer.files[0];
                if (file && file.type === 'application/pdf') {
                    // Set the file to the input
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    fileInput.files = dataTransfer.files;
                    
                    // Show file name
                    if (fileNameSpan && fileNameDiv) {
                        fileNameSpan.textContent = file.name;
                        fileNameDiv.classList.remove('d-none');
                    }
                } else if (file) {
                    alert('Please upload a PDF file');
                }
            });
        }
    });
</script>

{% endblock %}", "loan/investment/pdf_upload.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\loan\\investment\\pdf_upload.html.twig");
    }
}
