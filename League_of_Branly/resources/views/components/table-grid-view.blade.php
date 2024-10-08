<div id="viewContainer">
    <div id="listView">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    @foreach($columns as $column)
                    @if($column != 'name')
                    <th>{{ $column }}</th>
                    @endif
                    @endforeach
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        <img src="{{ asset('img/champions/' . strtolower(str_replace(' ', '_', $item->name)) . '.png') }}"
                            alt="{{ $item->name }}"
                            style="width: 50px; height: 50px; object-fit: cover;"
                            onerror="this.src='{{ asset('img/placeholder.png') }}'">
                    </td>
                    @foreach($columns as $key => $column)
                    @if($key != 'name')
                    <td>{{ $item->$key }}</td>
                    @endif
                    @endforeach
                    <td>
                        <a href="{{ route($routePrefix . '.edit', $item) }}" class="btn btn-sm btn-secondary">Edit</a>
                        <form action="{{ route($routePrefix . '.destroy', $item) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="gridView" class="row" style="display:none;">
        @foreach($items as $item)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/champions/' . strtolower(str_replace(' ', '_', $item->name)) . '.png') }}"
                    class="card-img-top"
                    alt="{{ $item->name }}"
                    style="height: 200px; object-fit: cover;"
                    onerror="this.src='{{ asset('img/placeholder.png') }}'">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    @foreach($columns as $key => $column)
                    @if($key != 'name')
                    <p class="card-text"><strong>{{ $column }}:</strong> {{ $item->$key }}</p>
                    @endif
                    @endforeach
                    <a href="{{ route($routePrefix . '.edit', $item) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route($routePrefix . '.destroy', $item) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tableViewBtn = document.getElementById('tableViewBtn');
        const gridViewBtn = document.getElementById('gridViewBtn');
        const listView = document.getElementById('listView');
        const gridView = document.getElementById('gridView');

        tableViewBtn.addEventListener('click', function() {
            listView.style.display = 'block';
            gridView.style.display = 'none';
        });

        gridViewBtn.addEventListener('click', function() {
            listView.style.display = 'none';
            gridView.style.display = 'flex';
        });
    });
</script>