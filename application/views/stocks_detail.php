

<table style="width:100%">
    <tr>
        <th>CODE</th>
        <th>NAME</th>
        <th>CATEGORY</th>
        <th>VALUE</th>
    </tr>
    {stockDetail}
    <tr>
        <td>Code: {code}</td>
        <td>Name: {name}</td>
        <td>Category: {category}</td>
        <td>Value: {value}</td>
    </tr>
    {/stockDetail}
</table>


<h4>Transactions</h4>

<table style="width:100%">
    <tr>
        <th>SEQ</th>
        <th>DATE</th>
        <th>Agent</th>
        <th>Player</th>
        <th>Stock</th>
        <th>Transaction</th>
        <th>Quantity</th>
    </tr>
    {stocktransactions}
    <tr>
        <td>{seq}</td>
        <td>{datetime}</td>
        <td>{agent}</td>
        <td>{player}</td>
        <td>{stock}</td>
        <td>{trans}</td>>
        <td>{quantity}</td>
    </tr>
    {/stocktransactions}
</table>

<h4>Movements</h4>

<table style="width:100%">
    <tr>
        <th>SEQ</th>
        <th>DATE</th>
        <th>CODE</th>
        <th>ACTION</th>
        <th>AMOUNT</th>
    </tr>
    {stockMovements}
    <tr>
        <td>{seq}</td>
        <td>{Datetime}</td>
        <td>{code}</td>
        <td>{Action}</td>
        <td>{Amount}</td>
    </tr>
    {/stockMovements}
</table>