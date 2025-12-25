

<div class="container">
 <h1 class="text-center">Criação de um 
novo Produto</h1>
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
 <form method="POST" action="insere_v" enctype="multipart/form-data">
 @csrf
 <div class="form-group"> <label for="pwd">Marca:</label>
 <input type="text" class="form-control" name="marca" required>
 </div>

 <div class="form-group"> <label for="sel1">Tipo:</label>
 <select class="form-control" name="tipo">
 <option value ="carro">carro </option>
 <option value ="moto"> moto</option>
 <option value ="caminhao"> caminhao</option>
 </select>
 </div>

 <div class="form-group"> <label for="pwd">Valor:</label>
 <input type="number" class="form-control" name="valor" required>
 </div>
<input class='btn btn-primary' type="submit" name="submit" 
value="Enviar">
 </form>
</div>
