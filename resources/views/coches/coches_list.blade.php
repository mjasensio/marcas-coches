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
input#search_coches {
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
      <a href="/" title="Ir a pagina principal"><i class="fas fa-home mr-2"></i></a>Coches<button type="button" data-toggle="modal" data-target="#modal_add" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i>Añadir coche</button>
    </h2>
  </div>
  <div class="card-body">
    <div class="search_box">
      <i class="fas fa-search search_placeholder"></i><input class="form-control" value="{{ $_GET['marca'] or '' }}" type="text" id="search_coches" name="search_coches" placeholder="Buscar por Nombre, Marca o Caracteristica...">
    </div>
    <table id="table_coches" class="table">
      <thead>
        <th>Nombre</th>
        <th>Característica</th>
        <th>Marca</th>
        <th>Acciones</th>
      </thead>
      <tbody>
       
      </tbody>
    </table>
  </div>
</div>

<div class="modal" id="modal_edit" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar coche<h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_edit" class="form">
          {{ csrf_field() }}
          <input name="id_edit" type="text" class="form-control hidden" hidden>
          <div class="form-group">
            <label >Nombre</label>
            <input name="nombre_edit" type="text" class="form-control" placeholder="Introducir nombre..">
          </div>
          <div class="form-group">
            <label>Característica</label>
            <input type="text" class="form-control" name="carac_edit" placeholder="Introduce caracteristica">
          </div>
         <div class="form-group">
            <label>Marca</label>
            <select type="text" class="form-control" name="marca_edit" >
              <option>Seleccionar..</option> // o lo quito o hago una vlaidacion con jquery en plan alert(selecciona coche!)
              @foreach($marcas as $marca)              
                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
              @endforeach
            </select>
          </div>     
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Editar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal" id="modal_add" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuevo coche<h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_add" class="form" url="coches/edit">
          {{ csrf_field() }}
          <div class="form-group">
            <label >Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="Introducir nombre..">
          </div>
          <div class="form-group">
            <label>Caracteristica</label>
            <input type="text" class="form-control" name="carac" placeholder="Introduce caracteristica">
          </div>
         <div class="form-group">
            <label>Marca</label>
            <select type="text" class="form-control" name="marca" >
              <option>Seleccionar..</option>
              @foreach($marcas as $marca)              
                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
              @endforeach
            </select>
          </div>     
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Añadir</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(function() {

    var table_coches = null;
    
    function listar_coches() {
      $.ajax({
        url : 'coches/listar_coches',
        type : 'get',
        success : function(data) {
          data = JSON.parse(data);
          
          if(table_coches !== null) table_coches.destroy();
          $('#table_coches tbody').empty();
          $(data).each((i, v) => { 
            var row = '<tr data-id="' + v['id'] + '" data-marca_id="' + v['marca_id'] + '" data-caracteristica="' + v['caracteristica'] + '" data-nombre="' + v['nombre'] + '" >' + 
                        '<td><i class="fas fa-car mr-2 row_car_icon"></i>' + v['nombre'] + '</td>' +
                        '<td>' + v['caracteristica'] + '</td>' + 
                        '<td>' + v['marca_nombre']['nombre'] + '</td>' + 
                        '<td>' + 
                          '<button class="table_btn editar_coche" title="Editar"><i class="fas fa-edit"></i></button>' +
                          '<button class="table_btn eliminar_coche" title="Eliminar"><i class="far fa-trash-alt"></i></button>' +
                        '</td>' + 
                      '</tr>';        
                      
            $('#table_coches tbody').append(row);
          })          
          
          table_coches = $('#table_coches').DataTable({
						"bjQueryUI" : true,
						"info": false,
						"bLengthChange": false
					});
          
          table_coches.search($('#search_coches').val()).draw();
          
          $('.editar_coche').click(function() {
            var id = $(this).closest('tr').attr('data-id');
            var nombre = $(this).closest('tr').attr('data-nombre');
            var marca_id = $(this).closest('tr').attr('data-marca_id');
            var caracteristica = $(this).closest('tr').attr('data-caracteristica');
            $('input[name="id_edit"]').val(id);
            $('input[name="marca_id_edit"]').val(marca_id);
            $('input[name="nombre_edit"]').val(nombre);
            $('input[name="carac_edit"]').val(caracteristica);
            $('select[name="marca_edit"]').val(marca_id);
            
            $('#modal_edit').modal('show');
          });

          $('.eliminar_coche').click(function(e) {
            if (confirm('Estas seguro de eliminar este coche de la base de datos?')) {
              var _tr = $(this).closest('tr');  
              var _id = $(_tr).attr('data-id');
              $.ajax({
                url : 'coches/delete',
                type : 'post',
                data : { 
                  _token : '{{ csrf_token() }}',
                  id : _id
                },
                success : function(response) {
                  $(_tr).fadeOut(1000, $(_tr).remove())
                  listar_coches();
                }
              }); 
            }
          });          
        }
      }) 
    }
    $('#search_coches').on('input', function() {
      table_coches.search($(this).val()).draw();
    });
    
    $('#form_edit').submit(function(e) {
      e.preventDefault();
      var values = $(this).serialize();
      $.ajax({
        url : 'coches/edit',
        type : 'post',
        data : values,
        success : function(data) {
          //data = JSON.parse(data);
          //console.log(data);
          listar_coches();
          $('#modal_edit').modal('hide');
        }
      });
      
    });
    
    $('#form_add').submit(function(e) {
      e.preventDefault();
      var values = $(this).serialize();
      $.ajax({
        url : 'coches/add',
        type : 'post',
        data : values,
        success : function(data) {
          //data = JSON.parse(data);
          //console.log(data);
          listar_coches();
          $('#modal_add').modal('hide');
        }
      });
    });  
  listar_coches();    
  });
</script>

<link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
