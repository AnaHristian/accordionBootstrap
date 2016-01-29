<div class="page" id="customBootstrap">
  	  <div class="content container">
      	<div class="border-customBootstrap">
          <div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           	  <h2 class="text-center"><span class="glyphicon glyphicon-align-justify"></span> Custom Bootsrap Accordion/Panel</h2>
              </div>
           	  <div class="col-lg-1 col-md-1 col-sm-1"></div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">	
            	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <span class="glyphicon glyphicon-menu-right hidden"></span>
                          <span class="glyphicon glyphicon-menu-down visible"></span> Chapter #1
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                       <?php include 'includes/accordionPartI.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <span class="glyphicon glyphicon-menu-right visible"></span>
                          <span class="glyphicon glyphicon-menu-down hidden"></span> Chapter #2
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body" style="opacity:0;filter:alpha(opacity=0);">
                        <?php include 'includes/accordionPartII.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <span class="glyphicon glyphicon-menu-right visible"></span>
                          <span class="glyphicon glyphicon-menu-down hidden"></span> Chapter #3
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body" style="opacity:0;filter:alpha(opacity=0);">
                        <?php include 'includes/accordionPartIII.php'; ?>
                      </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <span class="glyphicon glyphicon-menu-right visible"></span>
                          <span class="glyphicon glyphicon-menu-down hidden"></span> Chapter #4
                        </a>
                      </h4>
                    </div>           
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body" style="opacity:0;filter:alpha(opacity=0);">
                        <?php include 'includes/accordionPartIV.php'; ?>
                      </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          <span class="glyphicon glyphicon-menu-right visible"></span>
                          <span class="glyphicon glyphicon-menu-down hidden"></span> Chapter #5
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                      <div class="panel-body" style="opacity:0;filter:alpha(opacity=0);">
                        <?php include 'includes/accordionPartV.php'; ?>
                      </div>
                    </div>
                  </div>
                  
					<p class="text-right top2"><a class="btn btn-info top1" href="#top"><span class="glyphicon glyphicon-arrow-up"></span></a></p>
                </div><!--accordion-->
                
    </div>
    		
          </div><!--row-->  
    </div>      
  </div><!--content container-->    
</div><!---->
