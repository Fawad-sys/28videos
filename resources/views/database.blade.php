<h1>DataBase</h1>

{{ $data->links() }}

<table>
@foreach($data as $item)
<tr>
<td>{{ $item->name }}</td>
<td>{{ $item->email }}</td>
</tr>
@endforeach
</table>