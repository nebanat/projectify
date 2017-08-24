@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <h1 class="title">Let's get you started</h1>

                     <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="field">
                            <label for="username" class="label">Username</label>
                            <p class="control">
                              <input id="username" placeholder="e.g. Aaron" type="text" 
                                class="input{{$errors->has('username') ? ' is-danger' : ''}}" name="username" value="{{ old('username') }}" required autofocus>  
                            </p>
                            @if($errors->has('username'))
                                <p class="help is-danger">
                                   {{ $errors->first('username') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="email" class="label">E-mail</label>
                            <p class="control">
                              <input id="email" type="email" class="input{{$errors->has('email') ? ' is-danger' : ''}}" 
                                name="email" placeholder="e.g. aaron@projectify.ng" value="{{ old('email') }}" required autofocus>  
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

                        <div class="field is-grouped">
                            <p class="control">
                                <button type="submit" class="button is-primary">Sign Up</button>  
                            </p>
                             <p>
                                <a href="{{ route('login') }}">Already have an account?</a>
                            </p>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </section>

@endsection
