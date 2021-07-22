<x-app-layout>

    <div class="container py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($products as $product)

            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url({{Storage::url($product->image->url)}})">
                <div class="w-full h-full px-8 flex flex-col justify-center">
                    
                    <div>
                        <a href="" class="inline-block px-3 h-6 bg-red-700 text-white rounded-full">$ {{$product->price}}</a>
                    </div>
                    
                    <h1 class="text-4xl text-white leading-8 font-bold">
                        <a href="{{route('products.show', $product)}}">
                            {{$product->name}}
                        </a>
                    </h1>
                </div>
            </article>

            @endforeach

        </div>
    </div>

    <div class="mt-4">
        {{$products->links()}}
    </div>

</x-app-layout>