@component('mail::message')
# Вам был предоставлен доступ к сервису GameFuel

Имя пользователя: {{ $userName }}<br>
Email пользователя: {{ $userEmail }}<br>
Ваш пароль был сгенерирован автоматически: {{ $password }}
@endcomponent
