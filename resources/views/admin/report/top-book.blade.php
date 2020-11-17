@extends('admin.templates.default')
 


@section('content')
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Buku Terlaris</h3>
            </div>
            <div class="box-body">
                
                
                <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>judul</th>
                            <th>Deskripsi</th>
                            <th>Jumlah Buku</th>
                            <th>Total Dipinjam</th>
                            <th>Sampul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $page = 1;
                        if (request()->has('page'))
                        {
                            $page = request('page');
                        }
                        $no = (env('PAGINATE_ADMIN') * $page) - (env('PAGINATE_ADMIN')-1);
                        @endphp

    
                     @foreach ($books as $book)
                     <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->qty}}</td>
                        <td>{{$book->borrowed_count}}</td>
                        <td>{{$book->author->name}}</td>
                        <td>
                            <img src="{{ $book->getCover() }}" height="150px" alt="{{ $book->title }}">

                        </td>


                    </tr>  
                     @endforeach
                    </tbody>
                </table>  

                {{$books->links()}}
                </div>

                  
                  
                </div>

        {{-- form delete author mempharsing ke dataTables  --}}

        <form action="" method="post" id="deleteForm">

            @csrf
            @method("DELETE")
            <input type="submit" value="Hapus" style="display: none">
        </form>        
@endsection










