<form action="{{ route('collections.store') }}" method="POST">
    {{csrf_field()}}
    <input type="text" name="question_id" value="1">
    <button type="submit">test</button>
</form>
<script>
</script>