<div class="flex flex-col items-center justify-center space-y-4 p-8 bg-white shadow-sm border border-gray-100 rounded-2xl">
    <h2 class="text-sm font-semibold uppercase tracking-widest text-gray-400">Current Count</h2>
    
    <p class="text-7xl font-black text-blue-600">{{ $count }}</p>

    <button 
        wire:click="increment" 
        class="px-6 py-2 bg-blue-600 text-white rounded-lg font-bold hover:bg-blue-700 active:scale-95 transition-all"
    >
        + Increment
    </button>

    <button wire:click="decrement" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg font-bold hover:bg-gray-400 active:scale-95 transition-all">
        - Decrement
    </button>
</div>