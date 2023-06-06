<?php
/** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>
<x-app-layout :meta-title="'Technology blog - Posts by category '.$category->title" :meta-description="'Description by category title'">

<section class="w-full md:w-2/3 flex flex-col items-center px-3">

   @foreach ($posts as $post)
        <x-post-item :post="$post"></x-post-item>    
   @endforeach

    <!-- Pagination -->
    {{$posts->onEachSide(1)->links()}}
    


</section>

  <!-- Sidebar Section -->
  <x-sidebar />

</x-app-layout>