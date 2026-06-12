<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SecureAdmin | Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed": "#dbe1ff",
                        "secondary-fixed": "#dae2fd",
                        "surface-container-low": "#eff4ff",
                        "on-background": "#0b1c30",
                        "outline-variant": "#c3c6d7",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#bec6e0",
                        "error-container": "#ffdad6",
                        "on-surface": "#0b1c30",
                        "surface": "#f8f9ff",
                        "tertiary-fixed-dim": "#ffb596",
                        "tertiary": "#943700",
                        "on-tertiary-fixed-variant": "#7d2000",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#003ea8",
                        "on-primary-container": "#eeefff",
                        "secondary": "#565e74",
                        "on-tertiary": "#ffffff",
                        "surface-variant": "#d3e4fe",
                        "surface-container": "#e5eeff",
                        "background": "#f8f9ff",
                        "on-secondary-container": "#5c647a",
                        "tertiary-fixed": "#ffdbcd",
                        "primary": "#004ac6",
                        "primary-container": "#2563eb",
                        "on-secondary-fixed-variant": "#3f465c",
                        "on-surface-variant": "#434655",
                        "on-tertiary-fixed": "#360f00",
                        "secondary-container": "#dae2fd",
                        "surface-container-lowest": "#ffffff",
                        "on-primary": "#ffffff",
                        "outline": "#737686",
                        "surface-container-highest": "#d3e4fe",
                        "on-primary-fixed": "#00174b",
                        "inverse-primary": "#b4c5ff",
                        "tertiary-container": "#bc4800",
                        "surface-tint": "#0053db",
                        "on-tertiary-container": "#ffede6",
                        "surface-bright": "#f8f9ff",
                        "surface-container-high": "#dce9ff",
                        "primary-fixed-dim": "#b4c5ff",
                        "surface-dim": "#cbdbf5",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#131b2e",
                        "inverse-surface": "#213145",
                        "inverse-on-surface": "#eaf1ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "440px",
                        "gutter": "1rem",
                        "stack-md": "1.5rem",
                        "stack-lg": "2.5rem",
                        "stack-sm": "0.5rem",
                        "inset-card": "2rem"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-mobile": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline": ["Inter"],
                        "display": ["Inter"],
                        "label-md": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "headline-mobile": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "headline": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "display": ["30px", {
                            "lineHeight": "38px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "500"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .login-card-shadow {
            box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08), 0 8px 10px -6px rgba(15, 23, 42, 0.08);
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen flex flex-col">

    <header
        class="bg-surface dark:bg-on-background flex justify-between items-center w-full px-6 py-4 docked full-width top-0 z-50">
        <div class="flex items-center gap-2">
            <span class="font-display text-display text-primary dark:text-primary-fixed">SecureAdmin</span>
        </div>
        <div class="flex items-center gap-4">
            <button
                class="text-on-surface-variant dark:text-outline-variant hover:text-primary-container dark:hover:text-primary-fixed-dim transition-colors">
                <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
            </button>
            <button
                class="text-on-surface-variant dark:text-outline-variant hover:text-primary-container dark:hover:text-primary-fixed-dim transition-colors">
                <span class="material-symbols-outlined" data-icon="dark_mode">dark_mode</span>
            </button>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center px-gutter py-stack-lg relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none opacity-20">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary rounded-full blur-[120px]"></div>
            <div class="absolute top-1/2 -right-24 w-64 h-64 bg-secondary rounded-full blur-[100px]"></div>
        </div>

        <div class="w-full max-w-container-max bg-surface-container-lowest login-card-shadow rounded-xl p-inset-card relative z-10 sm:m-0 m-4 transition-all duration-300"
            id="loginCard">
            <div class="text-center mb-stack-lg">
                <h1 class="font-display text-display text-on-surface mb-2">Admin Login</h1>
                <p class="font-body-md text-body-md text-on-surface-variant">Enter your credentials to access the
                    console</p>
            </div>

            <form action="{{ route('admin.login') }}" method="POST" class="space-y-stack-md" id="loginForm" novalidate>
                @csrf

                <div class="space-y-stack-sm">
                    <label class="block font-label-md text-label-md text-on-surface-variant" for="email">Email
                        Address</label>
                    <div class="relative">
                        <input
                            class="w-full px-4 py-3 bg-surface-container-low border @error('email') border-error ring-error @else border-outline-variant @enderror rounded-lg font-body-md text-body-md focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:border-primary transition-all outline-none"
                            id="email" name="email" placeholder="name@secureadmin.com" value="{{ old('email') }}"
                            required type="email">
                    </div>
                    <p class="hidden font-label-sm text-label-sm text-error mt-1" id="emailError">Please enter a valid
                        administrative email.</p>

                    @error('email')
                        <p class="font-label-sm text-label-sm text-error mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-stack-sm">
                    <div class="flex justify-between items-center">
                        <label class="block font-label-md text-label-md text-on-surface-variant"
                            for="password">Password</label>
                        <a class="font-label-sm text-label-sm text-primary hover:underline transition-all"
                            href="#">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full px-4 py-3 bg-surface-container-low border @error('password') border-error ring-error @else border-outline-variant @enderror rounded-lg font-body-md text-body-md focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:border-primary transition-all outline-none"
                            id="password" name="password" placeholder="••••••••" required type="password">
                    </div>
                    <p class="hidden font-label-sm text-label-sm text-error mt-1" id="passwordError">Password is
                        required to proceed.</p>

                    @error('password')
                        <p class="font-label-sm text-label-sm text-error mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center space-x-2 py-1">
                    <input
                        class="w-4 h-4 text-primary border-outline-variant rounded-sm focus:ring-primary focus:ring-offset-0 cursor-pointer"
                        id="remember" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}
                        type="checkbox">
                    <label class="font-body-md text-body-md text-on-surface-variant cursor-pointer select-none"
                        for="remember">Remember this device</label>
                </div>

                <button
                    class="w-full bg-primary text-on-primary py-3.5 rounded-lg font-label-md text-label-md font-bold hover:bg-primary-container active:scale-[0.98] transition-all duration-200 shadow-sm border-t border-white/10"
                    id="submitBtn" type="submit">
                    Sign In to Console
                </button>
            </form>

            <div class="mt-stack-lg pt-stack-md border-t border-outline-variant text-center">
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Internal System. Authorized Personnel Only.
                </p>
            </div>
        </div>
    </main>

    <footer
        class="bg-transparent fixed bottom-0 w-full flex flex-col md:flex-row justify-center items-center gap-4 pb-6 px-4 z-50">
        <div class="flex gap-4">
            <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant dark:text-secondary-fixed-dim hover:text-primary transition-opacity opacity-80 hover:opacity-100"
                href="#">Privacy Policy</a>
            <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant dark:text-secondary-fixed-dim hover:text-primary transition-opacity opacity-80 hover:opacity-100"
                href="#">Terms of Service</a>
            <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant dark:text-secondary-fixed-dim hover:text-primary transition-opacity opacity-80 hover:opacity-100"
                href="#">Security Audit</a>
        </div>
        <p class="font-label-sm text-label-sm text-secondary dark:text-secondary-fixed opacity-80">© {{ date('Y') }}
            SecureAdmin Systems. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const submitBtn = document.getElementById('submitBtn');
            const loginCard = document.getElementById('loginCard');

            const validateField = (input, errorElement) => {
                if (!input.value || input.value.trim() === '') {
                    input.classList.add('border-error', 'ring-error');
                    errorElement.classList.remove('hidden');
                    return false;
                } else {
                    input.classList.remove('border-error', 'ring-error');
                    errorElement.classList.add('hidden');
                    return true;
                }
            };

            const validateEmailFormat = (email) => {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            };

            loginForm.addEventListener('submit', (e) => {
                // تفعيل فحص واجهة المستخدم أولاً
                const isEmailValid = validateField(emailInput, emailError);
                const isPasswordValid = validateField(passwordInput, passwordError);

                let isFormatValid = true;
                if (isEmailValid && !validateEmailFormat(emailInput.value)) {
                    emailError.textContent = "Please use a valid email format.";
                    emailError.classList.remove('hidden');
                    emailInput.classList.add('border-error');
                    isFormatValid = false;
                }

                // إذا فشل الفحص الأمامي، أوقف الإرسال فوراً
                if (!isEmailValid || !isPasswordValid || !isFormatValid) {
                    e.preventDefault();
                    return;
                }

                // مظهر جاري تسجيل الدخول البصري قبل إرسال الطلب الفعلي للسيرفر
                submitBtn.disabled = true;
                submitBtn.textContent = "Authenticating...";
                submitBtn.classList.add('opacity-70', 'cursor-not-allowed');
                loginCard.classList.add('scale-[0.99]', 'opacity-80');

                // هنا نترك النموذج يذهب للسيرفر طبيعياً ليفحصه لارافل عبر الـ LoginController
            });

            // تنظيف التنسيقات عند الكتابة الفورية
            [emailInput, passwordInput].forEach(input => {
                input.addEventListener('input', () => {
                    input.classList.remove('border-error', 'ring-error');
                    const err = input.id === 'email' ? emailError : passwordError;
                    err.classList.add('hidden');
                });
            });
        });
    </script>

</body>

</html>
