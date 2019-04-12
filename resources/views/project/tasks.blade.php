@isset($project->tasks)
<div class="table-responsive">
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th scope="col">Tarefa</th>
                <th scope="col">Status</th>
                <th scope="col" class="ml-auto">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($project->tasks as $task)
                <tr>
                    <td>{{$task->name}}</td>
                    <td>
                    @if($task->completed == 0)
                        Pendente
                    @else
                        Concluída
                    @endif
                    </td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-sm btn-dark">Editar</a>
                            <button class="btn btn-sm btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endisset