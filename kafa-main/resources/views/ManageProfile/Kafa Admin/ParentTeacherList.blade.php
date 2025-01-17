@extends('ManageRegistration.Kafa Admin.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Parents</h3>
                    </div>
                    <div class="card-body">
                        <div class="list-group" id="parentList">
                            @foreach ($parents as $parent)
                                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    <span>{{ $parent->name }}</span>
                                    <div class="btn-group" role="group" aria-label="Parent Actions">
                                        <a href="{{ route('profile.editParent', $parent->id) }}" class="btn btn-primary mr-2">Edit</a>
                                        <form action="{{ route('profile.delete', $parent->id) }}" method="POST" id="deleteForm{{ $parent->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $parent->id }})">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Teachers</h3>
                    </div>
                    <div class="card-body">
                        <div class="list-group" id="teacherList">
                            @foreach ($teachers as $teacher)
                                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    <span>{{ $teacher->name }}</span>
                                    <div class="btn-group" role="group" aria-label="Teacher Actions">
                                        <a href="{{ route('profile.editTeacher', $teacher->id) }}" class="btn btn-primary mr-2">Edit</a>
                                        <form action="{{ route('profile.delete', $teacher->id) }}" method="POST" id="deleteForm{{ $teacher->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $teacher->id }})">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this user?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>
@endsection
