<div class="table-responsive">
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col" class="ml-auto">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($project->users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>
                    <form action="{{route('removeuser', [$project->id, $user->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Remover</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>