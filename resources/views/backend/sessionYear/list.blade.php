@extends('backend.master')

@section('backend')
<div class="pageContent">
    <div class="pageTitle shadow-sm d-flex justify-content-between">
        <h3 class="title">Budget Year</h3>
        <a href="{{ route('sessionYear.create') }}" class="btn btn-primary">Add Year</a>
    </div>

    <!-- Form Wraper -->
    <div class="formWraper mt-3 mt-md-4 shadow-sm">

        <!-- Data View -->
        <div class="dataView mt-2 mt-md-2">
            <!-- Table -->
            <div class="table-responsive">

                <div class="mt-4">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="align-middle">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Session Year</th>
                                <th scope="col">Starting Month</th>
                                <th scope="col">Ending Month</th>
                                {{-- <th scope="col">Action</th> --}}
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $data->year }}</td>
                                <td>{{ $data->staring_month }}</td>
                                <td>{{ $data->ending_month }}</td>
                                {{-- <td>
                                    <a href="#" class="btn btn-info">Edit</a>
                                </td> --}}
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
