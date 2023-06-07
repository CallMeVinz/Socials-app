@extends('templates.default')
@section('content')
<h1>New Friends</h1>
<div class="card">
    <div clas="card-body">
        <form action="{{ route ('contact.update', $contact->id) }}" class="" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" name="example-text-input" placeholder="Input placeholder" value="{{$contact->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">From</label>
            <input type="text" name="from" class="form-control" name="example-text-input" placeholder="Input placeholder"value="{{$contact->from}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" name="example-text-input" placeholder="Input placeholder"value="{{$contact->email}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nomer Telpon</label>
            <input type="text" name="phone_number" class="form-control" name="example-text-input" placeholder="Input placeholder"value="{{$contact->phone_number}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
        </form>
    </div>
</div>
@endsection
