<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <style>
    .container {
      background-color: #0000CD;
      height: 100vh;
      width: 100vw;
      position: relative;
    }
    .message {
      background-color: white;
      width: 50vw;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
    }
    h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .content {
      width: 100px;
      padding: 5px;
      border: 1px solid #778899;
      border-radius: 5px;
      font-size: 14px;
    }
    .create_btn {
      text-align: left;
      border: 2px solid #FF00FF;
      border-radius: 5px;
      color: #FF00FF;
      font-size: 12px;
      font-weight: bold;
      padding: 8px 16px;
      transition: 0.5s;
    }
    .update_btn {
      border: 2px solid #FFA500;
      border-radius: 5px;
      color: #FFA500;
      font-size: 12px;
      font-weight: bold;
      padding: 8px 16px;
      transition: 0.5s;
    }
    .remove_btn {
      border: 2px solid #00FF00;
      border-radius: 5px;
      color: #00FF00;
      font-size: 12px;
      font-weight: bold;
      padding: 8px 16px;
      transition: 0.5s;
    }
  </style>
</head>
<body>
  <div class="container"></div>
  <div class="message"></div>
  <h1>Todo List</h1>
  <div class="content">
    @if(count($errors > 0))
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif
    <form action="/add" method="post">
      @csrf
      <input type="text" name="name1">
      <input class="create_btn" type="submit" value="追加">
    </form>
  </div>
  <div class="contact_form">
    <table>
      <tr>
        <th rowspan="2">作成日</th>
        <th rowspan="2">タスク名</th>
        <th rowspan="2">更新</th>
        <th rowspan="2">削除</th>
      </tr>
      @foreach($authors as $author)
      <tr>
        <td>{{$author->create_at}}</td>
        <td>{{$author->create_at}}</td>
      </tr>
      <tr>
        <td>{{$author->task}}</td>
        <td>{{$author->task}}</td>
      </tr>
      @endforeach
      <tr>
        <td>
          <form action="/edit" name="name2">
            <input class="update_btn" type="submit" value="更新">
          </form>
        </td>
        <td>
          <form action="/edit" name="name3">
            <input class="update_btn" type="submit" value="更新">
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <form action="/delete" name="name4">
            <input class="remove_btn" type="submit" value="削除">
          </form>
        </td>
        <td>
          <form action="/delete" name="name5">
            <input class="remove_btn" type="submit" value="削除">
        </td>
      </tr>
    </table>
    </form>
  </div>
</body>
</html>
