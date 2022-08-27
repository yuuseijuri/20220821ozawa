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
    .contact {
      width: 100%;
    }
    .contact_form {
      width: 100%;
      margin-top: 25px;
    }
    .list1 {
      width: 30%;
      padding: 5px;
      text-align: center;
    }
    .list2 {
      width: 50%;
      text-align: center;
    }
    .list3, .list4 {
      width: 10%;
      text-align: center;
    }
    .text1 {
      width: 30%;
      padding: 5px;
      text-align: center;
    }
    .text2 {
      width: 50%;
      text-align: center;
    }
    .text3 {
      width: 10%;
      text-align: center;
      margin-right: 15px;
    }
    .text4 {
      width: 10%;
      text-align: center;
    }
    .content2 {
      width: 80%;
      padding: 5px;
      border: 1px solid #778899;
      border-radius: 5px;
      font-size: 14px;
      text-align: left;
      
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
        <input class="content" type="text" name="task">
        <input class="create_btn" type="submit" value="追加">
      </form>
  </div>
  <div class="contact">
    <table class="contact_form">
      <tr>
        <th class="list1">作成日</th>
        <th class="list2">タスク名</th>
        <th class="list3">更新</th>
        <th class="list4">削除</th>
      </tr>
      @foreach($todos as $todo)
      <tr>
        <td class="text1">{{$todo->created_at}}</td>
        <td class="text2">
          <form action="/add" method="post">
          @csrf
            <input class="content2" type="text" name="task" value="{{$todo->task}}">
        </td>
        <td class="text3">
          <form action="/edit" method="post">
          @csrf
            <input class="update_btn" type="submit" value="更新">
          </form>
        </td>
        <td class="text4">
          <form action="/delete" method="post">
          @csrf
            <input class="remove_btn" type="submit" value="削除">
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html>

        