@component('mail::message')
# Bonjour, 
Réception d'une prise de contact avec les éléments suivants :

@component('mail::panel', ['url' => 'https://liinkart.slack.com/'])
<ul>
    <li>**Nom** : {{ $contact['nom'] }}</li>
    <li>**Objet** : {{ $contact['objet'] }}</li>
    <li>**Email** : {{ $contact['email'] }}</li>
    <li>**Message** : {{ $contact['texte'] }}</li>
  </ul>
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
                      