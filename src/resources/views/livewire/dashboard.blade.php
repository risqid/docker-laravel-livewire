<div>
<div wire:loading.delay.short 
     class="fixed inset-0 z-[9999] pointer-events-none">
    
    <div class="absolute inset-0 bg-slate-900/20 backdrop-blur-[2px]"></div>

    <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
         class="z-10 flex items-center space-x-2 bg-white px-6 py-4 rounded-full shadow-2xl border border-slate-100 ring-4 ring-white/50 w-max h-max">
        <div class="w-2.5 h-2.5 bg-indigo-600 rounded-full animate-bounce"></div>
        <div class="w-2.5 h-2.5 bg-indigo-600 rounded-full animate-bounce [animation-delay:-.3s]"></div>
        <div class="w-2.5 h-2.5 bg-indigo-600 rounded-full animate-bounce [animation-delay:-.5s]"></div>
    </div>

</div>
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
                <button 
                    wire:click="showModule('module1')" 
                    @class([
                        'w-full text-left group relative px-4 py-3 rounded-2xl border transition-all',
                        'bg-indigo-50 border-indigo-100 shadow-sm' => $activeModule === 'module1',
                        'bg-white border-transparent hover:bg-slate-50' => $activeModule !== 'module1'
                    ])
                >
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-black uppercase tracking-widest leading-none {{ $activeModule === 'module1' ? 'text-indigo-400' : 'text-slate-400' }}">Module 01</span>
                    </div>
                    <h3 class="text-sm font-bold mt-1 {{ $activeModule === 'module1' ? 'text-indigo-900' : 'text-slate-700' }}">The Counter</h3>
                </button>

                <button 
                    wire:click="showModule('module2')" 
                    @class([
                        'w-full text-left group relative px-4 py-3 rounded-2xl border transition-all mt-2',
                        'bg-indigo-50 border-indigo-100 shadow-sm' => $activeModule === 'module2',
                        'bg-white border-transparent hover:bg-slate-50' => $activeModule !== 'module2'
                    ])
                >
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-black uppercase tracking-widest leading-none {{ $activeModule === 'module2' ? 'text-indigo-400' : 'text-slate-400' }}">Module 02</span>
                    </div>
                    <h3 class="text-sm font-bold mt-1 {{ $activeModule === 'module2' ? 'text-indigo-900' : 'text-slate-700' }}">Reactivity Preview</h3>
                </button>

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

        <main class="flex-1 flex flex-col relative">
            <header class="h-20 glass-card border-b border-slate-200/60 flex items-center justify-between px-10 sticky top-0 z-10">
                <div class="flex items-center space-x-4">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Workspace</span>
                    <span class="text-slate-200">/</span>
                    <span class="text-sm font-bold text-slate-800">Module {{ $activeModule === 'module1' ? '01' : '02' }}</span>
                </div>
            </header>

            <section class="p-4 overflow-y-auto flex-1 relative">
                <div class="w-full max-w-2xl mx-auto py-12">
                    @if($activeModule === 'module1')
                        <div wire:transition class="space-y-6">
                            <div class="flex items-center space-x-3 text-emerald-600">
                                <span class="text-[10px] font-black uppercase tracking-widest">Stable Lab</span>
                                <div class="h-px flex-1 bg-emerald-100"></div>
                            </div>
                            <div class="bg-white p-1 rounded-[2.5rem] shadow-2xl shadow-slate-200/50 border border-slate-100">
                                <div class="bg-slate-50/50 rounded-[2rem] p-4 border border-white">
                                    <livewire:counter />
                                </div>
                            </div>
                        </div>
                    @elseif($activeModule === 'module2')
                        <div wire:transition class="space-y-6">
                            <div class="flex items-center space-x-3 text-indigo-600">
                                <span class="text-[10px] font-black uppercase tracking-widest italic text-indigo-600">Experimental Lab</span>
                                <div class="h-px flex-1 bg-indigo-100"></div>
                            </div>
                            <div class="bg-white p-1 rounded-[2.5rem] shadow-2xl shadow-indigo-100 border border-indigo-50">
                                <div class="bg-indigo-50/20 rounded-[2rem] p-4 border border-white">
                                    <livewire:profile-preview />
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        </main>
    </div>
</div>