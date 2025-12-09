<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PLTS Indonesia Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        @keyframes float2 {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(-180deg); }
        }
        
        @keyframes float3 {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(90deg); }
        }
        
        @keyframes pulse-glow {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 0.9; }
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            background: linear-gradient(135deg, #0EA5E9 0%, #38BDF8 25%, #0284C7 50%, #0EA5E9 75%, #38BDF8 100%);
            background-size: 400% 400%;
            animation: gradient-shift 15s ease infinite;
        }
        
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            animation-duration: 20s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
        }
        
        .shape-1 {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 5%;
            animation-name: float;
        }
        
        .shape-2 {
            width: 200px;
            height: 200px;
            bottom: 10%;
            right: 5%;
            animation-name: float2;
            animation-delay: 2s;
        }
        
        .shape-3 {
            width: 150px;
            height: 150px;
            top: 50%;
            right: 15%;
            animation-name: float3;
            animation-delay: 5s;
        }
        
        .shape-4 {
            width: 250px;
            height: 250px;
            bottom: 20%;
            left: 10%;
            animation-name: float;
            animation-delay: 7s;
        }
        
        .shape-5 {
            width: 180px;
            height: 180px;
            top: 15%;
            right: 10%;
            animation-name: float2;
            animation-delay: 10s;
        }
        
        .login-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.85);
            box-shadow: 0 20px 60px rgba(14, 165, 233, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 70px rgba(14, 165, 233, 0.4);
        }
        
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.2);
        }
        
        .btn-login {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .btn-login::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.7s ease;
        }
        
        .btn-login:hover::after {
            left: 100%;
        }
        
        .btn-login:active {
            transform: scale(0.98);
        }
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        .animate-shake {
            animation: shake 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-sky-50 overflow-hidden">
    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
        <div class="floating-shape shape-5"></div>
    </div>

    <!-- Main Content -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <!-- Login Card -->
            <div class="login-card rounded-2xl overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-sky-500 to-sky-600 px-8 py-10 text-center relative">
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
                        <div class="absolute -top-10 -left-10 w-40 h-40 bg-white rounded-full"></div>
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-white rounded-full"></div>
                    </div>
                    
                    <div class="relative">
                        <div class="bg-white/20 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6 shadow-lg pulse-glow">
                            <i class="fas fa-user-shield text-white text-4xl"></i>
                        </div>
                        <h1 class="text-3xl font-bold text-white mb-3">PLTS Indonesia</h1>
                        <p class="text-sky-100 font-medium">Silakan login untuk melanjutkan</p>
                    </div>
                </div>

                <!-- Form -->
                <div class="px-8 py-10">
                    <!-- Error Messages -->
                    @if($errors->any())
                        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                            <div class="flex items-center">
                                <div class="bg-red-100 w-10 h-10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-exclamation-circle text-red-600"></i>
                                </div>
                                <div>
                                    @foreach($errors->all() as $error)
                                        <p class="text-red-600 text-sm font-medium">{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                            <div class="flex items-center">
                                <div class="bg-red-100 w-10 h-10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-exclamation-circle text-red-600"></i>
                                </div>
                                <p class="text-red-600 text-sm font-medium">{{ session('error') }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                            <div class="flex items-center">
                                <div class="bg-green-100 w-10 h-10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-check-circle text-green-600"></i>
                                </div>
                                <p class="text-green-600 text-sm font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf
                        
                        <!-- Email Input -->
                        <div class="mb-7">
                            <label for="email" class="block text-sm font-semibold text-sky-900 mb-3 flex items-center">
                                <div class="bg-sky-100 w-8 h-8 rounded-full flex items-center justify-center mr-2">
                                    <i class="fas fa-envelope text-sky-600"></i>
                                </div>
                                <span>Email Address</span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-input w-full px-5 py-4 border border-sky-200 rounded-xl focus:outline-none focus:border-sky-500 transition"
                                    placeholder="admin@example.com"
                                    required
                                    autocomplete="email"
                                    autofocus
                                >
                                <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-check-circle text-sky-500 opacity-0 transition-opacity" id="emailValidIcon"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="mb-7">
                            <label for="password" class="block text-sm font-semibold text-sky-900 mb-3 flex items-center">
                                <div class="bg-sky-100 w-8 h-8 rounded-full flex items-center justify-center mr-2">
                                    <i class="fas fa-lock text-sky-600"></i>
                                </div>
                                <span>Password</span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password"
                                    class="form-input w-full px-5 py-4 border border-sky-200 rounded-xl focus:outline-none focus:border-sky-500 transition pr-12"
                                    placeholder="••••••••"
                                    required
                                    autocomplete="current-password"
                                >
                                <button 
                                    type="button" 
                                    id="togglePassword"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-sky-600 hover:text-sky-700 focus:outline-none transition"
                                >
                                    <i class="fas fa-eye" id="eyeIcon"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between mb-8">
                            <label class="flex items-center cursor-pointer">
                                <div class="relative">
                                    <input 
                                        type="checkbox" 
                                        name="remember"
                                        class="sr-only"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                    >
                                    <div class="w-5 h-5 border-2 border-sky-400 rounded flex items-center justify-center">
                                        <i class="fas fa-check text-white text-xs opacity-0 transition-opacity" id="checkIcon"></i>
                                    </div>
                                </div>
                                <span class="ml-3 text-sm font-medium text-sky-800">Ingat saya</span>
                            </label>
                        </div>

                        <!-- Login Button -->
                        <button 
                            type="submit"
                            class="btn-login w-full bg-gradient-to-r from-sky-500 to-sky-600 text-white font-bold py-4 px-4 rounded-xl hover:from-sky-600 hover:to-sky-700 focus:outline-none transition-all duration-200 shadow-lg hover:shadow-xl"
                            id="submitBtn"
                        >
                            <i class="fas fa-sign-in-alt mr-3"></i>Masuk ke Dashboard
                        </button>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-8">
                <p class="text-sm text-white font-medium bg-sky-500/30 backdrop-blur-sm py-2 px-4 rounded-full inline-block">
                    <i class="fas fa-shield-alt mr-2"></i>© {{ date('Y') }} PLTS Indonesia. All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        const emailInput = document.getElementById('email');
        const emailValidIcon = document.getElementById('emailValidIcon');
        const rememberCheckbox = document.getElementById('remember');
        const checkIcon = document.getElementById('checkIcon');
        const loginForm = document.getElementById('loginForm');
        const submitBtn = document.getElementById('submitBtn');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle eye icon
            if (type === 'password') {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        });

        // Email validation
        emailInput.addEventListener('input', function() {
            const email = emailInput.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (emailRegex.test(email)) {
                emailValidIcon.classList.remove('opacity-0');
                emailValidIcon.classList.add('opacity-100');
            } else {
                emailValidIcon.classList.remove('opacity-100');
                emailValidIcon.classList.add('opacity-0');
            }
        });

        // Remember me checkbox
        if (rememberCheckbox) {
            rememberCheckbox.addEventListener('change', function() {
                if (rememberCheckbox.checked) {
                    checkIcon.classList.remove('opacity-0');
                    checkIcon.classList.add('opacity-100');
                } else {
                    checkIcon.classList.remove('opacity-100');
                    checkIcon.classList.add('opacity-0');
                }
            });

            // Initialize check icon state
            if (rememberCheckbox.checked) {
                checkIcon.classList.remove('opacity-0');
                checkIcon.classList.add('opacity-100');
            }
        }

        // Handle form submission
        loginForm.addEventListener('submit', function(e) {
            // Show loading state
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...';
            submitBtn.disabled = true;
            
            // Add ripple effect
            submitBtn.classList.add('from-sky-600', 'to-sky-700');
        });

        // Add floating animation to the card on load
        window.addEventListener('load', function() {
            const card = document.querySelector('.login-card');
            if (card) {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px) scale(0.95)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0) scale(1)';
                }, 300);
            }

            // Auto-validate email if there's already a value
            if (emailInput.value) {
                emailInput.dispatchEvent(new Event('input'));
            }
        });
    </script>
</body>
</html>
