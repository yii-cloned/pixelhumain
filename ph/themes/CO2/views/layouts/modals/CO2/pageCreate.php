
<div class="portfolio-modal modal fade" id="dash-create-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content padding-top-15">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/CO2r.png" height="50" class="inline margin-top-25 margin-bottom-5"><br>
                    
                    <h3 class="letter-red no-margin hidden-xs">
                        <small class="text-dark"><?php echo Yii::t("docs", "A <span class='letter-red'>citizen</span> social network, serving <span class=letter-red'>commons</span>") ?></small>
                    </h3><br>
                    <h3 class="letter-red no-margin hidden-xs">
                        <i class="fa fa-plus-circle"></i> <?php echo Yii::t("common","Create a page") ?><br>
                    </h3>
                </div>               
            </div>
            <div class="row links-create-element">
                <div class="col-lg-12">
                    <div class="col-md-12 margin-top-15 text-dark">
                       <label class="label label-lg bg-green-k padding-5"><i class="fa fa-check"></i> <?php echo Yii::t("docs","Communicate the news") ?></label> 
                       <label class="label label-lg bg-green-k padding-5"><i class="fa fa-check"></i> <?php echo Yii::t("docs","Share events") ?></label> 
                       <label class="label label-lg bg-green-k padding-5"><i class="fa fa-check"></i> <?php echo Yii::t("docs","Collective space") ?></label>  
                       <label class="label label-lg bg-green-k padding-5"><i class="fa fa-check"></i> <?php echo Yii::t("docs","Private messaging") ?></label>  
                       <label class="label label-lg bg-green-k padding-5"><i class="fa fa-check"></i> <?php echo Yii::t("common","Notifications") ?></label> 
                       <hr>
                    </div>
                    
                    <div id="" class="modal-body">
                        <div class="col-md-12 hidden">
                            
                        </div>
                         <h4 class="modal-title text-center hidden">
                            <?php echo Yii::t("docs","Choose which kind of page you want to create") ?>
                            <hr>
                        </h4>
                        <a href="javascript:" class="btn-create-elem col-lg-6 col-sm-6 col-xs-6" data-ktype="NGO" data-type="organization"
                            date-target="#modalMainMenu" data-dismiss="modal">
                            <div class="modal-body text-center">
                                <h2 class="text-green"><i class="fa fa-group padding-bottom-10"></i><br>
                                    <span class="font-light"> <?php echo Yii::t("category","NGO") ?></span>
                                </h2>
                                
                                <div class="col-md-12 no-padding text-center hidden-xs">
                                    <h5><?php echo Yii::t("docs","Strengthen links of associations network") ?>
                                        <small class="hidden-xs" style="text-transform: none;"><br>
                                            <?php echo Yii::t("docs","Civil society organizations is based on cooperation and solidarity.<br>More than ever, NGOs should be linked,<br>in order to work better and smarter.") ?>
                                        </small>
                                    </h5>
                                    <button class="btn btn-default text-green margin-bottom-15"><i class="fa fa-plus-circle"></i> <?php echo Yii::t("common","Create a page") ?></button>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:" class="btn-create-elem col-lg-6 col-sm-6 col-xs-6" data-ktype="LocalBusiness" data-type="organization"
                            date-target="#modalMainMenu" data-dismiss="modal">
                            <div class="modal-body text-center">
                                <h2 class="text-azure"><i class="fa fa-industry padding-bottom-10"></i><br>
                                    <span class="font-light"> <?php echo Yii::t("category","Local Business") ?></span>
                                </h2>
                                
                                <div class="col-md-12 no-padding text-center hidden-xs">
                                    <h5><?php echo Yii::t("docs","Boost the world of business") ?>
                                        <small class="hidden-xs" style="text-transform: none;"><br>
                                            <?php echo Yii::t("docs","Keep connection with your contacts, your customers, your employees, your providers...<br>The network will give you a visibility<br>fo the community living around you") ?>
                                        </small>
                                    </h5>
                                    <button class="btn btn-default text-azure margin-bottom-15"><i class="fa fa-plus-circle"></i> <?php echo Yii::t("common","Create a page") ?></button>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:" class="btn-create-elem col-lg-6 col-sm-6 col-xs-6" data-ktype="Group" data-type="organization"
                            date-target="#modalMainMenu" data-dismiss="modal">
                            <div class="modal-body text-center">
                                <h2 class="text-turq"><i class="fa fa-circle-o padding-bottom-10"></i><br>
                                    <span class="font-light"> <?php echo Yii::t("category","Group") ?></span>
                                </h2>
                                
                                <div class="col-md-12 no-padding text-center hidden-xs">
                                    <h5><?php echo Yii::t("docs","Highlight human relations") ?>
                                        <small class="hidden-xs" style="text-transform: none;"><br>
                                            <?php echo Yii::t("docs","Life is full of meetings, frienships, and links that bind us together<br>through our activities, our interests, our hobbies.<br>Live them is great, share them is greater!") ?>
                                        </small>
                                    </h5>
                                    <button class="btn btn-default text-turq margin-bottom-15"><i class="fa fa-plus-circle"></i> <?php echo Yii::t("common","Create a page") ?></button>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:" class="btn-create-elem col-lg-6 col-sm-6 col-xs-6" 
                            data-ktype="event" data-type="event"
                            date-target="#modalMainMenu" data-dismiss="modal">
                            <div class="modal-body text-center">
                                <h2 class="text-orange"><i class="fa fa-calendar padding-bottom-10"></i><br>
                                    <span class="font-light"> <?php echo Yii::t("common","Event") ?></span>
                                </h2>
                                
                                <div class="col-md-12 no-padding text-center hidden-xs">
                                    <h5><?php echo Yii::t("docs","A day, a moment, a share, a discovery") ?>
                                        <small class="hidden-xs" style="text-transform: none;"><br>
                                            <?php echo Yii::t("docs","Share your events<br>And communicate them massively!") ?>
                                        </small>
                                    </h5>
                                    <button class="btn btn-default text-orange margin-bottom-15"><i class="fa fa-plus-circle"></i> <?php echo Yii::t("common","Create a page") ?></button>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:" class="btn-create-elem col-lg-6 col-sm-6 col-xs-6" 
                            data-ktype="project" data-type="project"
                            date-target="#modalMainMenu" data-dismiss="modal">
                            <div class="modal-body text-center">
                                <h2 class="text-purple"><i class="fa fa-lightbulb-o padding-bottom-10"></i><br>
                                    <span class="font-light"> <?php echo Yii::t("common","Project") ?></span>
                                </h2>
                                
                                <div class="col-md-12 no-padding text-center hidden-xs">
                                    <h5><?php echo Yii::t("docs","It's the little things<br>that one day change the world") ?>
                                        <small class="hidden-xs" style="text-transform: none;"><br>
                                            <?php echo Yii::t("docs","Share your wishes, your ideas, your dreams<br>This is the way to make them grow !") ?>
                                        </small>
                                    </h5>
                                    <button class="btn btn-default text-purple margin-bottom-15"><i class="fa fa-plus-circle"></i> <?php echo Yii::t("common","Create a page") ?></button>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:" class="btn-create-elem col-lg-6 col-sm-6 col-xs-6" data-ktype="GovernmentOrganization" data-type="organization"
                            date-target="#modalMainMenu" data-dismiss="modal">
                            <div class="modal-body text-center">
                                <h2 class="text-red"><i class="fa fa-university padding-bottom-10"></i><br>
                                    <span class="font-light"> <?php echo Yii::t("category","Government Organization") ?></span>
                                </h2>
                                
                                <div class="col-md-12 no-padding text-center hidden-xs">
                                    <h5><?php echo Yii::t("docs","The link between the government and people") ?>
                                        <small class="hidden-xs" style="text-transform: none;"><br>
                                            <?php echo Yii::t("docs","Public services are the pillars of our democracy.<br>It is important to map them and make them readily available<br>at the local level as well as national") ?>
                                        </small>
                                    </h5>
                                    <button class="btn btn-default text-red margin-bottom-15"><i class="fa fa-plus-circle"></i> <?php echo Yii::t("common","Create a page") ?></button>
                                </div>
                            </div>
                        </a>
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <hr>
                            <a href="javascript:" style="font-size: 13px;" type="button" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo Yii::t("common","Back") ?></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>