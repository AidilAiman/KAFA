@extends('ManageRegistration.Kafa Admin.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit User Detail</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ isset($parent) ? route('parent.update', $parent->id) : route('teacher.update', $teacher->id) }}">


                            @csrf
                            @method('PUT')

                            @if (isset($parent))
                                <h5>Edit Parent Details</h5>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $parent->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="parentIC">Parent IC</label>
                                    <input type="text" class="form-control" id="parentIC" name="parentIC"
                                        value="{{ $parent->parentIC }}">
                                </div>
                                <div class="form-group">
                                    <label for="phoneNo">Phone No</label>
                                    <input type="text" class="form-control" id="phoneNo" name="phoneNo"
                                        value="{{ $parent->phoneNo }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ $parent->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="relation">Relation</label>
                                    <input type="text" class="form-control" id="relation" name="relation"
                                        value="{{ $parent->relation }}">
                                </div>
                            @endif

                            @if (isset($teacher))
                                <h5>Edit Teacher Details</h5>
                                <div class="form-group">
                                    <label for="fullname">Fullname</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        value="{{ $teacher->fullname }}">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="text" class="form-control" id="gender" name="gender"
                                        value="{{ $teacher->gender }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ $teacher->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="educationLevel">Education Level</label>
                                    <input type="text" class="form-control" id="educationLevel" name="educationLevel"
                                        value="{{ $teacher->educationLevel }}">
                                </div>
                            @endif

                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ route('profile.ParentTeacherList') }}"
                                class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
