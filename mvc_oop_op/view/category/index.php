<h1>Danh mục</h1>
<a href="?action=index">Trang chủ</a>
<br>
<a href="?action=create&controller=category">Thêm</a>
<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($arr as $each): ?>
        <tr>
            <td><?php echo $each->get_id()?></td>
            <td><?php echo $each->get_name()?></td>
            <td><a href="?action=edit&id=<?php echo $each->get_id()?>&controller=category">Sửa</a></td>
            <td><a href="?action=delete&id=<?php echo $each->get_id()?>&controller=category">Xóa</a></td>
        </tr>
    <?php endforeach;?>
</table>