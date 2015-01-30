

<table class='table table-striped table-hover'>

  <thead>
    <tr>
      <th>Tila</th>
      <th>Kommentit</th>
      <th>Luotu</th>
    </tr>
  </thead>

  <tbody>

    @foreach ($translation->statuses as $status)

      <tr>
        <td>{{ $status->title }}</td>
        <td>{{ $status->comments }}</td>
        <td>{{ $status->created_at }}</td>
      </tr>
    
    @endforeach

  </tbody>

</table>
