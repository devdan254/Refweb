<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("netflix/add");
$can_edit = ACL::is_allowed("netflix/edit");
$can_view = ACL::is_allowed("netflix/view");
$can_delete = ACL::is_allowed("netflix/delete");
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
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                </div>
            </div>
        </div>
    </div>
    <div  class="p-3 mb-3">
        <div class="">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4  class="text-danger font-weight-bold font-italic neflix">NETFLIX</h4 >
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><div class="mt-3 row">
                        <div class="col-sm-12 col-md-4">
                            <div class="card-hover-shadow-2x mb-sm-3 mb-md-0 widget-chart widget-chart2 bg-premium-dark text-left card">
                                <div class="widget-chart-content text-white">
                                    <div class="widget-chart-flex">
                                        <div class="widget-title text-uppercase">Purchases</div>
                                        <div class="widget-subtitle text-success">
                                            Monthly 
                                        </div>
                                    </div>
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers text-success">
                                            <small>Ksh</small>
                                            600
                                            <small class="opacity-8 pl-2">
                                                <i class="fa fa-angle-up"></i>
                                            </small>
                                        </div>
                                        <div class="widget-description ml-auto text-success">
                                            <span class="pr-1">600</span>
                                            <i class="fa fa-angle-up"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card-hover-shadow-2x widget-chart widget-chart2 bg-premium-dark text-left card">
                                <div class="widget-chart-content text-white">
                                    <div class="widget-chart-flex">
                                        <div class="widget-title text-uppercase">Total Licenses</div>
                                        <div class="widget-subtitle text-danger">
                                            Monthly
                                        </div>
                                    </div>
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers text-danger">
                                            8
                                            <small></small>
                                            <small class="opacity-8 pl-2">
                                                <i class="fa fa-angle-up"></i>
                                            </small>
                                        </div>
                                        <div class="widget-description ml-auto text-danger">
                                            <span class="pr-1">1</span>
                                            <i class="fa fa-angle-up"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card-hover-shadow-2x widget-chart widget-chart2 bg-premium-dark text-left card">
                                <div class="widget-chart-content text-white">
                                    <div class="widget-chart-flex">
                                        <div class="widget-title text-uppercase"><?php echo date("F"); ?> PURCHASE</div>
                                        <div class="widget-subtitle text-warning">
                                            Licenses
                                        </div>
                                    </div>
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers text-warning">
                                            <small>Ksh</small>
                                            600
                                            <small class="opacity-8 pl-2">
                                                <i class="fa fa-angle-up"></i>
                                            </small>
                                        </div>
                                        <div class="widget-description ml-auto text-warning">
                                            <span class="pr-1"> 1 </span>
                                            <i class="fa fa-angle-up"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
    <div  class="mt-3">
        <div class="container">
            <div class="row justify-content-center mx-auto">
                <div class="col-md-12 comp-grid">
                    <div class=""><div class="col-md-4 mx-auto mt-5">
                        <div class="dropdown-menu-header mx-auto">
                            <div class="dropdown-menu-header-inner bg-mean-fruit">
                                <div class="menu-header-image"
                                style="background-image: url('<?php echo SITE_ADDR."assets/images/net.png" ;?>');border-radius: 50px"></div>
                                <div class="menu-header-content ">
                                    <div><h5 class="menu-header-title">
                                    </h5>
                                    <div class=" row menu-header-subtitle mt-1 ">
                                        <div class="mx-auto ">
                                            <div class="p-1 col-sm-12 col-md-12 col-lg-12">
                                                <button class=" btn-shadow-lg btn btn-dark btn-wide btn-lg">
                                                    <span class="mr-2 opacity-7">
                                                        <i><img src='<?php echo SITE_ADDR."assets/images/checklist.png"; ?>'/></i>
                                                        </span>
                                                        <span class="mr-1 "><b>PURCHASE</b> <i class="fa fa-arrow-up text-info"></i> </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
    <div  class="mt-4">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light animated bounce page-content">
                        <div id="netflix-list-records">
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
                                            <th  class="td-account_name"> LICENCE </th>
                                            <th  class="td-amount"> AMOUNT</th>
                                            <th  class="td-track_account_no"> TRACK NUMBER</th>
                                            <th  class="td-status_paid"> PAYMENT STATUS</th>
                                            <th  class="td-status_issue"> LICENCE STATUS</th>
                                            <th  class="td-date"> DATE</th>
                                            <th  class="td-reset_date"> EXPIRY DATE</th>
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
                                                <td class="td-account_name">
                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['account_name']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("netflix/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="account_name" 
                                                        data-title="Enter Account Name" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['account_name']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-amount">
                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['amount']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("netflix/editfield/" . urlencode($data['id'])); ?>" 
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
                                                <td class="td-track_account_no">
                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['track_account_no']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("netflix/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="track_account_no" 
                                                        data-title="Enter Track Account No" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['track_account_no']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-status_paid">
                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['status_paid']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("netflix/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="status_paid" 
                                                        data-title="Enter Status Paid" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['status_paid']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-status_issue">
                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['status_issue']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("netflix/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="status_issue" 
                                                        data-title="Enter Status Issue" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['status_issue']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-date">
                                                    <span <?php if($can_edit){ ?> data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                        data-value="<?php echo $data['date']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("netflix/editfield/" . urlencode($data['id'])); ?>" 
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
                                                <td class="td-reset_date">
                                                    <span <?php if($can_edit){ ?> data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                        data-value="<?php echo $data['reset_date']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("netflix/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="reset_date" 
                                                        data-title="Enter Reset Date" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="flatdatetimepicker" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['reset_date']; ?> 
                                                    </span>
                                                </td>
                                                <th class="td-btn">
                                                    <?php if($can_view){ ?>
                                                    <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("netflix/view/$rec_id"); ?>">
                                                        <i class="fa fa-eye"></i> View
                                                    </a>
                                                    <?php } ?>
                                                    <?php if($can_edit){ ?>
                                                    <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("netflix/edit/$rec_id"); ?>">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                    <?php } ?>
                                                    <?php if($can_delete){ ?>
                                                    <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("netflix/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
                                                <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("netflix/delete/{sel_ids}/?csrf_token=$csrf_token&redirect=$current_page"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
