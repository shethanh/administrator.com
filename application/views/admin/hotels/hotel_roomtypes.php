          <!-- start: List -->          
            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                    <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus-square"></i></button>
                    <button id="addToTable" class="btn btn-success">Lists <i class="fa fa-list"></i></button>
                    <button id="addToTable" class="btn btn-danger">Booking <i class="fa fa-calendar-o"></i></button>
                  <a href="#" class="fa fa-caret-down"></a>
                  <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title">Hotel Room Types</h2>
              </header>  
              <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?php echo base_url() ;?>public/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                  <thead>
                    <tr>
                      <th class="hidden-id">ID</th>
                      <th class="hidden-name">Room Types</th>
                      <th class="hidden-option">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="gradeX">
                      <td>Trident</td>
                      <td>Trident</td>
  
                       <td>
                        <a href="#" title="Public"><img src="<?php echo base_url()?>icons/tick.png" class="tooltip-info" data-rel="tooltip" title="Public">
                        </a>
                        <a href="#" title="Edit"><img src="<?php echo base_url()?>icons/edit.png" class="tooltip-info" data-rel="tooltip" title="Edit">
                        </a>
                        <a href="#" title="Public"><img src="<?php echo base_url()?>icons/delete.png" class="tooltip-info" data-rel="tooltip" title="Public">
                        </a>                   
                    </td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                       <td>Gecko</td>
                       <td>
                        <a href="#" title="Public"><img src="<?php echo base_url()?>icons/tick.png" class="tooltip-info" data-rel="tooltip" title="Public">
                        </a>
                        <a href="#" title="Edit"><img src="<?php echo base_url()?>icons/edit.png" class="tooltip-info" data-rel="tooltip" title="Edit">
                        </a>
                        <a href="#" title="Public"><img src="<?php echo base_url()?>icons/delete.png" class="tooltip-info" data-rel="tooltip" title="Public">
                        </a>                   
                    </td>
                    </tr>
                                     
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Gecko</td>
                      
                       <td>
                        <a href="#" title="Public"><img src="<?php echo base_url()?>icons/tick.png" class="tooltip-info" data-rel="tooltip" title="Public">
                        </a>
                        <a href="#" title="Edit"><img src="<?php echo base_url()?>icons/edit.png" class="tooltip-info" data-rel="tooltip" title="Edit">
                        </a>
                        <a href="#" title="Public"><img src="<?php echo base_url()?>icons/delete.png" class="tooltip-info" data-rel="tooltip" title="Public">
                        </a>                   
                    </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
        </section>