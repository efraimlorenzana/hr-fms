<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="records">
                <table class="records__table table table-hover table-dark">
                    @if ($records != null)
                    @if ($records->count() > 0)
                    @foreach ($records as $record)
                    <tr class="records__table--row">
                        <td class="records__table--col records__table--col-filename">
                            {{$record->file_name}}
                        </td>
                        <td class="records__table--col records__table--col-btn records__table--col-view">
                            <a href="/File/view?id={{$record->id}}" class="records__table--col-link">
                                <i class="far fa-folder-open fa-2x text-success"></i>
                            </a>
                        </td>
                        <td class="records__table--col records__table--col-btn records__table--col-download">
                            <a href="/File/download?id={{$record->id}}" class="records__table--col-link">
                                <i class="fas fa-download fa-2x text-primary"></i>
                            </a>
                        </td>
                        <td class="records__table--col records__table--col-btn records__table--col-delete">
                            <a onclick="deleteRecord({{$record->id}})" href="#" class="records__table--col-link">
                                <i class="fas fa-trash-alt fa-2x text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="records__table--col records__table--col-norecord" colspan="4">No Records Found</td>
                    </tr>
                    @endif
                    @else
                    <tr>
                        <td class="records__table--col records__table--col-norecord" colspan="4">No Records Found</td>
                    </tr>
                    @endif
                    
                </table>
            </div>
        </div>
        
        <div class="col-lg-3">
            <form id="formUpload" action="/File/upload" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="upload">
                    <div class="upload__icon">
                        <label for="upload">
                            <i class="fas fa-cloud-upload-alt upload__icon--file"></i>
                        </label>
                        <input type="text" name="file_id" value="{{$file_id}}" hidden>
                        <input type="text" name="emp_id" value="{{$emp_id}}" hidden>
                        <div class="upload__browse">
                            <input name="file" oninput="uploadFile(event)" id="upload" type="file" class="upload__browse--input">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
