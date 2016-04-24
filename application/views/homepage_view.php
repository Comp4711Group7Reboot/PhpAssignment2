<h2 style="text-align:center">Stocks</h2>

<table style="width:100%">
    <tr>
        <th>CODE</th>
        <th>NAME</th>
        <th>CATEGORY</th>
        <th>VALUE</th>
    </tr>
    {stocks}
    <tr>
        <td>{code}</td>
        <td><a href="stock/{code}">{name}</a></td>
        <td>{category}</td>
        <td>{value}</td>
    </tr>
    {/stocks}
</table>

<br />
<br />
<table style="width:100%">
    <tr>
        <th>Active Players: </th>
    </tr>
    {users}
    <tr>
        <td><a href="users/getUserInfo/{name}">{name}</a></td>
    </tr>
    {/users}
</table> 