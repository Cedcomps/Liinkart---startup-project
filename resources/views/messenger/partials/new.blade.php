<form action="{{ route('messages.store') }}" method="post" class="col s12">
    {{ csrf_field() }}
    <div class="row">
        <!-- Subject Form Input -->
        <div class="input-field col s12">
            <label for="subject">Sujet</label>
            <input type="text" name="subject" placeholder="Je vous propose une offre pour votre oeuvre" value="{{ old('subject') or "Je vous propose une offre pour votre oeuvre" }}">
        </div>
        
        <!-- Message Form Input -->
        <div class="input-field col s12">
            <textarea name="message" placeholder="Formulez votre demande à l'artiste" class="materialize-textarea">{{ old('message') }}</textarea>
            <label for="message">Message</label>
        </div>
        <!-- Submit Form Input -->
        <button type="submit" class="z-depth-3 waves-effect waves-light btn-large right"><i class="zoom-gavel material-icons left">send</i>FAIRE UNE OFFRE</button>
        </span>
    </div>
</form>