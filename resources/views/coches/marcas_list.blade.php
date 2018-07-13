<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/all.css') }}">
<style>
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

button.table_btn:hover {
  color: #1d74b8;
}

button.table_btn {
  border: 0px;
  background: transparent;
  font-size: 16px;
  margin: 0px auto;
  cursor: pointer;
}

table.dataTable thead th, table.dataTable thead td {
  padding: 10px 18px;
  border-bottom: 1px solid #d8d8d8 !important; 
}
.dataTables_wrapper .dataTables_filter {
  float: right;
  text-align: right;
  visibility: hidden;
  display:none;
}
.row_car_icon {
  color: #5576a0
}
.datatable th {
  color: #3a3939;
}
.search_box {
  margin: 5px 0px 10px;
  position: relative;
}
.search_placeholder {
  position: absolute;
  top: 8px;
  left: 11px;
  color: #bdbdbd;
  font-size: 20px;
}
input#search_marcas {
  text-indent: 27px;
}
table.dataTable.no-footer {
  border-bottom: 1px solid #d8d8d8 !important;
}
</style>

<script src="{{ asset('js/app.js') }}"></script>
<div class="card">
  <div class="card-header">
    <h2>
      <a href="/" title="Ir a pagina principal"><i class="fas fa-home mr-2"></i></a>Marcas
    </h2>
  </div>
  <div class="card-body">
    <div class="search_box">
      <i class="fas fa-search search_placeholder"></i><input class="form-control" type="text" id="search_marcas" name="search_coches" placeholder="Buscar por Nombre, Marca o Caracteristica...">
    </div>
    <table id="table_marcas" class="table">
      <thead>
        <th>Nombre</th>
        <th>Caracteristica</th>
      </thead>
      <tbody>
      @foreach($marcas as $marca)
      <tr>
        <td><a href="/coches?marca={{ $marca->nombre }}" >{{ $marca->nombre }}</a></td>
        <td>{{ $marca->caracteristica }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
<script>
$(function() {
  var table_marcas = $('#table_marcas').DataTable({
    "bjQueryUI" : true,
    "info": false,
    "bLengthChange": false
  });
  
  $('#search_marcas').on('input', function() {
    table_marcas.search($(this).val()).draw();
  });
  
});
</script>


<link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>