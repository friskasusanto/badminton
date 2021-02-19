@extends('admin.layouts.index', ['active' => 'add_galery'])
@section('title', 'Galery')
@section('content') 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add Galery Name</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Galery Name</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Add Galery Name</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @include('layouts._flash')
					@if (count($errors) > 0)
			        <div class="alert alert-danger">
			            <strong>Whoops!</strong> There were some problems with your input.<br><br>
			            <ul>
			                @foreach ($errors->all() as $error)
			                    <li>{{ $error }}</li>
			                @endforeach
			            </ul>
			        </div>
			        @endif
                    <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/galeryName')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-body">
                    @if (count($galery) != 0)
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Galery Name List</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    @foreach ($galery as $g)
                                        <p>- {{$g->name}}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Galery Name</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" placeholder="gallery name" name="name" required >
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info" id="btn_submit">Simpan</button>
                            </div>
                        </div>
                    </div>
				</form>
			</div> <!-- /content -->
		</div>
	</div>
</div>
@endsection

@section('script')
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 500
    });
</script>
@endsection