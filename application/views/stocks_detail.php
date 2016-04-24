
<br />
<br />
<table style="width:100%">
    <tr>
        <th>CODE</th>
        <th>NAME</th>
        <th>CATEGORY</th>
        <th>VALUE</th>
    </tr>
    {stockDetail}
    <tr>
        <td>{code}</td>
        <td>{name}</td>
        <td>{category}</td>
        <td>{value}</td>
    </tr>
    {/stockDetail}
</table>
<br />
<br />
<table style="width:100%">
    <h4>Movements</h4>
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
        <td>{datetime}</td>
        <td>{code}</td>
        <td>{action}</td>
        <td>{amount}</td>
    </tr>
    {/stockMovements}
</table>
<br />
<br />
<table style="width:100%">
    <h4>Transactions</h4>
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