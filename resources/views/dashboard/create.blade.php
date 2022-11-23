@extends('layouts.main')
@section('title','Tambah Data Tamu')
@section('konten')
<form method="POST" enctype="multipart/form-data" action="/">
    @csrf
    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">            
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Registrasi Tamu</h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('store') }}"> 
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control
                            form-ccontrol-user" id="nama" name="nama_tamu" placeholder="Nama Tamu" required>
                        </div> 
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="alamat" name="alamat"
                                placeholder="Alamat" required>
                        </div>
    
                        <div class="form-group">
                            <textarea class="form-control 
                            form-control-user" id="about" name="tujuan" placeholder="Tujuan" required></textarea>
                        </div>
    
                        <div class="form-group">
                            <input type="text" class="form-control
                            form-ccontrol-user" id="no_tlpn" name="no_tlpn" placeholder="No Tlpn" required>
                        </div>
                        
                        <div class="form-group">
                            <select class="form-select form-control" id="kategori_tamu" name="id_kategori" >  
                                <option value="" >Silahkan Pilih Kategori Tamu</option>
                                @foreach ($kategori as $item)
                                <option value="{{ $item->id}}" >{{ $item->kategori }}</option>
                                @endforeach
                            </select>
                        </div>  
    
                        <div class="form-group">
                            <label for="jk">Jam Kedatangan</label>
                            <input type="time" class="form-control
                            form-ccontrol-user" id="jam_kedatangan" name="jam_kedatangan" placeholder="Jam Kedatangan" required>
                        </div> 
    
                        <div class="form-group">
                            <label for="jk">Tanggal</label>
                            <input type="date" class="form-control
                            form-ccontrol-user" id="tanggal" name="tanggal" placeholder="Tanggal" required>
                        </div>         
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">    
                        </div>                                                        
            </div>
        </div>
            </div>                   
    </div>
</div>
</div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>
@endsection