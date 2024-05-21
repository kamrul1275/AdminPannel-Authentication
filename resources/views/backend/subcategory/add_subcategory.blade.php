@extends('backend.layout.master')

@section('admin_content')

<div class="page-content">


				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Category Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Category Profile</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="" class="btn btn-primary">Add SubCategory</a>
						
						
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">



            <form action="{{ route('store.subcategory') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">SubCategory Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" name="subcategory_name" class="form-control" />
                            @if ($errors->has('subcategory_name'))
                                <span class="text-danger">{{ $errors->first('subcategory_name') }}</span>
                            @endif
                        </div>
                    </div>



					<div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Category Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          
					          <select class="form-select mb-3" name="category_id" aria-label="Default select example">

							  @foreach ($categories as $category)
								
									<option value="{{$category->id}}">{{$category->category_name}}</option>

							@endforeach
								</select>


                            @if ($errors->has('subcategory_name'))
                                <span class="text-danger">{{ $errors->first('subcategory_name') }}</span>
                            @endif
                        </div>
                    </div>



			

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">SubCategory Photo</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="file" name="subcategory_image" class="form-control"/>
                            @if ($errors->has('subcategory_image'))
                                <span class="text-danger">{{ $errors->first('subcategory_image') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="submit" class="btn btn-primary px-4" value="Add subCategory" />
                        </div>
                    </div>
                </form>
                

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

@endsection
