@extends('admin.layouts.Emptyapp')

@section('content')
<section class="login_box_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login_form_inner">
                    <h3><a href="">SMART SCHOOL</a></h3>

                    <form action="{{route('login_admin')}}" method="post" class="login_form row" >
                        @csrf
                        <div class="form-group col-md-12">
                            <input id="E-mail" placeholder="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <button type="submit" class="btn submit_btn">
                                Log In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
