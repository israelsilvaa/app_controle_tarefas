@component('mail::message')
# Introdução

O corpo da mensagem 

@component('mail::button', ['url' => ''])
texto do botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
