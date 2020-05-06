<?php
  include "conf/info.php";
  $title="Home";
  include_once "header.php";
    ?>
<style>
<?php include 'css/style.css'; ?>
</style>

      <div class="card">
        <div class="card-header">
          <h3 class="text-center">- Fresh From The Oven  -</h3>
          <h5 class="text-center">
          <?php
            include_once "api/api_now.php";
            $min = date('d F Y', strtotime($nowplaying->dates->minimum));
            $max = date('d F Y', strtotime($nowplaying->dates->maximum));
            echo "<sub>from</sub> <span>". $min . "</span> , <sub>until</sub> <span>" . $max . "</span>";
          ?>
          </h5>
        </div>
          <div class="row">
              <?php
                foreach($nowplaying->results as $p){
                  echo '
                   <div class="col-lg-3-mt-auto">
                    <div class="card">
                      <div class="card-group">
                        <div class="card text-center" style="width: 300px;">
                          <a href="movie.php?id=' . $p->id . '">
                          <img class="card-img rounded-0 img-fluid w-100" src="'.$imgurl_1.''. $p->poster_path . '">
                            <div class="container-fluid">
                            <h5 class="card-title">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h5>
                            <p><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></p>
                        </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    </div>    
                        ";  
                      }
                      ?>  
      
          </div>
<?php
  include_once "footer.php";
?>