@extends('main')
@section('content')


<div class="lg:mb-6 sm:mb-2 h-32 lg:h-48 flex flex-col items-center justify-center bg-gradient-to-r from-pink-500 to-purple-700">
    <h2 class="font-bold  lg:text-3xl uppercase text-center text-gray-100">
        Diagnostic Service-Pathology Tests
    </h2>
    <p class="text-gray-100 text-lg">Home / Services / Diagnostic Services</p>
</div>

<div class="container mx-auto py-2 flex flex-wrap">
  <div class="container mx-auto p-4 bg-pink-100 rounded">

    <table id="pathology-tests-table" class="min-w-full bg-white border border-gray-200">
      <thead>
        <tr>
          <th class="px-4 py-2 border">Test Name</th>
          <th class="px-4 py-2 border">Short Name</th>
          <th class="px-4 py-2 border">Department</th>
          <th class="px-4 py-2 border">Total Price</th>
          {{-- <th class="px-4 py-2 border">Reagent Price</th>
          <th class="px-4 py-2 border">Specimen</th>
          <th class="px-4 py-2 border">Status</th>
          <th class="px-4 py-2 border">Delivery Day</th>
          <th class="px-4 py-2 border">Health Card</th> --}}
          <th class="px-4 py-2 border">Action</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<script>
  $(document).ready(function() {
        $('#pathology-tests-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/pathology-tests') }}',
            columns: [
                { data: 'test_name', name: 'test_name', className: 'px-4 py-2 border' },
                { data: 'short_name', name: 'short_name', className: 'px-4 py-2 border' },
                { data: 'department', name: 'department', className: 'px-4 py-2 border' },
                { data: 'total_price', name: 'total_price', className: 'px-4 py-2 border' },
                // { data: 'reagent_price', name: 'reagent_price', className: 'px-4 py-2 border' },
                // { data: 'specimen', name: 'specimen', className: 'px-4 py-2 border' },
                // { data: 'status', name: 'status', className: 'px-4 py-2 border' },
                // { data: 'delivery_day', name: 'delivery_day', className: 'px-4 py-2 border' },
                // { data: 'is_health_card', name: 'is_health_card', className: 'px-4 py-2 border' },
                {
                    data: 'action',
                    name: 'action',
                    className: 'px-4 py-2 border',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script>

@endsection
