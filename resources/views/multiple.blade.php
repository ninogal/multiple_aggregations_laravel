<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if($param1 != $param2)
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">
                                @if($param1 == 'project_id')
                                <a class="link-warning" href="{{ route('project') }}">Project</a>
                                @elseif($param1 == 'employee_id')
                                <a class="link-warning" href="{{ route('employee') }}">Employee</a>
                                @elseif($param1 == 'date')
                                <a class="link-warning" href="{{ route('date') }}">Date</a>
                                @endif
                            </th>
                            <th scope="col">
                                @if($param2 == 'project_id')
                                <a class="link-warning" href="{{ route('project') }}">Project</a>
                                @elseif($param2 == 'employee_id')
                                <a class="link-warning" href="{{ route('employee') }}">Employee</a>
                                @elseif($param2 == 'date')
                                <a class="link-warning" href="{{ route('date') }}">Date</a>
                                @endif
                            </th>
                            <th scope="col">Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($param1 == 'project_id' && $param2 == 'employee_id')
                            @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->project->name }}</td>
                                <td>{{ $activity->employee->name }}</td>
                                <td>{{ $activity->hours }}</td>
                            </tr>
                            @endforeach
                        @elseif($param1 == 'employee_id' && $param2 == 'project_id')
                            @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->employee->name }}</td>
                                <td>{{ $activity->project->name }}</td>
                                <td>{{ $activity->hours }}</td>
                            </tr>
                            @endforeach
                        @elseif($param1 == 'project_id' && $param2 == 'date')
                            @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->project->name }}</td>
                                <td>{{ $activity->date }}</td>
                                <td>{{ $activity->hours }}</td>
                            </tr>
                            @endforeach
                        @elseif($param1 == 'employee_id' && $param2 == 'date')
                            @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->employee->name }}</td>
                                <td>{{ $activity->date }}</td>
                                <td>{{ $activity->hours }}</td>
                            </tr>
                            @endforeach
                        @elseif($param1 == 'date' && $param2 == 'project_id')
                            @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->date }}</td>
                                <td>{{ $activity->project->name }}</td>
                                <td>{{ $activity->hours }}</td>
                            </tr>
                            @endforeach
                        @elseif($param1 == 'date' && $param2 == 'employee_id')
                            @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->date }}</td>
                                <td>{{ $activity->employee->name }}</td>
                                <td>{{ $activity->hours }}</td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                @else
                <h2 class="text-warning">Selezionare due parametri diversi: </h2>
                @endif
            </div>
        </div>
    </div>
</x-layout>