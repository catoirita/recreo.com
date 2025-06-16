@extends('adminlte::page')

@section('template_title')
    Autorizados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Autorizados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('autorizados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nino Id</th>
									<th >Nombre Autorizado</th>
									<th >Telefono</th>
									<th >Parentesco</th>
									<th >Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autorizados as $autorizado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $autorizado->nino_id }}</td>
										<td >{{ $autorizado->nombre_autorizado }}</td>
										<td >{{ $autorizado->telefono }}</td>
										<td >{{ $autorizado->parentesco }}</td>
										<td >{{ $autorizado->estado }}</td>

                                            <td>
                                                <form action="{{ route('autorizados.destroy', $autorizado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('autorizados.show', $autorizado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('autorizados.edit', $autorizado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $autorizados->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
