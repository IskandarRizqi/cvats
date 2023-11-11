@extends('admin.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
              
                <a href="{{route('pengalaman.create')}}" class="btn btn-primary btn-sm">Tambah</a>
              
            </div>
        </div>


        <!-- CONTENT AREA -->
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget widget-content-area br-4">
                    <div class="widget-one">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>perusahaan</th>
                                    <th>posisikerja</th>
                                    <th>kota</th>
                                    <th>negara</th>
                                    <th>tanggalmulai</th>
                                    <th>tanggalselesai</th>
                                    <th>deskripsi</th>

                                    <th class="no-content text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($skill as $key => $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->perusahaan}}</td>
                                    <td>{{$value->posisikerja}}</td>
                                    <td>{{$value->kota}}</td>
                                    <td>{{$value->negara}}</td>
                                    <td>{{$value->tanggalmulai}}</td>
                                    <td>{{$value->tanggalselesai}}</td>
                                    <td>{{$value->deskripsi}}</td>

                                    <td>
                                        <a href="{{ route('pengalaman.show', $value->id) }}" class="btn btn-primary btn-sm d-block d-none">Edit</a>
                                        <br>
                                        {{-- <form action="{{ route('sosiallink.destroy', $value->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a type="submit" class="btn btn-danger btn-sm show_confirm d-block d-none">Hapus</a>
                                        </form> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

        </div>




        <!-- CONTENT AREA -->

    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection