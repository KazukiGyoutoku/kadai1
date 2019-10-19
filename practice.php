<?php
 //echo "hello world";
 
 
 //課題1..$a　という変数に3を、$b　という変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう。
 
  $a = 3;
  $b =7;
  
  //echo $a + $b;
  
  //課題2..$array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
  
  $array_month  = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'
  ];
   //echo $array_month[7];
  
   //課題3..$hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
   //$world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう。

   
   $hello = "Hello";
   $name ="行徳和樹";
   $world = "s World!";
   
   
   //echo $hello.$name.$world;
   
   //課題4..$tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう。
   
   
   $tech_boost ='tech';
   $tech_boost .="boost";
   
   //echo $tech_boost;
   
   //課題５..【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは一つとは限りません。)
   
  
  
   $calender_2018  = [ //変数名の頭に数字を使っているので修正。
  "January" => "1月",
  "February" => "2月", //キー名と値名は'、'ではなく','を使って追加していく、修正
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月", //キーの指定は'=>'修正
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月", //10月が文字列として認識されていないので修正
  "November" => "11月",
  "December" => "12月"
]; //連想配列の式がコロン構文になっていなかったので修正

//echo $calender_2018["December"]; 
//①出力の変数名の修正. ②　連想配列の出力は　[]内　に　クォーテーションをつけて値の出力するので修正