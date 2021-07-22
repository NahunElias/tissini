<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-20">

        @foreach ($products as $product)
            <div class="text-center w-full bg-pink-700  px-3 py-4 rounded-md mb-4">
                <a href="{{ route('products.category', $product->category) }}"
                    class="text-gray-200 text-3xl font-bold">{{ $product->category->name }}</a>
            </div>

            @foreach ($products as $product)
                <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($product->image->url) }}"
                        alt="">

                    <div class="px-6 py-4">
                        <h1 class="font-bold text-xl mb-2">
                            <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                        </h1>

                        <div class="text-gray-700 text-base">
                            {{ $product->extract }}
                        </div>

                        <div class="">
                            <a href="">Añadir al carrito</a>
                        </div>
                    </div>

                </article>
            @endforeach


        @endforeach

    </div>

</x-app-layout>
