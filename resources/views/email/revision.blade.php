@component('mail::message')
# Bonjour {{ $post->user->name }},
Ceci est un message de modération concernant votre oeuvre **{{$post->titre}}**

Elle ne respecte malheureusement pas la charte imposée à nos utilisateurs, de ce fait l'annonce a été supprimée.
Nous vous invitons à créer une nouvelle annonce.
@component('mail::button', ['url' => '/artworks/create'])
Créer une nouvelle oeuvre
@endcomponent

Merci de votre compréhension,<br>
{{ config('app.name') }}
@endcomponent