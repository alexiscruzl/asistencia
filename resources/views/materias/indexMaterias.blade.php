<h1>
  Hola mundo
</h1>
<div class="row">
  <thead>
  <tr>
    <th> </th>
    </tr>
  </thead>
  <tbody>
    @foreach($materias as $mat)
  <tr>
    <td>{{ $mat->id }}</td>
    <td>{{ $mat->nombre_materia }}</td>
    <td>{{ $mat->crn }}</td>
    <td>{{ $mat->salon }}</td>
    </tr>
  </tbody>
  
</div>