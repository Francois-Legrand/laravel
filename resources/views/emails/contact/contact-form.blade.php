@component('mail::message')
# Nom de l'entreprise

Bonjour,<br>
Vous venez de recevoir un mail de la part de {{ $data['name'] }}.
#Message :
{{ $data['message']}}

#Adresse mail :
{{ $data['email']}}.


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
