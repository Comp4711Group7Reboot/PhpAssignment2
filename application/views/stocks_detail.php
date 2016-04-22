<?php
/*
 * This is the stock Detail page
 */
?>

{stockDetail}
    Code: {Code}
    Name: {Name}
    Category: {Category}
    Value: {Value}
{/stockDetail}

<h4>Movements</h4>

<table style="width:100%">
    <tr>
        <th>DATE</th>
        <th>ACTION</th>
        <th>AMOUNT</th>
    </tr>
    {stockMovements}
    <tr>
        <td>{Datetime}</td>
        <td>{Action}</td>
        <td>{Amount}</td>
    </tr>
    {/stockMovements}
</table>