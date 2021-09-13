@extends('layouts.app')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father Name</th>
            <th>Tax code</th>
            <th>Fee</th>
            <th>Status</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($requests as $request)
        <tr id="{{$request['id']}}">
            <td>{{$request['first_name']}}</td>
            <td>{{$request['last_name']}}</td>
            <td>{{$request['father_name']}}</td>
            <td>{{$request['afm']}}</td>
            <td>{{$request['fee_id']}}</td>
            <td>{{$request['status']}}</td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" id="btn-approve" class="btn btn-success btn-sm btn-icon">
                    <i class="tim-icons icon-check-02"></i>
                </button>
                <button type="button" rel="tooltip" id="btn-reject" class="btn btn-danger btn-sm btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </td>
        </tr>
        @endforeach
        </tbody>


        <script>
  $(".btn-approve").click(function(e) {
    e.preventDefault();

    var id = $("#btn-approve").closest('tr').attr('id');
    console. log(id);
    $.blockUI();
    $.ajax({
      method: "PUT",
            url:"{{ route('admin.btnapproved') }}",
           data:{id:id}
    }).done(function( msg ) {
  });

});
</script>
@endsection

