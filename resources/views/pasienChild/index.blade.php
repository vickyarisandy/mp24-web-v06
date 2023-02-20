@extends('layouts.apps')
@section('konten')
 @push('panggil_css')
  

 @endpush
 
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
      <div class="card-title">test</div>
        <p>selamat datang pasien child</p>

      </div>
    </div>
  </div>
</div>


@push('panggil_js')
    <script type="text/javascript">
        $(function () {
     
     $.ajaxSetup({
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
     
     var table = $('.data-table').DataTable({
         processing: true,
         serverSide: true,
         ajax: "{{ route('ajaxproducts.index') }}",
         columns: [
             {data: 'DT_RowIndex', name: 'DT_RowIndex'},
             {data: 'name', name: 'name'},
             {data: 'detail', name: 'detail'},
             {data: 'action', name: 'action', orderable: false, searchable: false},
         ]
     });
      
     $('#createNewProduct').click(function () {
         $('#saveBtn').val("create-product");
         $('#product_id').val('');
         $('#productForm').trigger("reset");
         $('#modelHeading').html("Create New Product");
         $('#ajaxModel').modal('show');
     });
     
     $('body').on('click', '.editProduct', function () {
         var product_id = $(this).data('id');
         $.get("{{ route('ajaxproducts.index') }}" +'/' + product_id +'/edit', function (data) {
             $('#modelHeading').html("Edit Product");
             $('#saveBtn').val("edit-user");
             $('#ajaxModel').modal('show');
             $('#product_id').val(data.id);
             $('#name').val(data.name);
             $('#detail').val(data.detail);
         })
     });
     
     $('#saveBtn').click(function (e) {
         e.preventDefault();
         $(this).html('Sending..');
     
         $.ajax({
             data: $('#productForm').serialize(),
             url: "{{ route('ajaxproducts.store') }}",
             type: "POST",
             dataType: 'json',
             success: function (data) {
                 $('#productForm').trigger("reset");
                 $('#ajaxModel').modal('hide');
                 table.draw();
             },
             error: function (data) {
                 console.log('Error:', data);
                 $('#saveBtn').html('Save Changes');
             }
         });
     });
 
     $('body').on('click', '.deleteProduct', function (){
         var product_id = $(this).data("id");
         var result = confirm("Are You sure want to delete !");
         if(result){
             $.ajax({
                 type: "DELETE",
                 url: "{{ route('ajaxproducts.store') }}"+'/'+product_id,
                 success: function (data) {
                     table.draw();
                 },
                 error: function (data) {
                     console.log('Error:', data);
                 }
             });
         }else{
             return false;
         }
     });
    </script>
 
@endpush

@endsection