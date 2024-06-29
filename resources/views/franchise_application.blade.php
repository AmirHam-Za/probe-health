@extends('main')
@section('content')

<div class="container mx-auto">
    <section class="content">
        <!-- Default box -->
        {{-- @include('common.message') --}}
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            {{-- <div class="box-header with-border" align="right">
                Franchise Application
            </div> --}}

            <div class="p-4">
                <div class="overflow-x-auto">
                    <table id="franchises-table" class="table-auto w-full border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100">
                                <th>S/L</th>
                                <th>Date Time</th>
                                <th>Name</th>
                                <th>Sex</th>
                                <th>Email</th>
                                <th>Date of Birth</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <!-- /.box-body -->
            <div class="box-footer"> </div>
            <!-- /.box-footer-->
        </div>
    </section>
</div>

@push('scripts')
<script>
    $(function() {
        $('#franchises-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('franchises.data') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'created_at', name: 'created_at' },
                { data: 'full_name', name: 'full_name' },
                { data: 'sex', name: 'sex' },
                { data: 'email', name: 'email' },
                { data: 'dob', name: 'dob' },
                { data: 'mobile_no', name: 'mobile_no' },
                { data: 'home_address', name: 'home_address' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush



@endsection
