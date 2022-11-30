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
    border: 0.5px solid gray;
    border-radius: 4px;
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
    cursor: pointer;
  }

  .alertarea{
    color: red;
    background-color: #fee;
    display: inline-block;
    border-radius: 2px;
  }

  .alertarea:empty{
    display: none;
  }

  .error{
    color: red;
  }

  .error td{
    background-color: #fee;
    border-radius: 2px;
    display: inline-block;
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
      @error('name')
      <tr class="error">
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td class="form__example">
          <span>例）山田</span>
          <span class="form__example--span">例）太郎</span>
        </td>
      </tr>

      <tr>
        <th class="form__title">性別</th>
        <td class="form__gender">
          <input type="radio" name="gender" value="男性" checked="checked">
          <label for="gender">男性</label>
          <input type="radio" name="gender" value="女性">
          <label for="gender">女性</label>
        </td>
      </tr>
      @error('gender')
      <tr class=error>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td class="form__example"></td>
      </tr>
      <tr>
        <th class="form__title">メールアドレス</th>
        <td  class="form__input">
          <input type="email" name="email" class="form__input-email">
          <span class="alertarea"></span>
        </td>
      </tr>
      @error('email')
      <tr class="error">
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td class="form__example">例）test@example.com</td>
      </tr>
      <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
          var targets = document.getElementsByClassName('form__input-email');
          for (var i=0 ; i<targets.length ; i++) {
            targets[i].oninput = function () {
              var alertelement = this.parentNode.getElementsByClassName('alertarea');
              var pattern= /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/ ;
            if( pattern.test(this.value) ){
                if( alertelement[0] ) { alertelement[0].innerHTML = ""; }
              } else {
                if( alertelement[0] ) { alertelement[0].innerHTML = "メールアドレスを正しく入力ください"; }
              }
            }
          }
        });
        </script>
      <tr>
        <th class="form__title">郵便番号</th>
        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
        <td class="form__PostCode">
          <span>〒</span>
          <input type="text" name="post_code" class="form__PostCode-post" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
          <span class="alertarea"></span>
        </td>
      </tr>
      @error('post_code')
      <tr class="error">
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td  class="form__example">例）123-4567</td>
      </tr>
      <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
          var targets = document.getElementsByClassName('form__PostCode-post');
          for (var i=0 ; i<targets.length ; i++) {
            targets[i].oninput = function () {
              var alertelement = this.parentNode.getElementsByClassName('alertarea');
              var pattern= /^[0-9]{3}-[0-9]{4}$/;
            if( pattern.test(this.value) ){
                if( alertelement[0] ) { alertelement[0].innerHTML = ""; }
              } else {
                if( alertelement[0] ) { alertelement[0].innerHTML = "郵便番号を正しく入力ください"; }
              }
            }
          }
        });
        </script>
      <tr>
        <th class="form__title">住所</th>
        <td  class="form__input"><input type="text" name="address"></td>
      </tr>
      @error('address')
      <tr class="error">
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td class="form__example">例）東京都渋谷区千駄ヶ谷1-2-3</td>
      </tr>
      <tr>
        <th class="form__building">建物名</th>
        <td  class="form__input"><input type="text"  name="building" class=""></td>
      </tr>
      <tr>
        <th></th>
        <td class="form__example">例）千駄ヶ谷マンション101</td>
      </tr>
      <tr>
        <th class="form__title">ご意見</th>
        <td class="form__input">
          <textarea name="content" class="form__input-content"></textarea>
          <span class="alertarea"></span>
        </td>
      @error('content')
      <tr class="error">
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      </tr>
        <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
          var targets = document.getElementsByClassName('form__input-content');
          for (var i=0 ; i<targets.length ; i++) {
            targets[i].oninput = function () {
              var alertelement = this.parentNode.getElementsByClassName('alertarea');
            if( this.value.length > 120 ) {
                if( alertelement[0] ) { alertelement[0].innerHTML = "入力文字数は120文字以内で入力してください。"; }
                this.style.border = "2px solid orange";
              } else {
                if( alertelement[0] ) { alertelement[0].innerHTML = ""; }
                this.style.border = "1px solid black";
              }
            }
          }
        });
        </script>
    </table>
    <p class="form__submit"><input type="submit" value="確認" class="form__btn"></p>
  </form>


</body>

</html>