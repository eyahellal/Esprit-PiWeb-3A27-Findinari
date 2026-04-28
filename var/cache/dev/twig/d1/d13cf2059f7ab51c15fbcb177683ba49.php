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

/* chatbot/index.html.twig */
class __TwigTemplate_6f9549f862f36482aafdcc4b09717f38 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/index.html.twig"));

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

        yield "Financial Assistant - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\">Financial Assistant</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chatbot");
        yield "\">Financial Assistant</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"shadow rounded p-4 bg-white\">
                    <div class=\"chat-container\" id=\"chatContainer\">
                        <div class=\"chat-messages\" id=\"chatMessages\">
                            <div class=\"message bot\">
                                <div class=\"message-avatar\">
                                    <i class=\"fas fa-robot\"></i>
                                </div>
                                <div class=\"message-bubble\">
                                    👋 Bonjour! Je suis votre assistant financier Fin-Dinari.<br>
                                    Je peux vous aider avec:<br>
                                    • 📊 Comment investir dans les obligations<br>
                                    • 💰 Calculer vos profits<br>
                                    • 📅 Dates d'échéance<br>
                                    • 🔔 Notifications<br>
                                    • 📈 Score de santé financière<br><br>
                                    Posez-moi n'importe quelle question!
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"chat-input-area\">
                            <div class=\"input-group\">
                                <input type=\"text\" id=\"userInput\" class=\"form-control\" placeholder=\"Écrivez votre message...\" onkeypress=\"handleKeyPress(event)\">
                                <button class=\"btn btn-primary\" onclick=\"sendMessage()\">
                                    <i class=\"fas fa-paper-plane\"></i>
                                </button>
                            </div>
                            <div class=\"typing-indicator\" id=\"typingIndicator\" style=\"display: none;\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .chat-container {
        height: 500px;
        display: flex;
        flex-direction: column;
        background: #f8f9fa;
        border-radius: 16px;
        overflow: hidden;
    }
    
    .chat-messages {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .message {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        animation: fadeIn 0.3s ease;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .message.user {
        flex-direction: row-reverse;
    }
    
    .message-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .message.user .message-avatar {
        background: #2d6a4f;
        color: white;
    }
    
    .message.bot .message-avatar {
        background: #e8f5e9;
        color: #2d6a4f;
    }
    
    .message-bubble {
        max-width: 70%;
        padding: 12px 16px;
        border-radius: 18px;
        font-size: 14px;
        line-height: 1.5;
    }
    
    .message.user .message-bubble {
        background: #2d6a4f;
        color: white;
        border-bottom-right-radius: 4px;
    }
    
    .message.bot .message-bubble {
        background: white;
        color: #1a2e1a;
        border-bottom-left-radius: 4px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    
    .chat-input-area {
        padding: 15px 20px;
        background: white;
        border-top: 1px solid #e8e8e8;
    }
    
    .input-group {
        display: flex;
        gap: 10px;
    }
    
    .input-group input {
        flex: 1;
        padding: 12px 16px;
        border: 1px solid #e0e8e0;
        border-radius: 30px;
        outline: none;
        font-size: 14px;
    }
    
    .input-group input:focus {
        border-color: #2d6a4f;
        box-shadow: 0 0 0 2px rgba(45,106,79,0.1);
    }
    
    .input-group button {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: #2d6a4f;
        border: none;
        color: white;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .input-group button:hover {
        background: #1b4d3b;
        transform: scale(1.02);
    }
    
    .typing-indicator {
        display: flex;
        gap: 5px;
        padding: 10px 15px;
        background: #f0f0f0;
        border-radius: 20px;
        width: fit-content;
        margin-top: 10px;
    }
    
    .typing-indicator span {
        width: 8px;
        height: 8px;
        background: #8faa8f;
        border-radius: 50%;
        animation: typing 1.4s infinite ease-in-out;
    }
    
    .typing-indicator span:nth-child(1) { animation-delay: 0s; }
    .typing-indicator span:nth-child(2) { animation-delay: 0.2s; }
    .typing-indicator span:nth-child(3) { animation-delay: 0.4s; }
    
    @keyframes typing {
        0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
        30% { transform: translateY(-6px); opacity: 1; }
    }
    
    .text-primary {
        color: #2d6a4f !important;
    }
    
    .btn-primary {
        background-color: #2d6a4f;
        border-color: #2d6a4f;
    }
    
    .btn-primary:hover {
        background-color: #1b4d3b;
        border-color: #1b4d3b;
    }
</style>

<script>
    async function sendMessage() {
        const input = document.getElementById('userInput');
        const message = input.value.trim();
        
        if (!message) return;
        
        // Add user message to chat
        addMessage(message, 'user');
        input.value = '';
        
        // Show typing indicator
        showTypingIndicator();
        
        try {
            const response = await fetch('/api/chatbot/message', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: message })
            });
            
            const data = await response.json();
            
            // Hide typing indicator
            hideTypingIndicator();
            
            // Add bot response
            addMessage(data.response, 'bot');
            
        } catch (error) {
            hideTypingIndicator();
            addMessage('Désolé, une erreur s\\'est produite. Veuillez réessayer.', 'bot');
        }
        
        // Scroll to bottom
        scrollToBottom();
    }
    
    function addMessage(text, sender) {
        const messagesContainer = document.getElementById('chatMessages');
        const messageDiv = document.createElement('div');
        messageDiv.className = `message \${sender}`;
        
        const avatar = document.createElement('div');
        avatar.className = 'message-avatar';
        avatar.innerHTML = sender === 'user' ? '<i class=\"fas fa-user\"></i>' : '<i class=\"fas fa-robot\"></i>';
        
        const bubble = document.createElement('div');
        bubble.className = 'message-bubble';
        bubble.innerHTML = formatMessage(text);
        
        messageDiv.appendChild(avatar);
        messageDiv.appendChild(bubble);
        messagesContainer.appendChild(messageDiv);
        
        scrollToBottom();
    }
    
    function formatMessage(text) {
        // Convert line breaks to <br>
        return text.replace(/\\n/g, '<br>');
    }
    
    function showTypingIndicator() {
        const indicator = document.getElementById('typingIndicator');
        indicator.style.display = 'block';
        scrollToBottom();
    }
    
    function hideTypingIndicator() {
        const indicator = document.getElementById('typingIndicator');
        indicator.style.display = 'none';
    }
    
    function scrollToBottom() {
        const container = document.getElementById('chatMessages');
        container.scrollTop = container.scrollHeight;
    }
    
    function handleKeyPress(event) {
        if (event.key === 'Enter') {
            sendMessage();
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
        return "chatbot/index.html.twig";
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
        return array (  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Financial Assistant - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Financial Assistant</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_chatbot') }}\">Financial Assistant</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"shadow rounded p-4 bg-white\">
                    <div class=\"chat-container\" id=\"chatContainer\">
                        <div class=\"chat-messages\" id=\"chatMessages\">
                            <div class=\"message bot\">
                                <div class=\"message-avatar\">
                                    <i class=\"fas fa-robot\"></i>
                                </div>
                                <div class=\"message-bubble\">
                                    👋 Bonjour! Je suis votre assistant financier Fin-Dinari.<br>
                                    Je peux vous aider avec:<br>
                                    • 📊 Comment investir dans les obligations<br>
                                    • 💰 Calculer vos profits<br>
                                    • 📅 Dates d'échéance<br>
                                    • 🔔 Notifications<br>
                                    • 📈 Score de santé financière<br><br>
                                    Posez-moi n'importe quelle question!
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"chat-input-area\">
                            <div class=\"input-group\">
                                <input type=\"text\" id=\"userInput\" class=\"form-control\" placeholder=\"Écrivez votre message...\" onkeypress=\"handleKeyPress(event)\">
                                <button class=\"btn btn-primary\" onclick=\"sendMessage()\">
                                    <i class=\"fas fa-paper-plane\"></i>
                                </button>
                            </div>
                            <div class=\"typing-indicator\" id=\"typingIndicator\" style=\"display: none;\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .chat-container {
        height: 500px;
        display: flex;
        flex-direction: column;
        background: #f8f9fa;
        border-radius: 16px;
        overflow: hidden;
    }
    
    .chat-messages {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .message {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        animation: fadeIn 0.3s ease;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .message.user {
        flex-direction: row-reverse;
    }
    
    .message-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .message.user .message-avatar {
        background: #2d6a4f;
        color: white;
    }
    
    .message.bot .message-avatar {
        background: #e8f5e9;
        color: #2d6a4f;
    }
    
    .message-bubble {
        max-width: 70%;
        padding: 12px 16px;
        border-radius: 18px;
        font-size: 14px;
        line-height: 1.5;
    }
    
    .message.user .message-bubble {
        background: #2d6a4f;
        color: white;
        border-bottom-right-radius: 4px;
    }
    
    .message.bot .message-bubble {
        background: white;
        color: #1a2e1a;
        border-bottom-left-radius: 4px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    
    .chat-input-area {
        padding: 15px 20px;
        background: white;
        border-top: 1px solid #e8e8e8;
    }
    
    .input-group {
        display: flex;
        gap: 10px;
    }
    
    .input-group input {
        flex: 1;
        padding: 12px 16px;
        border: 1px solid #e0e8e0;
        border-radius: 30px;
        outline: none;
        font-size: 14px;
    }
    
    .input-group input:focus {
        border-color: #2d6a4f;
        box-shadow: 0 0 0 2px rgba(45,106,79,0.1);
    }
    
    .input-group button {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: #2d6a4f;
        border: none;
        color: white;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .input-group button:hover {
        background: #1b4d3b;
        transform: scale(1.02);
    }
    
    .typing-indicator {
        display: flex;
        gap: 5px;
        padding: 10px 15px;
        background: #f0f0f0;
        border-radius: 20px;
        width: fit-content;
        margin-top: 10px;
    }
    
    .typing-indicator span {
        width: 8px;
        height: 8px;
        background: #8faa8f;
        border-radius: 50%;
        animation: typing 1.4s infinite ease-in-out;
    }
    
    .typing-indicator span:nth-child(1) { animation-delay: 0s; }
    .typing-indicator span:nth-child(2) { animation-delay: 0.2s; }
    .typing-indicator span:nth-child(3) { animation-delay: 0.4s; }
    
    @keyframes typing {
        0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
        30% { transform: translateY(-6px); opacity: 1; }
    }
    
    .text-primary {
        color: #2d6a4f !important;
    }
    
    .btn-primary {
        background-color: #2d6a4f;
        border-color: #2d6a4f;
    }
    
    .btn-primary:hover {
        background-color: #1b4d3b;
        border-color: #1b4d3b;
    }
</style>

<script>
    async function sendMessage() {
        const input = document.getElementById('userInput');
        const message = input.value.trim();
        
        if (!message) return;
        
        // Add user message to chat
        addMessage(message, 'user');
        input.value = '';
        
        // Show typing indicator
        showTypingIndicator();
        
        try {
            const response = await fetch('/api/chatbot/message', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: message })
            });
            
            const data = await response.json();
            
            // Hide typing indicator
            hideTypingIndicator();
            
            // Add bot response
            addMessage(data.response, 'bot');
            
        } catch (error) {
            hideTypingIndicator();
            addMessage('Désolé, une erreur s\\'est produite. Veuillez réessayer.', 'bot');
        }
        
        // Scroll to bottom
        scrollToBottom();
    }
    
    function addMessage(text, sender) {
        const messagesContainer = document.getElementById('chatMessages');
        const messageDiv = document.createElement('div');
        messageDiv.className = `message \${sender}`;
        
        const avatar = document.createElement('div');
        avatar.className = 'message-avatar';
        avatar.innerHTML = sender === 'user' ? '<i class=\"fas fa-user\"></i>' : '<i class=\"fas fa-robot\"></i>';
        
        const bubble = document.createElement('div');
        bubble.className = 'message-bubble';
        bubble.innerHTML = formatMessage(text);
        
        messageDiv.appendChild(avatar);
        messageDiv.appendChild(bubble);
        messagesContainer.appendChild(messageDiv);
        
        scrollToBottom();
    }
    
    function formatMessage(text) {
        // Convert line breaks to <br>
        return text.replace(/\\n/g, '<br>');
    }
    
    function showTypingIndicator() {
        const indicator = document.getElementById('typingIndicator');
        indicator.style.display = 'block';
        scrollToBottom();
    }
    
    function hideTypingIndicator() {
        const indicator = document.getElementById('typingIndicator');
        indicator.style.display = 'none';
    }
    
    function scrollToBottom() {
        const container = document.getElementById('chatMessages');
        container.scrollTop = container.scrollHeight;
    }
    
    function handleKeyPress(event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    }
</script>

{% endblock %}", "chatbot/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\chatbot\\index.html.twig");
    }
}
