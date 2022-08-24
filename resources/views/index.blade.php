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
      position: relative;
      width: 100vw;
      height: 100vh;
    }
    .message {
      background-color: white;
      width: 50vw;
      height: 35vh;
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
      width: 40vw;
      padding: 5px;
      border: 1px solid #778899;
      border-radius: 5px;
      font-size: 14px;
    }
    .create_btn {
      margin-left: 70px;
      border: 2px solid #FF00FF;
      border-radius: 5px;
      color: #FF00FF;
      font-size: 12px;
      font-weight: bold;
      padding: 8px 16px;
      transition: 0.5s;
    }
    .contact_form {
      width: 100%;
      height: 20vh;
      padding: 5px;
      margin-top: 25px;
    }
    .content_list {
      width: 10vw;
      padding: 5px;
      border: 1px solid #778899;
      border-radius: 5px;
      font-size: 12px;
    }
    th {
      display: inline-block;
      margin-top: 10px;
    }
    .list1 {
      margin-left: 80px; 
    }
    .list2 {
      margin-left: 180px; 
    }
    .list3 {
      margin-left: 180px; 
    }
    .list4 {
      margin-left: 35px; 
    }
    .update_btn {
      border: 2px solid #FFA500;
      border-radius: 5px;
      color: #FFA500;
      font-size: 12px;
      font-weight: bold;
      padding: 8px 16px;
      transition: 0.5s;
      margin: 25px 60px 15px auto; 
      display: block;
    }
    .remove_btn {
      border: 2px solid #00FF00;
      border-radius: 5px;
      color: #00FF00;
      font-size: 12px;
      font-weight: bold;
      padding: 8px 16px;
      transition: 0.5s;
      margin-left: 50px; 
      margin: 25px 20px 15px auto;
      display: block;
    }
  </style>
</head>
<body>
  <div class="container"></div>
  <div class="message">
    <h1>Todo List</h1>
    <div class="message_msg">
    @if(count($errors) > 0)
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif 
      <form action="/add" method="post">
      @csrf
        <input class="content" type="text" name="name1">
        <input class="create_btn" type="submit" value="追加">
      </form>
    </div>
    <div class="contact_form">
      <table>
        <tr>
          <th class="list1">作成日</th>
          <th class="list2">タスク名</th>
          <th class="list3">更新</th>
          <th class="list4">削除</th>
        </tr>
        @foreach($authors as $author)
        <tr>
          <td>{{$author->create_at}}</td>
          <td>{{$author->create_at}}</td>
        </tr>
        <tr>
          <td>
            {{$author->task}}
            <form action="/add" method="post">
              <input class="content_list" type="text" name="name2">
            </form> 
          </td>
          <td>
            {{$author->task}}
            <form action="/add" method="post">
              <input class="content_list" type="text" name="name3">
          </td>
        </tr>
        @endforeach
        <tr>
          <td>
            <form action="/edit" method="post">
              <input class="update_btn" type="submit" value="更新">
              <input class="update_btn" type="submit" value="更新">
            </form>
          </td>
          <td>
            <form action="/delete" method="post">
              <input class="remove_btn" type="submit" value="削除">
              <input class="remove_btn" type="submit" value="削除">
            </form>
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>
