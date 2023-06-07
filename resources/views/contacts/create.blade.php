@extends('templates.default')
@section('content')
<h1>New Contact</h1>
<div class="card">
    <div clas="card-body">
        <form action="{{ route ('contact.store') }}" class="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nicknames</label>
            <input type="text" name="name" class="form-control @error('name')
            is-invalid
            @enderror"
                name="example-text-input" placeholder="Input placeholder">
        </div>
        <div class="mb-3">
            <label class="form-label">From</label>
            <input type="text" name="from" class="form-control" name="example-text-input" placeholder="Input placeholder">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" name="example-text-input" placeholder="Input placeholder">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" name="example-text-input" placeholder="Input placeholder">
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
        </form>
    </div>
</div>
@endsection
