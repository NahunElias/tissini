<div>
    <button class="bg-pink-500 inline-block px-4 h-7 py-2 text-white rounded-full"  wire:click="$set('open', true)">
        Agregar al carrito
    </button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            <div class="bg-pink-400 text-center font-bold text-white py-2 px-2">
                <h1>Agregar al carrito</h1>
            </div>
        </x-slot>

        <x-slot name="content">
            <h1 class="text-center text-pink-500 font-bold">Seleccione el tamaño</h1>
            <div class="text-center flex">
                
                @foreach ($sizes as $size)
                    <div x-data="{open:false}" class="py-4 px-2 flex-1">
                        <div>
                            <button class="bg-pink-500 inline-block px-4 h-7 py-2 text-white rounded-full" @click="open = !open">
                                {{ $size->name }}
                            <button>
                        </div>
                        
                        <div class="py-4">
                            <h1 x-show="open" class="text-pink-500 font-bold">Seleccione la cantidad</h1>
                            <select x-show="open" x-on:click.away="open = false">
                              
                                @for ($i = 0; $i < $size->amount; $i++)
                                    <option value="">{{ $i }}</option>
                                @endfor

                            </select>
                        </div>

                    </div>
                    
                @endforeach
            </div>

        </x-slot>

        <x-slot name="footer">
            @livewire('car')
        </x-slot>

    </x-jet-dialog-modal>

</div>
