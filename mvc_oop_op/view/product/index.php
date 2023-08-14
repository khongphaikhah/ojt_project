<h1>Sản phẩm</h1>
<a href="?action=index">Trang chủ</a>
<a href="?action=create&controller=product">Thêm</a>
<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Danh mục</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($arr as $each): ?>
        <tr>
            <td><?php echo $each->get_id()?></td>
            <td><?php echo $each->get_name()?></td>
            <td><?php echo $each->get_price()?></td>
            <td><?php echo $each->get_decription()?></td>
            <td><?php echo $each->get_category_name()?></td>
            <td><a href="?action=edit&id=<?php echo $each->get_id()?>&controller=product">Sửa</a></td>
            <td><a href="?action=delete&id=<?php echo $each->get_id()?>&controller=product">Xóa</a></td>
        </tr>
    <?php endforeach;?>
</table>