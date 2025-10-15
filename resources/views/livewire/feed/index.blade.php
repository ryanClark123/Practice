<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="grid md:grid-cols-3 gap-2.5">
        <div class="col-span-2">
            <span class="text-center w-full">Post Area</span>
            {{-- <x-placeholder-pattern class="w-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}
            @forelse ($posts as $post)
                {{-- @include('components.lazy-loading-placeholder') --}}
                <livewire:post.component.card lazy post_id="{{ $post->id }}" />
            @empty
                
            @endforelse
            <div class="text-center py-4">
            <button wire:click="loadMorePosts" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Load More
            </button>
        </div>
        </div>
        
        <div class="
            md:block hidden
            col-span-1
            rounded 
            border
            boorder-1
            border-zinc-200
            dark:border-zinc-600">
            <span class="text-center w-full">Additional</span>
            <x-placeholder-pattern class="w-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
        {{-- <div class="w-full">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div> --}}
    </div>
</div>
