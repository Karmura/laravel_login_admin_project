@extends('layouts.admin')

@section('content')

<form action="admin/dashboardupdate{{ $i[0]->id }}" method="POST" enctype="multipart/form-data">
    {{-- {{ url('admin/dashboardupdate'.$i[0]->id) }} --}}
    @csrf

    <div class="form-group">
        <label for="text1">Text 1</label>
        <input type="text" name="text1" id="text1" class="form-control" value="{{ $i[0]->text1 }}" />
    </div>

    <div class="form-group">
        <label for="image1">Image 1</label>
        <input type="file" name="image1" class="form-control" />
    </div>
{{--
    <div class="form-group">
        <label for="image1">Image 1</label>
        <input type="file" name="image1" class="form-control" />
    </div>

    <div class="form-group">
        <label for="image2">Image 2</label>
        <input type="file" name="image2" class="form-control" />
    </div>

    <div class="form-group">
        <label for="image3">Image 3</label>
        <input type="file" name="image3" class="form-control" />
    </div>

    <div class="form-group">
        <label for="logotext1">Logo Text 1</label>
        <input type="text" name="logotext1" class="form-control" value="{{ $item['logotext1'] }}" />
    </div>

    <div class="form-group">
        <label for="logotext2">Logo Text 2</label>
        <input type="text" name="logotext2" class="form-control" value="{{ $item['logotext2'] }}" />
    </div>

    <div class="form-group">
        <label for="logotext3">Logo Text 3</label>
        <input type="text" name="logotext3" class="form-control" value="{{ $item['logotext3'] }}" />
    </div>

    <div class="form-group">
        <label for="logotext4">Logo Text 4</label>
        <input type="text" name="logotext4" class="form-control" value="{{ $item['logotext4'] }}" />
    </div>

    <div class="form-group">
        <label for="text2">Text 2</label>
        <input type="text" name="text2" class="form-control" value="{{ $item['text2'] }}" />
    </div>

    <div class="form-group">
        <label for="text3">Text 3</label>
        <input type="text" name="text3" class="form-control" value="{{ $item['text3'] }}" />
    </div>

    <div class="form-group">
        <label for="text4">Text 4</label>
        <input type="text" name="text4" class="form-control" value="{{ $item['text4'] }}" />
    </div>

    <div class="form-group">
        <label for="text5">Text 5</label>
        <input type="text" name="text5" class="form-control" value="{{ $item['text5'] }}" />
    </div>

    <div class="form-group">
        <label for="text6">Text 6</label>
        <input type="text" name="text6" class="form-control" value="{{ $item['text6'] }}" />
    </div> --}}

    <div class="form-group">
        <button type="submit" class="btn btn-success">Confirm Update</button>
    </div>

    <div class="form-group">
        <a href="{{ url('admin/dashboard') }}" class="btn btn-success">Go Back</a>
    </div>


</form>

@endsection
