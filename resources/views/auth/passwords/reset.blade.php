@extends('layouts.app')

@section('content')
     <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <h1 class="title">Choose a new password</h1>

                     <form class="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                        

                        <input type="hidden" name="token" value="{{$token}}">

                        <div class="field">
                            <label for="email" class="label">E-mail</label>
                            <p class="control">
                              <input id="email" type="email" class="input{{$errors->has('email') ? ' is-danger' : ''}}" 
                                name="email" placeholder="e.g. youremail@domain.com" value="{{ old('email') }}" required autofocus>  
                            </p>
                             @if($errors->has('email'))
                                <p class="help is-danger">
                                   {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <p class="control">
                              <input id="password" type="password" class="input{{$errors->has('password') ? ' is-danger' : ''}}" 
                                name="password" required autofocus>  
                            </p>
                             @if($errors->has('password'))
                                <p class="help is-danger">
                                   {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <p class="control">
                                <button type="submit" class="button is-primary">Reset Password</button>  
                            </p>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </section>

@endsection
