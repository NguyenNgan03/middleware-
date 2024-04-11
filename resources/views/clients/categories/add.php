<h1>Thêm chuyên mục</h1>
<form method="post" action="<?php echo route('categories.add') ?>">
    <div>
        <input type="text" name="category-name" placeholder="Tên chuyên mục">
    </div>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"> -->
    <button type="submit">Thêm chuyên mục</button>
</form>