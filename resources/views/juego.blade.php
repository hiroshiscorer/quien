@extends('app')
@section('content')
    <main id="juego">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="mtop60">{{ $tema->tema_name }}</h2>
                    <div class="pod pod-{{ rand(1,6) }}">
                        <h3>Mi personaje</h3>
                        <div class="item">
                            <figure>
                                <img src="/images/personajes/{{ $mi_personaje->imagen }}" alt="Imagen de {{ $mi_personaje->nombre }}">
                                <figcaption>{{ $mi_personaje->nombre }}</figcaption>
                            </figure>
                        </div>
                        <h3>Todos los personajes</h3>
                        <ul id="juego-list">
                            @foreach($personajes as $person)
                                <li>
                                    <div class="item">
                                    <figure>
                                        <img src="/images/personajes/{{ $person->imagen }}" alt="Imagen de {{ $person->nombre }}">
                                        <figcaption>{{ $person->nombre }}</figcaption>
                                    </figure>

                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="/" class="back mtop60 mbot60"><i class="fa fa-arrow-circle-left"></i> Inicio</a>
                </div>
            </div>
        </div>
    </main>
@endsection
