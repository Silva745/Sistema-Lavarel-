<h1>Adicionar um nova duvida</h1>



<form action="{{route('formulario.guardar')}}" method="POST">

    @csrf ();

    <input type="text" name="object" id="" placeholder="Assunto">

    <textarea name="description"  cols="30" rows="3" placeholder=" Descrição"></textarea>

    <input type="submit" name="" id="">



</form>
