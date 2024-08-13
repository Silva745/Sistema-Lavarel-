<h1>Começando com a mão na massa</h1>


<a href={{route ('formulario.criar')}}>Ir ao Formulario</a>
<br><br>

<table>

    <thead>
        <th>Assunto</th>
        <th>Estado</th>
        <th>Descrição</th>
        <th></th>
    </thead>

    <tbody>
        @foreach ($form as $for)
            <tr>
                <td>{{ $for->subject }}</td>
                <td>{{ $for->status }}</td>
                <td>{{ $for->description }}</td>
                <td>::::</td>
            </tr>
        @endforeach
    </tbody>

