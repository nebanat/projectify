@extends('account.layouts.default')

@section('account.content')
    <h1 class="title">Sell a file</h1>
    
    <form action="{{ route('account.files.store', $file) }}" method="POST" class="form">
        {{ csrf_field() }}
        <div class="field">
            <label for="" class="label">Title</label>
            <p class="control">
                <input type="text" name="title" id="title" class="input{{$errors->has('title') ? ' is-danger':''}}" 
                autofocus>
            </p>
            @if($errors->has('title'))
                <p class="help is-danger">{{$errors->first('title')}}</p>
            @endif
        </div>

        <div class="field">
            <label for="" class="label">Short Overview</label>
            <p class="control">
                <input type="text" name="overview_short" id="overview_short" 
                    class="input{{$errors->has('overview_short') ? ' is-danger':''}}" autofocus>
            </p>
            @if($errors->has('overview_short'))
                <p class="help is-danger">{{$errors->first('overview_short')}}</p>
            @endif
        </div>

        <div class="field">
            <label for="" class="label">Category</label>
            <p class="control">
                <input type="text" name="category" id="category" class="input{{$errors->has('category') ? ' is-danger':''}}" 
                autofocus>
            </p>
            @if($errors->has('category'))
                <p class="help is-danger">{{$errors->first('category')}}</p>
            @endif
        </div>

        <div class="field">
            <label for="" class="label">State</label>
            <p class="control">
                <input type="text" name="state" id="state" class="input{{$errors->has('state') ? ' is-danger':''}}" 
                autofocus>
            </p>
            @if($errors->has('state'))
                <p class="help is-danger">{{$errors->first('state')}}</p>
            @endif
        </div>

        <div class="field">
            <label for="" class="label">Price</label>
            <p class="control">
                <input type="number" name="price" id="price" class="input{{$errors->has('price') ? ' is-danger':''}}" 
                autofocus>
            </p>
            @if($errors->has('price'))
                <p class="help is-danger">{{$errors->first('price')}}</p>
            @endif
        </div>

        <div class="field">
            <label for="" class="label">Overview</label>
            <p class="control">
               <textarea name="overview" id="overview" class="textarea{{$errors->has('overview') ? ' is-danger':''}}"></textarea>
            </p>
            @if($errors->has('overview'))
                <p class="help is-danger">{{$errors->first('overview')}}</p>
            @endif
        </div>

        <div class="field is-grouped">
            <p class="control">
               <button class="button is-primary" type="submit">Create File</button>
            </p>
            <p>Will review your file before it goes live</p>
        </div>

        
    </form>
@endsection