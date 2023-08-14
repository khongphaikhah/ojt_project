<form action="?action=update&controller=product" method="post">
    <input type="hidden" name="id" value="<?php echo $each->get_id()?>">
    Tên
    <input type="text" name="name" value="<?php echo $each->get_name()?>">
    <br>
    Giá
    <input type="text" name="price" value="<?php echo $each->get_price()?>">
    <br>
    Mô tả
    <input type="text" name="description" value="<?php echo $each->get_decription()?>">
    <br>
    Danh mục
    <select name="category_id">
        <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->get_id()?>"<?php if($each->get_category_id() === $category->get_id()) echo "selected" ?>>
                <?php echo $category->get_name()?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    <button>Sửa</button>
</form>