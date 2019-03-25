<?php
    require_once 'htmlspecialchars.php';
    require_once 'Controller.php';
    //新規作成
    $controller = new Controller;
    $controller->create();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>To Do リスト</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <h2>To Do リスト</h2>
    <form method="POST" action="">
        <div>
            <label for="name">タスク名</label>
        </div>
        <div>
            <input id="name" type="text" name="name">
        </div>
        <div>
            <label for="content">メモ</label>
        </div>
        <div>
            <input name="content" id="content">
        </div>
        <input type="submit" name="submit" value="追加">
    </form>

    <h2>タスク一覧</h2>
    <table>
        <tr>
            <th></th>
            <th>タスク名</th>
            <th>メモ</th>
        </tr>
        <?php
            //削除
            $controller->delete();
            //一覧表示
            $stt = $controller->index();
            foreach($stt as $row){
        ?>
        <tr>
            <form method="POST" action="">
                <td><input type="checkbox" name="checkbox" id="option"></td>
                <td><?php echo e($row['name']) ?></td>
                <td><?php echo e($row['content']) ?></td>
                <td>
                    <input type="hidden" name="delete" value="true">
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                    <input type="submit" name="delete" value="削除">
                </td>
            </form>
        </tr>
        <?php
            }
        ?>
    </table>

</body>