@component('mail::message')
# Your post was liked

{{ $liker->name }} liked on of your posts

@component('mail::button', ['url' => route('posts.show', $post)])
    View post
@endcomponent

Thanks,<br>
SDU Answers
{{-- {{ config('app.name') }} --}}
@endcomponent
