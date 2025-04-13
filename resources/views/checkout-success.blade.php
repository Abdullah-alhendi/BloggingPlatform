<x-app-layout>
  <x-slot name="header">
    <header class="relative text-center py-6 bg-gradient-to-br from-gray-100 to-gray-300 dark:from-gray-900 dark:to-gray-700 rounded-lg shadow-xl">
      <h2 class="text-4xl font-extrabold text-gray-800 dark:text-gray-100">
        Payment Confirmed
      </h2>
      <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
        Welcome to a world of premium features and exclusive content!
      </p>
    </header>
  </x-slot>

  <div class="relative max-w-7xl mx-auto px-6 sm:px-8 py-12">
    <!-- Enhanced subtle background with gradient overlay -->
    <div class="absolute inset-0 bg-grid-pattern opacity-5 dark:opacity-10" aria-hidden="true"></div>
    
    <!-- Main confirmation card -->
    <section class="relative bg-gradient-to-br from-white to-gray-100 dark:from-gray-800 dark:to-gray-700 rounded-lg shadow-xl p-10 text-center opacity-0 animate-fade-in animation-delay-300 duration-700">
      <!-- Success icon -->
      <div class="inline-flex items-center justify-center mb-6 h-20 w-20 mx-auto rounded-full bg-green-100 dark:bg-green-900/30">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      
      <h2 class="text-4xl font-extrabold text-green-700 dark:text-green-300 mb-6">Payment Successful!</h2>
      
      <p class="text-xl text-gray-700 dark:text-gray-300 mb-8">
        Thank you for your subscription. Your Premium access is now live, unlocking exclusive features inspired by global excellence.
      </p>

      <!-- Premium features section -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
        <div class="flex flex-col items-center p-5 rounded-lg bg-white/50 dark:bg-gray-800/50">
          <div class="rounded-full bg-blue-100 dark:bg-blue-900/30 p-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
          </div>
          <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Premium Content</h3>
          <p class="text-gray-500 dark:text-gray-400 text-center text-sm">
            Access exclusive articles and in-depth guides
          </p>
        </div>
        
        <div class="flex flex-col items-center p-5 rounded-lg bg-white/50 dark:bg-gray-800/50">
          <div class="rounded-full bg-purple-100 dark:bg-purple-900/30 p-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
          </div>
          <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Priority Support</h3>
          <p class="text-gray-500 dark:text-gray-400 text-center text-sm">
            Get faster responses and dedicated service
          </p>
        </div>
        
        <div class="flex flex-col items-center p-5 rounded-lg bg-white/50 dark:bg-gray-800/50">
          <div class="rounded-full bg-green-100 dark:bg-green-900/30 p-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
          </div>
          <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Advanced Tools</h3>
          <p class="text-gray-500 dark:text-gray-400 text-center text-sm">
            Unlock powerful premium-only features
          </p>
        </div>
      </div>

      <div class="mt-8">
        <a href="{{ route('home') }}" class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-bold px-12 py-4 rounded-lg shadow-lg transition-transform transform hover:scale-110">
          Explore Your Dashboard
        </a>
      </div>

      <div class="mt-6">
        <p class="text-md text-gray-600 dark:text-gray-400">
          Begin your journey and enjoy the finest curated content with your Premium membership.
        </p>
      </div>
    </section>
    
    <!-- Receipt information -->
    <div class="mt-6 text-center opacity-0 animate-fade-in animation-delay-700 duration-700">
      <p class="text-gray-600 dark:text-gray-400 text-sm">
        A receipt has been sent to your email address. If you have any questions, please contact our support team.
      </p>
    </div>
  </div>

  <!-- Enhanced Animations -->
  <style>
    @keyframes fade-in {
      0% { opacity: 0; transform: translateY(12px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    
    .animation-delay-300 { animation-delay: 300ms; }
    .animation-delay-500 { animation-delay: 500ms; }
    .animation-delay-700 { animation-delay: 700ms; }
    
    .animate-fade-in { animation: fade-in 0.8s forwards cubic-bezier(0.18, 0.89, 0.32, 1.15); }
    
    .bg-grid-pattern {
      background-image: linear-gradient(to right, rgba(0,0,0,.05) 1px, transparent 1px),
                        linear-gradient(to bottom, rgba(0,0,0,.05) 1px, transparent 1px);
      background-size: 30px 30px;
    }
    
    /* Dark mode grid pattern */
    @media (prefers-color-scheme: dark) {
      .bg-grid-pattern {
        background-image: linear-gradient(to right, rgba(255,255,255,.05) 1px, transparent 1px),
                          linear-gradient(to bottom, rgba(255,255,255,.05) 1px, transparent 1px);
      }
    }
  </style>
</x-app-layout>