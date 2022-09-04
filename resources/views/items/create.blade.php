@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create</h1>
                        </div>
 
                        <form class="user" action="{{ route('items.store') }}" method="POST">
                            @csrf
                            <div class="form-group">                     
                                    <input type="text" name="code" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Kode Barang">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="item_type_id">
                                <option selected value="">Select Tipe</option>
                                @foreach ($types as $tp)
                                <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                                @endforeach
                            </select>
                               </div>
                            <div class="form-group">                     
                                <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Nama Barang">
                            </div>
                            <div class="form-group">                     
                                <input type="number" name="qty" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Kuantitas Barang">
                            </div>
                            <div class="form-group">                     
                                <input type="number" name="price" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Harga Barang">
                            </div>
                              

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Upload
                            </button>
                            <hr>
                            
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> 
@endsection