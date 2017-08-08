<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    <p>
        Offre de départ: {{ $thread->latestMessage->price }} €
    </p>
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Acheteur:</strong> {{ $thread->creator()->name }}</small>
    </p>
    <p>
        <small><strong>Artiste:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>