@extends ('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
@endsection

@section ('content')

<div id="wrapper">

    <div id="page" class="container">
        <h1>New Article</h1>
        <form  method="Post" action="/articles">
        @csrf

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                <input class="input {{ $errors->has('title') ? 'is-danger' : ''}}" type="text"  name="title" id="title">
                @if ($errors->has('title'))
                <p class="help is-danger">{{$errors->first('title')}}</p>
                @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body"></textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection