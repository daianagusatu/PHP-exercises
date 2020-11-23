<!doctype html>
<html>
	<head>
		<title>
            <?php
                echo $title;
            ?>
        </title>
		<link rel="stylesheet" href="uon.css" />
	</head>

	<body>
		<header>
			<img src="logo.jpg" alt="logo" />
			<ul>
                <?php
                    require 'sidebar1.php';
                ?>    
				<?php
                    require 'sidebar2.php';
                ?>  
                <?php
                    require 'sidebar3.php';
                ?>  
			</ul>
		</header>
		<section></section>
		<main>
            <?php
                echo $content;
            ?>

        </main>

		<aside>

			<ul>
                <?php
                    require 'sidebar1.php';
                ?>    
				<?php
                    require 'sidebar2.php';
                ?>  
                <?php
                    require 'sidebar3.php';
                ?>
			</ul>

		</aside>

		<footer>
			&copy; Small text at the bottom just because it seems necessary
		</footer>

	</body>

</html>
