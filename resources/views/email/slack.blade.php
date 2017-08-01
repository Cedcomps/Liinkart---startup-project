@component('mail::message')
# Bonjour, 
Une demande d'ajout au [Slack de LiinkART](https://liinkart.slack.com/) vient d'arriver, invitez l'adresse ci-dessous.

@component('mail::panel')
**{{ $slack['email'] }}**
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent