@extends('backend.layout.master')


@section('admin_content')



		<!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto mt-2">
						
							 <a href="{{route('category.add')}}" class="btn btn-primary">Add Category</a> 
						<!--  -->
						
					</div>
				</div>
				<!--end breadcrumb-->



                <h6 class="mb-0 text-uppercase">DataTable Example</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Id</th>
										<th>Name</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

                                @foreach ($subcategories as $key=>$subcategory)
                                    
									
									<tr>
										<td>{{$key+1}}</td>
										<td>{{$subcategory->subcategory_name}}</td>
										<td> <img src="{{ asset($subcategory->category_image) }}" style="height:50px; width:50px;" alt="">  </td>
										<td>
                                            <a href="" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
										
									</tr>


                                    @endforeach
							
								</tbody>
								<tfoot>
									<tr>
                                        <th>Id</th>
										<th>Name</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

@endsection