<?php
  include "conf/info.php";
  $title="Schedule";
  include_once "header.php";
?>
<style>
<?php include 'css/style.css'; ?>
</style>
<div class="card">
        <div class="card-header">
          <h3 class="text-center">- Schedule  -</h3>
          </div>
        </div>
<div class="row">
      <?php
        include_once "api/api_schedule.php";
foreach($schedule as $p){
          echo '
          <div class="col-lg-3-mt-auto">
            <div class="card">
              <div class="card-group">
                <div class="card text-center" style="width: 300px;">
                    <div class="card-body">
                    <img class="card-img rounded-0 img-fluid w-100" src="'. $p->show->image->original . '">
                      <h5>' . $p->show->name . "</h5>
                     
                     <p> Season : " . $p->season . " </p>
                     <p> Episode : " . $p->number . " </p>
                     <p> Airdate : " . $p->airdate . " </p>
                     <p> Airtime : " . $p->airtime . " </p>
                     <p> Runtime : " . $p->runtime . " Minutes "."</p>
                     <p> Type : " . $p->show->type . " </p>
                     <p> Language : " . $p->show->language . " </p>
                     
                     <p><a href=" . $p->show->officialSite . ">Watch</a></p>
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