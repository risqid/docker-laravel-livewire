<div class="p-8 bg-gray-50 rounded-3xl border border-gray-200 space-y-6">
    <div>
        <label class="block text-sm font-bold text-gray-700 mb-2">Type your name:</label>
        <input 
            type="text" 
            wire:model.live.blur="name"
            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition-colors"
            placeholder="e.g. Alex"
        >
        <button 
            wire:click="clearName" 
            class="mt-2 text-xs font-bold text-slate-400 hover:text-indigo-600 transition-colors uppercase tracking-widest"
        >
            × Clear Name
        </button>
    </div>

    <div class="pt-6 border-t border-gray-200">
        <p class="text-gray-500 text-sm italic">Preview:</p>
        <h2 class="text-3xl font-black text-gray-800">
            Hello, {{ $name ?: 'Stranger' }}!
        </h2>
    </div>
</div>