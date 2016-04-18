

<table style="width:100%">
    <tr>
        <th>CODE</th>
        <th>NAME</th>
        <th>CATEGORY</th>
        <th>VALUE</th>
    </tr>
    {stockDetail}
    <tr>
        <li>Code: {Code}</li>
        <li>Name: {Name}</li>
        <li>Category: {Category}</li>
        <li>Value: {Value}</li>
    </tr>
    {/stockDetail}
</table>


<h4>Transactions</h4>

<table style="width:100%">
    <tr>
        <th>DATE</th>
        <th>PLAYER</th>
        <th>TRANSACTION</th>
        <th>QUANTITY</th>
    </tr>
    {stocktransactions}
    <tr>
        <td>{datetime}</td>
        <td>{player}</td>
        <td>{trans}</td>
        <td>{quantity}</td>
    </tr>
    {/stocktransactions}
</table>

<h4>Movements</h4>

<table style="width:100%">
    <tr>
        <th>SEQ</th>
        <th>DATE</th>
        <th>ACTION</th>
        <th>AMOUNT</th>
    </tr>
    {stockMovements}
    <tr>
        <td>{seq}</td>
        <td>{Datetime}</td>
        <td>{Action}</td>
        <td>{Amount}</td>
    </tr>
    {/stockMovements}
</table>