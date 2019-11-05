<?php

  if(isset($_GET["term"])){
      $term = $_GET["term"];
  }
  else{
    exit("You must enter a search term!");
  }

  if(isset($_GET["type"])){
      $type = $_GET["type"];
  }
  else{
    $type = "sites";
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Woodle!</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <div class="wrapper">

      <div class="header">

          <div class="headerContent">
              <div class="logoContainer">
                <a href="index.php">
                  <img src="assets/images/woodle.png" alt="Image">
                </a>
              </div>

              <div class="searchContainer">
                <form action="search.php" method="GET">
                  <div class="searchBarContainer">
                    <input class="searchBox" type="text" name="term">
                    <button class="searchButton">
                      <img  src="assets/images/icons/search.png">
                    </button>
                  </div>
                </form>

              </div>
          </div>


    			<div class="tabsContainer">

    				<ul class="tabList">

    					<li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
    						<a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
    							Sites
    						</a>
    					</li>

    					<li class="<?php echo $type == 'images' ? 'active' : '' ?>">
    						<a href='<?php echo "search.php?term=$term&type=images"; ?>'>
    							Images
    						</a>
    					</li>

              <li class="<?php echo $type == 'videos' ? 'active' : '' ?>">
                <a href='<?php echo "search.php?term=$term&type=videos"; ?>'>
                  Videos
                </a>
              </li>

              <li class="<?php echo $type == 'gifs' ? 'active' : '' ?>">
                <a href='<?php echo "search.php?term=$term&type=gifs"; ?>'>
                  Gifs
                </a>
              </li>



    				</ul>


    			</div>

      </div>

    </div>

  </body>
</html>
