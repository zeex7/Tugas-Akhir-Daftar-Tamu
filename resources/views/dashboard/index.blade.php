@extends('layouts.main')
@section('title','Data Tamu')
@section('css')
    <!-- Custom styles for this page -->
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('konten')

    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-info">Data Tamu Tanggal <?=date('d-m-y')?></h6>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-right">                            
                            <a href="#" class="btn btn-success btn-icon-split">                       
                                <span class="text">Rekapitulasi Pengunjung</span>
                            </a>
                        </div>
                    </div>                    
                </div>
            </div>
            
        </div>        
        <div class="card-body">
            <div class="table-responsive">                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Tamu</th>
                            <th>Kategori Tamu</th>
                            <th>Alamat</th>
                            <th>No. Tlp</th>
                            <th>Tanggal</th>
                            <th>Jam Kedatangan</th>
                            <th>Jam Keluar</th>
                            <th>Tujuan</th>
                            <th>Option</th>
                            
                        </tr>
                    </thead>                    
                    <tbody>  
                        @foreach ($data as $item)
                           <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama_tamu}}</td>
                            <td>{{$item->kategori->kategori}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->no_tlpn}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->jam_kedatangan}}</td>
                            @if ($item->jam_keluar != null) 
                            <td>{{$item->jam_keluar}}</td>
                            @else
                            <td>--</td>
                            @endif
                            <td>{{$item->tujuan}}</td>
                            <td>
                                    <a href="/" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="/{{$item->id}}/hapus" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                </form>
                            </td>
                        </tr> 
                        @endforeach                      
                                                                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="col-lg-13 ">        
        <div class="card shadow "> 
            <div class="card-header py-3">
                <div class="row">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-info">Statistik Tamu</h6>
                    </div>                    
                </div>
                
            </div>
            <div class="card-body">                
                <table class="table table-bordered">
                    <tr>
                        <td>Hari ini</td>
                        <td>: 10</td>
                    </tr>
                    <tr>
                        <td>Kemarin</td>
                        <td>: 5</td>
                    </tr>
                    <tr>
                        <td>Bulan ini</td>
                        <td>: 20</td>
                    </tr>
                    <tr>
                        <td>Keseluruhan</td>
                        <td>: 50</td>
                    </tr>
                </table>                
            </div>
        </div>
    </div>


<!-- /.container-fluid -->
@endsection
@section('js')
    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>

@endsection