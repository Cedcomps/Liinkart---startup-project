<div class="media" data-userid="{{ $message->user->id }}">
    <a class="avatar-chat" href="{{ route('user.show', [$message->user->id]) }}">
       <img class="circle responsive-img" alt="{{ $message->user->name }}" src="
            @if(filter_var($message->user->avatar, FILTER_VALIDATE_URL)) {{$message->user->avatar}}
            @else {{ asset('storage/uploads/avatars/' . $message->user->avatar) }}
            @endif">
    </a>
    <div>
        <p class="body-message">{{ $message->body }}</p>
        <div class="text-muted">
            <small><i class="material-icons tiny">access_time</i>Posté {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>