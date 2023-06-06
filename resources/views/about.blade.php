<x-app-layout :meta-title="'Technology Blog- About us page'" :meta-description="'The BEST technology blog in kenya '">
     <!-- Post Section -->
     <section class="w-full flex flex-col items-center px-3">

        <article class="w-full flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="/storage/{{$widget->image}}" >
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{$widget->title}}
                </a>
               
                <div>
                    {!! $widget->content !!}
                </div>
                
            </div>
        </article>


    </section>
    {{-- <x-sidebar /> --}}
</x-app-layout>