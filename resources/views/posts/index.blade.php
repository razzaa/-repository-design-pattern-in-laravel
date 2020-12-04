<table border="1px">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    </thead>
    @foreach($data as $item)
        <tr>
            <td>{{$item['name']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['address']}}</td>
        </tr>
    @endforeach
</table>
