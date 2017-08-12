@component('mail::message')
# Bonjour,
Vous venez de recevoir une nouvelle proposition d'achat concernant votre oeuvre d'art **{{ucfirst($thread->subject)}}.**

 @component('mail::panel')
<p style="text-align: center;">
<strong>{{ $thread->creator()->name }}</strong> vous propose <strong>{{$thread->latestMessage->price}} €</strong>
</p>
@endcomponent
Vous pouvez dès à présent lui répondre en cliquant ci-dessous.
@component('mail::button', ['url' => 'https://liinkart.com/messages/'])
Répondre à cette offre
@endcomponent

Merci de votre confiance,<br>
Cédric de {{ config('app.name') }}
@endcomponent 