@props(['post' => $post])

<style>@import url('https://fonts.googleapis.com/css2?family=Mulish&display=swap');</style>


<div class="center" style="font-family: 'Mulish', sans-serif; width: 550px;  margin-bottom: 20px;">
   <div class="card-outside" style="padding: 10px 25px 20px; box-shadow: 0px 0px 10px 0px rgba(16, 43, 197, 0.2); border-radius: 3px; background-color: rgb(255, 255, 255);">
       {{-- <div class="card-title" style="display: flex; justify-content: space-between;">
           <h3>How did chickenpox get its name?</h3>
       </div> --}}
       <div class="asked-by" style="display: flex; margin:20px 0; justify-content: space-between;">
           <p>🤵🏻 Asked by <a href="{{ route('users.posts', $post->user) }}" class="font-bold" style="color: rgb(102, 102, 247)">{{ $post->user->name}}</a>  </p>
           <p><span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span></p>
       </div>
       <div class="card-question">
         <p class="mb-2 ">{{ $post->body }}</p>
       </div>
       <div class="card-buttons" style="margin-top: 10px; display: flex; justify-content: space-between; " >
           <div class="">



    <div class="flex items-center">
      @auth
      @if (!$post->likedBy(auth()->user()))
         <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
            @csrf
            <button style=" border-radius: 5px; color: black; border: none; background-color: white; margin-right: 3px;"> 🧡  </button> 
         </form>
      @else
         <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
            @csrf
            @method('DELETE')
            <button style=" border-radius: 5px; color: black; border: none; background-color: white; margin-right: 3px;"> 💔 </button> 
         </form>
      @endif


        

      @endauth

      <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
      <span>
         @can('delete', $post)
         <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button style="display:flex;  border-radius: 5px; color: black; border: none; background-color: white; font-size: 15px; margin-left:15px"> 🗑 Delete</button>  
         </form>
         @endcan


      </span>

   </div>

               
           </div>
           <button style=" border-radius: 5px; background-color: rgb(39, 142, 238); color: white; border: none; padding: 5px 10px; font-size: 15px;"> 🖋 Answer</button>
       </div>
   </div>
</div>









{{-- <div class="">
    <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name}}</a> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

    @if (Str::endsWith(  Str::lower($post->image), '.png') || Str::endsWith(  Str::lower($post->image), '.jpg'))
    <img src="{{ asset('uploads/post-images/'.$post->image )}}" alt="images" style="height:400px;" style="text-align: center">
    @endif


    <p class="mb-2 bg-pink-200">{{ $post->body }}</p>

   
    @can('delete', $post)
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" class="text-blue-500">Delete </button>
    </form>
    @endcan
       

    <div class="flex items-center">
       @auth
       @if (!$post->likedBy(auth()->user()))
          <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
             @csrf
             <button type="submit" class="text-blue-500">Like💙</button>
          </form>
       @else
          <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
             @csrf
             @method('DELETE')
             <button type="submit" class="text-blue-500">Unlike🥲🤎</button>
          </form>
       @endif


         

       @endauth

       <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>

    </div>

 </div> --}}