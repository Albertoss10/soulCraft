@extends('ban_layout')

@section('content')
    <div class="container">
        <a href="/"><span class="cerrar">&times;</span></a>
        <img class="soulcraft" src="{{ Storage::url('soulcraft/logo.png') }}" width="100" height="100">
        <h1 class="nick">{{ $user->username }}</h1>
        <img class="skin" src="{{ Storage::url('userSkins/' . $user->username . '.png') }}" width="100" height="100">
    </div>
    <div class="reports">
        @php $lastDate = null; @endphp
        @foreach($paths as $date => $datePaths)
            <div class="date">--- {{ $date }} ---</div>
            <div class="bans">
            @foreach ($datePaths as $path)
                <img class="ban" src="{{ Storage::url($path->path) }}" alt="Image" onclick="abrirModal(this.src)">
            @endforeach
            </div>
            <hr>
        @endforeach
    </div>
    <div id="miModal" class="modal">
        <span class="cerrar" onclick="cerrarModal()">&times;</span>
        <img class="modal-contenido" id="img01">
        <div id="caption"></div>
    </div>


  @endsection
