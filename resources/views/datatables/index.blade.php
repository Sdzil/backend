@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th id="action">Action</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'first_name', name: 'name' },
            { data: 'last_name', name: 'last_name' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            // { data: '', name: 'action'}
        ]
    });
});
</script>
@endpush
