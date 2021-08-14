<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("withdrawals/add");
$can_edit = ACL::is_allowed("withdrawals/edit");
$can_view = ACL::is_allowed("withdrawals/view");
$can_delete = ACL::is_allowed("withdrawals/delete");
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
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                </div>
            </div>
        </div>
    </div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4  class="text-success  font-weight-bold">WITHDRAWALS</h4 >
                </div>
            </div>
        </div>
    </div>
    <div  class="mt-2">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><div class="no-gutters row">
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class=" ">
                                    <div class="opacity-10 bg-warning"></div>
                                    <i><img src="<?php echo SITE_ADDR.'assets/images/earni.png' ;?>"/></i></div>
                                    <div class="widget-chart-content">
                                        <div class="widget-subheading">BALANCE</div>
                                        <div class="widget-numbers mt-0 text-dark">
                                            <small>Ksh</small>
                                            1450
                                        </div>
                                        <div class="widget-description opacity-8 text-focus">
                                            <div class="d-inline text-info pr-1">
                                                <i class="fa fa-angle-down"></i>
                                                <span class="pl-1">3%</span>
                                            </div>
                                            Daily earnings
                                        </div>
                                    </div>
                                </div>
                                <div class="divider m-0 d-md-none d-sm-block"></div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-4">
                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                    <div class=" rounded-circle">
                                        <div class=" opacity-9 bg-danger"></div>
                                        <i><img src="<?php echo SITE_ADDR.'assets/images/withdrawal.png' ;?>"/></i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">WITHDRAWALS</div>
                                            <div class="widget-numbers mt-0">
                                                <small>Ksh</small>
                                                1450
                                            </div>
                                            <div class="widget-description opacity-8 text-focus">
                                                Per balance
                                                <span class="text-success pl-1">
                                                    <i class="fa fa-angle-down"></i>
                                                    <span class="pl-1">14%</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class=" rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                            <i><img src="<?php echo SITE_ADDR.'assets/images/transaction.png' ;?>"/></i></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading">TRANSACTION FEE</div>
                                                <div class="widget-numbers mt-0 text-dark">
                                                    <small>Ksh</small>
                                                    1450
                                                </div>
                                                <div class="widget-description text-focus">
                                                    For each withdrawal
                                                    <span class="text-warning pl-1">
                                                        <i class="fa fa-angle-down"></i>
                                                        <span class="pl-1">10%</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center d-block p-3 card-footer">
                                    <button class="btn-pill btn-wide fsize-1 btn btn-success">
                                        <span class="mr-2 opacity-7">
                                            <i ><img src="<?php echo SITE_ADDR.'assets/images/report.png' ;?>" style="height:40px;width:40px;"/></i>
                                            </span>
                                            <span class="mr-1 font-weight-bold">WITHDRAW</span>
                                        </button>
                                    </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  class="mt-4">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-10 comp-grid">
                                    <?php $this :: display_page_errors(); ?>
                                    <div  class="card bg-light animated fadeIn page-content">
                                        <div id="withdrawals-list-records">
                                            <div id="page-report-body" class="table-responsive">
                                                <table class="table table-hover table-striped table-sm text-left">
                                                    <thead class="table-header ">
                                                        <tr>
                                                            <?php if($can_delete){ ?>
                                                            <th class="td-checkbox">
                                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                                    <input class="toggle-check-all custom-control-input" type="checkbox" />
                                                                    <span class="custom-control-label"></span>
                                                                </label>
                                                            </th>
                                                            <?php } ?>
                                                            <th class="td-sno">#</th>
                                                            <th  class="td-payment_mode"> PAYMENT MODE</th>
                                                            <th  class="td-amount"> AMOUNT</th>
                                                            <th  class="td-track_no"> TRACK NUMBER</th>
                                                            <th  class="td-date"> DATE</th>
                                                            <th class="td-btn"></th>
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    if(!empty($records)){
                                                    ?>
                                                    <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                                        <!--record-->
                                                        <?php
                                                        $counter = 0;
                                                        foreach($records as $data){
                                                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                                        $counter++;
                                                        ?>
                                                        <tr>
                                                            <?php if($can_delete){ ?>
                                                            <th class=" td-checkbox">
                                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                                    <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                                </th>
                                                                <?php } ?>
                                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                                <td class="td-payment_mode">
                                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['payment_mode']; ?>" 
                                                                        data-pk="<?php echo $data['id'] ?>" 
                                                                        data-url="<?php print_link("withdrawals/editfield/" . urlencode($data['id'])); ?>" 
                                                                        data-name="payment_mode" 
                                                                        data-title="Enter Payment Mode" 
                                                                        data-placement="left" 
                                                                        data-toggle="click" 
                                                                        data-type="text" 
                                                                        data-mode="popover" 
                                                                        data-showbuttons="left" 
                                                                        class="is-editable" <?php } ?>>
                                                                        <?php echo $data['payment_mode']; ?> 
                                                                    </span>
                                                                </td>
                                                                <td class="td-amount">
                                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['amount']; ?>" 
                                                                        data-pk="<?php echo $data['id'] ?>" 
                                                                        data-url="<?php print_link("withdrawals/editfield/" . urlencode($data['id'])); ?>" 
                                                                        data-name="amount" 
                                                                        data-title="Enter Amount" 
                                                                        data-placement="left" 
                                                                        data-toggle="click" 
                                                                        data-type="text" 
                                                                        data-mode="popover" 
                                                                        data-showbuttons="left" 
                                                                        class="is-editable" <?php } ?>>
                                                                        <?php echo $data['amount']; ?> 
                                                                    </span>
                                                                </td>
                                                                <td class="td-track_no">
                                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['track_no']; ?>" 
                                                                        data-pk="<?php echo $data['id'] ?>" 
                                                                        data-url="<?php print_link("withdrawals/editfield/" . urlencode($data['id'])); ?>" 
                                                                        data-name="track_no" 
                                                                        data-title="Enter Track No" 
                                                                        data-placement="left" 
                                                                        data-toggle="click" 
                                                                        data-type="text" 
                                                                        data-mode="popover" 
                                                                        data-showbuttons="left" 
                                                                        class="is-editable" <?php } ?>>
                                                                        <?php echo $data['track_no']; ?> 
                                                                    </span>
                                                                </td>
                                                                <td class="td-date">
                                                                    <span <?php if($can_edit){ ?> data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                                        data-value="<?php echo $data['date']; ?>" 
                                                                        data-pk="<?php echo $data['id'] ?>" 
                                                                        data-url="<?php print_link("withdrawals/editfield/" . urlencode($data['id'])); ?>" 
                                                                        data-name="date" 
                                                                        data-title="Enter Date" 
                                                                        data-placement="left" 
                                                                        data-toggle="click" 
                                                                        data-type="flatdatetimepicker" 
                                                                        data-mode="popover" 
                                                                        data-showbuttons="left" 
                                                                        class="is-editable" <?php } ?>>
                                                                        <?php echo $data['date']; ?> 
                                                                    </span>
                                                                </td>
                                                                <th class="td-btn">
                                                                    <?php if($can_view){ ?>
                                                                    <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("withdrawals/view/$rec_id"); ?>">
                                                                        <i class="fa fa-eye"></i> View
                                                                    </a>
                                                                    <?php } ?>
                                                                    <?php if($can_edit){ ?>
                                                                    <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("withdrawals/edit/$rec_id"); ?>">
                                                                        <i class="fa fa-edit"></i> Edit
                                                                    </a>
                                                                    <?php } ?>
                                                                    <?php if($can_delete){ ?>
                                                                    <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("withdrawals/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                                        <i class="fa fa-times"></i>
                                                                        Delete
                                                                    </a>
                                                                    <?php } ?>
                                                                </th>
                                                            </tr>
                                                            <?php 
                                                            }
                                                            ?>
                                                            <!--endrecord-->
                                                        </tbody>
                                                        <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                                        <?php
                                                        }
                                                        ?>
                                                    </table>
                                                    <?php 
                                                    if(empty($records)){
                                                    ?>
                                                    <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                                        <i class="fa fa-ban"></i> No record found
                                                    </h4>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                                if( $show_footer && !empty($records)){
                                                ?>
                                                <div class=" border-top mt-2">
                                                    <div class="row justify-content-center">    
                                                        <div class="col-md-auto justify-content-center">    
                                                            <div class="p-3 d-flex justify-content-between">    
                                                                <?php if($can_delete){ ?>
                                                                <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("withdrawals/delete/{sel_ids}/?csrf_token=$csrf_token&redirect=$current_page"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                                                    <i class="fa fa-times"></i> Delete Selected
                                                                </button>
                                                                <?php } ?>
                                                                <div class="dropup export-btn-holder mx-1">
                                                                    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fa fa-save"></i> Export
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                                                        <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                                                            <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                                                            </a>
                                                                            <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                                                            <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                                                                <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                                                                </a>
                                                                                <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                                                                <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                                                    <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                                                    </a>
                                                                                    <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                                                    <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                                                        <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                                                        </a>
                                                                                        <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                                                        <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                                                            <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">   
                                                                                <?php
                                                                                if($show_pagination == true){
                                                                                $pager = new Pagination($total_records, $record_count);
                                                                                $pager->route = $this->route;
                                                                                $pager->show_page_count = true;
                                                                                $pager->show_record_count = true;
                                                                                $pager->show_page_limit =true;
                                                                                $pager->limit_count = $this->limit_count;
                                                                                $pager->show_page_number_list = true;
                                                                                $pager->pager_link_range=5;
                                                                                $pager->render();
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
