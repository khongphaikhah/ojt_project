<form action="?action=update&controller-category" method="post">
    <input type="hidden" name="id" value="<?php echo $each->get_id()?>">
    Tên
    <input type="text" name="name" value="<?php echo $each->get_name()?>">
    <br>
    <button>Sửa</button>
</form>