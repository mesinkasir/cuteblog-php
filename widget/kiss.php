<?php
require 'cutes.php';
$id = $_GET["id"];
$cute = query("SELECT * FROM blog WHERE ID = $id")[0];
if( isset($_POST["submit"]) ) {
if( kiss($_POST) > 0 ) {
	echo " 
	<script>
	alert('Cool.. your post is update 😍 😘');
	document.location.href ='cuteblog.php';
	</script>
	";
	} else {
	echo "
	<script>
	alert('Oops.. cant update data 😭');
	document.location.href ='cuteblog.php';
	</script>
	";
	}
}
?>
<?php include 'headblog.php' ?>
<div class="col-12 p-3">
<div class="card p-3 p-md-5">
<h3>Update Post 🥳</h3>
<form action="" method="post">
<input type="hidden" name="id" value="<?= $cute["id"];?>">
<label for="title">Title </label>
<input class="form-control" type="text" name="title" id="title" required value="<?= $cute["title"];?>">
<label for="description">Description </label>
<input class="form-control" type="text" name="description" id="description" required value="<?= $cute["description"];?>">
<label for="cover">Cover </label>
<input class="form-control" type="url" name="cover" id="cover" value="<?= $cute["cover"];?>">
<label for="content">Content </label>
<textarea class="form-control" rows="5" type="text" name="content" id="content"><?= $cute["content"];?></textarea>
<br/><div class="p-1"><button type="submit" class="float-end col-12 col-md-4 btn btn-lg btn-dark" name="submit">Update Post</button></div>
</form>
</div></div>
<?php include 'footer.php' ?>