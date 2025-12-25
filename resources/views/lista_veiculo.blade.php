
<div class="container">
 <h1 class="text-center">Listagem de Veiculos</h1>
 @if(session('success'))
 <div class="alert alert-success">
 {{ session('success') }}
 </div>
 @endif
 @if(session('error'))
 <div class="alert alert-danger">
 {{ session('error') }}
 </div>
 @endif
 <a href='auth'>
 <span class="material-icons"> add_box</span> 
 Adicionar um novo produto
 </a>
</div>
 <div class="container">
 <br>
 <h2>Listagem dos produtos cadastrados</h2>
 <table class="table table-hover table-striped">
 <thead>
 <tr>
 <th>Marca</th>
 <th>Tipo</th>
 <th>Valor</th>
 <th>Editar</th>
 <th>Apagar</th>
 </tr>
 </thead>
 <tbody>
 @foreach($veiculos as $veiculo)
 <tr>
 <td> {{$veiculo['marca']}} </td>
 <td> {{$veiculo['tipo']}} </td>
 <td> {{$veiculo['valor']}} </td>
 <td><a href="edita_v/{{$veiculo['id']}}">
 <span class='material-icons'> edit 
</span>
 </a>
 </td>
 <td><a href="apaga_v/{{$veiculo['id']}}" >
 <span class='material-icons'> delete 
</span>
 </td>
 
 </tr>
 @endforeach
 </tbody>
 </table>
 {!! $veiculos->links() !!}
</div>
