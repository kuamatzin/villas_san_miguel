@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Clientes</h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>NSS</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Status</th>
                                <th>Actualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $key => $client)
                                <tr>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->nss}}</td>
                                    <td>{{$client->birthday}}</td>
                                    <td>
                                        {!! Form::model($client, ['method' => 'PATCH', 'url' => 'clientes/' . $client->id]) !!}
                                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                                {!! Form::select('status', [0 => 'Contacto', 1 => 'Llamada', 2 => 'Cita'], $client->status, ['id' => 'status', 'class' => 'form-control']) !!}
                                                <small class="text-danger">{{ $errors->first('status') }}</small>
                                            </div>
                                        
                                    </td>
                                    <th>
                                        <button type="submit" class="btn btn-warning">Acutalizar</button>
                                        {!! Form::close() !!}
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection