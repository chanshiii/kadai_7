<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js"></script>
</head>
<body>
    <table>
        <tr>
            <th>日時</th>
            <th>お名前</th>
            <th>EMAIL</th>
            <th>趣味</th>
            <th>出身</th>
        </tr>

<?php
// ファイルを変数に格納
$filename = "data/data.txt";
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
// data.txt内には文字列で格納されている
// !feof:指定したファイルが最後まで読み込まれたかの確認関数
while (!feof($fp)) {
 
  // fgetsでファイルを読み込み、文字列を(改行含める)1行ずつ取ってくる
  $txt = fgets($fp);
  // 文字列を配列に変換
  $arr = explode("," , $txt);
  // var_dump($abc); デバック用
  // fwrite($file, $str."\n"); の改行コードがあるがためにエラーが発生するので以下の構文を追加する必要がある。
  if(empty($txt)){
    continue;
};
?>
<!-- $abc[0]date:日時 -->
        <tr>
            <td><?=$arr[0]?></td>
            <td><?=$arr[1]?></td>
            <td><?=$arr[2]?></td>
            <td><?=$arr[3]?></td>
            <td><?=$arr[4]?></td>
        </tr>
        <?php
};
// fcloseでファイルを閉じる
fclose($fp);
?>
    </table>

    <canvas id="polarAreaChart" width="200" height="200"></canvas>

    <script>
        new Chart(document.getElementById("polarAreaChart"),
          {"type":"pie",
                  "data":{"labels":["Red","Blue","Yellow", "Grey"],
                                   "datasets":[{"label":"example2",
                                               "data":[60,20,15,5],
                                               "backgroundColor":["rgb(255, 99, 132)",
                                                                  "rgb(54, 162, 235)",
                                                                  "rgb(255, 205, 86)",
                                                                  "rgb(128, 128, 128)"]
                                               }]
                         }
          }
);

    </script>
</body>
</html>



