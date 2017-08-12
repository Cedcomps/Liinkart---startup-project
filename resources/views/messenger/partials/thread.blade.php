<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="alert {{ $class }}">
    <h4 class="media-heading">
        <a class="conversation" href="{{ route('messages.show', $thread->id) }}">{{ucfirst( $thread->subject) }}</a></h4>
        <small class="text-muted" style="display: block;"><strong>Acheteur potentiel:</strong><a alt="Profil de {{ $thread->creator()->name }}" href="{{ route('user.show', [$thread->creator()->id]) }}"> {{ $thread->creator()->name }}</a></small>

        @if($thread->userUnreadMessagesCount(Auth::id()))
            <span class="new badge" data-badge-caption="non lu">{{ $thread->userUnreadMessagesCount(Auth::id()) }}</span>
        @endif

        @if($thread->latestMessage->price)
            <div class="chip right">
                Offre à {{ $thread->latestMessage->price }} €
            </div>
        @endif
        {{-- Dernier message --}}
    <small class="text-muted"><strong>Dernier message:</strong></small>
    <div class="media" data-userid="{{ $thread->latestMessage->user->id }}">
        <a class="avatar-chat" href="{{ route('user.show', [$thread->latestMessage->user->id]) }}">
           <img class="circle responsive-img" alt="{{ $thread->latestMessage->user->name }}" src="
                @if(filter_var($thread->latestMessage->user->avatar, FILTER_VALIDATE_URL)) {{$thread->latestMessage->user->avatar}}
                @else {{ asset('storage/uploads/avatars/' . $thread->latestMessage->user->avatar) }}
                @endif">
        </a>
        <div>
            <p class="body-message">{{ $thread->latestMessage->body }}</p>
            <div class="text-muted">
                <small><i class="material-icons tiny">access_time</i>Posté {{ $thread->latestMessage->created_at->diffForHumans() }}</small>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>