@component('mail::message')
# Bonjour {{ $post->user->name }},
Vous venez de recevoir une nouvelle proposition d'achat concernant votre oeuvre d'art **{{$post->titre}}.**

@component('mail::panel')
<p style="text-align: center;">
<strong>{{ $user->name }}</strong> vous en propose <strong>{{ $price }} €</strong>
</p>
@endcomponent
Vous pouvez dès à présent lui répondre en cliquant ci-dessous.
@component('mail::button', ['url' => '{!! $user->email !!}'])
Répondre à cette offre
@endcomponent

Merci de votre confiance,<br>
Cédric de {{ config('app.name') }}
@endcomponent