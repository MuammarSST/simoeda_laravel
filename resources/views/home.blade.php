@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Selamat Datang :') }} {{ Auth::user()->name }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                   

                    <div>
                        <label class="card-title">Silahkan Pilih Tahunan :</label>
                        <select class="form-control" name="id_tahun">
                         
                        @foreach($data_tahun as $data)
                          <option "{{ $data->id_tahun }}">{{ $data->tahun }}</option>
                        @endforeach
                        </select>
                        <button type="submit" class="btn btn-success pull-right">
                        {{ __('Pilih') }}
                    </button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
