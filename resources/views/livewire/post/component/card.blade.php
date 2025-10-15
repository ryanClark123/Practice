<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-card class="mb-2.5 p-4">
        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
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
            </div>

            <div class="w-auto p-2.5">
                Upvotes:
                {{ count($post->upvotes) ?? 0 }}
                | Downvotes:
                {{ count($post->downvotes) ?? 0 }}
            </div>
        </div>
        
        <flux:text size="md" class="ml-5"> {{ $post->content ?? 'N/A' }} </flux:text>
    </x-card>
</div>
