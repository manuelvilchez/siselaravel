<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row">
        <div class="col-sm-12">
            <h1>Usuarios</h1><br>
        </div>
        
        <div class="col-md-8">
            <div class="mt-2 table-responsive-md">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" wire:click='posts({{ $user->id }})'>Ver post</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
