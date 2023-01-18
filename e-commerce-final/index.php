<?php include('header.php'); ?>
<section class="p-5">
	<div class="mb-3 float-right">
		<form class="form-inline" action="search.php" method="post">
			<div class="">
				<input class="form-control" type="text" name="kayword" placeholder="ค้นหา">
				<button type="submit" class="btn alert-primary">ค้นหา</button>
			</div>
		</form>
	</div>
	
	<?=alertShow();?>
	
	<div>
		<h4>สินค้าขายดี</h4>
		<div class="row">
			<?php
			$sql = "select p.* ,COUNT(l.product_id) as cnt
								FROM purchase_list l
								inner join product p on p.id = l.product_id
								GROUP by l.product_id
								order by cnt desc
								Limit 0,10";
			
			$best_products = get($sql);
			$best_ids = [];
			foreach ($best_products as $p){
				array_push($best_ids,$p['id']);
			?>
			<div class="card m-4" style="width: 18rem">
				<img class="card-img-top" src="upload_picture/<?=$P['picture'];?>" alt="card image cap" width="150" height="150">
				<div class="card-body">
				 	<h5 class="card-title"><?=$p['name'];?></h5>
					<p class="text-truncate card-text"><?=$p['detail'];?></p>
					<p class="card-text">ราคา<?=$p['price'];?>บาท</p>
					<?php 
						if(user('type') != 'seller'){
					?>
						<a href="add_cart.php!id<?=$p['id'];?>" class="btn btn-block alert-primary">สั่งซื้อ</a>
					<?php
						}
					?>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<section class="p-5">
	<h4>รายการสินค้า</h4>
		<div class="row">
			<?php
			$prepage = 20;
			$page=(empty($_GET['page']) ? 1 : $_GET['page']);
			$start = $prepage * $page - $prepage;
			$sql = "select * from product ";
			
			if(empty($best_ids)){
				$best_ids = implode(',',$best_ids);
				$sql .= "where id not in($best_ids)";
			}
			$all = GET($sql);
			$pages = ceil(COUNT($all)/$prepage);
			$sql .= "limit $start,$prepage";
			$products = GET($sql);
			foreach($products as $p){
				?>
			<div class="card m-4" style="width: 18rem">
				<img class="card-img-top" src="upload_picture/<?=$p['picture'];?>" alt="card image cap" width="150" height="150">
				<div class="card-body">
					<h5 class="card-title"><?=$p['name'];?></h5>
					<p class="text-truncate card-text"><?=$p['detail'];?></p>
					<p class="card-text">ราคา<?=$p['price'];?>บาท</p>
					<?php
						if(user('typr') != "seller"){
							?>
						<a href="add_cart.php!id<?=$p['id'];?>" class="btn btn-block alert-primary">สั่งซื้อ</a>
					<?php
						}
					?>
				</div>
			</div>
			<?php
			}
			?>
		</div>
</section>

<nav class="p-5">
	<ul class="pagination">
		<li class="page-item">
			<a class="page-link" href="index.php?pagr=1">
				<span aria-hidden="true">&laquo;</span>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<?php
		for ($i =1;$i <= $pages;$i++){
		?>
			<li class="page-item ml-1 mr-1">
				<a class="page-link" href="index.php?page=<?=$i?>"><?=$i?></a>
			</li>
		<?php
		}
		?>
		<li class="page-item">
			<a class="page-link" href="index.php?page=<?=$lastpage?>" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav>

<?php include('footer.php') ?>

