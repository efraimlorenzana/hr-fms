<form action="/File/delete/{{$record_to_delete->id}}" method="POST">
    {{ csrf_field() }}
    <div class="delete">
        <div class="delete__message">
            Are you sure you want to delete this record? 
            <strong>{{$record_to_delete->file_name}}</strong>
        </div>
        {{-- <input type="text" name="record_id" value> --}}
            <a href="#" onclick="backToRecord(event, {{$emp_file->employee_id}}, {{$emp_file->file_id}})" class="delete__button--no c_btn c_btn--secondary">
                Cancel
            </a>

            <button type="submit" class="delete__button--yes c_btn c_btn--primary">
                Proceed
            </button>
        </div>
    </div>
</form>