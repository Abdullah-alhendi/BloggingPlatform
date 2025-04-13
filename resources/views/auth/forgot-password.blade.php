<x-guest-layout>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 overflow-hidden">
        <!-- Enhanced Background Elements -->
        <div class="absolute inset-0 bg-grid-pattern opacity-10" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-noise-texture mix-blend-overlay opacity-30" aria-hidden="true"></div>
        
        <!-- Animated Background Glow Effects -->
        <div class="absolute -top-20 -left-20 w-96 h-96 bg-gradient-to-r from-teal-400/20 to-blue-500/20 rounded-full filter blur-3xl opacity-50 animate-pulse-slow" aria-hidden="true"></div>
        <div class="absolute -bottom-32 -right-20 w-80 h-80 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-full filter blur-3xl opacity-50 animate-pulse-slow animation-delay-2000" aria-hidden="true"></div>
        
        <!-- Floating Particles -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
            @foreach(range(1, 6) as $i)
                <div 
                    class="absolute particle-element w-{{ rand(4, 10) }} h-{{ rand(4, 10) }} 
                           bg-gradient-to-r {{ ['from-teal-400/30 to-blue-500/30', 'from-purple-500/30 to-pink-600/30'][rand(0, 1)] }} 
                           rounded-full filter blur-{{ rand(1, 2) }}xl opacity-{{ rand(5, 8) }}0 
                           animate-float-random"
                    style="top: {{ rand(0, 100) }}%; left: {{ rand(0, 100) }}%; animation-delay: {{ $i * 0.75 }}s; animation-duration: {{ rand(15, 25) }}s;"
                ></div>
            @endforeach
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center min-h-screen p-6">
            <!-- Logo Section with Animation -->
            <div class="mb-8 opacity-0 animate-fade-in animation-delay-300 duration-700">
                <a href="/" aria-label="Go to homepage" class="flex flex-col items-center">
                    <span class="sr-only">Home</span>
                    <!-- Main Logo with Enhanced Gradient -->
                    <span aria-hidden="true" class="text-4xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-teal-400 via-purple-500 to-pink-600 tracking-tighter mb-2 drop-shadow-lg transform transition-all hover:scale-105 duration-300">
                        {{env('APP_NAME')}}
                    </span>
                    <span class="text-sm text-gray-400 font-medium">
                        Share. Learn. Grow.
                    </span>
                </a>
            </div>

            <!-- Auth Card with Modern Styling -->
            <div class="w-full max-w-md opacity-0 animate-fade-in animation-delay-500 duration-700">
                <div class="bg-gray-800/90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden border border-gray-700/50 transform transition-all hover:scale-[1.01] duration-300">
                    <!-- Card Header with Decorative Element -->
                    <div class="relative h-3 bg-gradient-to-r from-teal-400 via-purple-500 to-pink-600"></div>
                    
                    <div class="p-8">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Forgot Password
                        </h2>

                        <div class="mb-6 text-gray-300 text-sm">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-5">
                                <x-label for="email" :value="__('Email')" class="text-gray-300 font-medium mb-1" />
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </div>
                                    <x-input 
                                        id="email" 
                                        class="pl-10 w-full rounded-lg border-gray-600 focus:border-purple-500 focus:ring focus:ring-purple-500/20 bg-gray-700 text-white transition-colors" 
                                        type="email" 
                                        name="email" 
                                        :value="old('email')" 
                                        required 
                                        autofocus 
                                        placeholder="your@email.com"
                                    />
                                </div>
                            </div>

                            <div class="flex items-center justify-between mb-6">
                                <a class="text-sm font-medium text-purple-400 hover:text-purple-300 transition-colors" href="{{ route('login') }}">
                                    {{ __('Back to login') }}
                                </a>

                                <button type="submit" class="bg-gradient-to-r from-teal-500 to-purple-600 hover:from-teal-600 hover:to-purple-700 text-white font-medium py-2.5 px-6 rounded-lg shadow-md hover:shadow-lg transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <p class="mt-8 text-sm text-center text-gray-400 opacity-0 animate-fade-in animation-delay-700 duration-700">
                © {{ date('Y') }} DevBlog. All rights reserved.
            </p>
        </div>
    </div>
    
    <!-- Animation Styles -->
    <style>
        @keyframes soft-glow {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 0.8; }
        }
        
        @keyframes float-random {
            0% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(5deg); }
            66% { transform: translate(-20px, 20px) rotate(-5deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }
        
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }
        
        @keyframes fade-in {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        .animation-delay-300 { animation-delay: 300ms; }
        .animation-delay-500 { animation-delay: 500ms; }
        .animation-delay-700 { animation-delay: 700ms; }
        .animation-delay-2000 { animation-delay: 2000ms; }
        
        .animate-soft-glow { animation: soft-glow 8s infinite ease-in-out; }
        .animate-pulse-slow { animation: pulse-slow 8s infinite ease-in-out; }
        .animate-float-random { animation: float-random 20s infinite ease-in-out; }
        .animate-fade-in { animation: fade-in 1s forwards ease-out; }
        
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(255,255,255,.1) 1px, transparent 1px),
                             linear-gradient(to bottom, rgba(255,255,255,.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        .bg-noise-texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }
    </style>
</x-guest-layout>