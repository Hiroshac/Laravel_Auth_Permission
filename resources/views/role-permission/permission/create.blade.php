@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Permission</div>

                
                
                <div class="card-body">
                    <a href="{{ url('permissions') }}" class="btn btn-primary mb-3">Back</a>

                    <form method="POST" action="{{ url('permissions') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Permission Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Permission</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection