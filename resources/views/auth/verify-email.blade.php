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
                        <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Verify Email
                        </h2>

                        <div class="mb-6 text-gray-300 text-sm">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-6 p-4 bg-green-900/30 border border-green-600/30 rounded-lg text-green-400 text-sm font-medium">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                                @csrf
                                <button type="submit" class="w-full sm:w-auto bg-gradient-to-r from-teal-500 to-purple-600 hover:from-teal-600 hover:to-purple-700 text-white font-medium py-2.5 px-6 rounded-lg shadow-md hover:shadow-lg transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    {{ __('Resend Verification Email') }}
                                </button>
                            </form>

                            <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto">
                                @csrf
                                <button type="submit" class="w-full sm:w-auto bg-gray-700 hover:bg-gray-600 text-gray-300 font-medium py-2.5 px-6 rounded-lg border border-gray-600 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
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