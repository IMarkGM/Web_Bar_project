<div id="pics" class="container" style="margin-top:150px">
    <h2 class="text-light"><?php echo $name[isset($_POST["category_index"]) ? $_POST["category_index"] : 0]?></h2>
    <br>
    <?php echo '<script id="getter_script" data-name='.$category[isset($_POST["category_index"]) ? $_POST["category_index"] : 0].' src="assets/js/load_images.js" type="text/javascript"></script>' ?>
</div>
