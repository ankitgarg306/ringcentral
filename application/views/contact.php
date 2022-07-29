<div class='container justify-content-center'>
        <h1>Contacts</h1>
      <table id="stdtable" class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
        <tr>
          <th>Sr.No</th>
           <th>Name</th>
           <th>Patient ID</th>
           <th>MRN No.</th>
           <th>Phone Number</th>
           <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php 
		      		//   var_dump($all_contacts);
		     foreach($all_contacts as $r=>$val) {
			echo "<tr>"; 
			      echo "<td><center>".$r."</center></td>"; 
			      echo "<td>".$val->name."</td>";
                  echo "<td>".$val->patient_id."</td>";
                  echo "<td>".$val->mrn_no."</td>";
                  echo "<td>".$val->phone_no."</td>";
                  echo "<td>".$val->status."</td>";
                  echo "</tr>";
             }
            ?>
        </tbody>
      </table>
      </div>
      <table id="contactTable" class="table table-bordered table-striped table-hover">
            </table>
      <script type="text/javascript">

 //////////// simple and ajax datatable view and search
 //$k = jQuery.noConflict();
$(document).ready(function() {

    $('#contactTable').DataTable({
      serverSide: true,
      processing: true,
      
        "ajax": {
            url : "<?php echo site_url("contactController/getDataTable") ?>",
            dataSrc: 'records'
          
        },
        "pagingType": "full_numbers",
   "paging": true,
  
       
         columns: [
        { data: 'id' },
        { data: 'name' },
        { data: 'patient_id'},
        { data: 'mrn_no' },
        { data: 'phone_no'},
        { data: 'status'},
        ]

    });
  
}

);
 
</script>
