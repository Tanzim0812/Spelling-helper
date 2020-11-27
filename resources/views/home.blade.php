@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @include('include.MessageShow')
                <div class="card-header text-center">Add Words</div>

                <div class="card-body">
                    <form action="{{route('Add-word')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="words">Words:</label>
                            <input type="text" id="words" name="word" class="form-control" placeholder="Type words">
                            @error('word')
                            <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Add <i class="fa fa-plus"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
