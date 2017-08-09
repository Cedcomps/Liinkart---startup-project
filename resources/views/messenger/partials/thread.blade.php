<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="alert {{ $class }}">
    <h5 class="media-heading">
        <a class="conversation" href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a></h5>

        @if($thread->userUnreadMessagesCount(Auth::id()))
       <span class="new badge" data-badge-caption="non lu">{{ $thread->userUnreadMessagesCount(Auth::id()) }}</span>
        @endif

        @if($thread->latestMessage->price)
            <div class="chip">
                {{ $thread->latestMessage->price }} €
            </div>
        @endif
        {{-- Dernier message --}}
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Acheteur:</strong> {{ $thread->creator()->name }}</small>
    </p>
    @if($thread->participantsString(Auth::id()))
    <p>
        <small><strong>Artiste:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
    @endif
</div>
<div class="divider"></div>