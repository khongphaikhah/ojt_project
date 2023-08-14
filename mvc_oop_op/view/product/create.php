<form action="?action=store&controller=product" method="post">
    Tên
    <input type="text" name="name">
    <br>
    Giá
    <input type="text" name="price">
    <br>
    Mô tả
    <input type="text" name="description">
    <br>
    Danh mục
    <select name="category_id">
        <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->get_id()?>">
                <?php echo $category->get_name()?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    <button>Thêm</button>
</form>