@component('mail::message')

<h2>
<strong>
    @lang('Inscrito com sucesso.')
</strong>
</h2>
<p>Obrigado por se inscrever, agora ja pode estar a par de todas novidades.</p>
<p>Receba ofertas, esteja a par dos ultimos lancamentos tenha em primeira mao os anuncios dos nossos eventos, esteja a par dos artigos publicados na loja em tempo real!</p>


@component('mail::button', ['url' => 'https://gudezamusic.com', 'color' =>'primary'])
Ir para o site
@endcomponent

@lang('Cumprimentos'),<br>
{{ config('app.name') }}


@slot('subcopy')
@lang(
    "Se voce quiser cancelar a subscricao clique no botao a seguir, ou copie o link a baixo e cole no seu navegador\n"
) <span class="break-all"><a href="{{$actionText}}" style="text-decoration-line: none">cancelar inscricao</a></span>
@endslot

@endcomponent
