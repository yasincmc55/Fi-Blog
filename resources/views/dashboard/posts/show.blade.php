@extends('dashboard.main');

@section('content')


<div class="container">
    <h2>Post Formu</h2>
    <form method="POST" action=" {{route('post.save')}} " enctype="multipart/form-data"  >
        @csrf
       
        <div class="form-group" >
          <label for="image">Resim</label>
          <input class="form-control" type="file" name="images[]" id="image" multiple >

        </div>


        <div class="form-group">
            <label for="postIsmi">Post İsmi:</label>
            <input type="text" class="form-control" id="post_name" name="title" placeholder="Post İsmi">
        </div>


      <div class="form-group">
        <label for="editor">Content:</label>
        <textarea class="form-control" id="editor" name="content"></textarea>
      </div>
   

        <div class="form-group">
            <label for="postKategorisi">Post Kategorisi:</label>
            <select class="form-control" id="postKategorisi" name="category_id" >
                <option value="">Kategori Seçiniz</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}" >{{ $category->getHierarchyName() }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
</div>


@endsection


@section('scripts')

  <script>
    ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error => {
        console.error(error);
      });
  </script>


@endsection



