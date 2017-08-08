<h5>Ecrivez un message...</h5>
<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}
        
    <!-- Message Form Input -->
    <div class="input-field col s12">
            <textarea name="message" placeholder="Formulez votre demande à l'artiste" class="materialize-textarea">{{ old('message') }}</textarea>
            <label for="message">Message</label>
    </div>
{{-- <input type="hidden" name="recipients" value="{{ $user->id }}"> --}}

    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Envoyez</button>
    </div>
</form>