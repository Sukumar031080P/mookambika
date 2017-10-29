@extends('layouts.admin')
@section('content')
    @include('admin.includes._bs_errors', ['errors' => $errors])
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <h5>Edit A Section
                        </h5>
                        <a href="{{ route('sections') }}" class="btn btn-primary btn-xs">Back To List</a>
                        <a href="{{ route('sections.create') }}" class="btn btn-primary btn-xs">Add A Section</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('sections.update', ['id' => $section->id]) }}" method="post"
                          class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}"><label
                                    class="col-sm-2 control-label required">Title</label>

                            <div class="col-sm-4"><input name="title" type="text" class="form-control"
                                                         value="{{ old('title', $section->title) }}"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white">
                                    <a href="{{route('sections')}}">
                                        Cancel
                                    </a>
                                </button>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection