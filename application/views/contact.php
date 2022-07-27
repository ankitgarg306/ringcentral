<!DOCTYPE html>
  <html><head>
        <title>Contacts</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>

    </head>
    <body>
      <div class='container justify-content-center'>
        <h1>Contacts</h1>
      <table id="stdtable" class="table table-bordered table-striped table-hover">
        <thead>
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
     
    </body>
  </html>