<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="">
</head>
<body bgcolor="#f0ffff">
    <div style="text-align:center">
    <font size="7" color="#00008b" face="Century,Verdana">メディア一覧</font>
</div>
</body>
</html>
<body>
<div style="height:800px; widows:1700px;">
        <table border="3">
        <tr> 
　　　　 <td width="45" >選択</td>
        <td width="60">商品ID</td>
        <td width="250">ジャンル</td>
        <td width="500">商品名</td> 
        <td width="500">保管場所</td> 
        </tr> 
        <tr>
                <td><input id="check" type="checkbox" onclick="checkValue(this)" style="width:40px;height:40px;" name="選択[]"><td height="45"></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td><input id="check" type="checkbox" onclick="checkValue(this)" style="width:40px;height:40px;" name="選択[]"><td height="45"></td>
                <td></td>
                <td></td>
                <td></td>
                </tr> 
                <tr>
                <td><input id="check" type="checkbox" onclick="checkValue(this)" style="width:40px;height:40px;" name="選択[]"><td height="45"></td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>                         
                <tr>
                <td><input id="check" type="checkbox" onclick="checkValue(this)" style="width:40px;height:40px;" name="選択[]"><td height="45"></td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td><input id="check" type="checkbox" onclick="checkValue(this)" style="width:40px;height:40px;" name="選択[]"><td height="45"></td>
                <td></td>
                <td></td>
                <td></td>
                </tr> 
                </table>
        <p>
                <input type="button" onclick="location.href='http://yume.hacca.jp/koiki/form/button-link.htm'"value="編集・新規登録" style="width:200px;height:50px;font-size:25px">
                <input id="btn" type="button" disabled="disabled" onclick="location.href='https://php-factory.net/aboutphp/01.php'"value="削除" style="width:200px;height:50px;font-size:25px">
                <input id="bth" type="button" disabled="disabled" onclick="location.href='http://yume.hacca.jp/koiki/form/button-link.htm'"value="売値表示" style="width:200px;height:50px;font-size:25px">
               
        </p>
                <script src="https://php-factory.net/aboutphp/01.php"></script>
    <script type="text/javascript">

        function checkValue(check){
           var btn = document.getElementById('btn');

           if (check.checked) {
               btn.value = '削除';
               btn.removeAttribute('disabled');
           } else {
               btn.value = '削除';
               btn.setAttribute('disabled', 'disabled');
           }
       }
      
   </script>
                      </div>
                      </body>
                      </html>