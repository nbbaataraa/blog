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
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">

                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                      <i class="material-icons">content_paste</i> Үндсэн мэдээлэл
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#messages" data-toggle="tab">
                      <i class="material-icons">library_books</i> Гэрээ
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab">
                      <i class="material-icons">label</i> Гэрээний тѳрѳл
                      <div class="ripple-container"></div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#research" data-toggle="tab">
                      <i class="material-icons">bubble_chart</i> Судалгаа
                      <div class="ripple-container"></div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#award" data-toggle="tab">
                      <i class="material-icons">monetization_on</i> Шагнал
                      <div class="ripple-container"></div>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <table class="table">
                  <tbody>
                    <tr>
                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>

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

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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
              <div class="tab-pane" id="messages">
                <table class="table">
                  <tbody>
                    <tr>

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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
              <div class="tab-pane" id="settings">
                <table class="table">
                  <tbody>
                    <tr>

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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
              <div class="tab-pane" id="research">
                <table class="table">
                  <tbody>
                    <tr>

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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
              <div class="tab-pane" id="award">
                <table class="table">
                  <tbody>
                    <tr>

                      <td style="width: 2%">Баатар</td>
                      <td>Батням</td>
                      <td>МТМэргэжилтэн</td>
                      <td>ЗУХ</td>
                      <td>ЗУ90010001</td>
                      <td>88990099</td>
                      <td>СБД 1 хороо, 1 байр 1тоот</td>
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
      {{-- <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Хэрэглэгчийн мэдээлэл</h4>
            <p class="card-category">Ажилтны үндсэн бүртгэл</p>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Country</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Dakota Rice</td>
                  <td>$36,738</td>
                  <td>Niger</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Minerva Hooper</td>
                  <td>$23,789</td>
                  <td>Curaçao</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Sage Rodriguez</td>
                  <td>$56,142</td>
                  <td>Netherlands</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Philip Chaney</td>
                  <td>$38,735</td>
                  <td>Korea, South</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
@endsection

@section('script')

@endsection
