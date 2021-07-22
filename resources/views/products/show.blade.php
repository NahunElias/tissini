<x-app-layout>

    <div class="container py-20" >
        <h1 class="text-4xl font-bold text-gray-600">{{$product->name}}</h1>
        
        <div class="text-lg text-gray-500 mb-2">
            {{$product->extract}}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Contenido principal --}}
            <div class="lg:col-span-2">

                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($product->image->url)}}" alt="">
                </figure>
                <div class="inline-block mt-4 px-3 h-6 bg-red-700 text-white rounded-full">
                    {{$product->price}}
                </div>

            </div>
            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$product->category->name}}</h1>
                
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('products.show', $similar)}}">
                                <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach

                </ul>

            </aside>

        </div>

    </div>


</x-app-layout>