@extends('layouts.main')
@section('content')
<main role="main">
    <div class="album py-5 bg-light mt-5">
        <div class="container">
            <form action="{{route('offers-submit')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Send</button>
            </form>
        </div>
    </div>
</main>
@endsection
