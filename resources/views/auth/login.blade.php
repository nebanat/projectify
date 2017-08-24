@extends('layouts.app')

@section('content')
     <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <h1 class="title">Sign in</h1>

                     <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        

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
                               <label for="remember" class="checkout">
                                    <input type="checkbox" name="remember" id="remember" checked>
                                    Remember me
                               </label>
                            </p>
                        </div>

                        <div class="field is-grouped">
                            <p class="control">
                                <button type="submit" class="button is-primary">Login</button>  
                            </p>
                            <p>
                                <a href="{{ route('password.request') }}">Forgotten your password?</a>
                            </p>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </section>

@endsection
