<div class="media">
    <a class="pull-left" href="#">
       <img style="border-radius: 50%;" class="responsive-img" alt="{{ $message->user->name }}" src="
            @if(filter_var($message->user->avatar, FILTER_VALIDATE_URL)) {{$message->user->avatar}}
            @else {{ asset('storage/uploads/avatars/' . $message->user->avatar) }}
            @endif">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Posté {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>