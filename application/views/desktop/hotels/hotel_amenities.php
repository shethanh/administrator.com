          <!-- start: List -->          
            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                     <button id="addToTable" class="btn btn-primary" onclick="window.location = '<?php echo base_url()?>hotels/add';">Add <i class="fa fa fa-plus-square"></i></button>
                    <button id="addToTable" class="btn btn-success">Lists <i class="fa fa-list"></i></button>
                    <button id="addToTable" class="btn btn-danger">Booked <i class="fa fa-calendar-o"></i></button>
                  <a href="#" class="fa fa-caret-down"></a>
                  <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title">Hotel Amenities</h2>
              </header>  
              <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?php echo base_url() ;?>public/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                  <thead>
                    <tr>
                      <th class="hidden-id">ID</th>
                      <th class="hidden-name">Name</th>
                      <th class="hidden-address">Icon</th>
                      <th class="hidden-option">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="gradeX">
                      <td>Trident</td>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
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
                      <td>Camino 1.5</td>
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
                      <td>Mozilla 1.1</td>
                      
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