@extends('templates.default')

@push('page-action')
    <a href="{{ route('contact.create')}}" class="btn btn-primary">Make New Friends</a>
@endpush

@section('content')
    <h1>Friends</h1>
    <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>From</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                   @foreach($contacts as $contact)
                         <tr>
                            <td>{{ $contact->name}}</td>
                            <td>{{ $contact->from}}</td>
                            <td>{{ $contact->email}}</td>
                            <td>{{ $contact->phone_number}}</td>
                          <td>
                            <a href="{{route('contact.edit', $contact->id)}}">Edit</a>

                            <form action="{{route('contact.destroy', $contact->id)}}" method="post">
                            @csrf
                            @method ('DELETE')

                            <input type="submit" value="Unfriend" class="bt btn-danger btn-sm">
                            </form>
                          </td>
                   @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
@endsection
