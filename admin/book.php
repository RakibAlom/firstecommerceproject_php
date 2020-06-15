<?php 
	include 'header.php'; 

	include '../include/dbcon.php';
	$count = 1;
	$sql = "SELECT * FROM book";
	$run = mysqli_query($con,$sql);
?>

	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<form action="" method="post">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="book_add.php">Add Porduct (Book)</a></button>
					</div>
					<div class="col-md-6 col-sm-6 ml-auto">
						<div class="input-group mb-3">
							<input type="search" class="form-control" name="search" placeholder="search here">
							<div class="input-group-append">
								<button class="btn btn-success" name="search"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div id="details" class="mt-2">
				<table class="table table-striped table-hover">
					<tr>
						<th>SL</th>
						<th>Name</th>
						<th>Category</th>
						<th>Author</th>
						<th>Price</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)){ ?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['category']; ?></td>
						<td><?php echo $result['author'] ?></td>
						<td><?php echo $result['price'] ?></td>
						<td><img height="45px" width="45px" src="../images/book/<?php echo $result['image']; ?>"></td>
						<td>
							<a href="book_view.php?id=<?php echo $result['id']; ?>" class="btn btn-success">View</a>
							<a href="book_edit.php?id=<?php echo $result['id']; ?>" class="btn btn-info">Edit</a>
							<a href="book_delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include'footer.php'; ?>