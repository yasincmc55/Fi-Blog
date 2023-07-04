@extends('dashboard.main')

@section('content')


       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="col-md-6" >
                    <a href=" {{route('post.show')}} " class="btn btn-gradient-dark btn-icon-text"> Post Ekle <i class="mdi mdi-file-check btn-icon-append"></i> </a>
                </div>
              <div class="card-body">
                <h4 class="card-title">Post Listesi</h4>
               
                </p>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> image </th>
                      <th> title </th>
                      <th> content </th>
                      <th> Edit </th>
                      <th> Delete </th>
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
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>  
  

    
@endsection