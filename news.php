<?php
  include "conf/info.php";
  $title="Popular Movies";
  include_once "header.php";
?>
<style>
<?php include 'css/style.css'; ?>
</style>
<div class="card">
        <div class="card-header">
          <h3 class="text-center">- News  -</h3>
          </div>
        </div>
<div class="row">
      <?php
        include_once "api/api_news.php";
foreach($newss->items as $p){
          echo '
          <div class="col-lg-3">
            <div class="card">
              <div class="card-group">
                <div class="card text-center" style="width: 300px;">
                    <div class="card-body">
                  <img class="card-img rounded-0 img-fluid w-100" src="'. $p->image->url . '">
                      <h5 class="card-title">' . $p->head . "
                       (" . substr($p->publishDateTime, 0, 4) . ")</h5>
                       <p><em> " . $p->body . " <br><a href=" . $p->link . ">Read More</a></em></p>

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