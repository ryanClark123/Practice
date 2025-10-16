<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-card class="p-4 pb-12">
        <div class="flex items-center gap-2 mb-4 text-start text-sm">
            {{-- {{ $author->name }} --}}
            @if(isset($post->user->image_url))
                <span class="relative flex w-14 h-14 shrink-0 overflow-hidden rounded-lg">
                    <img src="{{ $post->user->image_url }}" class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                </span>
            @else
                <span class="relative flex w-12 h-12 shrink-0 overflow-hidden rounded-full">
                    <span
                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                    >
                        {{ $post->user->initials() }}
                    </span>
                </span>
            @endif

            <div class="grid flex-1 text-start text-sm leading-tight my-auto">
                <flux:label size="lg" class="text-xl"> {{ $post->title ?? 'N/A' }} </flux:label>
                <flux:text size="sm" class="pb-1" variant="subtle">Author: {{ $post->user->name }}</flux:text>
                <flux:text size="sm" class="pb-1" variant="subtle">{{ $post->created_at->format('F j, Y, g:i a') }}</flux:text>
                {{-- <span>You voted: {{ $post->voteByUser(Auth::id()) }}</span> --}}
            </div>

            {{-- VOTES --}}
            <div class="w-auto flex flex-col gap-1 font-bold">
                {{-- {{ $vote_type ?? 'N/A' }} --}}
                <span class="
                cursor-pointer
                flex 
                p-1.5
                text-green-400 
                rounded border-1 
                border-green-400 
                hover:text-green-50 
                hover:bg-green-200/30 
                dark:hover:bg-green-400
                {{ $vote_type === 'up' ? 'dark:text-green-50 dark:bg-green-400' : '' }}
                " wire:click="setVote('up')">
                    {{ count($post->upvotes) ?? 0 }}<flux:icon.arrow-up variant="mini" /> 
                </span>
               <span class="
               cursor-pointer
                flex
                p-1.5 rounded 
                border-1 border-red-400 
                text-red-400 
                hover:text-red-50 
                hover:bg-red-200/30 
                dark:hover:bg-red-400
                {{ $vote_type === 'down' ? 'dark:text-red-50 dark:bg-red-400' : '' }}
                " wire:click="setVote('down')" >
                    {{ count($post->downvotes) ?? 0 }}<flux:icon.arrow-down variant="mini" /> 
               </span>
            </div>
        </div>
        
        <flux:text size="md" class="mx-5 text-justify indent-8"> {{ $post->content ?? 'N/A' }} </flux:text>
    </x-card>
</div>
