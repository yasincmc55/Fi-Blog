@extends('dashboard.main')

@section('content')
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="col-md-6" >
                    <a  href="{{route('category.show')}}" class="btn btn-gradient-dark btn-icon-text" > Kategori Ekle <i class="mdi mdi-file-check btn-icon-append"></i> </a>
                </div>
              <div class="card-body">
                <h4 class="card-title">Kategori Listesi</h4>
               
              
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> Kategori Adı </th>
                      <th> Sıra </th>
                      <th> Eylem </th> 
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as  $category)
                      <tr>
                        <td class="py-1">
                          {{ $category->getHierarchyName() }}
                        </td>
                        <td> {{ $category->order }} </td>
                      
                        <td> 
                           <a href=" {{ route('category.edit', ['category'=>$category->id]) }} " class="btn btn-gradient-info btn-rounded btn-fw"> Düzenle </a>

                           <form action="{{ route('category.delete', ['category'=>$category->id]) }}" method="POST" style="display: inline" >
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