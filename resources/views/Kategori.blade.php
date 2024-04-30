@extends('template.index')


@section('title','home')


@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <a href="/kategori/add">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Keterangan</th>
                    <th scope="max-width:200px"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{$row->kode_kategori}}</th>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->ket}}</td>
                            <td>
                                <a href="/kategori/{{ $row->kode_kategori }}/edit">
                                    
                                <button type="submit" class="btn btn-primary">Edit</button>
                                </a>
                                
                                <a href="/kategori/{{ $row->kode_kategori }}/delete">
                                    
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                    </a>
            

                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection