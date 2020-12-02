

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<table class="table">
  <thead class="thead-dark">
    <tr>
    <th> Nome </th>
    <th> Descrição </th>
    <th><a href="home" class="btn btn-primary">Home</a></th>
    </tr>
    @for($i = 0; $i < count($produtos); $i++)
        <tr>
        <td> {{$produtos[$i]->nome}} </td>
        <td> {{$produtos[$i]->descricao}} </td>
        </tr>
    @endfor
</table>