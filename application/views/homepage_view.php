<?php
/*
 * Home Page
 */
?>

<h2 style="text-align:center">Stocks</h2>
<table style="width:100%">
    <tr>
        <th>STOCK NAME</th>
        <th>CODE</th>
        <th>CATEGORY</th>
        <th>VALUE</th>
    </tr>
    {stocks}
    <tr>
        <td><a href="stock/{Name}">{Name}</a></td>
        <td>{Code}</td>
        <td>{Category}</td>
        <td>{Value}</td>
    </tr>
    {/stocks}

    <tr>
        <th>PLAYER</th>
        <th>CASH</th>
        <th>EQUITY</th>
    </tr>
    {players}
    <tr>
        <td><a href="player/{Player}">{Player}</a></td>
        <td>{Cash}</td>
        <td>{Equity}</td>
    </tr>
    {/players}
</table> 