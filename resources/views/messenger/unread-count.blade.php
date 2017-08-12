<?php $count = Auth::user()->newThreadsCount(); ?>
@if($count > 0)
    <span class="new badge" data-badge-caption="message(s)">{{ $count }}</span>
@endif
