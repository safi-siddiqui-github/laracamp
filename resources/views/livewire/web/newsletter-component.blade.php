<aside class="flex flex-col gap-3 w-fit">
    
    <p class="font-medium">
        Subscribe to our newsletter
    </p>
    
    <p class="text-slate-500">
        The latest news, articles and resources sent to your inbox weekly.
    </p>

    <form wire:submit="save" class="flex flex-col md:flex-row gap-2 md:items-start">

        <div class="flex flex-col">

            <input type="email" class="rounded border px-4 py-3" placeholder="Enter your email" wire:model="email">

            @error('email')
            <span class="text-red-500">{{ $message }}</span>
            @enderror 

            @if (session('news_success'))
                <span class="text-green-500">
                    {{ session('news_success') }}
                </span>
            @endif
        </div>

        <button type="submit" class="bg-black text-white py-3 px-5 font-medium rounded flex gap-3">
            <span>
                Subscribe
            </span>
            <svg wire:loading xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>
            
        </button>

    </form>

</aside>