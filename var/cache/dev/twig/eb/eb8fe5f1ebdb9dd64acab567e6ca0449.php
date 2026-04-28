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

/* reclamation/edit_ticket.html.twig */
class __TwigTemplate_d6b7b1f902aa3f1f385d959146637909 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit_ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit_ticket.html.twig"));

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

        yield "Edit Ticket - FinDinari";
        
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
        yield "<style>
    .ticket-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        padding-top: 120px;
    }

    .page-title {
        font-size: 2.2rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 10px;
    }

    .page-subtitle {
        color: #6b7280;
        margin-bottom: 35px;
        font-size: 1rem;
    }

    .content-grid {
        display: grid;
        grid-template-columns: 1.8fr 1fr;
        gap: 40px;
    }

    @media (max-width: 992px) {
        .content-grid { grid-template-columns: 1fr; }
    }

    .form-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }

    .form-group {
        margin-bottom: 30px !important;
        position: relative !important;
    }

    .form-card label {
        display: block !important;
        position: static !important;
        transform: none !important;
        margin: 0 0 10px 0 !important;
        padding: 0 !important;
        font-size: 0.95rem !important;
        font-weight: 700 !important;
        color: #374151 !important;
        opacity: 1 !important;
        visibility: visible !important;
        width: auto !important;
    }

    .form-control, .form-select {
        display: block !important;
        width: 100% !important;
        padding: 14px 18px !important;
        border: 1.5px solid #e5e7eb !important;
        border-radius: 12px !important;
        font-size: 1rem !important;
        background-color: #f9fafb !important;
        color: #1f2937 !important;
    }

    .form-select option {
        color: #1f2937 !important;
        background-color: #fff !important;
    }

    .form-control:focus, .form-select:focus {
        border-color: #22c55e !important;
        background-color: #fff !important;
        box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.1) !important;
        outline: none !important;
    }

    .file-upload-area {
        border: 2px dashed #d1d5db;
        border-radius: 16px;
        padding: 30px;
        text-align: center;
        background: #f9fafb;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .file-upload-area:hover {
        border-color: #22c55e;
        background: #f0fdf4;
    }

    .btn-submit {
        background: #22c55e;
        color: white;
        border: none;
        padding: 16px 30px;
        border-radius: 14px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.2s ease;
        box-shadow: 0 4px 12px rgba(34, 197, 94, 0.2);
    }

    .btn-submit:hover {
        background: #16a34a;
        transform: translateY(-2px);
    }

    .btn-cancel {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 16px 30px;
        border-radius: 14px;
        border: 1.5px solid #e5e7eb;
        text-decoration: none;
        color: #6b7280;
        font-weight: 700;
        font-size: 1rem;
        transition: all 0.2s ease;
    }

    .btn-cancel:hover {
        background: #f9fafb;
        border-color: #d1d5db;
        color: #1f2937;
    }

    .sidebar-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 30px;
        position: sticky;
        top: 140px;
    }

    .sidebar-title {
        font-weight: 700;
        color: #111827;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sidebar-text {
        color: #4b5563;
        font-size: 0.95rem;
        line-height: 1.6;
    }
</style>

";
        // line 166
        yield "
<div class=\"ticket-container\">
    <div class=\"breadcrumb\">
        <a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"text-decoration:none; color:#6b7280;\">Home</a> &gt; 
        <a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support_center");
        yield "\" style=\"text-decoration:none; color:#6b7280;\">Support</a> &gt; 
        <a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_tickets");
        yield "\" style=\"text-decoration:none; color:#6b7280;\">My Tickets</a> &gt; 
        Edit Ticket
    </div>
    
    <h1 class=\"page-title\">Edit Ticket: ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 175, $this->source); })()), "titre", [], "any", false, false, false, 175), "html", null, true);
        yield "</h1>
    <p class=\"page-subtitle\">Update your request details. Note that status and priority can only be modified by the support team.</p>
    
    <div class=\"content-grid\">
        <div class=\"form-card\">
            ";
        // line 180
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), 'form_start', ["attr" => ["id" => "ticket-form", "novalidate" => "novalidate"]]);
        yield "
                
                <div class=\"form-group\">
                    ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "titre", [], "any", false, false, false, 183), 'label', ["label" => "Subject"]);
        yield "
                    ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "titre", [], "any", false, false, false, 184), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div style=\"color: #ef4444; font-size: 0.85rem; margin-top: 5px;\">";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "titre", [], "any", false, false, false, 185), 'errors');
        yield "</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "type", [], "any", false, false, false, 189), 'label', ["label" => "Category"]);
        yield "
                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "type", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    <div style=\"color: #ef4444; font-size: 0.85rem; margin-top: 5px;\">";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "type", [], "any", false, false, false, 191), 'errors');
        yield "</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "description", [], "any", false, false, false, 195), 'label', ["label" => "Description"]);
        yield "
                    ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "description", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => "form-control", "rows" => "6"]]);
        yield "
                    <div style=\"color: #ef4444; font-size: 0.85rem; margin-top: 5px;\">";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "description", [], "any", false, false, false, 197), 'errors');
        yield "</div>
                </div>
                
                <div class=\"form-group\">
                    <label>Update Attachment (Optional)</label>
                    ";
        // line 202
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 202, $this->source); })()), "imageUrl", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 203
            yield "                        <div style=\"margin-bottom: 20px; background: #f9fafb; padding: 15px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;\">
                            <img src=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/tickets/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 204, $this->source); })()), "imageUrl", [], "any", false, false, false, 204))), "html", null, true);
            yield "\" style=\"width: 80px; height: 80px; object-fit: cover; border-radius: 8px; border: 1px solid #e5e7eb;\">
                            <div>
                                <div style=\"font-size: 13px; font-weight: 700; color: #374151;\">Current File</div>
                                <div style=\"font-size: 12px; color: #6b7280;\">This image is currently attached to your ticket.</div>
                            </div>
                        </div>
                    ";
        }
        // line 211
        yield "                    
                    <div class=\"file-upload-area\" onclick=\"document.getElementById('";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "imageUrl", [], "any", false, false, false, 212), "vars", [], "any", false, false, false, 212), "id", [], "any", false, false, false, 212), "html", null, true);
        yield "').click();\">
                        <div style=\"font-size: 1.5rem; color: #9ca3af; margin-bottom: 10px;\"><i class=\"fas fa-upload\"></i></div>
                        <div style=\"font-size: 0.95rem; color: #4b5563;\"><span>Click to change</span> or drag & drop</div>
                        <div id=\"file-name-preview\" style=\"margin-top: 10px; font-weight: 700; color: #111827; font-size: 0.9rem;\"></div>
                    </div>
                    ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "imageUrl", [], "any", false, false, false, 217), 'widget', ["attr" => ["onchange" => "showFileName(this)", "style" => "display: none;"]]);
        yield "
                    <div style=\"color: #ef4444; font-size: 0.85rem; margin-top: 5px;\">";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "imageUrl", [], "any", false, false, false, 218), 'errors');
        yield "</div>
                </div>

                <div style=\"display: flex; gap: 15px; margin-top: 30px;\">
                    <a href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_tickets");
        yield "\" class=\"btn-cancel\" style=\"flex: 1;\">Cancel</a>
                    <button type=\"submit\" class=\"btn-submit\" style=\"flex: 2;\">Update Ticket</button>
                </div>
            ";
        // line 225
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), 'form_end');
        yield "
        </div>
        
        <div>
            <div class=\"sidebar-card\">
                <div class=\"sidebar-title\">
                    <i class=\"fas fa-shield-alt\" style=\"color: #22c55e;\"></i> Security Policy
                </div>
                <p class=\"sidebar-text\">
                    You can only edit tickets that are still open. Once a ticket is closed by an administrator, it becomes read-only for archival purposes.
                </p>
                <hr style=\"border: 0; border-top: 1px solid #e5e7eb; margin: 25px 0;\">
                <div class=\"sidebar-title\">
                    <i class=\"far fa-lightbulb\" style=\"color: #f59e0b;\"></i> Pro Tip
                </div>
                <p class=\"sidebar-text\">
                    Updating your ticket title or description can help support agents understand the context better if your situation has evolved.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function showFileName(input) {
        if (input.files && input.files[0]) {
            document.getElementById('file-name-preview').textContent = 'Selected: ' + input.files[0].name;
        }
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
        return "reclamation/edit_ticket.html.twig";
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
        return array (  384 => 225,  378 => 222,  371 => 218,  367 => 217,  359 => 212,  356 => 211,  346 => 204,  343 => 203,  341 => 202,  333 => 197,  329 => 196,  325 => 195,  318 => 191,  314 => 190,  310 => 189,  303 => 185,  299 => 184,  295 => 183,  289 => 180,  281 => 175,  274 => 171,  270 => 170,  266 => 169,  261 => 166,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Ticket - FinDinari{% endblock %}

{% block body %}
<style>
    .ticket-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        padding-top: 120px;
    }

    .page-title {
        font-size: 2.2rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 10px;
    }

    .page-subtitle {
        color: #6b7280;
        margin-bottom: 35px;
        font-size: 1rem;
    }

    .content-grid {
        display: grid;
        grid-template-columns: 1.8fr 1fr;
        gap: 40px;
    }

    @media (max-width: 992px) {
        .content-grid { grid-template-columns: 1fr; }
    }

    .form-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }

    .form-group {
        margin-bottom: 30px !important;
        position: relative !important;
    }

    .form-card label {
        display: block !important;
        position: static !important;
        transform: none !important;
        margin: 0 0 10px 0 !important;
        padding: 0 !important;
        font-size: 0.95rem !important;
        font-weight: 700 !important;
        color: #374151 !important;
        opacity: 1 !important;
        visibility: visible !important;
        width: auto !important;
    }

    .form-control, .form-select {
        display: block !important;
        width: 100% !important;
        padding: 14px 18px !important;
        border: 1.5px solid #e5e7eb !important;
        border-radius: 12px !important;
        font-size: 1rem !important;
        background-color: #f9fafb !important;
        color: #1f2937 !important;
    }

    .form-select option {
        color: #1f2937 !important;
        background-color: #fff !important;
    }

    .form-control:focus, .form-select:focus {
        border-color: #22c55e !important;
        background-color: #fff !important;
        box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.1) !important;
        outline: none !important;
    }

    .file-upload-area {
        border: 2px dashed #d1d5db;
        border-radius: 16px;
        padding: 30px;
        text-align: center;
        background: #f9fafb;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .file-upload-area:hover {
        border-color: #22c55e;
        background: #f0fdf4;
    }

    .btn-submit {
        background: #22c55e;
        color: white;
        border: none;
        padding: 16px 30px;
        border-radius: 14px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.2s ease;
        box-shadow: 0 4px 12px rgba(34, 197, 94, 0.2);
    }

    .btn-submit:hover {
        background: #16a34a;
        transform: translateY(-2px);
    }

    .btn-cancel {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 16px 30px;
        border-radius: 14px;
        border: 1.5px solid #e5e7eb;
        text-decoration: none;
        color: #6b7280;
        font-weight: 700;
        font-size: 1rem;
        transition: all 0.2s ease;
    }

    .btn-cancel:hover {
        background: #f9fafb;
        border-color: #d1d5db;
        color: #1f2937;
    }

    .sidebar-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 30px;
        position: sticky;
        top: 140px;
    }

    .sidebar-title {
        font-weight: 700;
        color: #111827;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sidebar-text {
        color: #4b5563;
        font-size: 0.95rem;
        line-height: 1.6;
    }
</style>

{# Custom Support Header removed to show default navbar #}

<div class=\"ticket-container\">
    <div class=\"breadcrumb\">
        <a href=\"{{ path('app_home') }}\" style=\"text-decoration:none; color:#6b7280;\">Home</a> &gt; 
        <a href=\"{{ path('support_center') }}\" style=\"text-decoration:none; color:#6b7280;\">Support</a> &gt; 
        <a href=\"{{ path('app_user_tickets') }}\" style=\"text-decoration:none; color:#6b7280;\">My Tickets</a> &gt; 
        Edit Ticket
    </div>
    
    <h1 class=\"page-title\">Edit Ticket: {{ ticket.titre }}</h1>
    <p class=\"page-subtitle\">Update your request details. Note that status and priority can only be modified by the support team.</p>
    
    <div class=\"content-grid\">
        <div class=\"form-card\">
            {{ form_start(form, {'attr': {'id': 'ticket-form', 'novalidate': 'novalidate'}}) }}
                
                <div class=\"form-group\">
                    {{ form_label(form.titre, 'Subject') }}
                    {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
                    <div style=\"color: #ef4444; font-size: 0.85rem; margin-top: 5px;\">{{ form_errors(form.titre) }}</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.type, 'Category') }}
                    {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                    <div style=\"color: #ef4444; font-size: 0.85rem; margin-top: 5px;\">{{ form_errors(form.type) }}</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.description, 'Description') }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': '6'}}) }}
                    <div style=\"color: #ef4444; font-size: 0.85rem; margin-top: 5px;\">{{ form_errors(form.description) }}</div>
                </div>
                
                <div class=\"form-group\">
                    <label>Update Attachment (Optional)</label>
                    {% if ticket.imageUrl %}
                        <div style=\"margin-bottom: 20px; background: #f9fafb; padding: 15px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;\">
                            <img src=\"{{ asset('uploads/tickets/' ~ ticket.imageUrl) }}\" style=\"width: 80px; height: 80px; object-fit: cover; border-radius: 8px; border: 1px solid #e5e7eb;\">
                            <div>
                                <div style=\"font-size: 13px; font-weight: 700; color: #374151;\">Current File</div>
                                <div style=\"font-size: 12px; color: #6b7280;\">This image is currently attached to your ticket.</div>
                            </div>
                        </div>
                    {% endif %}
                    
                    <div class=\"file-upload-area\" onclick=\"document.getElementById('{{ form.imageUrl.vars.id }}').click();\">
                        <div style=\"font-size: 1.5rem; color: #9ca3af; margin-bottom: 10px;\"><i class=\"fas fa-upload\"></i></div>
                        <div style=\"font-size: 0.95rem; color: #4b5563;\"><span>Click to change</span> or drag & drop</div>
                        <div id=\"file-name-preview\" style=\"margin-top: 10px; font-weight: 700; color: #111827; font-size: 0.9rem;\"></div>
                    </div>
                    {{ form_widget(form.imageUrl, {'attr': {'onchange': 'showFileName(this)', 'style': 'display: none;'}}) }}
                    <div style=\"color: #ef4444; font-size: 0.85rem; margin-top: 5px;\">{{ form_errors(form.imageUrl) }}</div>
                </div>

                <div style=\"display: flex; gap: 15px; margin-top: 30px;\">
                    <a href=\"{{ path('app_user_tickets') }}\" class=\"btn-cancel\" style=\"flex: 1;\">Cancel</a>
                    <button type=\"submit\" class=\"btn-submit\" style=\"flex: 2;\">Update Ticket</button>
                </div>
            {{ form_end(form) }}
        </div>
        
        <div>
            <div class=\"sidebar-card\">
                <div class=\"sidebar-title\">
                    <i class=\"fas fa-shield-alt\" style=\"color: #22c55e;\"></i> Security Policy
                </div>
                <p class=\"sidebar-text\">
                    You can only edit tickets that are still open. Once a ticket is closed by an administrator, it becomes read-only for archival purposes.
                </p>
                <hr style=\"border: 0; border-top: 1px solid #e5e7eb; margin: 25px 0;\">
                <div class=\"sidebar-title\">
                    <i class=\"far fa-lightbulb\" style=\"color: #f59e0b;\"></i> Pro Tip
                </div>
                <p class=\"sidebar-text\">
                    Updating your ticket title or description can help support agents understand the context better if your situation has evolved.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function showFileName(input) {
        if (input.files && input.files[0]) {
            document.getElementById('file-name-preview').textContent = 'Selected: ' + input.files[0].name;
        }
    }
</script>
{% endblock %}
", "reclamation/edit_ticket.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\reclamation\\edit_ticket.html.twig");
    }
}
