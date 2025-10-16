<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="grid lg:grid-cols-3 gap-2.5">
        <div class="col-span-2 [&>*]:mb-3">
            <flux:input icon="magnifying-glass" placeholder="Search post" />
            {{-- <span class="text-center w-full">Post Area</span> --}}
            {{-- <x-placeholder-pattern class="w-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}
            @forelse ($posts as $post)
                {{-- @include('components.lazy-loading-placeholder') --}}
                {{-- {{ dd($post?->voteByUser(Auth::id())) }} --}}
                <livewire:post.component.card wire:key="post-card-{{ $post->id }}" :post="$post" />
            @empty
                
            @endforelse
            <div class="w-full">
                {{ $posts->links() }}
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
    </div>
</div>
