<?php
/*
 * User profile page
 */
?>

<div class="row">
    <div class="col-md-2">Players: </div>
</div>
<div class="row">
    <div class="col-md-6">
        <img width ="100" height = "100" src ={image} />
    </div>

    <div>
        <h4>Transactions</h4>
        <table style="width:100%">
            <tr>
                <th>DATE</th>
                <th>PLAYER</th>
                <th>TRANSACTION</th>
                <th>STOCK</th>
                <th>QUANTITY</th>
            </tr>
            {userprofile}
            <tr>
                <td>{DateTime}</td>
                <td>{Player}</td>
                <td>{Stock}</td>
                <td>{Trans}</td>
                <td>{Quantity}</td>
            </tr>
            {/userprofile}
        </table>
        
        
        </br>
 
        <h3>Player Holdings</h3>
        <table style="width:100%">
            <tr>
                <th>STOCK</th>
                <th>TOTAL</th>
            </tr>
            {userstockholdings}
            <tr>
                <td>{stock}</td>
                <td>{quantity}</td>
            </tr>
            {/userstockholdings}
        </table>
        
    </div>
</div>

