<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col"><a class="link-warning" href="{{ route('project') }}">Project</a></th>
                            <th scope="col"><a class="link-warning" href="{{ route('employee') }}">Employee</a></th>
                            <th scope="col"><a class="link-warning" href="{{ route('date') }}">Date</a></th>
                            <th scope="col">Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($activities as $activity)
                        <tr>
                            <td scope="row">{{ $activity->project->name }}</td>
                            <td>{{ $activity->employee->name }}</td>
                            <td>{{ $activity->date }}</td>
                            <td>{{ $activity->hours }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</x-layout>
    

