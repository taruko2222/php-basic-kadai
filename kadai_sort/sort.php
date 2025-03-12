<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>
        <p>
            <?php
            function sort_2way($array, $order){
                // $nums =[15,4,18,23,10]; // もともとここで定義していた配列を関数の引数として渡すように変更
        
                if($order){
                    echo '昇順にソートします。<br>';
                    sort($array); // 修正箇所: 第二引数を削除
                    foreach($array as $num){
                    echo $num . '<br>';
                     }
                }
                else{
                    echo '降順にソートします。<br>';
                    rsort($array); // 修正箇所: 第二引数を削除
                    foreach($array as $num){
                    echo $num . '<br>';
                    }
                }
            }
            
            $nums = [15,4,18,23,10]; // 配列を関数の外で定義し、その配列を関数に渡す
            sort_2way($nums, TRUE);  // 昇順でソート
            sort_2way($nums, FALSE); // 降順でソート
            ?>
        </p>
    </body>

</html>