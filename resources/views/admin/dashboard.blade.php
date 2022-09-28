@extends('layouts.admin') {{-- resource > view > layouts > admin.blade.php --}}

@section('content')


    {{-- <form action="{{ route('update',$items->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="form-group">
               <a href="{{ url('home') }}" class="btn btn-primary">Back</a>
            </div>

            <div class="form-group">
                <label for="text1">Text1</label>
                <input type="text" name="text1" id="text1" class="form-control" value="{{ $items->text1 ?? 'text1 not found' }}" />
            </div>

            <div class="form-group">
                <label for="image1">Image 1</label>
                <input type="file" name="images[]" id="image1" class="form-control" accept="image/png, image/jpeg" value="{{ $items->image1 }}" />
                <img src="/productImages/{{ $items->image1 }}" width="200px" alt="img1" />
            </div>

            <div class="form-group">
                <label for="image2">Image 2</label>
                <input type="file" name="images[]" id="image2" class="form-control" accept="image/png, image/jpeg" placeholder={{ $items->image2 }} />
                <img src="/productImages/{{ $items->image2 }}" width="200px" alt="img2" />
            </div>

            <div class="form-group">
                <label for="image3">Image 3</label>
                <input type="file" name="images[]" id="image3" class="form-control" accept="image/png, image/jpeg" placeholder={{ $items->image3 }} />
                <img src="/productImages/{{ $items->image3 }}" width="200px" alt="img3" />
            </div>

            <div class="form-group">
                <label for="image4">Image 4</label>
                <input type="file" name="images[]" id="image4" class="form-control" accept="image/png, image/jpeg" placeholder={{ $items->image4 }} />
                <img src="/productImages/{{ $items->image4 }}" width="200px" alt="img4" />
            </div>

            <div class="form-group">
                <label for="image5">Image 5</label>
                <input type="file" name="images[]" id="image5" class="form-control" accept="image/png, image/jpeg" placeholder={{ $items->image5 }} />
                <img src="/productImages/{{ $items->image5 }}" width="200px" alt="img5" />
            </div>

            <div class="form-group">
                <label for="image6">Image 6</label>
                <input type="file" name="images[]" id="image6" class="form-control" accept="image/png, image/jpeg" placeholder={{ $items->image6 }} />
                <img src="/productImages/{{ $items->image6 }}" width="200px" alt="img6" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Change</button>
            </div>

    </form> --}}

    {{-- <div class="mb-3">
        <h2 class="text-center">Change Items</h2>
    </div> --}}

    <form action="{{ route('update',$items->id) }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-sm-12">
                <div class="form-group">
                <label class="control-label col-sm-12"><h3>Banner Text</h3></label>
                <div class="col-sm-10">
                    <textarea type="text" name="text1" id="text1" class="form-control" rows="2">{{ $items->text1 ?? 'text1 not found' }}</textarea>
                </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label class="control-label col-sm-12"><h3>Banner Image 1</h3></label>
                    <div class="col-sm-8">
                        {{-- <input type="text" class="form-control"> --}}
                        <input type="file" name="images[]" id="image1" class="form-control" accept="image/png, image/jpeg" value="" />
                        <img src="/productImages/{{ $items->image1 }}" width="200px" alt="img1" />
                    </div>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label col-sm-12"><h3>Banner Image 2</h3></label>
                    <div class="col-sm-12">
                        {{-- <input type="text" class="form-control"> --}}
                        <input type="file" name="images[]" id="image2" class="form-control" accept="image/png, image/jpeg" value={{ old('image.0', $items->image2) }} />
                        <img src="/productImages/{{ $items->image2 }}" width="200px" alt="img2" />
                    </div>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label col-sm-12"><h3>Banner Image 3</h3></label>
                    <div class="col-sm-8">
                        {{-- <input type="text" class="form-control"> --}}
                        <input type="file" name="images[]" id="image3" class="form-control" accept="image/png, image/jpeg" value={{ $items->image3 }} />
                        <img src="/productImages/{{ $items->image3 }}" width="200px" alt="img3" />
                    </div>
                </div>

            </div>

            <div class="col-sm-6">
                <div class="form-group">
                <label class="col-sm-12 control-label">Contract Start Date</label>
                <div class="col-sm-8">
                    {{-- <input type="text" class="date-start ml-5 form-control datepicker" placeholder="Date Start"> --}}
                    <textarea name="text2" id="text2" class="form-control" rows="8">{{ $items->text2 }}</textarea>
                </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                <label class="col-sm-12 control-label">Contract Expiry Date</label>
                <div class="col-sm-8">
                    {{-- <input type="text" class="date-end ml-5 form-control datepicker col-sm-8" placeholder="Date End"> --}}
                    <textarea name="text3" id="text3" class="form-control" rows="8">{{ $items->text3 }}</textarea>
                </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                <label class="col-sm-12 control-label">Minimum Loan Amount</label>
                <div class="col-sm-8">
                    {{-- <input type="text" class="form-control"> --}}
                    <textarea name="text4" id="text4" class="form-control" rows="8">{{ $items->text4 }}</textarea>
                </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                <label class="col-sm-12 control-label">Maximum Loan Amount</label>
                <div class="col-sm-8">
                    {{-- <input type="text" class="form-control"> --}}
                    <textarea name="text5" id="text5" class="form-control" rows="8">{{ $items->text5 }}</textarea>
                </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label class="control-label col-sm-12"><h3>Product Image 1</h3></label>
                    <div class="col-sm-8">
                        {{-- <input type="text" class="form-control"> --}}
                        <input type="file" name="images[]" id="image4" class="form-control" accept="image/png, image/jpeg" value={{ $items->image4 }} />
                        <img src="/productImages/{{ $items->image4 }}" width="200px" alt="img4" />
                    </div>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label col-sm-12"><h3>Product Image 2</h3></label>
                    <div class="col-sm-12">
                        {{-- <input type="text" class="form-control"> --}}
                        <input type="file" name="images[]" id="image5" class="form-control" accept="image/png, image/jpeg" value={{ $items->image5 }} />
                        <img src="/productImages/{{ $items->image5 }}" width="200px" alt="img5" />
                    </div>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label col-sm-12"><h3>Product Image 3</h3></label>
                    <div class="col-sm-8">
                        {{-- <input type="text" class="form-control"> --}}
                        <input type="file" name="images[]" id="image6" class="form-control" accept="image/png, image/jpeg" value={{ $items->image6 }} />
                        <img src="/productImages/{{ $items->image6 }}" width="200px" alt="img6" />
                    </div>
                </div>

            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label col-sm-10"><h3>Portfolio Text</h3></label>
                    <div class="col-sm-10">
                        <textarea type="text" name="text6" id="text6"  class="form-control" rows="4">{{ $items->text6 }}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <a href="{{ url('home') }}" class="btn btn-primary">Back</a>

                <button class="btn btn-primary waves-effect waves-light float-end" id="btn-submit">Save</button>

            </div>

            <input type="hidden" name="action" id="action" value="event_dialog_add_newpartnerdata" />

        </div>
    </form>
    <script>document.foo.submit();</script>

@endsection

