<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:60px;">
    <div class="row">
        <div class="col-lg-12">
            <h1>Table/form definition for content type "<?php echo $content_type->name;?>"</h1>
            <h2>Table name: "<?php echo $content_type->table_name;?>"</h2>
            <?php
            echo anchor('admin/content-types/add-field/'.$content_type->id,'Add table field', 'class="btn btn-primary"');
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Table field</th>';
            echo '<th>Type</th>';
            echo '<th>Constraint</th>';
            echo '<th>Attribute</th>';
            echo '<th>Default</th>';
            echo '<th>Null</th>';
            echo '<th>Index</th>';
            echo '<th>Input order</th>';
            echo '<th>Input type</th>';
            echo '<th>Deletable</th>';
            echo '<td>Operations</td>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($table_fields))
            {
                foreach($table_fields as $field)
                {
                    echo '<tr>';
                    echo '<td>'.$field->table_field.'</td>';
                    echo '<td>'.$field->tf_type.'</td>';
                    echo '<td>'.(($field->tf_constraint == 0) ? 'No constraint' : $field->tf_constraint).'</td>';
                    echo '<td>'.$field->tf_attributes.'</td>';
                    echo '<td>'.$field->tf_default.'</td>';
                    echo '<td>'.$field->tf_null.'</td>';
                    echo '<td>'.$field->tf_index.'</td>';
                    echo '<td>'.$field->input_order.'</td>';
                    echo '<td>'.$field->input_type.'</td>';
                    echo '<td>'.$field->deletable.'</td>';
                    echo '<td>';
                    //echo anchor('admin/content-types/edit/'.$type->id,'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>');
                    //echo ' '.anchor('admin/content-types/table-definition/'.$type->id, '<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>');
                    //echo ' '.anchor('admin/content-types/delete/'.$type->id,'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>','onclick="return confirm(\'Are you sure you want to delete?\')"');
                    echo '</td>';
                    echo '</tr>';
                }
            }
            echo '</tbody>';
            echo '</table>';
            ?>
        </div>
    </div>
</div>