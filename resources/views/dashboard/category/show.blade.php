@extends('dashboard.main');

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kategori Ekle</h4>
                <form class="forms-sample" action="{{route('category.save')}}" method="POST">
                     @csrf
                    <div class="form-group">
                        <label for="category">Kategori İsmi</label>
                        <input type="text" class="form-control" id="category" placeholder="Kategori İsmi" name="name" >
                    </div>
                    <div class="form-group">
                        <label>Ana Kategori</label>
                        <select class="form-control" name="parent_id" >
                              <option value="0" >Ana Kategori</option>
                            @foreach ($categories as $category)
                              <option value="{{ $category->id }}" >{{ $category->getHierarchyName() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <label for="exampleInputUsername1">Sıra</label>
                    <input type="text" class="form-control" id="sira" placeholder="Sıra" name="order" >
                 
                 
                    <button type="submit" class="btn btn-gradient-primary me-2">Ekle</button>
                    <button class="btn btn-light">Vazgeç</button>
                </form>
            </div>
        </div>
    </div>
@endsection


