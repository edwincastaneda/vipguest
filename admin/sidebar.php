	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
		<?php if($dashboard){ ?> <li class="active"> <?php }else{?><li> <?php } ?>
			<a href="/admin"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
		</li>
		<?php if($cards){ ?> <li class="active"> <?php }else{?><li> <?php } ?>
			<a href="cards.php"><span class="glyphicon glyphicon-envelope"></span> Cards</a>
		</li>
		<?php if($rsvp){ ?> <li class="parent active"> <?php }else{?><li class="parent"> <?php } ?>
				<a href="#">
					<span class="glyphicon glyphicon-book"></span> RSVP<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<?php if($rsvp){ ?> <ul class="children" id="sub-item-1"> <?php }else{?><ul class="children collapse" id="sub-item-1"> <?php } ?>
				
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Invitados
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Familias/Grupos
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Mesas
						</a>
					</li>
				</ul>
			</li>
			<?php if($gifts){ ?> <li class="active"> <?php }else{?><li> <?php } ?><a href="gifts.php"><span class="glyphicon glyphicon-gift"></span> Gifts</a></li>
			<?php if($croquis){ ?> <li class="active"> <?php }else{?><li> <?php } ?><a href="forms.html"><span class="glyphicon glyphicon-map-marker"></span> Croquis</a></li>
			<?php if($outfit){ ?> <li class="active"> <?php }else{?><li> <?php } ?><a href="panels.html"><span class="glyphicon glyphicon-tags"></span> Outfit</a></li>
			<li role="presentation" class="divider"></li>
			<!--<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>-->
		</ul>
	</div><!--/.sidebar-->