<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	    <div class="container-fluid">
			<a class="navbar-brand mt-2 mt-lg-0" href="/">
				<img src="public/logo/header/logo-donkey-five.jpeg" alt="logo donkey five" srcset="" style="height:6rem;width:6rem;">
			</a>
		  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ms-auto nav-mr d-flex align-items-center">
						<?php if (empty($_SESSION['user']) && empty($_SESSION['role'])) : ?>
							<li class="nav-item">
								<a class="nav-link" href="?path=login">Login</a>
							</li>
						<?php endif; ?>
						<?php if (!empty($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
							<li class="nav-item dropdown">
								<a class="nav-link " href="?path=rentals" id="navbarDropdowncenter" >Rental</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="" id="navbarDropdowncenter" userRole="button" data-bs-toggle="dropdown" aria-expanded="false">Gestion</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdowncenter">
									<li><a class="dropdown-item" href="?path=centers">Centers</a></li>
									<li><a class="dropdown-item" href="?path=addcenter">Add Center</a></li>
									<li><a class="dropdown-item" href="?path=fields">Fields</a></li>
									<li><a class="dropdown-item" href="?path=addfield">Add Field</a></li>
									<li><a class="dropdown-item" href="?path=options">Options</a></li>
									<li><a class="dropdown-item" href="?path=addoption">Add Option</a></li>
									<li><a class="dropdown-item" href="?path=admins">List admin</a></li>
									<li><a class="dropdown-item" href="?path=addadmin">Add Admin</a></li>
									<li><a class="dropdown-item" href="?path=users">List User</a></li>
									<li><a class="dropdown-item" href="?path=adduser">Add User</a></li>
								</ul>
							</li>
						<?php endif; ?>
						<?php if (!empty($_SESSION['role'])) : ?>
							<li class="nav-item dropdown mr-5 pr-5">
								<a class="nav-link dropdown-toggle" href="" id="navbarDropdowncenter" userRole="button" data-bs-toggle="dropdown" aria-expanded="false">
									Profil
									<?php if (!empty($_SESSION['role']) && ($_SESSION['role'] === 'admin' )): ?>
										<?php if(!empty($nbMessage) && $nbMessage != 0):?>
											<span class="badge bg-dark text-white rounded-pill cart-items"><?= $nbMessage?></span>
										<?php endif;?>
									<?php endif; ?>
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdowncenter">
									<?php if (!empty($_SESSION['role']) && ($_SESSION['role'] === 'admin' )): ?>
										<li>
											<a class="dropdown-item" href="/messages">
												Message
												<?php if(!empty($nbMessage) && $nbMessage != 0):?>
													<span class="badge bg-dark text-white rounded-pill cart-items"><?= $nbMessage?></span>
												<?php endif;?>
											</a>
										</li>
									<?php endif; ?>
									<?php if ($_SESSION['role'] === 'admin' ) : ?>
										<li><a class="dropdown-item" href="?path=adminprofil">Profil</a></li>
									<?php elseif ($_SESSION['role'] == 'user' ) : ?>
										<li><a class="dropdown-item" href="?path=userprofil">Profil</a></li>
									<?php endif; ?>
									<li><a class="dropdown-item" href="?path=logout">Logout</a></li>
								</ul>
							</li>
						<?php endif; ?>
						<?php if (empty($_SESSION['user']) || (!empty($_SESSION['role']) &&  $_SESSION['role'] === 'user')) : ?>
							<li class="nav-item">
								<a class="nav-link" href="?path=cards"> 
									<i class="bi bi-cart">
									<img src="public/logo/header/sticker-but-de-foot-ambiance-sticker-KC10584-3854526139.svg" alt="" srcset="">
									<?php if(!empty($_SESSION['card'])):?>
										<span class="badge bg-danger text-white rounded-pill cart-items"><?= count($_SESSION['card'])?></span>
									<?php endif;?>
									</i>
								</a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>



