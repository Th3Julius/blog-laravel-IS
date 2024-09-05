<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
    @foreach ($posts as $post)
    <article class="bg-gray-200 rounded-lg shadow-md p-6">
        <figure class="mb-4">
            <img src="{{$post->imagen}}" alt="Imagen de {{$post->titulo}}" class="w-full h-auto rounded-lg">
        </figure>

        <div>
            <h2 class="text-2xl text-gray-700 font-bold mb-2 text-center">{{$post->titulo}}</h2>
            <p class="text-sm text-gray-500 mb-2 text-left">{{$post->fecha}}</p>
            <p class="text-gray-600 mb-4 text-left">{{$post->extracto}}</p>
            <a href="#" 
                class="block text-center bg-gray-400 text-gray-700 rounded-full py-2 w-32 mx-auto 
                hover:bg-gray-500 hover:text-white transition duration-150 ease-in-out">
                Saber más
            </a>
        </div>
    </article>
    
    @endforeach
    @if ($posts->hasPages())
    
    <div class="p-2 bg-stone-200 rounded-lg">
        {{$posts->links()}}
    </div>
    @endif


   
</div>
