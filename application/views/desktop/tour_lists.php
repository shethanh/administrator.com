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
                <h2 class="panel-title">Tour Lists</h2>
              </header>  
              <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?php echo base_url() ;?>public/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                  <thead>
                    <tr>
                      <th class="hidden-id">ID</th>
                      <th class="hidden-name">Name</th>
                      <th class="hidden-address">Address</th>
                      <th class="hidden-phone">Phone</th>
                      <th class="hidden-email">E-mail</th>
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
                      <td>Win 95+</td>
                      <td class="center hidden-phone">4</td>
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
                      <td>OSX.3+</td>
                      <td class="center hidden-phone">1.8</td>
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
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.1</td>
                      
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