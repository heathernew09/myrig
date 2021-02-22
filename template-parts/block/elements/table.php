<?php 
    //vars
    $label_1=get_sub_field('label_1');
    $label_2=get_sub_field('label_2');
    $label_3=get_sub_field('label_3');
?>
<table class="responsive-card-table unstriped">
  <thead>
    <tr>
      <th><?php echo  $label_1;?></th>
      <th><?php echo  $label_2;?></th>
      <th><?php echo  $label_3;?></th>
    </tr>
  </thead>
  <tbody>
    <?php if( have_rows('table_rows') ): ?>
        <?php while( have_rows('table_rows') ): the_row(); 
            // vars
            $name = get_sub_field('name');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
            ?>
          <tr>
            <td data-label="<?php echo $label_1;?>"><p><?php echo $name;?></p></td>
            <td data-label="<?php echo $label_2;?>"><p><?php echo $description;?><p></td>
            <td data-label="<?php echo $label_3;?>"><a href="<?php echo $link['url'];?>" target="_blank">View</a></td>
          </tr>
        <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
</table>
<style>
.responsive-card-table {
  border-collapse: collapse;
}
.responsive-card-table.unstriped tbody {
  background-color: transparent;
}
.responsive-card-table th {
  background-color: #e6e6e6;
}
.responsive-card-table tr,
.responsive-card-table th,
.responsive-card-table td {
  border: 1px solid #0a0a0a;
}
@media screen and (max-width: 640px) {
  .responsive-card-table {
  }
  .responsive-card-table thead tr {
    position: absolute;
    top: -9999em;
    left: -9999em;
  }
  .responsive-card-table tr {
    border: 1px solid #0a0a0a;
    display: block;
  }
  .responsive-card-table tr + tr {
    margin-top: 1.5rem;
  }
  .responsive-card-table td {
    border: none;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    border-bottom: 1px solid #0a0a0a;
    padding-left: 50%;
    position: relative;
  }
  .responsive-card-table td:before {
    content: attr(data-label);
    display: inline-block;
    font-weight: bold;
    line-height: 1.5;
    margin-left: -100%;
    width: 100%;
    position: relative;
    z-index: 1;
  }
  .responsive-card-table td:after {
    content: '';
    position: absolute;
    background: #e6e6e6;
    width: 45%;
    height: 95%;
    left: 1px;
    top: 1px;
    z-index: 0;
  }
}
</style>