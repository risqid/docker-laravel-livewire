<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livewire Mastery Lab</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|jetbrains-mono:500" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
        code { font-family: 'JetBrains Mono', monospace; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); }
    </style>
</head>
<body class="bg-[#FBFBFE] antialiased text-slate-900">

    <div class="flex min-h-screen">
        <aside class="w-80 bg-white border-r border-slate-200/60 flex flex-col shrink-0">
            <div class="p-8">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="w-8 h-8 bg-indigo-600 rounded-lg shadow-lg shadow-indigo-200 flex items-center justify-center">
                        <span class="text-white font-black text-xs">LW</span>
                    </div>
                    <h1 class="text-lg font-bold tracking-tight text-slate-950">Mastery Lab</h1>
                </div>
                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-[0.2em]">Semarang Edition • 2026</p>
            </div>

            <nav class="flex-1 px-4 space-y-1">
                <div class="group relative px-4 py-3 rounded-2xl bg-slate-50 border border-slate-100 transition-all hover:border-slate-200">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Module 01</span>
                        <div class="flex items-center space-x-1">
                             <span class="text-[10px] font-bold text-emerald-600 uppercase">Passed</span>
                             <div class="w-1.5 h-1.5 rounded-full bg-emerald-500"></div>
                        </div>
                    </div>
                    <h3 class="text-sm font-bold text-slate-700 mt-1">The Counter</h3>
                </div>

                <div class="group relative px-4 py-3 rounded-2xl bg-indigo-50/50 border border-indigo-100 shadow-sm">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-black text-indigo-400 uppercase tracking-widest leading-none">Module 02</span>
                        <div class="flex items-center space-x-1">
                             <span class="text-[10px] font-bold text-indigo-600 uppercase">Active</span>
                             <div class="w-1.5 h-1.5 rounded-full bg-indigo-500 animate-pulse"></div>
                        </div>
                    </div>
                    <h3 class="text-sm font-bold text-indigo-900 mt-1 italic">Reactivity Preview</h3>
                </div>

                <div class="mt-10 mb-4 px-4 text-[10px] font-black text-slate-300 uppercase tracking-[0.3em]">Curriculum</div>
                <div class="px-4 py-3 opacity-40 grayscale space-y-4">
                    <div class="text-xs font-semibold text-slate-500 flex items-center space-x-3">
                        <div class="w-4 h-4 rounded border border-slate-300"></div>
                        <span>SPA Navigation</span>
                    </div>
                    <div class="text-xs font-semibold text-slate-500 flex items-center space-x-3">
                        <div class="w-4 h-4 rounded border border-slate-300"></div>
                        <span>Event Listeners</span>
                    </div>
                </div>
            </nav>

            <div class="p-8 border-t border-slate-100">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-slate-200 to-slate-100 border border-slate-200"></div>
                    <div>
                        <p class="text-xs font-bold text-slate-900 leading-none">Developer</p>
                        <p class="text-[10px] text-slate-400 mt-1">Learning Track: 12%</p>
                    </div>
                </div>
            </div>
        </aside>

        <main class="flex-1 flex flex-col">
            <header class="h-20 glass-card border-b border-slate-200/60 flex items-center justify-between px-10 sticky top-0 z-10">
                <div class="flex items-center space-x-4">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Workspace</span>
                    <span class="text-slate-200">/</span>
                    <span class="text-sm font-bold text-slate-800">Module 02: Reactivity</span>
                </div>
                
                <div class="flex items-center space-x-6">
                    <div class="hidden md:block text-right">
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-tighter">Current Stack</p>
                        <p class="text-xs font-bold text-indigo-600">Vite + Docker</p>
                    </div>
                    <div class="w-px h-8 bg-slate-200"></div>
                    <button class="text-slate-400 hover:text-indigo-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </button>
                </div>
            </header>

            <section class="p-16 overflow-y-auto flex-1">
                <div class="max-w-6xl mx-auto space-y-16">
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                        
                        <div class="space-y-6">
                            <div class="flex items-center space-x-3 text-emerald-600">
                                <span class="text-[10px] font-black uppercase tracking-widest">Stable Lab</span>
                                <div class="h-px flex-1 bg-emerald-100"></div>
                            </div>
                            <div class="bg-white p-1 rounded-[2.5rem] shadow-2xl shadow-slate-200/50 border border-slate-100">
                                <div class="bg-slate-50/50 rounded-[2rem] p-4 border border-white">
                                    <livewire:counter />
                                </div>
                            </div>
                            <p class="text-xs text-slate-400 px-6 leading-relaxed">
                                <strong class="text-slate-600">Note:</strong> This component uses <code class="text-indigo-600">wire:click</code>. It requires a manual action to trigger the PHP lifecycle.
                            </p>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-center space-x-3 text-indigo-600 font-italic">
                                <span class="text-[10px] font-black uppercase tracking-widest italic text-indigo-600">Experimental Lab</span>
                                <div class="h-px flex-1 bg-indigo-100"></div>
                            </div>
                            <div class="bg-white p-1 rounded-[2.5rem] shadow-2xl shadow-indigo-100 border border-indigo-50">
                                <div class="bg-indigo-50/20 rounded-[2rem] p-4 border border-white">
                                     <livewire:profile-preview />
                                </div>
                            </div>
                            <p class="text-xs text-slate-400 px-6 leading-relaxed italic">
                                <strong class="text-indigo-600 italic font-bold">Concept:</strong> We are using <code class="text-indigo-600 italic font-bold">wire:model.live</code>. The PHP property updates as you type.
                            </p>
                        </div>

                    </div>

                </div>
            </section>
        </main>
    </div>

    @livewireScripts
</body>
</html>