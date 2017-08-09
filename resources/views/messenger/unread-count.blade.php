<?php $count = Auth::user()->newThreadsCount(); ?>
@if(($count > 0) && ($count = 1))
    <span class="new badge" data-badge-caption="message">{{ $count }}</span>
@elseif($count > 1)
    <span class="new badge" data-badge-caption="messages">{{ $count }}</span>
@endif
