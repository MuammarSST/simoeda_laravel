@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="opacity:0.9">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Username :</label>
                                <input type="text" class="form-control" name="username" required />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Password :</label>
                                <input type="password" class="form-control" name="password" required />
                            </div>
                        </div>
                       
                       <label class="bmd-label-floating">Silahkan Pilih Tahunan :</label>
                        <select class="form-select" aria-label="Default select example"name="id_tahun">
                         
                         @foreach($data_tahun as $data)
                          <option "{{ $data->id_tahun }}">{{ $data->tahun }}</option>
                        @endforeach
                        </select>
                        


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
