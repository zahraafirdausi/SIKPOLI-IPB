@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset    
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--

                        <div class="form-group row">
                            <label for="id_pasien" class="col-md-4 col-form-label text-md-right">{{ __('ID_Pasien') }}</label>

                            <div class="col-md-6">
                                <input id="id_pasien" type="string" class="form-control @error('id_pasien') is-invalid @enderror" name="id_pasien" value="{{ old('id_pasien') }}" required autocomplete="id_pasien" autofocus>

                                @error('id_pasien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">{{ __('NIM') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="string" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>

                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mayor" class="col-md-4 col-form-label text-md-right">{{ __('Mayor') }}</label>

                            <div class="col-md-6">
                                <input id="mayor" type="string" class="form-control @error('mayor') is-invalid @enderror" name="mayor" value="{{ old('mayor') }}" required autocomplete="mayor" autofocus>

                                @error('mayor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fakultas" class="col-md-4 col-form-label text-md-right">{{ __('Fakultas') }}</label>

                            <div class="col-md-6">
                                <input id="fakultas" type="string" class="form-control @error('fakultas') is-invalid @enderror" name="fakultas" value="{{ old('fakultas') }}" required autocomplete="fakultas" autofocus>

                                @error('fakultas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kode_strata" class="col-md-4 col-form-label text-md-right">{{ __('Kode Strata') }}</label>

                            <div class="col-md-6">
                                <input id="kode_strata" type="string" class="form-control @error('kode_strata') is-invalid @enderror" name="kode_strata" value="{{ old('kode_strata') }}" required autocomplete="kode_strata" autofocus>

                                @error('kode_strata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6">
                                <input id="jenis_kelamin" type="string" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required autocomplete="jenis_kelamin" autofocus>

                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="umur" class="col-md-4 col-form-label text-md-right">{{ __('Umur') }}</label>

                            <div class="col-md-6">
                                <input id="umur" type="integer" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" required autocomplete="umur" autofocus>

                                @error('umur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_bpjs" class="col-md-4 col-form-label text-md-right">{{ __('Nomor BPJS') }}</label>

                            <div class="col-md-6">
                                <input id="no_bpjs" type="string" class="form-control @error('no_bpjs') is-invalid @enderror" name="no_bpjs" value="{{ old('no_bpjs') }}" required autocomplete="no_bpjs" autofocus>

                                @error('no_bpjs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="goldar" class="col-md-4 col-form-label text-md-right">{{ __('Golongan Darah') }}</label>

                            <div class="col-md-6">
                                <input id="goldar" type="string" class="form-control @error('goldar') is-invalid @enderror" name="goldar" value="{{ old('goldar') }}" required autocomplete="goldar" autofocus>

                                @error('goldar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('No HP') }}</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="string" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        !-->


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
