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

/* base.html.twig */
class __TwigTemplate_0831f50dcb93e34d8c293616b162cc41 extends Template
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
            'meta_description' => [$this, 'block_meta_description'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en-us\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=5\">
    <meta name=\"description\" content=\"";
        // line 6
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        yield "\">
    <meta name=\"author\" content=\"Fin-Dinari\">
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    
    <title>";
        // line 11
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "
    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 21
        yield "</head>
<body>

    ";
        // line 24
        yield from $this->load("partials/_header.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
    <main>
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 28
        yield "    </main>

    ";
        // line 30
        yield from $this->load("partials/_footer.html.twig", 30)->unwrap()->yield($context);
        // line 31
        yield "
    <!-- Maturity Alert Popup -->
    <div id=\"maturityAlertOverlay\" class=\"alert-overlay\" style=\"display: none;\">
        <div class=\"alert-popup\">
            <div class=\"alert-popup-header\">
                <div class=\"alert-popup-icon\">
                    <i class=\"fas fa-bell\"></i>
                </div>
                <div>
                    <h4>Investment Maturity Alerts</h4>
                    <p>Your investments are maturing soon!</p>
                </div>
                <button class=\"alert-popup-close\" onclick=\"closeAlertPopup()\">
                    <i class=\"fas fa-times\"></i>
                </button>
            </div>
            <div id=\"alertPopupContent\" class=\"alert-popup-content\">
                <div class=\"alert-loading\">
                    <div class=\"alert-spinner\"></div>
                    <span>Loading alerts...</span>
                </div>
            </div>
            <div class=\"alert-popup-footer\">
                <button class=\"btn-alert-secondary\" onclick=\"closeAlertPopup()\">Remind Me Later</button>
                <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_investment_index");
        yield "\" class=\"btn-alert-primary\">View My Investments</a>
            </div>
        </div>
    </div>

    <!-- Extra scripts block for page-specific JS -->
    ";
        // line 61
        yield from $this->unwrap()->yieldBlock('extra_javascripts', $context, $blocks);
        // line 62
        yield "    
    <!-- Floating Chatbot Button -->
    <div class=\"chatbot-float\" id=\"chatbotFloat\">
        <div class=\"chatbot-button\" onclick=\"toggleChatbot()\">
            <i class=\"fas fa-comment-dots\"></i>
            <span class=\"chatbot-badge\">1</span>
        </div>
        <div class=\"chatbot-window\" id=\"chatbotWindow\">
            <div class=\"chatbot-header\">
                <div>
                    <i class=\"fas fa-robot\"></i>
                    <strong>Fin-Dinari Assistant</strong>
                </div>
                <button class=\"chatbot-close\" onclick=\"toggleChatbot()\">
                    <i class=\"fas fa-times\"></i>
                </button>
            </div>
            <div class=\"chatbot-messages\" id=\"chatbotMessages\">
                <div class=\"chatbot-message bot\">
                    <div class=\"chatbot-bubble\">
                        🤖 Hi! I'm your Fin-Dinari assistant.<br>
                        How can I help you today?
                    </div>
                </div>
            </div>
            <div class=\"chatbot-input\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"chatbotInput\" placeholder=\"Type your message...\" onkeypress=\"handleChatbotKeyPress(event)\">
                    <button onclick=\"sendChatbotMessage()\">
                        <i class=\"fas fa-paper-plane\"></i>
                    </button>
                </div>
                <div class=\"chatbot-typing\" id=\"chatbotTyping\" style=\"display: none;\">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Alert Popup Styles */
        .alert-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .alert-popup {
            background: white;
            border-radius: 24px;
            width: 500px;
            max-width: 90%;
            max-height: 80vh;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            animation: slideUp 0.3s ease;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .alert-popup-header {
            background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
            color: white;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
        }
        
        .alert-popup-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: ring 0.5s ease;
        }
        
        @keyframes ring {
            0% { transform: rotate(0deg); }
            25% { transform: rotate(15deg); }
            50% { transform: rotate(-15deg); }
            75% { transform: rotate(5deg); }
            100% { transform: rotate(0deg); }
        }
        
        .alert-popup-icon i {
            font-size: 24px;
        }
        
        .alert-popup-header h4 {
            margin: 0 0 4px 0;
            font-size: 18px;
            font-weight: 700;
        }
        
        .alert-popup-header p {
            margin: 0;
            font-size: 12px;
            opacity: 0.8;
        }
        
        .alert-popup-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .alert-popup-close:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }
        
        .alert-popup-content {
            max-height: 400px;
            overflow-y: auto;
            padding: 16px;
        }
        
        .alert-card {
            background: #f8f9fa;
            border-radius: 16px;
            padding: 16px;
            margin-bottom: 12px;
            border-left: 4px solid;
            transition: transform 0.2s ease;
        }
        
        .alert-card:hover {
            transform: translateX(4px);
        }
        
        .alert-card.high {
            border-left-color: #dc3545;
            background: linear-gradient(135deg, #fff5f5 0%, #fff 100%);
        }
        
        .alert-card.medium {
            border-left-color: #ffc107;
            background: linear-gradient(135deg, #fffbf0 0%, #fff 100%);
        }
        
        .alert-card.low {
            border-left-color: #28a745;
            background: linear-gradient(135deg, #f0fff4 0%, #fff 100%);
        }
        
        .alert-card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }
        
        .alert-card-title {
            font-weight: 700;
            color: #1a2e1a;
            font-size: 16px;
        }
        
        .alert-badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }
        
        .alert-badge.high {
            background: #dc3545;
            color: white;
        }
        
        .alert-badge.medium {
            background: #ffc107;
            color: #1a2e1a;
        }
        
        .alert-badge.low {
            background: #28a745;
            color: white;
        }
        
        .alert-card-details {
            display: flex;
            gap: 16px;
            margin-bottom: 12px;
            flex-wrap: wrap;
        }
        
        .alert-detail {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: #4b6b4b;
        }
        
        .alert-detail i {
            width: 16px;
            color: #2d6a4f;
        }
        
        .alert-progress {
            margin-top: 12px;
        }
        
        .alert-progress-bar {
            height: 6px;
            background: #e8e8e8;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 6px;
        }
        
        .alert-progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #2d6a4f, #28a745);
            border-radius: 3px;
            transition: width 0.5s ease;
        }
        
        .alert-progress-text {
            font-size: 11px;
            color: #8faa8f;
            text-align: right;
        }
        
        .alert-loading {
            text-align: center;
            padding: 40px 20px;
            color: #8faa8f;
        }
        
        .alert-spinner {
            width: 32px;
            height: 32px;
            border: 3px solid #e8f5e9;
            border-top-color: #2d6a4f;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto 12px;
        }
        
        .alert-empty {
            text-align: center;
            padding: 40px 20px;
            color: #8faa8f;
        }
        
        .alert-empty i {
            font-size: 48px;
            margin-bottom: 12px;
            opacity: 0.5;
        }
        
        .alert-popup-footer {
            padding: 16px 24px;
            border-top: 1px solid #e8e8e8;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            background: #fafafa;
        }
        
        .btn-alert-primary {
            background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-alert-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(45, 106, 79, 0.3);
            color: white;
        }
        
        .btn-alert-secondary {
            background: #f0f0f0;
            color: #4b6b4b;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-alert-secondary:hover {
            background: #e8e8e8;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Custom scrollbar */
        .alert-popup-content::-webkit-scrollbar {
            width: 4px;
        }
        
        .alert-popup-content::-webkit-scrollbar-track {
            background: #f0f0f0;
        }
        
        .alert-popup-content::-webkit-scrollbar-thumb {
            background: #2d6a4f;
            border-radius: 4px;
        }

        /* Chatbot Styles */
        .chatbot-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }
        
        .chatbot-button {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(45,106,79,0.3);
            transition: all 0.3s ease;
        }
        
        .chatbot-button:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(45,106,79,0.4);
        }
        
        .chatbot-button i {
            color: white;
            font-size: 24px;
        }
        
        .chatbot-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #dc3545;
            color: white;
            font-size: 10px;
            font-weight: bold;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .chatbot-window {
            position: absolute;
            bottom: 80px;
            right: 0;
            width: 350px;
            height: 450px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            display: none;
            flex-direction: column;
            overflow: hidden;
            animation: slideUp 0.3s ease;
        }
        
        .chatbot-window.open {
            display: flex;
        }
        
        .chatbot-header {
            background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
            color: white;
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .chatbot-header i {
            margin-right: 8px;
        }
        
        .chatbot-close {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .chatbot-close:hover {
            background: rgba(255,255,255,0.2);
        }
        
        .chatbot-messages {
            flex: 1;
            overflow-y: auto;
            padding: 16px;
            background: #f8f9fa;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .chatbot-message {
            display: flex;
            animation: fadeIn 0.3s ease;
        }
        
        .chatbot-message.user {
            justify-content: flex-end;
        }
        
        .chatbot-bubble {
            max-width: 80%;
            padding: 10px 14px;
            border-radius: 18px;
            font-size: 13px;
            line-height: 1.4;
        }
        
        .chatbot-message.user .chatbot-bubble {
            background: #2d6a4f;
            color: white;
            border-bottom-right-radius: 4px;
        }
        
        .chatbot-message.bot .chatbot-bubble {
            background: white;
            color: #1a2e1a;
            border-bottom-left-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .chatbot-input {
            padding: 12px;
            border-top: 1px solid #e8e8e8;
            background: white;
        }
        
        .chatbot-input .input-group {
            display: flex;
            gap: 8px;
        }
        
        .chatbot-input input {
            flex: 1;
            padding: 10px 14px;
            border: 1px solid #e0e8e0;
            border-radius: 25px;
            outline: none;
            font-size: 13px;
        }
        
        .chatbot-input input:focus {
            border-color: #2d6a4f;
        }
        
        .chatbot-input button {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #2d6a4f;
            border: none;
            color: white;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .chatbot-input button:hover {
            background: #1b4d3b;
        }
        
        .chatbot-typing {
            display: flex;
            gap: 4px;
            padding: 8px 12px;
            background: #f0f0f0;
            border-radius: 20px;
            width: fit-content;
            margin-top: 8px;
        }
        
        .chatbot-typing span {
            width: 6px;
            height: 6px;
            background: #8faa8f;
            border-radius: 50%;
            animation: typing 1.4s infinite;
        }
        
        .chatbot-typing span:nth-child(2) { animation-delay: 0.2s; }
        .chatbot-typing span:nth-child(3) { animation-delay: 0.4s; }
        
        @keyframes typing {
            0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
            30% { transform: translateY(-4px); opacity: 1; }
        }
        
        @media (max-width: 768px) {
            .chatbot-window {
                width: 300px;
                right: -10px;
            }
            .chatbot-button {
                width: 50px;
                height: 50px;
            }
            .chatbot-button i {
                font-size: 20px;
            }
        }
    </style>

    <script>
        var hasShownAlert = false;
        
        async function checkMaturityAlerts() {
            try {
                const response = await fetch('/alerts/maturity');
                const data = await response.json();
                
                if (data.hasAlerts && !hasShownAlert) {
                    showAlertPopup(data.alerts);
                    hasShownAlert = true;
                }
            } catch (error) {
                console.error('Error checking alerts:', error);
            }
        }
        
        function showAlertPopup(alerts) {
            const overlay = document.getElementById('maturityAlertOverlay');
            const content = document.getElementById('alertPopupContent');
            
            if (!overlay) return;
            
            if (alerts.length === 0) {
                content.innerHTML = `
                    <div class=\"alert-empty\">
                        <i class=\"fas fa-check-circle\"></i>
                        <p>No investments maturing soon!</p>
                    </div>
                `;
            } else {
                let alertsHtml = '';
                alerts.forEach(alert => {
                    const progressPercent = ((7 - alert.daysLeft) / 7) * 100;
                    alertsHtml += `
                        <div class=\"alert-card \${alert.severity}\">
                            <div class=\"alert-card-header\">
                                <span class=\"alert-card-title\">💰 \${escapeHtml(alert.obligationName)}</span>
                                <span class=\"alert-badge \${alert.severity}\">
                                    \${alert.daysLeft === 0 ? 'Today!' : `\${alert.daysLeft} days left`}
                                </span>
                            </div>
                            <div class=\"alert-card-details\">
                                <div class=\"alert-detail\">
                                    <i class=\"fas fa-money-bill-wave\"></i>
                                    <span>\${alert.amount} DT</span>
                                </div>
                                <div class=\"alert-detail\">
                                    <i class=\"fas fa-calendar-check\"></i>
                                    <span>Matures: \${alert.maturityDate}</span>
                                </div>
                                <div class=\"alert-detail\">
                                    <i class=\"fas fa-chart-line\"></i>
                                    <span>Return: \${alert.expectedReturn} DT</span>
                                </div>
                            </div>
                            <div class=\"alert-progress\">
                                <div class=\"alert-progress-bar\">
                                    <div class=\"alert-progress-fill\" style=\"width: \${progressPercent}%\"></div>
                                </div>
                                <div class=\"alert-progress-text\">
                                    \${alert.daysLeft === 0 ? 'Matures today!' : `\${7 - alert.daysLeft} of 7 days passed`}
                                </div>
                            </div>
                        </div>
                    `;
                });
                content.innerHTML = alertsHtml;
            }
            
            overlay.style.display = 'flex';
            
            // Play sound (optional)
            playNotificationSound();
        }
        
        function playNotificationSound() {
            try {
                const audio = new Audio('https://www.soundjay.com/misc/sounds/bell-ringing-05.mp3');
                audio.volume = 0.3;
                audio.play().catch(e => console.log('Sound play failed:', e));
            } catch(e) {}
        }
        
        function closeAlertPopup() {
            const overlay = document.getElementById('maturityAlertOverlay');
            if (overlay) {
                overlay.style.display = 'none';
            }
        }
        
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
        
        // Chatbot functions
        var isChatbotOpen = false;
        
        function toggleChatbot() {
            const window = document.getElementById('chatbotWindow');
            isChatbotOpen = !isChatbotOpen;
            if (isChatbotOpen) {
                window.classList.add('open');
            } else {
                window.classList.remove('open');
            }
        }
        
        async function sendChatbotMessage() {
            const input = document.getElementById('chatbotInput');
            const message = input.value.trim();
            
            if (!message) return;
            
            // Add user message
            addChatbotMessage(message, 'user');
            input.value = '';
            
            // Show typing indicator
            showChatbotTyping();
            
            try {
                const response = await fetch('/api/chatbot/message', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ message: message })
                });
                
                const data = await response.json();
                
                hideChatbotTyping();
                addChatbotMessage(data.response, 'bot');
                
            } catch (error) {
                hideChatbotTyping();
                addChatbotMessage('Sorry, an error occurred. Please try again.', 'bot');
            }
            
            scrollChatbotToBottom();
        }
        
        function addChatbotMessage(text, sender) {
            const container = document.getElementById('chatbotMessages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `chatbot-message \${sender}`;
            
            const bubble = document.createElement('div');
            bubble.className = 'chatbot-bubble';
            bubble.innerHTML = text.replace(/\\n/g, '<br>');
            
            messageDiv.appendChild(bubble);
            container.appendChild(messageDiv);
            
            scrollChatbotToBottom();
        }
        
        function showChatbotTyping() {
            const typing = document.getElementById('chatbotTyping');
            typing.style.display = 'block';
            scrollChatbotToBottom();
        }
        
        function hideChatbotTyping() {
            const typing = document.getElementById('chatbotTyping');
            typing.style.display = 'none';
        }
        
        function scrollChatbotToBottom() {
            const container = document.getElementById('chatbotMessages');
            container.scrollTop = container.scrollHeight;
        }
        
        function handleChatbotKeyPress(event) {
            if (event.key === 'Enter') {
                sendChatbotMessage();
            }
        }
        
        // Check for alerts when page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Small delay before checking alerts
            setTimeout(checkMaturityAlerts, 1000);
        });
    </script>

    <script src=\"";
        // line 818
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 819
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        yield "Fin-Dinari - Complete Personal Finance Ecosystem. Track expenses, invest, set goals, and join a community of like-minded individuals on their financial journey.";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        yield "Fin-Dinari - Complete Personal Finance Ecosystem";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        yield "        ";
        yield from $this->load("partials/_stylesheets.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        yield "        ";
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        yield "
        ";
        // line 19
        yield from $this->load("partials/_javascripts.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  1045 => 61,  1023 => 27,  1012 => 20,  1010 => 19,  1005 => 18,  992 => 17,  981 => 15,  978 => 14,  965 => 13,  942 => 11,  919 => 6,  905 => 819,  901 => 818,  143 => 62,  141 => 61,  132 => 55,  106 => 31,  104 => 30,  100 => 28,  98 => 27,  94 => 25,  92 => 24,  87 => 21,  85 => 17,  82 => 16,  80 => 13,  75 => 11,  70 => 9,  66 => 8,  61 => 6,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-us\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=5\">
    <meta name=\"description\" content=\"{% block meta_description %}Fin-Dinari - Complete Personal Finance Ecosystem. Track expenses, invest, set goals, and join a community of like-minded individuals on their financial journey.{% endblock %}\">
    <meta name=\"author\" content=\"Fin-Dinari\">
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.png') }}\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{ asset('images/favicon.png') }}\" type=\"image/x-icon\">
    
    <title>{% block title %}Fin-Dinari - Complete Personal Finance Ecosystem{% endblock %}</title>

    {% block stylesheets %}
        {% include 'partials/_stylesheets.html.twig' %}
    {% endblock %}

    {% block javascripts %}
        {{ importmap('app') }}
        {% include 'partials/_javascripts.html.twig' %}
    {% endblock %}
</head>
<body>

    {% include 'partials/_header.html.twig' %}

    <main>
        {% block body %}{% endblock %}
    </main>

    {% include 'partials/_footer.html.twig' %}

    <!-- Maturity Alert Popup -->
    <div id=\"maturityAlertOverlay\" class=\"alert-overlay\" style=\"display: none;\">
        <div class=\"alert-popup\">
            <div class=\"alert-popup-header\">
                <div class=\"alert-popup-icon\">
                    <i class=\"fas fa-bell\"></i>
                </div>
                <div>
                    <h4>Investment Maturity Alerts</h4>
                    <p>Your investments are maturing soon!</p>
                </div>
                <button class=\"alert-popup-close\" onclick=\"closeAlertPopup()\">
                    <i class=\"fas fa-times\"></i>
                </button>
            </div>
            <div id=\"alertPopupContent\" class=\"alert-popup-content\">
                <div class=\"alert-loading\">
                    <div class=\"alert-spinner\"></div>
                    <span>Loading alerts...</span>
                </div>
            </div>
            <div class=\"alert-popup-footer\">
                <button class=\"btn-alert-secondary\" onclick=\"closeAlertPopup()\">Remind Me Later</button>
                <a href=\"{{ path('app_investment_index') }}\" class=\"btn-alert-primary\">View My Investments</a>
            </div>
        </div>
    </div>

    <!-- Extra scripts block for page-specific JS -->
    {% block extra_javascripts %}{% endblock %}
    
    <!-- Floating Chatbot Button -->
    <div class=\"chatbot-float\" id=\"chatbotFloat\">
        <div class=\"chatbot-button\" onclick=\"toggleChatbot()\">
            <i class=\"fas fa-comment-dots\"></i>
            <span class=\"chatbot-badge\">1</span>
        </div>
        <div class=\"chatbot-window\" id=\"chatbotWindow\">
            <div class=\"chatbot-header\">
                <div>
                    <i class=\"fas fa-robot\"></i>
                    <strong>Fin-Dinari Assistant</strong>
                </div>
                <button class=\"chatbot-close\" onclick=\"toggleChatbot()\">
                    <i class=\"fas fa-times\"></i>
                </button>
            </div>
            <div class=\"chatbot-messages\" id=\"chatbotMessages\">
                <div class=\"chatbot-message bot\">
                    <div class=\"chatbot-bubble\">
                        🤖 Hi! I'm your Fin-Dinari assistant.<br>
                        How can I help you today?
                    </div>
                </div>
            </div>
            <div class=\"chatbot-input\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"chatbotInput\" placeholder=\"Type your message...\" onkeypress=\"handleChatbotKeyPress(event)\">
                    <button onclick=\"sendChatbotMessage()\">
                        <i class=\"fas fa-paper-plane\"></i>
                    </button>
                </div>
                <div class=\"chatbot-typing\" id=\"chatbotTyping\" style=\"display: none;\">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Alert Popup Styles */
        .alert-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .alert-popup {
            background: white;
            border-radius: 24px;
            width: 500px;
            max-width: 90%;
            max-height: 80vh;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            animation: slideUp 0.3s ease;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .alert-popup-header {
            background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
            color: white;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
        }
        
        .alert-popup-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: ring 0.5s ease;
        }
        
        @keyframes ring {
            0% { transform: rotate(0deg); }
            25% { transform: rotate(15deg); }
            50% { transform: rotate(-15deg); }
            75% { transform: rotate(5deg); }
            100% { transform: rotate(0deg); }
        }
        
        .alert-popup-icon i {
            font-size: 24px;
        }
        
        .alert-popup-header h4 {
            margin: 0 0 4px 0;
            font-size: 18px;
            font-weight: 700;
        }
        
        .alert-popup-header p {
            margin: 0;
            font-size: 12px;
            opacity: 0.8;
        }
        
        .alert-popup-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .alert-popup-close:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }
        
        .alert-popup-content {
            max-height: 400px;
            overflow-y: auto;
            padding: 16px;
        }
        
        .alert-card {
            background: #f8f9fa;
            border-radius: 16px;
            padding: 16px;
            margin-bottom: 12px;
            border-left: 4px solid;
            transition: transform 0.2s ease;
        }
        
        .alert-card:hover {
            transform: translateX(4px);
        }
        
        .alert-card.high {
            border-left-color: #dc3545;
            background: linear-gradient(135deg, #fff5f5 0%, #fff 100%);
        }
        
        .alert-card.medium {
            border-left-color: #ffc107;
            background: linear-gradient(135deg, #fffbf0 0%, #fff 100%);
        }
        
        .alert-card.low {
            border-left-color: #28a745;
            background: linear-gradient(135deg, #f0fff4 0%, #fff 100%);
        }
        
        .alert-card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }
        
        .alert-card-title {
            font-weight: 700;
            color: #1a2e1a;
            font-size: 16px;
        }
        
        .alert-badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }
        
        .alert-badge.high {
            background: #dc3545;
            color: white;
        }
        
        .alert-badge.medium {
            background: #ffc107;
            color: #1a2e1a;
        }
        
        .alert-badge.low {
            background: #28a745;
            color: white;
        }
        
        .alert-card-details {
            display: flex;
            gap: 16px;
            margin-bottom: 12px;
            flex-wrap: wrap;
        }
        
        .alert-detail {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: #4b6b4b;
        }
        
        .alert-detail i {
            width: 16px;
            color: #2d6a4f;
        }
        
        .alert-progress {
            margin-top: 12px;
        }
        
        .alert-progress-bar {
            height: 6px;
            background: #e8e8e8;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 6px;
        }
        
        .alert-progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #2d6a4f, #28a745);
            border-radius: 3px;
            transition: width 0.5s ease;
        }
        
        .alert-progress-text {
            font-size: 11px;
            color: #8faa8f;
            text-align: right;
        }
        
        .alert-loading {
            text-align: center;
            padding: 40px 20px;
            color: #8faa8f;
        }
        
        .alert-spinner {
            width: 32px;
            height: 32px;
            border: 3px solid #e8f5e9;
            border-top-color: #2d6a4f;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto 12px;
        }
        
        .alert-empty {
            text-align: center;
            padding: 40px 20px;
            color: #8faa8f;
        }
        
        .alert-empty i {
            font-size: 48px;
            margin-bottom: 12px;
            opacity: 0.5;
        }
        
        .alert-popup-footer {
            padding: 16px 24px;
            border-top: 1px solid #e8e8e8;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            background: #fafafa;
        }
        
        .btn-alert-primary {
            background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-alert-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(45, 106, 79, 0.3);
            color: white;
        }
        
        .btn-alert-secondary {
            background: #f0f0f0;
            color: #4b6b4b;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-alert-secondary:hover {
            background: #e8e8e8;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Custom scrollbar */
        .alert-popup-content::-webkit-scrollbar {
            width: 4px;
        }
        
        .alert-popup-content::-webkit-scrollbar-track {
            background: #f0f0f0;
        }
        
        .alert-popup-content::-webkit-scrollbar-thumb {
            background: #2d6a4f;
            border-radius: 4px;
        }

        /* Chatbot Styles */
        .chatbot-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }
        
        .chatbot-button {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(45,106,79,0.3);
            transition: all 0.3s ease;
        }
        
        .chatbot-button:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(45,106,79,0.4);
        }
        
        .chatbot-button i {
            color: white;
            font-size: 24px;
        }
        
        .chatbot-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #dc3545;
            color: white;
            font-size: 10px;
            font-weight: bold;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .chatbot-window {
            position: absolute;
            bottom: 80px;
            right: 0;
            width: 350px;
            height: 450px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            display: none;
            flex-direction: column;
            overflow: hidden;
            animation: slideUp 0.3s ease;
        }
        
        .chatbot-window.open {
            display: flex;
        }
        
        .chatbot-header {
            background: linear-gradient(135deg, #2d6a4f 0%, #1b4d3b 100%);
            color: white;
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .chatbot-header i {
            margin-right: 8px;
        }
        
        .chatbot-close {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .chatbot-close:hover {
            background: rgba(255,255,255,0.2);
        }
        
        .chatbot-messages {
            flex: 1;
            overflow-y: auto;
            padding: 16px;
            background: #f8f9fa;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .chatbot-message {
            display: flex;
            animation: fadeIn 0.3s ease;
        }
        
        .chatbot-message.user {
            justify-content: flex-end;
        }
        
        .chatbot-bubble {
            max-width: 80%;
            padding: 10px 14px;
            border-radius: 18px;
            font-size: 13px;
            line-height: 1.4;
        }
        
        .chatbot-message.user .chatbot-bubble {
            background: #2d6a4f;
            color: white;
            border-bottom-right-radius: 4px;
        }
        
        .chatbot-message.bot .chatbot-bubble {
            background: white;
            color: #1a2e1a;
            border-bottom-left-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .chatbot-input {
            padding: 12px;
            border-top: 1px solid #e8e8e8;
            background: white;
        }
        
        .chatbot-input .input-group {
            display: flex;
            gap: 8px;
        }
        
        .chatbot-input input {
            flex: 1;
            padding: 10px 14px;
            border: 1px solid #e0e8e0;
            border-radius: 25px;
            outline: none;
            font-size: 13px;
        }
        
        .chatbot-input input:focus {
            border-color: #2d6a4f;
        }
        
        .chatbot-input button {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #2d6a4f;
            border: none;
            color: white;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .chatbot-input button:hover {
            background: #1b4d3b;
        }
        
        .chatbot-typing {
            display: flex;
            gap: 4px;
            padding: 8px 12px;
            background: #f0f0f0;
            border-radius: 20px;
            width: fit-content;
            margin-top: 8px;
        }
        
        .chatbot-typing span {
            width: 6px;
            height: 6px;
            background: #8faa8f;
            border-radius: 50%;
            animation: typing 1.4s infinite;
        }
        
        .chatbot-typing span:nth-child(2) { animation-delay: 0.2s; }
        .chatbot-typing span:nth-child(3) { animation-delay: 0.4s; }
        
        @keyframes typing {
            0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
            30% { transform: translateY(-4px); opacity: 1; }
        }
        
        @media (max-width: 768px) {
            .chatbot-window {
                width: 300px;
                right: -10px;
            }
            .chatbot-button {
                width: 50px;
                height: 50px;
            }
            .chatbot-button i {
                font-size: 20px;
            }
        }
    </style>

    <script>
        var hasShownAlert = false;
        
        async function checkMaturityAlerts() {
            try {
                const response = await fetch('/alerts/maturity');
                const data = await response.json();
                
                if (data.hasAlerts && !hasShownAlert) {
                    showAlertPopup(data.alerts);
                    hasShownAlert = true;
                }
            } catch (error) {
                console.error('Error checking alerts:', error);
            }
        }
        
        function showAlertPopup(alerts) {
            const overlay = document.getElementById('maturityAlertOverlay');
            const content = document.getElementById('alertPopupContent');
            
            if (!overlay) return;
            
            if (alerts.length === 0) {
                content.innerHTML = `
                    <div class=\"alert-empty\">
                        <i class=\"fas fa-check-circle\"></i>
                        <p>No investments maturing soon!</p>
                    </div>
                `;
            } else {
                let alertsHtml = '';
                alerts.forEach(alert => {
                    const progressPercent = ((7 - alert.daysLeft) / 7) * 100;
                    alertsHtml += `
                        <div class=\"alert-card \${alert.severity}\">
                            <div class=\"alert-card-header\">
                                <span class=\"alert-card-title\">💰 \${escapeHtml(alert.obligationName)}</span>
                                <span class=\"alert-badge \${alert.severity}\">
                                    \${alert.daysLeft === 0 ? 'Today!' : `\${alert.daysLeft} days left`}
                                </span>
                            </div>
                            <div class=\"alert-card-details\">
                                <div class=\"alert-detail\">
                                    <i class=\"fas fa-money-bill-wave\"></i>
                                    <span>\${alert.amount} DT</span>
                                </div>
                                <div class=\"alert-detail\">
                                    <i class=\"fas fa-calendar-check\"></i>
                                    <span>Matures: \${alert.maturityDate}</span>
                                </div>
                                <div class=\"alert-detail\">
                                    <i class=\"fas fa-chart-line\"></i>
                                    <span>Return: \${alert.expectedReturn} DT</span>
                                </div>
                            </div>
                            <div class=\"alert-progress\">
                                <div class=\"alert-progress-bar\">
                                    <div class=\"alert-progress-fill\" style=\"width: \${progressPercent}%\"></div>
                                </div>
                                <div class=\"alert-progress-text\">
                                    \${alert.daysLeft === 0 ? 'Matures today!' : `\${7 - alert.daysLeft} of 7 days passed`}
                                </div>
                            </div>
                        </div>
                    `;
                });
                content.innerHTML = alertsHtml;
            }
            
            overlay.style.display = 'flex';
            
            // Play sound (optional)
            playNotificationSound();
        }
        
        function playNotificationSound() {
            try {
                const audio = new Audio('https://www.soundjay.com/misc/sounds/bell-ringing-05.mp3');
                audio.volume = 0.3;
                audio.play().catch(e => console.log('Sound play failed:', e));
            } catch(e) {}
        }
        
        function closeAlertPopup() {
            const overlay = document.getElementById('maturityAlertOverlay');
            if (overlay) {
                overlay.style.display = 'none';
            }
        }
        
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
        
        // Chatbot functions
        var isChatbotOpen = false;
        
        function toggleChatbot() {
            const window = document.getElementById('chatbotWindow');
            isChatbotOpen = !isChatbotOpen;
            if (isChatbotOpen) {
                window.classList.add('open');
            } else {
                window.classList.remove('open');
            }
        }
        
        async function sendChatbotMessage() {
            const input = document.getElementById('chatbotInput');
            const message = input.value.trim();
            
            if (!message) return;
            
            // Add user message
            addChatbotMessage(message, 'user');
            input.value = '';
            
            // Show typing indicator
            showChatbotTyping();
            
            try {
                const response = await fetch('/api/chatbot/message', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ message: message })
                });
                
                const data = await response.json();
                
                hideChatbotTyping();
                addChatbotMessage(data.response, 'bot');
                
            } catch (error) {
                hideChatbotTyping();
                addChatbotMessage('Sorry, an error occurred. Please try again.', 'bot');
            }
            
            scrollChatbotToBottom();
        }
        
        function addChatbotMessage(text, sender) {
            const container = document.getElementById('chatbotMessages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `chatbot-message \${sender}`;
            
            const bubble = document.createElement('div');
            bubble.className = 'chatbot-bubble';
            bubble.innerHTML = text.replace(/\\n/g, '<br>');
            
            messageDiv.appendChild(bubble);
            container.appendChild(messageDiv);
            
            scrollChatbotToBottom();
        }
        
        function showChatbotTyping() {
            const typing = document.getElementById('chatbotTyping');
            typing.style.display = 'block';
            scrollChatbotToBottom();
        }
        
        function hideChatbotTyping() {
            const typing = document.getElementById('chatbotTyping');
            typing.style.display = 'none';
        }
        
        function scrollChatbotToBottom() {
            const container = document.getElementById('chatbotMessages');
            container.scrollTop = container.scrollHeight;
        }
        
        function handleChatbotKeyPress(event) {
            if (event.key === 'Enter') {
                sendChatbotMessage();
            }
        }
        
        // Check for alerts when page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Small delay before checking alerts
            setTimeout(checkMaturityAlerts, 1000);
        });
    </script>

    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
</body>
</html>", "base.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\base.html.twig");
    }
}
