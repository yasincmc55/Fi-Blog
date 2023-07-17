@extends('dashboard.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="col-md-6">
                    <a href=" {{ route('post.show') }} " class="btn btn-gradient-dark btn-icon-text"> Post Ekle <i
                            class="mdi mdi-file-check btn-icon-append"></i> </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Post Listesi</h4>


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Resim </th>
                                <th> Başlık </th>
                                <th> İçerik </th>
                                <th>Kategori</th>
                                <th> Eylem </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="py-1">

                                        @if ($post->gallery->count() > 0)
                                            <img src="{{ asset('storage/images/'.$post->gallery[0]->name) }}"
                                              alt="image" />
                                        @endif


                                    </td>
                                    <td> {{ Str::limit($post->title, 30) }} </td>
                                    <td>
                                        {!! Str::limit($post->content, 40) !!}
                                    </td>

                                    <td>
                                        {{ $post->category->name }}
                                        <!-- post'un ait olduğu kategori ismi -->
                                    </td>


                                    <td>
                                        <a href=" {{ route('post.edit', ['post' => $post->id]) }} "
                                            class="btn btn-gradient-info btn-rounded btn-fw"> Düzenle </a>

                                        <form action="{{ route('post.delete', ['post' => $post->id]) }}" method="POST"
                                            style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-gradient-danger btn-rounded btn-fw"> Sil </button>
                                        </form>
                                    </td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
