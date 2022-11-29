<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<style rel="stylesheet" type="text/css">
  body{
    width: 600px;
  }

  .title{
    font-size: 20px;
    text-align: center;
    font-weight: bold;
  }

  table{
    width: 100%;
  }

  tr{
    width: 100%;
  }

  th{
    width: 25%;
    font-size: 12px;
    padding-left: 24px;
    text-align: left;
  }

  td{
    width: 75%;
  }

  textarea{
    width: 100%;
  }

  .form__title::after{
    content: "※";
    color: red;
    font-size: 10px;
    margin-left: 4px;
  }

  input{
    width: 100%;
    height: 24px;
    border-radius: 4px;
    border: 0.5px solid gray;
  }

  .form__example{
    color: gray;
    font-size: 12px;
    padding-left: 12px;
    padding-bottom: 24px;
  }

  .form__example--span{
    margin-left: 178px;
  }

  .form__gender input{
    width: 24px;
    margin-bottom: 6px;
  }

  .form__gender label{
    font-size: 12px;
    vertical-align: 6px;
    margin-right: 24px;
  }

  .form__name--input{
    display: flex;
    justify-content: space-between;
    width: 100%;
  }

  .form__name--input span{
    width: 48%;
  }

  .form__PostCode{
    width: 100%;
  }
  .form__PostCode span{
    font-size: 12px;
  }

  .form__PostCode input{
    width: 94%;
    margin-left: 3px;
  }

  textarea{
    height: 72px;
  }

  .form__submit{
    text-align: center;
  }

  .form__btn{
    background-color: black;
    color: white;
    width: 120px;
    height: 36px;
    line-height: 36px;
  }

</style>

<body>
  <p class="title">{{$txt}}</p>
  <form action="/" method="POST">
    @csrf
    <table>
      <tr>
        <th class="form__title">お名前</th>
        <td class="form__name--input">
          <span><input type="text" name="name"></span>
          <span><input type="text" name="name"></span>
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="form__example">
          <span>例）山田</span>
          <span class="form__example--span">例）太郎</span>
        </td>
      </tr>
      @error('name')
      <tr>
        <th>Error</th>
        <td><{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th class="form__title">性別</th>
        <td class="form__gender">
          <input type="radio" name="gender" value="男性">
          <label for="gender">男性</label>
          <input type="radio" name="gender" value="女性">
          <label for="gender">女性</label>
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="form__example"></td>
      </tr>
      @error('gender')
      <tr>
        <th>Error</th>
        <td><{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th class="form__title">メールアドレス</th>
        <td  class="form_input"><input type="email" name="email"></td>
      </tr>
      <tr>
        <th></th>
        <td class="form__example">例）test@example.com</td>
      </tr>
      @error('email')
      <tr>
        <th>Error</th>
        <td><{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th class="form__title">郵便番号</th>
        <td class="form__PostCode">
          <span>〒</span>
          <input type="text" name="post_code">
        </td>
      </tr>
      <tr>
        <th></th>
        <td  class="form__example">例）123-4567</td>
      </tr>
      @error('post_code')
      <tr>
        <th>Error</th>
        <td><{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th class="form__title">住所</th>
        <td  class="form_input"><input type="text" name="address"></td>
      </tr>
      <tr>
        <th></th>
        <td class="form__example">例）東京都渋谷区千駄ヶ谷1-2-3</td>
      </tr>
      @error('address')
      <tr>
        <th>Error</th>
        <td><{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th class="form__building">建物名</th>
        <td  class="form_input"><input type="text"  name="building"></td>
      </tr>
      <tr>
        <th></th>
        <td class="form__example">例）千駄ヶ谷マンション101</td>
      </tr>
      <tr>
        <th class="form__title">ご意見</th>
        <td class="form_input"><textarea name="content"></textarea></td>
      </tr>
      @error('content')
      <tr>
        <th>Error</th>
        <td><{{$message}}</td>
      </tr>
      @enderror
    </table>
    <p class="form__submit"><input type="submit" value="確認" class="form__btn"></p>
  </form>
</body>

</html>