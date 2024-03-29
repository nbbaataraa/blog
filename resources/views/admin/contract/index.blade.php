@extends('layouts.backend')
@section('title')

@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1">
        <button type="submit" class="btn btn-primary btn-round btn-just-icon">
          <i class="material-icons">add_circle</i>
          <div class="ripple-container"></div>
        </button>
      </div>
      <div class="col-md-1">
        <button type="submit" class="btn btn-danger btn-round btn-just-icon">
          <i class="material-icons">edit</i>
          <div class="ripple-container"></div>
        </button>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Гэрээ</h4>

          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Country</th>
                <th>Country</th>
                <th>Country</th>
                <th>Country</th>
                <th>Country</th>
                <th>Country</th>
                <th>Country</th>
                <th>Country</th>
                <th>Country</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Dakota Rice</td>
                  <td>$36,738</td>
                  <td>Niger</td>
                  <td>Niger</td>
                  <td>Niger</td>
                  <td>Niger</td>
                  <td>Niger</td>
                  <td>Niger</td>
                  <td>Niger</td>
                  <td>Niger</td>
                  <td>Niger</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Minerva Hooper</td>
                  <td>$23,789</td>
                  <td>Curaçao</td>
                  <td>Curaçao</td>
                  <td>Curaçao</td>
                  <td>Curaçao</td>
                  <td>Curaçao</td>
                  <td>Curaçao</td>
                  <td>Curaçao</td>
                  <td>Curaçao</td>
                  <td>Curaçao</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Sage Rodriguez</td>
                  <td>$56,142</td>
                  <td>Netherlands</td>
                  <td>Netherlands</td>
                  <td>Netherlands</td>
                  <td>Netherlands</td>
                  <td>Netherlands</td>
                  <td>Netherlands</td>
                  <td>Netherlands</td>
                  <td>Netherlands</td>
                  <td>Netherlands</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Philip Chaney</td>
                  <td>$38,735</td>
                  <td>Korea, South</td>
                  <td>Korea, South</td>
                  <td>Korea, South</td>
                  <td>Korea, South</td>
                  <td>Korea, South</td>
                  <td>Korea, South</td>
                  <td>Korea, South</td>
                  <td>Korea, South</td>
                  <td>Korea, South</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')

@endsection
