<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Notification</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/_sdk/element_sdk.js"></script>
    <style>
        body {
            box-sizing: border-box;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f3f4f6;
        }

        .email-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .info-row {
            display: flex;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #6b7280;
            min-width: 140px;
        }

        .info-value {
            color: #111827;
            flex: 1;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .status-verified {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-warning {
            background-color: #fef3c7;
            color: #92400e;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
    <style>@view-transition { navigation: auto; }</style>
    <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
</head>
<body class="h-full w-full m-0 p-0 overflow-auto">
<div class="w-full min-h-full bg-gray-100 py-8 px-4">
    <div class="email-container animate-fade-in"><!-- Email Header -->
        <div class="email-card mb-6">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white p-6">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-8 h-8" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                    </svg>
                    <h1 id="email-subject" class="text-2xl font-bold">User Login Notification</h1>
                </div>
                <p class="text-blue-100 text-sm">Administrator Alert</p>
            </div>
        </div><!-- Alert Message -->
        <div class="email-card mb-6 p-6">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" />
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h2 id="alert-title" class="text-xl font-bold text-gray-900 mb-2">New User Login Detected</h2>
                    <p id="alert-message" class="text-gray-600">A user has successfully logged into the website. Please review the login details below for security monitoring.</p>
                </div>
            </div>
        </div><!-- User Information -->
        <div class="email-card mb-6 p-6">
            <div class="flex items-center gap-3 mb-4">
                <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                </svg>
                <h3 class="text-lg font-bold text-gray-900">User Information</h3>
            </div>
            <div>
                <div class="info-row"><span class="info-label">Full Name:</span> <span id="user-name" class="info-value font-semibold">{{$user->name}} {{$user->family}}</span>
                </div>
                <div class="info-row"><span class="info-label">Email:</span> <span id="user-email" class="info-value">{{$user->email}}</span>
                </div>
                <div class="info-row"><span class="info-label">Username:</span> <span id="user-username" class="info-value">{{$user->mobile}}</span>
                </div>
                <div class="info-row"><span class="info-label">User ID:</span> <span id="user-id" class="info-value">#USR-45782</span>
                </div>
            </div>
        </div><!-- Login Details -->
        <div class="email-card mb-6 p-6">
            <div class="flex items-center gap-3 mb-4">
                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" />
                </svg>
                <h3 class="text-lg font-bold text-gray-900">Login Details</h3>
            </div>
            <div>
                <div class="info-row"><span class="info-label">Login Time:</span> <span id="login-time" class="info-value">December 28, 2024 at 3:42 PM EST</span>
                </div>
                <div class="info-row"><span class="info-label">IP Address:</span> <span id="ip-address" class="info-value font-mono">192.168.1.105</span>
                </div>
                <div class="info-row"><span class="info-label">Location:</span> <span id="location" class="info-value">
        <div class="flex items-center gap-2">
         <svg class="w-4 h-4 text-red-500" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" />
         </svg><span>New York, United States</span>
        </div></span>
                </div>
                <div class="info-row"><span class="info-label">Security Status:</span> <span class="info-value"> <span class="status-badge status-verified">
         <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
         </svg> Verified </span> </span>
                </div>
            </div>
        </div><!-- Device Information -->
        <div class="email-card mb-6 p-6">
            <div class="flex items-center gap-3 mb-4">
                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewbox="0 0 20 20"><path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" />
                </svg>
                <h3 class="text-lg font-bold text-gray-900">Device Information</h3>
            </div>
            <div>
                <div class="info-row"><span class="info-label">Device Type:</span> <span id="device-type" class="info-value">Desktop</span>
                </div>
                <div class="info-row"><span class="info-label">Browser:</span> <span id="browser" class="info-value">Chrome 120.0.6099</span>
                </div>
                <div class="info-row"><span class="info-label">Operating System:</span> <span id="operating-system" class="info-value">Windows 11</span>
                </div>
            </div>
        </div><!-- Action Buttons -->
        <div class="email-card mb-6 p-6">
            <div class="flex flex-col sm:flex-row gap-3"><button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all"> <span id="view-profile-button">View User Profile</span> </button> <button class="flex-1 bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 px-6 rounded-lg transition-all"> <span id="view-logs-button">View Security Logs</span> </button>
            </div>
        </div><!-- Footer -->
        <div class="email-card p-6 bg-gray-50">
            <p id="footer-text" class="text-sm text-gray-600 text-center mb-2">This is an automated security notification. If you notice any suspicious activity, please take immediate action.</p>
            <p class="text-xs text-gray-500 text-center">© 2024 <span id="company-name">Your Company</span>. All rights reserved.</p>
            <div class="flex justify-center gap-4 mt-4"><a href="#" class="text-xs text-blue-600 hover:underline">Privacy Policy</a> <span class="text-gray-400">|</span> <a href="#" class="text-xs text-blue-600 hover:underline">Security Center</a> <span class="text-gray-400">|</span> <a href="#" class="text-xs text-blue-600 hover:underline">Contact Support</a>
            </div>
        </div>
    </div>
</div>
<script>
    const defaultConfig = {
        email_subject: 'User Login Notification',
        alert_title: 'New User Login Detected',
        alert_message: 'A user has successfully logged into the website. Please review the login details below for security monitoring.',
        user_name: 'John Doe',
        user_email: 'john.doe@example.com',
        user_username: '@johndoe',
        user_id: '#USR-45782',
        login_time: 'December 28, 2024 at 3:42 PM EST',
        ip_address: '192.168.1.105',
        location: 'New York, United States',
        device_type: 'Desktop',
        browser: 'Chrome 120.0.6099',
        operating_system: 'Windows 11',
        view_profile_button: 'View User Profile',
        view_logs_button: 'View Security Logs',
        footer_text: 'This is an automated security notification. If you notice any suspicious activity, please take immediate action.',
        company_name: 'Your Company',
        background_color: '#f3f4f6',
        surface_color: '#ffffff',
        text_color: '#111827',
        primary_action_color: '#2563eb',
        secondary_action_color: '#4b5563',
        font_family: 'system-ui, -apple-system, sans-serif',
        font_size: 16
    };

    let config = {};

    async function onConfigChange(config) {
        const baseSize = config.font_size || defaultConfig.font_size;
        const fontFamily = config.font_family || defaultConfig.font_family;

        // Update all text content
        document.getElementById('email-subject').textContent = config.email_subject || defaultConfig.email_subject;
        document.getElementById('alert-title').textContent = config.alert_title || defaultConfig.alert_title;
        document.getElementById('alert-message').textContent = config.alert_message || defaultConfig.alert_message;
        document.getElementById('user-name').textContent = config.user_name || defaultConfig.user_name;
        document.getElementById('user-email').textContent = config.user_email || defaultConfig.user_email;
        document.getElementById('user-username').textContent = config.user_username || defaultConfig.user_username;
        document.getElementById('user-id').textContent = config.user_id || defaultConfig.user_id;
        document.getElementById('login-time').textContent = config.login_time || defaultConfig.login_time;
        document.getElementById('ip-address').textContent = config.ip_address || defaultConfig.ip_address;

        // Update location (preserving the icon)
        const locationSpan = document.getElementById('location').querySelector('span:last-child');
        if (locationSpan) {
            locationSpan.textContent = config.location || defaultConfig.location;
        }

        document.getElementById('device-type').textContent = config.device_type || defaultConfig.device_type;
        document.getElementById('browser').textContent = config.browser || defaultConfig.browser;
        document.getElementById('operating-system').textContent = config.operating_system || defaultConfig.operating_system;
        document.getElementById('view-profile-button').textContent = config.view_profile_button || defaultConfig.view_profile_button;
        document.getElementById('view-logs-button').textContent = config.view_logs_button || defaultConfig.view_logs_button;
        document.getElementById('footer-text').textContent = config.footer_text || defaultConfig.footer_text;
        document.getElementById('company-name').textContent = config.company_name || defaultConfig.company_name;

        // Apply font family
        document.body.style.fontFamily = `${fontFamily}, system-ui, -apple-system, sans-serif`;

        // Apply font sizes
        document.getElementById('email-subject').style.fontSize = `${baseSize * 1.5}px`;
        document.getElementById('alert-title').style.fontSize = `${baseSize * 1.25}px`;
        document.body.style.fontSize = `${baseSize}px`;
    }

    if (window.elementSdk) {
        window.elementSdk.init({
            defaultConfig,
            onConfigChange,
            mapToCapabilities: (config) => ({
                recolorables: [
                    {
                        get: () => config.background_color || defaultConfig.background_color,
                        set: (value) => {
                            config.background_color = value;
                            window.elementSdk.setConfig({ background_color: value });
                        }
                    },
                    {
                        get: () => config.surface_color || defaultConfig.surface_color,
                        set: (value) => {
                            config.surface_color = value;
                            window.elementSdk.setConfig({ surface_color: value });
                        }
                    },
                    {
                        get: () => config.text_color || defaultConfig.text_color,
                        set: (value) => {
                            config.text_color = value;
                            window.elementSdk.setConfig({ text_color: value });
                        }
                    },
                    {
                        get: () => config.primary_action_color || defaultConfig.primary_action_color,
                        set: (value) => {
                            config.primary_action_color = value;
                            window.elementSdk.setConfig({ primary_action_color: value });
                        }
                    },
                    {
                        get: () => config.secondary_action_color || defaultConfig.secondary_action_color,
                        set: (value) => {
                            config.secondary_action_color = value;
                            window.elementSdk.setConfig({ secondary_action_color: value });
                        }
                    }
                ],
                borderables: [],
                fontEditable: {
                    get: () => config.font_family || defaultConfig.font_family,
                    set: (value) => {
                        config.font_family = value;
                        window.elementSdk.setConfig({ font_family: value });
                    }
                },
                fontSizeable: {
                    get: () => config.font_size || defaultConfig.font_size,
                    set: (value) => {
                        config.font_size = value;
                        window.elementSdk.setConfig({ font_size: value });
                    }
                }
            }),
            mapToEditPanelValues: (config) => new Map([
                ['email_subject', config.email_subject || defaultConfig.email_subject],
                ['alert_title', config.alert_title || defaultConfig.alert_title],
                ['alert_message', config.alert_message || defaultConfig.alert_message],
                ['user_name', config.user_name || defaultConfig.user_name],
                ['user_email', config.user_email || defaultConfig.user_email],
                ['user_username', config.user_username || defaultConfig.user_username],
                ['user_id', config.user_id || defaultConfig.user_id],
                ['login_time', config.login_time || defaultConfig.login_time],
                ['ip_address', config.ip_address || defaultConfig.ip_address],
                ['location', config.location || defaultConfig.location],
                ['device_type', config.device_type || defaultConfig.device_type],
                ['browser', config.browser || defaultConfig.browser],
                ['operating_system', config.operating_system || defaultConfig.operating_system],
                ['view_profile_button', config.view_profile_button || defaultConfig.view_profile_button],
                ['view_logs_button', config.view_logs_button || defaultConfig.view_logs_button],
                ['footer_text', config.footer_text || defaultConfig.footer_text],
                ['company_name', config.company_name || defaultConfig.company_name]
            ])
        });
        config = window.elementSdk.config;
    }
</script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9ae83ec4d4b089c9',t:'MTc2NTgyNTg2OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
