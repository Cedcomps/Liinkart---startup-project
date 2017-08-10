<?php $count = Auth::user()->newThreadsCount(); ?>
@if($count > 0)
    <span class="new badge" data-badge-caption="nouveau(x) message(s)">{{ $count }}</span>
@endif
