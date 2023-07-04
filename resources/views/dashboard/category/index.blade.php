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
               
                </p>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> Kategori Adı </th>
                      <th> Sıra </th>
                      <th> Eylem </th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                      </td>
                      <td> Herman Beck </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> Düzenle </td>
                      <td> Sil </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>  

    
@endsection