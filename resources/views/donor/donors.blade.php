@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 mb-4">
            <form action="{{ route('donors.import') }}" method="post"
            enctype='multipart/form-data'>
                @csrf
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="donor" name="donor">
                            <label class="custom-file-label" for="donor">Choose file</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('donors.create') }}"
                        class="btn btn-info float-right">Add Donor</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            <div class="card k-card">
                <div class="card-header">
                    All Donors                   
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>Type</th>
                                <th>Donations</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse($donors as $donor)
                           <tr 
                           class="pointer"
                           onclick="window.location.href= this.dataset.url" 
                           data-url="{{ route('donors.show', $donor) }}">
                               <td>{{ $donor->id }}</td>
                               <td>{{ $donor->name }}</td>
                               <td>{{ $donor->address }}</td>
                               <td>{{ $donor->district }}</td>
                               <td>{{ ucwords(str_replace('_', ' ', $donor->type)) }}</td>
                               <td>
                                <a href="{{ route('donations', ['donor' => $donor]) }}">View</a>
                               </td>
                           </tr>
                           @empty
                           <tr class="text-center">
                               <td colspan="7" >No donors found.</td>
                           </tr>
                           @endforelse
                        </tbody>
                    </table>
                    {{ $donors->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
