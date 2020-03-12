<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    {{ $slot }}
    {{ $otherslot }}
    <h2>Este es mi componente.</h2>
    <h3>Tipo de alerta: {{ $type }}</h3>
    <h3>Mi texto: {{ $text }}</h3>
    @foreach($languages('Java') as $value)
        <h4>{{ $value }}</h4>
    @endforeach
    <h3>{{ $framework }}</h3>
</div>
