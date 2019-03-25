<?php
    require_once 'htmlspecialchars.php';
    require_once 'Controller.php';
    $controller = new Controller;
    $controller->create();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>To Do リスト</title>
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
            <textarea name="content" id="content" cols="30" rows="3"></textarea>
        </div>
        <input type="submit" value="追加">
    </form>

    <h2>タスク一覧</h2>
    <table>
        <tr>
            <th></th>
            <th>タスク名</th>
            <th>メモ</th>
        </tr>
        <?php
            $stt = $controller->index();
            foreach($stt as $row){
        ?>
        <tr>
            <td><input type="checkbox"></td>
            <td><?php echo e($row['name']) ?></td>
            <td><?php echo e($row['content']) ?></td>
            <td>
                <form method="POST" action="Controller.php">
                    <input type="submit" value="削除">
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>

</body>