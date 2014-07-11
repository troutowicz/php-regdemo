<div class="table-responsive row">
  <table class="table table-curved">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Country</th>
        <th>Date</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
      if (count($registrants) > 0) {
        foreach ($registrants as $registrant) { ?>
      <tr>
        <td><?php echo isset($registrant->fname) ? $registrant->fname : '' ?></td>
        <td><?php echo isset($registrant->lname) ? $registrant->lname : '' ?></td>
        <td><?php echo isset($registrant->addr1) ? $registrant->addr1 : '' ?></td>
        <td><?php echo isset($registrant->addr2) ? $registrant->addr2 : '' ?></td>
        <td><?php echo isset($registrant->city) ? $registrant->city : '' ?></td>
        <td><?php echo isset($registrant->state) ? $registrant->state : '' ?></td>
        <td><?php echo isset($registrant->zip) ? $registrant->zip : '' ?></td>
        <td><?php echo isset($registrant->country) ? $registrant->country : '' ?></td>
        <td><?php echo isset($registrant->time) ? $registrant->time : '' ?></td>
        <td><a href="<?php echo URL . 'registrant/deleteregistrant/' . $registrant->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
      </tr>
    <?php
        }
      } else { ?>
      <tr>
        <td class="text-center" colspan=10>No registrants :(</td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
