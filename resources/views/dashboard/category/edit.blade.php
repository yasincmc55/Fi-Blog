@extends('dashboard.main');

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kategori Düzenle</h4>
                <form action="{{ route('category.update',['category'=>$category->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="category">Kategori İsmi</label>
                        <input type="text" class="form-control" id="category" value="{{ $category->name }}" name="name" >
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="parent_id" >
                              <option value="0" >Ana Kategori</option>
                            @foreach ($categories as $item)
                              <option value="{{ $item->id }}" >{{ $item->getHierarchyName() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <label for="exampleInputUsername1">Sıra</label>
                    <input type="text" class="form-control" id="sira" placeholder="Sıra" name="order" value="{{ $category->order }}">             
                 
                   
                    <button type="submit" class="btn btn-gradient-primary me-2">Güncelle</button>
               
                     <a href="{{ route('category.index') }}" class="btn btn-light">Vazgeç</a>

                </form>
            </div>
        </div>
    </div>
@endsection


