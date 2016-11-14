<?php


/*
$model = new Model(Contact)
table = new HtmlTable(model, options);
table->dataProvider = new DataProvider();
table->render(op)?*/
$tableFields = array('firstname',
                     'lastname',
                     'email',
                     'telephone');
$columnNames = $tableFields;
//array_merge(array('select'), $columnNames)
$columnValues = $tableFields;
$rows = array(1, 2, 3, 4); 
/* put on config.php 
$engine->$checkboxVisibile
$engine->$actionsEnabled;
$engine->$getLabelFor('name');
*/
    
?>

<table style="width=100%">
    <tr>
    <?php if ($app->checkboxVisibile) : ?>
        <th>select</th>
    <?php endif ?>
        
    <?php foreach ($columnNames as $column) : ?>  
        <th><?php echo $column; ?></th>
    <?php endforeach ?>
    
    </tr>

    <?php foreach ($rows as $row) : ?>
    
        <tr>
        <?php if ($app->checkboxVisibile) : ?>
            <td><input type="checkbox" /></td>
        <?php endif ?>

        <?php foreach ($columnValues as $column) : ?>  
            <td><?php echo $column; ?></td>             
        <?php endforeach ?>

        </tr>
    
    <?php endforeach ?>

</table>

