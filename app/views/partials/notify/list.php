<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("notify/add");
$can_edit = ACL::is_allowed("notify/edit");
$can_view = ACL::is_allowed("notify/view");
$can_delete = ACL::is_allowed("notify/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title text-info">NOTIFICATIONS</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 comp-grid">
                    <div class=""> <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title badge badge-secondary p-3 text-uppercase"> <i><b><?php echo USER_NAME ?></b></i> NOTIFICATIONS  <span
                            class="badge-md badge-pill badge-danger">6</span></h5>
                            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                <div class="vertical-timeline-item vertical-timeline-element">
                                    <div>
                                        <span class="vertical-timeline-element-icon bounce-in">
                                            <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                        </span>
                                        <div class="vertical-timeline-element-content bounce-in">
                                            <h4 class="timeline-title">All Hands
                                            Meeting</h4>
                                            <p>Lorem ipsum dolor sic amet, today at <a
                                            href="javascript:void(0);">12:00 PM</a>
                                        </p>
                                        <span class="vertical-timeline-element-date">10:30 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in">
                                        <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                    </span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <p>Another meeting today, at <b
                                            class="text-danger">12:00
                                        PM</b></p>
                                        <p>Yet another one, at <span
                                        class="text-success">15:00 PM</span>
                                    </p>
                                    <span class="vertical-timeline-element-date">12:25 PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in">
                                    <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                </span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Build the production
                                    release</h4>
                                    <p>Lorem ipsum dolor sit amit,consectetur
                                        eiusmdd
                                        tempor incididunt ut labore et dolore magna
                                        elit
                                    enim at minim veniam quis nostrud</p>
                                    <span class="vertical-timeline-element-date">15:00 PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in">
                                    <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                </span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title text-success">
                                        Something
                                    not important</h4>
                                    <p>Lorem ipsum dolor sit amit,consectetur elit
                                        enim
                                    at minim veniam quis nostrud</p>
                                    <span class="vertical-timeline-element-date">15:00 PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in">
                                    <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                </span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">All Hands
                                    Meeting</h4>
                                    <p>Lorem ipsum dolor sic amet, today at <a
                                    href="javascript:void(0);">12:00 PM</a>
                                </p>
                                <span class="vertical-timeline-element-date">10:30 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>Another meeting today, at <b
                                    class="text-danger">12:00
                                PM</b></p>
                                <p>Yet another one, at <span
                                class="text-success">15:00 PM</span>
                            </p>
                            <span class="vertical-timeline-element-date">12:25 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title">Build the production
                            release</h4>
                            <p>Lorem ipsum dolor sit amit,consectetur
                                eiusmdd
                                tempor incididunt ut labore et dolore magna
                                elit
                            enim at minim veniam quis nostrud</p>
                            <span class="vertical-timeline-element-date">15:00 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title text-success">
                                Something
                            not important</h4>
                            <p>Lorem ipsum dolor sit amit,consectetur elit
                                enim
                            at minim veniam quis nostrud</p>
                            <span class="vertical-timeline-element-date">15:00 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div><span
                        class="vertical-timeline-element-icon bounce-in"><i
                        class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title">All Hands
                            Meeting</h4>
                            <p>Lorem ipsum dolor sic amet, today at <a
                            href="javascript:void(0);">12:00 PM</a>
                        </p>
                        <span class="vertical-timeline-element-date">10:30 PM</span>
                    </div>
                </div>
            </div>
            <div class="vertical-timeline-item vertical-timeline-element">
                <div><span
                    class="vertical-timeline-element-icon bounce-in"><i
                    class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                    <div class="vertical-timeline-element-content bounce-in">
                        <p>Another meeting today, at <b
                            class="text-danger">12:00
                        PM</b></p>
                        <p>Yet another one, at <span
                        class="text-success">15:00 PM</span>
                        </p><span
                    class="vertical-timeline-element-date">12:25 PM</span>
                </div>
            </div>
        </div>
        <div class="vertical-timeline-item vertical-timeline-element">
            <div><span
                class="vertical-timeline-element-icon bounce-in"><i
                class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                <div class="vertical-timeline-element-content bounce-in">
                    <h4 class="timeline-title">Build the production
                    release</h4>
                    <p>Lorem ipsum dolor sit amit,consectetur
                        eiusmdd
                        tempor incididunt ut labore et dolore magna
                        elit
                        enim at minim veniam quis nostrud</p><span
                    class="vertical-timeline-element-date">15:00 PM</span>
                </div>
            </div>
        </div>
        <div class="vertical-timeline-item vertical-timeline-element">
            <div><span
                class="vertical-timeline-element-icon bounce-in"><i
                class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                <div class="vertical-timeline-element-content bounce-in">
                    <h4 class="timeline-title text-success">
                        Something
                    not important</h4>
                    <p>Lorem ipsum dolor sit amit,consectetur elit
                        enim
                        at minim veniam quis nostrud</p><span
                    class="vertical-timeline-element-date">15:00 PM</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
