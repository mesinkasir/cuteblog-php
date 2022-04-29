<?php
require 'cutes.php';
if( isset($_POST["submit"]) ) {
if( love($_POST) > 0 ) {
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
<h3>Add New Post 😘</h3>
<form action="" method="post" enctype="multipart/form-data">
<label for="title">Title : </label>
<input class="form-control" type="text" name="title" id="title" required>
<label for="description">Description : </label>
<input class="form-control" type="text" name="description" id="description" required>
<label for="cover">Cover : </label>
<input class="form-control" type="url" name="cover" id="cover">
<label for="content">Content : </label>
<textarea class="form-control" rows="5" type="text" name="content" id="content"></textarea>
<div class="p-1 text-end"><button class="float-end btn btn-dark col-12 col-md-4 btn-lg" type="submit" name="submit">Publish Post</button></div>
</form>
</div></div>
<?php include 'footer.php' ?>