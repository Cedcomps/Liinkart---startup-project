<form action="#" method="put">
    {{ method_field('put') }}
    {{ csrf_field() }}
        
    <!-- Message Form Input -->
    <div class="input-field col s12">
            <label for="message">Message</label>
            <textarea id="new-message" name="message" placeholder="Ecrivez un message..." class="materialize-textarea"></textarea>
    </div>
{{-- <input type="hidden" name="recipients" value="{{ $user->id }}"> --}}

    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Envoyez</button>
    </div>
</form>

@if(Auth::check())
<script>
    var token = '{{ Session::token()}}';
    var userId = '{{ Auth::user()->id }}';
    var threadId = '{{ $thread->id }}';
    var urlPutMessage = '{{ route('messages.update')}}';
</script>
@endif