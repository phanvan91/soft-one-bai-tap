<?php
$arrayClass = [
	[
		[
			'class' => 'parent'
		],
		[
			'class' => 'chilren'
		],
		[
			'class'=>'chilren'
		],
	],
	[
		[
			'class' => 'second'
		],
		[
			'class' => 'second'
		],
	],
	[
		[
			'class'=>'third'
		],
		[
			'class' => 'third-1'
		],
	],
];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Bai tap</title>
	<style type="text/css">
	.main-content {
		border:3px solid gray;
		margin: 50px auto;
		display: flex;
		flex-wrap: wrap;
		width:960px;
	}
		.main-content .content-item {
			border:2px solid red;
			height: 50px;
			/*display: inline-block;*/
			width: 30%;
			overflow: hidden;
			margin: 15px auto;
		}

		.main-content .content-item .parent {
		    background: blue;
		    height: 75%;
		    width: 45%;
		    float: left;
		    margin-left: 5%;
		    margin-top: 2%
		}
		.main-content .content-item .chilren {
		    background: blue;
		    height: 30%;
		    width: 45%;
		    float: right;
		    margin-top: 2.3%;
		    margin-right: 2%;
			  
		}
		.main-content .content-item .second {
	        background: blue;
		    height: 30%;
		    width: 85%;
		    margin-top: 2.3%;
		    margin-left: 7%;
		}
		.main-content .content-item .third {
	        background: blue;
		    height: 75%;
		    width:45%;
		    float:left;
		    margin-top:2.3%;
		    margin-left:3%;
		}
		.main-content .content-item .third-1 {
	        background: blue;
		    height: 75%;
		    width:45%;
		    float:right;
		    margin-top:2.3%;
		    margin-right:3%;
		}

	</style>
</head>
<body>
<div class="main-content">
<?php foreach ($arrayClass as $class) : ?>
		<div class="content-item">
			<?php foreach ($class as $value) : ?>
					<?php 
					if($value['class'] == 'parent' )
			 			echo '<div class="parent"></div>';
				 	if($value['class'] == 'chilren')
				 		echo '<div class="chilren"></div>';
				 	if($value['class'] == 'second')
				 		echo '<div class="second"> </div>';
				 	if($value['class'] == 'third')
				 		echo '<div class="third"> </div>';
				 	if($value['class'] == 'third-1')
				 		echo '<div class="third-1"> </div>';
					 ?>
				<?php endforeach ?>
		</div>
	<?php endforeach; ?>
</div>
</body>
</html>