<form action="{{ route('records.store') }}" method="POST">
    {{csrf_field()}}
    <input type="text" name="question_id" value="1">
    <input type="text" name="isRight">
    <button type="submit">test</button>
</form>
<script>
</script>