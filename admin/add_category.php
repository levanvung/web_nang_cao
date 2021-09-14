<?php
    include '../class/category.php'
?>
<?php
	$cat = new category();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $cat_name = $_POST['cat_name']; 

        $insertCat = $cat->insert_cate($cat_name);
    }
?>
<?php
    include 'forms/header.php';    
?>
<?php
    include 'forms/sidebar.php';    
?>
<section id="main-content">
	<section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục
                        </header>
                        <?php
                            if(isset($insert_cate)){
                                echo $insert_cate;
                            }
                        ?>
                        <div class="panel-body">
                        <?php
                        ?>
                            <div class="position-center">
                                <form role="form" action="add_category.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" name="cat_name" id="exampleInputEmail1" placeholder="Category name">
                                </div>

                                <button type="submit" name="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>
</div>
	</section>


