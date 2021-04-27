<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>速習 Laravel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <table class="table">
    <tr>
      <th>No.</th>
      <th>書名</th>
      <th>価格</th>
      <th>出版社</th>
      <th>刊行日</th>
    </tr>
    @each('subviews.book',$records,'record','subviews.empty')
  </table>
</body>

</html>
