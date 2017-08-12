@component('mail::message')
# Bonjour {{ $post->user->name }},
Ceci est un message de modération concernant votre oeuvre **{{$post->titre}}**

Elle ne respecte malheureusement pas nos [règles de diffusion](/faq) imposées à nos utilisateurs, de ce fait votre annonce a malheureusement été supprimée.
<br>Nous vous invitons à créer une nouvelle annonce.
@component('mail::button', ['url' => 'https://liinkart.com/artworks/create'])
Créer une nouvelle oeuvre
@endcomponent

Merci de votre compréhension,<br>
Cédric de {{ config('app.name') }}
@endcomponent