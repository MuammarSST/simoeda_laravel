@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        <h1 class="text-white">Audit Mutu Internal</h1>
        <p class="text-white">Program D3, D4, S1, S2, S3 dan Profesi di Lingkungan USK</p>

            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Melakukan visitasi bagi fakultas yang tidak mencukupi nilai minimum audit</li>
                    <li class="list-group-item">Deadline AMI Siklus 15 Tahun 2023 Untuk Prodi
Pengisian mulai 28-08-2023 12:00 AM hingga 03-01-2024 11:59 PM</li>
                    <li class="list-group-item">Petunjuk Penggunaan
Dokumen petunjuk penggunaan dapat diunduh di tautan berikut petunjuk</li>
                </ul>
            
            </div>
            </div>
        <div class="col-md-4">  
            <div class="card" >
                <div class="card-header-success">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">email :</label>
                                <input type="email" class="form-control" name="email" required />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Password :</label>
                                <input type="password" class="form-control" name="password" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                       

                        <button type="submit" class="btn btn-success pull-right">
                        {{ __('Login') }}
                    </button>
                        


                    </form>
                </div>
            </div>
        </div>
        <div class="card">
        <div class="card-header">
        <h1>Selamat Datang dan Berpartisipasi</h1>
        </div>

        <div class="card-body">
        Audit Mutu Internal (AMI) adalah bagian dari sistem implementasi penjamin mutu akademik internal (SPMI) yang terkait dengan audit, evaluasi dan monitoring terhadap seluruh program, kegiatan dan capaian kerja seluruh unit kerja di lingkungan Universitas Ubudiyah Indonesia. Setiap unit kerja “wajib” mengikuti proses AMI yang dilaksanakan secara terjadwal sehingga hasilnya dapat digunakan untuk meningkatkan capaian pembangunan mutu akademik Universitas Ubudiyah Indonesia saat ini dan nanti
        </div>
</div>
    </div>
</div>
@endsection
