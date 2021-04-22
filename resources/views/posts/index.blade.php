@extends('layouts.app')

@section('content')
   <div class="flex justify-center">
       <div class="">
         {{-- <div class="w-8/12 bg-white p-6 rounded-lg"> --}}
         <form action="{{ route('posts') }}" method="POST" class="mb-4" enctype="multipart/form-data">
            @csrf
               <div class="mb-4 mt-6">
                  <label for="body" class="sr-only">Body</label>
                  <textarea name="body" id="body" cols="30" rows="4" class="bg-white border-2 w-full p-4 rounded-lg @error('body')
                  border-red-500 @enderror" placeholder="Ask your question here!"></textarea>

                  @error('body')
                     <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
{{-- aa --}}
{{-- 
               <div class="mb-4">
                  <input type="file" class="" name="image" id="" value="aa">
                  <label for="" class="sr-only">Choose File</label>
               </div> --}}
{{-- aa --}}
               <div>
                  <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Ask Question</button>
               </div>

         </form>

         @if ($posts->count())
            @foreach ($posts as $post)
              <x-post :post="$post"/>
            @endforeach


            {{ $posts->links() }}


         @else
            <p>There are no posts!</p>
         @endif
      </div>
   </div>
@endsection