@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
        <h1>CREAR NEGOCIO</h1>
    </div>

    <div class="col-md-12">
        <!-- Esto se encarga de mostrar errores de validación -->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Esto se encarga de mostrar el mensaje de éxito en caso que se haya generado correctamente el book -->
        @if(session('msg_success'))
        <div class="alert alert-success">
            {{ session('msg_success') }}
        </div>
        @endif

        <!-- Esto se encarga de mostrar el mensaje de error en caso que se haya generado correctamente el book -->
        @if(session('msg_error'))
        <div class="alert alert-danger">
            {{ session('msg_error') }}
        </div>
        @endif
    </div>

    <div class="col-md-6 mx-auto">
        <form action="{{ route('negocios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <input type="text" name="titulo" placeholder="Titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo') }}" />
                @error('titulo')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" name="descripcion" placeholder="Descripción" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion') }}" />
                @error('descripcion')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <input type="file" id="imagen" name="imagen" placeholder="Imagen" class="form-control @error('imagen') is-invalid @enderror" value="{{ old('imagen') }}" data-initial-preview="{{ isset($data->imagen) ? Storage::url('img/tu-negocio-digital/$data->imagen') : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Imagen+Default+Negocio' }}" accept="image/*" />
                @error('imagen')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">

                @php
                $arrayOrden = array();
                @endphp

                @foreach($ordenes as $orden)
                @php
                $arrayOrden[] = $orden->orden
                @endphp
                @endforeach

                @php
                $arrayOriginal = [1,2,3,4,5,6];
                $lugaresDisponibles = array_diff($arrayOriginal, $arrayOrden);
                @endphp

                <select type="text" name="orden" class="form-control @error('orden') is-invalid @enderror" value="{{ old('orden') }}">
                    <option value="">:: Elige orden ::</option>
                    @foreach($lugaresDisponibles as $lugarDisponible)
                    <option value="{{ $lugarDisponible }}">{{ $lugarDisponible }}</option>
                    @endforeach
                </select>
                @error('orden')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <input type="submit" value="Crear" class="form-control btn btn-success" />
        </form>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#imagen').fileinput({
            language: 'es',
            allowedFileExtensions: ['jpg', 'jpeg', 'png'],
            maxFileSize: 1000,
            showUpload: false,
            showClose: false,
            initialPreviewAsData: true,
            dropZoneEnabled: false,
            theme: 'fas',
        });
    });
</script>

@endsection