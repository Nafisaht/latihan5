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
                            <h1 class="h4 text-gray-900 mb-4">Edit</h1>
                        </div>
 
                        <form class="user" action="{{ route('items.update', $item) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">                     
                                    <input value="{{ $item->code }}" type="text" name="code" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Kode Barang">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="type_id">
                                <option selected value="">Select Tipe</option>
                                @foreach ($itemTypes as $tp)
                                <option {{ $tp->id == $item->item_type_id ? 'selected' : ''}} value="{{ $tp->id }}">{{ $tp->name }}</option>
                                @endforeach
                            </select>
                               </div>
                            <div class="form-group">                     
                                <input value="{{ $item->name }}" type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Nama Barang">
                            </div>
                            <div class="form-group">                     
                                <input value="{{ $item->qty }}" type="number" name="qty" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Kuantitas Barang">
                            </div>
                            <div class="form-group">                     
                                <input value="{{ $item->price }}" type="number" name="price" class="form-control form-control-user" id="exampleFirstName"
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