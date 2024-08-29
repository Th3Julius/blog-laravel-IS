<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

        @foreach ($posts as $post )
            <article class="bg-gray-200 m-10 p-4">
                <div>
                    <img src="{{$post->imagen}}" alt="">
                </div>

            <div>
                <h2 class="text-center text-2xl text-gray-500 my-2">{{$post->titulo}}</h2>
               
                <p class="text-left my-2 text-gray-500">{{$post->extracto}}</p>
                <button
                class="mx-auto text-center text-gray-700 round-3xl p-1 block
                bg-gray-400 w-32 hover:bg:gray hover:underline hover:text-gray-500 transition
                duration-150 hover:ease-in">Saber más</button>
            </div>

            </article>
        @endforeach
    </div>
