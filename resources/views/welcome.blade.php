<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#3f465c",
                        "tertiary-container": "#bc4800",
                        "on-tertiary-fixed": "#360f00",
                        "background": "#f8f9ff",
                        "on-primary-fixed": "#00174b",
                        "on-tertiary-fixed-variant": "#7d2d00",
                        "on-tertiary-container": "#ffede6",
                        "surface-container-lowest": "#ffffff",
                        "error": "#ba1a1a",
                        "on-secondary": "#ffffff",
                        "surface-container-highest": "#d3e4fe",
                        "secondary-fixed-dim": "#bec6e0",
                        "inverse-on-surface": "#eaf1ff",
                        "on-primary": "#ffffff",
                        "on-error-container": "#93000a",
                        "secondary": "#565e74",
                        "on-primary-fixed-variant": "#003ea8",
                        "outline-variant": "#c3c6d7",
                        "on-surface-variant": "#434655",
                        "surface-container-high": "#dce9ff",
                        "on-surface": "#0b1c30",
                        "outline": "#737686",
                        "inverse-surface": "#213145",
                        "surface-dim": "#cbdbf5",
                        "secondary-container": "#dae2fd",
                        "on-secondary-container": "#5c647a",
                        "surface-variant": "#d3e4fe",
                        "tertiary-fixed": "#ffdbcd",
                        "primary-container": "#2563eb",
                        "tertiary": "#943700",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#ffb596",
                        "surface": "#f8f9ff",
                        "secondary-fixed": "#dae2fd",
                        "primary": "#004ac6",
                        "surface-tint": "#0053db",
                        "primary-fixed": "#dbe1ff",
                        "on-background": "#0b1c30",
                        "surface-container": "#e5eeff",
                        "on-secondary-fixed": "#131b2e",
                        "on-primary-container": "#eeefff",
                        "surface-container-low": "#eff4ff",
                        "surface-bright": "#f8f9ff",
                        "on-tertiary": "#ffffff",
                        "primary-fixed-dim": "#b4c5ff",
                        "error-container": "#ffdad6",
                        "inverse-primary": "#b4c5ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "440px",
                        "stack-lg": "2.5rem",
                        "stack-sm": "0.5rem",
                        "stack-md": "1.5rem",
                        "inset-card": "2rem",
                        "gutter": "1rem"
                    },
                    "fontFamily": {
                        "label-sm": ["Inter"],
                        "headline-mobile": ["Inter"],
                        "headline": ["Inter"],
                        "display": ["Inter"],
                        "body-md": ["Inter"],
                        "label-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-sm": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "headline-mobile": ["20px", {
                            "lineHeight": "28px",
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
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "500"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .hero-gradient {
            background: radial-gradient(circle at 50% 50%, rgba(37, 99, 235, 0.05) 0%, rgba(248, 249, 255, 0) 70%);
        }
    </style>
</head>

<body class="bg-background text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- TopNavBar -->
    <header class="w-full top-0 sticky z-50 bg-surface shadow-sm transition-all duration-300">
        <nav class="flex justify-between items-center px-gutter py-4 max-w-7xl mx-auto">
            <div class="flex items-center gap-8">
                <span class="font-display text-display text-primary">Absolute</span>
                <div class="hidden md:flex items-center gap-6">
                    <a class="font-label-md text-label-md text-primary font-bold border-b-2 border-primary transition-colors"
                        href="#">Features</a>
                    <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors"
                        href="#">About</a>
                    <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors"
                        href="#">Support</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="px-4 py-2 font-label-md text-label-md text-primary hover:text-primary-fixed-dim active:scale-95 transition-all">Login</button>
                <button
                    class="px-6 py-2 bg-primary text-on-primary rounded-lg font-label-md text-label-md shadow-sm active:scale-95 transition-all hover:bg-surface-tint">Get
                    Started</button>
            </div>
        </nav>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="relative overflow-hidden pt-24 pb-32 hero-gradient">
            <div class="max-w-7xl mx-auto px-gutter text-center">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container/10 border border-primary-container/20 mb-8 animate-fade-in">
                    <span class="material-symbols-outlined text-[18px] text-primary">verified_user</span>
                    <span class="text-label-sm font-label-sm text-primary">NOW IN ENTERPRISE EARLY ACCESS</span>
                </div>
                <h1 class="font-display text-[48px] md:text-[64px] leading-tight text-on-surface mb-6 tracking-tighter">
                    Absolute Control over your <span class="text-primary">Workflow</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-10 leading-relaxed">
                    Experience unprecedented efficiency and precision with our secure management platform.
                    Built for high-stakes environments where every millisecond and every byte of data matters.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                    <button
                        class="w-full sm:w-auto px-8 py-4 bg-primary text-on-primary rounded-xl font-label-md text-label-md shadow-xl shadow-primary/20 hover:shadow-primary/30 transition-all active:scale-[0.98]">
                        Get Started
                    </button>
                    <button
                        class="w-full sm:w-auto px-8 py-4 bg-surface-container-highest/50 text-on-surface-variant border border-outline-variant rounded-xl font-label-md text-label-md hover:bg-surface-container-highest transition-all active:scale-[0.98]">
                        Learn More
                    </button>
                </div>
                <!-- Hero Visual Placeholder -->
                <div
                    class="mt-20 relative mx-auto max-w-5xl rounded-2xl border border-outline-variant bg-white shadow-2xl overflow-hidden aspect-video group">
                    <img class="w-full h-full object-cover grayscale-[20%] group-hover:grayscale-0 transition-all duration-700"
                        data-alt="A clean and professional dashboard interface showing complex data analytics with elegant charts and minimalist UI elements. The design uses a white and light blue color palette, featuring sharp lines, plenty of negative space, and a high-tech corporate aesthetic. Soft diffused lighting gives the interface a premium, futuristic feel that emphasizes reliability and security."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCweiXh3Nk9wPu9wexDtUIb8H7xoK-oAL5Ot1xlFiJ-NZp4yZW1v7UpuBE_q0XPkV12QxjQwWI6awPYiI_GJ5yH9QWnW1QpZUqtH5ScAz0AOhTm5Eo533vSMpau4viymvkSWuvovPbQcN5Wv5KlvVj6H9V0aF8DCZ_YkbLR_1_JFwDZJZXZzLTtwxFAAv_eiuxsnFxt7h7BqXfNGGePhJx_4-N2i1JHzpUDu6tzPn6D2ZI-VDPGRHNuNpXrlU5UDiIKSzgtc05Gjbg1" />
                    <div class="absolute inset-0 bg-gradient-to-t from-background/40 to-transparent"></div>
                </div>
            </div>
        </section>
        <!-- Features Bento Grid -->
        <section class="py-stack-lg bg-surface-container-low">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="text-center mb-16">
                    <h2 class="font-headline text-headline text-on-surface mb-4">Engineered for Performance</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Three pillars of the Absolute
                        ecosystem.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div
                        class="p-inset-card bg-surface rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined" data-icon="shield">shield</span>
                        </div>
                        <h3 class="font-headline text-headline text-on-surface mb-3">Advanced Security</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Military-grade encryption and multi-factor authentication protocols keep your data
                            indestructible and private.
                        </p>
                    </div>
                    <!-- Feature 2 -->
                    <div
                        class="p-inset-card bg-surface rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="w-12 h-12 rounded-xl bg-tertiary-container/10 flex items-center justify-center mb-6 group-hover:bg-tertiary group-hover:text-on-tertiary transition-all">
                            <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                        </div>
                        <h3 class="font-headline text-headline text-on-surface mb-3">Real-time Analytics</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Monitor every metric as it happens with zero-latency data streaming and visual intelligence
                            reporting.
                        </p>
                    </div>
                    <!-- Feature 3 -->
                    <div
                        class="p-inset-card bg-surface rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="w-12 h-12 rounded-xl bg-secondary-container/30 flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-on-secondary transition-all">
                            <span class="material-symbols-outlined" data-icon="sync_alt">sync_alt</span>
                        </div>
                        <h3 class="font-headline text-headline text-on-surface mb-3">Seamless Integration</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Connect your entire tech stack effortlessly with our robust API and pre-built enterprise
                            connectors.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-stack-lg bg-surface">
            <div class="max-w-5xl mx-auto px-gutter">
                <div class="bg-inverse-surface rounded-[2rem] p-10 md:p-16 text-center relative overflow-hidden">
                    <div class="absolute -top-24 -right-24 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-tertiary/10 rounded-full blur-3xl"></div>
                    <h2 class="font-headline text-[32px] text-inverse-on-surface mb-6 relative z-10">Ready to take
                        absolute control?</h2>
                    <p class="font-body-lg text-body-lg text-outline-variant mb-10 max-w-xl mx-auto relative z-10">
                        Join 2,000+ organizations building the future of secure operations on our platform.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4 relative z-10">
                        <button
                            class="px-8 py-4 bg-primary text-on-primary rounded-xl font-label-md text-label-md hover:brightness-110 transition-all">
                            Create Free Account
                        </button>
                        <button
                            class="px-8 py-4 border border-outline text-inverse-on-surface rounded-xl font-label-md text-label-md hover:bg-white/5 transition-all">
                            Contact Sales
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="w-full bg-surface-container-low">
        <div
            class="flex flex-col md:flex-row justify-between items-center px-gutter py-stack-md max-w-7xl mx-auto gap-stack-sm">
            <div class="flex flex-col items-center md:items-start gap-2">
                <span class="font-headline text-headline text-on-surface">Absolute</span>
                <p class="font-body-md text-body-md text-on-surface-variant">© 2024 Absolute. All rights reserved.</p>
            </div>
            <div class="flex gap-8">
                <a class="font-body-md text-body-md text-on-surface-variant hover:underline hover:text-primary transition-opacity"
                    href="#">Privacy Policy</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:underline hover:text-primary transition-opacity"
                    href="#">Terms of Service</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:underline hover:text-primary transition-opacity"
                    href="#">Contact Us</a>
            </div>
        </div>
    </footer>
    <script>
        // Simple scroll behavior for header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('py-2', 'shadow-md');
                header.classList.remove('py-4', 'shadow-sm');
            } else {
                header.classList.remove('py-2', 'shadow-md');
                header.classList.add('py-4', 'shadow-sm');
            }
        });

        // Initialize Material Symbols
        document.querySelectorAll('[data-icon]').forEach(el => {
            const iconName = el.getAttribute('data-icon');
            const span = document.createElement('span');
            span.className = 'material-symbols-outlined';
            span.textContent = iconName;
            if (el.getAttribute('data-weight') === 'fill') {
                span.style.fontVariationSettings = "'FILL' 1";
            }
            el.innerHTML = '';
            el.appendChild(span);
        });
    </script>
</body>

</html>
