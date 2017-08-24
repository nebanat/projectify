@extends('layouts.app')

@section('content')
     <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    
                    @if(session('status'))
                        <div class="notification is-success">
                            {{  session('status')  }}
                        </div>
                    @endif
                    <h1 class="title">Recover your password</h1>

                     <form class="form" method="POST" action="{{ route('password.email') }}">
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
                            <p class="control">
                                <button type="submit" class="button is-primary">Send Email</button>  
                            </p>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </section>

@endsection
