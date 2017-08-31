@component('mail::message')
# Bonjour, 
Réception d'une prise de contact avec les éléments suivants :

@component('mail::panel', ['url' => 'https://liinkart.slack.com/'])
    **Nom** : {{ $contact['nom'] }} <br>
    **Objet** : {{ $contact['objet'] }} <br>
    **Email** : {{ $contact['email'] }} <br>
    **Message** : {{ $contact['texte'] }} <br>
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
                      