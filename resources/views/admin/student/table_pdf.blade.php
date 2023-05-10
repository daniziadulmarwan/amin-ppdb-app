<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Semua Siswa</title>
</head>
<body>
  <table>
    <tr>
      <td></td>
    </tr>
    <tbody>
      <tr>
        @foreach ($datas as $data)
            <td>{{ $data->fullname }}</td>
        @endforeach
      </tr>
    </tbody>
  </table>
</body>
</html>