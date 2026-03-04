<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livewire Mastery Dashboard</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#F8F9FA] font-sans antialiased text-gray-900">

    <div class="flex min-h-screen">
        <aside class="w-72 bg-white border-r border-gray-200 flex flex-col shrink-0">
            <div class="p-6 border-b border-gray-100">
                <h1 class="text-xl font-bold tracking-tight text-blue-600 italic uppercase">Mastery Log</h1>
                <p class="text-xs text-gray-400 mt-1 font-medium">Laravel 12 + Livewire 4</p>
            </div>

            <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                <a href="#" class="flex items-center justify-between p-3 bg-blue-50 border border-blue-100 rounded-xl group">
                    <div class="flex flex-col">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-tighter">Module 1</span>
                        <span class="text-sm font-bold text-blue-700">The Counter</span>
                    </div>
                    <span class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.5)]"></span>
                </a>

                <a href="#" class="flex items-center justify-between p-3 hover:bg-gray-50 border border-transparent rounded-xl transition-all">
                    <div class="flex flex-col">
                        <span class="text-xs font-bold text-gray-400 uppercase tracking-tighter">Module 2</span>
                        <span class="text-sm font-bold text-gray-600 italic text-blue-600">Reactivity Preview</span>
                    </div>
                    <span class="w-2 h-2 rounded-full bg-yellow-400"></span>
                </a>

                <div class="pt-4 pb-2 px-3 text-[10px] font-bold text-gray-400 uppercase tracking-widest">Locked Modules</div>
                <div class="opacity-40 pointer-events-none space-y-2">
                    <div class="p-3 border border-dashed border-gray-200 rounded-xl text-sm font-medium text-gray-400">Module 3: SPA Navigation</div>
                    <div class="p-3 border border-dashed border-gray-200 rounded-xl text-sm font-medium text-gray-400">Module 4: Events</div>
                </div>
            </nav>

            <div class="p-6 border-t border-gray-100 text-[10px] text-gray-400 font-bold uppercase tracking-widest">
                User: @auth {{ auth()->user()->name }} @else Guest Mode @endauth
            </div>
        </aside>

        <main class="flex-1 flex flex-col">
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8">
                <div class="flex items-center space-x-2 text-sm">
                    <span class="text-gray-400">Path:</span>
                    <span class="font-bold text-gray-700">Modules</span>
                    <span class="text-gray-300">/</span>
                    <span class="font-bold text-blue-600">Active Lab</span>
                </div>
                
                <div class="flex items-center space-x-4">
                   <div class="h-8 w-8 rounded-full bg-gray-200 border border-gray-300"></div>
                </div>
            </header>

            <section class="p-12 overflow-y-auto flex-1 flex flex-col items-center">
                <div class="max-w-4xl w-full space-y-12">
                    
                    <div class="space-y-4">
                        <div class="inline-block px-3 py-1 bg-blue-600 text-[10px] font-black text-white uppercase rounded-full tracking-widest">Active Lab</div>
                        <h2 class="text-4xl font-black text-gray-900 leading-tight">Current Progress</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                        <div class="p-6 bg-white rounded-3xl border border-gray-100 shadow-sm transition-hover hover:shadow-md">
                             <livewire:counter />
                        </div>
                    </div>

                </div>
            </section>
        </main>
    </div>

    @livewireScripts
</body>
</html>