<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">

        <div class="px-6 py-6">
            {{-- <input type="text" wire:model="search"> --}}
            <x-jet-input class="w-full" placeholder="Escriba lo que desea buscar" type="text" wire:model="search" />
        </div>

        <div class="container py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @if ($products->count())

                    @foreach ($products as $product)

                        <article class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif" style="background-image:
                            url({{ Storage::url($product->image->url) }})">
                            <div class="w-full h-full px-8 flex flex-col justify-center">

                                <div>
                                    <a href="" class="inline-block px-3 h-6 bg-red-700 text-white rounded-full">$
                                        {{ $product->price }}</a>

                                </div>

                                <h1 class="text-4xl text-white leading-8 font-bold">
                                    <a href="{{ route('products.show', $product) }}">
                                        {{ $product->name }}
                                    </a>
                                </h1>
                                <div class="px-6 py-6 flex items-center">
                                   @livewire('add-car', ['product' => $product], key($product->id))
                                </div>
                            </div>

                        </article>


                    @endforeach

                @else
                    <div class="px-6 py-4">
                        No existe ningun registro coincidente
                    </div>
                @endif
            </div>
        </div>

        {{-- <div class="mt-4">
            {{$products->links()}}
        </div> --}}
    </div>
</div>
