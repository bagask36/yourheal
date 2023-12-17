@extends('back.layout.template')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endpush

@section('title', 'List of Articles - Admin')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Article</h1>
    </div>
    <div class="mt-3">
        <a href="{{ url('articles/create') }}" class="btn btn-success mb-2">Create</a>
        @if ($errors->any())
            <div class="my-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="swal" data-swal="{{ session('success') }}"></div>

        <table class="table table-striped table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Views</th>
                    <th>Status</th>
                    <th>Publish Date</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</main>

@endsection

@push('js')

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const swalData = $('.swal').data('swal');
        if (swalData) {
            Swal.fire({
                title: 'Success',
                text: swalData,
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            });
        }

        function deleteArticle(e) {
    let id = e.getAttribute('data-id');

    Swal.fire({
        title: "Delete Article",
        text: "Are you sure want to delete this Article?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancel",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.value) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'DELETE',
                url: '/articles/' + id,
                dataType: "json",
                success: function(response) {
                    Swal.fire({
                        title: 'Success',
                        text: response.message,
                        icon: 'success',
                    }).then((result) => {
                        window.location.href = '/articles';
                    })
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Failed to delete the article. Please try again.',
                        icon: 'error',
                    });
                }
            });
        }
    });
}

</script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url()->current() }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'title', name: 'title' },
                { data: 'categories_id', name: 'categories_id' },
                { data: 'views', name: 'views' },
                { data: 'status', name: 'status' },
                { data: 'publish_date', name: 'published_date' },
                { data: 'button', name: 'button' },
            ]
        });


    });
</script>
@endpush
