<div class="row">
    <div class="col-md-2">Players: </div>
</div>
<div class="row">
    <div class="col-md-6">
        <img width ="100" height = "100" src ={image} />
    </div>
    <div class="col-md-6">
        {playerprofile}
        <dl>
            <dt>Name</dt>
            <dd>{Player}</dd>

            <dt>Cash</dt>
            <dd>{Cash}</dd>
        </dl>
        {/playerprofile}
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
            {transactions}
            <tr>
                <td>{DateTime}</td>
                <td>{Player}</td>
                <td>{Stock}</td>
                <td>{Trans}</td>
                <td>{Quantity}</td>
            </tr>
            {/transactions}
        </table>
    </div>
</div>

