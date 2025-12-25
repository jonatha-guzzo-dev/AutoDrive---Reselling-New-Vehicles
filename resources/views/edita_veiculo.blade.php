
<div class="container">
 <h1 class="text-center">Criação de um novo 
Produto</h1>
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
 @if(isset($errors) && count($errors) > 0)
 <div class="alert alert-danger">
 @foreach($errors->all() as $error)
 <p> {{$error}} </p>
 @endforeach
 </div>
 @endif
<form method="POST" 
action="../atualiza_v/{{$veiculo['id']}}" 
enctype="multipart/form-data">
 @csrf
 <div class="form-group"> <label for="pwd">Marca:</label>
<input type="text" class="form-control" name="marca" 
value="{{$veiculo['marca']}}"required>
 </div>

 <div class="form-group"> <label for="pwd">Tipo:</label>
<input type="text" class="form-control" name="tipo" 
value="{{$veiculo['tipo']}}"required>
 </div>

 <div class="form-group"> <label for="pwd">Valor:</label>
<input type="number" class="form-control" name="valor" 
value="{{$veiculo['valor']}}"required>
 </div>
 <input class='btn btn-secondary' type="reset" value="Limpar">
<input class='btn btn-primary' type="submit" name="submit" value="Enviar">
 </form>
</div>

