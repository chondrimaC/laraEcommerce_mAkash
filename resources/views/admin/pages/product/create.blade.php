@extends('admin.layouts.master')

@section('content')
    <div class="main-panel">
      <div class="content-wrapper">
          <div class="card">
              <div class="card-header">
                  Add Product
              </div>
              <div class="card-body">
                  <form method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                      @csrf

                      @include('admin.partials.messages')
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
                      </div>
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
                      </div>
                      <div class="form-group">
                        <label for="product_image">Product Image</label>

                            <div class="row">
                                <div class="col-md-4">
                                    <input type="file" class="form-control" id="product_image" name="product_image[]">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" id="product_image" name="product_image[]">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" id="product_image" name="product_image[]">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" id="product_image" name="product_image[]">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" id="product_image" name="product_image[]">
                                </div>
                            </div>

                      </div>
                      <button type="submit" class="btn btn-primary">Add Product</button>
                  </form>
              </div>
          </div>
      </div>
    </div>
@endsection
