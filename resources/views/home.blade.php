@extends('app')
@section('content')
<main id="home">
    <div class="container">
        <div class="row">
            <div class="col nopad">
                <div class="pod pod-{{ rand(1,6) }}">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <ul id="tema-list">
                                    @foreach($temas as $tema)
                                        @if(\App\Models\Personaje::where('tema_id', $tema->id)->count())
                                        <li>
                                            <a href="tema/{{ $tema->slug }}">
                                                <img src="/images/temas/{{ $tema->logo }}" alt="Imagen de {{ $tema->tema_name }}">
                                            </a>
                                            <p>{{ \App\Models\Personaje::where('tema_id', $tema->id)->count() }}</p>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
